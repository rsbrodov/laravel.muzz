<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'category';

    public function productOfCategory(){
    	return $this->hasMany('App\Product');
    }
}
