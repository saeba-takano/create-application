<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kinds')->insert([
            'kind_name' => 'ウイスキー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
        
        DB::table('kinds')->insert([
            'kind_name'=>'ウォッカ',
            'created_at'=> new DateTime(),
            'updated_at'=>new Datetime(),
            ]);
    }
}
