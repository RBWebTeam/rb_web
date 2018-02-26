 @include('layout.header')

 <div class="iifl-image">
    <img src="images/iifl.jpg">
    </div>

    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40" style="float:left;width:100%;"> 
                                      
                        <div class="row" style="display: none;">
                            <div class="col-md-10 col-md-offset-1">
                        <hr>
                            <h1 class="text-center pad">Thank You</h1>
                            <h4 class="text-center">Your application is under process our representative will get in touch with to you shortly</h4>
                            <p class="text-center">To learn more about IIFL Express Personal Loan <a href="javascript:void(0)">Click Here</a></p>
                            </div>
                        </div>
            
                        <div class="row" id="error" style="display: none;">
                            <div class="col-md-10 col-md-offset-1">
                                <hr>
                                <h1 class="text-center pad">Thank You..!!</h1>
                                <h4 class="text-center">Your application is under process our representative will get in touch with to you shortly</h4>
                                <p class="text-center">To learn more about IIFL Express Personal Loan <a href="javascript:void(0)">Click Here</a></p>
                             </div>
                        </div>

            <!-- iifl main page -->
                  <div id="iifl"> 
                    <h2 class=""><center>IIFL Express Loan</center></h2>
                    <form id="iifl_express_loan" name="iifl_express_loan" method="POST">
                        {{ csrf_field() }}

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                           
                             <div class="card-content">
                                <div class="form-group">
                                  <!-- <span>Monthly Salary</span> -->
                                <input class="form-input-new form-control" type="text" name="Monthly_Salary"  id="Monthly_Salary" placeholder="Your Net Monthly Salary"  onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" required  />
                                </div>
                            </div>                           
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">  
                        <div class="card-content">                         
                                <div class="form-group">
                                  <!-- <span>Where Do You Work</span> -->
                                  <input type="hidden" name="Company_Cat" id="Company_Cat" value="">
                                  <input type="text" placeholder="Where Do You Work" class="form-control input-md search_company" name="Company_Name" id="Company_Name" required>
                              </div>  
                              </div>                          
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <!-- <span>Total Existing EMI if Any (If Not Enter 0)</span> -->
                                <input class="form-control input-md" type="text" name="Monthly_Obligation" id="Monthly_Obligation" placeholder="Total Existing EMI if Any (If Not Enter 0)" onkeypress="return fnAllowNumeric(event)"  />
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <br /><br /><br /><br />
                            <h3 style="padding:30px 0;"><center>Enter your contact information to receive a copy of your loan eligibility.</center></h3>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  
                                    <input  class="form-control input-md" type="text" name="Mob_Num" id="Mob_Num" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile No" maxlength="10"  required />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <!-- <span>Email ID</span> -->
                                    <input class="form-control input-md" type="text" name="EmailID" id="EmailID" oninput="mail('EmailID')" placeholder="Email ID"  required />
                                </div>
                                <div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <!-- <span>Select City</span> -->
                                <select class="form-control input-md" name="city" id="city" required>
                                  <option selected value="">Select City</option>
                                  </select>

                                </div>
                            </div>
                        </div>

                    <a href="javascript: void(0)" class="btn btn-default btn-sm next" >Next</a>                

                    </form>
                </div>
                <!-- iifl main page end -->
                <!-- next Eligibilitydetails -->
                                <div id="Eligibility_details" style="display: none;">
                                  <form name="eligibility_form" id="eligibility_form" method="POST">
                                  {{ csrf_field() }}
                                  
                                  <div class="col-lg-12">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th scope="col">Company Name:</th>
                                                <th scope="col">Monthly Salary:</th>
                                                <th scope="col">Current EMI:</th>                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span id="Name"></span></td>
                                                <td><i class="fa fa-inr"></i> <span id="Salary"></span></td>
                                                <td><i class="fa fa-inr"></i> <span id="Current"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                     <spam style="font-size: 20px;"><center style="padding:30px 0;"><strong style="color: #ed1c24;">Hurray !!</strong> You are eligible for a loan of <i class="fa fa-inr"></i> <span id="eligible"></span>. Tenure for  <b><span id="period"></span> years</b> & EMI is <i class="fa fa-inr"></i> <span id="you_have_to_pay"></span></center></spam>

                                </div> 

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                           
                             <div class="card-content">
                                    <div class="form-group">
                                      <b><span>Loan Amount</span></b>
                                       <input class="form-control input-md" type="text" name="AppliedLoan" id="AppliedLoan" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                           
                             <div class="card-content">
                                    <div class="form-group">
                                      <b><span>Loan Tenure</span></b>
                                        <input class="form-control input-md" type="text" name="tenure" id="tenure" onkeypress="return fnAllowNumeric(event)" maxlength="3" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                           
                             <div class="card-content">
                                    <div class="form-group">
                                      <b><span>Monthly EMI</span></b>
                                        <input class="form-control input-md" type="text" name="EMI" id="EMI" onkeypress="return fnAllowNumeric(event)" readonly="readonly"  />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="loan-apply">
                                  <div id="int">
                                    <p style="text-align:center; font-weight:bold">Rate Of Interest <br />
                                        <b><span id="interest"></span>%</b>
                                    </p>
                                  </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="loan-apply">
                                   <p style="text-align:center; font-weight:bold">Proccesing Fee <br />
                                    <b><span id="fee"></span>%</b></p>
                                </div>
                            </div>

                            </div>

                            <div class="col-lg-12">
                                <p class="agree" style="text-align:center; font-weight:bold">
                                    <input type="checkbox" name="check" required /> I Agree to all the terms and conditions</p><br />
                            </div>

                            <a class="btn btn-default btn-sm next_form" id="next_form" href="javascript:void(0)">NEXT</a>

                        
                                </form>
                                </div>
              <!-- next Eligibilitydetails end -->

              <!-- iifl-lead -->
              <div id="iifl-lead" style="display: none;">
                <form id="iifl_lead" name="iifl_lead" method="POST">
                  {{ csrf_field() }}
                  <input class="form-control input-md" type="hidden" name="Token"  id="Token" readonly value="" />
                  <input type="hidden" class="form-control input-md"  name="object_name" id="object_name" value="Lead" required>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="Parameters[FirstName]" id="FirstName" placeholder="First Name" onkeypress="return AllowAlphabet(event)" required  />
                                </div>
                              </div>
                            </div>

                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="Parameters[LastName]" id="LastName" placeholder="Last Name" onkeypress="return AllowAlphabet(event)" required />
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="Parameters[MobilePhone]" id="MobilePhone" onkeypress="return AllowAlphabet(event)"  />
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="card-content">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="Parameters[Email]" id="Email" onkeypress="return AllowAlphabet(event)"  />
                                </div>
                              </div>
                            </div>

                            <div class="col-md-12 mrg-top">
                                <a class="btn btn-default btn-sm lead_save" href="javascript:void(0)">NEXT</a>
                            </div>

                </form>
              </div>
              <!-- iifl-lead end -->
              <!-- next Applicant_Details -->
              <div id="Applicant_Details" style="display: none;">
                <form name="applicant_deatils" id="applicant_deatils" method="POST">
                      {{ csrf_field() }}
                      <div class="col-lg-12">
                        <table class="">
                          <thead>
                              <tr>
                                <th scope="col">Company Name:</th>
                                <th scope="col">Monthly Salary:</th>
                                <th scope="col">Current EMI:</th>                                              
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td><span id="CompanyNm"></span></td>
                                <td><i class="fa fa-inr"></i> <span id="Income"></span></td>
                                <td><i class="fa fa-inr"></i> <span id="Current_EMI"></span></td>
                              </tr>
                          </tbody>
                        </table>    
                         <br><br> 
                         <table class="">
                          <thead>
                            <tr>
                              <th colspan="5" style="text-align: center;">Loan Details</th>
                            </tr>
                              <tr>
                                <th scope="col">Loan Amount</th>
                                <th scope="col">Rate of Interest</th>
                                <th scope="col">EMI</th>
                                <th scope="col">Loan Tenure</th>
                                <th scope="col">Processing Fees</th>                                           
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><i class="fa fa-inr"></i> <span id="Amount"></span></td>
                                <td><span id="RateOfInt"></span>%</td>
                                <td><i class="fa fa-inr"></i> <span id="EquatedMonthly"></span></td>
                                <td><span id="LoanTenure"></span></td>
                                <td><span id="ProcessFee"></span></td>
                              </tr>
                            </tbody>
                         </table>                                           
                      </div>
                      <br><br>

                      <!-- user information -->
                      <!-- Tell Us a Bit About YourSelf -->

                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                        <div class="how-it-block1 bg-boxshadow" style=" min-height: auto;float: left;">
                          <h4 >Tell Us a Bit About YourSelf</h4>
                          <input type="text" name="CampaignName" value="{{$CampaignName}}">
                          <input type="text" name="CRMLeadId" id="CRMLeadId" value="">
                          <input class="input__field input__field--nao" type="hidden" name="CompanyName" required id="CompanyName" onkeypress="return AllowAlphabet(event)" />
                          <input class="input__field input__field--nao" type="hidden" name="MonthlySalary" required id="MonthlySalary" onkeypress="return AllowAlphabet(event)" />
                          <input class="input__field input__field--nao" type="hidden" name="MonthlyObligation" required id="MonthlyObligation" onkeypress="return AllowAlphabet(event)" />
                          <input class="input__field input__field--nao" type="hidden" name="AppliedLoanamount" required id="AppliedLoanamount" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="Tenure" required id="Tenure" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="Emi" required id="Emi" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="ROI" required id="ROI" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="TotalPayableAmount" required id="TotalPayableAmount" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="ApplicantType" required id="ApplicantType" value="Applicant" />
                          <input class="input__field input__field--nao" type="hidden" name="City" required id="City" value="" />
                          <input class="input__field input__field--nao" type="hidden" name="EKYCFlag" required id="EKYCFlag" value="0"/>
                          <input class="input__field input__field--nao" type="hidden" name="Processingfee" required id="Processingfee" value="" />

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <input class="form-control input-md" type="text" name="FName" required id="FName" minlength="3" placeholder="First Name" onkeypress="return AllowAlphabet(event)" />
                             </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" type="text" placeholder="Middle Name" name="MName" id="MName" onkeypress="return AllowAlphabet(event)" />
                             </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" placeholder="Last Name" type="text" name="LName" id="LName" required onkeypress="return AllowAlphabet(event)" />
                             </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" type="text" name="PAN" id="PAN" oninput="pan_card('PAN')" placeholder="PAN Number" required minlength="10" maxlength="10" />
                                <div id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!
                             </div>
                            </div>
                          </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md lastReporteddate1" type="text" placeholder="Date Of Birth" id="DOB" placeholder="Date of Birth(DD/MM/YY)" name="DOB" required />
                             </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select class="form-control input-md" name="Gender" id="Gender" required>
                                  <option selected="" disabled="">Gender</option>
                                  <option value="M">Male</option>
                                  <option value="F">Female</option>
                              </select>
                             </div>
                           </div>
                           <hr style="color:transparent; width:100%">

                           <h4 >Where Can We Reach you</h4>

                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <input class="form-control input-md" type="text" name="MobileNo" id="MobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" required />
                             </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" type="text" name="AlternateMobileNo" id="AlternateMobileNo" placeholder="Alternate Mobile Number" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10"/>
                             </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input class="form-control input-md" type="text" name="PersonalEmailID" id="PersonalEmailID" required/>
                                </div>
                              </div>

                              <div class="row" style="margin-left: 0px;">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input class="form-control input-md" type="text" name="AadhaarNumber" id="AadhaarNumber" placeholder="Aadhar Number" oninput="aadhar('AadhaarNumber')"  minlength="12" maxlength="12"  />
                                <div id="aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                                </div>
                              </div>
                            </div>
                            <hr style="color:transparent; width:100%">

                              <h4 >Where Do You Stay</h4>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input class="form-control input-md" type="text" placeholder="Address Line 1" name="CurrentAddress1" id="CurrentAddress1" required />
                                </div>
                               </div>

                               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                   <input class="form-control input-md" placeholder="Address Line 2" type="text" name="CurrentAddress2" id="CurrentAddress2" required" />
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                   <input class="form-control input-md" type="text" name="CurrentAddress3" id="CurrentAddress3" placeholder="Address Line 3" required/>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input class="form-control input-md" type="text" name="CurrentPin" id="CurrentPin" placeholder="Pincode" required minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-md" name="CurrentState" id="CurrentState"  required>
                                    <option selected value="">Select State</option>
                                    </select>
                                   </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                  <select class="form-control input-md" name="CurrentCity" id="CurrentCity" required>
                                  <option selected value="">Select City</option>
                                  </select>                                
                                  </div>
                              </div>


                                <div class="col-md-12"> <p class="agree"><input type="checkbox" name="same" id="same_id" onclick="same_as_above('same_id');"/> Same As Above</p></div>
                                <hr style="color:transparent; width:100%">
                                <h4 >Permanent Address</h4>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                <input id="PermanentAddress1" name="PermanentAddress1" type="text" placeholder="Address Line 1" class="form-control input-md" required="required">
                                 </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                <input id="PermanentAddress2" name="PermanentAddress2" type="text" placeholder="Address Line 2" class="form-control input-md" required="required">
                                   </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                      <input id="PermanentAddress3" name="PermanentAddress3" type="text" placeholder="Address Line 3" class="form-control input-md" required="required">
                                       </div>
                                  </div>

                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                      <input id="PermanentPin" name="PermanentPin" type="text" placeholder="Pincode" class="form-control input-md" required="required" minlength="6" maxlength="6">
                                       </div>
                                  </div>


                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                  <div class="form-group">
                                    <select class="form-control input-md" name="PermanentState" id="PermanentState"  required>
                                    <option selected value="0">Select State</option>
                                    </select>
                                   </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                  <select class="form-control input-md" name="PermanentCity" id="PermanentCity" required>
                                  <option selected value="">Select City</option>
                                  </select>                                
                                  </div>
                              </div>
                              <hr style="color:transparent; width:100%">

                              <div class="row" style="margin-left: 0px;">
                                <h4 >Residence Information</h4>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">                                                     
                                      <select class="form-control input-md" id="Residencetype" name="Residencetype" required>
                                        <option selected value="">Recidence Type</option>
                                        <option value="Rented">Rented</option>
                                        <option value="Owned ">Owned</option>
                                    </select>
                                   </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group"> 
                                      <select class="form-control input-md" id="PermanentResidenceType" name="PermanentResidenceType" required>
                                          <option selected value="">Permanent Residence Type</option>
                                          <option value="Rented">Rented</option>
                                          <option value="Owned">Owned</option>
                                      </select>
                                    </div>
                                  </div>



                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                    <input class="form-control input-md" name="ResidenceStability" id="ResidenceStability" placeholder="Period of Residence (In Months)" onkeypress="return fnAllowNumeric(event)" type="text"  minlength="2" maxlength="3" required />
                                   </div>
                              </div>
                               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> </div>

                              </div>
                              <hr style="color:transparent; width:100%">

                              <h4 >Personal Information</h4>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select class="form-control input-md" name="Education" id="Education" required>
                                 <option selected value="">Education</option>
                              </select>
                             </div>
                           </div>

                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select class="form-control input-md" name="PurposeofLoan" id="PurposeofLoan" required>
                               <option selected value="">Purpose Of Loan</option>
                            </select>
                             </div>
                           </div>

                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select class="form-control input-md" name="MaritalStatus" id="MaritalStatus" required>
                                 <option selected value="">Marital Status</option>
                                 <option value="N">Single</option>
                                 <option value="Y">Married</option>
                              </select>
                             </div>
                           </div>

                           <hr style="color:transparent; width:100%">

                           <h4 >Employment Details</h4>

                           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md lastReporteddate1" placeholder="Joining Date" type="text" name="joining_date" id="joining_date" required />
                             </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" type="text" name="CurrentWorkExp" id="CurrentWorkExp" placeholder="Current Work Experience (In Months)" onkeypress="return fnAllowNumeric(event)" required />
                             </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-control input-md" type="text" name="TotalWorkExp" id="TotalWorkExp" placeholder="Total Work Experience (In Months)" onkeypress="return fnAllowNumeric(event)" required />   
                              </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                    <input class="form-control input-md" type="text" name="CompanyAddress1" id="CompanyAddress1" placeholder="Company Address 1" required />
                                 </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                     <input class="form-control input-md" placeholder="Company Address 2" type="text" name="CompanyAddress2" id="CompanyAddress2" required />
                                   </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                    <input class="form-control input-md" type="text" name="CompanyAddress3" placeholder="Company Address 3" id="CompanyAddress3" required />            
                                  </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="OfficeEmailID" id="OfficeEmailID" placeholder="Office Email ID" oninput="office_email('OfficeEmailID')" required />
                                </div>
                                <div id="office_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input placeholder="Company Pincode" class="form-control input-md" type="text" name="CompanyPin" id="CompanyPin" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)" />
                                </div>
                                <div id="office_email" style="display:none;color: red;">Please Enter Valid Pincode.</div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CompanyState" id="CompanyState" required>
                                    <option selected value="">Select State</option>
                                   </select>
                                 </div>
                               </div>

                               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CompanyCity" id="CompanyCity" required>
                                          <option selected value="">Select City</option>
                                      </select>
                                    </div>
                                  </div>

                                  

                              <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                  <label class="switch">                             
                               Add Co-Applicant     
                                <input type="checkbox" id="co_applicant_DI" value="1" name="CoapplicantFlag"> 
                              <input type="hidden" id="co_applicant_DI" name="CoapplicantFlag" value="0">
                              </label>
                                  </div>
                                </div> -->

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select id="CoapplicantFlag" class="form-control input-md" name="CoapplicantFlag">
                                    <option selected disabled="">If Co-Applicant Exist</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                              </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                               <a class="btn btn-default btn-sm applicant" id="applicant_form" href="javascript:void(0);">NEXT</a>
                              </div>

                              <hr style="color:transparent; width:100%">
                        </div>
                      </div>

                    </form>
                    <!-- Applicant detail form close -->

                    <!-- coaaplicant details -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px;display: none;" id="co_applicant">
                        <div class="how-it-block1 bg-boxshadow" style=" min-height: auto;float: left;">
                          <div id="" style="" >
                            <form id="co_applicant_details" name="co_applicant_details" method="POST">
                             {{ csrf_field() }}
                             <h4>Tell Us a Bit About Co-applicant</h4>
                             <input class="input__field input__field--nao" type="hidden" name="CoKYCFlag" required id="CoKYCFlag" value="1"/>

                             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <input class="form-control input-md" type="text" name="CoCompanyName" required id="CoCompanyName" placeholder="Company Name" onkeypress="return AllowAlphabet(event)" />
                              </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoMonthlySalary" required id="CoMonthlySalary" placeholder="Monthly Salary" onkeypress="return fnAllowNumeric(event)" />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoMonthlyObligation" required id="CoMonthlyObligation" placeholder="Monthly obligation" onkeypress="return fnAllowNumeric(event)" />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="RelationwithApplicant" id="RelationwithApplicant" required>
                                      <option selected value="Relation With Applicant"></option>
                                      <option value="Father">Father</option>
                                      <option value="Mother">Mother</option>
                                      <option value="Brother">Brother</option>
                                      <option value="Sister">Sister</option>
                                      <option value="Niece">Niece</option>
                                      <option value="Nephew">Nephew</option>
                                      <option value="Son">Son</option>
                                      <option value="Daughter">Daughter</option>
                                      <option value="Self">Self</option>
                                      <option value="Spouse">Spouse</option>
                                      <option value="Other">Other</option>
                                    </select>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoFName" required id="CoFName" placeholder="First Name" onkeypress="return AllowAlphabet(event)" />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoMName" id="CoMName" onkeypress="return AllowAlphabet(event)" placeholder="Middle Name" />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoLName" id="CoLName" required onkeypress="return AllowAlphabet(event)" placeholder="Last Name" />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoPAN" id="CoPAN" oninput="co_pan_card('CoPAN')" placeholder="Pan Card No*" required minlength="10" maxlength="10" />
                                </div>
                                <div id="co_pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!
                              </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md lastReportedcodate1" type="text" placeholder="Date Of Birth" id="CoDOB" name="CoDOB" required />
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CoGender" id="CoGender" required>
                                    <option selected value="">Gender</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                  </select>
                                </div>
                              </div>

                              <hr style="color:transparent; width:100%">

                              <h4 >Where Can We Reach you</h4>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoMobileNo" id="CoMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" placeholder="Mobile Number" required />
                                </div>
                              </div>

                               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoAlternateMobileNo" id="CoAlternateMobileNo" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10" placeholder="Alternate Mobile" />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoAadhaarNumber" id="CoAadhaarNumber" oninput="co_aadhar('CoAadhaarNumber')" required minlength="12" maxlength="12" placeholder="Enter Your Aadhar No."  />
                                </div>
                                <div id="co_aadhar_number" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoPersonalEmailID" id="CoPersonalEmailID" oninput="co_mail('CoPersonalEmailID')" placeholder="Email Id" required />
                                </div>
                                <div id="co_email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                                </div>

                                <hr style="color:transparent; width:100%">

                              <h4 >Employment Details</h4>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoCurrentWorkExp" id="CoCurrentWorkExp" onkeypress="return fnAllowNumeric(event)" placeholder="Current Work Experience (In Months)" required />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoTotalWorkExp" id="CoTotalWorkExp" onkeypress="return fnAllowNumeric(event)" placeholder="Total Work Experience  (In Months)" required />
                                </div>
                                </div>

                                <hr style="color:transparent; width:100%">

                              <h4 >Where Co-Applicant Stays</h4>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoCurrentAddress1" id="CoCurrentAddress1" placeholder="Address Line 1" required />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoCurrentAddress2" id="CoCurrentAddress2" placeholder="Address Line 2" required" />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoCurrentAddress3" id="CoCurrentAddress3" placeholder="Address Line 3" required/>
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                   <input class="form-control input-md" type="text" name="CoCurrentPin" id="CoCurrentPin" required minlength="6" maxlength="6" onkeypress="return fnAllowNumeric(event)" placeholder="Pincode" />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CoCurrentState" id="CoCurrentState" required>
                                    <option selected value="">State</option>
                                   </select>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CoCurrentCity" id="CoCurrentCity" required>
                                    <option selected value="">City</option>
                                  </select>
                                </div>
                                </div>

                                <div class="col-md-12"> 
                                  <input type="checkbox" name="co_same" id="co_same_id" onclick="co_same_as_above('co_same_id');"/> Same As Above</div>
                                <hr style="color:transparent; width:100%">
                                <h4 >Permanent Address</h4>                          

                                

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoPermanentAddress1" id="CoPermanentAddress1" placeholder="Address Line 1" required />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoPermanentAddress2" id="CoPermanentAddress2" placeholder="Address Line 2" required />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <input class="form-control input-md" type="text" name="CoPermanentAddress3" id="CoPermanentAddress3" placeholder="Address Line 3" required />
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input class="form-control input-md" type="text" name="CoPermanentPin" id="CoPermanentPin" required minlength="6" maxlength="6" placeholder="Pincode" onkeypress="return fnAllowNumeric(event)" />
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CoPermanentState" id="CoPermanentState" required>
                                  <option selected value="">State</option>
                                  </select>
                                </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="CoPermanentCity" id="CoPermanentCity" required>
                                    <option selected value="">City</option>
                                  </select>
                                </div>
                                </div>

                                <div class="col-md-12">
             <a class="btn btn-primary btn-outline with-arrow mrg-top applicant" id="co_applicant_form" href="javascript:void(0);">NEXT<i class="icon-arrow-right"></i></a>
            </div>





                           </form>
                         </div>
                       </div>
                     </div>
              <!-- coaaplicant details end -->

              </div>
              <!-- Applicant detail div close -->

              <!-- adhaar OTP  -->
              
              <div id="otp" style="display: none;">
                <form name="aadharotp" id="aadharotp" method="POST">
                  {{ csrf_field() }}
                  <div class="col-lg-12">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th scope="col">Company Name:</th>
                                                <th scope="col">Monthly Salary:</th>
                                                <th scope="col">Current EMI:</th>                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span id="comp_name"></span></td>
                                                <td><i class="fa fa-inr"></i> <span id="salary"></span></td>
                                                <td><i class="fa fa-inr"></i> <span id="paying_emi"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br><br> 
                         <table class="">
                          <thead>
                            <tr>
                              <th colspan="5" style="text-align: center;">Loan Details</th>
                            </tr>
                              <tr>
                                <th scope="col">Loan Amount</th>
                                <th scope="col">Rate of Interest</th>
                                <th scope="col">EMI</th>
                                <th scope="col">Loan Tenure</th>
                                <th scope="col">Processing Fees</th>                                           
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><i class="fa fa-inr"></i> <span id="loanamt"></span></td>
                                <td><span id="intrest"></span>%</td>
                                <td><i class="fa fa-inr"></i> <span id="e_m_i"></span></td>
                                <td><span id="loantenure"></span></td>
                                <td><span id="process_fee"></span></td>
                              </tr>
                            </tbody>
                         </table>      
                       </div>
                                       
                <h4>OTP to verify your Aadhar Details:</h4>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                 <input class="form-control input-md" type="text" name="Aadharno" id="Aadharno" oninput="aadharnum('Aadharno')" required minlength="12" maxlength="12" placeholder="Enter Your Aadhar No" />
               </div>
               <div id="aadhar_no" style="display:none;color: red;">Oops.Please Enter Valid Aadhar Number.!!</div>
              </div>

              <div class="col-md-12"><a class="btn btn-primary btn-outline with-arrow mrg-btm otp" id="aadhar_otp" href="javascript:void(0)">Get OTP<i class="icon-arrow-right"></i></a></div>

              <h4>Proceed Without aadhar Number</h4>

              <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed_without_aadhar" href="javascript:void(0)">Click  Here<i class="icon-arrow-right"></i></a>

                </form>
              </div>
            
              <!-- adhaar OTP end -->

              <!-- confirm otp -->
              <div id="confirm_otp" style="display: none;">
                <form name="confirm_aadharotp" id="confirm_aadharotp" method="POST">
                {{ csrf_field() }}
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input class="form-control input-md" name="otp" id="OTP" type="text" onkeypress="return fnAllowNumeric(event)" placeholder="Enter OTP" required/>
                  </div>
                </div>
                <div class="col-md-12 mrg-btm"><a class="btn btn-primary btn-outline with-arrow mrg-top" id="confirm" href="javascript:void(0)">Confirm<i class="icon-arrow-right"></i></a>
                </div>
              </form>
              </div>
              <!-- confirm otp end -->

              <!-- InstantApproval -->
              <div id="Instant_Approve" style="display: none;">
                <form name="instant_form" id="instant_form" method="POST">
                  {{ csrf_field() }}
                  <div class="col-md-12">
                  <h3>Congratulation!!<i><b class="text-primary"><span id="first_name"></span></b></i>&nbsp;You are eligible for a loan of <b>₹<span id="maxloan"></span></b> </h3>
                    <br>
                    <h5>You Are Applicable For Minimum Loanamount&nbsp;&nbsp;<b>₹<span style="color: red" id="minloanamt"></span></b> & Minimum Tenure&nbsp;&nbsp; <b><span style="color: red" id="minTenure"></span>(in months)</b></h5>
                  </div>

                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <input class="form-control input-md" type="hidden" name="TotalPayableAmount" id="PayableAmount" required  value="" />
                        <input class="form-control input-md" type="text" name="AppliedLoanamount" id="Applied"  onkeypress="return fnAllowNumeric(event)" placeholder="Loan Amount" value="" required />
                        </div>
                      </div>

                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="form-group">
                      <input class="form-control input-md" type="text" name="Tenure" id="Period"  onkeypress="return fnAllowNumeric(event)" placeholder="Loan Tenure(in years)" value="" required />
                        </div>
                      </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input class="form-control input-md" type="text" name="Emi" onkeypress="return fnAllowNumeric(event)" placeholder="Emi"  readonly="readonly" value=""  />
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input class="form-control input-md" type="text" name="ROI"  onkeypress="return fnAllowNumeric(event)" value="" placeholder="ROI" readonly="readonly" />
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input class="form-control input-md" type="text" name="Processingfee"  onkeypress="return fnAllowNumeric(event)" value="" placeholder="Processing fee" readonly="readonly"  />
                            </div>
                          </div>

                          <hr>
                          <div class="col-md-12 text-danger mar-top">
                            <input type="checkbox" name="check" required /> I Agree to all the terms and conditions.
                          </div>

                          
                              <div class="col-md-12">
                                 <a class="btn btn-primary btn-outline with-arrow mrg-top" id="instant_approve" href="javascript:void(0)">Get Instant Approve<i class="icon-arrow-right"></i></a>
                               </div>                        

               </form>
              </div>
              <!-- InstantApproval end -->

              <!-- UploadDetails -->
              <div id="upload" style="display: none;" >
                <form name="upload_details" id="upload_details" enctype="multipart/form-data" method="POST">
                  {{ csrf_field() }}
                  <div class="col-md-12">
                   <h1 class="text-center"><i>Congratulation</i></h1>
                   <h3 class="text-info pad">Your Personal Loan of<b>₹<span id="personal_loan_amount"></span></b></h3>
                   <table>
                    <thead>
                        <tr>
                          <th colspan="5" style="text-align: center;">Loan Details</th>
                            </tr>
                              <tr>
                                <th scope="col">Rate of Intrest</th>
                                <th scope="col">Processing Fees</th>
                                <th scope="col">EMI</th>
                                <th scope="col">Loan Tenure</th>                                           
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><b><span id="intst"></span>%</b></td>
                                <td><b><span id="fees"></span>%</b></td>
                                <td><b>₹<span id="installment_amount"></span></b></td>
                                <td><span id="LoanTenure"></span></td>
                                <td><b><span id="perid"></span>years</b></td>
                              </tr>
                            </tbody>
                            </table>

                            <h4>Our representive will get in touch with you. Please proceed to upload the necessary document for quick disbursal to learn more about IIFL Express loan </h4>
                          </div>

                           <div class="col-md-8 col-md-offset-2">
                <h3 class="text-center pad">Non Financial Documents</h3>
                <ul class="ull">
                   <li>Identity Proof <input type="file" name="identity_proof" id="identity_proof" class="pull-right" required data-category="1" />
                   <select  name="sub_catg[1]"  required id="identity_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>

                   </li>
                   
                 
                   <li>Address Proof <input type="file" name="address_proof" id="address_proof" class="pull-right" data-category="2" required />
                    <select  name="sub_catg[2]"  required id="address_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>
                   </li>
                   <li>Property Ownership Proof <input type="file" name="ownership_proof" id="ownership_proof" class="pull-right" required data-category="3"/>
                    <select  name="sub_catg[3]"  required id="ownership_proof_select" class="drop-arr ">
                    <option disabled selected value="">Select</option>
                      
                    </select>

                   </li>
                  
                </ul>
                <div class="col-md-12">
                    <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed_upload">Proceed<i class="icon-arrow-right"></i></a>
                </div>
                </div>


                </form>
              </div>
              <!-- UploadDetails end -->
              <!-- financial doc -->
              <div id="financial_doc" style="display: none;" >
                    <form name="financial_details" id="financial_details" enctype="multipart/form-data" method="POST">
                     {{ csrf_field() }}
                          <hr>
                            <h4>Financial Documents</h4>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <input class="form-control input-md" type="text" name="BankName" id="BankName" required onkeypress="return AllowAlphabet(event)" />
                             </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                  <select class="form-control input-md" name="Accounttype" id="Accounttype" required>
                                      <option selected value="">Select A/C Type</option>
                                  </select>
                                </div>
                              </div>

                              <h4>Bank Statement</h4>
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="form-group">
                                      <select class="form-control input-md" name="sub_catg[]" id="BankStatement" required>
                                          <option selected value="">Bank Statement</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <input class="form-control input-md" type="text" name="IFSC" id="IFSC" required onkeypress="return AllowAlphabet(event)" />
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <select class="form-control input-md" name="sub_catg[]" id="SalarySatement" required>
                                          <option selected value="">Salary Statement</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="input input--nao"><input type="file" name="SalarySatement"/></div>

                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <select class="form-control input-md" name="Statementtype" id="Statementtype" required>
                                        <option selected value="">Statement Type</option>
                                        <option value="Manual">Manual</option>
                                        <option value="E-verify">E-verify</option>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-md-12">
                    <a class="btn btn-primary btn-outline with-arrow mrg-top" id="proceed">Proceed<i class="icon-arrow-right"></i></a>
                </div>

                          
                          </form>
                        </div>
                <!-- financial doc end-->


              </div>
            </div>
          </div>
        </div>

