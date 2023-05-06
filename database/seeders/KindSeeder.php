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
            'kind_name' => 'スピリッツ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => 'ワイン',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
            
        DB::table('kinds')->insert([
            'kind_name' => '日本酒',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => '焼酎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => 'ビール',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => '梅酒',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => '果実酒',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
             
        DB::table('kinds')->insert([
            'kind_name' => 'リキュール',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => 'カクテル',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
               
        DB::table('kinds')->insert([
            'kind_name' => 'その他',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
               ]);
    }
}
