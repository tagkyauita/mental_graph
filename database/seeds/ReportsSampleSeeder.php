<?php

use Illuminate\Database\Seeder;
use App\Report;

class ReportsSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => 0,
            'note' => "朝散歩15分,睡眠時間6時間,夜に缶チューハイを3缶",
            'created_at' => '21/11/7',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => -1,
            'note' => "朝散歩15分,睡眠時間3時間(中途覚醒),2度寝4時間,クリニックにてカウンセリング(渡辺先生),血液検査",
            'created_at' => '21/11/9',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => -2,
            'note' => "睡眠時間0時間,過覚醒が続いたためYouTubeを見るなどしていた,夜に不安が強くなったためロラゼパム5mg*2錠服薬",
            'created_at' => '21/11/10',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => -1,
            'note' => "朝散歩20分,睡眠時間4時間(中途覚醒),クアゼパムは合わないのかもしれない",
            'created_at' => '21/11/12',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => -1,
            'note' => "朝散歩15分,睡眠時間6時間,1日中頭にモヤがかかったような日だった,何もせず過ごした",
            'created_at' => '21/11/13',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => 1,
            'note' => "朝散歩15分,睡眠時間5時間,旧友から連絡があり長電話をした,すこし気持ちがすっきりした",
            'created_at' => '21/11/14',
            'updated_at' => now(),
        ]); 
        DB::table('reports')->insert([
            'user_id' => 1,
            'feeling' => -1,
            'note' => "雨のため朝散歩はしなかった,低気圧のせいか体調が悪い,自律神経失調気味,動悸あり,心拍数も120を越え続けている",
            'created_at' => '21/11/15',
            'updated_at' => now(),
        ]); 
            
    }
}
