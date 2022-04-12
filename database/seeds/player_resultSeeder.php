<?php

use Illuminate\Database\Seeder;

class player_resultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player_result = [
            [
                'player_id' => 1,
                'result_id' => 1,
            ],
            [
                'player_id' => 2,
                'result_id' => 1,
            ],
            [
                'player_id' => 3,
                'result_id' => 1,
            ],
            [
                'player_id' => 4,
                'result_id' => 1,
            ],
            [
                'player_id' => 5,
                'result_id' => 1,
            ],
            [
                'player_id' => 6,
                'result_id' => 1,
            ],
            [
                'player_id' => 7,
                'result_id' => 1,
            ],
            [
                'player_id' => 8,
                'result_id' => 1,
            ],
            [
                'player_id' => 9,
                'result_id' => 1,
            ],
            [
                'player_id' => 10,
                'result_id' => 1,
            ],
            [
                'player_id' => 11,
                'result_id' => 1,
            ],
            [
                'player_id' => 1,
                'result_id' => 2,
            ],
        ];
        
        DB::table('player_result')->insert($player_result);
    }
}
