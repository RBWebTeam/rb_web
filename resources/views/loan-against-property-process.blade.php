@include('layout.header')
<div class="container" id='elem'>
	  <form name='LAP_process_form' id='LAP_process_form' action={{URL::to('personal-loan-submit')}} method="POST">  {{ csrf_field() }}
	  <input type="hidden" id="product" name="product_name" value="Loan_Against_Property">
		<div class="liza col-md-8" id="step1ofagiansp" >
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>

			<div class="col-md-12 text-center animate-box cont" id="typeofpro">
	            <h3>What is your type of property
				 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1aginst" ><input type="text" style="color:000;" class="clr-blue" id="emp_detail" name="emp_detail"  placeholder="Select" readonly></a>
				</h3> 
			</div>

         <div class="col-md-12 text-center animate-box cont"  style="display:none" id="agains_value" >
              <h3>What is your property value. 
			  <input type="text" id="pro_value" name="pro_value" onkeyup="loanAgainstfn(this,'against3qe')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>
		

		 <div class="col-md-12 text-center animate-box cont" style="display:none" id="livehere">
			<form action={{URL('search/autocomplete')}} method="POST" >
                <h3>Choose your property city
			<input type="text" class="search_city input-pad" id='city_name' onkeyup="loanAgainstfn(this,'city_live')" name='city_name' placeholder='your city'>
                  
                 

			</form>
		</div>
       
     
		<div class="col-md-12 text-center animate-box cont"  style="display:none" id="link_borrow" >
              <h3>How much would you like to borrow. 
			  <input type="text" id="lik_borrow" name="lik_borrow" onkeyup="loanAgainstfn(this,'lik_borrow')" 
			    onkeypress="return fnAllowNumeric(event)" maxlength="9" class="input-pad" placeholder="1,00,000" tabindex="1">
		     </h3>
		</div>


       <div class="col-md-12 text-center animate-box cont"  style="display:none" id="borrow_it_for">
              <h3>How long do you want to borrow it for
			 <input type="text" id="borrow_year" name="borrow_year" onkeyup="loanAgainstfn(this,'borrow_year')"
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" maxlength="1" placeholder="5" tabindex="1" required>
		     </h3>
		</div>
         
         <div class="col-md-12 text-center animate-box cont" style="display: none;"  id="curr_empl_y">
	            <h3>How are you currently employed
				 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#curr_popup" ><input type="text" style="color:000;" class="clr-blue" id="curr_emp" name="curr_emp"  placeholder="Select" readonly></a>
				</h3> 
		</div>


		<div class="col-md-12 text-center animate-box cont" style="display:none;" id="TypProfession" >
			    <h3>Select Profession type<span class="clr-blue1"></span>
			     <select id="selectpro" onchange="loanAgainstfn(this,'selectpro')">
			     	 <option value="">---Select---</option>
					    						<option value="21" >Architect</option>
					    						<option value="22" >Chartered Accountant</option>
					    						<option value="23" >Company Secretary</option>
					    						<option value="24" >Consultant</option>
					    						<option value="25" >Cost Accountant</option>
					    						<option value="26" >Dentist</option>
					    						<option value="1" >Doctor</option>
					    						<option value="3" >Engineer</option>
					    						<option value="2" >Lawyer</option>
					    						<option value="30" >MBA</option>
					    						<option value="5" >Others</option>
					                                         

			     </select>
			    .</h3>
			</div>



				<div class="text-center" style="display:none;" id="next_step">
				             <a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn(this,'step_2')" >Continue<i class="icon-arrow-right"></i></a>
				</div>
 

		</div>


	   <!--- liza Step Two   - -->
		<div class="liza col-md-8"   style="display:none"	 id="step2Against">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 2 of 3</p>
			
          <div class="col-md-12 text-center animate-box cont"  id="currently_residing">
			<form action={{URL('search/autocomplete')}} method="POST" >
                <h3>City where you are currently residing
			<input type="text" class="search_city input-pad" id='curr_residing' onkeyup="loanAgainstfn(this,'curr_residing')" name='curr_residing' placeholder='your city'>
                  
			</form>
		</div>

         <div class="col-md-12 text-center animate-box cont"  style="display:none" id="grossanual" >
              <h3>What is your gross annual income
			  <input type="text" id="anualainc" name="anualainc" onkeyup="loanAgainstfn(this,'anualincome')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>

		 <div class="col-md-12 text-center animate-box cont"  style="display:none" id="anulaTurnover" >
              <h3>WWhat is your annual turnover
			  <input type="text" id="annual_turnover" name="annual_turnover" onkeyup="loanAgainstfn(this,'annual_turnovers')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>

       
        <div class="col-md-12 text-center animate-box cont"  style="display:none" id="total_EMI" >
              <h3> What is the total EMI you pay currently
			  <input type="text" id="totalEmi" name="totalEmi" onkeyup="loanAgainstfn(this,'totalEmi')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>


		<div class="col-md-12 text-center animate-box cont" style="display:none;" id="bankAcount" >
			    <h3>Select Your bank account is with?<span class="clr-blue1"></span>
			     <select id="bankacount" onchange="loanAgainstfn(this,'bankacount')">
			     	 <option value="">---Select---</option>
					    						<option value="21" >HDFC</option>
					    						<option value="22" >FBI</option>
					    						<option value="23" >BOM</option>
					    						<option value="24" >Consultant</option>
					    						<option value="25" >Cost Accountant</option>
					    						<option value="26" >Dentist</option>
					    						<option value="1" >Doctor</option>
					    						<option value="3" >Engineer</option>
					    						<option value="2" >Lawyer</option>
					    						<option value="30" >MBA</option>
					    						<option value="5" >Others</option>
			    </select>
			    .</h3>
			</div>


			
			<div class="col-md-12 text-center animate-box cont" id="want_co_borrower" style="display:none">
	            <h3>Do you want to add co-borrower
				 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#co_borrow" ><input type="text" style="color:000;" class="clr-blue" id="co_borrow_again" name="co_borrow_again"  placeholder="Select" readonly></a>
				</h3> 
			</div>


   <!--    <div class="text-center" style="display:none;" id="stepAgainst2">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step1ag')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step3ag')">Final Step<i class="icon-arrow-right"></i></a>
	</div> -->

	<!-- <div class="text-center" id="step2_against">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step1ag')">Go Back<i class="icon-arrow-right"></i></a>
	</div> -->


 </div>


	   <!--- Third step-->
       <div class="liza col-md-8"   style="display:none"	 id="step3Against" >
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Personal Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 3 of 3</p>

		    <div class="col-md-12 text-center animate-box cont"   id="relationship_against" >
			    <h3>What is your relationship with co-borrower<span class="clr-blue1"></span>
			     <select id="releation_agai" name="releation_agai" onchange="loanAgainstfn(this,'releation_agai')">
			     	 <option value="">---Select---</option>
					    						<option value="21" >Spouse</option>
					    						<option value="22" >Father</option>
					    						<option value="23" >Mother</option>
					    						<option value="24" >Brother</option>
					    						<option value="24" >child</option>
					    						
			     </select>
			    .</h3>
			</div>


               <div class="col-md-12 text-center animate-box cont" style="display: none;"  id="employment_co_borrow">
	            <h3>What is employment type of your co-borrower
				<a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#employment_aginst" ><input type="text" style="color:000;" class="clr-blue" id="emp_co_bor" name="emp_co_bor"  placeholder="Select" readonly></a>
				</h3> 
		    </div>


		   <div class="col-md-12 text-center animate-box cont"  style="display:none" id="cobor_month" >
              <h3> What is co-borrower monthly income
			 <input type="text" id="co_borrwo" name="co_borrwo" onkeyup="loanAgainstfn(this,'co_borrwo')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>


		<div class="col-md-12 text-center animate-box cont"  style="display:none" id="co_borrow_EMI" >
              <h3> What is the total EMI co-borrower pays
			  <input type="text" id="co_borrowemi" name="co_borrowemi" onkeyup="loanAgainstfn(this,'co_borrowemi')" 
			    onkeypress="return fnAllowNumeric(event)" class="input-pad" placeholder="1,00,000"  maxlength='10'  tabindex="1">
		     </h3>
		</div>
      

  <!--       <div class="text-center" id="step2_against">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step_2')">Go Back<i class="icon-arrow-right"></i></a>
		</div>

<div class="text-center" style="display:none" id="step_2_gainst">
		<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step_2')">Go Back<i class="icon-arrow-right"></i></a>
			<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="loanAgainstfn('step3ag')">Final Step<i class="icon-arrow-right"></i></a>
</div> -->

	   </div>

</form>
	  <!-- POP Up code start -->
	    <div class="col-md-4 liza1">
			<div class="text-center guid nl-form-errors" id='popup'>Select type of property!</div>
	        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>
@include('layout.footer')
@include('layout.against_script')
@include('layout.against-loan-modal')