<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //my code
    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
