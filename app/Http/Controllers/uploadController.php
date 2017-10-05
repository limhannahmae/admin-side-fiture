<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class uploadController extends Controller
{
    public function index(){
     return view('upload.upload');

    }
    public function store(request $request)
    {	 
    	  if($request->hasFile('image')){
    	  	$request->file('image');
    	  	// return $request->image->extension();
            return $request->image->storeAs('public','fiture.jpg');
    	 // return Storage::putFile('public/new',$request->file('image'));
    	  }else{
    	  	return 'no file selected';
    	  }
    
    }

    public function show()
    {
     $rawContent = Storage::get('fiture.jpg');
     if(Storage::put('newImage2.jpg',$rawContent)){
        return 'File 2 is created';
     }
    }
    
}

