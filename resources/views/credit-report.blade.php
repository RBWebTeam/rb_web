@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Free Credit Report</h2>
					
				</div>
				<div class="col-md-12 white-bg">
					<div class="row text-left comp-pg rate">
						<p><b>Would you like to know your credit score before applying 	for a loan?</b></p>
						<p>Your personal information is required to retrieve your Credit Report and Score. 
							All the information you provide will be transferred to us through a private secure connection.</p>
							<form class="" id="compareform" role="form" method="POST" name="Experian_form"
							action="show-credit-report" >
							 {{ csrf_field() }}
								<div class="row">
									<div class="form-group">
									<input type="hidden" name="clientName" value="RUPEEBOSS">
									<input type="hidden" name="hitId" value="">
									<input type="hidden" name="voucherCode" value="{{$voucher}}">
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="First Name*" name="firstName" required="">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Middle Name" name="middleName">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Surname*" name="surName" required="">
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control lastReporteddate" id="dob" name="dob" placeholder="Date of Birth*" required>
										</div>
										<div class="col-md-8">Male &nbsp;&nbsp;
											<input type="radio" name="gender" class="radiob" required value="1">&nbsp;&nbsp; Female &nbsp;&nbsp;<input type="radio" name="gender" class="radiob" value="2">
										</div>

									</div>
								</div>
								<div class="row sec">
									<div class="form-group">
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Current Address Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Flat No / Plot No / House No*" name="flatPlotHouseNo" required="">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Building / Society Name" name="society">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Road No / Area / Locality" name="locality">
										</div>

										<div class="col-md-4">
										<input type="text" class="form-control" placeholder="City Name" name="city" id="city">
											
										</div>
										<div class="col-md-4">
												<select required name="state" class="drop-arr">
												<option disabled selected value>Select State</option>
											  @foreach($state as $state_name)
				      						 <option value="{{ $state_name->State_Code }}" >
				      						 	<span style="font-family: bold; ">{{ $state_name->State_Name }}
				      						 	</span>
				      						 </option>

												@endforeach
												</select>
										</div>
											<div class="col-md-4">
												<input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
											</div>
										</div>
									</div>
									<div class="row sec">
										<div class="form-group">
											<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Contact Details</h4>
											<div class="col-md-4">
											<?php $contact=Session::get('contact');
												if($contact){?>
													<input type="text" id="mobile" name="mobileNo" class="form-control" readonly value=<?php echo $contact; ?>>										
												<?php }else{?>
													<input type="text" id="mobile" name="mobileNo" class="form-control" placeholder="Mobile" maxlength="10" minlength="10" required onkeypress="return fnAllowNumeric(event)">
														<?php }?>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="telephoneNo" name="telephoneNo" placeholder="Telephone No"  onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											<div class="col-md-4">
												<select required name="telephoneType" class="drop-arr">
												<option disabled selected value>Select Telephone Type</option>
											  @foreach($telephone as $tele)
				      						 <option value="{{ $tele->Telephone_Value }}" >
				      						 	<span style="font-family: bold; ">{{ $tele->Telephone_Name }}
				      						 	</span>
				      						 </option>

												@endforeach
												</select>
											</div>

											<div class="col-md-12">
												<input type="email" class="form-control" placeholder="Email Address*" name="email" required>
											</div>
												
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Identity Details</h4>
											<div class="col-md-4">
												<input type="text" id="pan" name="panNo" class="form-control" placeholder="Pancard*" required="">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Passport No" name="passport"	>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Aadhaar No" name="aadhaar">
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Voter Id" name="voterid" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Driving License No" name="driverLicenseNo" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Ration card No" name="rationcard" >
											</div>
										<div class="col-md-12">
										<input type="checkbox" name="terms" required>
											I hereby confirm that I have read and understood the

											<a href="#" data-toggle="modal" data-target="#Experian_terms_modal"> Rupeeboss Terms</a> and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.
										<p></p>
										<hr>
										<p>You hereby consent to Rupeeboss Financial Services Private Limited being appointed as your authorized representative to receive your Credit Information from Experian for the purpose of processing the loan applications.</p>
<p><span>BY</span> EXECUTING THIS AGREEMENT / CONSENT FORM, YOU ARE EXPRESSLY AGREEING TO ACCESS THE EXPERIAN CREDIT INFORMATION REPORT AND CREDIT SCORE, AGGREGATE SCORES, INFERENCES, REFERENCES AND DETAILS (AS DEFINED BELOW) (TOGETHER REFERRED AS “CREDIT INFORMATION”). YOU HEREBY ALSO IRREVOCABLY AND UNCONDITIONALLY CONSENT TO SUCH CREDIT INFORMATION BEING PROVIDED BY EXPERIAN TO YOU AND RUPEEBOSS FINANCIAL SERVICES PRIVATE LIMITED BY USING EXPERIAN TOOLS, ALGORITHMS AND DEVICES AND YOU HEREBY AGREE,
 ACKNOWLEDGE AND ACCEPT THE <a href="#" data-toggle="modal" data-target="#RB_Experian_terms_modal"><span class="text-capitalize">TERMS AND CONDITIONS</a> SET FORTH HEREIN.</p>
  
 <p><div>
          <input type="radio" name="agreement1" value="accept" id="agreement1" required>&nbsp; Accept&nbsp;
          <input type="radio" name="agreement1" value="decline" id="agreement2" required >&nbsp; Decline
          
    </div></p>

										</div>

										</div>
										<div id="id_error" class="error" style="display: none;">Atleast one Identity Proof is required</div>
										<div class="col-md-12">
									<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" value="Get Checked" onclick ="return checkButton()" >Confirm & Continue<i class="icon-arrow-right"></i>
									</button>
									<p><b>All <mark style="color:red">*</mark>fields are mandatory.</b></p>
									</div>
									<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                     <img src="images/ajaxloader.gif" alt="loading" style="top: 50%; position: relative; left: 50%;"  />
                                        </div>
								</div>
							</form>
					</div>

				</div>
			</div>
		</div>	
	</div>
</div>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
function checkButton(){
	  //alert(document.Experian_form.agreement1.checked);
	  
if(document.Experian_form.agreement1.checked == true){
 	return false;	
} 
else if(document.Experian_form.agreement2.checked  == true){
	alert("Please accept the terms before proceeding");
	return false;
}else if(!($("#pan").val() || $("#passport").val() || $("#aadhaar").val() || $("#voterid").val() ||$("#driverLicenseNo").val() || $("#rationcard").val() )){
   
        $('#id_error').show();
   
    return ;
}       


  $('#id_error').hide();
}


</script>