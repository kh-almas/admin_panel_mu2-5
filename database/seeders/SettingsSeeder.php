<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'registration' => 1,
            'maintenance' => 0,
            'permit_library' => 1,
            'user_approve' => 1,
            'storage_limit' => 524288000,
            'new_user_role' => 'User',
        ]);
    }
}
