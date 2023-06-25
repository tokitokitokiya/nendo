<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\apl;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    // DB::table('テーブル名')->insert(['カラム名' => 'データ' ] );
    // use Illuminate\Support\Facades\DB;　を追記
    // use DateTime;　を追記

    public function run()
    {
        DB::table('shops')->insert([
                'name' => 'かね利',
         ]);
        DB::table('shops')->insert([
                'name' => '浅岡',
         ]);
        DB::table('shops')->insert([
                'name' => '丸石',
         ]);
        
        DB::table('items')->insert([
            'shop_id'=>1,
            'name'=>'アイテム1',
            'price'=>1000,
        ]);
        
        DB::table('items')->insert([
            'shop_id'=>1,
            'name'=>'アイテム1-2',
            'price'=>1500,
        ]);
        
        DB::table('items')->insert([
            'shop_id'=>'2',
            'name'=>'アイテム2',
            'price'=>2000,
        ]);
        
        DB::table('items')->insert([
            'shop_id'=>2,
            'name'=>'アイテム2-2',
            'price'=>2500,
        ]);
        
        DB::table('items')->insert([
            'shop_id'=>3,
            'name'=>'アイテム3',
            'price'=>3000,
        ]);
        
        DB::table('items')->insert([
            'shop_id'=>3,
            'name'=>'アイテム3-3',
            'price'=>3500,
        ]);
        
        DB::table('orders')->insert([
            'user_id'=>1,
            'item_id'=>1,
            'pcs'=>3,
            'season'=>new DateTime(),
        ]);
        
        DB::table('orders')->insert([
            'user_id'=>1,
            'item_id'=>3,
            'pcs'=>5,
            'season'=>new DateTime(),
        ]);
        
        DB::table('orders')->insert([
            'user_id'=>1,
            'item_id'=>3,
            'pcs'=>5,
            'season'=>new DateTime(),
        ]);
        
        DB::table('orders')->insert([
            'user_id'=>1,
            'item_id'=>4,
            'pcs'=>10,
            'season'=>new DateTime(),
        ]);
    }
}