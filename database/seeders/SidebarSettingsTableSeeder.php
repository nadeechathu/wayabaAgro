<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SidebarSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('sidebar_settings')->truncate();

        DB::table('sidebar_settings')->insert([
            'users' => 1,
            'products' => 1,
            'inventory' => 1,
            'categories' => 1,
            'tags' => 1,
            'all_orders' => 1,
            'posts' => 1,
            'marketing' => 1,
            'web_pages' => 1,
            'zones' => 1,
            'promotions' => 1,
            'advertisement' => 1,
            'inquiries' => 1,
        ]);

    }
}
