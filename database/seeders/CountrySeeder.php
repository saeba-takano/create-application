<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('countries')->insert([
            'country_name' => 'Japan',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
    }
}
