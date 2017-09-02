@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>RBL Credit Card Form</h2>
					
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row text-left comp-pg rate white-bg">

						
							<form class="" id="compareform" role="form" method="POST" >
							 

								<div class="row">
									<div class="form-group">
									
										<h4 class="hdr col-md-12 text-center">Personal Details</h4>
										
										 
										<div class="col-md-2">
  
										     <select class="block drop-arr select-sty" name="no_of_dependents" id="no_of_dependents" required>
						                      <option disabled selected  value="">MR</option>
						                        <option value="1">MRS</option>
						                        
						                    </select> 
						                    </div>
										<div class="col-md-5">
											<input type="text" class="form-control" placeholder="Middle Name" name="ApplicantMiddleName" id="ApplicantMiddleName">
										</div>
										<div class="col-md-5 lst-nam">
											<input type="text" class="form-control" placeholder="Last Name*" name="ApplicantLastName" id="ApplicantLastName" onkeypress="return AllowAlphabet(event)" required>
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control lastReporteddob" id="DateOfBirth" name="DateOfBirth" placeholder="Date of Birth*" required>
										</div>

                                         <div class="col-md-4">
											<input type="text" class="form-control " id="NameOnCard" name="NameOnCard" placeholder="Name To Be Printed On Card*" onkeypress="return AllowAlphabet(event)" required>
										</div>

										<div class="col-md-4">
											<input type="text" class="form-control " id="MotherName" name="MotherName" placeholder="Mother's Maiden Name*" onkeypress="return AllowAlphabet(event)" required>
										</div>

										<div class="col-md-4">
  
										     <select class="block drop-arr select-sty" name="no_of_dependents" id="no_of_dependents" required>
						                      <option disabled selected  value="">No of Dependents</option>
						                        <option value="0">0</option>
						                        <option value="1">1</option>
						                        <option value="2">2</option>
						                        <option value="3">3</option>
						                        <option value="4">4</option>
						                        <option value="5">5</option>
						                        <option value="5+">5+</option>
						                    </select> 
						                    </div>

										

										<div class="col-md-4">
										<div class="form-control border-none">
									   
										<input type="radio"  name="Gender" id="150"  class="radiob" checked value="Male"><label for="150">&nbsp;Male</label>
                                        <input type="radio" name="Gender" id="151"  class="radiob" value="Female" ><label for="151">&nbsp;Female </label>
										
					                    </div>
										</div>
									
                                       
                                       <div class="col-md-4">
									   <div class="form-control border-none">
										<input type="radio"  name="marital_status" id="152" class="radiob" checked value="Single">   <label for="152">Single</label>
                                        <input type="radio" name="marital_status" id="153"  class="radiob" value="Married" > <label for="153">Married</label>
					                    </div>
										</div>
										
                                         <div class="col-md-4">
										<select class="drop-arr select-sty" name="preferred_address" id="preferred_address"  required>
					                      <option value="" disabled selected>Preferred Mailing Address</option>
					                      <option value="Residence">Residence</option> 
					                      <option value="Office">Office</option>
					                    </select> 
					                    </div>

										<div class="col-md-4">
										<div class="form-control border-none">
										<input type="radio"  name="resident_status" id="154"  class="radiob" checked value="Indian"> <label for="154"> Indian</label>
                                        <input type="radio" name="resident_status" id="155"  class="radiob" value="NRI/Foreign National" > <label for="155">NRI/Foreign National</label>
					                    </div>
										</div>
										
										<div class="col-md-4">
										<div class="form-control border-none">
										<input type="radio"  name="CustomerProfile" id="156"  class="radiob" checked value="Salaried">  <label for="156">Salaried </label>
                                        <input type="radio" name="CustomerProfile" id="157"  class="radiob" value="Selfemployed" >  <label for="157"> Selfemployed </label>
					                    </div>
										</div>
                                        
                                        

					                   

									</div>
									<hr>
								</div>
								
								
								
								
								<div class="row sec" id="section1">
									<div class="form-group">
										<h4 class="hdr text-center">Company Details</h4>
										
										<div class="col-md-4">
											<input type="text" class="form-control search_company" placeholder="Company Name*" name="CompanyName" id="CompanyName" required="">
										</div>
										<div class="col-md-4">
											<input type="text" id="Income" name="Income" class="form-control" placeholder="Income*" onkeypress="return fnAllowNumeric(event)"  required>
										</div>

										<div class="col-md-4">
											<input type="text" id="designation" name="designation" class="form-control" placeholder="Designation*"onkeypress="return AllowAlphabet(event)"  required>
										</div>
                                        
                                        <div class="col-md-4">
											<input type="text" id="work_email" name="work_email"  oninput="mail('work_email')" class="form-control" placeholder="Work Email*"  required>
											<div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
										</div>
                             
                                         <div class="col-md-4">
											<input type="text" class="form-control" id="work_STDCode" name="work_STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" placeholder="Work Area STD Code*" >
										</div>

										<div class="col-md-4">
											 <input type="text" class="form-control" id="work_number" name="work_number"  required  onkeypress="return fnAllowNumeric(event)" maxlength="10" placeholder="Phone Number" >
										</div>

										<div class="col-md-4">
					                    <select class="block drop-arr select-sty" name="type_of_company" id="type_of_company" required>
					                      <option disabled selected value="">Type of Company</option>
					                      <option value="Central Government">Central Government</option>
					                      <option value="MNC">MNC</option>
					                      <option value="Partnership">Partnership</option>
					                      <option value="Private Limited">Private Limited</option>
					                      <option value="Proprietorship">Proprietorship</option>
					                      <option value="PSU">PSU</option>
					                      <option value="Public Limited">Public Limited</option>
					                      <option value="State Government">State Government</option>
					                    </select> 
					            </div>

					                    <div class="col-md-4">
						                    <select class="block drop-arr select-sty" name="highest_education" id="highest_education" required>
						                      <option selected disabled="" value="">Highest Educational Qualifications</option>
						                      <option value="Under Graduate">Under Graduate</option>
						                      <option value="Graduate/Diploma">Graduate/Diploma</option>
						                      <option value="Post Graduate">Post Graduate</option>
						                      <option value="Professional">Professional</option>
						                      
						                    </select> 
						            </div>
             
 									       <div class="col-md-4">
  
										     <select class="block drop-arr select-sty" name="ICICIBankRelationship" id="ICICIBankRelationship" required>
											  <option value="">ICICI Bank Relationship</option>
											    <option value="Salary">Salary</option>
												<option value="Saving">Saving</option>
												<option value="Loan">Loan</option>
												<option value="Norelationship">Norelationship</option>
												
											</select>
  											</div>

  											<div class="col-md-4">
										     <input  type="text" class="form-input-new form-control" name="Total_Exp" id="Total_Exp" placeholder="Total Experience" onkeypress="return isNumberKey(event)"  required>
											</div>

											

											<div class="col-md-4">
										     <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" minlength="12" maxlength="16" onkeypress="return isNumberKey(event)"  required>
											</div>
		
		
										
										
											<div class="col-md-8">Salary Account With Other Bank<b>:</b> <label for="160">Yes</label>
											<input type="radio" id="160" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank"  class="radiob" checked value="Yes"> <label for="161"> &nbsp;&nbsp; No</label> <input type="radio" id="161" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" class="radiob" value=" No">
										</div>
										</div>
										<hr>
									</div>
													
											
										
							</form>
					
					
					
					<button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id"  id="credit_id">SUBMIT<i class="icon-arrow-right" ></i></button>

			</div>
		</div>	
	</div>
</div>
@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="credit_process_sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Application id is <b><span id="drop"></span></b>.<br>You have been <b><span id="drop1"></span></b>.<br><b><span id="drop2"></span></b><h5></p></h4>
        
      </div>
      
      <div class="modal-footer">
        <a type="button" id="upload" name="upload" class="btn btn-primary" onclick="Redirect();" >Proceed to Document Upload</a>
        
      </div>
    </div>
  </div>
</div>






