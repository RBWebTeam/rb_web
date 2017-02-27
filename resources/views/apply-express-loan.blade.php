@include('layout.header')
<div id="fh5co-hero">
  <div class="express-lon-ban"><img src="images/express-loan-image.jpg" class="img-responsive"/></div>
  <br>
		<div class="container animate-box">
			<div class="row">
			
	<div class="row">
	  <div class="col-md-12">
				<div class="col-md-4 animate-box h3-pd-btm fadeInUp animated">
					<div class="exp-ico1 exp-dv">
						<div class="desc">
						 <img src="images/icon/0001.png" class="text-center"/>
							<h4>All in Minutes</h4>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box h3-pd-btm fadeInUp animated">
					<div class="exp-ico-2 exp-dv">
						<img src="images/icon/0002.png" class="text-center"/>
						<div class="desc">
						
							<h4>Your Information is Secure</h4>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box h3-pd-btm fadeInUp animated">
					<div class="exp-ico-3 exp-dv">
						
						<div class="desc">
					    <img src="images/icon/0003.png" class="text-center"/>
							<h4>No Collaterals</h4>
						
						</div>
					</div>
				</div>
				</div>
			</div>
			<br>
			<div id ="otp_div">
            <form class="express_form" id="express_form" method="POST" >
            {{ csrf_field() }}
			
		
		
		
		<div class="col-md-12 offset5 bg-white box-shadow">
			<div class="pad border-all">
			<div class="offset5">
