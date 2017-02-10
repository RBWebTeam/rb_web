<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
class CompareController extends Controller
{
    //
 
    public function compare(Request $req){


            return view('compare');
           exit;

         if(count($req->bank_id)==3){
          
            $val=$req->bank_id[0];
            $val1=$req->bank_id[1];
            $val2=$req->bank_id[2];
                
 $getQuery= DB::table('bank_master')
    ->join('bank_product_web_intrest','bank_product_web_intrest.Bank_Id',
     '=', 'bank_master.Bank_Id')
    ->select(   
       'bank_master.Bank_Name')
    ->where('bank_product_web_intrest.Product_Id', '=',9)
    ->whereIn('bank_master.Bank_Id', array($val,$val1,$val2))
    ->get();
    

  //     $getQuery= DB::table('bank_master')
  // ->whereIn('Bank_Id', array($val,$val1,$val2))
  // ->get();
  
  foreach ($getQuery as $key => $value) {
    echo $value->Bank_Name;
    echo " <br>";
  }

               return view('compare');


         }else{

             echo "error";
         }

     
    
    }



    public function view_loan(){
        // if(Session::get('is_login')){
    	   return view('view-loan');
       //}else{
         //   return redirect('/');
       // }
        
    }
 	// public function emi(){
  //       //print_r("hiiiiiiiiiii");
  //   	return view('emi');
  //   }
    public function emi2(){
        return view('emi/emi');
    }
     public function emi_cal(Request $req){
        $data=$req->all();
        return view('emi/emi_cal')->with($data);
    }
    public function credit_report(){
      $keywords='credit report free,credit score,free credit report and score,how to get free credit report ';
      $data['title']='Check your Credit Score online on Rupeeboss.com';
      $data['description']='Check your free credit scores, reports and insights. Get the info you need to take control of your credit from Rupeeboss.com';
      $data['telephone']=DB::table('experian_telephonetype')
      ->select('Telephone_Name','Telephone_Value')
      ->get();
      $data['city'] = DB::table('city_master')
      ->select('City_Name','state_id','City_Id')
      ->get();
      $data['state'] = DB::table('experian_state_master')
      ->select('State_Id','State_Code','State_Name')
      ->get();
      $contact=Session::get('contact');
      $login=Session::get('is_login');
       if($login){
          //if already login then remove contact from old seessions
          Session::forget('contact');
          }

      if($contact || $login){
          return view('credit-report')->with($data)->with('keywords',$keywords);
        }else{
           return view('credit-report-otp');
        }
     
     //  print "<pre>";
      //print_r($data['state']);exit();
     
    }

    public function otp_page(){
      if(Session::get('is_login'))
        return $this->credit_report();
      else
      return view('credit-report-otp');
    }

 public function send_otp(Request $req){
   //$otp=123456;
   $otp = mt_rand(100000, 999999);
    Session::put('contact', $req['contact']);
     $qu=DB::table('credit_req_lead')
              ->insertGetId([
                'contact'=> $req['contact'],
                'otp'=>$otp,
                'status'=>'Not Verified',
                'created_at'=>date("Y-m-d H:i:s")

      ]);
       Session::put('otp_id', $qu);
       if($qu>0){
            //calling service to send sms 
            $post_data='{"mobNo":"'.$req['contact'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
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
            if($obj->{'statusId'}==0){
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

 public function verify_otp(Request $req){
  $phone = Session::get('contact');
    $id=Session::get('otp_id');
        $query=DB::table('credit_req_lead')
            ->where('id', $id)
            ->where('otp',$req['verify'])
            ->update(['status' => 'verified']);
           
        if($query){
          return Response::json(array(
                            'data' => true,
                        ));
        }else{
         return Response::json(array(
                            'data' => false,
                        ));
        }
 }

    public function switchme($loan){
        // print"<pre>";print_r($loan);exit();
      if ($loan=="home-loan") {
        $data['title']='Transfer Home Loan Balance Online';
        $keywords='Home loan balance transfer,How to transfer home loan,Home loan transfer,Home loan refinance,Home Loan Balance Transfer Process ,Online Balance Transfer,Transferring Home Loan,Home Loan Balance Transfer Calculator';
        $data['description']='Lets find out how much you can save. Compare home loan transfer rates from one bank to another and Get low interest rate by applying for Home Loan Balance Transfer on Rupeeboss.com';
      }elseif ($loan=="personal-loan") {
         $data['title']='Transfer Personal Loan Balance Online';
        $keywords='How to Transfer Personal Loan Balance Online,Personal Loan Balance Transfer,Personal Loan Balance Transfer Eligibility Criteria,Personal Loan Balance Transfer Interest rates,Personal Loan Balance Transfer Calculator,Personal Loan Balance Transfer Process ';
        $data['description']='Lets find out how much you can save. Compare and Apply to multiple banks for the Best offers on personal loan balance transfer On Rupeeboss.com.';
      }else{
         $data['title']='Transfer Loan Against Property Online';
        $keywords='Loan Against Property Transfer,Loan Against Property EMI Calculator,Loan Against Property Balance Transfer Process,Loan Against Property Balance Transfer Interest rates,Compare Loan Against Property Balance Transfer';
        $data['description']='Lets find out how much you can save.Transfer your Loan Against Property at lowest interest Rate. Enter Details, Compare and Switch for balance Transfer on Rupeeboss.com';
      }
      $data['loan'] =$loan;
      return view('emi/switch_me')->with($data)->with('keywords',$keywords);
    }

    public function calculation(Request $req){
      // print_r($req->all());exit();

     $getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","'.$req['product_id'].'")');

    $resultArray = json_decode(json_encode($getQuery), true);
     
        if (!empty($resultArray)) {
            $loanamount=$req['loanamount'];
            $loaninterest=$req['loaninterest']/12/100;
            $loanterm=$req['loanterm'];
            $brokerid = $req['brokerid'];

            $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
              $total =(($amount*$loanterm)-$loanamount);

              $ttl_payment = $loanamount+$total;

         //savings//
        if($getQuery[0]->roi==0){
            $getQuery[0]->roi=1;
          }
            $new_rate=$getQuery[0]->roi/12/100;
            $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $new_total =(($new_amount*$loanterm)-$loanamount);
            $new_ttl_payment = $loanamount+$new_total;
            $drop_emi= $amount-$new_amount;
            $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
            $savings=$total-$new_total;
            $per_lacs=100000 * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

            $borrow=$drop_emi/$per_lacs;

            // $aaa= $loanamount/100000;
            // $emiperlacs=($drop_emi/$aaa);

      $test =json_decode(json_encode($getQuery),true);

      $user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm,
            'product_id'=>$req['product_id'],'brokerid'=>$brokerid);
            $returnHTML = view('emi/switch_cal')->with('data', $test)->with('sata', $user)->render();
            return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings,'borrow'=>$borrow,  'html'=>$returnHTML));                            
            }
              else{
   
              return response()->json(array('success' => false));

                 }



      
                 }


      public function after_transfer_calculation(Request $req){
                $loanamount=$req['loanamount'];

                $loaninterest=$req['loaninterest']/12/100;
                $loanterm=$req['loanterm']*12;
                $old_loaninterest=$req['old_loaninterest']/12/100;
                $old_drop_emi=$req['old_drop_emi'];
                 // print_r($loanamount."".$loaninterest."".$loanterm."".$old_drop_emi);exit();
         

                $emi = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));