@include('layout.script')
@include('layout.footer')
<!-- script -->

<script type="text/javascript">
  $(document).ready(function(){
    $('#co_applicant_DI').change(function(){

      $('.co_applicant_DI').val('1');
     
        if(this.checked)
           $('#co_applicant').show();
         // $('#co_applicant_DI').val('YES');
         else
         $('#co_applicant').hide();
         // $('#co_applicant_DI').val('YES');           

    });
  });
</script>


<script type="text/javascript">
  function AllowAlphabet(e)
{
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    // alert('Please Enter Only Character values.');
    return false;
      }
}
</script>


<script type="text/javascript">
  function mail(obj,val){
    // //console.log(obj);
    if(obj=='EmailID' ){
                   var str =$('#EmailID').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
   function co_mail(obj,val){
    // //console.log(obj);
    if(obj=='CoPersonalEmailID' ){
                   var str =$('#CoPersonalEmailID').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#co_email').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#co_email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function office_email(obj,val){
    // //console.log(obj);
    if(obj=='OfficeEmailID' ){
                   var str =$('#OfficeEmailID').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                      $('#office_email').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#office_email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">    

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city_name").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
          $(".search_city_name").val("");
          $(".search_city_name").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>
<script type="text/javascript">
$(document).ready(function(){
  src = "{{ route('searchiiflcompanyajax') }}";
    $(".search_company").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           console.log(data);
            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
            
          $(".search_company").attr("data-value","Non CAT"); 
          $("#Company_Cat").val("Non CAT");
          // $(".search_company").attr("disabled", false);

         
        }else{
            $(".search_company").attr("data-value", ui.item.datavalue);
            $("#Company_Cat").val(ui.item.datavalue);       
          
             }
           }

        
      });
   });
</script>

<script type="text/javascript">
    function aadhar(obj,val){
        // //console.log(obj);
        if(obj=='AadhaarNumber' ){
                   var str =$('#AadhaarNumber').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // //console.log('Aadhar No. is valid one.!!');
                        $('#aadhar_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#aadhar_number').show();

                    return false;
                  }
                  
    }
}
        function co_aadhar(obj,val){
        // //console.log(obj);
        if(obj=='CoAadhaarNumber' ){
                   var str =$('#CoAadhaarNumber').val();
                   var aadharcardPattern = /^\d{4}\d{4}\d{4}$/;
                   var res = str.match(aadharcardPattern);
                   if(res){
                     // //console.log('Aadhar No. is valid one.!!');
                        $('#co_aadhar_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Aadhar No..!!');
                    $('#co_aadhar_number').show();

                    return false;
                  }
                  
    }
}
</script>
<script type="text/javascript">
    function pan_card(obj,val){
        // //console.log(obj);
        if(obj=='PAN' ){
                   var str =$('#PAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
    function co_pan_card(obj,val){
        if(obj=='CoPAN' ){
                   var str =$('#CoPAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // //console.log('Pancard is valid one.!!');
                        $('#co_pan_number').hide();

                  }else{
                    // //console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#co_pan_number').show();

                    return false;
                  }
                  
    }

    }
</script>
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "ddmmyy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>
 <!-- Co-applicant Dob -->
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReportedcodate1").datepicker({ dateFormat: "ddmmyy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var global_state='';
    // $('.otp').click(function(){
    //     alert('ok');
        

    //     var aadhar= $('#aadhar_num').val();
    //     var v_token = "{{csrf_token()}}";
    //     $.ajax({  
    //      type: "POST",  
    //      url: "{{URL::to('apply-iifl-loan-otp')}}",
    //      data: {
    //      "AadhaarNumber":aadhar,'_token': v_token},
    //      success: function(msg){
    //     //console.log(msg);
            
          

    //     }  
    //   }); 



    // });

    $(document).ready(function(){
        // alert('ok');
        var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-otp')}}",
         data: {
         '_token': v_token},
         success: function(msg){       
            populate_state(msg,'CurrentState');
            // populate_state(msg,'PermanentState');
            populate_state(msg,'CoCurrentState');
            populate_state(msg,'CoPermanentState');
            populate_state(msg,'CompanyState');

    }

    })
        function populate_state(msg,id){
            ////console.log(msg+" "+id);
             var mySelect = $('#'+id);
            $.each(msg, function(id,state) {
               
                // //console.log(state.state_Name +"  " +state.state_id);
                mySelect.append(
                    $('<option></option>').val(state.state_id).html(state.state_Name)
                );
            });
        }
});
</script>
<script type="text/javascript">
   $(document).ready(function(){
    dropdown_populate_api_call('CityMaster');
    dropdown_populate_api_call('EducationMaster');
    
    dropdown_populate_api_call('PurposeofLoan');
    dropdown_populate_api_call('IDProof');
    dropdown_populate_api_call('AddressProof');
    dropdown_populate_api_call('OwnershipType');
    dropdown_populate_api_call('AccountType');
    dropdown_populate_api_call('BankStatement');
    dropdown_populate_api_call('SalarySatement');
    });
   function dropdown_populate_api_call(param){
     var v_token = "{{csrf_token()}}";
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('apply-iifl-loan-dropdown')}}?param="+param,
         data: {
         '_token': v_token},
         success: function(msg){

            // //console.log(msg);
            if(param=='CityMaster'){
             
                populate_city_education(msg,'CurrentCity');
                // populate_city_education(msg,'PermanentCity');
                populate_city_education(msg,'city');
                populate_city_education(msg,'CoCurrentCity');
                populate_city_education(msg,'CoPermanentCity');
                populate_city_education(msg,'CompanyCity');

            }else if(param=='EducationMaster'){
                populate_city_education(msg,'Education');
            }
            else if(param=='PurposeofLoan'){
                populate_city_education(msg,'PurposeofLoan');
            }
            else if(param=='IDProof'){
                populate_city_education(msg,'identity_proof_select');
            }
            else if(param=='AddressProof'){
                populate_city_education(msg,'address_proof_select');
            }
            else if(param=='OwnershipType'){
                populate_city_education(msg,'ownership_proof_select');
            }
            else if(param=='AccountType'){
                populate_city_education(msg,'Accounttype');
            }
            else if(param=='BankStatement'){
                populate_city_education(msg,'BankStatement');
            }
            else if(param=='SalarySatement'){
                populate_city_education(msg,'SalarySatement');
            }
    }
   

    });
         function populate_city_education(msg,id){
             
             var mySelect = $('#'+id);
            $.each(msg, function(id,city) {
                mySelect.append(
                    $('<option></option>').val(city.id).html(city.value)
                );
            });
        }
   }
