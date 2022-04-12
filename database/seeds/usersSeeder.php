<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'ユーザー1',
                'email'=> 'test1@com',
                'age' => 22,
                'sex' => '男',
                'active_community' => 1,
            ],
            
            [
                'name' => 'ユーザー2',
                'email' => 'test2@com',
                'age' => 23,
                'sex' => '女',
                'active_community' => 2,
            ],
            
            [
                'name' => 'ユーザー3',
                'email' => 'test3@com',
                'age' => 18,
                'sex' => '男',
                'active_community' => 1,
            ],
            
        ];
    
        DB::table('users')->insert($users);
    }
}
