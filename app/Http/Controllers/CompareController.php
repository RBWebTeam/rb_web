<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class CompareController extends Controller
{
    //
    public function compare(){
    	return view('compare');
    }
    public function view_loan(){
        if(Session::get('is_login')){
    	   return view('view-loan');
        }else{
            return redirect('/');
        }
        
    }
 	public function emi(){
    	return view('emi');
    }
    public function credit_report(){
    	return view('free-credit-report');
    }
 
}
