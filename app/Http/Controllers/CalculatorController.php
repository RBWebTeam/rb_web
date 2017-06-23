<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use App\SEOlibraries\Seo;
class CalculatorController extends CallApiController
{
    public function working_capital_emi_calculator(){
        return view('working-capital-emi-calculator');
    }

 
}
