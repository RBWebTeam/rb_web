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
    	$this->validate($request, [
            'Identity_Proof' => 'required',
            'Income_Proof' => 'required',
            'Address_Proof' => 'required'
        ]);
         $imageName = time().'.'.$request->Identity_Proof->getClientOriginalExtension();
         $type=array(($request->Identity_Proof));
         print_r($type);exit();
        $request->Identity_Proof->move(public_path('Upload'), $imageName);
         $post_data='{"mobNo":"'.$req['contact'].'","msgData":"your otp is '.$otp.' - RupeeBoss.com",
                    "source":"WEB"}';
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



       // print "<pre>";
    	//print_r($request->all());
    	//print_r($imageName);
    	return "Thank You!!!";
    }

}