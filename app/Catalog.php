<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'type'];

    public function productOfCategory(){
    	return $this->hasMany('App\Product', 'category_id');
    }
}
