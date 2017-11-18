@include('layout.header')
<div id="fh5co-hero">
  <div class="express-lon-ban"><img src="images/express-loan-image.jpg" alt="Express-Loan Process" title="Express-Loan Process" class="img-responsive"/></div>
  <br>
		<div class="container animate-box">
			<div class="row white-bg box-shadow">
		
			<div id ="otp_div">
            <form class="express_form" id="express_form" method="POST" >
            {{ csrf_field() }}
			
			<div class="offset5">

            <div class="col-md-12">
			<center><div class="type-cover1"><span>ENTER AMOUNT</span></div></center>
			<input type="text"  name="amount" id="amount" class="center-dv input-typ amount" 
			onkeypress="return isNumberKey(event)" maxlength="9"  required/>
			</div>
			<hr>
		    
			<div class="col-md-12">
			<div class="offset5">
			<center><div class="type-cover1"><span>BUSINESS TYPE</span></div></center>
			<a class="btn"><input type="radio" name="employment"  value="Self_Employed_Professionsl(SEP)" checked/> Self Employed Professional (SEP)</a>
             <a class="btn"><input type="radio" name="employment"  value="Self_Employed_Non_Professional (SENP)" /> Self Employed Non-Professional (SENP)</a>
			</div>
		    </div>
			
			<div class="col-md-2"></div>
			<div class="col-md-8 mrg-btm">
			<center><div class="type-cover1"><span>TENURE (Months)</span></div></center>
			<div class="tenure offset5 pad">
			<div  id="unranged-value" style="width:100%; height:10px;"></div>
			</div>
			
			</div>
			
			<div class="col-md-12">
			<div class="offset5">
			
			<center><div class="type-cover1"><span>FIRM HOLDER</span></div></center>
			<a class="btn"><input type="radio" name="firm_holder" 
			value="Sole_Proprietor " checked/> Sole Proprietor</a>
             <a class="btn"><input type="radio" name="firm_holder"
             value="Partnership " /> Partnership</a>
			 <a class="btn"><input type="radio" name="firm_holder"  value="Company" /> Company</a>
			</div>
		    </div>
		  <br>
		  
		  <?php if(Session::get('is_login')) { ?>
				  <?php if(Session::get('contact')!=''){ ?>
				<button class="btn btn-primary btn-outline with-arrow animate-box next " >Next<i class="icon-arrow-right"></i></button>
				<?php }else{?> 
                 <a  class="btn btn-primary btn-outline with-arrow animate-box next" >Next<i class="icon-arrow-right"></i></a>
				 <?php }?>

			<?php }else{?>
			<div class="col-md-10">
		   <input type="tel" name="mob_no" id="mob_no" class="center-dv input-typ" placeholder="98XXX XXXXX"  maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" />
		   
	
		   <button class="get-otp" type="submit" id="express_loan_send_otp">Get OTP</button>
		  <br> <span id="mobile_value" style="display: none;color: red;">Phone number should be of 10 digits.</span>
		  </div>
			<?php }?>  
			
			
			
			
			</div>
		
		</form>
          <div class="col-md-12 pad1">
		<form name="express_loan_verify_form" id="express_loan_verify_form" style="display:none" method="POST">
						       {{ csrf_field() }}
						   <h3>Enter your verification code sent on your number</h3>
						   <input type="text" name="verify_otp" id="verify_otp1" class="form-control input-typ mrg-aut" onkeypress="return fnAllowNumeric(event)" required maxlength="6" placeholder="Enter OTP Code">
						   <hr class="hr-clr">

						   <a class="btn btn-primary btn-lg btn-view" id="express_loan_verify_otp">VERIFY OTP</a>
						   <div id="otp_value" style="display: none;color: red;">Otp is of 6 digits.</div>
						   <div id="wrong_otp_value" style="display: none;color: red;">Wrong Otp !!!</div>
						   <div id="waiting_div_otp" style="display: none;color: red;">Please wait ...</div>
						   </form>
				</div>
		</div>

		
		
	
	</div>
	<br>
	<div class="animate-box" id ="generic" style="display: none;"  >
	<form name="generic_form" id="generic_form" method="POST">
	{{ csrf_field() }}
	<div class="row">
			<div class="col-md-12 bg-white centered well pad1">
			
			
		<h3 class="text-uppercase exp-hed">Generic Information</h3>
			
			 <section class="content">

			 <input class="input__field input__field--nao" type="hidden" id="holder" name="holder"  value=""  required   />
			
				<input class="input__field input__field--nao" type="hidden" id="business_type" name="business_type"  value=""  required   />
					
				
				<span class="input_exp input--nao input--filled">
					<input class="input__field input__field--nao" type="text" id="loanamount" name="loanamount"  value="" onkeypress="return isNumberKey(event)" required   />
					<label class="input__label input__label--nao" for="loanamount">
						<span class="input__label-content input__label-content--nao">Loan Amount</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				 <span class="input_exp input--nao input--filled">
					<input class="input__field input__field--nao" type="text" id="tenure" name="tenure" value="" onkeypress="return isNumberKey(event)" maxlength="3" required />
					<label class="input__label input__label--nao" for="tenure">
						<span class="input__label-content input__label-content--nao">Tenure</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<!-- <span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="min_income" name="min_income" onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="min_income">
						<span class="input__label-content input__label-content--nao">Min Income Per Month</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span> -->
			</section>
			
			<section class="content">
				
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="constitution" name="constitution" required>
					<option></option>
					<option value="Company">Company</option>
					<option value="Partnership">Partnership(Registered/Unregistered)</option>
					<option value="Sole_Proprietor">Sole Proprietor</option>
					
					</select>
					<label class="input__label input__label--nao" for="constitution">
						<span class="input__label-content input__label-content--nao">Constitution</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="nature_of_business" name="nature_of_business" required>
					<option></option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Traders">Traders</option>
					<option value="Retailer">Retailer</option>
					<option value="Services">Services</option>
					<option value="Others">Others</option>
					</select>
					<label class="input__label input__label--nao" for="nature_of_business">
						<span class="input__label-content input__label-content--nao">Nature Of Business</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				
				
				<span class="input_exp input--nao">
					
					<select class="input__field input__field--nao fnt-clr" id="type_of_industry" name="type_of_industry" required>
					<option></option>
					<option value="Agriculture">Agriculture</option>Agriculture
 
					<option value="Auto_Components">Auto Components</option>
					<option value="Automobiles">Automobiles</option>
					<option value="Aviation">Aviation</option>
					<option value="Banking">Banking</option>
					<option value="Biotechnology">Biotechnology</option>
					<option value="Cement">Cement</option>
					<option value="Consumer_Markets">Consumer Markets</option>
					<option value="Education_And_Training">Education And Training</option>
					<option value="Engineering">Engineering</option>
					<option value="Financial_Services">Financial Services</option>
					<option value="Food_Industry">Food Industry</option>
					<option value=" Gems_And_Jewellery"> Gems And Jewellery</option>
					<option value="Healthcare">Healthcare</option>
					<option value="Infrastructure">Infrastructure</option>
					<option value="Insurance">Insurance</option>
					<option value="IT_&_ITeS">IT & ITeS</option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Marketing_And_Strategy">Marketing And Strategy</option>
					<option value="Media_And_Entertainment">Media And Entertainment</option>
					<option value=" Oil_And_Gas"> Oil And Gas</option>
					<option value="Pharmaceuticals">Pharmaceuticals</option>
					<option value="Ports">Ports</option>
					<option value="Power">Power</option>
					<option value="Railways">Railways</option>
					<option value=" Real_Estate"> Real Estate</option>
					<option value="Research_And_Development">Research And Development</option>
					<option value="Retail">Retail</option>
					<option value="Roads">Roads</option>
					<option value="Rural_Market"> Rural Market</option>

					<option value="Science_And_Technology">Science_And_Technology</option>
					<option value="Semiconductor">Semiconductor</option>
					<option value="Services">Services</option>
					<option value=" Steel"> Steel</option>
					<option value="Telecommunications">Telecommunications</option>
					<option value="Tourism_And_Hospitality">Tourism And Hospitality</option>
					<option value="Textiles">Textiles</option>
					<option value="Urban Market">Urban Market</option>
					</select>
					<label class="input__label input__label--nao" for="type_of_industry">
						<span class="input__label-content input__label-content--nao">Type Of Industry</span>
					</label>

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
					<option></option>
					<option value="Self">Self</option>
					<option value="Parental_Owned">Parental Owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<label class="input__label input__label--nao" for="residence_type">
						<span class="input__label-content input__label-content--nao">Residence Type</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="office_type_generic" name="office_type_generic" required>
					<option></option>
					<option value="Self_owned">Self-owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<label class="input__label input__label--nao" for="office_type_generic">
						<span class="input__label-content input__label-content--nao">Office Type</span>
					</label>
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
					<input class="input__field input__field--nao" type="text" id="turnover" name="turnover" onkeypress="return isNumberKey(event)" oninput="business_turnover('turnover')" required  />
					<label class="input__label input__label--nao" for="turnover">
						<span class="input__label-content input__label-content--nao">Business Turnover ( Total Sales) - YOY  </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
					<div id="turn_over" style="display:none;color: red;">Amount should be 500000 or greater than 500000.</div>
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
					<input class="input__field input__field--nao" type="text" id="first_name" name="first_name" required onkeypress="return AllowAlphabet(event)" />
					<label class="input__label input__label--nao" for="first_name">
						<span class="input__label-content input__label-content--nao">First Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name" name="middle_name" onkeypress="return AllowAlphabet(event)"/>
					<label class="input__label input__label--nao" for="middle_name">
						<span class="input__label-content input__label-content--nao">Middle Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name" name="last_name" required onkeypress="return AllowAlphabet(event)" />
					<label class="input__label input__label--nao" for="last_name">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender" name="gender" required>
					<option></option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<label class="input__label input__label--nao" for="gender">
						<span class="input__label-content input__label-content--nao">Gender</span>
					</label>
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
					<option></option>
					<option value="Undergraduate">Undergraduate</option>
					<option value="Graduate">Graduate</option>
					<option value="Post_Graduate">Post-Graduate</option>
					<option value="Professional">Professional</option>
					</select>
					<label class="input__label input__label--nao" for="education">
						<span class="input__label-content input__label-content--nao">Educational Qualifications</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="marital_status" name="marital_status" required>
					<option></option>
					<option>Married</option>
					<option>Unmarried</option>
					</select>
					<label class="input__label input__label--nao" for="marital_status">
						<span class="input__label-content input__label-content--nao">Marital Status</span>
					</label>
					
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
					<input class="input__field input__field--nao" type="text" id="pan_no" name="pan_no" oninput="pan_card('pan_no')" maxlength="10" minlength="10"  required />
					<label class="input__label input__label--nao" for="pan_no">
						<span class="input__label-content input__label-content--nao">Pan No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
					<div id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
				</span>

				<span class="input_exp input--nao input--filled">
					<input class="input__field input__field--nao" type="tel" id="mobile_no" name="mobile_no" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" value="" required  />
					<label class="input__label input__label--nao" for="mobile_no">
						<span class="input__label-content input__label-content--nao">Mobile No</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="residence_landline" name="residence_landline" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)" />
					<label class="input__label input__label--nao" for="residence_landline">
						<span class="input__label-content input__label-content--nao">Residence Landline </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="aadhar_card" name="aadhar_card" oninput="aadhar('aadhar_card')" required minlength="12" maxlength="12"  />
					<label class="input__label input__label--nao" for="aadhar_card">
						<span class="input__label-content input__label-content--nao">UID No. (Aadhar Card )</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
					<div id="aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
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
				<!-- <span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="net_profit_applicant"
					name="net_profit_applicant"  onkeypress="return isNumberKey(event)" required />
					<label class="input__label input__label--nao" for="net_profit_applicant">
						<span class="input__label-content input__label-content--nao">Net Profit</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span> -->

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
					<input class="input__field input__field--nao" type="text" id="bussiness_pan" name="bussiness_pan" maxlength="10" pattern="[A-Za-z]{5}\d{4}[A-Za-z]{1}" required />
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
					<input class="input__field input__field--nao" type="text" id="ofc_add2" name="ofc_add2"/>
					<label class="input__label input__label--nao" for="ofc_add1">
						<span class="input__label-content input__label-content--nao">Office Address Line 2</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="ofc_add3" name="ofc_add3"/>
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
					<option></option>
					<option value="Self_owned">Self-Owned</option>
					<option value="Rented">Rented</option>
					
					</select>
					<label class="input__label input__label--nao" for="office_type_applicant_entity">
						<span class="input__label-content input__label-content--nao">Office Type</span>
					</label>
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
					<input class="input__field input__field--nao" type="text" id="name_co_app" name="name_co_app"/>
					<label class="input__label input__label--nao" for="name_co_app">
						<span class="input__label-content input__label-content--nao">First Name </span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="middle_name_co_app" name="middle_name_co_app"/>
					<label class="input__label input__label--nao" for="middle_name_co_app">
						<span class="input__label-content input__label-content--nao">Middle Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="last_name_co_app" name="last_name_co_app"/>
					<label class="input__label input__label--nao" for="last_name_co_app">
						<span class="input__label-content input__label-content--nao">Last Name</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="gender_co_app" name="gender_co_app" />
					<option></option>
					<option>Male</option>
					<option>Female</option>
					
					</select>
					<label class="input__label input__label--nao" for="gender_co_app">
						<span class="input__label-content input__label-content--nao">Gender</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao lastReporteddate1" type="text" id="dob_co_app" name="dob_co_app"/>
					<label class="input__label input__label--nao" for="dob_co_app">
						<span class="input__label-content input__label-content--nao">DOB / AGE</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="occupation_co_app" name="occupation_co_app"/>
					<label class="input__label input__label--nao" for="occupation_co_app">
						<span class="input__label-content input__label-content--nao">Occupation</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="income_co_app"  name="income_co_app" onkeypress="return isNumberKey(event)"/>
					<label class="input__label input__label--nao" for="income_co_app">
						<span class="input__label-content input__label-content--nao">Income (Monthly)</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<select class="input__field input__field--nao fnt-clr" id="relation" name="relation">
					<option ></option>
					<option value="Mother">Mother</option>
					<option value="Father">Father</option>
					<option value="Brother">Brother</option>
					<option value="Sister">Sister</option>
					
					</select>
					<label class="input__label input__label--nao" for="relation">
						<span class="input__label-content input__label-content--nao">Relation</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="pan_no_co_app" name="pan_no_co_app" minlength="10" maxlength="10" oninput="pan_card('pan_no_co_app')"   />
					<label class="input__label input__label--nao" for="pan_no_co_app">
						<span class="input__label-content input__label-content--nao">PAN</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
					<div id="pan_number_co_app" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="mob_co_app" name="mob_co_app" maxlength="10" pattern="[789][0-9]{9}" onkeypress="return isNumberKey(event)"/>
					<label class="input__label input__label--nao" for="mob_co_app">
						<span class="input__label-content input__label-content--nao">Mobile No.</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="tel" id="residence_co_app" name="residence_co_app" maxlength="10" onkeypress="return isNumberKey(event)""/>
					<label class="input__label input__label--nao" for="residence_co_app">
						<span class="input__label-content input__label-content--nao">Residence Landline</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="aadhar_card_co_app" name="aadhar_card_co_app" oninput="aadhar('aadhar_card_co_app')" minlength="12" maxlength="12" />
					<label class="input__label input__label--nao" for="aadhar_card_co_app">
						<span class="input__label-content input__label-content--nao">UID No. (Aadhar Card )</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
					<div id="aadhar_number_co_app" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
					
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address1_co_app" name="address1_co_app"/>
					<label class="input__label input__label--nao" for="address1_co_app">
						<span class="input__label-content input__label-content--nao">Address Line 1</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
				<span class="input_exp input--nao">
					<input class="input__field input__field--nao" type="text" id="address2_co_app" name="address2_co_app"/>
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
			<!-- <div class="col-md-12">
			   <div class="jumbotron alert alert-success" style="display: none">
			   <strong class="text-center"><h3><i class="icon-checkmark"></i> Your Loan is in Process. We will get back to you shortly</h3></strong>
			   </div>
			</div> -->
			</div>

			<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
                  
			</form>

         </div>
	</div>
	</div>
