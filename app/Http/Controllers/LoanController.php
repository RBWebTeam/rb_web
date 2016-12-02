<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class LoanController extends Controller
{
//     Route::get('personal-loan','LoanController@home_loan');
// Route::get('personal-loan','LoanController@lap');
// Route::get('personal-loan','LoanController@smi_loan');
// Route::get('personal-loan','LoanController@home_loan_transfer');
// Route::get('personal-loan','LoanController@car_loan');
    public function personal_loan(){
    	$data['title']='Personal Loan';
    	$data['description']='Apply for Personal Loan';
    	return view('personal-loan')->with($data);
    }
    public function home_loan(){
    	$data['title']='Home Loan';
    	$data['description']='Apply for Home Loan';
    	return view('home-loan')->with($data);
    }
    public function lap(){
    	$data['title']='Loan Against Propertry';
    	$data['description']='Apply for Loan Against Propertry';
    	return view('loan-against-property')->with($data);
    }
    public function sme_loan(){
    	$data['title']='SME Loan';
    	$data['description']='Apply for SME Loan';
    	return view('sme-loan')->with($data);
    }
    public function home_loan_transfer(){
    	$data['title']='Home Loan Transfer';
    	$data['description']='Apply for Home Loan Transfer';
    	return view('home-loan-transfer')->with($data);
    }
    public function car_loan(){
    	$data['title']='Car Loan';
    	$data['description']='Apply for Car Loan';
    	return view('car-loan')->with($data);
    }

 	public function apply(){
    	return view('personal-loan-process');
    }

    public function apply_home_loan(){

        return view('home-loan-process');

    }


    public function apply_loan_against_property(){
     
         return view('loan-against-property-process');
        
    }
    
       
}
