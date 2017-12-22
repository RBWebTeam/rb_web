<?php
if (isset($_POST)) {
	 //print_r($_POST);exit();
	// the message

	$data='{"Name":"'.$_POST['clientName'].'","Email_Id":"'.$_POST['clientEmail'].'","Mobile":"'.$_POST['phone'].'","City":"'.$_POST['SelectCity'].'","Form":"'.$_POST['product'].'","CampaignName":"JeepCompass-Test Drive"}';
//print_r($data);exit();
        $url ="http://api.rupeeboss.com/BankAPIService.svc/PostRBLifestyle";

       
	     $ch = curl_init();
         curl_setopt($ch, CURLOPT_VERBOSE, 1);
         curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_FAILONERROR, 0);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
         curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
         $http_result = curl_exec($ch);
         $error = curl_error($ch);
         $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
       $result=array('http_result' =>$http_result ,'error'=>$error );
       $st=str_replace('"{', "{", $http_result);
        $s=str_replace('}"', "}", $st);
        $m=$s=str_replace('\\', "", $s);
         $obj = json_decode($m);
    //print_r($obj);exit();
        // print_r( $obj );exit();
        // $obj->Id ==1;
        if($obj->ID !=""){
            if ($_POST['product'] == "Jeep Compass") {
                header("Location: http://www.rupeeboss.com/rblife-style?true");
            }elseif ($_POST['product'] == "Jeep Grand Cherokee SRT") {
              header("Location: grand-cherokee-srt.php?true");
            }elseif ($_POST['product'] == "Jeep Grand Cherokee") {
                header("Location: grand-cherokee.php?true");
            }else{
        	header("Location: wrangler-unlimited.php?true");
        }
        }else{
        	echo "something went wrong";
        }
		


}

?>