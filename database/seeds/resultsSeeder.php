<?php

use Illuminate\Database\Seeder;

class resultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results = [
            [
                'winner' => 'clue',
                'community_id' => 1,
                'regulation_id' => 1,
            ],
            
            [
                'winner' => 'impostor',
                'community_id' => 1,
                'regulation_id' => 1,
            ],
            
            [
                'winner' => 'clue',
                'community_id' => 1,
                'regulation_id' => 1,
            ],
            
            [
                'winner' => 'clue',
                'community_id' => 1,
                'regulation_id' => 1,
            ],
            
            [
                'winner' => 'clue',
                'community_id' => 1,
                'regulation_id' => 1,
            ],
            
            [
                'winner' => 'clue',
                'community_id' => 1,
                'regulation_id' => 2,
            ],
            
            [
                'winner' => 'impostor',
                'community_id' => 1,
                'regulation_id' => 2,
            ],
            
        ];
        
        DB::table('results')->insert($results);
    }
}
