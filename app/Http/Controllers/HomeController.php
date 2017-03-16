<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use Illuminate\Support\Facades\Hash;
class HomeController extends CallApiController
{
	public function index(){
		
		//$product_list=InitialController::prod();
		//print_r($product_list);
		//print_r(InitialController::$pro_code);
		//exit();
		$keywords='Best Loans,Loans in India,Credit Cards,Loans Online,Apply for Loan online,Compare Loan,Loan at Low Interest Rate';
		$data['title']='Compare & Apply Loans & Credit Cards In India- Rupeeboss.com';
		$data['description']='Apply For All Kinds of Loans at Lowest Interest Rate. Use loan & EMI Calculator, Compare Loan & Credit Cards & get quotes instantly as Per requirement on Rupeeboss.com';
		// $data['city'] = DB::table('city_master')->select('City_Name','state_id','City_Id')->get();
		// $data['loan'] = DB::table('product_master')->select('Product_Name','Product_Id')->get();
		//print "<pre>";
		//print_r($data);
		// $data['proc_city']=DB::select("call  usp_get_bank_quot (6000000,15,2900000,'M',100000,20000,'1985-12-12','N',0,0,10000000,500000,50000,500000,2)");
		// print "<pre>";
		 //print_r($data['proc_city']);exit();
	    return view('index')->with('keywords',$keywords)->with($data);
	}
	public function footercontent($id){
		$data['bank_name'] = $id;
	    return view('bank-wise-product')->with($data);
	}

	public function about_us(){
		$keywords='Compare Loans,Apply for Loan,Credit Cards,Balance Transfer,Car Loan,Personal Loan,Home Loan,Loan against Property,Business Loan,SME Loan'; 

		$data['title']='About Us | RupeeBoss Provide all kinds of Loans & Credit Cards';
    	$data['description']='To Save Money, Compare and Pick Lowered Interest Rate, Apply for all kinds of Loans, Credit Cards, Transfer your balance instantly on Rupeeboss.com';
		return view('about-us')->with($data)->with('keywords',$keywords);
	}

	public function disclaimer(){
		$keywords='Rupeeboss Disclaimer,Apply for all Kinds of Loans'; 
		$data['title']=' Rupeeboss | Disclaimer';
    	$data['description']='Know the Disclaimer of Rupeeboss, where user can easily compare and apply for all kinds of Loans, Credit Cards. Compare & Switch for balance Transfer on Rupeeboss.com';
		return view('disclaimer')->with($data)->with('keywords',$keywords);

	}
	public function privacy_policy(){
		$keywords='Privacy Policy,Rupeeboss Privacy Policy'; 
        $data['title']='Rupeeboss | Privacy Policy.';
    	$data['description']='Rupeeboss Privacy Policy demonstrates our commitment to your financial privacy. We can help you gain the confidence you need to make important financial decisions.';
		return view('privacy-policy-page')->with($data)->with('keywords',$keywords);

	}

	public function comfy_sales(){
		return view('comfy-sales');
	}

	public function express_loan(){
		$keywords='Express Finance Loans, Cash Express Loan, Express Loan Aditya Birla Group, Express Loan Bank, Express Loan Corporation, Express Loan Tribe, Express Loan Eligibility, Apply Online For Express Loan, Emergency Loans , Advance Loans ,Quick And Easy Loans ,Instant Cash Loans'; 

		$data['title']='Express Loan– Instant loan at Low interest rate on Rupeeboss.com';
    	$data['description']='Get loans approved instantly. Express Loan provide quick loans at lowest interest apply Online on Rupeeboss.com';
		return view('express-loan')->with($data)->with('keywords',$keywords);
	}

	public function credit_card(){
		$keywords='Apply for Credit Card,Credit Card Status,Credit card application,Free credit cards,Apply credit card online,Credit Card Offers & Eligibility';
		$data['title']='Credit Card | Compare & Apply Online on Rupeeboss.com';
    	$data['description']='Top Credit Card Offers 2017: Compare and apply online for best Offers & Eligibility on Rupeeboss.com';
		return view('credit-card')->with($data)->with('keywords',$keywords);
	}

