<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PersonalLoanController extends Controller
{
     function loadbanklist(Request $req)
     {
     	$data = DB::connection("ERP")->select("select * from Bank_Master");
     	return ($data);
     }
}
