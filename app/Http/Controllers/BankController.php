<?php

namespace App\Http\Controllers;
use App\Libraries\TestClass;
use Illuminate\Http\Request;
use App\SEOlibraries\Seo;
use App\Http\Requests;
use DB;
class BankController extends Controller
{


	public function index(Request $req){
		
	    return view('bank-wise-product');
	}

	public function home_loanBank($product,$bank){
    // $keywords='';
    // $seo=new Seo();
 
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
          // print_r($data['bank_name']);exit();
    $data['Bank_Logo'] =$bank_detail->Document1;
    $data['product']   =$product_detail->Product_Name;
    $data['product_id']=$product;
     // print_r( $data['product']);exit();
    $data['bank_id']=$bank;
    // keywords,title and description
    if ($data['bank_name']=='ICICI BANK' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='ICICI Bank Home Loan,ICICI Housing Loan,ICICI Bank Home Loan Interest Rate, Apply Online For ICICI Bank Home Loan,ICICI Home Loan Eligibility,ICICI Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='ICICI Bank Home Loan,ICICI Housing Loan,ICICI Bank Home Loan Interest Rate, Apply Online For ICICI Bank Home Loan,ICICI Home Loan Eligibility,ICICI Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Axis bank Home loan,Axis Bank Home Loan Interest Rate,Axis Bank Home Loan Eligibility,Axis Bank Home Loan Calculator,Apply Online For Axis Bank Home Loan,Axis Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='Axis bank Home loan,Axis Bank Home Loan Interest Rate,Axis Bank Home Loan Eligibility,Axis Bank Home Loan Calculator,Apply Online For Axis Bank Home Loan,Axis Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='DBS' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='DBS Bank Home Loan,DBS Housing Loan ,DBS Bank Home Loan Interest Rate,Apply Online For DBS Bank Home Loan,DBS Home Loan Eligibility,DBS Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='DBS Bank Home Loan,DBS Housing Loan ,DBS Bank Home Loan Interest Rate,Apply Online For DBS Bank Home Loan,DBS Home Loan Eligibility,DBS Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='DCB BANK' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='DCB Home / Micro Home Loans,DCB Bank Home Loan Interest Rate,Apply Online For DCB Bank Home Loan,DCB Home Loan Eligibility,Flexi Emi Home Loan';
      $data['description']='DCB Home / Micro Home Loans,DCB Bank Home Loan Interest Rate,Apply Online For DCB Bank Home Loan,DCB Home Loan Eligibility,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='HDFC Bank Home Loan,HDFC Housing Loan,HDFC Bank Home Loan Interest Rate,Apply Online For HDFC Bank Home Loan,HDFC Home Loan Eligibility,HDFC Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='HDFC Bank Home Loan,HDFC Housing Loan,HDFC Bank Home Loan Interest Rate,Apply Online For HDFC Bank Home Loan,HDFC Home Loan Eligibility,HDFC Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='IDFC BANK' && $data['product']=='Home Loan') {
     $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='IDFC Bank Home Loan,IDFC Bank Emi Calculator,IDFC Home Loan Eligibility,IDFC Bank Home Loan Interest Rate,Flexi Emi Home Loan';
      $data['description']='IDFC Bank Home Loan,IDFC Bank Emi Calculator,IDFC Home Loan Eligibility,IDFC Bank Home Loan Interest Rate,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='IIFL' && $data['product']=='Home Loan') {
     $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='IIFL Bank Home Loan,IIFL Housing Loan,IIFL Bank Home Loan Interest Rate,Apply Online For IIFL Bank Home Loan,IIFL Home Loan Eligibility,IIFL Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='IIFL Bank Home Loan,IIFL Housing Loan,IIFL Bank Home Loan Interest Rate,Apply Online For IIFL Bank Home Loan,IIFL Home Loan Eligibility,IIFL Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='INDIABULLS HOUSING FINANCE LIMITED' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Apply For Home Loan At Indiabulls Housing Finance Ltd,Indiabulls Home Loans,Indiabulls Home Loan Emi Calculator,Indiabulls Home Loan Interest Rate,Flexi Emi Home Loan';
      $data['description']='Apply For Home Loan At Indiabulls Housing Finance Ltd,Indiabulls Home Loans,Indiabulls Home Loan Emi Calculator,Indiabulls Home Loan Interest Rate,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Kotak Mahindra Bank Home Loan,Home Loan EMI Calculator,Home Loan Re-payment Options By Kotak Bank,Apply Online For Home Loan At Kotak Mahindra Bank,Flexi Emi Home Loan';
      $data['description']='Kotak Mahindra Bank Home Loan,Home Loan EMI Calculator,Home Loan Re-payment Options By Kotak Bank,Apply Online For Home Loan At Kotak Mahindra Bank,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='PNB HOUSING FINANCE LTD' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Home Purchase Loan At PNB Housing Finance,Home Loan Eligibility Of PNB,Home Loan EMI Calculator Of PNB,Apply For Home Loan With PNB Finance,PNB Housing Finance For Best Fixed Home,Loan Rates,Flexi Emi Home Loan';
      $data['description']='Home Purchase Loan At PNB Housing Finance,Home Loan Eligibility Of PNB,Home Loan EMI Calculator Of PNB,Apply For Home Loan With PNB Finance,PNB Housing Finance For Best Fixed Home,Loan Rates,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='STANDARD CHARTERED BANK' && $data['product']=='Home Loan') {
     $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Apply For Home Loan At Standard Charter,Home Loan EMI Calculator,Home Loan Eligibility Of Standard Charter Bank,Home Loan Interest Rate Of Standard Charter,Flexi Emi Home Loan';
      $data['description']='Apply For Home Loan At Standard Charter,Home Loan EMI Calculator,Home Loan Eligibility Of Standard Charter Bank,Home Loan Interest Rate Of Standard Charter,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='TATA CAPITAL HOUSING FINANCE LIMITED' && $data['product']=='Home Loan') {
     $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='Tata Capital Home Loan Interest Rate,Tata Home Loans,Tata Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='Tata Capital Home Loan Interest Rate,Tata Home Loans,Tata Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='YES BANK' && $data['product']=='Home Loan') {
      $data['title']='Home Loans - Apply for Home Loan Online at Low Interest Rate';
      $keywords='YES Bank Home Loan,Interest Rate Of YES Bank For Home Loan,YES Bank Emi Calculator,Flexi Emi Home Loan';
      $data['description']='YES Bank Home Loan,Interest Rate Of YES Bank For Home Loan,YES Bank Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Personal Loan') {
      $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Axis Bank Personal Loan,Axis Bank Personal Loan Eligibility,Personal Loan Interest Rate Of Axis Bank';
      $data['description']='Axis Bank Personal Loan,Axis Bank Personal Loan Eligibility,Personal Loan Interest Rate Of Axis Bank';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Personal Loan') {
     $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='HDFC Bank Personal Loan,Apply Personal Loan Online At HDFC Bank,Personal Loan At Lower Rate';
      $data['description']='HDFC Bank Personal Loan,Apply Personal Loan Online At HDFC Bank,Personal Loan At Lower Rate';
    }
    elseif ($data['bank_name']=='BAJAJ FINANCE LIMITED' && $data['product']=='Personal Loan') {
     $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Bajaj Finance Personal Loan,Apply For Personal Loan At Bajaj Finance,Loan Interest Of Bajaj Finance';
      $data['description']='Bajaj Finance Personal Loan,Apply For Personal Loan At Bajaj Finance,Loan Interest Of Bajaj Finance';
    }
    elseif ($data['bank_name']=='FULLERTON INDIA CREDIT COMPANY LIMITED' && $data['product']=='Personal Loan') {
      $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Apply for Personal Loan Online Fullerton India';
      $data['description']='Apply for Personal Loan Online Fullerton India';
    }
    elseif ($data['bank_name']=='ICICI BANK' && $data['product']=='Personal Loan') {
     $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Personal Loan At ICICI Bank,Apply Online For ICICI Bank Personal Loan';
      $data['description']='Personal Loan At ICICI Bank,Apply Online For ICICI Bank Personal Loan';
    }
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Personal Loan') {
      $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Kotak Mahindra Bank Personal Loan,Apply For Personal Loan Online At Kotak Mahindra';
      $data['description']='Kotak Mahindra Bank Personal Loan,Apply For Personal Loan Online At Kotak Mahindra';
    }
    elseif ($data['bank_name']=='TATA CAPITAL HOUSING FINANCE LIMITED' && $data['product']=='Personal Loan') {
     $data['title']='Personal Loans - Apply for Personal Loan Online at Low Interest Rate';
      $keywords='Tata Capital Personal Loan';
      $data['description']='Tata Capital Personal Loan';
    }
    elseif ($data['bank_name']=='INTELLECASH MICROFINANCE NETWORK COMPANY PVT LTD' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Intellecash Short Term Business Loan,Apply For Business Loan At Intellecash';
      $data['description']='Intellecash Short Term Business Loan,Apply For Business Loan At Intellecash';
    }
    elseif ($data['bank_name']=='MAGMA FINCORP LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Magma SME Loans,Magma Business Loans';
      $data['description']='Magma SME Loans,Magma Business Loans';
    }
    elseif ($data['bank_name']=='ICICI BANK' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='ICICI Bank Business Loan,Apply Online At ICICI Business Loan';
      $data['description']='ICICI Bank Business Loan,Apply Online At ICICI Business Loan';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Business Loan') {
    $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='HDFC Bank Business Loan,Apply Online For HDFC Bank Business Loan,HDFC Bank Business Loan Eligibility,Business Loan Low Interest Rate At HDFC Bank';
      $data['description']='HDFC Bank Business Loan,Apply Online For HDFC Bank Business Loan,HDFC Bank Business Loan Eligibility,Business Loan Low Interest Rate At HDFC Bank';
    }
    elseif ($data['bank_name']=='INDUSIND BANK' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Indusind Bank Business Loan,Apply For Business Loan At Indusind Bank';
      $data['description']='Indusind Bank Business Loan,Apply For Business Loan At Indusind Bank';
    }
    elseif ($data['bank_name']=='UPF (Kapitaltech)' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='';
      $data['description']='';
    }
    elseif ($data['bank_name']=='RATNAKAR BANK LTD' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='RBL Bank Business Loan ,RBL bank Business Loan & Eligibility Criteria';
      $data['description']='RBL Bank Business Loan ,RBL bank Business Loan & Eligibility Criteria';
    }
    elseif ($data['bank_name']=='STANDARD CHARTERED BANK' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Apply For Business Loan At Standard Charter,Standard Chartered Unsecured Business Loan,Standard Chartered Business Loan Interest Rate,Standard Chartered Bank Business Loan Application Form,Business Installment Loan Standard Chartered Bank,Standard Chartered Loan For Business,Standard Chartered Bank Business Loan Statement';
      $data['description']='Apply For Business Loan At Standard Charter,Standard Chartered Unsecured Business Loan,Standard Chartered Business Loan Interest Rate,Standard Chartered Bank Business Loan Application Form,Business Installment Loan Standard Chartered Bank,Standard Chartered Loan For Business,Standard Chartered Bank Business Loan Statement';
    }
    elseif ($data['bank_name']=='TATA CAPITAL HOUSING FINANCE LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Tata Capital Business Loan Eligibility,Tata Capital Business Loan Interest Rate,Business Loan From Tata Capital';
      $data['description']='Tata Capital Business Loan Eligibility,Tata Capital Business Loan Interest Rate,Business Loan From Tata Capital';
      
    }
    elseif ($data['bank_name']=='CAPITAL FIRST LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Capital First Business Loan Rate Of Interest,Capital First Business Loan Status,Capital First Business Loan Rate Of Interest,Capital First Business Loan Eligibility';
      $data['description']='Capital First Business Loan Rate Of Interest,Capital First Business Loan Status,Capital First Business Loan Rate Of Interest,Capital First Business Loan Eligibility';
    }
    elseif ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Axis Bank Business Loan Interest Rate,Axis Bank Business Loan Status,Axis Bank Business Loan Application Form,Axis Bank Business Loan Process,Axis Bank Small Business Loan,Axis Bank Business Loan Details,Axis Bank Business Loan Scheme,Axis Bank Business Loan Eligibility,Business Loan By Axis Bank';
      $data['description']='Axis Bank Business Loan Interest Rate,Axis Bank Business Loan Status,Axis Bank Business Loan Application Form,Axis Bank Business Loan Process,Axis Bank Small Business Loan,Axis Bank Business Loan Details,Axis Bank Business Loan Scheme,Axis Bank Business Loan Eligibility,Business Loan By Axis Bank';
    }
    elseif ($data['bank_name']=='ADITYA BIRLA HOUSING FINANCIAL LIMITED' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Aditya Birla Business Loan';
      $data['description']='Aditya Birla Business Loan';
    }
    elseif ($data['bank_name']=='EDELWEISS FINANCE LIMITED' && $data['product']=='Business Loan') {
    $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Edelweiss Business Loan,Edelweiss Business Loan Eligibility,Edelweiss Business Loan  Fees and charges,Edelweiss Business Loan Offers';
      $data['description']='Edelweiss Business Loan,Edelweiss Business Loan Eligibility,Edelweiss Business Loan  Fees and charges,Edelweiss Business Loan Offers';
    }
    elseif ($data['bank_name']=='DHFL' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='DHFL Business Loan,DHFL Business Loan Interest Rate';
      $data['description']='DHFL Business Loan,DHFL Business Loan Interest Rate';
    }
    elseif ($data['bank_name']=='DEUTSCHE BANK' && $data['product']=='Business Loan') {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Deutsche Bank Business Loan Interest Rates,Deutsche Bank Business Loan,Deutsche Bank India Business Loan,Deutsche Bank Business Loan Emi Calculator';
      $data['description']='Deutsche Bank Business Loan Interest Rates,Deutsche Bank Business Loan,Deutsche Bank India Business Loan,Deutsche Bank Business Loan Emi Calculator';
    }
      
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Business Loan') 
    {
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Kotak Mahindra Bank Business Loan,Kotak Mahindra Bank Business Loan Eligibility,Kotak Mahindra Bank Business Loan Interest Rate,Business Loan From Kotak Mahindra Bank';
      $data['description']='Kotak Mahindra Bank Business Loan,Kotak Mahindra Bank Business Loan Eligibility,Kotak Mahindra Bank Business Loan Interest Rate,Business Loan From Kotak Mahindra Bank';
    }
    elseif ($data['bank_name']=='BAJAJ FINANCE LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Bajaj Finance Ltd Business Loan,Bajaj Finance Business Loan Rate Of Interest,Bajaj Finance Business Loan Application,Bajaj Finance Business Loan Calculator,Bajaj Finance Business Loan Eligibility';
      $data['description']='Bajaj Finance Ltd Business Loan,Bajaj Finance Business Loan Rate Of Interest,Bajaj Finance Business Loan Application,Bajaj Finance Business Loan Calculator,Bajaj Finance Business Loan Eligibility';
    }
    elseif ($data['bank_name']=='LENDINGKART' && $data['product']=='Business Loan') {
      $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Lendingkart Business Loan,Lendingkart Funding';
      $data['description']='Lendingkart Business Loan,Lendingkart Funding';
    }
    else{
     $data['title']='Business Loan – Apply for Business Loan Online at Low Interest Rate';
      $keywords='Fullerton India Business Loan,Fullerton India Business Loan Interest Rate,Fullerton India Business Loan Emi Calculator,Fullerton India Business Loan Eligibility';
      $data['description']='Fullerton India Business Loan,Fullerton India Business Loan Interest Rate,Fullerton India Business Loan Emi Calculator,Fullerton India Business Loan Eligibility'; 
    }

   
 // if($product_detail->Product_Name=='Home Loan'){
 //  $bank__name=$seo->home_loan_BankName_seo();
 //       if(isset($bank__name[$bank_detail->Bank_Name])){
 //        $keywords=$bank__name[$bank_detail->Bank_Name];
 //       }

 // }

  
 
      return view('bank-wise-product',['getQuery'=>$getQuery])->with($data)->with('keywords',$keywords);;


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