@include('layout.footer')
@include('layout.script')
<div class="modal fade" tabindex="-1" role="dialog" id="process">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Your Loan is in Process. We will get back to you shortly</b>.</p></h4>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      	</div>
    	</div>
  </div>
</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Ooops. Something went wrong.</b>.</p></h4>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr">Amount should be greater than <b>"5,00,000"</b>.</p></h4>
        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


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

				[].slice.call( document.querySelectorAll( 'select.input__field' ) ).forEach( function( inputEl ) {
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
	  
    $(".search_state_name").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchstateajax') }}",
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
        
          var emp = $('input[name=employment]:checked').val();
          $('#business_type').val(emp);
           // console.log(emp);
         
         var firm = $('input[name=firm_holder]:checked').val();
          $('#holder').val(firm);
           // console.log(firm);
         
        var amount = $("#amount").val();
         $('#loanamount').val(amount);
         if (amount<500000) {
         	$('#modalerr').html("");
         	$('#modalerr').html("Amount should be greater than <b>5,00,000</b>.");
          	$('#homeTransfer').modal('show'); 
         } else {
           $('#homeTransfer').modal('hide'); 
           var slidr = $("#unranged-value").text();
         $('#tenure').val(slidr);
         if (slidr<24) {
         	$('#modalerr').html("");
         	$('#modalerr').html("Tenure(in months) should be <b>24 or greater than 24</b>.");
          $('#homeTransfer').modal('show'); 
         } else { 
         	 $('#slidervalue').modal('hide'); 
         
         

         console.log(slidr);

         var mob_no = $("#mob_no").val();
         $('#mobile_no').val(mob_no);

        if(($('#mob_no').val().length)<10)
        {
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
     }

          
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
       	// console.log("yes");
        $('#generic').show();
        $('#otp_div').hide();
      }else{
      	// console.log("no");
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
		alert('GJHG');
    event.preventDefault();
      $form=$('#generic_form');
      if(! $form.valid()){
      }else{
      	 $(".iframeloading").show();
      	// $("#express_loan_submit").hide();
        //var s=$('#'+form).serialize();
        //alert('HGGHF');

   
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('aditya-express-loan')}}",
         data : $('#generic_form').serialize(),
         success: function(msg){
         // console.log(msg.data);
         	$(".iframeloading").hide();
         	//console.log(msg.data);
          if(msg.data==true){          
              $('#process').modal('show');                        
          }else{
             $('#sorry').modal('show');  
           
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
            // console.log(low, high);
        }
    });

    var s2 = $("#unranged-value").freshslider({
        step: 1,
        value:24

    });

    var s3 = $("#ranged-value").freshslider({
        range: true,
        step:1,
        value:[4, 60],
        onchange:function(low, high){
            // console.log(low, high);
        }
    });
</script>

<script type="text/javascript">
	function pan_card(obj,val){
		if(obj=='pan_no' ){
                   var str =$('#pan_no').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pan_number').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pan_number').show();

                  	return false;
                  }
                  
	}
}
</script>

