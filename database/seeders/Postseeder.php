<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('posts')->insert([
               
            'title'=>'シーダーで改行する方法',
            'body'=>"・ダブルクォーテーションで囲む\n・バックスラッシュ＋nで区切る\n・bladeファイルの変数を{!! nl2br(e(変数)) !!}にする"
            
             ]);
             
             DB::table('posts')->insert([
               
            'title'=>'雨のやなとこ',
            'body'=>"・頭が痛くなる\n・気持ちが落ち込む\n・靴がびしゃびしゃになる"
            
             ]);
    }
}
