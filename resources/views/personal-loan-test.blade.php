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
		  

		   
			<div class="col-md-12 text-center animate-box cont" id="q1">
             <h3>I am a
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly>
			 <input type="hidden" class="clr-blue" id="emp_detail_id" name="emp_detail_id"  placeholder="Select" readonly></a>
			professional </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2">
             <h3>where my monthly takehome salary is Rs. 
			 <input type="tel" id="income" name="income" oninput="changeText_new('income','q3')"  onkeypress="return fnAllowNumeric(event)" onchange="setSesson('income',this.value);" class="input-pad" placeholder="1,00,000" tabindex="1" >.
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q2_year">
             <h3>where my annual turnover is
			 <input type="tel" id="income_year" name="turnover" oninput="changeText_new('income_year','q3')"  onkeypress="return fnAllowNumeric(event)" onchange=" setSesson('income_year',this.value);" class="input-pad" placeholder="1,00,000" tabindex="1">.
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display: none;" id="q3">
			<h3>I 
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="exst_loan_detail" name="exst_loan_detail" readonly placeholder="Select"></a>
			 have existing loan(s)</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q4">
             <h3>and my existing loan EMI is
			 <input type="tel" id="obligation" name="obligation"  oninput="changeText_new('obligation','q5')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1" onchange=" setSesson('obligation',this.value);" >.
			 </h3> 
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q5" >
				
	             <h3>I have been living in
				<input type="text" class="search_city input-pad" id='city_name' name='city_name' onblur="changeText_new('city_name','q6')" placeholder='your city' onchange="setSesson('city_name',this.value);">city</h3>
				
			</div>
			
			<div class="col-md-12 text-center animate-box cont Q6" style="display: none" id="q6">
             <h3>and I require loan for
			 <input type="tel" id="loan_tenure" name="loan_tenure"  oninput="changeText_new('loan_tenure','date_birth')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="20" tabindex="1" maxlength="2" onchange="setSesson('loan_tenure',this.value);" >
			 years.
			 </h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont1" style="display: none" id="date_birth"><h3>My date of birth is
			
 			<input type="text" class="datepicker minimumSize lastReporteddate" id="dob" readonly  name="dob" onchange="changeTest_new(this,'q8'),setSesson('dob',this.value);""  />


			</h3>
			</div>
			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="q8" >
					<h3> and my Pan Card number is
					<input type="text" id="card" name="pan_number"  oninput="changeText_new('card','q9')"   class="input-pad" placeholder="Pan Card" maxlength="10" minlength="10" tabindex="1" onchange="setSesson('card',this.value);">
					.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display: none" id="q9">
             <h3>I want a Personal Loan of Rs.
			 <input type="tel" id="loan_amount" name="loan_amount"  oninput="changeText_new('loan_amount','step_3_btn')"  onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000" tabindex="1"  onchange="setSesson('loan_amount',this.value);">.
			 </h3> 
			</div>
			<div class="text-center " style="display: none" id="step_3_btn">
               
                  <?php    ?>

			<?php if(Session::get('is_login')) { ?>
				  <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
				<button class="btn btn-primary btn-outline with-arrow animate-box product_name " >Get me a Loan<i class="icon-arrow-right"></i></button>
				<?php }else{?> 
                 <a  class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#contact_id">Get me a Loan<i class="icon-arrow-right"></i></a>
				 <?php }?>

			<?php }else{?>
			<button  style="display:none" class="btn btn-primary btn-outline with-arrow animate-box product_name " id="btn_refresh">Get me a Loan<i class="icon-arrow-right"></i></button>

				<a id="btn_refresh1" class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login_process">Get me a Loan<i class="icon-arrow-right"></i></a>
			<?php }?>

			</div>
	 </div>
	 </form>
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

        <div class="text-center img1"><img src="{{URL::to('images/photo.jpg')}}" alt="pop_up_pic"></div>
		</div>
		<!-- POP Up code end -->
		</div>
	 <!-- </div> -->
@include('layout.footer')
@include('layout.personal-loan-modal-test')
@include('layout.script')