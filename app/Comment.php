<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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