<h3 class="text-center hed-three">Enter Amount</h3>
            <div class="col-md-12 mrg-btm">
			<input type="text" name="amount" id="amount" class="center-dv input-typ" placeholder="5,00,000" maxlength="10"
			onkeypress="return isNumberKey(event)"  required/>
			</div>
			
			
		    <div class="col-md-12">
			<h3 class="text-center mrg-btm hed-three">Business Type</h3>
			<div class="col-md-12"><div class="offset5"><a class="btn bt-wt"><input type="radio" name="employment" value="Self_Employed_Professionsl" checked/> Self Employed Professionsl (SEP)</a>
             <a class="btn bt-wt"><input type="radio" name="employment" value="Self_Employed_Non_Professional " /> Self Employed Non-Professionsl (SENP)</a>
			</div>
		    </div>
			<div class="col-md-12">
			
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="tenure border offset5">
			<h3 class="text-center hed-three">Tenure</h3>
			
			<div id="unranged-value" style="width:100%; height:10px;"></div>
			</div>
			
			
			</div>
		  
		  <div class="col-md-10 mrg-btm-b">
		   <input type="tel" name="mob_no" id="mob_no" class="center-dv input-typ" placeholder="98XXX XXXXX"  maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required />
		   <span id="mobile_value" style="display: none;color: red;">Phone number should be of 10 digits.</span>
		   <button class="get-otp" type="submit" id="express_loan_send_otp">Get OTP</button>
		  
		  </div>
			</div>
			
             </div>	
			
			
			</div>
			</div>
			
		
		</div>	
		</form>

		<form name="express_loan_verify_form" id="express_loan_verify_form" style="display:none" method="POST">
						       {{ csrf_field() }}
						   <h3>Enter your verification code sent on your number</h3>
						   <input type="text" name="verify_otp" id="verify_otp1" class="form-control" onkeypress="return fnAllowNumeric(event)" required maxlength="6" placeholder="Enter OTP Code">
						   <hr class="hr-clr">

						   <a class="btn btn-primary btn-lg btn-view" id="express_loan_verify_otp">VERIFY OTP</a>
						   <div id="otp_value" style="display: none;color: red;">Otp is of 6 digits.</div>
						   <div id="wrong_otp_value" style="display: none;color: red;">Wrong Otp !!!</div>
						   <div id="waiting_div_otp" style="display: none;color: red;">Please wait ...</div>
						   </form>
		</div>

		
		
	
	</div>
	<br>
	<div class="animate-box" id ="generic"  >
	<form name="generic_form" id="generic_form" method="POST">
	{{ csrf_field() }}
	<div class="row">
			<div class="col-md-12 bg-white centered well pad1">
			
			
		<h3 class="text-uppercase exp-hed">Generic Information</h3>
			
			 <section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="loanamount" name="loanamount"  value="" onkeypress="return isNumberKey(event)" required   />
					<label class="input__label input__label--nao" for="loanamount">
						<span class="input__label-content input__label-content--nao">Loan Amount</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				 <span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="tenure" name="tenure" value="" onkeypress="return isNumberKey(event)" maxlength="3" required />
					<label class="input__label input__label--nao" for="tenure">
						<span class="input__label-content input__label-content--nao">Tenure</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="min_income" name="min_income" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="min_income">
						<span class="input__label-content input__label-content--nao">Min Income Per Month</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
			</section>
			
			<section class="content">
				
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="constitution" name="constitution" required>
					<option>Constitution</option>
					<option value="Company">Company</option>
					<option value="Partnership">Partnership(Registered/Unregistered)</option>
					<option value="Sole_Proprietor">Sole Proprietor</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="nature_of_business" name="nature_of_business" required />
					<label class="input__label input__label--nao" for="nature_of_business">
						<span class="input__label-content input__label-content--nao">Nature of Business</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
				<span class="input_exp input--nao">
					
					<select class="input__field input__field--nao fnt-clr" id="type_of_industry" name="type_of_industry" required>
					<option>Type of Industry</option>
					<option>Option1</option>
					<option>Option2</option>
					<option>Option3</option>
					<option>Option4</option>
					<option>Option5</option>
					<option>Option6</option>
					<option>Option7</option>
					<option>Option8</option>
					</select>
					<!--<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao hid-txt">Type of Industry</span>
					</label> -->
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="experience" name="experience" onkeypress="return isNumberKey(event)" required  />
					<label class="input__label input__label--nao" for="year_of_experience">
						<span class="input__label-content input__label-content--nao">Years of experience / Existence</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="residence_type" name="residence_type" required>
					<option>Residence Type</option>
					<option value="Self">Self</option>
					<option value="Parental_Owned">Parental Owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="office_type_generic" name="office_type_generic" required>
					<option>Office Type</option>
					<option value="Self_owned">Self-owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
			</section>
			<br>
			<hr class="hr-sty">
			<h3 class="text-uppercase exp-hed">Financial History</h3>
			<section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="turnover" name="turnover" onkeypress="return isNumberKey(event)" required  />
					<label class="input__label input__label--nao" for="turnover">
						<span class="input__label-content input__label-content--nao">Business Turnover ( Total Sales) - YOY </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_worth" name="net_worth" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="net_worth">
						<span class="input__label-content input__label-content--nao">Net Worth </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="gross_profit" name="gross_profit" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="gross_profit">
						<span class="input__label-content input__label-content--nao">Gross Profit</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_profit" name="net_profit" onkeypress="return isNumberKey(event)" required/>
					<label class="input__label input__label--nao" for="net_profit">
						<span class="input__label-content input__label-content--nao">Net Profit</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
			</section>
			
			
			
			
			<br>
			<hr class="hr-sty">
			<h3 class="text-uppercase exp-hed">Applicant - Individual / Director/ Partner / Proprietor</h3>
			<section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="first_name" name="first_name" required />
					<label class="input__label input__label--nao" for="first_name">
						<span class="input__label-content input__label-content--nao">First Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name" name="middle_name" required />
					<label class="input__label input__label--nao" for="middle_name">
						<span class="input__label-content input__label-content--nao">Middle Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name" name="last_name" required />
					<label class="input__label input__label--nao" for="last_name">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender" name="gender" required>
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="dob" name="dob" required />
					<label class="input__label input__label--nao" for="dob">
						<span class="input__label-content input__label-content--nao">DOB / AGE </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="education" name="education" required>
					<option>Educational Qualifications</option>
					<option value="Undergraduate">Undergraduate</option>
					<option value="Graduate">Graduate</option>
					<option value="Post_Graduate">Post-Graduate</option>
					<option value="Professional">Professional</option>
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="marital_status" name="marital_status" required>
					<option>Marital Status</option>
					<option>Married</option>
					<option>Unmarried</option>
					</select>
					
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="share_holding" name="share_holding" step="0.01" min="0" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Share holding %</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pan_no" name="pan_no" minlength="10" maxlength="10" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}"  onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="pan_no">
						<span class="input__label-content input__label-content--nao">Pan No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="mobile_no" name="mobile_no" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" value="" required  />
					<label class="input__label input__label--nao" for="mobile_no">
						<span class="input__label-content input__label-content--nao">Mobile No</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="residence_landline" name="residence_landline" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required  />
					<label class="input__label input__label--nao" for="residence_landline">
						<span class="input__label-content input__label-content--nao">Residence Landline </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="aadhar_card" name="aadhar_card" maxlength="12" onkeypress="return isNumberKey(event)" required pattern="^\d{4}\s\d{4}\s\d{4}$" />
					<label class="input__label input__label--nao" for="aadhar_card">
						<span class="input__label-content input__label-content--nao">UID No. (Aadhar Card )</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address_line1" name="address_line1" required/>
					<label class="input__label input__label--nao" for="address_line1">
						<span class="input__label-content input__label-content--nao">Address Line 1 </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address_line2" name="address_line2" required/>
					<label class="input__label input__label--nao" for="address_line2">
						<span class="input__label-content input__label-content--nao">Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address_line3" name="address_line3" required/>
					<label class="input__label input__label--nao" for="address_line3">
						<span class="input__label-content input__label-content--nao">Address Line 3</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_city_name" type="text" id="city_applicant" name="city_applicant" required/>
					<label class="input__label input__label--nao" for="city_applicant">
						<span class="input__label-content input__label-content--nao">City</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_state_name" type="text" id="state_applicant" name="state_applicant" required/>
					<label class="input__label input__label--nao" for="state_applicant">
						<span class="input__label-content input__label-content--nao">State</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pincode_applicant" name="pincode_applicant" onkeypress="return isNumberKey(event)" maxlength="6" required/>
					<label class="input__label input__label--nao" for="pincode_applicant">
						<span class="input__label-content input__label-content--nao">Pin Code</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_profit_applicant"
					name="net_profit_applicant"  onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="net_profit_applicant">
						<span class="input__label-content input__label-content--nao">Net Profit</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>

			</section>
			
			
			
			
			<br>
			<hr class="hr-sty">
			<h3 class="text-uppercase exp-hed">Applicant - Entity Details</h3>
			<section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="company" name="company" required/>
					<label class="input__label input__label--nao" for="company">
						<span class="input__label-content input__label-content--nao">Name of the Firm / Company</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="bussiness_pan" name="bussiness_pan" onkeypress="return isNumberKey(event)" maxlength="10" required />
					<label class="input__label input__label--nao" for="bussiness_pan">
						<span class="input__label-content input__label-content--nao">Business PAN </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="date_formation" name="date_formation" required/>
					<label class="input__label input__label--nao" for="date_formation">
						<span class="input__label-content input__label-content--nao">Date of Formation </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="ofc_landline" name="ofc_landline" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)"  required/>
					<label class="input__label input__label--nao" for="ofc_landline">
						<span class="input__label-content input__label-content--nao">Office Landline </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add1" name="ofc_add1" required />
					<label class="input__label input__label--nao" for="ofc_add1">
						<span class="input__label-content input__label-content--nao">Office Address Line 1 </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add2" name="ofc_add2" required />
					<label class="input__label input__label--nao" for="ofc_add1">
						<span class="input__label-content input__label-content--nao">Office Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add3" name="ofc_add3" required />
					<label class="input__label input__label--nao" for="ofc_add3">
						<span class="input__label-content input__label-content--nao">Office Address Line 3</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_city_name" type="text" id="city_applicant_entity" name="city_applicant_entity" required />
					<label class="input__label input__label--nao" for="city_applicant_entity">
						<span class="input__label-content input__label-content--nao">City</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_state_name" type="text" id="state_applicant_entity" name="state_applicant_entity" required />
					<label class="input__label input__label--nao" for="state_applicant_entity">
						<span class="input__label-content input__label-content--nao">State</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" name="pincode_applicant_entity" id="pincode_applicant_entity" onkeypress="return isNumberKey(event)" maxlength="6" required/>
					<label class="input__label input__label--nao" for="pincode_applicant_entity">
						<span class="input__label-content input__label-content--nao">Pin Code</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="office_type_applicant_entity" name="office_type_applicant_entity" required>
					<option>Office Type</option>
					<option value="Self_owned">Self-Owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
				
			</section>
			
			
			
			<br>
			<hr class="hr-sty">
			<h3 class="text-uppercase exp-hed">Co Applicant / Guarantor Details</h3>
			<section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="name_co_app" name="name_co_app" required/>
					<label class="input__label input__label--nao" for="name_co_app">
						<span class="input__label-content input__label-content--nao">First Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name_co_app" name="middle_name_co_app" required />
					<label class="input__label input__label--nao" for="middle_name_co_app">
						<span class="input__label-content input__label-content--nao">Middle Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name_co_app" name="last_name_co_app" required/>
					<label class="input__label input__label--nao" for="last_name_co_app">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender_co_app" name="gender_co_app" required>
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="dob_co_app" name="dob_co_app" required />
					<label class="input__label input__label--nao" for="dob_co_app">
						<span class="input__label-content input__label-content--nao">DOB / AGE</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="occupation_co_app" name="occupation_co_app" required />
					<label class="input__label input__label--nao" for="occupation_co_app">
						<span class="input__label-content input__label-content--nao">Occupation</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="income_co_app"  name="income_co_app" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="income_co_app">
						<span class="input__label-content input__label-content--nao">Income (Monthly)</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="relation" name="relation" required>
					<option >Relation</option>
					<option value="Mother">Mother</option>
					<option value="Father">Father</option>
					<option value="Brother">Brother</option>
					<option value="Sister">Sister</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pan_no_co_app" name="pan_no_co_app" minlength="10" maxlength="10" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}"  onkeypress="return isNumberKey(event)" required/>
					<label class="input__label input__label--nao" for="pan_no_co_app">
						<span class="input__label-content input__label-content--nao">PAN</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="mob_co_app" name="mob_co_app" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="mob_co_app">
						<span class="input__label-content input__label-content--nao">Mobile No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="residence_co_app" name="residence_co_app" maxlength="10" onkeypress="return isNumberKey(event)""  required/>
					<label class="input__label input__label--nao" for="residence_co_app">
						<span class="input__label-content input__label-content--nao">Residence Landline</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="aadhar_card_co_app" name="aadhar_card_co_app" maxlength="12" onkeypress="return isNumberKey(event)" required pattern="^\d{4}\s\d{4}\s\d{4}$" />
					<label class="input__label input__label--nao" for="aadhar_card_co_app">
						<span class="input__label-content input__label-content--nao">UID No. (Aadhar Card )</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address1_co_app" name="address1_co_app" required />
					<label class="input__label input__label--nao" for="address1_co_app">
						<span class="input__label-content input__label-content--nao">Address Line 1</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address2_co_app" name="address2_co_app" required />
					<label class="input__label input__label--nao" for="address2_co_app">
						<span class="input__label-content input__label-content--nao">Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span> 
				<div>
				<a class="btn btn-success " id="express_loan_submit" type="submit">Submit</a>
				</div>
			</section>
		
			
			</div>
			<div class="col-md-12">
			   <div class="jumbotron alert alert-success">
			   <strong class="text-center"><h3><i class="icon-checkmark"></i> Your Loan is in Process. We will get back to you shortly</h3></strong>
			   </div>
			</div>
			</div>
			</form>
         </div>
	</div>
	</div>
