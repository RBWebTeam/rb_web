<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class BankController extends Controller
{
	public function index(Request $req){
		
	    return view('bank-wise-product');
	}
}