<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogController extends Controller
{
    public function index(){
    	$catalogProducts = Catalog::where('type', 1)->get();
    	$catalogServices = Catalog::where('type', 0)->get();
    	return view('catalog.index', compact('catalogProducts', 'catalogServices'));
    }
    public function detail($id){
    	$products = Catalog::with('productofcategory')->findOrFail($id);
    	return view('catalog.detail', compact('products'));
    }
}