</script>

<!-- <script>
$(document).ready(function(){
    $("#Monthly_Salary").blur(function(){
       var sal = $('#Monthly_Salary').val();
           if (sal < 25000) 
           {
             alert('Your Net Income Should Be Greater than 25000 OR 25000');
            // $("#Monthly_Salary").focus();
             return false;
           }
    });
});
</script> -->

<script type="text/javascript">
var global_eligible_amount=0;
var global_tenure=0;
var $ = jQuery;
// $.noConflict();
    $('.next').click(function(event){
      // alert('hii');
    // event.preventDefault();
    
    if(!$('#iifl_express_loan').valid()){
    // alert('not valid');
         return false;
    }else{ //alert('okae');
           var net_income = $('#Monthly_Salary').val();
           if (net_income < 25000) 
           {
             alert('Your Net Income Should Be Greater Than 25000 OR 25000');
             // $('#Monthly_Salary').val("");
             return false;
           }
           var mobile =$('#Mob_Num').val();
           if (mobile.length<10) 
           {
            alert('Contact Number Should Be Of 10 digits.');
            return false;
           }
            $('#iifl_express_loan').hide();
            $('#Eligibility_details').show();
            // $("#Eligibility_details").css("display", "block");
            var email_address = $('#EmailID').val();
            // //console.log(email_address);
            $('#PersonalEmailID').val(email_address);
            $('#Email').val(email_address);
            $('#Email').closest( "span" ).addClass( "input--filled" );

            var mob_number = $('#Mob_Num').val();
            $('#MobileNo').val(mob_number);
            $('#MobilePhone').val(mob_number);
            $('#MobilePhone').closest( "span" ).addClass( "input--filled" );

            var stay_at = $('#city').val();
            // //console.log(stay_at);
            // $('#CurrentCity').val(stay_at);
            // $('#CurrentCity').closest( "span" ).addClass( "input--filled" );
            //$('#PermanentCity').val(stay_at);
            $('#City').val(stay_at);
            // var name= $('#Company_Name option:selected').text();
            var name = $('#Company_Name').val();
            // //console.log(name);
            var company =$('#Company_Name').attr('data-value');
            $('#CompanyNm').html(name);
            $('#CompanyName').val(name);
            $('#Name').html(name);
            $('#comp_name').html(name);

            var income = $('#Monthly_Salary').val();
            $('#Income').empty().append(income);
            $('#Salary').empty().append(income);
            $('#MonthlySalary').val(income);
            $('#salary').empty().append(income);

            var emi= $('#Monthly_Obligation').val();
            if(!emi){emi=0};
            $('#Current_EMI').empty().append(emi);

            $('#Current').empty().append(emi);
            $('#MonthlyObligation').val(emi);
            $('#paying_emi').empty().append(emi);
// console.log()
         $.ajax({  
                type: "POST",  
                url: "{{URL::to('iifl-eligibility')}}",
                data : $('#iifl_express_loan').serialize(),
                success: function(msg){
                        var data=msg[0];
                        console.log(msg);
                        var result=loan_eligibility_calc(data.Max_Tenure,data.pf,data.roi,data.foir);
                        console.log(msg);
                
                        
    }  
      });
        }

    });
    function loan_eligibility_calc(tenure,pf,roi,foir){
        console.log(foir);
        console.log(tenure+"  " +pf+ "  "+roi);
        var processing_fee =pf;
        $('#fee').empty().append(processing_fee);
        $('#Processingfee').val(processing_fee);
        var period =tenure*12;
        $('#period').empty().append(tenure);
        var rate =roi/12/100;
        var int =roi;
        $('#interest').empty().append(int);
        // //console.log(period);
        var salary=$('#Monthly_Salary').val();
        var obligation=$('#Monthly_Obligation').val();
        // //console.log(salary);
        // //console.log(obligation);

        var foir_calc = (salary)*foir/100;
        // //console.log(foir_calc);
        var max_emi = foir_calc-obligation;
        // //console.log(max_emi);
        $('#EMI').val(max_emi);
         $('#you_have_to_pay').empty().append(max_emi);

         global_tenure=tenure;
        $('#tenure').val(tenure);
        var a =(rate*(Math.pow(1 + rate,period) / (Math.pow(1 + rate,period) - 1)));
         // //console.log(a);
        var amount =max_emi/a;
        var eligible_amount=Math.round(amount);
        // //console.log(eligible_amount);
        $('#eligible').empty().append(eligible_amount);
        global_eligible_amount=eligible_amount;
        $('#AppliedLoan').val(eligible_amount);

      }
