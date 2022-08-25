<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'email_verified_at',
        'have_storage_library',
        'is_welcomed',
        'password',
        'profile_photo_url',
        'uniqueId',
        'approve',
        'birthday',
        'gender',
        'phone',
        'address',
        'city',
        'country',
        'zip',
        'used_storage_library',
        'have_storage_library'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function taskCategorys()
    {
        return $this->hasMany(Taskcategory::class)->latest();
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function imagelibraries()
    {
        return $this->hasMany(Imagelibrary::class,'person_id')->latest();
    }

    public function videolibrarys()
    {
        return $this->hasMany(Videolibrary::class,'person_id');
    }

    public function notes()
    {
        return $this->hasMany(Videonote::class,'userID');
    }

    public function accessInfo()
    {
        return $this->hasMany(AccessInfo::class,'user_id');
    }
}
