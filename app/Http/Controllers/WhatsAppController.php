<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use DB;
use Response;
use File;

class WhatsAppController extends Controller
{
    public function wapp(Request $req){
    	
    		$INSTANCE_ID = '11';  // TODO: Replace it with your gateway instance ID here
		$CLIENT_ID = "pradeepk@techwindcomputer.com";  // TODO: Replace it with your Forever Green client ID here
		$CLIENT_SECRET = "8290ec56cfb84e1fa50563da0e4c9167";   // TODO: Replace it with your Forever Green client secret here
		$mobile="91".$req['mobile'];
		$msg=isset($req['msg'])?$req['msg']:'';
		if(isset($req['img'])){
			$img= $req['img'];	
			$pathToImage = $img;    // TODO: Replace it with the path to your image
			$imageData = file_get_contents($pathToImage);
			$base64Image = base64_encode($imageData);
			
		    $postData = array(
		        'number' => $mobile,  // TODO: Specify the recipient's number here. NOT the gateway number
		        'message' => $msg,
		        'image' => $base64Image
		    );
		    // print_r($postData);exit();
		    $headers = array(
		   'Content-Type: application/json',
		   'X-WM-CLIENT-ID: '.$CLIENT_ID,
		   'X-WM-CLIENT-SECRET: '.$CLIENT_SECRET
			);
			$url = 'http://api.whatsmate.net/v3/whatsapp/single/image/message/' . $INSTANCE_ID;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
			$response = curl_exec($ch);
			echo "Response: ".$response;
			curl_close($ch);
			}
		else
		{
		    $postData = array(
		        'number' => $mobile,  // TODO: Specify the recipient's number here. NOT the gateway number
		        'message' => $msg
		    );
            


		}
		$headers = array(
		    'Content-Type: application/json',
		    'X-WM-CLIENT-ID: '.$CLIENT_ID,
		    'X-WM-CLIENT-SECRET: '.$CLIENT_SECRET
			);
			$url = 'http://api.whatsmate.net/v3/whatsapp/single/text/message/' . $INSTANCE_ID;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
			$response = curl_exec($ch);
			echo "Response: ".$response;
			curl_close($ch);
		
		 

    	
    	// print_r($req->all());exit();
    	
	}
}
