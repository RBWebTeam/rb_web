<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormController extends Controller
{
	function sidebar(Request $req){

		$input = $req->all();
		//put curl code here to save in DB

		//print_r( $input);
		return 'true';
	}
}
