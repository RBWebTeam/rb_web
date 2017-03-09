@include('layout.header')
<div class="container" id='elem'>
	<form name='car_loan_process_form' id='car_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
		<input type="hidden" id="product" name="product_name" value=4>
		
		<div class="liza col-md-8"  id="step-1" style="display: block;">
			<!--- liza Step First   - -->
			<div class="col-md-12 text-center"><h4>Apply for an Easy CAR Loan in 30 seconds</h4></div>
			<p class="text-center">Step 1 of 2</p> 
			<!--first question--> 
			<div class="col-md-12 text-center animate-box cont" id="q1">
				<h3>I am a
					<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly>
						<input type="hidden" class="clr-blue" id="emp_detail_id" name="emp_detail_id"  placeholder="Select" readonly></a>
						professional </h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2">
						<h3>where my monthly takehome salary is Rs. 
							<input type="tel" id="income" name="income" onkeyup="changeText_new('income','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('income',this.value);">.
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2_year">
						<h3>where my annual turnover is
							<input type="tel" id="income_year" name="turnover" onkeyup="changeText_new('income_year','self_q')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('income_year',this.value);">.
						</h3> 
					</div>
					<!-- self employed question -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q">
						<h3>My profit after tax is
							<input type="tel" id="profit" name="profit_after_tax" onkeyup="changeText_new('profit','self_q2')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('profit',this.value);">
						</h3> 
					</div>

					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q2">
						<h3>my depreciation is
							<input type="tel" id="depreciation" name="depreciation" onkeyup="changeText_new('depreciation','self_q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('depreciation',this.value);">
						</h3> 
					</div>
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="self_q3">
						<h3>and my director remuneration is
							<input type="tel" id="remuneration" name="remuneration" onkeyup="changeText_new('remuneration','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('remuneration',this.value);">.
						</h3> 
					</div>

					<!-- self employed question ends -->
					<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
						<h3>I
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select" ></a>
							have existing loan(s)</h3> 
						</div>

						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
							<h3>and my remaining loan EMI is
								<input type="tel" id="obligation" name="obligation"  onkeyup="changeText_new('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1"  onchange="setSesson('obligation',this.value);">.
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q5" >
							
				             <h3>I have been living in
							<input type="text" class="search_city input-pad" id='city_name' name='city_name' onblur="changeText_new('city_name','q_prop')" placeholder='your city' onchange="setSesson('city_name',this.value);">city</h3>
							
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q_prop">
							<h3>and on road car cost is
								<input type="tel" id="property_cost" name="car_cost"  onkeyup="changeText_new('property_cost','q6')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('property_cost',this.value);">.
							</h3> 
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q6">
							<h3>I require loan for
								<input type="tel" id="loan_tenure" name="loan_tenure"  onkeypress=" return fnAllowNumeric(event);" oninput="changeText_new('loan_tenure','q7');" class="input-pad" placeholder="20" tabindex="1" maxlength="2" onchange="setSesson('loan_tenure',this.value);">years.
							</h3>
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q7"><h3>I am
							<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#gender_popup" ><input type="text" style="color:000;" class="clr-blue" id="gender" name="gender"  placeholder="Select" readonly>.
							</h3></a>	
						</div>
						<div class="col-md-12 text-center animate-box cont1" style="display: none" id="date_birth">
							<h3>My date of birth is
								<input type="text" id="dob" name="dob" class="input-pad company-nm1 lastReporteddate" readonly onchange="changeTest_new(this,'q9'); setSesson('dob',this.value);" >
							</h3>
						</div>
						<div class="col-md-12 text-center animate-box cont" style="display: none" id="q9">
							<h3>and I require loan amount of Rs.
								<input type="tel" id="loan_amount" name="loan_amount"  onkeyup="changeText_new('loan_amount','last_button')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange="setSesson('loan_amount',this.value);">.
							</h3> 
						</div>
						

						
					<div class="text-center" style="display: none" id="last_button">
						<?php if(Session::get('is_login')) {?>
							  <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
							<button class="btn btn-primary btn-outline with-arrow animate-box product_name" >Get me a Loan<i class="icon-arrow-right"></i></button>
							<?php }else{?> 
							  <a  class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#contact_id">Get me a Loan<i class="icon-arrow-right"></i></a>
				              <?php }?>
						<?php }else{?>
						<button  style="display:none" class="btn btn-primary btn-outline with-arrow animate-box product_name " id="btn_refresh_co">Get me a Loan<i class="icon-arrow-right"></i></button>

							<a class="btn btn-primary btn-outline with-arrow animate-box product_name" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Submit<i class="icon-arrow-right"></i></a>
						<?php } ?>
					</div>



		 
					
			</div>		
				</form>
			<!-- POP Up code start -->
			<div class="col-md-4 liza1 ">
				<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

				<div class="text-center img1"><img src="{{URL::to('images/photo.jpg')}}" alt="pop_up_pic"></div>
			</div>
			<!-- POP Up code end -->
</div>

@include('layout.footer')
@include('layout.car-loan-modal-test')
@include('layout.script')