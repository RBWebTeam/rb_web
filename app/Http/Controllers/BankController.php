<?php

namespace App\Http\Controllers;
use App\Libraries\TestClass;
use Illuminate\Http\Request;
use App\SEOlibraries\Seo;
use App\Http\Requests;
use DB;
class BankController extends InitialController
{


	public function index(Request $req){
		
	    return view('bank-wise-product');
	}

	public function home_loanBank($product,$bank){




           $product=ucwords(str_replace('-',' ',$product));
           $bank= strtoupper(str_replace('-',' ',$bank));
           $getQuery=DB::select('call usp_bankwise_detail("'.$product.'","'.$bank.'")');
           $product_query=json_decode(json_encode($getQuery));
        
          
   


       $bank_detail=DB::table('bank_master')->select('Bank_Name','Document1','bank_id')
                      ->where('Bank_Code','=',$bank)
                      ->first();
                       // print_r($bank_detail->Bank_Name);
      $product_detail=DB::table('product_master')->select('Product_Name','product_id')
                      ->where('Product_Name','=',$product)
                      ->first();      
                     //  print_r($product_detail->Product_Name);exit();


    if($bank_detail && $product_detail){
      $data['bank_name'] =$bank_detail->Bank_Name;
          // print_r($data['bank_name']);exit();
    $data['Bank_Logo'] =$bank_detail->Document1;
    $data['product']   =$product_detail->Product_Name;
  //  $data['product_id']=$product;
     $data['product_id']=$product_detail->product_id;
     // print_r( $data['product']);exit();
    $data['bank_id']=$bank_detail->bank_id;
    }else{
      // echo "hello";exit();
      return view('went-wrong');
    }                

 
    // keywords,title and description
    if($bank=='ICICI' && $product=='Home Loan'){
      $data['title']='ICICI Bank | Home Loan Eligibility & Rate of Interest ';
      $keywords='ICICI Bank Home Loan,ICICI Housing Loan,ICICI Bank Home Loan Interest Rate, Apply Online For ICICI Bank Home Loan,ICICI Home Loan Eligibility,ICICI Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='ICICI Bank Home Loan,ICICI Housing Loan,ICICI Bank Home Loan Interest Rate, Apply Online For ICICI Bank Home Loan,ICICI Home Loan Eligibility,ICICI Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }else if ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Home Loan') {
      $data['title']='Axis Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='Axis bank Home loan,Axis Bank Home Loan Interest Rate,Axis Bank Home Loan Eligibility,Axis Bank Home Loan Calculator,Apply Online For Axis Bank Home Loan,Axis Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='Axis bank Home loan,Axis Bank Home Loan Interest Rate,Axis Bank Home Loan Eligibility,Axis Bank Home Loan Calculator,Apply Online For Axis Bank Home Loan,Axis Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='DBS' && $data['product']=='Home Loan') {
      $data['title']='DBS Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='DBS Bank Home Loan,DBS Housing Loan ,DBS Bank Home Loan Interest Rate,Apply Online For DBS Bank Home Loan,DBS Home Loan Eligibility,DBS Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='DBS Bank Home Loan,DBS Housing Loan ,DBS Bank Home Loan Interest Rate,Apply Online For DBS Bank Home Loan,DBS Home Loan Eligibility,DBS Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='DCB BANK' && $data['product']=='Home Loan') {
      $data['title']='DCB Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='DCB Home / Micro Home Loans,DCB Bank Home Loan Interest Rate,Apply Online For DCB Bank Home Loan,DCB Home Loan Eligibility,Flexi Emi Home Loan';
      $data['description']='DCB Home / Micro Home Loans,DCB Bank Home Loan Interest Rate,Apply Online For DCB Bank Home Loan,DCB Home Loan Eligibility,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Home Loan') {
      $data['title']='HDFC Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='HDFC Bank Home Loan,HDFC Housing Loan,HDFC Bank Home Loan Interest Rate,Apply Online For HDFC Bank Home Loan,HDFC Home Loan Eligibility,HDFC Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='HDFC Bank Home Loan,HDFC Housing Loan,HDFC Bank Home Loan Interest Rate,Apply Online For HDFC Bank Home Loan,HDFC Home Loan Eligibility,HDFC Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='IDFC BANK' && $data['product']=='Home Loan') {
     $data['title']='IDFC Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='IDFC Bank Home Loan,IDFC Bank Emi Calculator,IDFC Home Loan Eligibility,IDFC Bank Home Loan Interest Rate,Flexi Emi Home Loan';
      $data['description']='IDFC Bank Home Loan,IDFC Bank Emi Calculator,IDFC Home Loan Eligibility,IDFC Bank Home Loan Interest Rate,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='IIFL' && $data['product']=='Home Loan') {
     $data['title']='IIFL | Home Loan Eligibility & Rate of Interest';
      $keywords='IIFL Bank Home Loan,IIFL Housing Loan,IIFL Bank Home Loan Interest Rate,Apply Online For IIFL Bank Home Loan,IIFL Home Loan Eligibility,IIFL Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='IIFL Bank Home Loan,IIFL Housing Loan,IIFL Bank Home Loan Interest Rate,Apply Online For IIFL Bank Home Loan,IIFL Home Loan Eligibility,IIFL Bank Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='INDIABULLS HOUSING FINANCE LIMITED' && $data['product']=='Home Loan') {
      $data['title']='Indiabulls | Home Loan Eligibility & Rate of Interest';
      $keywords='Apply For Home Loan At Indiabulls Housing Finance Ltd,Indiabulls Home Loans,Indiabulls Home Loan Emi Calculator,Indiabulls Home Loan Interest Rate,Flexi Emi Home Loan';
      $data['description']='Apply For Home Loan At Indiabulls Housing Finance Ltd,Indiabulls Home Loans,Indiabulls Home Loan Emi Calculator,Indiabulls Home Loan Interest Rate,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Home Loan') {
      $data['title']='Kotak Mahindra Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='Kotak Mahindra Bank Home Loan,Home Loan EMI Calculator,Home Loan Re-payment Options By Kotak Bank,Apply Online For Home Loan At Kotak Mahindra Bank,Flexi Emi Home Loan';
      $data['description']='Kotak Mahindra Bank Home Loan,Home Loan EMI Calculator,Home Loan Re-payment Options By Kotak Bank,Apply Online For Home Loan At Kotak Mahindra Bank,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='PNB HOUSING FINANCE LTD' && $data['product']=='Home Loan') {
      $data['title']='PNB Housing Finance | Home Loan Eligibility & Rate of Interest';
      $keywords='Home Purchase Loan At PNB Housing Finance,Home Loan Eligibility Of PNB,Home Loan EMI Calculator Of PNB,Apply For Home Loan With PNB Finance,PNB Housing Finance For Best Fixed Home,Loan Rates,Flexi Emi Home Loan';
      $data['description']='Home Purchase Loan At PNB Housing Finance,Home Loan Eligibility Of PNB,Home Loan EMI Calculator Of PNB,Apply For Home Loan With PNB Finance,PNB Housing Finance For Best Fixed Home,Loan Rates,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='STANDARD CHARTERED BANK' && $data['product']=='Home Loan') {
     $data['title']='Standard Chartered | Home Loan Eligibility & Rate of Interest';
      $keywords='Apply For Home Loan At Standard Charter,Home Loan EMI Calculator,Home Loan Eligibility Of Standard Charter Bank,Home Loan Interest Rate Of Standard Charter,Flexi Emi Home Loan';
      $data['description']='Apply For Home Loan At Standard Charter,Home Loan EMI Calculator,Home Loan Eligibility Of Standard Charter Bank,Home Loan Interest Rate Of Standard Charter,Flexi Emi Home Loan';
    }
    elseif ($bank=='TATA CAPITAL' && $product=='Home Loan') {
     $data['title']='TATA Capital | Home Loan Eligibility & Rate of Interest';
      $keywords='Tata Capital Home Loan Interest Rate,Tata Home Loans,Tata Home Loan Emi Calculator,Flexi Emi Home Loan';
      $data['description']='Tata Capital Home Loan Interest Rate,Tata Home Loans,Tata Home Loan Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='YES BANK' && $data['product']=='Home Loan') {
      $data['title']='Yes Bank | Home Loan Eligibility & Rate of Interest';
      $keywords='YES Bank Home Loan,Interest Rate Of YES Bank For Home Loan,YES Bank Emi Calculator,Flexi Emi Home Loan';
      $data['description']='YES Bank Home Loan,Interest Rate Of YES Bank For Home Loan,YES Bank Emi Calculator,Flexi Emi Home Loan';
    }
    elseif ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Personal Loan') {
      $data['title']='Axis Bank | Personal Loan Eligibility & Rate of Interest';
      $keywords='Axis Bank Personal Loan,Axis Bank Personal Loan Eligibility,Personal Loan Interest Rate Of Axis Bank';
      $data['description']='Axis Bank Personal Loan,Axis Bank Personal Loan Eligibility,Personal Loan Interest Rate Of Axis Bank';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Personal Loan') {
     $data['title']='HDFC Bank | Personal Loan Eligibility & Rate of Interest';
      $keywords='HDFC Bank Personal Loan,Apply Personal Loan Online At HDFC Bank,Personal Loan At Lower Rate';
      $data['description']='HDFC Bank Personal Loan,Apply Personal Loan Online At HDFC Bank,Personal Loan At Lower Rate';
    }
    elseif ($data['bank_name']=='BAJAJ FINANCE LIMITED' && $data['product']=='Personal Loan') {
     $data['title']='Bajaj Finance | Personal Loan Eligibility & Rate of Interest';
      $keywords='Bajaj Finance Personal Loan,Apply For Personal Loan At Bajaj Finance,Loan Interest Of Bajaj Finance';
      $data['description']='Bajaj Finance Personal Loan,Apply For Personal Loan At Bajaj Finance,Loan Interest Of Bajaj Finance';
    }
    elseif ($data['bank_name']=='FULLERTON INDIA CREDIT COMPANY LIMITED' && $data['product']=='Personal Loan') {
      $data['title']='Fullerton India | Personal Loan Eligibility & Rate of Interest';
      $keywords='Apply for Personal Loan Online Fullerton India';
      $data['description']='Apply for Personal Loan Online Fullerton India';
    }
    elseif ($bank=='ICICI' && $product=='Personal Loan') {
      $data['title']='ICICI Bank |  Personal Loan Eligibility & Rate of Interest';
      $keywords='Personal Loan At ICICI Bank,Apply Online For ICICI Bank Personal Loan';
      $data['description']='Personal Loan At ICICI Bank,Apply Online For ICICI Bank Personal Loan';
    }
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Personal Loan') {
      $data['title']='Kotak Mahindra Bank | Personal Loan Eligibility & Rate of Interest';
      $keywords='Kotak Mahindra Bank Personal Loan,Apply For Personal Loan Online At Kotak Mahindra';
      $data['description']='Kotak Mahindra Bank Personal Loan,Apply For Personal Loan Online At Kotak Mahindra';
    }
    elseif ($bank=='TATA CAPITAL' && $product=='Personal Loan') {
     $data['title']='TATA Capital | Personal Loan Eligibility & Rate of Interest';
      $keywords='Tata Capital Personal Loan';
      $data['description']='Tata Capital Personal Loan';
    }else if($bank=='CAPITAL FIRST' && $product=='Personal Loan'){

      $data['title']='Capital First | Personal Loan Eligibility & Rate of Interest';
      $keywords='Capital First Personal Loan Interest rate,Capital First Personal Loan,Capital First Personal Loan Eligibility';
      $data['description']='Capital First Personal Loan Interest rate,Capital First Personal Loan,Capital First Personal Loan Eligibility';

    }elseif ($data['bank_name']=='INTELLECASH MICROFINANCE NETWORK COMPANY PVT LTD' && $data['product']=='Business Loan') {
      $data['title']='Intellecash | Business Loan Eligibility';
      $keywords='Intellecash Short Term Business Loan,Apply For Business Loan At Intellecash';
      $data['description']='Intellecash Short Term Business Loan,Apply For Business Loan At Intellecash';
    }
    elseif ($data['bank_name']=='MAGMA FINCORP LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Magma Finecorp | Business Loan Eligibility';
      $keywords='Magma SME Loans,Magma Business Loans';
      $data['description']='Magma SME Loans,Magma Business Loans';
    }
    elseif ($bank=='ICICI' && $data['product']=='Business Loan') {
     $data['title']='ICICI Bank |  Business Loan Eligibility ';
      $keywords='ICICI Bank Business Loan,Apply Online At ICICI Business Loan';
      $data['description']='ICICI Bank Business Loan,Apply Online At ICICI Business Loan';
    }
    elseif ($data['bank_name']=='HDFC LTD' && $data['product']=='Business Loan') {
    $data['title']='HDFC Bank | Business Loan Eligibility';
      $keywords='HDFC Bank Business Loan,Apply Online For HDFC Bank Business Loan,HDFC Bank Business Loan Eligibility,Business Loan Low Interest Rate At HDFC Bank';
      $data['description']='HDFC Bank Business Loan,Apply Online For HDFC Bank Business Loan,HDFC Bank Business Loan Eligibility,Business Loan Low Interest Rate At HDFC Bank';
    }
    elseif ($data['bank_name']=='INDUSIND BANK' && $data['product']=='Business Loan') {
      $data['title']='IndusInd Bank | Business Loan Eligibility';
      $keywords='Indusind Bank Business Loan,Apply For Business Loan At Indusind Bank';
      $data['description']='Indusind Bank Business Loan,Apply For Business Loan At Indusind Bank';
    }
    elseif ($data['bank_name']=='UPF (Kapitaltech)' && $data['product']=='Business Loan') {
      $data['title']='Kapitaltech | Business Loan Eligibility';
      $keywords='';
      $data['description']='';
    }
    elseif ($data['bank_name']=='RATNAKAR BANK LTD' && $data['product']=='Business Loan') {
     $data['title']='RBL Bank | Business Loan Eligibility';
      $keywords='RBL Bank Business Loan ,RBL bank Business Loan & Eligibility Criteria';
      $data['description']='RBL Bank Business Loan ,RBL bank Business Loan & Eligibility Criteria';
    }
    elseif ($data['bank_name']=='STANDARD CHARTERED BANK' && $data['product']=='Business Loan') {
      $data['title']='Standard Chartered | Business Loan Eligibility';
      $keywords='Apply For Business Loan At Standard Charter,Standard Chartered Unsecured Business Loan,Standard Chartered Business Loan Interest Rate,Standard Chartered Bank Business Loan Application Form,Business Installment Loan Standard Chartered Bank,Standard Chartered Loan For Business,Standard Chartered Bank Business Loan Statement';
      $data['description']='Apply For Business Loan At Standard Charter,Standard Chartered Unsecured Business Loan,Standard Chartered Business Loan Interest Rate,Standard Chartered Bank Business Loan Application Form,Business Installment Loan Standard Chartered Bank,Standard Chartered Loan For Business,Standard Chartered Bank Business Loan Statement';
    }
    elseif ($bank=='TATA CAPITAL' && $product=='Business Loan') {
      $data['title']='TATA Capital | Business Loan Eligibility';
      $keywords='Tata Capital Business Loan Eligibility,Tata Capital Business Loan Interest Rate,Business Loan From Tata Capital';
      $data['description']='Tata Capital Business Loan Eligibility,Tata Capital Business Loan Interest Rate,Business Loan From Tata Capital';
      
    }
    elseif ($data['bank_name']=='CAPITAL FIRST LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Capital First | Business Loan Eligibility';
      $keywords='Capital First Business Loan Rate Of Interest,Capital First Business Loan Status,Capital First Business Loan Rate Of Interest,Capital First Business Loan Eligibility';
      $data['description']='Capital First Business Loan Rate Of Interest,Capital First Business Loan Status,Capital First Business Loan Rate Of Interest,Capital First Business Loan Eligibility';
    }
    elseif ($data['bank_name']=='AXIS BANK LTD' && $data['product']=='Business Loan') {
     $data['title']='Axis Bank | Business Loan Eligibility';
      $keywords='Axis Bank Business Loan Interest Rate,Axis Bank Business Loan Status,Axis Bank Business Loan Application Form,Axis Bank Business Loan Process,Axis Bank Small Business Loan,Axis Bank Business Loan Details,Axis Bank Business Loan Scheme,Axis Bank Business Loan Eligibility,Business Loan By Axis Bank';
      $data['description']='Axis Bank Business Loan Interest Rate,Axis Bank Business Loan Status,Axis Bank Business Loan Application Form,Axis Bank Business Loan Process,Axis Bank Small Business Loan,Axis Bank Business Loan Details,Axis Bank Business Loan Scheme,Axis Bank Business Loan Eligibility,Business Loan By Axis Bank';
    }
    elseif ($bank=='ADITYA BIRLA' && $product=='Business Loan') {
     $data['title']='Aditya Birla | Business Loan Eligibility';
      $keywords='Aditya Birla Business Loan';
      $data['description']='Aditya Birla Business Loan';
    }
    elseif ($data['bank_name']=='EDELWEISS FINANCE LIMITED' && $data['product']=='Business Loan') {
    $data['title']='Edelweiss | Business Loan Eligibility';
      $keywords='Edelweiss Business Loan,Edelweiss Business Loan Eligibility,Edelweiss Business Loan  Fees and charges,Edelweiss Business Loan Offers';
      $data['description']='Edelweiss Business Loan,Edelweiss Business Loan Eligibility,Edelweiss Business Loan  Fees and charges,Edelweiss Business Loan Offers';
    }
    elseif ($data['bank_name']=='DHFL' && $data['product']=='Business Loan') {
     $data['title']='DHFL | Business Loan Eligibility';
      $keywords='DHFL Business Loan,DHFL Business Loan Interest Rate';
      $data['description']='DHFL Business Loan,DHFL Business Loan Interest Rate';
    }
    elseif ($data['bank_name']=='DEUTSCHE BANK' && $data['product']=='Business Loan') {
     $data['title']='Deutsche Bank | Business Loan Eligibility';
      $keywords='Deutsche Bank Business Loan Interest Rates,Deutsche Bank Business Loan,Deutsche Bank India Business Loan,Deutsche Bank Business Loan Emi Calculator';
      $data['description']='Deutsche Bank Business Loan Interest Rates,Deutsche Bank Business Loan,Deutsche Bank India Business Loan,Deutsche Bank Business Loan Emi Calculator';
    }
      
    elseif ($data['bank_name']=='KOTAK MAHINDRA BANK' && $data['product']=='Business Loan') 
    {
     $data['title']='Kotak Mahindra Bank | Business Loan Eligibility';
      $keywords='Kotak Mahindra Bank Business Loan,Kotak Mahindra Bank Business Loan Eligibility,Kotak Mahindra Bank Business Loan Interest Rate,Business Loan From Kotak Mahindra Bank';
      $data['description']='Kotak Mahindra Bank Business Loan,Kotak Mahindra Bank Business Loan Eligibility,Kotak Mahindra Bank Business Loan Interest Rate,Business Loan From Kotak Mahindra Bank';
    }
    elseif ($data['bank_name']=='BAJAJ FINANCE LIMITED' && $data['product']=='Business Loan') {
      $data['title']='Bajaj Finance | Business Loan Eligibility';
      $keywords='Bajaj Finance Ltd Business Loan,Bajaj Finance Business Loan Rate Of Interest,Bajaj Finance Business Loan Application,Bajaj Finance Business Loan Calculator,Bajaj Finance Business Loan Eligibility';
      $data['description']='Bajaj Finance Ltd Business Loan,Bajaj Finance Business Loan Rate Of Interest,Bajaj Finance Business Loan Application,Bajaj Finance Business Loan Calculator,Bajaj Finance Business Loan Eligibility';
    }
    elseif ($data['bank_name']=='LENDINGKART' && $data['product']=='Business Loan') {
      $data['title']='Lendingkart | Business Loan Eligibility';
      $keywords='Lendingkart Business Loan,Lendingkart Funding';
      $data['description']='Lendingkart Business Loan,Lendingkart Funding';
    }
    else{
     $data['title']='Fullerton India | Business Loan Eligibility';
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

if ($product_query->Product_Name=='Home Loan') 
{
 $data['title']='Home Loan- Check & Compare Home Loan from Thousand Of Banks';
      $keywords='Compare Home Loan Interest Rates,Compare Home Loan Interest Rates In India ,Compare Home Loan EMI ,Compare Home Loan Interest Rate Of Different Banks,Compare Home Loan Eligibility,Compare Home Loan Online,Comparison Of Home Loans';
      $data['description']='Check & Compare Home Loan from Thousand of Banks. And Apply for Home Loan At Lowest Interest Rate On Rupeeboss.com'; 
}
elseif ($product_query->Product_Name=='Personal Loan') {
  $data['title']='Personal Loan- Check & Compare Personal Loan from Thousand Of Banks';
      $keywords='Compare Personal Loan Interest Rates,Compare Personal Loan Interest Rates India  ,Compare Personal Loan Offers,Compare Personal Loan Online,Compare Personal Loan Interest Rates Of Different Banks,Comparison Of Personal Loans';
      $data['description']='Check & Compare Personal Loan from Thousand of Banks. And Apply for PersonalLoan At Lowest Interest Rate On Rupeeboss.com';
}
else{
  $data['title']=' Loan Against Property – Check & Compare LoanAgainst Property From Thousand Of Banks';
      $keywords='Loan Against Property Interest Rate,Compare Loan Against Property Rates Online,Property Rates Compare online';
      $data['description']='Check & Compare Loan Against Property From Thousand of Banks. And Apply for Loan At Lowest Interest Rate On Rupeeboss.com';
}
    

  return view('view-loan',['home_loan'=>$product_query->Product_Name,'getQuery'=>$getQuery])->with('keywords',$keywords)->with($data);

// }else{
//   echo "wrong";
// }
          
    }

	public function rbl_personal_loan(){
		
		 
		 return view('rbl-personal-loan');
	}
	
	public function pay_online(){
		return view('pay-online');
	}

}