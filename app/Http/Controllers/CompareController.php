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
    public function emi2(){
        return view('emi/emi');
    }
     public function emi_cal(Request $req){
        $data=$req->all();
        return view('emi/emi_cal')->with($data);
    }
    public function credit_report(){
    	return view('free-credit-report');
    }
 
}
