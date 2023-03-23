<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Taskcategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Taskcategory::factory()->times(150)->create();
    }
}
