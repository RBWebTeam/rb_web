<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PersonalLoanController extends Controller
{
    //
    public function index(){
    	return view('personal_loan');
    }
 	public function apply(){
    	return view('liza_process');
    }
       
}
