<?php

namespace Database\Seeders;

use App\Models\Videolibrary;
use Illuminate\Database\Seeder;

class videoLibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videolibrary::factory()->times(100)->create();
    }
}
