<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Music;

class MainController extends Controller
{
    public function index(){
    	$musics = Music::get();
    	$services = Product::where('type', 0)->inRandomOrder()->take(4)->get();
    	$products = Product::where('type', 1)->inRandomOrder()->take(4)->get();
    	return view('main', compact('musics', 'services', 'products'));
    }

    public function productDetail($id){
    	$product = Product::findOrFail($id);;
    	return view('product.detail', compact('product'));
    }
}
