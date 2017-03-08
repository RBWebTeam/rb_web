<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ComfyController extends Controller
{
    public function comfy(){
		
	      return view('comfy');	
	}
	public function comfy_sales(){
		return view('comfy-sales');
	}
}
