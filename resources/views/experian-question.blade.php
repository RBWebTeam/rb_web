@include('layout.header')
@include('layout.header')
<div class="container">
	<aside id="fh5co-hero">
		<div class=""></div>
		<div class="flexslider col-md-8">
			<h3> Please answer the questions</h3>

			<div class=""> 

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
				<?php $str= $result->responseJson;?>
				<a class="btn btn-primary btn-outline with-arrow animate-box next_qest" >submit<i class="icon-arrow-right"></i></a>
			</div>
		</div>
	</aside>
</div>

@include('layout.footer')
@include('layout.script')
<script type="text/javascript">
	$('.next_qest').click(function(){
		if(<?php echo "'".$str."'";?>=='next'){
			alert("hiiii");
		}
	});
</script>
