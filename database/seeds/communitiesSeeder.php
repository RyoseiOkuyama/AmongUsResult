<?php

use Illuminate\Database\Seeder;

class communitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('communities')->insert([
            'name' => 'グループ1',
        ],
        
        [
            'name' => 'グループ2',
        ],
        
        [
            'name' => 'グループ3',
        ]);
    }
}
