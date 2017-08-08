<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
use File;
class LoanController extends CallApiController
{
    public function personal_loan(){
      $keywords='Personal Loan,Compare Personal Loan,Apply Online for Personal Loan,Best Personal Loans in India,Compare Personal Loan,Personal Loan EMI Calculator';
      $data['title']='Personal Loan | Apply online at Lowest Interest Rate on Rupeeboss.com';
      $data['description']='Finance Your Dreams by Comparing Personal Loan interest rates and apply online for quick approval of low EMI. Apply for Best Personal Loan on Rupeeboss.com';
        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Personal Loan')
                      ->first();
      return view('personal-loan')->with($data)->with('keywords',$keywords);
    }
    public function home_loan(){
      
      $keywords='Home Loan,Compare Home Loan,Home Loan at Low Interest Rate,Apply Online for Home Loan,Check Home Loan Eligibility,Best Home Loans in India,Home Loan EMI Calculator';
      $data['title']='Home Loan | Apply online at Lowest Interest Rate on Rupeeboss.com';
      $data['description']='Choose the right Home Loan for You. Check & Compare home loans from thousand of Banks and Apply for best Home Loan With Low Interest rate on Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Home Loan')
                      ->first();
      return view('home-loan')->with($data)->with('keywords',$keywords);
    }
    public function lap(){
      $keywords='Loan against Property,Property Loan,Loan Against Property Interest Rates,Apply for Property Loan,Mortgage Loan Rate,Loan Against Property EMI Calculator';
      $data['title']='Loan Against Property | Mortgage Loan Rates | Rupeeboss.com';
      $data['description']='Finding Your Dreams. Compare loan against property interest rates, check eligibility and Lowest EMI. Apply for Loan Against Property On Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','LAP')
                      ->first();
      return view('loan-against-property')->with($data)->with('keywords',$keywords);
    }
    public function sme_loan(){
      $keywords='SME Loans,SME Loan Application Form,SME Loan Apply Online,How to get a SME Loan,Business Startup Loan';
      $data['title']='Apply For SME Loan At Lowest Interest Rate With Rupeeboss.com';
      $data['description']='Get small business (SME) loans. Apply now online and avail end-to-end SME loan or finance by just filling up the formOn Rupeeboss.com';

        // $data['id']=DB::table('product_master')
        //               ->where('Product_Name','=','sem')
        //               ->first();
      return view('sme-loan')->with($data)->with('keywords',$keywords);
    }
  
    public function car_loan(){
      $keywords='Car Loan,Car Loan at Low Interest Rates,Best Car Loan in India,Apply Online for Car Loan,Online Car Loans,Car Loan Eligibility';
      $data['title']='Car Loan | Apply online at low interest rate On Rupeeboss.com';
      $data['description']='Buy Your Dream Car By Applying For Car Loan. Compare Car Loan Interest Rates, Check Loan Eligibility & Calculate Car Loan EMI. Apply now on Rupeeboss.com';

        $data['id']=DB::table('product_master')
                      ->where('Product_Name','=','Car Loan')
                      ->first();

      return view('car-loan')->with($data)->with('keywords',$keywords);
    }
    public function business_loan(){
        $keywords='Loan for Business,Best Business Loans in India,Business Loan Interest Rate,Apply Online for Business Loan,Compare Business Loan';
        $data['title']='Business Loan | Apply online at low interest rateOn Rupeeboss.com';
        $data['description']='Fulfill your business needs with Quick Processing Business loan. Compare business loan interest rates and check you eligibility. Apply Online on Rupeeboss.com';

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
      $keywords='Express Finance Loans ,Cash Express Loan,Express Loan Aditya Birla Group,Express Loan Bank,Express Loan Corporation,Apply Online For Express Loan,Emergency Loans ,Advance Loans ,Quick And Easy Loans ,Instant Cash Loans ';
        $data['title']='Express Loan – Instant loan at Low interest rate on Rupeeboss.com';
        $data['description']='Get loans approved instantly. Express Loan Provide quick loans at lowest interest applyOnline on Rupeeboss.com';
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
      // $otp=123456;
      Session::put('temp_contact', $req['mob_no']);
     $query=DB::table('express_loan_request')

      ->insert(['amount'=>$req->amount,
              'business_type'=>$req->employment,
              'firm'=>$req->firm_holder,
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
               $url = $this::$service_url_static."LoginDtls.svc/xmlservice/sendSMS";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            $error=$result['error'];
            $obj = json_decode($http_result);

            $post_data1='{"amount":"'.$req->amount.'","business_type":"'.$req->employment.'","tenure":"'.$req->tenure.'","mob_no":"'.$req->mob_no.'","firm":"'.$req->firm_holder.'"
                "source":"WEB"}';
            // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
               $url1 = $this::$url_static."BankAPIService.svc/GetCustomerWebRequest";
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
    $phone = Session::get('temp_contact');
    $express_otp=$req->verify_otp;
    //print_r($express_otp);
    //print_r($phone);
        $query=DB::table('express_loan_request')
            ->where('otp', $express_otp)
            ->where('mob_no',$phone)
            ->update(['status' => 1]);
          // print_r($query);exit();
        if($query){
          Session::put('contact',$phone);
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
    $post_data=json_encode($req->all());
    // print_r($post_data);
      $url = $this::$url_static."BankAPIService.svc/GetAdityaBirlaAPIReq";
      $result=$this->call_json_data_api($url,$post_data);
      $http_result=json_decode($result['http_result']);
      $error=$result['error'];
      if($http_result=='1'){
                return Response::json(array(
                            'data' => true,
                        ));
            }else{
                return Response::json(array(
                            'data' => false,
                        ));
            }
        
        }

   public function apply_iifl_loan(Request $req){
     if(isset($req->CampaignName)){
             $CampaignName=$req->CampaignName;
            }else{
             $CampaignName='Rupeeboss Online';      
            }

             
    return view('apply-iifl-loan',['CampaignName'=>$CampaignName]);
   }

   public function state(Request $req){
    // print_r($req->all());exit();
    $post_data = '{
   "head": {
    "requestCode": "PLRQSTDD01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },
  
  "body": {"SrchParam":"StateMaster" }
}';
    //call API here to save in DB
        //$post=json_encode($post_data);
     // print_r($post_data);exit();

    $url = $this::$url_static."BankAPIService.svc/getIIFLStateMaster";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);

     $obj = json_decode($m);
     // print_r($obj);exit();
     $a=$obj->body;
     $b=$a->StateMasterValues;
    return response()->json($b);
}   

public function dropdown(Request $req){
    // print_r($req->all());exit();
    $post_data = '{
   "head": {
    "requestCode": "PLRQDD01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },
  
  "body": {"SrchParam":"'.$req['param'].'" }
}';
    //call API here to save in DB
        //$post=json_encode($post_data);
     // print_r($post_data);exit();

    $url = $this::$url_static."/BankAPIService.svc/getIIFLDropdownMasters";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);


     $obj = json_decode($m);
      // print_r($obj);exit();
     $a=$obj->body;
     $b=$a->Values;
    return response()->json($b);
}     



    public function applicant(Request $req){
       $data=$req->all();
       $json_data=json_encode($data);

       $post_data = '{
   "head": {
    "requestCode": "PLRQCL01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },
  
  "body": '.$json_data.'
}';
    //call API here to save in DB
        //$post=json_encode($post_data);
     

    $url = $this::$url_static."/BankAPIService.svc/createIIFLAppDtls";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
    // print_r( $http_result);exit();
      $obj = json_decode($m);
     if($obj->head->status==0){
      Session::put('prospectno',$obj->body->prospectno);
      Session::put('aadhar',$data['AadhaarNumber']);
      Session::put('leadno',$obj->body->leadno);
      //print_r($obj->body->prospectno);exit();
     }
     return response()->json( $obj);
    }

    //co-applicant
    public function co_applicant(Request $req){
       $data=$req->all();
       $data['ProspectNumber']=Session::get('prospectno');
       $data['leadno']=Session::get('leadno');
       $data['ApplicantType']="COBORROWER";
       $json_data=json_encode($data);
       
       $post_data = '{
   "head": {
    "requestCode": "PLRQCOAPP01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },
  
  "body": '.$json_data.'
}';
//print_r($post_data);
$url = $this::$url_static."/BankAPIService.svc/createIIFLCoAppDtls";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
    $obj = json_decode($m);
    print_r($obj);
   return response()->json( $obj);
    } 
    
    public function iifl_eligibility(Request $req){
      // print_r($req->all());
      $quote_data=DB::select('call usp_iifl_pl_eligibility ("'.$req['Company_Cat'].'","'.$req['Monthly_Salary'].'")');
       // print_r($quote_data);
      return $quote_data;
      }

    public function iifl_adhar_otp(){
      $data['Aadharno']=Session::get('aadhar');
      $data['ApplicantType']='Applicant';
      $data['CRMLeadID']=Session::get('leadno');

      $json_data=json_encode($data);
      $post_data = '{
 
  "head": {
   "requestCode": "PLRQAO01",
   "key": "af28dc2bcd8a5660412407313b31d101",
   "appVer": "1.0",
   "osName": "WebAPI",
   "appName": "ALLIANCE",
   "source":"RupeeBoss"
 },
  
  "body": '.$json_data.'
}';
       print_r($post_data);
    $url = $this::$url_static."/BankAPIService.svc/createIIFLAadharOTP";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
     // print_r($obj);exit();
     return response()->json( $obj);
    }  
    
    public function offer_status(){
    $data['prospectNo']=Session::get('prospectno');
    $json_data=json_encode( $data);
    
       $json_data=json_encode($data);
       
       $post_data = '{
   "head": {
    "requestCode": "PLRQOF01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"

  },
  
  "body": '.$json_data.'
}';
// print_r($post_data);exit();
    $url = $this::$url_static."/BankAPIService.svc/getIIFLofferstatus";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
    return response()->json( $obj);
  }

    public function iifl_adhar_confirm_otp(Request $req){
      $data['Aadharno']=Session::get('aadhar');
      $data['ApplicantType']='Applicant';
      $data['CRMLeadID']=Session::get('leadno');
      $data['Otp']=$req->otp;
      $json_data=json_encode($data);
       
       $post_data = '{
   "head": {
    "requestCode": "PLRQVER01",
   "key": "af28dc2bcd8a5660412407313b31d101",
   "appVer": "1.0",
   "osName": "WebAPI",
   "appName": "ALLIANCE",
   "source":"RupeeBoss"


  },
  
  "body": '.$json_data.'
}';
$url = $this::$url_static."/BankAPIService.svc/verifyIIFLAPIAadharOTP";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
   return response()->json( $obj);
    }

    public function iifl_instant_eligibility(Request $req){
      $data=$req->all();
      $data['ProspectNumber']=Session::get('prospectno');
       $json_data=json_encode($data);
   // print_r($data);
       $post_data = '{
  
   "head": {
    "requestCode": "PLRQREVQ01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },
  
  "body": '.$json_data.'
}';
// print_r($post_data);
$url = $this::$url_static."/BankAPIService.svc/updateIIFLRevisedQuote";
    $result=$this->call_json_data_api($url,$post_data);
    $http_result=$result['http_result'];
    $error=$result['error'];
    $st=str_replace('"{', "{", $http_result);
    $s=str_replace('}"', "}", $st);
    $m=$s=str_replace('\\', "", $s);
    $obj = json_decode($m);
    return response()->json( $obj);
    }

    public function iifl_doc_upload(Request $req){
      //print_r($req->all());exit();
     $prospectno=Session::get('prospectno');
      $str = array('identity_proof','address_proof','ownership_proof');
      $cat_id = array(1,2,5);
      for($i=0;$i<3;$i++){
          $base64[$i]=$this->FileToString($str[$i],$req);
             //print_r($base64[$i]);
          $file=$str[$i];
          $imageName = time().'.'.$req->$file->getClientOriginalExtension();
          $extension=$req->$file->getClientOriginalExtension();
          $sub_catg=$req['sub_catg'];
          //print_r($sub_catg);exit();
          $post_data='{
     "head": {
    "requestCode": "PLRQDOCKYC01",
    "key": "af28dc2bcd8a5660412407313b31d101",
    "appVer": "1.0",
    "osName": "WebAPI",
    "appName": "ALLIANCE",
    "source":"RupeeBoss"
  },           
                  "body": {"ProspectNumber":"'.$prospectno.'","ApplicantType":"Applicant",
                 "CatID":"'.$cat_id[$i].'","SubCatID":"'.$sub_catg[$i+1].'","ImageName":"'.$imageName.'","Extension":"'.$extension.'","Base64string":"'.$base64[$i].'"}}';
             
         $url = $this::$url_static."/BankAPIService.svc/uploadIIFLKYC";
         $result=$this->call_json_data_api($url,$post_data);
         $http_result=$result['http_result'];
         $error=$result['error'];
         $st=str_replace('"{', "{", $http_result);
         $s=str_replace('}"', "}", $st);
         $m=$s=str_replace('\\', "", $s);
         $obj = json_decode($m);
         $response[$i]=$obj;
       
    }

     return ($response);
  }

  public function iifl_financial_doc_upload(Request $req){
     $prospectno=Session::get('prospectno');
      $str = array('SalarySatement','BankStatement');
      // print_r($req->all());exit();
      for($i=0;$i<2;$i++){
      $base64[$i]=$this->FileToString($str[$i],$req);
     
      $file=$str[$i];
      $imageName = time().'.'.$req->$file->getClientOriginalExtension();
      $extension=$req->$file->getClientOriginalExtension();
      $sub_catg=$req['sub_catg'];
      $post_data='{"head": {
                 "requestCode": "PLRQDOCFIN01",
                  "key": "af28dc2bcd8a5660412407313b31d101",
                  "appVer": "1.0",
                  "osName": "WebAPI",
                  "appName": "ALLIANCE",
                  "source":"RupeeBoss"
               },               
              "body": {"ProspectNumber":"'.$prospectno.'","ApplicantType":"Applicant",
             "CatID":"'.(4-$i).'","SubCatID":"'.$sub_catg[$i].'","ImageName":"'.$imageName.'","Extension":"'.$extension.'","Base64string":"'.$base64[$i].'"}}';
         

     $url = $this::$url_static."/BankAPIService.svc/uploadIIFLFinDetls";
     $result=$this->call_json_data_api($url,$post_data);
     $http_result=$result['http_result'];
     $error=$result['error'];
     $st=str_replace('"{', "{", $http_result);
     $s=str_replace('}"', "}", $st);
     $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
     $response[$i]=$obj;

    }
     return ($response);
  }

  public function iifl_pincode_status(Request $req){
    // print_r($req->all());
    $data['CRMLeadID']=Session::get('leadno');
    $data['Pincode']=$req->CurrentPin;
    $post_data=json_encode($data);
    // print_r($post_data);
    $url = $this::$url_static."/BankAPIService.svc/getIIFLPincodeDetail";
     $result=$this->call_json_data_api($url,$post_data);
     $http_result=$result['http_result'];
     $error=$result['error'];
     $st=str_replace('"{', "{", $http_result);
     $s=str_replace('}"', "}", $st);
     $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
    
     return response()->json( $obj);
  }
  
   public function iifl_co_pincode_status(Request $req){
    // print_r($req->all());
    $data['CRMLeadID']=Session::get('leadno');
    $data['Pincode']=$req->CoCurrentPin;
    $post_data=json_encode($data);
    // print_r($post_data);
    $url = $this::$url_static."/BankAPIService.svc/getIIFLPincodeDetail";
     $result=$this->call_json_data_api($url,$post_data);
     $http_result=$result['http_result'];
     $error=$result['error'];
     $st=str_replace('"{', "{", $http_result);
     $s=str_replace('}"', "}", $st);
     $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
    
     return response()->json( $obj);
  }

  public function iifl_company_pincode_status(Request $req){
    // print_r($req->all());
    $data['CRMLeadID']=Session::get('leadno');
    $data['Pincode']=$req->CompanyPin;
    $post_data=json_encode($data);
    // print_r($post_data);
    $url = $this::$url_static."/BankAPIService.svc/getIIFLPincodeDetail";
     $result=$this->call_json_data_api($url,$post_data);
     $http_result=$result['http_result'];
     $error=$result['error'];
     $st=str_replace('"{', "{", $http_result);
     $s=str_replace('}"', "}", $st);
     $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
    
     return response()->json( $obj);
  }
  public function iifl_permanent_pincode_status(Request $req){
    // print_r($req->all());
    $data['CRMLeadID']=Session::get('leadno');
    $data['Pincode']=$req->PermanentPin;
    $post_data=json_encode($data);
    // print_r($post_data);
    $url = $this::$url_static."/BankAPIService.svc/getIIFLPincodeDetail";
     $result=$this->call_json_data_api($url,$post_data);
     $http_result=$result['http_result'];
     $error=$result['error'];
     $st=str_replace('"{', "{", $http_result);
     $s=str_replace('}"', "}", $st);
     $m=$s=str_replace('\\', "", $s);
     $obj = json_decode($m);
    
     return response()->json( $obj);
  }

  public function lendingkart(){
    return view('lendingkart');
   }

   public function lendingkart_details(Request $req){
     try {
       $data=$req->all();
          $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
          $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
          $data['source']=Session::get('source')?Session::get('source'):'MAA=';
     
          $post_data=json_encode($data);
          // print_r($post_data);exit();
          $url = $this::$url_static."BankAPIService.svc/createLendingKartLead";
          $result=$this->call_json_data_api($url,$post_data);
          $http_result=$result['http_result'];
          $error=$result['error'];
            $n=(json_decode($http_result));
            if(isset(json_decode($n)->lk_lead_id)){
              $lead_id=(json_decode($n)->lk_lead_id);
            }else{
              return response()->json(array('error' =>2 ));
            }
            Session::put('lendingkart_id',$lead_id);
          return response()->json(json_decode($n));
     } catch (Exception $e) {
        return response()->json(array('error' =>2 ));
     }
     
   }

   public function lendingkart_doc(Request $req){
    $res['status']=0;
    $res['msg']=null;
    try
    {
        $lead_id=Session::get('lendingkart_id');
        $str = array('bank_proof','identity_proof','vat_proof','Proof_of_activity');
        for($i=0;$i<4;$i++){
         
          $file=($req->file($str[$i]));
          $destinationPath = 'uploads/'.$lead_id;
          $filename=$str[$i].".".$file->getClientOriginalExtension();
           if(File::exists($destinationPath."/".$filename)){
           // echo "exists \n";
            continue;
          }
          if($file->getClientOriginalExtension()!='pdf'){
            throw new \Exception("only Pdf are allowed ", 1);
          }
          $file->move($destinationPath,$filename);
       }
    }catch(\Exception $ee){
      $res['status']=1;
      $res['msg']=$ee->getMessage();
    }

   
      $response=json_encode($res);
   return ($response);
   }

   /*test_upload*/
   public function test_doc(){
    return view('test_doc');
   }

  
    public function early_salary(){
      return view('early-salary');
    }

    public function early_salary_submit(Request $req){
      // print_r($req->all());exit();
      $data=$req->all();
      $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
      $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
      $data['source']=Session::get('source')?Session::get('source'):'MAA=';
      $post_data=json_encode($data);
        // print_r($post_data);exit();
      $url = $this::$url_static."/BankAPIService.svc/createEarlySalaryReq";
      $result=$this->call_json_data_api($url,$post_data);
      $http_result=$result['http_result'];
      $error=$result['error'];
      $st=str_replace('"{', "{", $http_result);
      $s=str_replace('}"', "}", $st);
      $m=$s=str_replace('\\', "", $s);
      $obj = json_decode($m);
     // print_r($obj);exit();
     return response()->json( $obj);
    }  
      
}