</script>

<script type="text/javascript">
     
    $('#next_form').click(function(){
        var amount=$('#AppliedLoan').val();
       if(amount> global_eligible_amount){
            alert('Enter amount less than or equal to eligible amount');
            return false;
        }
        var divas =$('#tenure').val();
        if(divas> global_tenure){
            alert('Enter tenure less than or equal to required tenure');
            return false;
        }
        if(! $('#eligibility_form').valid() ){
            alert("You must agree to the terms first.");
         }else{
            var a = $('#int span').html();
            var days =$('#tenure').val();
            var no_of_days= days*12;
            var applied_loan=$('#AppliedLoan').val();
            var fee=$('#fee').text();
            console.log(fee);
            var processing=fee/100*applied_loan;
            console.log(processing);
            $('#Processingfee').val(processing);

            var EMI=$('#EMI').val();
            // //console.log(EMI);
            $('#Eligibility_details').hide();
            $('#iifl-lead').show();
            // $('#Applicant_Details').show();
            $('#Amount').empty().append(applied_loan);
            $('#loanamt').empty().append(applied_loan);
            $('#LoanTenure').empty().append(days);
            $('#loantenure').empty().append(days);
            $('#RateOfInt').empty().append(a);
            $('#intrest').empty().append(a);
            $('#AppliedLoanamount').val(applied_loan);
            $('#Tenure').val(days);
            $('#ROI').val(a);
            $('#Emi').val(EMI);
            $('#EquatedMonthly').text(EMI);
            $('#e_m_i').text(EMI);
            $('#ProcessFee').text(fee);
            $('#process_fee').text(fee);
            $('#TotalPayableAmount').val(applied_loan);
            //appending offer div also
            $('#loanamt').val(applied_loan);
            $('#loantenure').val(days);
            $('#intrest').val(a);
            $('#ProcessFee').val(fee);
            $('#e_m_i').val(EMI);  

            $.ajax({
              type: "POST",  
              url: "{{URL::to('iifl-token')}}",
              data :$('#eligibility_form').serialize(),
              success: function(msg){
                console.log(msg);
                $('#Token').val(msg);
                $('#Token').closest( "span" ).addClass( "input--filled" );

              }
            });       
         }

    });
    $('#AppliedLoan, #tenure').on('input', function () {
        var applied_loan = parseInt($('#AppliedLoan').val());
        var no_of_days = parseFloat($('#tenure').val())*12;
        var a = $('#int span').html();
        var Rate = a/12/100;
        var installment_iifl=applied_loan * Rate * (Math.pow(1 + Rate, no_of_days) / (Math.pow(1 + Rate, no_of_days) - 1));
        var installment =Math.round(installment_iifl);
        if(isNaN( installment) || installment=='Infinity'){
          installment=0;
        }
        $('#EquatedMonthly').empty().append(installment);
        $('#EMI').val(installment);
        $('#e_m_i').empty().append(installment);
        $('#Emi').val(installment);
        var total =((installment*no_of_days)-applied_loan);
        
        var ttl_payment = parseInt(applied_loan) + parseInt(total);
         $('#TotalPayableAmount').val(ttl_payment);
    
});
</script>

