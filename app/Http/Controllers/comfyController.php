<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SEOlibraries\Seo;
class ComfyController extends Controller
{
    public function comfy(){
		             $un=new Seo();
                   $data=$un->Rupeeboss_Comfy();
	      return view('comfy')->with($data);	
	}
	public function comfy_sales(){


		          
		return view('comfy-sales');
	}
}
