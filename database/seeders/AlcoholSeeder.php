<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AlcoholSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
    public function run()
    {
        DB::table('alcohols')->insert([
                'alcohol_name' => '山崎',
                'vote_average' => 4,
                'introduction' => 'やわらかく華やかな香り、甘くなめらかな味わい。
                山崎の伝統であるミズナラ樽貯蔵モルトと、革新のワイン樽貯蔵モルトをはじめとした様々な山崎モルトが出会うことで生まれた山崎です。
                やわらかく華やかな香りに潜むイチゴのような香りはワイン樽熟成モルト原酒がもたらし、甘く煌めくような、なめらかな広がりはミズナラ樽熟成モルト原酒が加わることによって生まれる。',
                'purchase_URL' => 'https://www.amazon.co.jp/山崎-サントリー-シングルモルト-700ml/dp/B00840PFCQ',
                'degree' => 43,
                'kind_id' => 1,
                'country_id'=> 1,
                'prefecture_id'=> 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
