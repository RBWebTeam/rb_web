@include('layout.header')
    <!--- liza Step First   - -->
	    <div class="container">
		<div class="liza col-md-8" id="step-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 37 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>
			<div class="col-md-12 text-center animate-box cont" id="q1">
			
             <h3>I am a
			 <select class="clr-blue" onchange="changeTest(this,'q2')">
			 <option></option>
			 <option>salaried</option>
			 <option>self-employed (eg. doctor)</option>
			 <option>self-employed business</option>
			 </select> 
			professional</h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q2" ><h3>and I want a <span class="clr-blue1">Personal Loan</span> of Rs. 
			<input type="tel" id="loanamt" name="loanamt"  onkeypress="return fnAllowNumeric(event)" onkeyup="changeText('loanamt','q3')" class="input-pad" placeholder="1,00,000" tabindex="1">
			.</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q4')" id="q3">
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>do</option>
			 <option>do not</option>
			 </select> 
			have existing loan(s)</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q5')" id="q4">
			<h3>and I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>have never</option>
			 </select> 
			taken loans in the past</h3> 
			</div>
		     
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'q6')" id=q5>
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>do not have</option>
			 </select> 
			credit card(s).</h3> 
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none;" onchange="changeTest(this,'btn_step1')" id="q6">
			<h3>I
			 <select class="clr-blue">
			 <option></option>
			 <option>have</option>
			 <option>have not</option>
			 </select> 
			delayed/defaulted on a Loan EMI or Credit Card payment in the last 3 months..</h3> 
			</div>
			
			<div class="text-center" style="display:none;" id="btn_step1">
			<button class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-1','step-2')" >Continue<i class="icon-arrow-right"></i></button>
			</div>
		</div>


	   <!--- liza Step Two   - -->
		<div class="liza col-md-8" style="display:none" id="step-2">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 37 seconds</h4></div>
		   <p class="text-center">Step 2 of 3</p>
			<div class="col-md-12 text-center animate-box cont">
			<div class="col-md-12 text-center animate-box cont" onchange="changeTest(this,'m_sal')">
             <h3>I work at 
			 <select class="clr-blue">
			 <option></option>
			 <option>Comapny Name1 </option>
			 <option>Comapny Name2</option>
			 <option>Comapny Name3</option>
			 </select> 
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
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none;" id="sal_rcv_by" onchange="changeTest(this,'step_2_btn')" >
			<h3>I receive my salary by
			 <select class="clr-blue">
			 <option></option>
			 <option>an Account Transfer (NEFT)</option>
			 <option>a cheque</option>
			 <option>cash</option>
			 </select> 
			</h3> 
			</div>
			<div class="text-center" style="display:none;" id="step_2_btn">
			<button class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-2','step-1')">Go Back<i class="icon-arrow-right"></i></button>
			<button class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-2','step-3')">Final Step<i class="icon-arrow-right"></i></button></div>
		</div>
	   </div>
	   
	<!--- Liza Step Three -- -->
	<div class="liza col-md-8" style="display:none;" id="step-3">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 37 seconds</h4></div>
		   <p class="text-center">Step 3 of 3</p>
			<div class="col-md-12 text-center animate-box cont">
			<div class="col-md-12 text-center animate-box cont" id="live_here" >
             <h3>I have been living in
			 <select class="clr-blue">
			 <option></option>
			 <option>Mumbai</option>
			 <option>Pune</option>
			 </select> 
			 Since
			 <select class="clr-blue">
			 <option></option>
			 <option>Feb</option>
			 <option>March</option>
			 </select> 
			 <input type="tel" id="live_since" name="live_since" class="input-pad" placeholder="1900" tabindex="1" onkeypress="return fnAllowNumeric(event)" maxlength="4" minlength="4" onkeyup="changeTest(this,'stay_in')">
			</h3>
			
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="stay_in" onchange="changeTest(this,'dob')" ><h3>and I stay in
			<select class="clr-blue">
			<option></option>
			 <option>my own house (Self/Spouse)</option>
			 <option>a rented house (with Family)</option>
	
			 </select> 
			</h3>
			</div>
			
			<div class="col-md-12 text-center animate-box cont1" style="display:none" id="dob"><h3>My date of birth is
			<input type="date" id="calndr" name="calndr" class="input-pad" placeholder="---">

			</h3>
			</div>

			<div class="text-center">
			<button class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-3','step-2')">Go Back<i class="icon-arrow-right"></i></button>
			<button class="btn btn-primary btn-outline with-arrow animate-box" type="submit">Get me a Loan<i class="icon-arrow-right"></i></button>
			</div>
			
		</div>
	   </div>
	   <!-- Liza Step Three End -->
	   
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1" >
			<div class="text-center guid" id="pop1">Enter your monthly takehome salary here!
	Without any performance bonus or incentives!</div>
<div class="patch"><img src="images/patch_down.png"></div>
        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.script')