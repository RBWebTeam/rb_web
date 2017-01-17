@include('layout.header')
<div id="fh5co-page">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Free Credit Report</h2>
					
				</div>
				<div class="col-md-9 white-bg">
					<div class="row text-left comp-pg rate">
						<p><b>Would like to know your credit score before applying 	for loan 	</b></p>
						<p>your personal information is requied to retrive your credit Report and Score. 
							All of the information you provide will be transfered to us through a private secure connection</p>
							<form class="" id="compareform" role="form" method="POST" action="show-credit-report">
							 {{ csrf_field() }}
								<div class="row">
									<div class="form-group">
									<input type="hidden" name="clientName" value="RUPEEBOSS">
									<input type="hidden" name="hitId" value="">
									<input type="hidden" name="voucherCode" value="RB12HlwtQ">
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
										<h4 class="hdr">&nbsp;&nbsp;&nbsp;&nbsp;Current Addresses Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="flat No / Plot No / House No*" name="flatPlotHouseNo" required="">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Building / Society Name" >
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Road No / Area / Locality">
										</div>

										<div class="col-md-4">
												<select required name="city">
											  @foreach($city as $city_name)
				      						 <option value="{{ $city_name->City_Id }}" data-state="{{$city_name->state_id}}">
				      						 	<span style="font-family: bold; ">{{ $city_name->City_Name }}
				      						 	</span>
				      						 </option>

												@endforeach
												</select>
										</div>
										<div class="col-md-4">
												<select required name="state">
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
												<input type="text" id="mobile" name="mobileNo" class="form-control" placeholder="Mobile" maxlength="10" minlength="10" required onkeypress="return fnAllowNumeric(event)">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="telephoneNo" name="telephoneNo" placeholder="telephone No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											<div class="col-md-4">
												<select required name="telephoneType">
												
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
												<input type="text" id="pan" name="pan" class="form-control" placeholder="Pancard*" required="">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Passport No*" 	>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Aadhaar No*" >
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Voter Id*" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Driving License No*" name="driverLicenseNo" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" placeholder="Ration card No" >
											</div>


										</div>
										&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated">Confirm & Continue<i class="icon-arrow-right"></i>
									</button>
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

