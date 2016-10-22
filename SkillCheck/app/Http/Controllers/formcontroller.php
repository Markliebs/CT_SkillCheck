<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class formcontroller extends Controller
{
    //
}

	public function create(Request $request){
		
		// 		get all the data that has been posted from the form
		
		$post_data = $request->all();
				
		return view('home', compact('products'));
		
	}


    	public function show(Request $request)
	{
		return view('products', compact('products'));
	}

