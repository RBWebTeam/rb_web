<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
class LoanController extends CallApiController
{
//     Route::get('personal-loan','LoanController@home_loan');
// Route::get('personal-loan','LoanController@lap');
// Route::get('personal-loan','LoanController@smi_loan');
// Route::get('personal-loan','LoanController@home_loan_transfer');
// Route::get('personal-loan','LoanController@car_loan');


   

    public function personal_loan(){
      $keywords='Personal Loans,Personal Loan At Low Interest Rates,Online Personal Loan,Personal Loan In India,Apply Online For Fast Personal Loan Approvals,Compare Personal Loan Interest Rates,Secured Personal Loan, Personal Loan Emi Calculator,Personal Loan Eligibility;';
    	$data['title']='Personal Loan – Apply online at lowest interest rate on Rupeeboss.com';
    	$data['description']='Finance Your Dreams by Comparing Personal Loan interest rates and apply online for quick approval of low EMI. Apply for Best Personal Loan on Rupeeboss.com';
        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Personal Loan')
                      ->first();
    	return view('personal-loan')->with($data)->with('keywords',$keywords);
    }
    public function home_loan(){
      
      $keywords='Home Loan,Apply for Home Loan,Housing Loan,Home Loan at Low Rate of Interest,Get Home Loan,Need A Home Loan,Home Loan Eligibility,The Best Home, Compare Home Loan,Home Loan Finance Company,Home Loans In India,Home Loan Charges,Home Loan Credit,Best Housing Loans,Home Loan Emi Calculator';
    	$data['title']='Home Loan- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Choose the right Home Loan for You. Check & Compare home loans from thousand of Banks and Apply for best Home Loan With Low Interest rate on Rupeeboss.com';

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
        $keywords='SME Loans,SME Loan Application Form,SME Loan Apply Online,How to get a SME loanbusiness startup loan';
        $data['title']='Apply For SME Loan At Lowest Interest Rate With Rupeeboss.com';
        $data['description']='Get small business (SME) loans. Applynow online and avail end-to-end SME loan or finance by just filling up the form On Rupeeboss.com';
        return view('sme-test',['sme'=>'sme'])->with($data)->with('keywords',$keywords);
    }

    public function apply_home_loan(){
        $keywords='Apply Home Loan Online,Apply For Home Loan,Apply For A Home Loan With Poor Credit,Home loan application form';
        $data['title']='Apply for Home Loan at Lowest Interest Rates with Rupeeboss.com';
        $data['description']='Best Home Loans. Apply Online for flexible loan repayment options and lower EMIs at attractive interest rates with Rupeeboss.com';

         $query=DB::table('bank_master')->select('Bank_Name')->get();
        return view('home-loan-process',['data'=>$query]);

    }


    public function apply_loan_against_property(){


         $data=DB::table('bank_master')->select('Bank_Name')->get();

         return view('loan-against-property-process',['data'=>$data]);
        
    }
    
    public function apply_car_loan(){
      $keywords='Apply Online For Car Loan,Need a Car Loan,Car Loan Application form,Car Loan Application Process';
        $data['title']=' Apply For Car Loan At Lowest Interest rateWith Rupeeboss.com ';
        $data['description']='Best Car Loans, Lowest Interest Rates, Instant e-Approval. Apply for fast and quick processing Online with Rupeeboss.com.';
      return view('car-loan-test')->with($data)->with('keywords',$keywords);
    }

     public function apply_business_loan(){
      $keywords='Business Loan Apply Online,Business Loan Application Form,Getting a business loan,Need a business loan';
        $data['title']='Apply For Business Loan At Lowest interest Rate with Rupeeboss.com ';
        $data['description']='Your business can benefit too. Get Easy Business loan today to set up your business. Apply online with Rupeeboss.com.';
      return view('business-loan-process')->with($data)->with('keywords',$keywords);
    }
      
    public function apply_p_test(){
      $keywords='Personal Loan Interest Rates,Apply Online for Personal Loan,Personal Loan Application';
        $data['title']='Apply For Personal Loan at Lowest Interest Rate with Rupeeboss.com ';
        $data['description']='Get funds quickly and conveniently. Apply for Personal Loan at Low Interest Rate on Rupeeboss.com Needs.';
      return view('personal-loan-test')->with($data)->with('keywords',$keywords);
    }
      public function apply_h_test(){
        $keywords='Apply Home Loan Online,Apply For Home Loan,Apply For A Home Loan With Poor Credit,Home loan application form';
        $data['title']='Apply for Home Loan at Lowest Interest Rates with Rupeeboss.com';
        $data['description']='Best Home Loans. Apply Online for flexible loan repayment options and lower EMIs at attractive interest rates with Rupeeboss.com';
      return view('home-loan-test')->with($data)->with('keywords',$keywords);
    }
    public function apply_lap_test(){
      $keywords='Loan Against Property,Apply Online For Property Loan,Loan Against Property Guidelines,Loan Against Property Online,Commercial Property Loans';
        $data['title']='Apply For Loan Against Property at Lowest Interest Rates with Rupeeboss.com';
        $data['description']='Avail Loan Against Property with benefits like lower interest rates & EMI payment. Apply online on Rupeeboss.com to get a Loan now.';
      return view('lap-test')->with($data)->with('keywords',$keywords);
    }

    public function apply_express_loan(){
      $keywords='Loan Against Property,Apply Online For Property Loan,Loan Against Property Guidelines,Loan Against Property Online,Commercial Property Loans';
        $data['title']='Apply For Loan Against Property at Lowest Interest Rates with Rupeeboss.com';
        $data['description']='Avail Loan Against Property with benefits like lower interest rates & EMI payment. Apply online on Rupeeboss.com to get a Loan now.';
      return view('apply-express-loan')->with($data)->with('keywords',$keywords);
    }