	public function savings_account(){
		$keywords='Best Saving Rates,Savings Account Online,Highest Rate Savings Account ,Best Interest Savings Account,Savings Bank Account,Savings Account Interest Rate Calculator,Savings Account Benefits';
		$data['title']='Savings Account- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Compare & Open Best Savings Account Online. Check Eligibility, Benefits &Reviews from top banks and apply at low Interest rate on Rupeeboss.com ';
		return view('savings-account')->with($data)->with('keywords',$keywords);
	}

	public function lead_status(){
		$data['a'] = DB::table('user_registration')
       ->orderBy('user_registration.contact', 'DESC')
		->get();
		print"<pre>";
		print_r($data['a']);
		
	}

	public function RBA_login(){
		$keywords='Loan Agent,Become a Loan Agent,Be a Loan Agent,RBA Login';
		$data['title']='RupeeBoss Agent Login';
    	$data['description']='Become A High-Income Rupeeboss Agent With a Wide Variety Of Loans! Register Now on Rupeeboss.com';
		return view('RBA-login')->with($data)->with('keywords',$keywords);
	}

   public function RBA_register(Request $req){
		 
		$query=DB::table('rba_register')
		->insert(['Name'=>$req->name,
			     'Email'=>$req->email,
			     'Contact'=>$req->contact,
			    'created_at'=>date("Y-m-d H:i:s"),
   			    'updated_at'=>date("Y-m-d H:i:s")]);
		if($query){
			 	
                
                $post_data='{"City":"0","Email_Id":"'.$req->email.'","UserPassword":"","contact_No":"'.$req->contact.'","first_Name":"'.$req->name.'","last_Name":"","parentBrokerId":"","parentEmpCode":"","source":"dwBlAGIA"}';
                // print_r($web);exit();
                $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/insBrokerDataForRBA";
                // print_r($post_data);exit();
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=json_decode($result['http_result']);
               // print_r($http_result->status);exit();
                if($http_result->status =="success"){
                	$data ="Thank you for registering.";
               	$email = $req->email;
                $mail = Mail::send('email_view',['data' => $data], function($message) use($email) {
		                $message->from('wecare@rupeeboss.com', 'RupeeBoss');
		                $message->to($email)
		                ->subject('Thankyou');
                	});

                	$post_data_new='{"mobNo":"'.$req->contact.'","msgData":"Thank you for registering.- RupeeBoss.com",
                    "source":"WEB"}';
                $url_new = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                $result_new=$this->call_json_data_api($url_new,$post_data_new);
                $http_result_new=$result_new['http_result'];
                $error_new=$result_new['error'];
                $obj = json_decode($http_result_new);
               // print_r($obj);
                 // print_r($http_result);exit();
                if($obj->statusId==0 && $http_result->statusId==0){
                	return 'true';
                }else{
                	return 'false';
                }

                }else{
                	return 'false';
                }
                





		}
		return false;

	} 



	public function credit_card_compare($id){
		 // print_r($id);exit();
		if ($id=="RBL-Card") {
			$data['title']='RBL Bank Credit Cards  | Apply for Credit Card Online on Rupeeboss.com';
        $keywords='RBL Titanium Delight Card,RBL Platinum Maxima Card,RBL Platinum Delight Card,RBL Card Offers,Best Credit Cards in India,Credit Card Deals & Offers';
        $data['description']='RBL Bank Credit Cards with Exclusive Benefits and Offers on Various types of Cards including cards to suit your needs across Titanium and Platinum cards';
		}
		elseif ($id=="ICICI-Card") {
			$data['title']='ICICI Bank Credit Cards  | Apply for Credit Card Online on Rupeeboss.com';
        $keywords='Credit Cards,Compare Credit Cards,Credit Cards Online,Best Credit Cards in India,Credit Card Deals & Offers,ICICI Credit Card';
        $data['description']='ICICI Credit Card - Use Rupeeboss Platform to Compare Credit Cards in India and Apply Online On Rupeeboss.com ';
		}
		else{
			$data['title']='HDFC Bank Credit Card | Compare & Apply Online on Rupeeboss.com';
        $keywords='HDFC Credit Cards,HDFC Bank Credit Card,HDFC Credit Card Online Apply,Best Credit Cards in India';
        $data['description']='HDFC Bank Credit Card - Use Rupeeboss Platform To Compare Credit Cards in India and Apply Online On Rupeeboss.com ';
		}

         return view('credit_card_compare')->with($data)->with('keywords',$keywords);

	}
}