<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UploadController extends Controller
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
                $post_data='{"docType":"Identity_Proof","docextension":"'.$extension.'",
                            "refFBAId":"'.$request->app_id.'","bytes":'.$post.'}';
                $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/uploadCustLoanDoc";
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
                
                curl_close($ch);
                //print_r($obj->statusId);exit();
                    // return ($http_result);

                if($obj->statusId==1){
                    
                    $response=1;

                }
                }catch(Exception $ee){
                    return $ee;
                }
        }
      if($response){
        return view('went-wrong');
      }
    	return view('thank-you');
    }

}