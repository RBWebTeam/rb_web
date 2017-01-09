@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container" id='elem'>
	    <form name='personal_loan_process_form' id='personal_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
              <?php $loan_name="Personal";?>
			@if (isset($sme))
			 <?php $loan=6 ; $loan_name="SME"?>
		    @else
			 <?php $loan=9 ?>
		    @endif
	 <input type="hidden" id="product" name="product_name" value="<?php echo $loan;?>">
	 <div class="liza col-md-8" id="step-1">
                        
		   <div class="col-md-12 text-center"><h4>Apply for an Easy <?php echo $loan_name;?> Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>

		   
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
			 <input type="tel" id="income_year" name="turnover" onkeyup="changeText_new('income_year','q3')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
			<h3>I have
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
			 existing loan(s)</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
             <h3>and my existing loan EMI is
			 <input type="tel" id="obligation" name="obligation"  onkeyup="changeText_new('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q5">
             <h3>I want a Personal Loan of Rs.
			 <input type="tel" id="loan_amount" name="loan_amount"  onkeyup="changeText_new('loan_amount','q6')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1">
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q6">
             <h3>and required loan for
			 <input type="tel" id="loan_tenure" name="loan_tenure"  onkeypress="changeText_new('loan_tenure','date_birth')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="20" tabindex="1" maxlength="2" >
			 years
			 </h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont1" style="display: none" id="q7"><h3>my date of birth is
			<!-- <input type="text" id="dob" name="dob" class="input-pad company-nm1 datepicker" onchange="changeTest_new(this,'q8')"> -->
                                    
 <input type="text" class="datepicker minimumSize lastReporteddate" id="dob"  name="dob" onchange="changeTest_new(this,'q8')"  />


			</h3>
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q8" >
					<h3> and Pan Card number is
					<input type="text" id="card" name="pan_number"  onkeyup="changeText_new('card','q9')"   class="input-pad" placeholder="Pan Card" maxlength="10" minlength="10" tabindex="1">
					.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q9" >
				
	             <h3>I have been living in
				<input type="text" class="search_city input-pad" id='city_name' name='city_name' onfocus="changeTest('city_name','step_3_btn')" placeholder='your city'>city</h3>
				
			</div>
			<div class="text-center" id="step_3_btn">
			<?php if(Session::get('is_login')) {?>
				<button class="btn btn-primary btn-outline with-arrow animate-box product_name" >Get me a Loan<i class="icon-arrow-right"></i></button>
			<?php }else{?>
				<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login_process">Get me a Loan<i class="icon-arrow-right"></i></a>
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

	 <!-- </div> -->

@include('layout.footer')
@include('layout.personal-loan-modal-test')
@include('layout.script')