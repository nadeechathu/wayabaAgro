<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('zones')->truncate();


        $csvFile = fopen(public_path("csvs/zones.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
               
                DB::table('zones')->insert([
                    "zone_name" => $data['0'],
                    "zip_code" => $data['1'],
                    "zone_description" => $data['2'],
                    "shipping_cost" => $data['3'],
                    "weight_margin" => $data['4'],
                    "minimum_cost" => $data['5']
                    
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
