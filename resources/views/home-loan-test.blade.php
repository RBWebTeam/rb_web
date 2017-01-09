@include('layout.header')
<div class="container" id='elem'>
	<form name='home_loan_process_form' id='home_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
		<input type="hidden" id="product" name="product_name" value=12>
		
		<div class="liza col-md-8"  id="step-1" style="display: block;">
			<!--- liza Step First   - -->
			<div class="col-md-12 text-center"><h4>Apply for an Easy Loan against property in 30 seconds</h4></div>
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
							<input type="tel" id="income" name="income" onkeyup="changeText_new('income','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2_year">
						<h3>my turnover is
							<input type="tel" id="income_year" name="turnover" onkeyup="changeText_new('income_year','self_q')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<!-- self employed question -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q">
						<h3>my profit after tax is
							<input type="tel" id="profit" name="profit_after_tax" onkeyup="changeText_new('profit','self_q2')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q2">
						<h3>my depreciation is
							<input type="tel" id="depreciation" name="depreciation" onkeyup="changeText_new('depreciation','self_q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q3">
						<h3>Director remuneration is
							<input type="tel" id="remuneration" name="remuneration" onkeyup="changeText_new('remuneration','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<!-- self employed question ends -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
						<h3>I
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
							have existing loan(s)</h3> 
						</div>

						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
							<h3>remaining loan EMI is
								<input type="tel" id="obligation" name="obligation"  onkeyup="changeText_new('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q5">
							<h3>I required loan of 
								<input type="tel" id="loan_amount" name="loan_amount"  onkeyup="changeText_new('loan_amount','q_prop')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q_prop">
							<h3>and my property cost is
								<input type="tel" id="property_cost" name="property_cost"  onkeyup="changeText_new('property_cost','q6')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q6">
							<h3>Loan tenure
								<input type="tel" id="loan_tenure" name="loan_tenure"  onkeypress="changeText_new('loan_tenure','q7')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="20" tabindex="1" maxlength="2" >
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q7"><h3>I am
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#gender_popup" ><input type="text" style="color:000;" class="clr-blue" id="gender" name="gender"  placeholder="Select" readonly>
							</h3></a>	
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="date_birth">
							<h3>My date of birth is
								<input type="text" id="dob" name="dob" class="input-pad company-nm1 datepicker" onchange="changeTest_new(this,'q9')">
							</h3>
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q9" >
							
				             <h3>I have been living in
							<input type="text" class="search_city input-pad" id='city_name' name='city_name' onfocus="changeTest_new('city_name','step_2_btn')" placeholder='your city'>city</h3>
							
						</div>
						

						<div class="text-center" style="display: none" id="step_2_btn">
							<a class="btn btn-primary btn-outline with-arrow animate-box" id="co_button" onclick="changeDiv_new('step-1','step-2_co')">Have Co-Applicant<i class="icon-arrow-right"></i></a>
							
								<?php if(Session::get('is_login')) {?>
									<button class="btn btn-primary btn-outline with-arrow animate-box product_name" >Get me a Loan<i class="icon-arrow-right"></i></button>
								<?php }else{?>
									<a class="btn btn-primary btn-outline with-arrow animate-box product_name" id="no_co_app" data-toggle="modal" data-target="#login_process">No Co-Applicant<i class="icon-arrow-right"></i></a>
								
								<?php } ?>
								<input type="hidden" name="have_co_applicant" value="" id="have_co_applicant">
							
							
						</div>
						

						</div>

					<!---  Step Two   - -->
					<div class="liza col-md-8" style="display: none;" 	 id="step-2_co">
					   
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
							<input type="tel" id="co_income" name="co_applicant_income" onkeyup="changeText_new('co_income','co_obl_yes')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self">
						<h3>Co-Applicant turnover is
							<input type="tel" id="co_income_year" name="co_applicant_turnover" onkeyup="changeText_new('co_income_year','co_profit_all')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<!-- self employed question -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_profit_all">
						<h3>Co-Applicant profit after tax is
							<input type="tel" id="co_profit" name="co_applicant_profit_after_tax" onkeyup="changeText_new('co_profit','co_self_q2')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>

					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self_q2">
						<h3>Co-Applicant depreciation is
							<input type="tel" id="co_depreciation" name="co_applicant_depreciation" onkeyup="changeText_new('co_depreciation','co_self_q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="co_self_q3">
						<h3>Co-Applicant  Director remuneration is
							<input type="tel" id="co_remuneration" name="co_applicant_remuneration" onkeyup="changeText_new('co_remuneration','co_obl_yes')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none" id="co_obl_yes">
							<h3>Co-Applicant has any existing loan
								<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#co_obl_yes_pop" ><input type="text" style="color:000;" class="clr-blue" id="co_obl_loan" name="co_obl_yes"  placeholder="Select" readonly>
								</a>
							</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none" id="co_obl_emi">
							<h3>Co-Applicant remaining loan EMI is
								<input type="tel" id="co_obligation" name="co_applicant_obligation"  onkeyup="changeText_new('co_obligation','last_button')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
							</h3> 
					</div>
						
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="co_obl_yes">
							<h3>Co-Applicant remaining loan EMI is
								<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#co_obl_yes_pop" ><input type="text" style="color:000;" class="clr-blue" id="co_obl_loan" name="co_obl_yes"  placeholder="Select" readonly>
								</a>
							</h3> 
						</div>
				
					<!-- step-2 finished -->
					<div class="text-center">
						<a class="btn btn-primary btn-outline with-arrow animate-box" id="back" onclick="changeDiv_new('step-2_co','step-1')">Back<i class="icon-arrow-right"></i></a>
					</div>
					<div class="text-center" style="display: none;" id="last_button">
						<?php if(Session::get('is_login')) {?>
							<button class="btn btn-primary btn-outline with-arrow animate-box product_name" >Get me a Loan<i class="icon-arrow-right"></i></button>
						<?php }else{?>
							<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login_process">Submit<i class="icon-arrow-right"></i></a>
						<?php } ?>
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
@include('layout.script')