    public function apply_aditya(Request $req){
      $query=DB::table('aditya_birla_express_loan')

    ->insert(['amount'=>$req->amount,
           'business_type'=>$req->employment,
           'tenure'=>$req->tenure,
           'mob_no'=>$req->mob_no,
          'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")]);
    $input = $req->all();
     // print_r( $input );exit();
     // $otp = mt_rand(100000, 999999);
     // Session::put('mob_no', $req['mob_no']);
    }

    public function express_send_otp(Request $req){
      $otp = mt_rand(100000, 999999);
      Session::put('contact_exp', $req['mob_no']);
     $query=DB::table('express_loan_request')

      ->insert(['amount'=>$req->amount,
              'business_type'=>$req->employment,
              'tenure'=>$req->tenure,
              'mob_no'=>$req->mob_no,
              'otp'=>$otp,
              'status'=>0,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);
       if($query>0){
            //calling service to send sms 
            $post_data='{"mobNo":"'.$req->mob_no.'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                "source":"WEB"}';
            // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
               $url = "http://services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            $error=$result['error'];
            $obj = json_decode($http_result);

            $post_data1='{"amount":"'.$req->amount.'","business_type":"'.$req->employment.'","tenure":"'.$req->tenure.'","mob_no":"'.$req->mob_no.'",
                "source":"WEB"}';
            // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
               $url1 = "http://erp.rupeeboss.com/CustomerWebRequest.aspx";
            $result1=$this->call_json_data_api($url1,$post_data1);
            $http_result1=$result['http_result'];
            $error1=$result['error'];
            $obj = json_decode($http_result);
            $obj1 = ($http_result1);
            // print_r($obj);exit();
            // statusId response 0 for success, 1 for failure
            
            if($obj->{'statusId'}==0 && $obj1='true'){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }else{
             return Response::json(array(
                            'data' => false,
                        ));
        }
    }

    public function express_verify_otp(Request $req){
    $phone = Session::get('contact_exp');
    $express_otp=$req->verify_otp;
    //print_r($express_otp);
    //print_r($phone);
        $query=DB::table('express_loan_request')
            ->where('otp', $express_otp)
            ->where('mob_no',$phone)
            ->update(['status' => 1]);
           
        if($query){
          return Response::json(array(
                            'data' => "true",
                        ));
        }else{
         return Response::json(array(
                            'data' => "false",
                        ));
        }
 }

    public function express_form(Request $req){
       // print_r($req->all());exit();
      $post_data='{"loanamount":"'.$req->loanamount.'","tenure":"'.$req->tenure.'","min_income":"'.$req->min_income.'","constitution":"'.$req->constitution.'","nature_of_business":"'.$req->nature_of_business.'","type_of_industry":"'.$req->type_of_industry.'","experience":"'.$req->experience.'","residence_type":"'.$req->residence_type.'","office_type_generic":"'.$req->office_type_generic.'","turnover":"'.$req->turnover.'","net_worth":"'.$req->net_worth.'","gross_profit":"'.$req->gross_profit.'","net_profit":"'.$req->net_profit.'","first_name":"'.$req->first_name.'","middle_name":"'.$req->middle_name.'","last_name":"'.$req->last_name.'","gender":"'.$req->gender.'","dob":"'.$req->dob.'","education":"'.$req->education.'","marital_status":"'.$req->marital_status.'","share_holding":"'.$req->share_holding.'","pan_no":"'.$req->pan_no.'","mobile_no":"'.$req->mobile_no.'","residence_landline":"'.$req->residence_landline.'","aadhar_card":"'.$req->aadhar_card.'","address_line1":"'.$req->address_line1.'","address_line2":"'.$req->address_line2.'","address_line3":"'.$req->address_line3.'","city_applicant":"'.$req->city_applicant.'","state_applicant":"'.$req->state_applicant.'","pincode_applicant":"'.$req->pincode_applicant.'","net_profit_applicant":"'.$req->net_profit_applicant.'","company":"'.$req->company.'","bussiness_pan":"'.$req->bussiness_pan.'","date_formation":"'.$req->date_formation.'","ofc_landline":"'.$req->ofc_landline.'","ofc_add1":"'.$req->ofc_add1.'","ofc_add2":"'.$req->ofc_add2.'","ofc_add3":"'.$req->ofc_add3.'","city_applicant_entity":"'.$req->city_applicant_entity.'","state_applicant_entity":"'.$req->state_applicant_entity.'","pincode_applicant_entity":"'.$req->pincode_applicant_entity.'","office_type_applicant_entity":"'.$req->office_type_applicant_entity.'","name_co_app":"'.$req->name_co_app.'","middle_name_co_app":"'.$req->middle_name_co_app.'","last_name_co_app":"'.$req->last_name_co_app.'","gender_co_app":"'.$req->gender_co_app.'","dob_co_app":"'.$req->dob_co_app.'","occupation_co_app":"'.$req->occupation_co_app.'","income_co_app":"'.$req->income_co_app.'","relation":"'.$req->relation.'","pan_no_co_app":"'.$req->pan_no_co_app.'","mob_co_app":"'.$req->mob_co_app.'","residence_co_app":"'.$req->residence_co_app.'","aadhar_card_co_app":"'.$req->aadhar_card_co_app.'","address1_co_app":"'.$req->address1_co_app.'","address2_co_app":"'.$req->address2_co_app.'"}';
    // print_r($post_data);exit();  
    
      $url = "http://beta.erp.rupeeboss.com/AdityaBirlaWebRequest.aspx";
      $result=$this->call_json_data_api($url,$post_data);
      $http_result=json_decode($result['http_result']);
      $error=$result['error'];
      print_r($http_result);exit();

      if($http_result==1){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }
    

}
