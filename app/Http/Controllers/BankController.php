<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class BankController extends Controller
{
	public function index(Request $req){
		
	    return view('bank-wise-product');
	}

	public function home_loanBank($product,$bank){
   //print_r($bank);exit();

		      $product_query=DB::table('bank_master')->select('Bank_Id','Bank_Name')
                      ->where('Bank_Name','=',str_replace('-',' ',$bank))
                      ->first();    
                 // echo $product_query->Bank_Id;

        $data['product'] =$product;

        $getQuery=DB::table('bank_product_web_intrest')
            ->join('bank_product_web', 'bank_product_web_intrest.bank_id', '=', 'bank_product_web.Bank_id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('bank_product_web_intrest.bank_id AS bank_id', 'bank_product_web_intrest.amt_from AS amt_from','bank_product_web_intrest.amt_to AS amt_to','bank_product_web_intrest.roi AS roi',  'bank_product_web.Max_Loan_Amt AS Max_Loan_Amt','bank_product_web.Min_Income AS Min_Income','bank_product_web.Min_Age AS Min_Age', 'bank_product_web.Max_Age AS Max_Age','bank_product_web.Min_Tenure AS Min_Tenure','bank_product_web.Max_Tenure AS Max_Tenure','bank_product_web.Women_roi AS Women_roi','bank_product_web.MinCredit_Score AS MinCredit_Score')
            ->where('bank_product_web_intrest.bank_id','=',$product_query->Bank_Id)
            ->where('bank_product_web.Profession','=','1')
            ->orderBy('bank_product_web_intrest.roi', 'ASC')
            ->take('6')
            ->get();
   

    $data['bank_name'] =$product_query->Bank_Name;
	    return view('bank-wise-product',['getQuery'=>$getQuery])->with($data);



	}
}