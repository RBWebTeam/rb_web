<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CreditCardController extends Controller
{
  	function index(Request $req){
  		$data=DB::select("call usp_compare_banklist(?)",['12']);
  		return ($data);
  	}
}
