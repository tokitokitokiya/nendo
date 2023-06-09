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
        
        $list = [
            '特練A',
            1950,
            '特練A2号',
            1950,
            '特練B',
            1950,
            '特練B2号',
            1950,
            '古陶大',
            1950,
            '古小',
            1950,
            'ひいろ水ヒ',
            3400,
            '伊賀荒',
            2400,
            '伊賀細',
            2400,
            '練土',
            1850,
            '練14目',
            1700,
            '陶板',
            1700,
            '上信楽',
            1800,
            '並侅楽',
            1700,
            '土鍋A',
            1750,
            '土鍋B',
            1850,
            '赤土鍋',
            1950,
            '耐熱鋼白',
            3400,
            '耐熱鍋赤',
            3400,
            '赤土1号',
            1950,
            '赤土2号',
            1850,
            '赤土3号',
            1850,
            '赤4号',
            1950,
            '赤土6号',
            1950,
            '赤丄7号',
            2100,
            '赤土8号',
            1950,
            '赤土9号',
            2100,
            '赤土10号',
            2100,
            '赤土11号A',
            1950,
            '赤土11号A-2',
            1950,
            '赤土11号B',
            1950,
            '赤土12号',
            2200,
            '赤土14号',
            1950,
            '赤土15号',
            1950,
            '赤土21号',
            2200,
            'テラコッタ',
            1850,
            '楽白',
            1950,
            '楽赤',
            1950,
            '水ヒ',
            2400,
            '水ヒB',
            2400,
            '上水ヒ',
            2400,
            '赤水ヒ',
            2400,
            '木節粉末',
            2900,
            '童仙房粉末',
            2900,
            '道具A',
            1700,
            '道具B',
            1800,
            '上道具',
            2100,
            '篠原白',
            5300,
            '篠原赤',
            4800,
            '萩風',
            2400,
            '仁滑',
            2700,
            '磁器',
            2200,
            '志野白',
            2400,
            '志野赤',
            2400,
            'もぐさ',
            9000,
            '萩',
            5400,
            '備前',
            5400,
            '特線A2号1kg入',
            2350,
            '赤土1号1kg入',
            2350,
            'テラコッタ1kg入',
            2250,
            '並信楽1kg入',
            2200
        ];

        $count = count($list);
        
        for ($i = 0; $i < $count; $i += 2) {
            $itemName = $list[$i];
            $price = $list[$i + 1];
            
            DB::table('items')->insert([
                'shop_id' => 1,
                'name' => $itemName,
                'price' => $price,
            ]);
        }
        
        $list2 = [
            '特練土B',
            2720,
            '古陶大',
            2600,
            '古陶小',
            2710,
            '楽白土',
            2710,
            '耐熱鍋土',
            4910,
            '特こし土',
            2170,
            '特こし土',
            2070,
            '信楽水簸土',
            3480,
            '楽赤土',
            2820,
            '赤耐熱鍋土',
            5240,
            '赤1号土',
            2600,
            '赤3号土',
            2600,
            '赤5号土',
            2650,
            '赤7号土',
            3010,
            '赤9号土',
            3200,
            'テラコッタ粘土',
            2600,
            '磁器土',
            3180,
            '半磁器土',
            2490,
            '新志野土',
            2890,
            '新志野赤土',
            3300,
            '本備前2号',
            5320,
            '道具土B',
            2830,
            '万古赤土',
            2490,
            '古万古土白',
            1940,
            '古万古土赤',
            2050,
            '古万古土特',
            2820,
            '伊賀土細目',
            2600,
            '伊賀土荒目',
            2590,
            '伊賀土赤',
            2760,
            '近江土赤',
            3260,
            '近江土黄',
            3380,
            '近江士グレー',
            3300,
            'ロット土',
            2820,
            '半磁器·並土',
            2270,
            '上志野土(もぐさ)',
            3700,
            '黒泥',
            4560,
            '黑ミカゲ土荒目',
            4560,
            '並こし赤土',
            2270,
            '赤水簸土',
            3470,
            '赤津貫入土',
            2650,
            '信楽上水簸土',
            3590,
            '朱泥土',
            2930,
            '黒ミカゲ土細目',
            4560,
            '美濃赤土',
            2270,
            '赤2号土',
            2570,
            '益子風赤',
            2380,
            '白ミカゲ土荒目',
            3530,
            '白ミカゲ土細目',
            3530,
            '白信楽土',
            3440,
            '手びねり土白',
            2590,
            '手びねり土赤',
            2590,
            '浅岡大物土',
            2620,
            '栗茶土',
            3040,
            '白荒土S',
            2270,
            'いぶし土',
            2990,
            'テラコッタ1kg×20',
            3300,
            '特練土1kg×20',
            3300,
            '赤1号土1kgx20',
            3300,
            '並こし土1kgx20',
            3300,
            '古陶大10kg',
            1830,
            '古陶小10kg',
            1900,
            '信楽水簸土10kg',
            2400,
            '赤１号土10kg',
            1830,
            '赤５号土10kg',
            1860,
            'テラコッタ粘土10kg',
            1830,
            '半磁器土特10kg',
            1760,
            '新志野土10kg',
            2020,
            '新志野赤土10kg',
            2290,
            '本備前2号10kg',
            2860,
            '古万古土白10kg',
            1400,
            '古万古土赤10kg',
            1470,
            '伊賀土細目10kg',
            1830,
            '笠間土10kg',
            1750,
            '益子風赤10kg',
            1690,
            '栗茶土10kg',
            2120,
            'いぶし土10kg',
            2080,
            ];

            for ($i = 0; $i < count($list2); $i += 2) {
                $name = $list2[$i];
                $price = $list2[$i + 1];
                DB::table('items')->insert([
                    'shop_id' => 2,
                    'name' => $name,
                    'price' => $price,
                ]);
            }
        
        $list3 = [
            '白磁100プレスケーキ',
            4840,
            '白磁100泥漿',
            7150,
            '白磁50プレスケーキ',
            3410,
            '白磁50真空土練機掛',
            3980,
            '白磁50泥漿',
            5720,
            'SP-4プレスケーキ',
            3300,
            'SP-4真空土練機掛',
            4180,
            'SP-4泥漿',
            5610,
            '蛙目入SP-4',
            3630,
            '蛙目入SP-4真空土練機掛',
            4180,
            'SP-10プレスケーキ',
            2090,
            'SP-10真空土練機掛',
            2640,
            'SP-10泥漿',
            4400,
            'Cプレス30kg',
            2200,
            'Cプレス20kg',
            1540,
            'C真空土練機掛',
            2090,
            '特級プレス30kg',
            5995,
            '特級プレス20kg',
            4070,
            '特級真空土練機掛',
            4620,
            'ニューボンプレス20kg',
            4290,
            'ニューボン真空土種機掛',
            4840,
            'ニューボン泥漿',
            6600,
            'ストンNO5プレスケーキ',
            2970,
            'ストンNO5泥漿',
            3520,
            'ストンNO７プレスケーキ',
            2970,
            '瀬戸土黄真空土練機掛',
            2750,
            'あらめ瀬戸土真空土練',
            2860,
            'タルク釉',
            1980,
            '石灰釉',
            1980,
            'OF-H酸化燒成釉',
            3300,
            '挂曹',
            440,
            'プライマル',
            880
        ];

        $count3 = count($list3);
        
        for ($i = 0; $i < $count3; $i += 2) {
            $itemName = $list3[$i];
            $price = $list3[$i + 1];
            
            DB::table('items')->insert([
                'shop_id' => 3,
                'name' => $itemName,
                'price' => $price,
            ]);
        }
        
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