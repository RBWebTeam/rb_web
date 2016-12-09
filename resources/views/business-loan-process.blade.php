@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container" id='elem'>
	    <form name='business_loan_process_form' id='business_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
	    <input type="hidden" id="product" name="product_name" value="business_loan">
		<div class="liza col-md-8" id="start-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Business Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>
			<div class="col-md-12 text-center animate-box cont" id="profession">
             <h3>I am a
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="profession_detail" name="profession_detail"  placeholder="Select" readonly></a>
			professional </h3> 
			</div>

			

			    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="type_of_profession" onchange="changeTest(this,'turnover')">
             <h3>Self Employed Business
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="profession_type" name="profession_type"  placeholder="Select" readonly></a>
		</h3> 
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="type_of_emp_profession" onchange="changeTest(this,'q5')">
             <h3>Self Employed Professional
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page3" ><input type="text" style="color:000;" class="clr-blue" id="profession_emp_type" name="profession_emp_type"  placeholder="Select" readonly></a>
		</h3> 
			</div>

			    

			
			
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="turnover" ><h3>Your gross annual sales / turnover Rs. 
			<input type="tel" id="loanamt" name="loanamt" onkeyup="changeText('loanamt','desired_amt')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="gross_annual" ><h3>Your gross annual receipt Rs. 
			<input type="tel" id="annual_receipt" name="annual_receipt" onkeyup="changeText('annual_receipt','desired_amt')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
		     
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="desired_amt" ><h3>Your desired loan amount for <span class="clr-blue1">Business Loan</span> . 
			<input type="tel" id="loan" name="loan" onkeyup="changeText('loan','residence')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="residence" >
			<form action={{URL('search/autocomplete')}} method="POST" >
             <h3>Where do you currently reside 
			<input type="text" class="search_city input-pad" id='city_name' name='city_name' placeholder='your city'>
			</form>
			 Since
			 <input type="date" id="living_since" name="living_since" class="input-pad company-nm1" onchange="changeTest(this,'btn_step1')">
			</h3>
			
			</div>
			
			
			
			<div class="text-center" style="display:none;" id="btn_step1">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('start-1','level-2')" >Continue<i class="icon-arrow-right"></i></a>
			</div>
		</div>


	   <!--- liza Step Two   - -->
		<div class="liza col-md-8" style="display: none;" 	 id="level-2">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 2 of 3</p>
			<div class="text-center animate-box cont">
			


			
			<div class="col-md-12 text-center animate-box cont" id="current_profession"><h3>Experience in Current Professions
			<input type="tel" id="year1" name="year1" class="input-pad" placeholder="Years" onkeypress="return fnAllowNumeric(event)" maxlength="2">years and
			<input type="tel" id="month" name="month" class="input-pad" placeholder="months" onkeypress="return fnAllowNumeric(event)" onkeyup="yr_months('year1','month','bank_acc')" maxlength="2">months.
			</h3>
			</div>



			<div class="col-md-12 text-center animate-box cont" style="display:none;"  id="bank_acc">
			    <h3>Your bank account is with<span class="clr-blue1"></span>
			     <input type="text" id="acc_with" name="acc_with" onblur="changeTest(this,'emi_pay')" class="input-pad salary-deposited" placeholder="Bank Name" tabindex="1">
			    .</h3></div>


			    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="emi_pay" ><h3>Total EMI you pay currently  Rs. 
			<input type="tel" id="total_emi" name="total_emi" onkeyup="changeText('total_emi','date_birth')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont1" style="display:none" id="date_birth"><h3>My date of birth is
			<input type="date" id="born" name="born" class="input-pad company-nm1" onchange="changeTest(this,'pan_card')">

			</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="pan_card" ><h3>Your Pan Card number
			<input type="tel" id="card" name="card" onkeyup="changeText('card','residence_pincode')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="residence_pincode" ><h3>Residence Pincode. 
			<input type="tel" id="pincode" name="pincode" onkeyup="changeText('pincode','step_2_btn')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
			
			
			<div class="text-center" style="display: none;" id="step_2_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('level-2','start-1')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login">Get me a Loan<i class="icon-arrow-right"></i></a>
			</div>
		</div>
	   </div>
	   
	

	   </form>
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.script')
@include('layout.business-loan-modal')