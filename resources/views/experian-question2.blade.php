
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
				<a class="btn btn-primary btn-outline with-arrow animate-box next_qest1" >submit<i class="icon-arrow-right"></i></a>


			</form>
