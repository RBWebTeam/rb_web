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
			<div>
            <form class="express_form" id="express_form" >
            {{ csrf_field() }}
			<div class="col-md-12 offset5 bg-white box-shadow">
			<div class="pad border-all">
			<div class="offset5">
<h3 class="text-center hed-three"><b>Enter Amount</b></h3>
            <div class="col-md-12 mrg-btm">
			<input type="text" name="amount" id="amount" class="center-dv input-typ" placeholder="5,00,000" maxlength="10"
			onkeypress="return isNumberKey(event)"  required/>
			</div>
			
			
		    <div class="col-md-12">
			<h3 class="text-center mrg-btm hed-three"><b>Business Type</b></h3>
			
			 <div class="col-md-12"><div class="offset5"><a class="btn btn-primary bt-wt"><input type="radio" name="employment" value="Self_Employed_Professionsl" checked/> Self Employed Professionsl (SEP)</a>
             <a class="btn btn-primary bt-wt"><input type="radio" name="employment" value="Self_Employed_Non_Professional " /> Self Employed Non-Professionsl (SENP)</a>
			</div>
		    </div>
			<div class="col-md-12 mrg-btm-b">
			<h3 class="text-center hed-three"><b>Tenure</b></h3>
			
			<div class="col-md-12">
			<div class="tenure border">
			<span class="pull-left">0</span>
			<input id="tenure" name="tenure" type="range" min="0" max="30"  value ="0" class="slider-price" style="color:red;"/>
			<span class="pull-right">30</span>
			</div>
			</div>
		  <div class="col-md-12">
		   <div class="offset5">
		   <input type="tel" name="mob_no" id="mob_no" class="center-dv input-typ" placeholder="98XXX XXXXX"  maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required />
		   
		   <button class="btn btn-success" id="express_loan_send_otp"  >Get OTP</button>
		    <div id="mobile_value" style="display: none;color: red;">Phone number should be of 10 digits.</div>

		   </div>
		  </div>
			</div>
			
             </div>	
			
			
			</div>
			</div>
			
		
		</div>	
		</form>

		<form name="express_loan_verify_form" id="express_loan_verify_form" style="display:none" method="POST" onkeypress="return fnAllowNumeric(event)">
						       {{ csrf_field() }}
						   <h3>Enter your verification code sent on your number</h3>
						   <input type="text" name="verify" id="verify" class="form-control" onkeypress="return fnAllowNumeric(event)" required maxlength="6" placeholder="Enter OTP Code">
						   <hr class="hr-clr">

						   <a class="btn btn-primary btn-lg btn-view" id="express_loan_verify_otp">VERIFY OTP</a>
						   <div id="otp_val" style="display: none;color: red;">Otp is of 6 digits.</div>
						   <div id="wrong_otp" style="display: none;color: red;">Wrong Otp !!!</div>
						   <div id="wait_div_otp" style="display: none;color: red;">Please wait ...</div>
						   </form>
		</div>

		
		
	
	</div>
	<br>
	<div class="animate-box" style="display: none">
	<div class="row">
			<div class="col-md-12 bg-white centered well pad1">
			
			
		<h3 class="text-uppercase exp-hed">Generic Information</h3>
			
			 <section class="content">
				
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="loanamount" name="loanamount" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)"   />
					<label class="input__label input__label--nao" for="loanamount">
						<span class="input__label-content input__label-content--nao">Loan Amount</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="tenure" name="tenure" onkeypress="return isNumberKey(event)" maxlength="3" />
					<label class="input__label input__label--nao" for="tenure">
						<span class="input__label-content input__label-content--nao">Tenure</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="min_income_per_month" name="min_income_per_month" onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="min_income_per_month">
						<span class="input__label-content input__label-content--nao">Min Income Per Month</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
			</section>
			
			<section class="content">
				
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="constitution" name="constitution">
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
					<input class="input__field input__field--nao" type="text" id="nature_of_business" name="nature_of_business" />
					<label class="input__label input__label--nao" for="nature_of_business">
						<span class="input__label-content input__label-content--nao">Nature of Business</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
				<span class="input_exp input--nao">
					
					<select class="input__field input__field--nao fnt-clr" id="type_of_industry" name="type_of_industry">
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
					</label>-->
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="year_of_experience" name="year_of_experience" onkeypress="return isNumberKey(event)"  />
					<label class="input__label input__label--nao" for="year_of_experience">
						<span class="input__label-content input__label-content--nao">Years of experience / Existence</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="residence" name="residence">
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
					<select class="input__field input__field--nao fnt-clr" id="office_type" name="office_type">
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
					<input class="input__field input__field--nao" type="text" id="business_turnover" name="business_turnover" onkeypress="return isNumberKey(event)"   />
					<label class="input__label input__label--nao" for="input-1">
						<span class="input__label-content input__label-content--nao">Business Turnover ( Total Sales) - YOY </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_worth" name="net_worth" onkeypress="return isNumberKey(event)"  />
					<label class="input__label input__label--nao" for="net_worth">
						<span class="input__label-content input__label-content--nao">Net Worth </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="gross_profit" name="gross_profit" onkeypress="return isNumberKey(event)"  />
					<label class="input__label input__label--nao" for="gross_profit">
						<span class="input__label-content input__label-content--nao">Gross Profit</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_profit" name="net_profit" onkeypress="return isNumberKey(event)"  />
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
					<input class="input__field input__field--nao" type="text" id="name" name="name" />
					<label class="input__label input__label--nao" for="name">
						<span class="input__label-content input__label-content--nao">First Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name" name="middle_name" />
					<label class="input__label input__label--nao" for="middle_name">
						<span class="input__label-content input__label-content--nao">Middle Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name" name="last_name" />
					<label class="input__label input__label--nao" for="last_name">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender" name="gender">
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="dob" name="dob" />
					<label class="input__label input__label--nao" for="dob">
						<span class="input__label-content input__label-content--nao">DOB / AGE </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="education" name="education">
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
					<select class="input__field input__field--nao fnt-clr" id="marital_status" name="marital_status">
					<option>Marital Status</option>
					<option>Married</option>
					<option>Unmarried</option>
					</select>
					
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="share_holding" name="share_holding" step="0.01" min="0" onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Share holding %</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pan_no" name="pan_no" minlength="10" maxlength="10" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}"  onkeypress="return isNumberKey(event)"  />
					<label class="input__label input__label--nao" for="pan_no">
						<span class="input__label-content input__label-content--nao">Pan No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="mobile_no" name="mobile_no" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required  />
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
					<input class="input__field input__field--nao" type="text" id="address_line1" name="address_line1" />
					<label class="input__label input__label--nao" for="address_line1">
						<span class="input__label-content input__label-content--nao">Address Line 1 </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address_line2" name="address_line2" />
					<label class="input__label input__label--nao" for="address_line2">
						<span class="input__label-content input__label-content--nao">Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address_line3" name="address_line3" />
					<label class="input__label input__label--nao" for="address_line3">
						<span class="input__label-content input__label-content--nao">Address Line 3</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_city_name" type="text" id="city" name="city" />
					<label class="input__label input__label--nao" for="city">
						<span class="input__label-content input__label-content--nao">City</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_state_name" type="text" id="state" name="state" />
					<label class="input__label input__label--nao" for="state">
						<span class="input__label-content input__label-content--nao">State</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pin_code_prop" name="pin_code_prop" onkeypress="return isNumberKey(event)" maxlength="6" />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Pin Code</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_profit_prop"
					name="net_profit_prop"  onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="net_profit_prop">
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
					<input class="input__field input__field--nao" type="text" id="name_of_company" name="name_of_company" />
					<label class="input__label input__label--nao" for="name_of_company">
						<span class="input__label-content input__label-content--nao">Name of the Firm / Company</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="input-2" />
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">Business PAN </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="date_formation" name="date_formation" />
					<label class="input__label input__label--nao" for="date_formation">
						<span class="input__label-content input__label-content--nao">Date of Formation </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="ofc_landline" name="ofc_landline" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="ofc_landline">
						<span class="input__label-content input__label-content--nao">Office Landline </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add1" name="ofc_add1" />
					<label class="input__label input__label--nao" for="ofc_add1">
						<span class="input__label-content input__label-content--nao">Office Address Line 1 </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add2" name="ofc_add2" />
					<label class="input__label input__label--nao" for="ofc_add1">
						<span class="input__label-content input__label-content--nao">Office Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add3" name="ofc_add3" />
					<label class="input__label input__label--nao" for="ofc_add3">
						<span class="input__label-content input__label-content--nao">Office Address Line 3</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_city_name" type="text" id="city_nm" name="city_nm" />
					<label class="input__label input__label--nao" for="city_nm">
						<span class="input__label-content input__label-content--nao">City</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao search_state_name" type="text" id="state_nm" name="state_nm" />
					<label class="input__label input__label--nao" for="state_nm">
						<span class="input__label-content input__label-content--nao">State</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" name="pin_entity" id="pin_entity" onkeypress="return isNumberKey(event)" maxlength="6" />
					<label class="input__label input__label--nao" for="pin_entity">
						<span class="input__label-content input__label-content--nao">Pin Code</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="ofc_type_entity" name="ofc_type_entity">
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
					<input class="input__field input__field--nao" type="text" id="name_co_app" name="name_co_app" />
					<label class="input__label input__label--nao" for="name_co_app">
						<span class="input__label-content input__label-content--nao">First Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name_co_app" name="middle_name_co_app" />
					<label class="input__label input__label--nao" for="middle_name_co_app">
						<span class="input__label-content input__label-content--nao">Middle Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name_co_app" name="last_name_co_app" />
					<label class="input__label input__label--nao" for="last_name_co_app">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender_co_app" name="gender_co_app">
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="dob_co_app" name="dob_co_app" />
					<label class="input__label input__label--nao" for="dob_co_app">
						<span class="input__label-content input__label-content--nao">DOB / AGE</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="occupation_co_app" name="occupation_co_app" />
					<label class="input__label input__label--nao" for="occupation_co_app">
						<span class="input__label-content input__label-content--nao">Occupation</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="income_co_app"  name="income_co_app" onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="income_co_app">
						<span class="input__label-content input__label-content--nao">Income (Monthly)</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="relation" name="relation" />
					<label class="input__label input__label--nao" for="relation">
						<span class="input__label-content input__label-content--nao">Relation of Co-Applicant with Applicant</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pan_no_co_app" name="pan_no_co_app" minlength="10" maxlength="10" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}"  onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="pan_no_co_app">
						<span class="input__label-content input__label-content--nao">PAN</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Mobile No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="residence_co_app" name="residence_co_app" maxlength="10" onkeypress="return isNumberKey(event)"" />
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
					<input class="input__field input__field--nao" type="text" id="address1_co_app" name="address1_co_app" />
					<label class="input__label input__label--nao" for="address1_co_app">
						<span class="input__label-content input__label-content--nao">Address Line 1</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address2_co_app" name="address2_co_app" />
					<label class="input__label input__label--nao" for="address2_co_app">
						<span class="input__label-content input__label-content--nao">Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
			</section>
			
			
			</div>
			<div class="col-md-12">
			   <div class="jumbotron alert alert-success">
			   <strong class="text-center"><h3><i class="icon-checkmark"></i> Your Loan is in Process. We will get back to you shortly</h3></strong>
			   </div>
			</div>
			</div>
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
         	console.log(data);
               var data_1=data['data'];
               if(data_1){
                $('#express_form').hide();
                $('#express_loan_verify_form').show();
                    //console.log("hah");
                  }else{
                    window.location.href="{{URL::to('went-wrong')}}";
                  }
          

        }  
      }); 
      }

    });


</script>



