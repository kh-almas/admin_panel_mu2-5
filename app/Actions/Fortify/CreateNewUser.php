<?php

namespace App\Actions\Fortify;

use App\Helpers\Helper;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $unique_id = Helper::RandomNumber(new User,'uniqueId',10,4, 'USR');
        $settings = Settings::where('id',1)->firstOrFail();
        if($settings->user_approve === 0)
        {
            $is_approve = 0;
        }else{
            $is_approve = 1;
        }

        return User::create([
            'name' => $input['name'],
            'uniqueId' => $unique_id,
            'email' => $input['email'],
            'is_welcomed' => 0,
            'approve' => $is_approve,
            'password' => Hash::make($input['password']),
        ]);
    }
}