                $old_emi = $loanamount * $old_loaninterest * (pow(1 + $old_loaninterest, $loanterm) / (pow(1 + $old_loaninterest, $loanterm) - 1));

                $old_total=(($old_emi*$loanterm)-$loanamount);

                $total_payable_interest=(($emi*$loanterm)-$loanamount);

                $after_savings=$old_total- $total_payable_interest;

                $per_lacs=100000 * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));

                $borrow=$old_drop_emi/$per_lacs;

                 $drop_emi_new=$old_emi-$emi;

                 $drop_in_int_new=(($old_loaninterest*12*100)-($loaninterest*12*100));
                  //print_r($drop_in_int_new);exit();
       
                return response()->json(array('success' => true,'emi' => $emi,
                                          'after_savings'=>$after_savings,'loaninterest'=>$loaninterest*12*100,'borrow'=>$borrow,'drop_emi_new'=>$drop_emi_new,'drop_in_int_new'=>$drop_in_int_new));
             
                }
    public function switchme_mobile(){
                 return view('emi/balance_transfer');
      }
      
      public function calculationfordc(Request $req){
                $getQuery=DB::select('call usp_get_balance_transfer_quot("'.$req['loanamount'].'","'.$req['loaninterest'].'","12")');
                // print_r($getQuery);exit();
                $resultArray = json_decode(json_encode($getQuery), true);

     
                if (!empty($resultArray)) {
                $loanamount=$req['loanamount'];
                $loaninterest=$req['loaninterest']/12/100;
                $loanterm=$req['loanterm'];


                $amount = $loanamount * $loaninterest * (pow(1 + $loaninterest, $loanterm) / (pow(1 + $loaninterest, $loanterm) - 1));
                $total =(($amount*$loanterm)-$loanamount);

                $ttl_payment = $loanamount+$total;

                //savings//
                if($getQuery[0]->roi==0){
                $getQuery[0]->roi=1;
          }
                $new_rate=$getQuery[0]->roi/12/100;
                $new_amount = $loanamount * $new_rate * (pow(1 + $new_rate, $loanterm) / (pow(1 + $new_rate, $loanterm) - 1));

                $new_total =(($new_amount*$loanterm)-$loanamount);
                $new_ttl_payment = $loanamount+$new_total;
                $drop_emi= $amount-$new_amount;
                $drop_in_int=(($loaninterest*12*100)-($new_rate*12*100));
                $savings=$total-$new_total;
                $emiperlacs=($new_amount/100000);

                $test =json_decode(json_encode($getQuery),true);

                $user =array('loanamount' => $loanamount, 'loaninterest' => $loaninterest , 'loanterm'=> $loanterm );
                $returnHTML = view('emi/switch_cal2')->with('data', $test)->with('sata', $user)->render();
                return response()->json(array('success' => true, 'amount'=>$amount, 'new_amount'=>$new_amount, 'drop_emi'=>$drop_emi,'drop_in_int'=>$drop_in_int, 'savings'=>$savings, 'emiperlacs'=> $emiperlacs, 'html'=>$returnHTML));                            
            }
                else{
   
                return response()->json(array('success' => false));

                 }



      
                 }

 

 
                 }
?>
