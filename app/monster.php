<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monster extends Model
{
    //

    public function types()
    {

        return $this->hasMany('monster_types');
    }
}
