<?php

namespace Database\Seeders;

use App\Models\Imagelibrary;
use Illuminate\Database\Seeder;

class imageLibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageLibrary::factory()->times(500)->create();
    }
}
