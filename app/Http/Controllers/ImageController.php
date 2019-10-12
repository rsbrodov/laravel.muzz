<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function img(){
    return view('def');	
    }

    public function upload(Request $request){
    	$request->file('image')->store('uploads/products', 'public');
    	return redirect('/image');
    }

}
