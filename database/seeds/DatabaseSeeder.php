<?php

use Illuminate\Database\Seeder;
use App\region;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->regionSeed();
    }


    public function regionSeed()
    {
        $r = new region();
        $r->name = "Kanto";
        $r->save();
    }

    
}
