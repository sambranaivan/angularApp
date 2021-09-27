<?php

use Illuminate\Database\Seeder;
use App\region;
use App\route;
use App\stage;
use App\tipo;
use App\monster;
use App\user;
use App\pet;
use App\monster_types;
use App\stats_types;
use App\monster_stats;
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
        
        $this->TypesSeed();
        $this->StatsSeed();
        $this->monsterSeed();

        $this->UserSeed();

        $this->PetSeed();



        $this->regionSeed();

        
    }

    public function StatsSeed()
    {
        $st = new stats_types();
        $st->name = 'atk';
        $st->save();
        $st = new stats_types();
        $st->name = 'def';
        $st->save();
        $st = new stats_types();
        $st->name = 'hp';
        $st->save();

    }



    public function PetSeed()
    {
        $pet = new pet();
        $pet->monster_id = monster::first()->id;
        $pet->user_id = user::first()->id;
        $pet->save();

          $pet = new pet();
        $pet->monster_id = monster::where('name','Sudowudo')->first()->id;
        $pet->user_id = user::first()->id;
        $pet->save();
    }


    public function UserSeed()
    {
        $u = new User();
        $u->email = 'nick';
        $u->password = Hash::make('1234');
        $u->name = "nick";
        $u->save();
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

        $t = new monster_types();

        $t->monster_id = $p->id;
        $t->tipo_id = 2;
        $t->save();
        


        ///stats
        
        $ms = new monster_stats();
        $ms->monster_id = $p->id;
        $ms->stat_id = 1;//atk
        $ms->value = 25;
        $ms->save();
        $ms = new monster_stats();
        $ms->monster_id = $p->id;
        $ms->stat_id = 2;//def
        $ms->value = 20;
        $ms->save();
        $ms = new monster_stats();
        $ms->monster_id = $p->id;
        $ms->stat_id = 3;//hp
        $ms->value = 30;
        $ms->save();

        // 

        $p2 = new monster();
        $p2->name = 'Sudowudo';
        $p2->sprite = 'sprite';
        $p2->save();

        $t = new monster_types();

        $t->monster_id = $p2->id;
        $t->tipo_id = 2;
        $t->save();
        $t = new monster_types();
        $t->monster_id = $p2->id;
        $t->tipo_id = 3;
        $t->save();
        
        ///stats
        
        $ms = new monster_stats();
        $ms->monster_id = $p2->id;
        $ms->stat_id = 1;//atk
        $ms->value = 28;
        $ms->save();
        $ms = new monster_stats();
        $ms->monster_id = $p2->id;
        $ms->stat_id = 2;//def
        $ms->value = 33;
        $ms->save();
        $ms = new monster_stats();
        $ms->monster_id = $p2->id;
        $ms->stat_id = 3;//hp
        $ms->value = 15;
        $ms->save();






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