@include('layout.footer')
@include('layout.script')
<script>
			(function() {
				
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
			
			
		</script>

		<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>
<script type="text/javascript">
	

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city_name").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_city_name").val("");
          $(".search_city_name").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
	

 $(document).ready(function(){
    src = "{{ route('searchstateajax') }}";
    $(".search_state_name").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_state_name").val("");
          $(".search_state_name").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>


	<script type="text/javascript">
  $("#express_loan_send_otp").click(function(event){
    event.preventDefault();
      $form=$('#express_form');
      if(! $form.valid()){
      	
      	
      }else{
        //var s=$('#'+form).serialize();
        var amount = $("#amount").val();
         $('#loanamount').val(amount);

         var tenure1 = $("#tenure1").val();
         $('#tenure').val(tenure1);

         var mob_no = $("#mob_no").val();
         $('#mobile_no').val(mob_no);


        


       
       
        if(($('#mob_no').val().length)<10){
              $('#mobile_value').show();
              return false;
            }
             $('#mobile_value').hide();           
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('express-loan-send-otp')}}",
         data : $('#express_form').serialize(),
         success: function(data){
         	//console.log(data);
               var data_1=data['data'];
               if(data_1){
                $('#express_form').hide();
                $('#express_loan_verify_form').show();
                    //console.log("hah");
                  }else{
                     window.location.href="{{URL::to('went-wrong')}}";
                    // console.log(data_1);
                  }
          

        }  
      }); 
      }

    });

  $("#express_loan_verify_otp").click(function(event){
  	event.preventDefault();
      $form=$('#express_loan_verify_form');
      if(! $form.valid()){
      	
      	
      }else{
        //var s=$('#'+form).serialize();
       
        if(($('#verify_otp1').val().length)<6){
              $('#otp_value').show();
              return false;
            }

    $('#otp_value').hide();
    $('#wrong_otp_value').hide();
    $('#waiting_div_otp').show();
    $.ajax({  
     type: "POST",  
     url: "{{URL::to('express-loan-verify')}}",
     dataType:"json",
     data : $('#express_loan_verify_form').serialize(),
     success: function(data){
     	var data_1=data['data'];
       if(data_1=="true"){
       	console.log("yes");
        $('#generic').show();
        $('#otp_div').hide();
      }else{
      	console.log("no");
        $('#wrong_otp_value').show();
        $('#waiting_div_otp').hide();
      }
    }
  });
}
});




</script>

<script type="text/javascript">
	
	$("#express_loan_submit").click(function(event){
		 alert('ok');
    event.preventDefault();
      $form=$('#generic_form');
      if(! $form.valid()){
      }else{
        //var s=$('#'+form).serialize();
        alert('ok');

   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('aditya-express-loan')}}",
         data : $('#generic_form').serialize(),
         success: function(msg){
         //console.log(msg);
          if(msg){
             console.log(msg);
             // window.location.href ="{{URL::to('thank-you')}}";
            
          }else{
            window.location.href ="{{URL::to('went-wrong')}}";
          } 
          

        }  
      }); 
      }

    });

</script>


<script>
    var s0 = $("#unranged").freshslider({
        step: 10,
		scale: [1,,100],
        unit:'%',
        enabled:false
		
    });

    var s1 = $("#ranged").freshslider({
        range:true,
        step:0.1,
        text:false,
        onchange:function(low, high){
            console.log(low, high);
        }
    });

    var s2 = $("#unranged-value").freshslider({
        step: 1,
        value:10
    });

    var s3 = $("#ranged-value").freshslider({
        range: true,
        step:1,
        value:[4, 60],
        onchange:function(low, high){
            console.log(low, high);
        }
    });
</script>
		



