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
            'discription' => '双極性障害の鬱症状治療薬。食後服薬。リチウム中毒に注意する。', 
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ビプレッソ徐放剤 50mg 0.5錠',
            'discription' => '双極性障害の鬱症状治療薬。睡眠誘導効果にも期待。食後服薬。',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ラツーダ錠 20mg 2錠',
            'discription' => '双極性障害の鬱症状治療薬。食後に服薬。',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'クアゼパム錠 15mg 2錠',
            'discription' => '睡眠障害改善剤。食後2時間をあけ、就寝前に服薬。',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'インデラル錠 10mg 2錠',
            'discription' => 'リチウムの副作用(振戦)を防ぐβブロッカー薬',
        ]);    
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'ロフラゼプ酸エチル錠 1mg 2錠',
            'discription' => '持続性心身安定剤。神経症における不安・緊張・抑うつ・睡眠障害に効果。食後服用。',
        ]);
        DB::table('karten')->insert([
            'user_id' => 1,
            'medicine' => 'コンサータ錠 36mg 2錠',
            'discription' => '注意欠陥/多動性障害（AD/HD）治療薬。朝食後服用。',
        ]);
    }
}
