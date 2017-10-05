<?php

namespace App\Http\Controllers;


use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class GalleryController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function viewGalleryList()
	{
		$galleries =  Gallery::where('created_by', Auth::user()->id)->get();

		 return view('gallery.gallery')
		 ->with('galleries', $galleries);
	}

	public function saveGallery(Request $request)
	{
		//validate the Request through the validation rules
		$validator = Validator::make($request->all(), [
			'gallery_name' => 'required|min:3',

		]);
		// take actions when validation has failed
		if ($validator->fails()){

			return redirect('gallery/list')
			->withErrors($validator)
			->withInput();
		}
		$gallery = new Gallery;

		//save a new Gallery

		$gallery->name = $request->input('gallery_name');
		$gallery->created_by = Auth::user()->id;
		$gallery->published = 1;
		$gallery->save();

		return redirect()->back();
	
	}
	public function viewGalleryPics($id)
	{
		$gallery = Gallery::findOrFail($id);

		return view ('gallery.gallery-view')
		->with('gallery', $gallery); 
	}
	public function doImageUpload(Request $request)
	{
		//get file from post request
		$file = $request->file('file');
		
		//set file name
		$filename = uniqid() . $file->getClientOriginalName();
		
		//move file to current location
		
		$file->move('gallery/images', $filename);
		
		
		//save details to db
		$gallery = Gallery::find($request->input('gallery_id'));
		$image = $gallery->images()->create([
			'gallery_id'=> $request->input('gallery_id'),
			'file_name' => $filename,
			'file_size' => $file->getClientSize(),
			'file_mime' => $file->getClientMimeType(),
			'file_path' => 'gallery/images/' . $filename,
			'created_by'=> Auth::user()->id,
		]);
		return $image;
	}

	public function deleteGallery($id){
			//load the gallery
		$currentGallery = Gallery::findOrFail($id);
			//check ownership
		if ($currentGallery->created_by != Auth::user()->id){
				abort('403', 'You are not allowed to delete this gallery');

		}
		//get images
		$images = $currentGallery->images();
		//delete images
		foreach ($currentGallery->images as $image){
			unlink(public_path($image->file_path));
		}
		//delete db records
		$currentGallery->images()->delete();

		$currentGallery->delete();

		return redirect()->back();
	}
}