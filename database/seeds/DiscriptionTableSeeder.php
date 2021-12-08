<?php

use Illuminate\Database\Seeder;

class DiscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discription')->insert([
            'karte_id' => 1,
            'discription' => '双極性障害の鬱症状治療薬。食後服薬。リチウム中毒に注意する。', 
        ]);    
        DB::table('discription')->insert([
            'karte_id' => 2,
            'discription' => '双極性障害の鬱症状治療薬。睡眠誘導効果にも期待。食後服薬。',
        ]);    
        DB::table('discription')->insert([
            'karte_id' => 3,
            'discription' => '双極性障害の鬱症状治療薬。食後に服薬。',
        ]);    
        DB::table('discription')->insert([
            'karte_id' => 4,
            'discription' => '睡眠障害改善剤。食後2時間をあけ、就寝前に服薬。',
        ]);    
        DB::table('discription')->insert([
            'karte_id' => 5,
            'discription' => 'リチウムの副作用(振戦)を防ぐβブロッカー薬',
        ]);    
        DB::table('discription')->insert([
            'karte_id' => 6,
            'discription' => '持続性心身安定剤。神経症における不安・緊張・抑うつ・睡眠障害に効果。食後服用。',
        ]);
        DB::table('discription')->insert([
            'karte_id' => 7,
            'discription' => '注意欠陥/多動性障害（AD/HD）治療薬。朝食後服用。',
        ]);
    }
}
