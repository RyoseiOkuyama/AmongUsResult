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
        $communities = [
            [
                'name' => 'グループ1',
                'body' => 'テスト',
                'image' => null,
            ],
        ];
        
        DB::table('communities')->insert($communities);
    }
}
