@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container" id='car'>
	    <form name='car_loan_process_form' id='car_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
		<div class="liza col-md-8" id="start-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Car Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>
			<div class="col-md-12 text-center animate-box cont" id="car_looking">
             <h3>What type of car are you looking for
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="car_detail" name="car_detail"  placeholder="Select" readonly></a>
			.</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;"  id="manufacture">
			    <h3>Year of manufacture<span class="clr-blue1"></span>
			     <input type="number" id="year_of_manufacture" name="year_of_manufacture" min="1901"   onblur="changeTest(this,'preferred')" class="input-pad amt-borrowed" placeholder="Year" tabindex="1">
			    .</h3></div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;"  id="preferred">
			    <h3>My preferred car<span class="clr-blue1"></span>
			     <input type="text" id="preferred_car" name="preferred_car" onblur="changeTest(this,'living_currently')" class="input-pad preferred-car" placeholder="Your preferred car" tabindex="1">
			    .</h3></div>
			
			<div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'work_at')" id="living_currently">
			    <h3>Where do you live currently<span class="clr-blue1"></span>
			     <select >
			     	<option>Mumbai</option>
			     	<option>Pune</option>
			     	<option>Bangalore</option>
                    <option>Hyderabad</option>
			     	<option>Chennai</option>
			     	<option>Delhi</option>
			     	<option>Secunderabad</option>
			     	<option>Mangalore</option>
			     	<option>Goa</option>
			     	<option>Guntur</option>
			     	<option>Vizag</option>
			     	<option>Vijaywada</option>
			     	</select>
			    .</h3></div>


			    <div class="col-md-12 text-center animate-box cont" style="display:none;" onchange="changeTest(this,'takehome_sal')" id="work_at"> 
             <h3>I work at 
			  <input type="text" id="comp_nm" name="comp_nm" onblur="changeTest(this,'takehome_sal')" class="input-pad company-name" placeholder="Your company name" tabindex="1">
			.</h3>
			
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="takehome_sal"><h3>where my monthly takehome salary is Rs. 
			<input type="tel" id="total_sal" name="total_sal" onkeypress="return fnAllowNumeric(event)" onkeyup="changeText('total_sal','exp')" class="input-pad" placeholder="10,000" tabindex="1">
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="exp"><h3>My experience in the above company is
			<input type="tel" id="exp_in_yr" name="exp_in_yr" class="input-pad" placeholder="Years" onkeypress="return fnAllowNumeric(event)" maxlength="2">years and
			<input type="tel" id="exp_in_mnth" name="exp_in_mnth" class="input-pad" placeholder="months" onkeypress="return fnAllowNumeric(event)" onkeyup="yr_months('exp_in_yr','exp_in_mnth','total_exp')" maxlength="2">months
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" id="total_exp" style="display:none;"" ><h3>My total experience is
			<input type="tel" id="total_yr_in_company" name="total_yr_in_company" class="input-pad" placeholder="Years" onkeypress="return fnAllowNumeric(event)" maxlength="2">years and
			<input type="tel" id="total_mnth_in_company" name="total_mnth_in _company" class="input-pad" placeholder="months" onkeypress="return fnAllowNumeric(event)" onkeyup="yr_months('total_yr_in_company','total_mnth_in_company','salary_by')" maxlength="2">months.
			.</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont1" style="display:none;" id="salary_by" >
			<h3>I receive my salary by
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page2" ><input type="text" style="color:000;" class="clr-blue" id="salary_via" name="salary_via" onk readonly placeholder="Select"></a>
			.</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;"  id="salary_deposit">
			    <h3>My salary is deposited to<span class="clr-blue1"></span>
			     <input type="text" id="salary_deposited" name="salary_deposited" onblur="changeTest(this,'amt_borrow')" class="input-pad salary-deposited" placeholder="Bank Name" tabindex="1">
			    .</h3></div>

			    <div class="col-md-12 text-center animate-box cont" style="display:none;"  id="amt_borrow">
			    <h3>Amount to be borrowed<span class="clr-blue1"></span>
			     <input type="number" id="amt_borrowed" name="amt_borrowed" min="200000" onblur="changeTest(this,'car_step1')" class="input-pad amt-borrowed" placeholder="Amount" tabindex="1">
			    .</h3></div>

			
			
			<div class="text-center" style="display:none;" id="car_step1">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('start-1','start-2')" >Continue<i class="icon-arrow-right"></i></a>
			</div>
		</div>


	   <!--- liza Step Two   - -->
		<div class="liza col-md-8" style="display:none;"	 id="start-2">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 2 of 3</p>
			<div class="text-center animate-box cont">
			<div class="col-md-12 text-center animate-box cont" >
			   
			    <form action={{URL('search/autocomplete')}} method="POST" >
             <h3>I have been living in
			<input type="text" class="search_city input-pad" id='city_nm' name='city_nm' placeholder='your city'>city
			</form>
			     	Since
			     	<input type="date" id="living_since_in_city" name="living_since_in_city" class="input-pad company-nm1" onchange="changeTest(this,'living_in')">
			    .</h3></div>


			    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="living_in"  ><h3>and I stay in
			<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page3" ><input type="text" style="color:000;" class="clr-blue" id="stay_details" name="stay_details" readonly placeholder="Select"></a>
			</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont1" style="display:none" id="birth"><h3>My date of birth is
			<input type="date" id="date_of_birth" name="date_of_birth" class="input-pad company-nm11" onchange="changeTest(this,'step_2_btn')">

			</h3>
			</div>

			 
			<div class="text-center" style="display:none;" id="step_2_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('start-2','start-1')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box" data-toggle="modal" data-target="#login">Get me a Loan<i class="icon-arrow-right"></i></a></div>
		</div>
	   </div>
	   
	

	   </form>
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select your type of car!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.script')
@include('layout.car-loan-modal')