<script type="text/javascript">
    $('.lead_save').click(function(){
        
     if(! $('#iifl_lead').valid() ){
            
         }else{
            var name=$('#FirstName').val();
            $('#FName').val(name);
            var lname=$('#LastName').val();
            $('#LName').val(lname);
             $('#iifl-lead').hide();
            $('#Applicant_Details').show();
            $.ajax({  
             type: "POST",  
             url: "{{URL::to('iifl-lead-save')}}",
             data : $('#iifl_lead').serialize(),
             success: function(msg){
                console.log(msg[0].ID);
                $('#CRMLeadId').val(msg[0].ID);
              
            
         }  
      });
         }
    });
</script>

<script type="text/javascript">
    $('#applicant_form').click(function(){
        if ($('#FName').val().length<3) {
                alert('First Name should be more than 3 characters.')
              return false;
            }
       
        if(! $('#applicant_deatils').valid()){
            // alert('not valid');

        }else{
            
            
            var person_name =$('#FName').val();
            // //console.log(person_name);
            $('#first_name').empty().append(person_name);
            var aadhar=$('#AadhaarNumber').val();
            $('#Aadharno').val(aadhar);
            $('#Applicant_Details').hide();
             $(".iframeloading").show();
           
           $.ajax({  
             type: "POST",  
             url: "{{URL::to('apply-iifl-loan-applicant1')}}",
             data : $('#applicant_deatils').serialize(),
             success: function(msg){
                 $(".iframeloading").hide();
                
            ////console.log(msg);

             if (msg.head.status != "1") {
                 if($( "input[name=CoapplicantFlag]:checked" ).val()==1)
                {
                     $('#co_applicant').show();
                     // alert('hii');
                }else{
                     $('#otp').show();
                }
             // if (msg.head.status != "1") {
             //  // $("#CoapplicantFlag option:selected").val();
             //     if($("#CoapplicantFlag option:selected").val()==1)
             //    {
             //         $('#co_applicant').show();
             //         // alert('hii');
             //    }else{
             //         $('#otp').show();
             //    }
                      
            } else{
                 alert("Reason: "+msg.head.status_description);   
                 $('#Applicant_Details').show();
                 return false;
            }
            
         }  
      }); 
        }

    });
