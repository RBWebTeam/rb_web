<?php if($result->questionToCustomer!=null){ ?> 
			<form id="generate_question2" name="generate_question1"> 
			<h3> Please answer the questions</h3>
			{{ csrf_field()}}
				<label>
					<?php echo $result->questionToCustomer->question;
					?>

				</label>
				<div class="select1 offset5">
					<select name="qs1" class="drop-arr  col-md-6">
						@foreach($result->questionToCustomer->optionsSet1 as $qs1)
						<option>
							<?php echo $qs1;	?>
						</option>
						@endforeach
					</select>
					<select name="qs2" class="drop-arr  col-md-3">
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
				<input type="hidden" name="question_count" value=<?php echo ($qs+1);?>>
				
				<?php 
				$str= $result->responseJson;
				
				?>
				<br>
				
			<div class="col-md-12 mrg-tp">
					<a class="btn btn-primary btn-outline with-arrow centered next_qest1">Submit<i class="icon-arrow-right"></i></a>
			 </div>

			</form>
			<?php }else if($result->responseJson=='passedReport'){
				
				$lead_id=Session::get('Lead_Id');
                $post_data= '{"jsonResp":'.$raw.',"Lead_Id":'.$lead_id.'}';
                //print_r($post_data);
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
                //print_r("<h1>".$http_result."</h1>");


               	$name= Session::get('name_cScore');
	            $pan=Session::get('pan_cScore');
	            $email=Session::get('email_cScore');

	            $parse=explode('~',$http_result);
	            $parse[0]=str_replace('"','',$parse[0]);	
	            //print_r($parse);
                $save_data = array('name' => $name,'pan'=>$pan,'email'=>$email,'lead_id'=>$lead_id,'credit_score'=>$parse[0],'raw_response'=>$parse[1]);
                $id=DB::table('experian_response')
                	->insertGetId(['name' => $name,'pan'=>$pan,'email'=>$email,'lead_id'=>$lead_id,'credit_score'=>$parse[0],'raw_response'=>$parse[1],'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);

		 		
		 		print_r($result->showHtmlReportForCreditReport);
		 		

		 		
			}else{
				print_r("Ooops... Something went wrong.");
			}

			 ?>
<script type="text/javascript">
  $('.next_qest1').click(function(){
    //alert("new qstn1");
    $.ajax({  
               type: "POST",  
               url: "{{URL::to('gen-qstn')}}",
               data : $('#generate_question2').serialize(),
               success: function(msg){
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
</script>