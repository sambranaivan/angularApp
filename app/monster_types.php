<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monster_types extends Model
{
    //

    public function type()
    {

        return $this->belongsTo('tipo','tipo_id','id');
    }

}
