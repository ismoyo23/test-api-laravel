<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\tbl_product;
use \App\Models\tbl_category;
use \App\Models\tbl_detail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    tbl_category::factory(9)->create();

    tbl_detail::factory(50)->create();

    tbl_product::factory(50)->create();
    }
}
