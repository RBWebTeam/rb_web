<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class TataCapitalLoanController extends CallApiController
{
   public function apply_tatacapital_loan(){
    return view('apply-tatacapital-loan');
   }
 
}
