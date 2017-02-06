<?php if($result->questionToCustomer!=null){ ?> 
			<form id="generate_question2" name="generate_question1"> 
			{{ csrf_field()}}
				<label>
					<?php echo $result->questionToCustomer->question;
					?>

				</label>
				<select name="qs1">
					@foreach($result->questionToCustomer->optionsSet1 as $qs1)
					<option>
						<?php echo $qs1;	?>
					</option>
					@endforeach
				</select>
				<select name="qs2">
					@foreach($result->questionToCustomer->optionsSet2 as $qs2)
					<option>
						<?php echo $qs2;	?>
					</option>
					@endforeach
				</select>
				<input type="hidden" name="stage1hitid" value={{$stage1hitid}}>
				<input type="hidden" name="stage2hitid" value={{$stage2hitid}} >
				<input type="hidden" name="stage2sessionid" value={{$stage2sessionid}}>
				<input type="hidden" name="question_count" value=<?php echo ($qs+1);?>>
				
				<?php 
				$str= $result->responseJson;
				
				?>
				<br>
				<a class="btn btn-primary btn-outline with-arrow next_qest1" >submit<i class="icon-arrow-right"></i></a>


			</form>
			<?php }else {
				$x=($result);
				
				$post_data='"'.http_build_query($result).'"';
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
                //$obj = json_decode($http_result);
                print_r("<h1>".$http_result."</h1>");
                //print_r($error);
				
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
                  
                }
              
               }  
               }); 
  });
</script>