<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\gallery;
use Image;
use Storage;
use Auth;

class GalleryController extends Controller
{
    public function index() {
    	$data['jsInclude'] = 'js/backend/gallery.js?version='.mt_rand(1, 100);
    	return view('backend.gallery')->with($data);
    }

    public function store(Request $request) {
    	$caption 		= $request->caption;
    	$file 			= $request->file('image');

		//get filename with extension
    	$filenamewithextension = $file->getClientOriginalName();
		//get filename without extension
    	$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
		//get file extension
    	$extension = $file->getClientOriginalExtension();
		//filename to store
    	$filenametostore = $filename.'_'.uniqid().'.'.$extension;
		//thumbnail path
    	$thumbnailpath = public_path('storage/images/gallery/gerabah2019/thumbnail/'.$filenametostore);
		//Resize image here
    	$image = Image::make($file->getRealPath());

    	$image->resize(null, 300, function ($constraint) {
    		$constraint->aspectRatio();
    	})->save($thumbnailpath);

    	$store 						= new gallery;
    	$store->caption 			= $request->caption;
    	$store->file 				= $filenametostore;
    	$store->create_user 		= Auth::user()->name;
    	$query 						= $store->save();

    	if ($query) {
    		$result = array(
    			'result'	=> 1,
    			'message'	=> 'Berhasil Simpan',
    		);
    	}else {
    		$result = array(
    			'result'	=> 0,
    			'message'	=> 'Gagal Simpan',
    		);
    	}

    	return response()->json($result);
    }
}
