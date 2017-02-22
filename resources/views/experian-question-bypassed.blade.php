@include('layout.header')
<style>
    td {padding:0px;}
</style>
<br>
<div class="container" id="fh5co-hero">
<?php if($result->responseJson=='passedReport'){
				$lead_id=Session::get('Lead_Id');
                $post_data= '{"jsonResp":'.$raw.',"Lead_Id":'.$lead_id.'}';
                $url = "http://api.rupeeboss.com/CreditAPI.svc/getfinalResponse";
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
               	$f_name= Session::get('f_name_cScore')?Session::get('f_name_cScore'):'';
               	$l_name= Session::get('l_name_cScore')?Session::get('l_name_cScore'):'';
	            $pan=Session::get('pan_cScore')?Session::get('pan_cScore'):'';
	            $email=Session::get('email_cScore')?Session::get('email_cScore'):'';
	            $contact=Session::get('contact_cScore')?Session::get('contact_cScore'):'';
	            $parse=explode('~',$http_result);
	            $parse[0]=str_replace('"','',$parse[0]);	
	            $expiry_date=date('Y-m-d H:i:s', strtotime("+3 months"));
                $user_id=Session::get('user_id');
                $id=DB::table('experian_response')
                	->insertGetId(['f_name' => $f_name,'l_name' => $l_name,'contact'=>$contact,'pan'=>$pan,'email'=>$email,'lead_id'=>$lead_id,'credit_score'=>$parse[0],'raw_response'=>$parse[1],'html_report'=>$result->showHtmlReportForCreditReport,'user_id'=>$user_id,'expiry_date'=>$expiry_date,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
                if($user_id){
                	$update_score=DB::table('customer_details')
						          ->where('user_id', $user_id)
						          ->update(['credit_score' => $parse[0]]);	
                }
		 		
		 		print_r($result->showHtmlReportForCreditReport);
		 		
		 		?>
		 		
		 		<?php
		 		
			}else{
				print_r("Ooops... Something went wrong.");
			}
			 ?>
</div>
<div class=" text-center"><input type="button" class="btn btn-success" onclick="printDiv('fh5co-hero')" value="Print Report" />
</div>


@include('layout.footer')
@include('layout.script')
  <script type="text/javascript">
  function printDiv(divName) {
     //var htm=document.getElementById(divName).innerHTML;
     var printContents = '<html><head><title>RupeeBoss Credit Report</title></head><body >' +document.getElementById(divName).innerHTML+'</body></html>';
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

