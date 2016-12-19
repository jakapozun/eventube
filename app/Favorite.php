<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\User');
    }

    public function Events()
    {
        return $this->belongsTo('App\Event');
    }
}
