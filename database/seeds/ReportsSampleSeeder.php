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
        //気分値の初期値を設定
        $feelings = 0;
        //備考欄の初期値を設定
        $notes = "";

        for($i = 0; $i < 7; $i++)
        {
            //気分ダミー値生成
            $feelings = rand(-5, 5);
            //備考欄ダミー文生成
            $notes = Str::random(15);
            //上記を配列化
            $data =
            [
                'user_id' => 1,
                'feeling' => $feelings,
                'note' => $notes,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            //保存実行
            DB::table('reports')->insert($data);
        }
    }
}
