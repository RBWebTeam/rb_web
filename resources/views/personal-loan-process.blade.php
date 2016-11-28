@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container">
	    <form name='personal_loan_process_form' id='personal_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
		<div class="liza col-md-8" id="step-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>
			<div class="col-md-12 text-center animate-box cont" id="q1">
             <h3>I am a
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly></a>
			professional </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q2" ><h3>and I want a <span class="clr-blue1">Personal Loan</span> of Rs. 
			<input type="tel" id="loanamt" name="loanamt" onkeyup="changeText('loanamt','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q4')" id="q3">
			<h3>I
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
			have existing loan(s)</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q5')" id="q4">
			<h3>and I
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page3" ><input type="text" style="color:000;" class="clr-blue" id="loan_taken_detail" name="loan_taken_detail" readonly placeholder="Select"></a>
			taken loans in the past</h3> 
			</div>
		     
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q6')" id=q5>
			<h3>I
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page4" ><input type="text" style="color:000;" class="clr-blue" id="credti_card_detail" name="credti_card_detail" readonly placeholder="Select"></a>
			credit card(s).</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none;" onchange="changeTest(this,'btn_step1')" id="q6">
			<h3>I
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page5" ><input type="text" style="color:000;" class="clr-blue" id="delayed_emi" name="delayed_emi" readonly placeholder="Select"></a>
			delayed/defaulted on a Loan EMI or Credit Card payment in the last 3 months..</h3> 
			</div>
			
			<div class="text-center" style="display:none;" id="btn_step1">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-1','step-2')" >Continue<i class="icon-arrow-right"></i></a>
			</div>
		</div>


	   <!--- liza Step Two   - -->
		<div class="liza col-md-8" style="display: none;" 	 id="step-2">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 2 of 3</p>
			<div class="text-center animate-box cont">
			<div class="col-md-12 text-center animate-box cont" >
             <h3>I work at 
			  <input type="text" id="comp_name" name="comp_name" onblur="changeTest(this,'m_sal')" class="input-pad company-nm" placeholder="Your company name" tabindex="1">
			</h3>
			
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="m_sal"><h3>where my monthly takehome salary is Rs. 
			<input type="tel" id="total_sal" name="total_sal" onkeypress="return fnAllowNumeric(event)" onkeyup="changeText('total_sal','exp')" class="input-pad" placeholder="10,000" tabindex="1">
			</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="exp"><h3>My experience in the above company is
			<input type="tel" id="yr" name="yr" class="input-pad" placeholder="Years" onkeypress="return fnAllowNumeric(event)" maxlength="2">years and
			<input type="tel" id="mnth" name="mnth" class="input-pad" placeholder="months" onkeypress="return fnAllowNumeric(event)" onkeyup="yr_months('yr','mnth','total_exp')" maxlength="2">months.
			</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" id="total_exp" style="display:none;"" ><h3>My total experience is
			<input type="tel" id="total_yr" name="total_yr" class="input-pad" placeholder="Years" onkeypress="return fnAllowNumeric(event)" maxlength="2">years and
			<input type="tel" id="total_mnth" name="total_mnth" class="input-pad" placeholder="months" onkeypress="return fnAllowNumeric(event)" onkeyup="yr_months('total_yr','total_mnth','sal_rcv_by')" maxlength="2">months.
			</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none;" id="sal_rcv_by" >
			<h3>I receive my salary by
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page6" ><input type="text" style="color:000;" class="clr-blue" id="salary_via_details" name="salary_via_details" readonly placeholder="Select"></a>
			</h3> 
			</div>
			<div class="text-center" style="display:none;" id="step_2_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-2','step-1')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-2','step-3')">Final Step<i class="icon-arrow-right"></i></a></div>
		</div>
	   </div>
	   
	<!--- Liza Step Three -- -->
	<div class="liza col-md-8"  id="step-3">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4>
		   </div>
		   <p class="text-center">Step 3 of 3</p>
			<div class="text-center animate-box cont">
			<div class="col-md-12 text-center animate-box cont" id="live_here" >
			<form action={{URL('search/autocomplete')}} method="POST" >
             <h3>I have been living in
			<input type="text" class="search_city input-pad" id='city_name' placeholder='your city'>city
			</form>
			 Since
			 <input type="date" id="living_since" name="living_since" class="input-pad company-nm1" onchange="changeTest(this,'stay_in')">
			</h3>
			
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="stay_in"  ><h3>and I stay in
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page8" ><input type="text" style="color:000;" class="clr-blue" id="stay_in_details" name="stay_in_details" readonly placeholder="Select"></a>
			</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none" id="dob"><h3>My date of birth is
			<input type="date" id="dob" name="dob" class="input-pad company-nm1" onchange="changeTest(this,'step_3_btn')">

			</h3>
			</div>

			<div class="text-center" style="display:none;" id="step_3_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-3','step-2')">Go Back<i class="icon-arrow-right"></i></a>
			<button class="btn btn-primary btn-outline with-arrow animate-box" type="submit">Get me a Loan<i class="icon-arrow-right"></i></button>
			</div>
			
		</div>
	   </div>
	   <!-- Liza Step Three End -->

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
@include('layout.personal-loan-modal')