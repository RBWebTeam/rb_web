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
class HomeController extends Controller
{
	public function index(){
		$keywords='Home Loan,Business Loan,Personal Loan,Car Loan,Express Loan,Savings Account,Loan Against Property,Small and Medium Size Enterprise Loan,SME Finance,Retail Loan';
		$data['title']='RupeeBoss- Apply for a Loan';
		$data['description']='When You Need A Loan, You are not Alone! View, Compare & get Instant quotes matching your requirements. Apply Online for all kind ofLoan at Lower Interest Rates on Rupeeboss.com. ';
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
		$keywords='Need A Loan,Apply For Loan Online,Compare Loan Rates,Loan Interest Rates,Loan Emi Calculator,Loan Eligibility,Home Loan,Personal Loan,Business Loan,Car Loan,Express Loan,Sme Loan,Loan Against Property,Balance Transfer,Retail Loan'; 

		$data['title']='About Us - RupeeBoss provides all kind of Loans.';
    	$data['description']='To save money, compare and pick lowered interest rates and save thousands on your home loan, personal loan, business loanand car loan only on Rupeeboss.com';
		return view('about-us')->with($data)->with('keywords',$keywords);
	}

	public function disclaimer(){
		return view('disclaimer');

	}
	public function privacy_policy(){
		return view('privacy-policy-page');

	}

	public function comfy_sales(){
		return view('comfy-sales');
	}

	public function express_loan(){
		$keywords='Express Finance Loans, Cash Express Loan, Express Loan Aditya Birla Group, Express Loan Bank, Express Loan Corporation, Express Loan Tribe, Express Loan Eligibility, Apply Online For Express Loan, Emergency Loans , Advance Loans ,Quick And Easy Loans ,Instant Cash Loans'; 

		$data['title']='Express Loan– Instant loan at Low interest rate on Rupeeboss.com';
    	$data['description']='Apply for Express Loan';
		return view('express-loan')->with($data)->with('keywords',$keywords);
	}

	public function credit_card(){
		return view('credit-card');
	}

	public function savings_account(){
		$keywords='Best Saving Rates,Savings Account Online,Highest Rate Savings Account ,Best Interest Savings Account,Savings Bank Account,Savings Account Interest Rate Calculator,Savings Account Benefits';
		$data['title']='Savings Account- Apply online at low interest rate On Rupeeboss.com';
    	$data['description']='Compare & open best savings account Online.Check Eligibility,Benefits & Reviews from top banks and apply at low Interest rate on Rupeeboss.com ';
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
		return view('RBA-login');
	}

   public function RBA_register(Request $req){
		print_r($req->all()	);
		$query=DB::table('rba_register')
		->insert(['Name'=>$req->name,
			     'Email'=>$req->email,
			     'Contact'=>$req->contact,
			    'created_at'=>date("Y-m-d H:i:s"),
   			    'updated_at'=>date("Y-m-d H:i:s")]);
		if($query){
			 	$data ="Thank you for registering.";
               	$email = $req->email;
                $mail = Mail::send('email_view',['data' => $data], function($message) use($email) {
		                $message->from('wecare@rupeeboss.com', 'RupeeBoss');
		                $message->to($email)
		                ->subject('Thankyou');
                	});

                $post_data='{"mobNo":"'.$req->contact.'","msgData":"Thank you for registering.- RupeeBoss.com",
                    "source":"WEB"}';
                $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_VERBOSE, 1);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FAILONERROR, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
                $http_result = curl_exec($ch);
                $error = curl_error($ch);
                $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
                $obj = json_decode($http_result);
                // statusId response 0 for success, 1 for failure
                curl_close($ch);
                return true;
		}
		return false;

	}

	
}