<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UploadController extends Controller
{

    public function Upload()
    {
    	return view('doc_upload');
    }

    public function UploadPost(Request $request)
    {
    	$this->validate($request, [
            'Document' => 'required',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
		print_r($request->all());exit();
    	return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$imageName);
    }

}