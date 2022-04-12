<?php

use Illuminate\Database\Seeder;
use App\Player;

class playersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'name' => 'ゲスト1',
                'color' => '青',
                'community_id' => 1,
                'user_id' => 1,
            ],
        
        
            [
                'name' => 'ゲスト2',
                'color' => '緑',
                'community_id' => 1,
                'user_id' => 2,
            ],
        
            [
                'name' => 'ゲスト3',
                'color' => '黒',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト4',
                'color' => '赤',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト5',
                'color' => '紫',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト6',
                'color' => 'コーラル',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト7',
                'color' => '灰',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト8',
                'color' => '水',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト9',
                'color' => 'オレンジ',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト10',
                'color' => 'ピンク',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト11',
                'color' => '白',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト12',
                'color' => '黄緑',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト13',
                'color' => '黄',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト14',
                'color' => '薄ピンク',
                'community_id' => 1,
                'user_id' => null,
            ],
        
            [
                'name' => 'ゲスト15',
                'color' => '青',
                'community_id' => 1,
                'user_id' => null,
            ],
        ];
        
        DB::table('players')->insert($players);
    }
}
