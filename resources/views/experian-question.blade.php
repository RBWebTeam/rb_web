@include('layout.header')
<div class="fh5co-contact animate-box">
		<div class="container" id="fh5co-hero">
			<div class="row">
								
				<div class="col-md-12">
					<div class="row pad11 white-bg comp-pg">
              
              
            

			<div id="frst_qstn"> 
			
			<?php if($result->questionToCustomer!=null){ ?> 
			<form id="generate_question" name="generate_question"> 
			 <h2>Online Authentication</h2>
			 <img src="{{URL::to('images/Experian_logo.png')}}" style="margin:0 auto;"/>
			<h3> Please answer the questions</h3>
			{{ csrf_field()}}
			
				<label>
					<?php echo $result->questionToCustomer->question;

					?>

				</label>
				<div class="select1 offset5">
				<select name="qs1" class="drop-arr col-md-6" >
				<option disabled selected value>Select Answer 1</option>
					@foreach($result->questionToCustomer->optionsSet1 as $qs1)
					<option>
						<?php echo $qs1;	?>
					</option>
					@endforeach
				</select>
				<select name="qs2" class="drop-arr col-md-3" >
				<option disabled selected value>Select Answer 2</option>
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
				</div>
				<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
				     <img src="images/ajaxloader.gif" alt="loading" style="top: 50%; position: relative; left: 50%;"  />
				</div>
			<div class="col-md-12 mrg-tp">
			<a class="btn btn-primary btn-outline with-arrow centered next_qest">Submit<i class="icon-arrow-right"></i></a>
			 </div>
			 <span id="err" style="color: red;display: none;">Please answer Both question</span>
			</form>
			<?php }else{?>
			<p>processed {{$result->responseJson}}</p>
			<?php }?>
			</div>
					
			</div>

			</aside>
			<div id="nxt_qstn"></div>
		</div>

		</div>
		</div>
	</div>
@include('layout.footer')
@include('layout.script')
<script type="text/javascript">
	$('.next_qest').click(function(){
		if(!(document.getElementsByName("qs1")[0].value && document.getElementsByName("qs2")[0].value) ){
			document.getElementById("err").style.display='block';
			return false;
		}
		if(<?php echo "'".$result->responseJson."'"; ?>=='passedReport'){
			
		}
		$(".iframeloading").show();  
		$.ajax({  
               type: "POST",  
               url: "{{URL::to('gen-qstn')}}",
               data : $('#generate_question').serialize(),
               success: function(msg){
               	$(".iframeloading").hide();  
               //	console.log(msg);	
                if(msg.success==true){
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
