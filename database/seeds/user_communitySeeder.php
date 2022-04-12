<?php

use Illuminate\Database\Seeder;

class user_communitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_community = [
            [
                'user_id' => 1,
                'community_id' => 1,
            ],
            [
                'user_id' => 1,
                'community_id' => 2,
            ],
            [
                'user_id' => 2,
                'community_id' => 1,
            ],
            [
                'user_id' => 2,
                'community_id' => 2,
            ],
            [
                'user_id' => 3,
                'community_id' => 1,
            ],
        ];
        
        DB::table('user_community')->insert($user_community);
    }
}
