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
      $keywords='Personal Loans,Personal Loan At Low Interest Rates,Online Personal Loan,Personal Loan In India,Apply Online For Fast Personal Loan Approvals,Compare Personal Loan Interest Rates,Secured Personal Loan, Personal Loan Emi Calculator,Personal Loan Eligibility;';
    	$data['title']='Personal Loan';
    	$data['description']='Finance Your Dreams by Comparing Personal.Loan interest rates and apply online for quick approval of lowest EMI personal loan. Apply for Best Personal Loan on Rupeeboss.com';
        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Personal Loan')
                      ->first();
    	return view('personal-loan')->with($data)->with('keywords',$keywords);
    }
    public function home_loan(){
      
      $keywords='Home Loan,Apply for Home Loan,Housing Loan,Home Loan at Low Rate of Interest,Get Home Loan,Need A Home Loan,Home Loan Eligibility,The Best Home, Compare Home Loan,Home Loan Finance Company,Home Loans In India,Home Loan Charges,Home Loan Credit,Best Housing Loans,Home Loan Emi Calculator';
    	$data['title']='Home Loan- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Choose the right Home Loan for You. 
                            Check & Compare loans from thousand of banks, 
                            easily Calculate EMIs. Apply for best Home Loan 
                            With Low Interest rate on Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Home Loan')
                      ->first();
    	return view('home-loan')->with($data)->with('keywords',$keywords);
    }
    public function lap(){
      $keywords='Loan Against Property Interest Rates, Property Loan, Procedure Of Loan Against Property, Apply For Property Loan, Mortgage Loan Rate, Getting Loan Against Property, Need Property Loan, Loan Against Property Eligibility Calculator,Features Of Loan Against Property,Comparison Of Loan Against Property,Calculate Emi Of Property Loan,Commercial Property Purchase Loan';
    	$data['title']='Loan Against Propertry- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Finding Your Dreams. Compare loan against property interest rates,check eligibility and Lowest EMI. Apply for Loan Against Property On Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','LAP')
                      ->first();
    	return view('loan-against-property')->with($data)->with('keywords',$keywords);
    }
    public function sme_loan(){
      $keywords='Sme Financing, Sme Bank Loan Small And Medium Size Enterprise Loan,Apply For Sme Loan,Sme Loan Scheme,Sme Loan Consultant,Sme Easy Loan,Sme Loan For New Business Or Startup,Working Capital,Unsecured Business Loan,Sme Loan Eligibility ,Small Business Loans, Small Business Loan Calculator ,Commercial Property Purchase ';
    	$data['title']='SME Loan- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Make your business dreams come true. Find SME Loans Eligiblity criteria, Interest rates, Documentation required and procedure for getting an SME (Small and Medium Enterprises) Loan online on Rupeeboss.com';

        // $data['id']=DB::table('product_master')
        //               ->where('Product_Name','=','sem')
        //               ->first();
    	return view('sme-loan')->with($data)->with('keywords',$keywords);
    }
  
    public function car_loan(){
      $keywords='Car Loans, Auto Loan,Car Loan Low Interest Rates, Best Car Loan Rates, Car Loan Calculator,Car Loan Eligibility,Vehicle Finance, Refinance A Car Loan, Online Car Loans ,Cheap Rate Car Loans ,Car Loans With Bad Credit ,Car Refinance ';
    	$data['title']='Car Loan- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Buy your dream car by applying for car loan.
                            Compare Car Loan Interest Rates, Check 
                            Loan Eligibility & Calculate Car Loan EMI. 
                            Apply now on Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Car Loan')
                      ->first();

    	return view('car-loan')->with($data)->with('keywords',$keywords);
    }
    public function business_loan(){
        $keywords='Loan For Business ,Business Funding, Commercial Loan Rates ,Best Business Loans ,Quick Business Loans, Business Loan Interest Rate, Business Loan Emi Calculator,Business Loan Application,Business Loan Apply Online,Business Loan Details,Apply For Business Loan,Business Loan Lenders';
        $data['title']='Business Loan- Apply online at low interest rate On Rupeeboss.com';
        $data['description']='Fulfill your business needs with Quick Processing Business loans. Compare business loan interest rates and check you eligibility. Apply Online on Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Business Loan')
                      ->first();
        return view('business-loan')->with($data)->with('keywords',$keywords);
    }



 	public function apply(){
    	return view('personal-loan-process');
    }

    public function smeLoan(request $request){
        $data['title']='SME Loan- Apply online at low interest rate On Rupeeboss.com';
        $data['description']='Apply for SME Loan';
        return view('sme-test',['sme'=>'sme'])->with($data);
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
      return view('car-loan-test');
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
