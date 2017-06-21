<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
class UploadController extends CallApiController
{

    public function Upload()
    {
        return view('doc_upload');
    }

    public function UploadPost(Request $request)
    {
        //print_r($request->app_id);exit;
       
        $doc = array('Identity_Proof','Income_Proof','Address_Proof');
        
        $response=0;
        for( $i=0;$i<3;$i++){
            try{
                $str=$doc[$i];
                $imageName = time().'.'.$request->$str->getClientOriginalExtension();
                $extension=$request->$str->getClientOriginalExtension();
                $filename = $request->$str->getpathName();//Image path
                $file =fopen($filename, "rb");
                $contents = fread($file, filesize($filename));
                $byteArray = unpack("C*",$contents); 
                $data=array_values(($byteArray));
                $post="[".implode(',',$data)."]";
                $post_data='{"docType":"'.$doc[$i].'","docextension":"'.$extension.'",
                            "refFBAId":"'.$request->app_id.'","bytes":'.$post.'}';
                // $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/uploadCustLoanDoc";
                            // print_r($post_data);
                            print_r($byteArray); exit();
                $url = $this::$service_url_static."LoginDtls.svc/xmlservice/uploadCustLoanDoc";
                $result=$this->call_json_data_api($url,$post_data);
                $http_result=$result['http_result'];
                $error=$result['error'];
                $obj = json_decode($http_result);
              
                //print_r($obj->statusId);exit();
                    // return ($http_result);

                if($obj->statusId==1){
                    
                    $response=1;

                }else{
                     

               // print_r($mail);exit();
                }
                }catch(Exception $ee){
                    return $ee;
                }
        }
      if($response){
        return view('went-wrong');
      }
      $data=$request->app_id;

                //$headers="Content-Type: text/html; charset=ISO-8859-1\r";
                $email ='wecare@rupeeboss.com';
                $mail = Mail::send('email_view_upload',['data' => $data], function($message) use($email) {
                $message->from('software.support@rupeeboss.com', 'RupeeBoss');
                $message->to($email)
                ->subject('Loan application submitted');

                });
        return view('thank-you');
    }
    
    public function iifl_upload(Request $req){
        

    }

    public function smemailersender(Request $req){
          
          return view('smemailer');
    }


     public function smemailer(Request $req){
          
                  $data1=$req->all(); 

                  $data=$data1['fullname'];

                  // print_r($data);exit();
                $email ='scriptdp@gmail.com';
                $mail = Mail::send('email_view_sme',['data' => $data], function($message) use($email) {
                $message->from('scriptdp@gmail.com', 'RupeeBoss');
                $message->to($email)
                ->subject('Loan application submitted');

                });
 

          //return view('smemailer');
 

}

}