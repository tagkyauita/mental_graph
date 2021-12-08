<?php

use Illuminate\Database\Seeder;

class KartenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => '炭酸リチウム錠 200mg 3錠',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ビプレッソ徐放剤 50mg 0.5錠',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ラツーダ錠 20mg 2錠',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'クアゼパム錠 15mg 2錠',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'インデラル錠 10mg 2錠',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ロフラゼプ酸エチル錠 1mg 2錠',
        ]);
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'コンサータ錠 36mg 2錠',
        ]);
    }
}
