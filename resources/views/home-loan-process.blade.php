@include('layout.header')





    
	    <div class="container" id='elem'>
	    <form name='home_loan_process_form' id='home_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
	    	   <input type="hidden" id="product" name="product_name" value="Home_loan">
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
			     <input type="tel" id="amount" name="amount"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'Enter_amount')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


			 <div class="col-md-12 text-center animate-box cont" style="display:none;" id="currently_employed">
                <h3>How are you currently employed
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page2" ><input type="text" style="color:000;" class="clr-blue" id="kind_of_property" name="kind_of_property"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

             <div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_income" >
			    <h3>Your gross annual income<span class="clr-blue1"></span>
			     <input type="tel" id="annu_income" name="annu_income"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'annu_income')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>
                 
            <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_identified">
                <h3>What kind of property you want..
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page3" ><input type="text" style="color:000;" class="clr-blue" id="property_you" name="property_you"  placeholder="Select" readonly></a>
			     </h3> 
			</div>
		

		    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_name" >
			    <h3>Property name<span class="clr-blue1"></span>
			     <input type="tel" id="pro_name_h" name="pro_name_h"    class="input-pad" placeholder="Property name" onkeyup="homeLoanFn(this,'pro_name_h')" tabindex="1">
			    .</h3>
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="type_of_loan">
                <h3>What type of loan are you looking for
			   <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home_page4" ><input type="text" style="color:000;" class="clr-blue" id="type_of_loan_" name="type_of_loan_"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

			 <div class="col-md-12 text-center animate-box cont" style="display:none;" id="property_Cost" >
			    <h3>Property Cost<span class="clr-blue1"></span>
			     <input type="tel" id="property_cost_h" name="property_cost_h"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'property_cost_h')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


            <div class="col-md-12 text-center animate-box cont" style="display:none;" id="cost_of_the_plot" >
			    <h3>What is the cost of the plot<span class="clr-blue1"></span>
			     <input type="tel" id="cost_of" name="cost_of"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'cost_of_')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>
             
              <div class="col-md-12 text-center animate-box cont" style="display:none;" id="cost_of_construction" >
			    <h3>What is your cost of construction <span class="clr-blue1"></span>
			     <input type="tel" id="cost_construction" name="cost_construction"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'ofconstruction')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>
             

     
		

    <div class="text-center" style="display:none;" id="next_btn">
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="homeLoanFn('step2HomeLone')" >
			Continue<i class="icon-arrow-right"></i></a>
	</div>

</div>	

	<!--- liza Step secound   - -->	
<div class="liza col-md-8" style="display:none;"   id="step_Secound">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds</h4></div>

      
	

		       <p class="text-center">Step 2 of 3</p> 


			<div class="col-md-12 text-center animate-box cont" id="profession_type">
                 <h3>Your Profession Type
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#profession_page" ><input type="text" style="color:000;" class="clr-blue" id="profe_type" name="profe_type"  placeholder="Select" readonly></a>
			     </h3> 
			</div>


            <div class="col-md-12 text-center animate-box cont" style="display:none;" id="bank_acc" >
                 <h3>Your Bank account is with
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="
			       #account_page" ><input type="text" style="color:000;" class="clr-blue" id="account_with" name="account_with"  placeholder="Select" readonly></a>
			     </h3> 
			</div>

			


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="total_emi" >
			    <h3>Total EMI you pay currently <span class="clr-blue1"></span>
			     <input type="tel" id="total_emi_" name="total_emi_"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'total_emi_')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>


			<div class="col-md-12  text-center animate-box cont" style="display: none;"  id="full_name_pancart" >
			    <h3>Your Full Name   (As per PAN Card)<span class="clr-blue1"></span>
			    <input type="tel" id="pan_cart_name" name="pan_cart_name" onkeypress="return fnString(event,this)"   onkeyup="homeLoanFn(this,'pan_cart_name')" class="input-pad" placeholder="Full Name" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="pan_card_number" >
			    <h3>Your PAN card number  <span class="clr-blue1"></span>
			     <input type="tel" id="pan_card_num" name="pan_card_num"   onkeyup="homeLoanFn(this,'pan_card_num')" class="input-pad" placeholder="  " tabindex="1">
			    .</h3>
			</div>


	  <div class="text-center" style="display:none;" id="step_home">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="homeLoanFn('home_step1')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="homeLoanFn('home_step3')">Final Step<i class="icon-arrow-right"></i></a>
	</div>

