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
		$keywords='Loans At Low Interest Rate, Best Loans, Loan Interest Rates, Best Credit Cards, Apply For Loan Online, Compare Loan, Check Loan Eligibility, Calculate EMI, Compare Credit Cards';
		$data['title']='RupeeBoss - Apply for all kind of Loan On Rupeeboss.com';
		$data['description']='Apply For All Kinds of Loans at Lowest Interest Rate. Use loan & EMI Calculator, Compare Loan & Credit Cards & get quotes instantly as per requirement on Rupeeboss.com ';
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
    	$data['description']='To Save Money, Compare and Pick LoweredInterest Rates and apply for all kinds of home loans, personal loans, car loans, Business loans only on Rupeeboss.com';
		return view('about-us')->with($data)->with('keywords',$keywords);
	}

	public function disclaimer(){
		$keywords='Rupeeboss Disclaimer'; 
		$data['title']=' Rupeeboss – Disclaimer';
    	$data['description']='Disclaimer by Rupeeboss to Provide Discrepancy and Transparency with Customers.';
		return view('disclaimer')->with($data)->with('keywords',$keywords);

	}
	public function privacy_policy(){
		$keywords='Privacy Policy,Rupeeboss Privacy Policy'; 
        $data['title']='Rupeeboss – Privacy Policy.';
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
		$keywords='Credit card apply,Credit card status,Credit card application,Free credit cards,Apply credit card online,Credit Card Offers & Eligibility';
		$data['title']='Credit Card – Compare & Apply Online on Rupeeboss.com';
    	$data['description']='Top Credit Card Offers 2017: Compare and apply online for best Offers & Eligibility on Rupeeboss.com ';
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
		$keywords='Loan Agent,Become A Loan Agent,Be A Loan Agent';
		$data['title']='Rupeeboss Agent Login';
    	$data['description']='Become A High-Income Rupeeboss Agent With a Wide Variety Of Loans! Register Now with Rupeeboss.com ';
		return view('RBA-login')->with($data)->with('keywords',$keywords);
	}

   public function RBA_register(Request $req){
		// print_r($req->all()	);
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

	// public function RBA_employee(Request $req){


	// 	echo('ok..........');

	// }

	
}