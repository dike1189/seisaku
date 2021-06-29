<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageBlocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PageBlocks::factory(10)->create();
    }
}
