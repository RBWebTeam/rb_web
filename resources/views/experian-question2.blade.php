<?php if($result->questionToCustomer!=null){ ?> 
			<form id="generate_question2" name="generate_question1"> 
			<h2>Online Authentication</h2>
			<img src="{{URL::to('images/Experian_logo.png')}}" style="margin:0 auto;"/>
			<h3> Please answer the questions</h3>
			{{ csrf_field()}}
				<label>
					<?php echo $result->questionToCustomer->question;
					?>

				</label>
				<div class="select1 offset5">
					<select name="qs1" class="drop-arr  col-md-6 " required >
					<option disabled selected value>Select Answer 1</option>
						@foreach($result->questionToCustomer->optionsSet1 as $qs1)
						<option>
							<?php echo $qs1;	?>
						</option>
						@endforeach
					</select>
					<select name="qs2" class="drop-arr  col-md-3 "  required>
					<option disabled selected value>Select Answer 2</option>
						@foreach($result->questionToCustomer->optionsSet2 as $qs2)
						<option>
							<?php echo $qs2;	?>
						</option>
						@endforeach
					</select>
				</div>
				<input type="hidden" name="stage1hitid" value={{$stage1hitid}}>
				<input type="hidden" name="stage2hitid" value={{$stage2hitid}} >
				<input type="hidden" name="stage2sessionid" value={{$stage2sessionid}}>
				<input type="hidden" name="question_count" value=<?php echo ($result->questionToCustomer->qid);?>>
				
				<?php 
				$str= $result->responseJson;
				
				?>
				<br>
				<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
				     <img src="images/ajaxloader.gif" alt="loading" style="top: 50%; position: relative; left: 50%;"  />
				</div>  
			<div class="col-md-12 mrg-tp">
					<a class="btn btn-primary btn-outline with-arrow centered next_qest1">Submit<i class="icon-arrow-right"></i></a>
					
			 </div>
			  <div class="err_1">&nbsp;</div>
			</form>
			<?php }else if($result->responseJson=='passedReport'){
				
				$lead_id=Session::get('Lead_Id');
                $post_data= '{"jsonResp":'.$raw.',"Lead_Id":'.$lead_id.'}';
                //print_r($post_data);
                $url = "http://api.rupeeboss.com/CreditAPI.svc/getfinalResponse";
                $result=$this->call_json_data_api($url,$post_data);
	            $http_result=$result['http_result'];
	            $error=$result['error'];

               	$f_name= Session::get('f_name_cScore')?Session::get('f_name_cScore'):'';
               	$l_name= Session::get('l_name_cScore')?Session::get('l_name_cScore'):'';
	            $pan=Session::get('pan_cScore')?Session::get('pan_cScore'):'';
	            $email=Session::get('email_cScore')?Session::get('email_cScore'):'';
	            $contact=Session::get('contact_cScore')?Session::get('contact_cScore'):'';

	            $parse=explode('~',$http_result);
	            $parse[0]=str_replace('"','',$parse[0]);	
	            //print_r($parse);
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
		 		<button id="print_report" class="btn btn-success">Print</button>
		 		<?php
		 		
			}else{
				print_r("Ooops... Something went wrong.");
			}

			 ?>
<script type="text/javascript">
  $('.next_qest1').click(function(){
	   if(!$('#generate_question2').valid()){
	   	return false;
	   }
		$(".iframeloading").show();  
    $.ajax({  
               type: "POST",  
               url: "{{URL::to('gen-qstn')}}",
               data : $('#generate_question2').serialize(),
               success: function(msg){
               	$(".iframeloading").hide();  
                //console.log("2nd question"+msg);  
                if(msg.success){
                $('#generate_question').hide();
                $('#nxt_qstn').html("");
                $('#nxt_qstn').html(msg.html);
                }else{
                  window.location.href ="{{URL::to('went-wrong')}}";
                }
              
               }  
               }); 
  });
 $('#generate_question2').validate({
     errorLabelContainer: '.err_1',
       messages: {
        qs1: "Answer the first question &nbsp ",
        qs2: "&nbsp Answer the second question"

    }
});
</script>
</script>
