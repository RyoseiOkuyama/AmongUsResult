<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(communitiesSeeder::class);
        
        $this->call(resultsSeeder::class);
        
        $this->call(playersSeeder::class); 
        
        $this->call(regulationsSeeder::class); 
        
        $this->call(player_resultSeeder::class); 
        
    }
    
}
