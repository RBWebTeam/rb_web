<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CompareController extends Controller
{
    //
    public function compare(){
    	return view('compare');
    }
    public function view_loan(){
    	return view('view-loan');
    }
 	public function emi(){
    	return view('emi');
    }
    public function credit_report(){
    	return view('free-credit-report');
    }
 
}
