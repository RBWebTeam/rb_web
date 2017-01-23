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
            'Identity_Proof' => 'required',
            'Income_Proof' => 'required',
            'Address_Proof' => 'required'
        ]);
         $imageName = time().'.'.$request->Identity_Proof->getClientOriginalExtension();
        $request->Identity_Proof->move(public_path('Upload'), $imageName);

       // print "<pre>";
    	//print_r($request->all());
    	//print_r($imageName);
    	return "Thank You!!!";
    }

}