</div>	
               
               <!--- third step -->
     <div class="liza col-md-8"    id="next_step3">

		   <div class="col-md-12 text-center"><h4>Apply for an Easy Home Loan in 30 seconds ddd</h4></div>

			
    <p class="text-center">Step 3 of 3</p> 


			<div class="col-md-12  text-center animate-box cont"   id="home_dob" >
			    <h3>My date of birth is<span class="clr-blue1"></span>
			    <input type="tel"  id="datepicker" name="dob_name"   onchange="homeLoanFn(this,'dob_name')" class="input-pad"  tabindex="1">
			    .</h3>
			</div>



			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="residence_pincode" >
			    <h3>Residence Pincode <span class="clr-blue1"></span>
			     <input type="tel" id="pin_code" name="pin_code" pattern="\d{6}" maxlength="6" onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'pin_code')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_turnover" >
			    <h3>Your annual turnover   <span class="clr-blue1"></span>
			     <input type="tel" id="turn_over" name="turn_over"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'turn_over')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="co_borrower">
                 <h3>Do you want to add co borrower
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page5" ><input type="text" style="color:000;" class="clr-blue" id="borrower_" name="borrower_"  placeholder="Select" readonly></a>
			     </h3> 
			</div>


			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="relation_ship">
                 <h3>Your relationship with the co-borrower
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home_page_borrower" ><input type="text" style="color:000;" class="clr-blue" id="relationship" name="borrower_"  placeholder="Select" readonly></a>
			     </h3> 
			</div>


 <div class="col-md-12 text-center animate-box cont" style="display:none;" id="employment_type">
                 <h3>Your co-borrower's employment type
			       <a href="#" class="svalue clr-blue purposeofloan_popup" data-toggle="modal" data-target="#home-page6" ><input type="text" style="color:000;" class="clr-blue" id="coborrower_employment" name="coborrower_employment"  placeholder="Select" readonly></a>
			     </h3> 
			</div>



			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="annual_in" >
			    <h3>Co-borrower's annual income<span class="clr-blue1"></span>
			     <input type="text" id="income" name="income"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'income')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="emi_paid" >
			    <h3>Co-borrower's total EMI paid currently<span class="clr-blue1"></span>
			     <input type="text" id="emipaid" name="emipaid"  onkeypress="return fnAllowNumeric(event)" onkeyup="homeLoanFn(this,'emipaid')" class="input-pad" placeholder="1,00,000" tabindex="1">
			    .</h3>
			</div>



	 <div class="col-md-12 text-center animate-box cont" style="display:none" id="property_city">
			<form action={{URL('search/autocomplete')}} method="POST" >
                <h3>Choose your property city
			<input type="text" class="search_city input-pad" id='city_name' onkeyup="homeLoanFn(this,'city_live')" name='city_name' placeholder='your city'>
                 
			</form>
		</div>

	
   <div class="col-md-12 text-center animate-box cont" style="display:none" id="currently_reside">
			<form action={{URL('search/autocomplete')}} method="POST" >
                <h3>Where do you currently reside
			<input type="text" class="search_city input-pad" id='current_reside' onkeyup="homeLoanFn(this,'current_reside')" name='current_reside' placeholder='your city'>
                 
			</form>
	</div>


    <div class="text-center" style="display:none;" id="btn_v">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="homeLoanFn('step2HomeLone')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login">Submit Step<i class="icon-arrow-right"></i></a>
	   </div>

	   <!--  <div class="text-center" style="display:none;" id="btn_v2">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="homeLoanFn('home_step2')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box product_name" data-toggle="modal" data-target="#login">Submit Ste2<i class="icon-arrow-right"></i></a>
	   </div>
 -->


     </div>

</form>

	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='home_append'>Select Purpose of your Loan!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.script')
@include('layout.home_script')
@include('layout.home-loan-modal')