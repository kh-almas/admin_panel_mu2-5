<?php

namespace Database\Seeders;

use App\Models\Videonote;
use Illuminate\Database\Seeder;

class videoNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videonote::factory()->times(20)->create();
    }
}