<script type="text/javascript">
	function pan_card(obj,val){
		// console.log(obj);
		if(obj=='pan_no' ){
                   var str =$('#pan_no').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pan_number').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pan_number').show();

                  	return false;
                  }
                  
	}

	if(obj=='pan_no_co_app' ){
                   var str =$('#pan_no_co_app').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pan_number_co_app').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pan_number_co_app').show();

                  	return false;
                  }
                  
	}

}
</script>

<!-- Aadhar card Validation -->
<script type="text/javascript">
	function aadhar(obj,val){
		// console.log(obj);
		if(obj=='aadhar_card' ){
                   var str =$('#aadhar_card').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // console.log('Aadhar No. is valid one.!!');
                     	$('#aadhar_number').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Aadhar No..!!');
                  	$('#aadhar_number').show();

                  	return false;
                  }
                  
	}

	if(obj=='aadhar_card_co_app' ){
                   var str =$('#aadhar_card_co_app').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                      // console.log('Aadhar No. is valid one.!!');
                     	$('#aadhar_number_co_app').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Aadhar No..!!');
                  	$('#aadhar_number_co_app').show();

                  	return false;
                  }
                  
	}

}
</script>

<script type="text/javascript">
	$(".next").click(function(event){
		// alert("okjjyj");
		
    event.preventDefault();
      $form=$('#express_form');
      if(! $form.valid()){
     // alert("okjhj");
      	
      }else{
      	$('#express_form').hide();
      	 var emp = $('input[name=employment]:checked').val();
          $('#business_type').val(emp);
           // console.log(emp);
         
         var firm = $('input[name=firm_holder]:checked').val();
          $('#holder').val(firm);
           // console.log(firm);
      	var amount = $("#amount").val();
         $('#loanamount').val(amount);
         var slidr = $("#unranged-value").text();
         $('#tenure').val(slidr);
         if (amount<500000) {
         	$('#modalerr').html("");
         	$('#modalerr').html("Amount should be greater than <b>5,00,000</b>.");
          	$('#homeTransfer').modal('show');
         	$('#express_form').show();

         }else if(slidr<24){
          	$('#modalerr').html("");
         	$('#modalerr').html("Tenure(in months) should be <b>24 or greater than 24</b>.");
          $('#homeTransfer').modal('show'); 
         	$('#express_form').show();
         }

         else {
        $('#homeTransfer').modal('hide');
      	$('#generic').show();
      }
      	

    }
});

</script>

<script type="text/javascript">
	function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>

<script type="text/javascript">
	function business_turnover(obj,val){
		console.log(obj);
		if(obj=='turnover' ){
                   var str =$('#turnover').val();
                   if (str<500000) {

                   	$('#turn_over').show();
                   } else {
                    	$('#turn_over').hide();
                   }
                  
        }
	}
</script>
<!-- <script type="text/javascript">
	$('input.amount').keyup(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40) return;

  // format number
  $(this).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});

</script> -->


