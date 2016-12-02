@include('layout.header')

    
	    <div class="container">
	    <form name='personal_loan_process_form' id='personal_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}

		<div class="liza col-md-8"  id="step_First" style="display: block;">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds</h4></div>

         <!--- liza Step First   - -->
	

		       <p class="text-center">Step 1 of 2</p> 
                  <!--first question--> 
			<div class="col-md-12 text-center animate-box cont" id="h_que1">
                 <h3>What is the purpose of your Loan..
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page1" ><input type="text" style="color:000;" class="clr-blue" id="purpose_of_loan" name="purpose_of_loan"  placeholder="Select" readonly></a>
			     </h3> 
			</div>
     

              <div class="col-md-12 text-center animate-box cont" style="display:none;" id="purpose_of_your" >
			    <h3>Enter Amount you wish to borrow<span class="clr-blue1"></span>
			     <input type="tel" id="amount" name="amount"  onkeypress="return fnAllowNumeric(event)" onkeyup="Enter_amount('amount','Enter_amount')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


			 <div class="col-md-12 text-center animate-box cont" style="display:none;" id="currently_employed">
                <h3>How are you currently employed
			       <a href="#" class="svalue clr-blue currently_employee" data-toggle="modal" data-target="#home-page2" ><input type="text" style="color:000;" class="clr-blue" id="kind_of_property" name="kind_of_property"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

             <div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_income" >
			    <h3>Your gross annual income<span class="clr-blue1"></span>
			     <input type="tel" id="annu_income" name="annu_income"  onkeypress="return fnAllowNumeric(event)" onkeyup="Enter_amount('annu_income','Enter_amount')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>
                 
            <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_identified">
                <h3>What kind of property you want..
			       <a href="#" class="svalue clr-blue kind_of_property_popup" data-toggle="modal" data-target="#home-page3" ><input type="text" style="color:000;" class="clr-blue" id="property_you" name="property_you"  placeholder="Select" readonly></a>
			     </h3> 
			</div>
		

		    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_name" >
			    <h3>Property name<span class="clr-blue1"></span>
			     <input type="tel" id="loanamt" name="loanamt"  onkeypress="return fnString(event,this)"  class="input-pad" placeholder="Property name" onkeyup="proprty_f(this,'loanamt')" tabindex="1">
			    .</h3>
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="type_of_loan">
                <h3>What type of loan are you looking for
			       <a href="#" class="svalue clr-blue type_of_loan__" data-toggle="modal" data-target="#home-page4" ><input type="text" style="color:000;" class="clr-blue" id="type_of_loan_" name="type_of_loan_"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

			 <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_Cost" >
			    <h3>Property Cost<span class="clr-blue1"></span>
			     <input type="tel" id="annu_income" name="annu_income"  onkeypress="return fnAllowNumeric(event)" onkeyup="property_cost()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


            <div class="col-md-12 text-center animate-box cont" style="display:none;" id="cost_of_the_plot" >
			    <h3>What is the cost of the plot<span class="clr-blue1"></span>
			     <input type="tel" id="cost_of" name="cost_of"  onkeypress="return fnAllowNumeric(event)" onkeyup="cost_of_plot('cost_of_')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>
             
              <div class="col-md-12 text-center animate-box cont" style="display:none;" id="cost_of_construction" >
			    <h3>What is your cost of construction <span class="clr-blue1"></span>
			     <input type="tel" id="cost_construction" name="cost_construction"  onkeypress="return fnAllowNumeric(event)" onkeyup="cost_ofconstruction('ofconstruction')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_city" >
			    <h3>Choose your property city<span class="clr-blue1"></span>
			     <select id="current_reside" onchange="property_city()">
			     	<option>Mumbai</option>
			     	<option>Mumbai</option>
			     	<option>Mumbai</option>
			     </select>
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="currently_reside" >
			    <h3>Where do you currently reside <span class="clr-blue1"></span>
			     <select id="current_reside" onchange="currently_reside()">
			     	<option>Mumbai</option>
			     	<option>Mumbai</option>
			     	<option>Mumbai</option>
			     </select>
			    .</h3>
			</div>

		

    <div class="text-center" style="display:none;" id="next_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="next_step_('step2','step3')" >
			Continue<i class="icon-arrow-right"></i></a>
	</div>

</div>	

	<!--- liza Step secound   - -->	
