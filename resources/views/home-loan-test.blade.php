@include('layout.header')
<div class="container" id='elem'>
	<form name='home_loan_process_form' id='home_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
		<input type="hidden" id="product" name="product_name" value=12>
		<div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds</h4></div>
		<div class="liza col-md-8"  id="step-1" style="display: block;">
			<!--- liza Step First   - -->
			<p class="text-center">Step 1 of 2</p> 
			<!--first question--> 
			<div class="col-md-12 text-center animate-box cont" id="q1">
				<h3>I am a
					<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly>
						<input type="hidden" class="clr-blue" id="emp_detail_id" name="emp_detail_id"  placeholder="Select" readonly></a>
						professional </h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2">
						<h3>my monthly income is
							<input type="tel" id="income" name="income" onkeyup="changeText('income','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2_year">
						<h3>my turnover is
							<input type="tel" id="income_year" name="turnover" onkeyup="changeText('income_year','self_q')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<!-- self employed question -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q">
						<h3>my profit after tax is
							<input type="tel" id="profit" name="profit_after_tax" onkeyup="changeText('profit','self_q2')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q2">
						<h3>my depreciation is
							<input type="tel" id="depreciation" name="depreciation" onkeyup="changeText('depreciation','self_q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q3">
						<h3>Director remuneration is
							<input type="tel" id="remuneration" name="remuneration" onkeyup="changeText('remuneration','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<!-- self employed question ends -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
						<h3>I
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
							have existing loan(s)</h3> 
						</div>

						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
							<h3>remaining loan amount is
								<input type="tel" id="obligation" name="obligation"  onkeyup="changeText('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q5">
							<h3>Loan required
								<input type="tel" id="loan_amount" name="loan_amount"  onkeyup="changeText('loan_amount','q6')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q6">
							<h3>Loan tenure
								<input type="tel" id="loan_tenure" name="loan_tenure"  onkeypress="changeText('loan_tenure','q7')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="20" tabindex="1" maxlength="2" >
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q7"><h3>I am
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#gender_popup" ><input type="text" style="color:000;" class="clr-blue" id="gender" name="gender"  placeholder="Select" readonly>
							</h3></a>	
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q8">
							<h3>My date of birth is
								<input type="date" id="dob" name="dob" class="input-pad company-nm1" onchange="changeTest(this,'step_2_btn')">
							</h3>
						</div>
						
						<div class="text-center" style="display: none;" id="step_2_btn">
							<a class="btn btn-primary btn-outline with-arrow animate-box" id="co_button" onclick="changeDiv('step-1','step-2')">Have Co-Applicant<i class="icon-arrow-right"></i></a>
							<a class="btn btn-primary btn-outline with-arrow animate-box product_name" id="no_co_app" data-toggle="modal" data-target="#login_process">No Co-Applicant<i class="icon-arrow-right"></i></a>
							<input type="hidden" name="have_co_applicant" value="" id="have_co_applicant">
						</div>
						

						</div>

					<!---  Step Two   - -->
					<div class="liza col-md-8" style="display: none;" 	 id="step-2">
					   
					   <p class="text-center">Step 2 of 3</p>
						<div class="col-md-12 text-center animate-box cont" id="co_q">
						<h3>My Co-Applicant is
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#co_emp_popup" ><input type="text" style="color:000;" class="clr-blue" id="co_emp_detail" name="co_emp_detail"  placeholder="Select" readonly>
								</a>
								professional
						</h3> 
						</div>

						<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_sal">
						<h3>Co-Applicant monthly income is
							<input type="tel" id="co_income" name="co_applicant_income" onkeyup="changeText('co_income','co_obl')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self">
						<h3>Co-Applicant turnover is
							<input type="tel" id="co_income_year" name="co-applicant-turnover" onkeyup="changeText('co_income_year','co_profit_all')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<!-- self employed question -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_profit_all">
						<h3>Co-Applicant profit after tax is
							<input type="tel" id="co_profit" name="co_applicant_profit_after_tax" onkeyup="changeText('co_profit','co_self_q2')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self_q2">
						<h3>Co-Applicant depreciation is
							<input type="tel" id="co_depreciation" name="co_applicant_depreciation" onkeyup="changeText('co_depreciation','co_self_q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self_q3">
						<h3>Co-Applicant  Director remuneration is
							<input type="tel" id="co_remuneration" name="co_applicant_remuneration" onkeyup="changeText('co_remuneration','co_obl')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

						<div class="col-md-12 text-center animate-box cont" style="display: none" id="co_obl">
							<h3>Co-Applicant remaining loan amount is
								<input type="tel" id="co_obligation" name="co_applicant_obligation"  onkeyup="changeText('co_obligation','city_name')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
				<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q9" >
						<form action={{URL('search/autocomplete')}} method="POST" >
			             <h3>I have been living in
						<input type="text" class="search_city input-pad" id='city_name' name='city_name' onkeypress="changeTest('city_name','last_button')" placeholder='your city'>city
						</form>
				</div>
						
					<!-- step-2 finished -->
					<div class="text-center">
						<a class="btn btn-primary btn-outline with-arrow animate-box" id="back" onclick="changeDiv('step-2','step-1')">Back<i class="icon-arrow-right"></i></a>
					</div>
					<div class="text-center" style="display: none;" id="last_button">
						<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login_process">Submit<i class="icon-arrow-right"></i></a>
					</div>
			</div>		
				</form>
			<!-- POP Up code start -->
			<div class="col-md-4 liza1">
				<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

				<div class="text-center img1"><img src="{{URL::to('images/photo.jpg')}}"></div>
			</div>
			<!-- POP Up code end -->
</div>

@include('layout.footer')
@include('layout.home-loan-modal-test')
@include('layout.script_test')