@include('layout.header')
<style>
 .img-center {margin:0 auto; display:block;padding:10px;}
 label {font-size:11px;}
 .yellow-bg {background:#ffc000; font-size:13px; color:#333; margin:0 auto; padding:10px 10px; margin:0 auto; cursor:pointer; border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;}
 .gray-bg {background:#666; font-size:13px; color:#fff; padding:10px 10px; margin:0 auto;display:block;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px; }
 .yellow-bg:hover {background:#eab102;color:#333;}
 .pad-btm {padding-bottom:18px;}
 .blu-head-bg {background:#28a0ff; padding:15px; display:block;float:left; width:100%; text-align:center; color:#fff;font-size:16px;}
 .mrg-tp-btm {margin:15px auto;}
 .step1, .step2, .step3, .step4, .step5, .step6, .step7, .step8, .step9 {float:left;margin-bottom:20px;}
 .center-div {margin:0 auto; display:block;}
  th {text-align:center;}
  .form-control {height: 38px !important;border-radius: 0px !important;}
 @media only screen and (max-width: 768px) 
 {
 .step1, .step2, .step3, .step4, .step5, .step6, .step7, .step8, .step9, .step10, .step11 {float:none;}
 }
</style>
<br>
<div id="fh5co-hero">
<div class="container">

<div class="col-md-4 col-md-offset-4" style="display:block;">
<form id="lenden_otp" name="lenden_otp" method="POST">
 {{ csrf_field() }}
	<div class="step1 white-bg box-shadow pad-btm">
	<img src="images/lenden_logo.jpg" class="img-center"/>

	<input type="hidden" name="request_type" id="request_type" value="send_otp">
	

	<div class="col-md-12">
	<label>Mobile</label>
	<input name="mobile_number" id="mobile_number" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Email Id</label>
	<input name="email" id="email" oninput="mail('email')" type="text" class="form-control"  required="">
	<span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span>
	</div>
	
	
	
	<div class="col-md-12"></div>
	
	<div class="col-md-12">
	
	<a class="yellow-bg " id="otp">SEND OTP</a>
	</div>
	</div>
	</form>
	
	</div>
<div class="col-md-4 col-md-offset-4" style="display:block;">
	<form name="lenden_verify_form" id="lenden_verify_form" method="POST">
    {{ csrf_field() }}
   <h4 class="blu-head-bg">Verify OTP</h4>

    <div class="whit-bg">
    <br>
    <img src="images/verification_img.png" class="img-align-center"/>
    <input type="hidden" name="request_type" id="request_type" value="verify_otp">
    <input type="hidden" name="mobile_number" id="mob_no">
    <input type="hidden" name="email" id="email_addr">
    <div class="col-md-12">
	<label>OTP</label>
	<input name="OTP" id="OTP" minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" type="text" class="form-control"  required="">
	</div>

    <a class="yellow-bg " id="lenden_verify">VERIFY OTP</a>
    <div id="otp_value" style="display: none;color: red;">Otp is of 6 digits.</div>
                           
                           
    </div>
    <br>
    </form>
    </div>

    <div class="col-md-4 col-md-offset-4" style="display:block;">
	<form name="borrower_signup_form" id="borrower_signup_form" method="POST">
    {{ csrf_field() }}
   <h4 class="blu-head-bg">Borrower Sign Up</h4>

    <div class="whit-bg">
    <br>
    <img src="images/verification_img.png" class="img-align-center"/>
    <div class="col-md-12">
	<label>Full Name:</label>
    <input type="text" class="form-control" name="full_name" id="full_name" required>
    </div>

    <div class="col-md-12">
	<label>Mobile No:</label>
    <input type="text" class="form-control" name="mobile_number" id="mob" readonly required>
    </div>

    <div class="col-md-12">
	<label>Email:</label>
    <input type="text" class="form-control" name="email" id="email_address" readonly required>
    </div>

    <div class="col-md-12">
	<label>Password:</label>
    <input type="text" class="form-control" name="password" id="password" required>
    </div>

    <div class="col-md-12">
	<label>Group:</label>
    <input type="text" class="form-control" name="group" id="group" value="BORROWER" readonly>
    </div>

    <div class="col-md-12">
	<label>Type:</label>
    <input type="text" class="form-control" name="type" id="type">
    </div>

    <div class="col-md-12">
	<label>OTP</label>
    <input type="text" class="form-control" name="otp" id="one-time-password">
    </div>
    <a class="yellow-bg " id="sign-up">SIGN UP</a>
  
                           
                           
    </div>
    <br>
    </form>
    </div>

    <div class="col-md-4 col-md-offset-4" style="display:block;">
	<form name="lenden_task_id" id="lenden_task_id" method="POST">
    {{ csrf_field() }}
   <h4 class="blu-head-bg">GET TASK ID</h4>

    <div class="whit-bg">
    
    <div class="col-md-12">
	<label>Month</label>
	<select class="form-control drop-arr select-sty" name="month" id="month" required>
					   <option disabled selected  value="">Month</option>
					        <option value="1">January</option>
						    <option value="2">February</option>
						    <option value="3">March</option>
						    <option value="4">April</option>
						    <option value="5">May</option>
						    <option value="6">June</option>
						    <option value="7">July</option>
						    <option value="8">August</option>
						    <option value="9">September</option>
						    <option value="10">October</option>
						    <option value="11">November</option>
						    <option value="12">December</option>
						    
					</select>
	</div>

	<div class="col-md-12">
	<label>Year</label>
	<select class="form-control drop-arr select-sty" name="year" id="year" required>
					   <option disabled selected  value="">Year</option>
					        <option value="2017">2017</option>
						    <option value="2018">2018</option>
						    <option value="2019">2019</option>
						    <option value="2020">2020</option>
						    <option value="2021">2021</option>
						    <option value="2022">2022</option>
						    <option value="2023">2023</option>
						    <option value="2024">2024</option>
						</select>
	</div>

    <a class="yellow-bg " id="lenden_taskid">SUBMIT</a>
   
                           
                           
    </div>
    <br>
    </form>
    </div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step2 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Your Loan Requirements</h4>

	
	<div class="col-md-12">
	<label>Enter the loan Amount you Require</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Select the Purpose of your loan</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Enter the loan tenure in Months</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Please write the description of the loan</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step3 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Pan Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Enter the loan Amount you Require</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-12">
	
	<button class="yellow-bg mrg-tp-btm">Read Pan Data</button>
	</div>
	<div class="col-md-12">
	<label>PAN Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Full Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Father's Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Residing in India</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step4 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Aadhar Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Upload your Aadhar front side</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	
	<div class="col-md-8 col-xs-8">
	<label>Upload your Aadhar Back side</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	
	<div class="col-md-12">
	<label>Gender</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Aadhar UID Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Indian National</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Residing in India</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12"><input type="checkbox" /> &nbsp; Check if your Provided mobile number is linked to Aadhar</div>
	
	<div class="col-md-12">
	<label>Aadhar Registered Mobile Number</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="yellow-bg">NEXT</button>
	</div>
	</div>
	</div>

	
	
	<div style="display:block;">
	<div class="col-md-4 col-md-offset-2">
	<div class="step5 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Address Details</h4>

	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>City</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Pincode</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	
	<div class="col-md-12">
	<label>Rent Amount per Month (Disabled)</label>
	<input type="number" class="form-control" disabled  required="">
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12"><input type="checkbox" />Communication Address is same as permanent address</div>
	
	</div>
	</div>
	
	
	
	
	<div class="col-md-4">
	
	<div class="step5 white-bg box-shadow pad-btm">
     <br>
	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>City</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Pincode</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	
	<div class="col-md-12">
	<label>Rent Amount per Month (Disabled)</label>
	<input type="number" class="form-control" disabled  required="">
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button> &nbsp;
	<button class="yellow-bg">NEXT</button>
	</div>
	
	</div>
	</div>
	</div>
	
	
	

	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step4 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Personal Details</h4>
	
	
	<div class="col-md-12">
	<label>Qualification</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Specialization</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Parent's/Spouse's Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Marital Status</label>
	<select class="form-control block drop-arr select-sty" >
	 <option>single</option>
	</select>
	</div>
	
	
	<div class="col-md-12">
	<label>Personal Reference Email (Parent/Spouse)</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Personal Reference Conatact Number (Parent/Spouse)</label>
	<input type="number" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Total Family Members</label>
	<input type="number" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Total Earning Members</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	<div class="col-md-8 col-xs-8">
	<label>Click Here to Upload Your Photograph</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">CONTINUE</button>
	</div>
	</div>
	</div>
	
	
	
	
	<div style="display:block;">
	<div class="col-md-4 col-md-offset-2">
	<div class="step6 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Professional Details</h4>
     <p class="col-md-12">Please fill up your employment Details</p>
	<div class="col-md-12">
	<label>Designation</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<label>Professional Email ID</label>
	<input type="emial" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Website</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>Occupation </label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option></option>
	</select>
	</div>
	<div class="col-md-6">
	<label>Gross Annual Income</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option></option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Industry Type</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<p class="col-md-12">experience in current company</p>
	
	<div class="col-md-6">
	<label>Years</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Months</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<p class="col-md-12">Total Work Experience</p>
	
	<div class="col-md-6">
	<label>Years</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Months</label>
	<input type="text" class="form-control"  required="">
	</div>

	
	</div>
	</div>
	
	
	
	
	<div class="col-md-4">
	
	<div class="step6 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Employer Address</h4>
     <br>
	<div class="col-md-12">
	<label>Address </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>City</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Mumbai</option>
	</select>
	</div>
	
	<div class="col-md-6">
	<label>State</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>Maharashtra</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Country</label>
	<select class="form-control block drop-arr select-sty" required="">
	   <option>India</option>
	</select>
	</div>
	
	<div class="col-md-12">
	<label>Landmark</label>
	<input type="number" class="form-control"  required="">
	</div>
	
	
	<div class="col-md-6">
	<label>Pin Code</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-6">
	<label>Landline Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	<p class="col-md-12">Professional Preference</p>
	
	<div class="col-md-12">
	<label>Reference Full Name</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Designation</label>
	<input type="text" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Email</label>
	<input type="email" class="form-control"  required="">
	</div>
	<div class="col-md-12">
	<label>Phone Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	
	</div>
	</div>
	</div>
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step7 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Financial Details</h4>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your June Payslip</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your July Payslip</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-6">
	<label>June Salary</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>July Salary</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6">
	<label>Incentive Type</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-6">
	<label>Incentive Amount</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Financial Details</h4>
	<p class="col-md-12">Please Upload Your Cheque</p>
	<div class="col-md-8 col-xs-8">
	<label>Click here to upload your cheque</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Upload your Bank Statement</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	<div class="col-md-8 col-xs-8">
	<label>Upload your bank Statement</label>
	<input type="file" class="form-control"  required="">
	</div>
	<div class="col-md-4 col-xs-4"><br><button class="yellow-bg">UPLOAD</button></div>
	
	<div class="col-md-6 col-xs-12">
	<label>Bank Account Number</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Bank</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>IFSC Code</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Account Type</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Name as on Bank Account</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
	<br>
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Assets Details</h4>
	<p class="col-md-12">Please Provide the details of active loans have</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Asset</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Owner</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Any Loan</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD ASSET</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Asset Type</th>
		 <th>Owner</th>
		 <th>Any Loan</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>No Record Added Yet</td>
		 <td>&nbsp;</td>
		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Enter Active Loan Details</h4>
	<p class="col-md-12">Please Provide the details of active loans have</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Loan</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	<div class="col-md-12">
	<label>Amount </label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>EMI</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-6 col-xs-12">
	<label>Outstanding</label>
	<select class="form-control block drop-arr select-sty" >
	 <option></option>
     </select>
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD LOAN</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Loan Type</th>
		 <th>Amount</th>
		 <th>EMI</th>
		 <th>OutStanding</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>No Record Added Yet</td>
		 <td>&nbsp;</td>
		 <td>&nbsp;</td>
		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
	
	
	
	<div class="col-md-4 col-md-offset-4" style="display:block;">
	<div class="step8 white-bg box-shadow pad-btm">
	<h4 class="blu-head-bg">Upload Documents</h4>
	<p class="col-md-12">Please Upload any additional documents if any</p>
	
	<div class="col-md-12 col-xs-12">
	<label>Type of Document</label>
	<select class="form-control block drop-arr select-sty"  >
	 <option></option>
      </select>
	</div>
	
	<div class="col-md-12">
	<label>Click here to upload a supporting document</label>
	<input type="text" class="form-control"  required="">
	</div>
	
	<div class="col-md-12">
     <div class="pull-right">
	<button type="button"  class="btn btn-default btn-xs">Reset</button>
	<button type="button" class="btn btn-default btn-xs">ADD</button>
	</div>
		<br>
	</div>

	<div class="col-md-12">
	<div class="table-responsive mrg-top">
	 <table class="table table-striped">
	    <tr>
		 <th>Type</th>
		 <th>File</th>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		 <td>&nbsp;</td>

		</tr>
	 </table>
	</div>
	</div>
	
	<div class="col-md-12">
	<button class="gray-bg pull-left">BACK</button>
	<button class="yellow-bg pull-right">NEXT</button>
	</div>
	</div>
	</div>
      
	

</div>
</div>



@include('layout.footer')
@include('layout.script')

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
  function mail(obj,val){
    // //console.log(obj);
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
	$('#otp').click(function(){
     if (!$('#lenden_otp').valid()) 
     	{

     	} 
     	else 
     	{
        var mobile_number=$('#mobile_number').val();
        $('#mob_no').val(mobile_number);
        $('#mob').val(mobile_number);

        var email=$('#email').val();
        $('#email_addr').val(email);
        $('#email_address').val(email);

        

     	$.ajax({  
        type: "POST",  
        url: "{{URL::to('lenden-get-otp')}}",
        data : $('#lenden_otp').serialize(),
        success: function(msg){
        console.log(msg.code);
        if (msg.code==200 && msg.response =="OTP Sent") 
        {
          $('#lenden_otp').hide();
          $('#lenden_verify_form').show();
          alert('OTP has been sent to your mobile number');
        }
        else if(msg.code==401)
        {
          alert('Invalid OTP');
        }
        else if(msg.code==403)
        {
          alert('Number already Registered');
        }
        else if(msg.code==404)
        {
          alert('Request type Not Found ');
        }
        else
        {
          alert('OTP sending Failed');
        }
         
          
          

          

        }  
      }); 
     	}
	});

	</script>

	<script>

	$("#lenden_verify").click(function(){
    // alert('hiee');
     
            if (! $('#lenden_verify_form').valid()) {

            }else{
            	var otp=$('#OTP').val();
            	$('#one-time-password').val(otp);
            $.ajax({  
		    type: "POST",  
		    url: "{{URL::to('lenden-verify')}}",
		    dataType:"json",
		    data : $('#lenden_verify_form').serialize(),
		    success: function(msg){
		    console.log(msg.code)
		        if (msg.code==200) 
		        {
		        	
		        alert('OTP has been verified Successfully');
		        }
		        else 
		        {
                 alert('Invalid OTP');
		        }
		       
		    }
		    });
		    }
		    });
</script>

<script type="text/javascript">
	$('#sign-up').click(function(){
     if (!$('#borrower_signup_form').valid()) 
     	{
         
     	} 
     	else 
     	{
          $.ajax({  
		    type: "POST",  
		    url: "{{URL::to('lenden-sign-up')}}",
		    dataType:"json",
		    data : $('#borrower_signup_form').serialize(),
		    success: function(msg){
		    console.log(msg.code)
		    if (msg.code==200) 
	        {
	          
	          alert('Sign up Successful');
	        }
	        else if(msg.code==401)
	        {
	          alert('Invalid verification code');
	        }
	        else
	        {
	          alert('Mobile Already Exists OR Email Already Exists');
	        }
	        
		        
		       
		    }
		    });
     	}
	});
</script>

<script type="text/javascript">
	$('#lenden_taskid').click(function(){
     if (!$('#lenden_task_id').valid()) 
     {

     }
     else
     {
       $.ajax({  
		    type: "POST",  
		    url: "{{URL::to('lenden-taskid')}}",
		    dataType:"json",
		    data : $('#lenden_task_id').serialize(),
		    success: function(msg){
		    console.log(msg)
		    
	        
		        
		       
		    }
		    });
     }
	});
</script>