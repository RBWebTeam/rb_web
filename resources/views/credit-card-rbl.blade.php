@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>RBL Credit Card Form</h2>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-10">
				<div class="row text-left comp-pg rate white-bg box-shadow">
			<form  id="rbl_ccc_form" role="form">
			 {{csrf_field()}}
				<div class="row">
					<div class="form-group">
						<div class="col-md-2">
						     <select class="block drop-arr select-sty" name="Title" id="title" required>
		                      <option disabled selected  value="">Select Title</option>
		                       <option value=1>Mr</option>
		                       <option value=2>Ms</option>
		                       <option value=2>Mrs</option>
		                       <option value=2>Dr</option>
		                       <option value=99>Other</option>
		                    </select> 
		                    </div>
						<div class="col-md-5">
							<input type="text" class="form-control" placeholder="Credit Card Applied" name="CreditCardApplied" id="cc_applied" value="{{$card}}" disabled="" >
						</div>
						<div class="col-md-5">
							<input type="date" class="form-control " id="dob" name="DOB" placeholder="Date of Birth" required>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" id="f_name" name="FirstName" placeholder="First Name" required>
						</div>
                         <div class="col-md-4">
							<input type="text" class="form-control " id="m_name" name="MiddleName" placeholder="Middle Name" required>
						</div>						
						<div class="col-md-4">
							<input type="text" class="form-control " id="l_name" name="LastName" placeholder="Last Name" required>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control " id="father_name" name="FatherName" placeholder="Father Name"  required>
						</div>
						<div class="col-md-4">
						<div class="form-control border-none">
					   <label class="label-txt">Gender</label>
						<input type="radio"  name="Gender" id="male"  class="radiob" checked value="1"><label for="150">&nbsp;Male</label>
                        <input type="radio" name="Gender" id="female"  class="radiob" value="2" ><label for="151">&nbsp;Female </label>
	                    </div>
						</div>
						<div class="col-md-4">
						<div class="form-control border-none">
					   <label class="label-txt">Had Loan Or CreditCard From AnyBank</label>
						<input type="radio"  name="HadLoanOrCreditCardFromAnyBank" class="radiob" checked value="Y"><label for="150">&nbsp;Yes</label>
                        <input type="radio" name="HadLoanOrCreditCardFromAnyBank"  class="radiob" value="N" ><label for="151">&nbsp;No </label>
	                    </div>
						</div>
					</div>
					<hr>
				</div>
				<div class="row sec" id="section1">
					<div class="form-group">
					<hr>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Residence Address 1" name="ResAddress1" id="res_add1" required="">
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" placeholder="Residence Address 2" name="ResAddress2" id="res_add2" required="">
						</div>
						<div class="col-md-4">
							<input type="text" id="landmark" name="Landmark" class="form-control" placeholder="Landmark"  required>
						</div>
						<div class="col-md-4">
						     <select class="block drop-arr select-sty" name="ResCity" id="city" required>
		                      <option disabled selected  value="">Select Title</option>
		                       @foreach ($data as $city)
								    <option value="{{$city->city_code}}">{{$city->city_name}}</option>
								@endforeach
		                    </select> 
		                    </div>
						<div class="col-md-4">
							<input type="text" id="res_pin" name="ResPIN" class="form-control" placeholder="Residence Pincode" onkeypress="return fnAllowNumeric(event)" required>
						</div>
                        <div class="col-md-4">
							<input type="email" id="email_id" name="Email" class="form-control" placeholder="Email ID"  required>
							<div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
						</div>
                       <div class="col-md-4">
							<input type="text" id="monthly_income" name="NMI" class="form-control" placeholder="Applicant Net Monthly Income" onkeypress="return fnAllowNumeric(event)" required>
						</div>
						<div class="col-md-4">
							 <input type="text" class="form-control" id="mobile" name="Mobile"  required maxlength="10" placeholder="Mobile Number" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" onkeydown=" mobile_valid(this)">
						</div>
						<div class="col-md-4">
						<div class="form-control border-none">
					   <label class="label-txt">Employment Type</label>
						<input type="radio"  name="EmpType" class="radiob" checked value="1"><label for="150">&nbsp;Salaried</label>
                        <input type="radio" name="EmpType"  class="radiob" value="2" ><label for="151">&nbsp;Self-Employed </label>
	                    </div>
						</div>
							<div class="col-md-4">
						     <input  type="text" class="form-input-new form-control" name="PAN" id="pan" placeholder="Pancard No." onkeyup="pan_card_valid(this)" minlength="10" maxlength="10" required>
						</div>
						</div>
						<hr>
					</div>	
					<a class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id" id="rbl_card_submit">SUBMIT<i class="icon-arrow-right" ></i></a>

			</form>
					
					
					
					
			</div>
			<br>
		</div>	
	</div>
</div>
@include('layout.footer')
@include('layout.script')

<div id="rb_cc_modal" class="modal fade" role="dialog">
  <div class="modal-dialog" >
        <!-- Modal content-->
   <div class="modal-content">
        <div class="modal-header">          
           <h4 class="modal-title text-center"><b>Status</b></h4>


           
        </div>
      <p id="rbl_cc_apply_status"></p>     
       <p id="reason"></p>     
       <p id="reference"></p>         	      
            
</div>
</div>
</div>


<script type="text/javascript">
	$('#rbl_card_submit').click(function(){
		
		if(!$('#rbl_ccc_form').valid()){
			 
			return false;
		}else{
			$.ajax({
				type:"POST",
				data:$('#rbl_ccc_form').serialize(),
				url:"{{URL::to('rbl-cc-submit')}}",
				success:function(msg){
					console.log(msg);
					var returnedData = JSON.parse(msg);
					if(msg.Status==2){
						$('#rbl_cc_apply_status').empty().text("Sucessfull");
						$('#reference').empty().text(msg.ReferenceCode);
					}else{
						$('#reason').empty().append(msg.Errorinfo);
					
					}
					console.log(msg);
					console.log(returnedData.Errorinfo);
					$('#rb_cc_modal').modal('toggle');
					
				}
			});
		}
		
	});

</script>