</script>

<!-- Co-applicant Ajax -->
<script type="text/javascript">
    $('#co_applicant_form').click(function(){
        // alert('ok');
        if(! $('#co_applicant_details').valid()){
             // alert('not valid');

        }else{
            var aadhar=$('#AadhaarNumber').val(); 
            $('#Aadharno').val(aadhar);
            $('#Applicant_Details').hide();
            $('#co_applicant').hide();
            $('#otp').show();
            $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-coapplicant')}}",
         data : $('#co_applicant_details').serialize(),
         success: function(msg){
            
         }  
      }); 
        }

    });
    
</script>
<!-- Instant Approve -->
<script type="text/javascript">
    $('#instant_approve').click(function(){
        var amt=$('#Applied').val();
       if(amt> global_amount){
            alert('Enter amount less than or equal to eligible amount');
            return false;
        }
        var diebus =$('#Period').val();
        if(diebus> global_days){
            alert('Enter tenure less than or equal to required tenure');
            return false;
        }
    if(! $('#instant_form').valid()){
            alert("You must agree to the terms first.");
            return false;
        }else{

         $.ajax({  
             type: "POST",  
             url: "{{URL::to('iifl-instant-eligibility')}}",
             data : $('#instant_form').serialize(),
             success: function(msg){
                // //console.log(msg);
                  $('#otp').hide();
                  $('#Instant_Approve').hide();   
                  $('#upload').show();

             }  
            }); 
            
        }
    });
$('#Applied, #Period').on('input', function () {
               
            var applied_loan = parseInt($('#Applied').val());
            // //console.log(applied_loan);
            var no_of_days = parseFloat($('#Period').val());
            // //console.log(applied_loan);
            var a = ($("input[name='ROI']").val());
            // //console.log(a);
            var Rate = a/12/100;
            // //console.log(Rate);
            var installment_iifl=applied_loan * Rate * (Math.pow(1 + Rate, no_of_days) / (Math.pow(1 + Rate, no_of_days) - 1));
            var installment =Math.round(installment_iifl);
            if(isNaN( installment) || installment=='Infinity'){
              installment=0;
            }
            $("input[name='Emi']").val(installment);
            var total =((installment*no_of_days)-applied_loan);
            
            var ttl_payment = parseInt(applied_loan) + parseInt(total);
             $("#PayableAmount").val(ttl_payment);
        
}); 
    
</script>

