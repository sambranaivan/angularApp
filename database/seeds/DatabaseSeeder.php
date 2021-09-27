<?php

use Illuminate\Database\Seeder;
use App\region;
use App\route;
use App\stage;
use App\tipo;
use App\monster;
use App\user;
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
        $this->typesSeed();
        $this->monsterSeed();
        $this->TypesSeed();
        $this->regionSeed();

        
    }

    public function TypesSeed()
    {
        $types = [
        'fuego'
        ,'planta'
        ,'agua'
        ,'tierra'
        ,'roca'
        ,'electrico'
        ,'acero'
        ,'insecto'
        ,'oscuro'
        ,'psyquico'
        ,'volador'
        ,'normal'
        ,'luchador'
        ,'hielo'
        ,'dragon'
        ,'hada'
        ,'fantasma'
        ,'oscuro'];

            foreach ($types as $key => $value) {
                $t = new tipo();
                $t->name = $value;
                $t->save();
            }


    }

    public function monsterSeed()
    {

        $p = new monster();
        $p->name = 'bulbasaur';
        $p->sprite = 'sprite';
        $p->save();




    }


    public function regionSeed()
    {
        $region = new region();
        $region->name = "Kanto";
        $region->save();


        $route = new route();
        $route->region_id = $region->id;
        $route->name = "Ruta 1";
        $route->save();


        for ($i=1; $i <= 10; $i++) { 
            $stage = new stage();
            $stage->route_id = $route->id;
            $stage->stage_nro = $i;
            $stage->name = 'Stage '.$i;
            $stage->save();
        }


        


    }



    
}
