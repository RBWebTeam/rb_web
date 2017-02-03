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
   // print_r($product);exit();

		      $getQuery=DB::select('call usp_bankwise_detail("'.$product.'","'.$bank.'")');
          $product_query=json_decode(json_encode($getQuery));

          //  print "<pre>";
          // print_r($getQuery);exit();
       $bank_detail=DB::table('bank_master')->select('Bank_Name','Document1')
                      ->where('Bank_Id','=',$bank)
                      ->first();
      $product_detail=DB::table('product_master')->select('Product_Name')
                      ->where('Product_Id','=',$product)
                      ->first();      
                       // print_r($product_detail->Product_Name);exit();
    $data['bank_name'] =$bank_detail->Bank_Name;
    $data['Bank_Logo'] =$bank_detail->Document1;
    $data['product']   =$product_detail->Product_Name;
    $data['product_id']=$product;
    $data['bank_id']=$bank;
    // print_r($data['product']);exit();
     // print_r($data);exit();
      return view('bank-wise-product',['getQuery'=>$getQuery])->with($data);



	}


public function compareLoan($loan){

$getQuery=DB::select('call  usp_compare_banklist ("'.$loan.'")');
$product_query=DB::table('product_master')->select('Product_Id','Product_Name')
                      ->where('Product_ID','=',$loan)
                      ->first();  


  //     if($product_query){

  //     $getQuery= DB::table('bank_product_web_intrest')
  //   ->join('bank_master', 'bank_master.Bank_Id', '=', 'bank_product_web_intrest.bank_id')
  //   ->join('bank_product_web_pf', 'bank_product_web_pf.product_id', '=', 'bank_product_web_intrest.Product_Id')
  //   ->join('bank_product_web', 'bank_product_web.Product_Id', '=', 'bank_product_web_intrest.Product_Id')
  //   ->select(
  //      'bank_product_web_intrest.amt_from',
  //      'bank_product_web_intrest.amt_to','bank_product_web_intrest.roi', 
  //      'bank_master.Bank_Name',
  //      'bank_product_web_pf.pf',
  //      'bank_product_web.Min_Tenure','bank_product_web.Max_Tenure',
  //      'bank_master.Document1 AS Bank_Logo')
  //   ->where('bank_product_web_intrest.Product_Id', '=',$loan)
  //   ->orderBy('bank_product_web_intrest.roi', 'DESC')
  // ->take('4')
  // ->get();
    
    

  return view('view-loan',['home_loan'=>$product_query->Product_Name,'getQuery'=>$getQuery]);

// }else{
//   echo "wrong";
// }
          
    }


}