<div class="liza col-md-8"  style="display:none;" id="next_step">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds</h4></div>

      
	

		       <p class="text-center">Step 2 of 3</p> 

		   <div class="col-md-12  text-center animate-box cont"  id="profession_type" >
			    <h3>Your Profession Type<span class="clr-blue1"></span>
			    <input type="tel" id="profe_type" name="profe_type"   onkeyup="profession_f()" class="input-pad" placeholder="Select Profession" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="bank_acc" >
			    <h3>Your Bank account is with<span class="clr-blue1"></span>
			     <select id="account_with" onchange="bankaccount_f()" name="bank_acc">
			     	<option>HDFC</option>
			     	<option>ICICI</option>
			     	<option>Canara</option>
			     </select>
			    .</h3>
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="total_emi" >
			    <h3>Total EMI you pay currently <span class="clr-blue1"></span>
			     <input type="tel" id="emi_" name="emi_"  onkeypress="return fnAllowNumeric(event)" onkeyup="emi_f()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12  text-center animate-box cont" style="display: none;"  id="full_name" >
			    <h3>Your Full Name   (As per PAN Card)<span class="clr-blue1"></span>
			    <input type="tel" id="name_" name="name_"   onkeyup="fullname_f()" class="input-pad" placeholder="Full Name" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="pan_card" >
			    <h3>Your PAN card number  <span class="clr-blue1"></span>
			     <input type="tel" id="pan_card_num" name="pan_card_num"  onkeypress="return fnAllowNumeric(event)" onkeyup="pancard_f()" class="input-pad" placeholder="  " tabindex="1">
			    .</h3>
			</div>

	<div class="text-center" style="display:none;" id="next_btn3">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="next_step_3('step2','step3')" >
			Continue<i class="icon-arrow-right"></i></a>
	</div>

</div>	
               
               <!--- third step -->
     <div class="liza col-md-8"  style="display:none;"   id="next_step3">

		   <div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds ddd</h4></div>

			

			<div class="col-md-12 text-center animate-box cont">
			    <h3>My date of birth is .</h3>
			   <input type="text" id="dob_" name="dob_"  onkeypress="return fnAllowNumeric(event)" onchange="dob_f()" >
			    
			 </div>



			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="residence_pincode" >
			    <h3>Residence Pincode <span class="clr-blue1"></span>
			     <input type="tel" id="pin_code" name="pin_code"  onkeypress="return fnAllowNumeric(event)" onkeyup="pincode_f()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_turnover" >
			    <h3>Your annual turnover   <span class="clr-blue1"></span>
			     <input type="tel" id="turn_over" name="turn_over"  onkeypress="return fnAllowNumeric(event)" onkeyup="turnover_f()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="co_borrower">
                 <h3>Do you want to add co borrower
			       <a href="#" class="svalue clr-blue type_of_loan__" data-toggle="modal" data-target="#home-page5" ><input type="text" style="color:000;" class="clr-blue" id="borrower_" name="borrower_"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="relation_ship" >
			    <h3>Your relationship with the co-borrower<span class="clr-blue1"></span>
			     <select id="relationship" onchange="relationship_f()" name="relationship">
			     	<option>Spouse</option>
			     	<option>Father</option>
			     	<option>Mother</option>
			     	<option>Brother</option>
			     	<option>Sister</option>
			     	<option>Child</option>
			     </select>
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="employment_type">
                <h3>Your co-borrower's employment type
  <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page6" >
	<input type="text" style="color:000;" class="clr-blue" id="coborrower_employment" name="coborrower_employment">
	</a>
			     </h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_in" >
			    <h3>Co-borrower's annual income<span class="clr-blue1"></span>
			     <input type="tel" id="income" name="income"  onkeypress="return fnAllowNumeric(event)" onkeyup="co_borrower_annual_f()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="emi_paid" >
			    <h3>Co-borrower's total EMI paid currently<span class="clr-blue1"></span>
			     <input type="tel" id="income" name="income"  onkeypress="return fnAllowNumeric(event)" onkeyup="total_emi()" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

            <div class="text-center" style="display:none;" style="display:none;" id="btn_v" >
		     <button class="btn btn-primary btn-outline with-arrow animate-box"  >
			submit<i class="icon-arrow-right"></i></button>
	       </div>

     </div>

</form>

	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select Purpose of your Loan!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.home_script')
@include('layout.home-loan-modal')