<!-- aadhar oyp &verify otp -->
<script type="text/javascript">
    $('#aadhar_otp').click(function(){
     // alert('okae');
     if(! $('#aadharotp').valid()){
             // alert('not valid');

        }else{
           
           $('#confirm_otp').show();
           $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-aadhar-otp')}}",
         data : $('#aadharotp').serialize(),
         success: function(msg){
            // //console.log(msg);
         }  
      });   
        }
    });
</script>
<script type="text/javascript">
    $('#confirm').click(function(){
        // alert('ok');
     if(! $('#confirm_aadharotp').valid()){
             // alert('not valid');

        }else{
            $('#otp').hide();

           $('#confirm_aadharotp').hide();
           $('#Instant_Approve').show();
           $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-aadhar-confirm-otp')}}",
         data : $('#confirm_aadharotp').serialize(),
         success: function(msg){
              // //console.log(msg);
        }  
      });   
        }
    });
</script>

<script type="text/javascript">
    var global_amount=0;
    var global_days=0;
    $('#proceed_without_aadhar').click(function(){
         $('#Instant_Approve').show();
         $.ajax({  
         type: "POST",  
         url: "{{URL::to('iifl-offer-status')}}?_token="+"{{ csrf_token() }}",
         data : $('').serialize(),
         success: function(msg){

          var result=loan_eligibility(msg.body.ROI,msg.body.maxEmi,msg.body.maxTenure,msg.body.maxloanamt,msg.body.minTenure,msg.body.minloanamt,msg.body.processingfee,msg.body.offerstatus,msg.body.remarks,msg.body.prospectNo);
            // //console.log(msg);
        }  
      });   
       
    });
    function loan_eligibility(ROI,maxEmi,maxTenure,maxloanamt,minTenure,minloanamt,processingfee,offerstatus,remarks,prospectNo)
    {
          var offer=offerstatus;
          var number=prospectNo;
           alert("Prospect Number for the particular customer is \n" +number);
    if(offer=="Rejected")
    {       $('#otp').hide();
            $('#Instant_Approve').hide();
            $('#Applicant_Details').show();
         alert("Thank You For Choosing IIFL. \n Your application has been rejected due to internal credit policy.\n Reason: "+remarks);

    }else if(remarks=="Low Salary"){
        alert("Your Salary Is Not Upto Mark");
    }
    else if(offer == null)
    {        $('#otp').hide();
            $('#Instant_Approve').hide();
             $('#Applicant_Details').show();
         alert("Thank You For Choosing IIFL. \n Your application has been rejected due to internal credit policy.\n Reason:" );

          }
         var maxloan=maxloanamt;
         $('#maxloan').empty().append(maxloan);
         var minloanamt =minloanamt;
         var applied_min_loan =Math.round(minloanamt);
         $('#minloanamt').empty().append(applied_min_loan);
         var minTenure =minTenure;
         var applied_min_tenure =Math.round(minTenure);
         $('#minTenure').empty().append(applied_min_tenure);
         
         var ROI=ROI;
         
         $("input[name='ROI']").val(ROI);
         $("#intst").empty().append(ROI);

         var processingfee=processingfee;
         
         $("input[name='Processingfee']").val(processingfee);
         $("#fees").empty().append(processingfee);

         var maxloanamt = maxloanamt;
         global_amount =maxloanamt;
         var applied_loan =Math.round(maxloanamt);
         $("input[name='AppliedLoanamount']").val(applied_loan);
         $("#personal_loan_amount").empty().append(applied_loan);
         // //console.log(maxloanamt);

         var maxTenure = maxTenure/12;
          global_days =maxTenure;
         var tenure =Math.round(maxTenure);
         $("input[name='Tenure']").val(tenure);
         // //console.log(maxTenure);
         $("#perid").empty().append(tenure);

         var maxEmi=maxEmi;
          var max_installment =Math.round(maxEmi);
         $("input[name='Emi']").val(max_installment);
         $("#installment_amount").empty().append(max_installment);

         var total =((max_installment*tenure)-maxloanamt);
            
         var ttl_payment = parseInt(maxloanamt) + parseInt(total);
         $("#PayableAmount").val(ttl_payment);


      
     }
     
</script>

