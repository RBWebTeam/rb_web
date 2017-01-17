
@include('layout.header')
<div class="container">
	<aside id="fh5co-hero">
		<div class=""></div>
		<div class="flexslider col-md-8">
			<h3> Please answer the questions</h3>

			<div id="frst_qstn"> 
			<form id="generate_question" name="generate_question"> 
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
				<a class="btn btn-primary btn-outline with-arrow  next_qest" >submit<i class="icon-arrow-right"></i></a>


			</form>
			</div>
			
		</div>
<div id="nxt_qstn"></div>
	</aside>
</div>

@include('layout.footer')
@include('layout.script')
<script type="text/javascript">
	$('.next_qest').click(function(){
		$.ajax({  
               type: "POST",  
               url: "{{URL::to('gen-qstn')}}",
               data : $('#generate_question').serialize(),
               success: function(msg){
               	// console.log(msg);	
                if(msg.success==true){
                $('#generate_question').hide();

                $('#nxt_qstn').html(msg.html);
                }else{
                  
                }
              
               }  
               }); 
	});
</script>
