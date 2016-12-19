<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Categories()
    {
        return $this->belongsTo('App\Category');     
    }

    public function Users()
    {
        return $this->belongsTo('App\User');     
    }
}
