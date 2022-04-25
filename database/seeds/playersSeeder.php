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
                'color' => '#ff0000',
                'community_id' => 1,
            ],
        
        
            [
                'name' => 'ゲスト2',
                'color' => '#000000',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト3',
                'color' => '#ffffff',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト4',
                'color' => '#D34778',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト5',
                'color' => '#0000ff',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト6',
                'color' => '#00ffff',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト7',
                'color' => '#ff00ff',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト8',
                'color' => '#800080',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト9',
                'color' => '#008000',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト10',
                'color' => '#ffa500',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト11',
                'color' => '#ffdb2b',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト12',
                'color' => '#ff7f50',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト13',
                'color' => '#00ff00',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト14',
                'color' => '#808080',
                'community_id' => 1,
            ],
        
            [
                'name' => 'ゲスト15',
                'color' => '#800000',
                'community_id' => 1,
            ],
        ];
        
        DB::table('players')->insert($players);
    }
}