<!-- Document upload -->
<script type="text/javascript">
    $('#proceed_upload').click(function(){
        // alert('ok');
       if(! $('#upload_details').valid()){
             // alert('not valid');

        }else{

            // $('#financial_doc').show();
        $.ajax({
          url:"{{URL::to('iifl-doc-upload')}}" ,  
          data:new FormData($("#upload_details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
            // //console.log(msg);
            if (msg.head.status == "1") {
                
                alert("Reason: "+status_description); 
                    $('#financial_doc').hide(); 
                    $('#error').show(); 
            }else{
                $('#upload').hide();
              $('#financial_doc').show();
                // //console.log(msg);
            }
              
            
            }
        });
     } 
    });
</script>

<script type="text/javascript">
    $('#proceed').click(function(){
        // alert('ok');
       if(! $('#financial_details').valid())
       {
             // alert('not valid');

        }else
        {
           
        $.ajax({
          url:"{{URL::to('iifl-finanacial-doc-upload')}}" ,  
          data:new FormData($("#financial_details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
                $('#financial_doc').hide();
                $('#error').show();
                 // //console.log(msg);
        }
        });
     } 
    });
</script>
<script type="text/javascript">
  function same_as_above(obj,val){
     // //console.log(obj);
     var atLeastOneIsChecked = $('#same_id:checkbox:checked').length > 0;
     // //console.log(atLeastOneIsChecked);
     if (atLeastOneIsChecked == true) {
      // alert("ok");

     $('#PermanentAddress1').val($('#CurrentAddress1').val());
     $('#PermanentAddress1').closest( "span" ).addClass( "input--filled" );
     $('#PermanentAddress2').val($('#CurrentAddress2').val());
     $('#PermanentAddress2').closest( "span" ).addClass( "input--filled" );
     $('#PermanentAddress3').val($('#CurrentAddress3').val());
     $('#PermanentAddress3').closest( "span" ).addClass( "input--filled" );
     $('#PermanentPin').val($('#CurrentPin').val());
     $('#PermanentPin').closest( "span" ).addClass( "input--filled" );
      var newOption1 = $("#CurrentCity option:selected").text();
      var newOptions1 = $("#CurrentCity option:selected").val();
      var city = $('<option selected value="'+newOptions1+'">'+newOption1+'</option>');
      
        $('#PermanentCity').empty().append(city);
     
     $('#PermanentCity').closest( "span" ).addClass( "input--filled" );

     var newOption2 = $("#CurrentState option:selected").text();
      var newOptions2 = $("#CurrentState option:selected").val();
      var state = $('<option selected value="'+newOptions2+'">'+newOption2+'</option>');
        $('#PermanentState').empty().append(state);
     $('#PermanentState').closest( "span" ).addClass( "input--filled" );
     }else{
     $('#PermanentAddress1').val('');
     $('#PermanentAddress2').val(''); 
     $('#PermanentAddress3').val('');
     $('#PermanentPin').val('');
     $('#PermanentAddress1').closest( "span" ).removeClass( "input--filled" );
     $('#PermanentAddress2').closest( "span" ).removeClass( "input--filled" ); 
     $('#PermanentAddress3').closest( "span" ).removeClass( "input--filled" );
     $('#PermanentPin').closest( "span" ).removeClass( "input--filled" );
     $('#PermanentState').val('');
     $('#PermanentCity').val('');
     // $('#PermanentState option[value="0"]').attr('selected','selected');
     
    
     
    }
}
</script>

<script type="text/javascript">
  function co_same_as_above(obj,val){
    // //console.log(obj);
     var atLeastOneIsChecked = $('#co_same_id:checkbox:checked').length > 0;
     // //console.log(atLeastOneIsChecked);
    if (atLeastOneIsChecked == true) {
      // alert("ok");

     $('#CoPermanentAddress1').val($('#CoCurrentAddress1').val());
     $('#CoPermanentAddress1').closest( "span" ).addClass( "input--filled" );
     $('#CoPermanentAddress2').val($('#CoCurrentAddress2').val());
     $('#CoPermanentAddress2').closest( "span" ).addClass( "input--filled" );
     $('#CoPermanentAddress3').val($('#CoCurrentAddress3').val());
     $('#CoPermanentAddress3').closest( "span" ).addClass( "input--filled" );
     $('#CoPermanentPin').val($('#CoCurrentPin').val());
     $('#CoPermanentPin').closest( "span" ).addClass( "input--filled" );
     var newOption3 = $("#CoCurrentCity option:selected").text();
      var newOptions3 = $("#CoCurrentCity option:selected").val();
      var co_city = $('<option selected value="'+newOptions3+'">'+newOption3+'</option>');
        $('#CoPermanentCity').empty().append(co_city);
     $('#CoPermanentCity').closest( "span" ).addClass( "input--filled" );

     var newOption4 = $("#CoCurrentState option:selected").text();
      var newOptions4 = $("#CoCurrentState option:selected").val();
      var co_state = $('<option selected value="'+newOptions4+'">'+newOption4+'</option>');
        $('#CoPermanentState').empty().append(co_state);
     $('#CoPermanentState').closest( "span" ).addClass( "input--filled" );
     }else{
     $('#CoPermanentAddress1').val('');
     $('#CoPermanentAddress2').val(''); 
     $('#CoPermanentAddress3').val('');
     $('#CoPermanentPin').val('');
     $('#CoPermanentAddress1').closest( "span" ).removeClass( "input--filled" );
     $('#CoPermanentAddress2').closest( "span" ).removeClass( "input--filled" ); 
     $('#CoPermanentAddress3').closest( "span" ).removeClass( "input--filled" );
     $('#CoPermanentPin').closest( "span" ).removeClass( "input--filled" );
    }
}
</script>




<script>
            (function() {
                
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }
                

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
            
            
            
            
            
        </script>
        <script>
            (function() {
                
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'select.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }
                

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }
            })();
            
            
            
            
            
        </script>
        <script type="text/javascript">
        function getAge(dateString) {
            var day=dateString.slice(0,2);
            var mon=dateString.slice(2,4);
            var yr=dateString.slice(4,8);
            var today = new Date();
            var new_dateString=mon+"/"+day+"/"+yr;
            var date_of_joining = new Date(new_dateString);
            // //console.log(new_dateString+" "+date_of_joining+" "+today);
            if(date_of_joining > today || date_of_joining=='Invalid Date'){
                 $('#CurrentWorkExp').val('');
                 $('#CurrentWorkExp').closest( "span" )
                    .removeClass( "input--filled" );
                return false;
            }
            var experience = today.getFullYear() - yr;
            // //console.log(today.getDay());
            //as month start from 0 in js
            var m = today.getMonth()+1 - mon;
            var exp=[experience,m];
            if (m < 0 || (m === 0 && today.getDate() < date_of_joining.getDate())) {
               exp[0]--;
               exp[1]+=12;
            }

            return exp;
            }
            $('#joining_date').change(function(){

                var exp= getAge($('#joining_date').val());
                // //console.log(exp);
                if(exp){

                    $('#CurrentWorkExp').val((exp[0]*12)+exp[1]);
                     $('#CurrentWorkExp').closest( "span" ).addClass( "input--filled" );
                 }
            });
          
        </script>

        <script type="text/javascript">
            $('#CurrentPin').keyup(function(){
                // //console.log($('#CurrentPin').val().length);
                if ($('#CurrentPin').val().length == 6) {
                    var pincode =$('#CurrentPin').val();
                    var v_token ="{{csrf_token()}}";
                   $.ajax({  
                        type: "POST",  
                        url: "{{URL::to('iifl-pincode-status')}}",
                        data : {'_token': v_token,'CurrentPin':pincode},
                        success: function(msg){
                            // //console.log(msg.City);
                            // //console.log(msg.State);
                            if (msg.Status =="Fail" ) 
                            {
                               alert('Please Select City & State From Dropdown Provided.');
                               return false;
                            }else if(msg.Status =="Success"){

                            var city =msg.City;
                            var newOption = $('<option selected value="'+msg.CityCode+'">'+city+'</option>');
                            $('#CurrentCity').empty().append(newOption);
                            $('#CurrentCity').closest( "span" ).addClass( "input--filled" );

                            // $('#CurrentCity').empty().append(city);

                            var state=msg.State;
                            var newOption = $('<option selected value="'+msg.StateCode+'">'+state+'</option>');
                            $('#CurrentState').empty().append(newOption);
                            $('#CurrentState').closest( "span" ).addClass( "input--filled" );
                            // $('#CurrentState').empty().append(state);
                        }
                    }
                    });       
                }  
       });    
            
       
        </script>
        
        <script type="text/javascript">
            $('#PermanentPin').keyup(function(){
                // //console.log($('#PermanentPin').val().length);
                if ($('#PermanentPin').val().length == 6) {
                    var pincode =$('#PermanentPin').val();
                    var v_token ="{{csrf_token()}}";
                   $.ajax({  
                        type: "POST",  
                        url: "{{URL::to('iifl-permanent-pincode-status')}}",
                        data : {'_token': v_token,'PermanentPin':pincode},
                        success: function(msg){
                            // //console.log(msg.City);
                            // //console.log(msg.State);
                            if (msg.Status =="Fail" ) 
                            {
                               alert('Please Select City & State From Dropdown Provided.');
                               return false;
                            }else if(msg.Status =="Success"){

                            var city =msg.City;
                            var newOption = $('<option selected value="'+msg.CityCode+'">'+city+'</option>');
                            $('#PermanentCity').empty().append(newOption);
                            $('#PermanentCity').closest( "span" ).addClass( "input--filled" );

                            // $('#CurrentCity').empty().append(city);

                            var state=msg.State;
                            var newOption = $('<option selected value="'+msg.StateCode+'">'+state+'</option>');
                            $('#PermanentState').empty().append(newOption);
                            $('#PermanentState').closest( "span" ).addClass( "input--filled" );
                            // $('#CurrentState').empty().append(state);
                        }
                    }
                    });       
                }  
       });    
            
       
        </script>

        <script type="text/javascript">
            $('#CoCurrentPin').keyup(function(){
                // //console.log($('#CoCurrentPin').val().length);
                if ($('#CoCurrentPin').val().length == 6) {
                    var pincode =$('#CoCurrentPin').val();
                    var v_token ="{{csrf_token()}}";
                   $.ajax({  
                        type: "POST",  
                        url: "{{URL::to('iifl-co-pincode-status')}}",
                        data : {'_token': v_token,'CoCurrentPin':pincode},
                        success: function(msg){
                            // //console.log(msg.Status);
                            // //console.log(msg.City);
                            // //console.log(msg.State);
                            if (msg.Status =="Fail" ) 
                            {
                               alert('Please Select City & State From Dropdown Provided.');
                               return false;
                            }else if(msg.Status =="Success") {
                            var city =msg.City;
                            var newOption = $('<option selected value="'+msg.CityCode+'">'+city+'</option>');
                            $('#CoCurrentCity').empty().append(newOption);
                            $('#CoCurrentCity').closest( "span" ).addClass( "input--filled" );

                            // $('#CurrentCity').empty().append(city);

                            var state=msg.State;
                            var newOption = $('<option selected value="'+msg.StateCode+'">'+state+'</option>');
                            $('#CoCurrentState').empty().append(newOption);
                            $('#CoCurrentState').closest( "span" ).addClass( "input--filled" );
                            // $('#CurrentState').empty().append(state);
                        }
                        }
                    });       
                }  
       });    
            
       
        </script>

        <script type="text/javascript">
            $('#CompanyPin').keyup(function(){
                // //console.log($('#CompanyPin').val().length);
                if ($('#CompanyPin').val().length == 6) {
                    var pincode =$('#CompanyPin').val();
                    var v_token ="{{csrf_token()}}";
                   $.ajax({  
                        type: "POST",  
                        url: "{{URL::to('iifl-company-pincode-status')}}",
                        data : {'_token': v_token,'CompanyPin':pincode},
                        success: function(msg){
                            // //console.log(msg.Status);
                            // //console.log(msg.City);
                            // //console.log(msg.State);
                            if (msg.Status =="Fail" ) 
                            {
                               alert('Please Select City & State From Dropdown Provided.');
                               return false;
                            }else if(msg.Status =="Success") {
                            var city =msg.City;
                            var newOption = $('<option selected value="'+msg.CityCode+'">'+city+'</option>');
                            $('#CompanyCity').empty().append(newOption);
                            $('#CompanyCity').closest( "span" ).addClass( "input--filled" );

                            // $('#CurrentCity').empty().append(city);

                            var state=msg.State;
                            var newOption = $('<option selected value="'+msg.StateCode+'">'+state+'</option>');
                            $('#CompanyState').empty().append(newOption);
                            $('#CompanyState').closest( "span" ).addClass( "input--filled" );
                            // $('#CurrentState').empty().append(state);
                        }
                        }
                    });       
                }  
       });    
   </script>


<script type="text/javascript">
    $(function () {
        $("#CoapplicantFlag").change(function () {
            if ($(this).val() == "1") {
                $("#co_applicant").show();
            } else {
                $("#co_applicant").hide();
            }
        });
    });
</script>