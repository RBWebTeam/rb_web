<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Mail;
use Session;
use App\credit_card_form_req;
use App\SEOlibraries\Seo;
class CreditcardController extends CallApiController
{
     public function credit_card_form(Request $req){

             $query=new Seo();



            return view('credit-card-form')->with($query->CreditCardForm());
     }

     public function credit_form_submit(Request $req){
        // print_r($req->all());exit();
        try{
            $save=new credit_card_form_req(); 
            $id=$save->store($req);
            $newDob = date("d-m-Y",strtotime(str_replace('-','/', $req['DateOfBirth'])));
            $req['DateOfBirth']=str_replace('-', '/',$newDob);
            $data=$req->all();
            $data['brokerid']=Session::get('brokerid')?Session::get('brokerid'):'MAA=';
            $data['empid']=Session::get('empid')?Session::get('empid'):'MAA=';
            $data['source']=Session::get('source')?Session::get('source'):'MAA=';
            $data['type']='DC';
            
            $data['ChannelType']='RupeeBoss';
            $data['CampaignName']=Session::get('CampaignName');
            if($data['ICICIBankRelationship']!='Salary'){
                unset($data['ICICIRelationshipNumber']);
            }
            $post_data=json_encode($data);
            // print_r($post_data);exit();
            $url = $this::$url_static."BankAPIService.svc/PostIciciBank";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            $error=$result['error'];
            $st=str_replace('"{', "{", $http_result);
            $s=str_replace('}"', "}", $st);
            $m=$s=str_replace('\\', "", $s);
            $update_user='';
            $obj = json_decode($m);
            if ($obj->ApplicationId) 
            {
                $update_user=DB::table('credit_card_form_req')
                 ->where('id',$id)
                 ->update(['ApplicationId'=>$obj->ApplicationId]);
                 if(!$update_user){
                    $error=2;  
                }else{  
                    $error =json_encode( array('id' =>$obj->ApplicationId,'Decision'=>$obj->Decision,'Reason'=>$obj->Reason ));
                  }
            }else{
                $error=2;
            }
             return $error; 
        }catch(\Exception $ee){
            print_r($ee->getMessage());
        }
    }

    public function icici_credit_card_form(Request $req){

                
        
            return view('icici-credit-card-form',['prod'=>$req->prod,'amount'=>$req->amount,'interest'=>$req->interest]);
     }

     public function icici_form(){
            return view('icici');
     }


      public function icici_dc(){

               
         return view('icici-dc');

     }

     public function to_view_on_browser_url(Request $req){
        $status=1;
       try{
               $url=$this::$current_domain_static."icici-dc";
               
               $data="Please click on this url to view on browser :\n".$url;
               // print_r($data);exit();
               $email = $req['urlemailid'];
               $mail = Mail::send('email_view',['data' => $data], function($message) use($email) {
                               $message->from('wecare@rupeeboss.com', 'RupeeBoss');
                               $message->to($email)
                               ->subject('ICICI Credit Card Link');
                           });
                if (Mail::failures()) {
                   $status=0;
                }
           }catch(\Exception $ee){

                $status=0;
           }
       return response()->json($status);
     }

 public function credit_card_rbl(Request $req){
            //removing all prv card details
            $req->session()->forget('rbl_card_id');
            //getting details and checking correct id sent
            $card_id=($req['card'] && $req['card']<=3 && $req['card']>0 )?$req['card']:1;
            $card_data = array( 1=>array('id'=>"16",'card'=>'Titanium Delight Card'),2=>array('id'=>"21",'card' =>'Platinum Maxima Card'),3=>array('id'=>"24",'card'=>'Platinum Delight Card'));
            //if came directly
            
            $name=$card_data[$card_id]['card'];
            Session::put('rbl_card_id',$card_data[$card_id]['id']);
            $data=DB::table('rbl_city_master')->select('city_code','city_name')->get();
           
            return view('credit-card-rbl')->with('data',$data)->with('card',$name);
     }
    public function rbl_cc_post(Request $req){
        // $str='"{\"?xml\":{\"@version\":\"1.0\",\"@encoding\":\"UTF-8\"},\"ns0:Response\":{\"@xmlns:ns0\":\"http:\/\/www.kotak.com\/schemas\/HL-InsertResponse.xsd\",\"ns0:Status\":\"1\",\"ns0:ReferenceCode\":\"#HLR4EEPHSK\",\"ns0:UniqueRefCode\":\"330321\",\"ns0:ErrorCode\":\"0\",\"ns0:ErrorInfo\":null,\"ns0:RequestIP\":\"10.10.19.191\"}}"';
        // $data=str_replace('ns0:','', $str);
        // print_r(json_decode( json_decode($data)));
        // echo "\n";
        // print_r($str);

        // exit();


        unset($req['_token']);
        //random gen token
        $req['ConUniqRefCode'] = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 15)), 0, 15);
        $req['Version']="6";
        //formatting date
        $req['DOB'] = date("d-m-Y", strtotime($req['DOB']));
        $req['CreditCardApplied']=Session::get('rbl_card_id');
        $req['Title']=(int)$req['Title'];
        $req['EmpType']=(int)$req['EmpType'];
        $req['ResCity']=(int)$req['ResCity'];
        $data=$req->all();
        
        
        $post_data =json_encode(array("CreditCard"=> $data));
    // print_r($post_data);exit();
       //  print_r($post_data);exit();
         $url = $this::$url_static."BankAPIService.svc/createRBLCreditCardReq ";
        $result=$this->call_json_data_api($url,$post_data);
        $http_result=$result['http_result'];
        $error=$result['error'];
        $st=str_replace('"{', "{", $http_result);
        $s=str_replace('}"', "}", $st);
        $m=$s=str_replace('\\', "", $s);
        $n=$s=str_replace('#', "", $m);
        $obj=json_decode($n);
        

        return json_encode($obj);
    }
}


