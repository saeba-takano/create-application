<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            'prefecture_name' => '大阪府',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
    }
}
