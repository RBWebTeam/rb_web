@include('layout.header')

    <!--- liza Step First   - -->
	    <div class="container">
	    <form name='personal_loan_process_form' id='personal_loan_process_form' action={{URL::to('personal-loan-submit')}} method="POST">
	    	  {{ csrf_field() }}
		<div class="liza col-md-8" id="step-1">
		   <div class="col-md-12 text-center"><h4>Apply for an Easy Car Loan in 30 seconds</h4></div>
		   <p class="text-center">Step 1 of 3</p>

		   <div class="col-md-12 text-center animate-box cont" id="q1">
             <h3>What type of Car are you looking for
			 <a href="#" class="svalue clr-blue pop_up" data-toggle="modal" data-target="#page1" ><input type="text" style="color:000;" class="clr-blue" id="car_type" name="car_type"  placeholder="Select" readonly></a>
			.</h3> 
			</div>

			<div class="col-md-12 text-center animate-box cont" style="display:none;" id="preferred_car" >
			    <h3>My preferred car is<span class="clr-blue1"></span>
			     <select id="prefer_car" onchange="preferred_car_f()" name="prefer_car">
			     	<option>Ford Ecosport</option>
			     	<option>Endeavour</option>
			     	<option>Fiesta Classic</option>
			     	<option>Figo Aspire</option>
			     	<option>Ikon</option>
			     	<option>Mustang</option>
			     </select>
			    .</h3></div>

			    <div class="col-md-12 text-center animate-box cont" style="display:none;" id="live_currently" >
			    <h3>Where do you live currently<span class="clr-blue1"></span>
			     <select id="current_city" onchange="city_f()" name="current_city">
			     	<option>Mumbai</option>
			     	<option>Banglore</option>
			     	<option>Chennai</option>
			     	<option>Hyderabad</option>
			     	<option>Delhi</option>
			     	<option>Pune</option>
			     	

			     </select>
			    .</h3></div>








			
			<div class="text-center" style="display:none;" id="step_3_btn">
				<a class="btn btn-primary btn-outline with-arrow animate-box" onclick="changeDiv('step-3','step-2')">Go Back<i class="icon-arrow-right"></i></a>
				<button class="btn btn-primary btn-outline with-arrow animate-box" type="submit">Get me a Loan<i class="icon-arrow-right"></i></button>
			</div>


			
		
	   </div>
	   <!-- Liza Step Three End -->

	   </form>
	  <!-- POP Up code start -->
	   <div class="col-md-4 liza1">
		<div class="text-center guid nl-form-errors" id='pop1'>Select your professional!</div>

        <div class="text-center img1"><img src="images/photo.jpg"></div>
		</div>
		<!-- POP Up code end -->
		</div>

@include('layout.footer')
@include('layout.car-script')
@include('layout.car-loan-modal')