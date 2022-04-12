<?php

use Illuminate\Database\Seeder;

class regulationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regulations = [
            [
                'allnumber' => 11,
                'cluenumber' => 7,
                'sheriffnumber' => 1,
                'impostornumber' => 2,
                'madmatenumber' => 1,
                'comment' => '11人2狼1狂1シェリフ',
                'community_id' => 1,
            ],
            
            [
                'allnumber' => 10,
                'cluenumber' => 8,
                'sheriffnumber' => 0,
                'impostornumber' => 2,
                'madmatenumber' => 0,
                'comment' => '10人2狼',
                'community_id' => 2,
            ],
        ];
        
        DB::table('regulations')->insert($regulations);
    }
}
