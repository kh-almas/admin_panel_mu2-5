<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
        $this->call(userSeeder::class);
        $this->call(Taskcategory::class);
        $this->call(Task::class);
        $this->call(RoleSeeder::class);
//        $this->call(SettingsSeeder::class);
        $this->call(permissionSeeder::class);
        $this->call(roleUserSeeder::class);
        $this->call(permissionRole::class);
        $this->call(imageLibrarySeeder::class);
        $this->call(videoLibrarySeeder::class);
        $this->call(videoNotesSeeder::class);
    }
}
