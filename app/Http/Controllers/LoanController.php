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
        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Personal Loan')
                      ->first();
    	return view('personal-loan')->with($data);
    }
    public function home_loan(){


    	$data['title']='Home Loan';
    	$data['description']='Apply for Home Loan';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Home Loan')
                      ->first();
    	return view('home-loan')->with($data);
    }
    public function lap(){
    	$data['title']='Loan Against Propertry';
    	$data['description']='Apply for Loan Against Propertry';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','LAP')
                      ->first();
    	return view('loan-against-property')->with($data);
    }
    public function sme_loan(){
    	$data['title']='SME Loan';
    	$data['description']='Apply for SME Loan';

        // $data['id']=DB::table('product_master')
        //               ->where('Product_Name','=','sem')
        //               ->first();
    	return view('sme-loan')->with($data);
    }
  
    public function car_loan(){
    	$data['title']='Car Loan';
    	$data['description']='Apply for Car Loan';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Car Loan')
                      ->first();

    	return view('car-loan')->with($data);
    }
    public function business_loan(){
        $data['title']='Business Loan';
        $data['description']='Apply for Business Loan';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Business Loan')
                      ->first();
        return view('business-loan')->with($data);
    }



 	public function apply(){
    	return view('personal-loan-process');
    }

    public function smeLoan(request $request){
        $data['title']='SME Loan';
        $data['description']='Apply for SME Loan';
        return view('personal-loan-test',['sme'=>'sme'])->with($data);
    }

    public function apply_home_loan(){
         $query=DB::table('bank_master')->select('Bank_Name')->get();
        return view('home-loan-process',['data'=>$query]);

    }


    public function apply_loan_against_property(){


         $data=DB::table('bank_master')->select('Bank_Name')->get();

         return view('loan-against-property-process',['data'=>$data]);
        
    }
    
    public function apply_car_loan(){
      return view('car-loan-process');
    }

     public function apply_business_loan(){
      return view('business-loan-process');
    }
      
    public function apply_p_test(){
      return view('personal-loan-test');
    }
      public function apply_h_test(){
      return view('home-loan-test');
    }
    public function apply_lap_test(){
      return view('lap-test');
    }
}
