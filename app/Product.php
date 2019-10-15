<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name', 'type', 'brand', 'price', 'description', 'category_id', 'status'];

    public function category(){
    	return $this->belongsTo('App\Catalog');
    }
}
