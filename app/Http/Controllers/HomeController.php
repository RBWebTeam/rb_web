<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class HomeController extends Controller
{
	public function index(){
		$keywords='Home Loan,Business Loan,Personal Loan,Car Loan,Express Loan,Savings Account,Loan Against Property,Small and Medium Size Enterprise Loan,SME Finance,Retail Loan';
		// $data['city'] = DB::table('city_master')->select('City_Name','state_id','City_Id')->get();
		// $data['loan'] = DB::table('product_master')->select('Product_Name','Product_Id')->get();
		//print "<pre>";
		//print_r($data);
		// $data['proc_city']=DB::select("call  usp_get_bank_quot (6000000,15,2900000,'M',100000,20000,'1985-12-12','N',0,0,10000000,500000,50000,500000,2)");
		// print "<pre>";
		 //print_r($data['proc_city']);exit();
	    return view('index')->with('keywords',$keywords);
	}
	public function footercontent($id){
		$data['bank_name'] = $id;
	    return view('bank-wise-product')->with($data);
	}

	public function about_us(){
		return view('about-us');
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
		return view('express-loan');
	}

	public function credit_card(){
		return view('credit-card');
	}

	public function savings_account(){
		return view('savings-account');
	}

	public function lead_status(){
		$data['a'] = DB::table('user_registration')
       ->orderBy('user_registration.contact', 'DESC')
		->get();
		print"<pre>";
		print_r($data['a']);
		
	}



	
}