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
					<input class="input__field input__field--nao lastReporteddate1 input__label-content input__label-content--nao dob" type="text" id="dob" placeholder="DOB / AGE" name="dob" required />
					<label class="input__label input__label--nao" for="dob">
					
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
					<input class="input__field input__field--nao" type="tel" id="residence_landline" name="residence_landline" maxlength="10" pat