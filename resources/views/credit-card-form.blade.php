@include('layout.header')
<div id="fh5co-hero">
	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2>Apply For Credit Card</h2>
					
				</div>
				<div class="col-md-12">
					<div class="row text-left comp-pg rate white-bg">

						
							<form class="" id="compareform" role="form" method="POST" >
							 {{ csrf_field() }}
							 <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'0';?>">
						          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'0';?>">
						          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'0';?>"> 
						          <input type="hidden" name="cards" class="prod" 
						          value="<?php if(isset($_GET['prod'])){
						          	echo str_replace("_"," ",$_GET["prod"]);
						          	}else{
						          		echo "0";
						          		}?>"> 
						          <input type="hidden" name="net_annual_income" class="amount" 
						          value="<?php if(isset($_GET['amount'])){
						          	echo str_replace("_"," ",$_GET["amount"]);
						          	}else{
						          		echo "0";
						          		}?>"> 
						          <input type="hidden" name="your_interests" class="interest" 
						          value="<?php if(isset($_GET['interest'])){
						          	echo str_replace("_"," ",$_GET["interest"]);
						          	}else{
						          		echo "0";
						          		}?>"> 

								<div class="row">
									<div class="form-group">
									
										<h4 class="hdr col-md-12">Personal Details</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder= "First Name*" name="ApplicantFirstName" id="ApplicantFirstName" onkeypress="return AllowAlphabet(event)" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Middle Name" name="ApplicantMiddleName" id="ApplicantMiddleName">
										</div>
										<div class="col-md-4 lst-nam">
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
										<lable>
										<input type="radio"  name="Gender"  class="radiob" checked value="Male"> Male
                                        <input type="radio" name="Gender"  class="radiob" value="Female" > Female
					                    </div>
										</div>
									
                                       
                                       <div class="col-md-4">
									   <div class="form-control border-none">
										<input type="radio"  name="marital_status"  class="radiob" checked value="Single">   Single
                                        <input type="radio" name="marital_status"  class="radiob" value="Married" > Married
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
										<input type="radio"  name="resident_status"  class="radiob" checked value="Indian"> Indian
                                        <input type="radio" name="resident_status"  class="radiob" value="NRI/Foreign National" > NRI/Foreign National
					                    </div>
										</div>
										
										<div class="col-md-4">
										<div class="form-control border-none">
										<input type="radio"  name="CustomerProfile"  class="radiob" checked value="Salaried">  Salaried
                                        <input type="radio" name="CustomerProfile"  class="radiob" value="Selfemployed" >   Selfemployed
					                    </div>
										</div>
                                        
                                        

					                    <div class="col-md-4 mrg-top">
										<select class="drop-arr select-sty pull-left" name="supplementary_card" id="supplementary_card" required>
					                      <option disabled selected >I Want to Apply For a Supplementary Card</option>
					                      <option value="Yes">Yes</option>
					                      <option value="No">No</option>
					                    </select> 
					                    </div>

									</div>
								</div>
								<hr>
								<div class="row sec">
									<div class="form-group">
										<h4 class="hdr">Company Name</h4>
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

										<!-- <div class="col-md-4">ICICI Bank Relationship<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship"  class="radiob" required value="Yesrelationship">&nbsp;&nbsp;  No&nbsp;&nbsp;<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship" class="radiob" value="Norelationship">
										</div>

 -->                                    
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
										     <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" maxlength="15" onkeypress="return isNumberKey(event)"  required>
											</div>
		
		
										
										
											<div class="col-md-8">Salary Account With Other Bank<b>:</b> Yes &nbsp;&nbsp;
											<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank"  class="radiob" checked value="Yes"> No &nbsp;&nbsp;<input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" class="radiob" value=" No">
										</div>
										</div>
									</div>
									<hr>
								<div class="row sec">
									<div class="form-group">
										<h4 class="hdr">Current Address Details:</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="flat No / Plot No / House No*" name="ResidenceAddress1" id="ResidenceAddress1" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Building / Society Name" name="ResidenceAddress2" id="ResidenceAddress2">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Road No / Area / Locality" name="ResidenceAddress3" id="ResidenceAddress3">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_citynm" placeholder="City*" name="City" id="City" required>
										</div>
										<div class="col-md-4">
												<input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
											</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_statenm" placeholder="State*" name="ResidenceState" id="ResidenceState" required>
										</div>
                                        
                                        <div class="col-md-4">
						                    <select class="block drop-arr select-sty" name="type_current" id="type_current" required>
						                      <option disabled selected value="">Residence Type</option>
						                     <option value="Owned_by_self/spouse">Owned by self/spouse</option>
						                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
						                      <option value="Rented_with_Family">Rented with Family</option>
						                      <option value="Rented_with_Friends">Rented with Friends</option>
						                      <option value="Rented_staying_alone">Rented staying alone</option>
						                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
						                      <option value="Company_Provided">Company Provided</option>
						                    </select> 
						            </div>

										</div>
									</div>
                                    <hr>
                                    <div class="row sec">
									<div class="form-group">
									    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same"/> Same As Above
										<h4 class="hdr">Permanent Address Details:</h4>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="flat No / Plot No / House No*" name="PerResidenceAddress1" id="PerResidenceAddress1" required>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Building / Society Name" name="PerResidenceAddress2" id="PerResidenceAddress2">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control" placeholder="Road No / Area / Locality" name="PerResidenceAddress3" id="PerResidenceAddress3">
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_citynm" placeholder="City*" name="PerCity" id="PerCity" required>
										</div>
										<div class="col-md-4">
												<input type="text" id="PerResidencePincode" name="PerResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
											</div>
										<div class="col-md-4">
											<input type="text" class="form-control search_statenm" placeholder="State*" name="PerResidenceState" id="PerResidenceState" required>
										</div>
                                        
                                        <div class="col-md-4">
						                    <select class="block drop-arr select-sty" name="per_res_type" id="per_res_type" required>
						                      <option disabled selected value="">Residence Type</option>
						                     <option value="Owned_by_self/spouse">Owned by self/spouse</option>
						                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
						                      <option value="Rented_with_Family">Rented with Family</option>
						                      <option value="Rented_with_Friends">Rented with Friends</option>
						                      <option value="Rented_staying_alone">Rented staying alone</option>
						                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
						                      <option value="Company_Provided">Company Provided</option>
						                    </select> 
						            </div>

										</div>
									</div>
                                    <hr>
									<div class="row sec">
										<div class="form-group">
											<h4 class="hdr">Contact Details</h4>
										
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidencePhoneNumber" name="ResidencePhoneNumber" placeholder="Telephone No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" >
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="ResidenceMobileNo" name="ResidenceMobileNo" placeholder="Mobile No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
											</div>
											
											<div class="col-md-4">
												<input type="text" class="form-control" id="STDCode" name="STDCode" placeholder="STD Code" required  onkeypress="return fnAllowNumeric(event)" maxlength="4"  >
											</div>
												
										</div>
									</div>

									<div class="col-md-4">Do You Have A Credit Card :
					                    <input type="radio" id="have" name="have_credit_card"  value="Yes"> Yes
                                        <input type="radio" name="have_credit_card" id="not_have" checked value="No" > No
					                    </div><br>


									<div class="row">
									<div style="display: none;"  id="credit_details" >
                                    <h4 class="hdr">Please input details of your Credit Card having Maximum Credit Limit </h4>
           
					                    <div class="col-md-4" >
					                    <input type="text" class="form-control" name="previous_bank" id="previous_bank" class="form-input-new" onkeypress="return AllowAlphabet(event)" placeholder="Select Bank" required >
					                    </div>

                                        <div class="col-md-4" >
					                    <input type="text" class="form-control lastReportedsince" id="credit_date" name="credit_date" placeholder="Member Since*" required>
					                    </div>
					                    <div class="col-md-4">
					                   <input type="text" class="form-control" id="credit_limit" name="credit_limit" class="form-input-new" onkeypress="return fnAllowNumeric(event)" placeholder="Credit Limit"  required >
					                    </div>  
						                  </div>
						                  </div>
                                        <hr>
										<div class="form-group">
											<h4 class="hdr">Identity Details</h4>
											<div class="col-md-4">
												<input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-control" placeholder="Application Number*"   maxlength="13" minlength="13" required>
											</div>
											
											<div class="col-md-4">
										     <select class="block drop-arr select-sty" name="SalaryAccountOpened" id="SalaryAccountOpened" required>
											  <option value="">Salary Account Opened</option>
											    <option value="Above2Months"> > 2 Months</option>
												<option value="Below2Months"><=2 Months</option>
											</select>
  											</div>  											
											<div class="col-md-4">
												<input type="text" id="PanNo" name="PanNo" class="form-control" placeholder="Pancard*" oninput="pancard('PanNo')" maxlength="10" minlength="10" required >
												<div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
											</div>
											
											<!-- <div class="col-md-4">
												<input type="text" class="form-control lastReporteddob" id="SalaryAcOpenDate" name="SalaryAcOpenDate" placeholder="Salary Ac Open Date*" required>
											</div> -->
										<div class="col-md-12">
										<input type="checkbox"  name="terms" required>
											I hereby confirm that I have read and understood the
									<a href="#" data-toggle="modal" data-target="#Experian_terms_modal"> Rupeeboss Terms</a> and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.

										</div>
										
										</div class="col-md-12">
										&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated credit-submit dis-tbl" >Confirm & Continue<i class="icon-arrow-right"></i>


									</button>
									<div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
									<p><b>All <span class="text-danger">* </span>fields are mandatory.</b></p>
								</div>
							</form>
					</div>

				</div>
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
        <button type="button" class="clo