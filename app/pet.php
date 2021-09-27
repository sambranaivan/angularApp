<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    //

    public function monster()
    {
        return $this->belongsTo('monster');
    }

   

}
