<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PersonalLoanController extends Controller
{
    //
    public function index(){
    	$data['title']='Personal Loan';
    	$data['description']='Apply for Personal Loan';
    	return view('personal_loan')->with($data);
    }
 	public function apply(){
    	return view('liza_process');
    }
       
}
