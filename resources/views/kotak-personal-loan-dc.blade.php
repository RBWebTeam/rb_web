<!DOCTYPE html>
<html class="no-js"> 
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"> -->
  <title>Nihon</title>
  <!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
  <meta name="msvalidate.01" content="3744048BDD61F7FE6837BD664522C8F9" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
  <meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
  <meta name="p:domain_verify" content="05d8ec5b6a704fa5b78abd5f636fdc24"/>
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- <link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css"> -->
  <!-- Animate.css -->

<link  rel="stylesheet" type="text/css" href="{{URL::to('css/mysite.css')}}"/>
<link  rel="stylesheet" type="text/css" href="{{URL::to('css/style.css')}}"/>
<script src="js/icici_js/jquery.min.js"></script>
  <script type="text/javascript" src="js/icici_js/material.min.js"></script>
  <script type="text/javascript" src="js/icici_js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/icici_js/bootstrap-material-datetimepicker.js"></script>
   
</script>


<script type="text/javascript" src="js/icici_js/jquery.datepicker.js"></script>


    
<script src="js/jquery.mask.js"></script>
<script src="js/icici_js/jquery.validate.min.js"></script>
<script src="js/icici_js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>

 
  <div class="fh5co-contact animate-box">

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
          <h1 class="loan-head">Kotak Medical Loan</h1>
          
        </div>

        <div class="col-md-12">
          <div class="row text-left comp-pg rate white-bg">
          

            
              <form class="" id="Kotak_PL_form" role="form" method="POST" >
              <?php if(isset($_GET['CampaignName'])){?>
                <input type="hidden" name="CampaignName" id="CampaignName" value="<?php echo isset($_GET['CampaignName'])?$_GET['CampaignName']:'';?>">
                <?php }else{?>
                <input type="hidden" name="CampaignName" id="CampaignName" value="0">
                <?php }?>
               {{ csrf_field() }}
               

                <div class="row">
                  <div class="form-group">
                  
                     <h4 class="text-center">Personal Details :</h4><br>

                    <div class="col-md-4">
                                <span><b>Are You Existing Customer</b></span>
                                <select class="block drop-arr select-sty" name="IsExstCust" id="IsExstCust" required>
                                    <option disabled selected  value="">Are You Existing Customer</option>
                                    <option value="Y">Yes</option>
                                    <option value="N">No</option>
                                </select> 
                                </div>

                                <div class="col-md-4" style="display: none;" id="customer_type">
                                <span><b>Existing Customer Type Master :<b></span>
                                <select class="block drop-arr select-sty" name="ExstCustType" id="ExstCustType" required>
                                    <option selected  value="">Existing Customer Type Master</option>
                                    <option selected value="0">0</option>
                                    <option value="1">Bank</option>
                                    <option  value="2">Loan</option>
                                </select> 
                                </div>

                                <div class="col-md-4" style="display: none;" id="crn">
                                <span><b>CRN Number :</b></span>
                                  <input  type="text" class="form-control" placeholder= "CRN Number" value="0" name="CRN" id="CRN" onkeypress="return fnAllowNumeric(event)" required>
                                </div>

                                <div class="col-md-4"  style="display: none;" id="partyid">
                                <span><b>Party ID :</b></span>
                                  <input  type="text" class="form-control" placeholder= "Party ID" value="0" name="PartyID" id="PartyID" onkeypress="return fnAllowNumeric(event)" required>
                                </div>

                                <div class="col-md-4">
                                 <span><b>First Name</b></span>
                                 <input  type="text" class="form-control" placeholder= "First Name" name="FirstName" id="FirstName" onkeypress="return AllowAlphabet(event)" maxlength="32" required>
                                </div>

                                <div class="col-md-4">
                                 <span><b>Middle Name</b></span>
                                 <input  type="text" class="form-control" placeholder= "Middle Name" name="MiddleName" id="MiddleName" onkeypress="return AllowAlphabet(event)" maxlength="32">
                                </div>

                                <div class="col-md-4">
                                 <span><b>Last Name</b></span>
                                 <input  type="text" class="form-control" placeholder="Last Name" name="LastName" id="LastName" onkeypress="return AllowAlphabet(event)" maxlength="32"  required>
                                </div>

                                <div class="col-md-4">
                                <span><b>Gender</b></span>
                                <select class="block drop-arr select-sty" name="Gender" id="Gender" required>
                                    <option disabled selected  value="">Gender</option>
                                    <option  value="1">Male</option>
                                    <option  value="2">Female</option>
                                </select> 
                                </div>

                                <div class="col-md-4">
                                <span><b>Qualification</b></span>
                                <select class="block drop-arr select-sty" name="Qualification" id="Qualification" required>
                                    <option  disabled selected  value="">Qualification</option>
                                    <option  value="8">Post Graduate</option>
                                    <option  value="11">Graduate</option>
                                    <option  value="13">Doctorate</option>
                                    <option  value="14">Professional</option>
                                    <option  value="15">Under Graduate</option>
                                    <option  value="16">Vocational</option>
                                </select> 
                                </div>

                                <div class="col-md-4">
                                 <span><b>DOB</b></span>
                                 <input  type="text" class="form-control lastReporteddob" placeholder="Date Of Birth" name="DOB" id="DOB" required>
                                </div>



                                <div class="col-md-4">
                                <span><b>Mobile</b></span>
                                <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Mobile Number" name="Mobile" id="Mobile" maxlength="10" required>
                                </div>

                                <div class="col-md-4">
                                <span>Email</span>
                                <input  type="text" class="form-control" placeholder="Email" name="Email" id="Email" oninput="mail('Email')" required>
                                <div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                </div>

                                <div class="col-md-4">
                                <span>Aadhar number</span>
                                <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Aadhar Number"  oninput="aadhar('Aadhar')"  name="Aadhar" id="Aadhar" maxlength="12" minlength="12">
                                <div id="aadhar_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Aadhar Number.!!</div>
                                </div>

                                <div class="col-md-4">
                                <span>Pan Card</span>
                                <input type="text" class="form-control " id="PAN" name="PAN" placeholder="Pan Card" oninput="pan_card('PAN')" maxlength="10"  required>
                                <span id="pan_number" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                                </div>

                  </div>
                  <hr>
                </div>
                
                
                
                
                <div class="row sec" style="display: none;"   id="section1">
                  <div class="form-group">
                    <h1 class="loan-head" >Office Details:</h1>
                    <div class="col-md-4">
                                <span><b>Employment Type</b></span>
                                <select class="block drop-arr select-sty" name="EmpType" id="EmpType" required>
                                    <option disabled selected  value="">Employment Type</option>
                                    <option  value="1">Salaried</option>
                                    
                                </select> 
                                </div>

                                <div class="col-md-4">
                                 <input type="hidden" name="Company_Cat" id="Company_Cat" value="">
                                <span><b>Employer Name / Establishment Name</b></span>
                                <input  type="text" class="form-control search_company" placeholder="Employer Name / Establishment Name" name="Organization" id="Organization" maxlength="100" required>
                                </div>

                                <div class="col-md-4">
                                <span><b>Joining date with current company</b></span>
                                <input  type="text" class="form-control lastReported_joining_date" placeholder="Joining date with current company" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" required>
                                </div>

                                <div class="col-md-4">
                                <span><b>Total Work Experience</b></span>
                                <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Total Work Experience" name="TotWrkExp" id="TotWrkExp" required>
                                </div>

                                 <div class="col-md-4">
                                  <span><b>Office Address1</b></span>
                                  <input  type="text" class="form-control" placeholder="Office Address1" name="OffAddress1" id="OffAddress1" minlength="4" maxlength="30"  required>
                                  </div>

                                  <div class="col-md-4">

                                  <span>Office Address2</span>
                                  <input  type="text" class="form-control" placeholder="Office Address2" name="OffAddress2" id="OffAddress2" minlength="4" maxlength="30">
                                  </div>

                                  <div class="col-md-4">
                                  <span>Office Address3</span>
                                  <input  type="text" class="form-control" placeholder="Office Address3" name="OffAddress3" id="OffAddress3" minlength="4" maxlength="30" required>
                                  </div>

                                        
                                  <div class="col-md-4">
                                  <span>Office City</span>
                                  <select class="form-control drop-arr select-sty" name="OffCity" id="OffCity" style="height: 50px" required>
                                  <option disabled selected value="">Office City</option>
                                  </select>
                                  </div>

                                  <div class="col-md-4">
                                  <span>Office Pincode</span>
                                  <input  type="text" class="form-control" placeholder= "Office Pincode" name="OffPin" id="OffPin" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                  </div>

                                  <div class="col-md-4">
                                  <span><b>Office Phone</b></span>
                                  <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Office Phone" name="OffPhone" id="OffPhone" required maxlength="8" value="0">
                                  </div>

                                  <div class="col-md-4">
                                  <span><b>Preferred Mailing Address</b></span>
                                  <select class="block drop-arr select-sty" name="PrefMailAdd" id="PrefMailAdd" required>
                                  <option disabled selected  value="">Preferred Mailing Address</option>
                                  <option  value="1">Residence Address</option>
                                  <option  value="2">Office Address</option>
                                    
                                  </select> 
                                  </div>
                    </div>
                    <hr>
                  </div>
                  
                  
                  
                <div class="row sec"  style="display: none;" id="section2">   
                  <div class="form-group">
                    <h1 class="loan-head" >Current Address :</h1>
                    <div class="col-md-4">
                                        <span><b>Address 1</b></span>
                                        <input  type="text" class="form-control" placeholder="Address 1" name="ResAddress1" id="ResAddress1" minlength="4" maxlength="30"  required>
                                        </div>
                                        <div class="col-md-4">

                                        <span>Address 2</span>
                                          <input  type="text" class="form-control" placeholder="Address 2" name="ResAddress2" id="ResAddress2" minlength="4" maxlength="30">
                                        </div>

                                        <div class="col-md-4">
                                        <span>Address 3</span>
                                          <input  type="text" class="form-control" placeholder="Address 3" name="ResAddress3" id="ResAddress3" minlength="4" maxlength="30" required>
                                        </div>

                                        
                                          <div class="col-md-4">
                                           <span>Residence City</span>
                                            <select class="form-control drop-arr select-sty" name="ResCity" id="ResCity" style="height: 50px" required>
                                            <option disabled selected value="">City</option>
                                            </select>
                                          </div>

                                          <div class="col-md-4">
                                          <span>Pincode</span>
                                          <input  type="text" class="form-control" placeholder= "Pincode" name="ResPin" id="ResPin" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                          </div>

                                          <div class="col-md-4">
                                          <span>Residence Type</span>
                                          <select class="form-control block drop-arr select-sty" name="ResType" 
                                          id="ResType" required>
                                            <option disabled selected  value="">Residence Type</option>
                                            <option  value="2">Owned by self/spouse</option>
                                            <option  value="4">Owned by Parents</option>
                                            <option  value="5">Rented - With Family</option>
                                            <option  value="7">Rented - With Friends</option>
                                            <option  value="11">Rented - Bachelor Staying alone</option>
                                            <option  value="13">Paying guest</option>
                                            <option  value="14">Hostel/Guest House/Hotel</option>
                                            <option  value="17">Company Provided - Staying Alone</option>
                                            <option  value="18">Company Provided - Staying with family</option>
                                          </select> 
                                          </div>

                                          <div class="col-md-4">
                                          <span>Current Residence Since</span>
                                          <input  type="text" class="form-control lastReported_staying_since" placeholder="Current Residence Since" name="CurResSince" id="CurResSince" required>
                                          </div>

                                          <div class="col-md-4">
                                          <span>Residence Phone Number</span>
                                          <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Residence PhNo" maxlength="10" name="ResPhNo" id="ResPhNo">
                                          </div>
                    </div>
                    <hr>
                  </div>
                                    
                  
                  
                                    <div class="row sec" style="display: none;"  id="section3" >  
                  <div class="form-group">
                      &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same" id="same_id" onclick="same_fn();" /> Same As Above
                    <h1 class="loan-head" >Permanent Address :</h1>
                    <div class="col-md-4">
                                          <span>Address 1</span>
                                            <input  type="text" class="form-control" placeholder="Per Address1" name="PerAddress1" id="PerAddress1" minlength="4" maxlength="30"  required>
                                          </div>

                                          <div class="col-md-4">
                                          <span>Address 2</span>
                                            <input  type="text" class="form-control" placeholder="Per Address2" name="PerAddress2" id="PerAddress2" minlength="4" maxlength="30">
                                          </div>

                                          <div class="col-md-4">
                                          <span>Address 3</span>
                                            <input  type="text" class="form-control" placeholder="Per Address3 " name="PerAddress3" id="PerAddress3" minlength="4" maxlength="30" required>
                                          </div>

                                          <div class="col-md-4">
                                             <span>Permanent Residence City</span>
                                              <select class="form-control drop-arr select-sty" name="PerCity" id="PerCity" style="height: 50px" required>
                                              <option disabled selected value="">City</option>
                                              </select>
                                            </div>

                                            <div class="col-md-4">
                                            <span>Permanent Residence Pincode</span>
                                            <input  type="text" class="form-control" placeholder= "Pincode" name="PerPin" id="PerPin" maxlength="6" required>
                                            </div>

                                            <div class="col-md-4">
                                            <span>Permanent Residence Phone numnber</span>
                                            <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Residence PhNo" name="PerResPhNo" id="PerResPhNo">
                                            </div>

                    </div>
                     <hr>
                  </div>
  
                  
                  
                  <div class="row sec" style="display: none;" id="section4">
                    <div class="form-group">
                      <h1 class="loan-head" >Financial Details :</h1>
                    
                      <div class="col-md-4">
                                        <span>Net Monthly Income</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Net Monthly Income" minlength="5" maxlength="9" name="NMI" id="NMI" required>
                                        </div>

                                        <div class="col-md-4">
                                        <span>Total EMIs you currently pay per month <h6>(If any,otherwise enter 0)<h6></span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Total EMIs you currently pay/month" name="EmiCurPay" id="EmiCurPay">
                                        </div>

                                        <div class="col-md-4">
                                        <span>Requested Loan amount</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Requested Loan amount" minlength="5" maxlength="9" name="LnAmt" id="LnAmt" required>
                                        </div>

                                        <div class="col-md-4" >
                                          <span>Requested Loan Tenure</span>
                                          <select class="form-control block drop-arr select-sty" name="TnrMths" 
                                          id="TnrMths" required>
                                            <option disabled selected  value="">Requested Loan Tenure</option>
                                            <option  value="12">12 Months</option>
                                            <option  value="24">24 Months</option>
                                            <option  value="36">36 Months</option>
                                            <option  value="48">48 Months</option>
                                            <option  value="60">60 Months</option>
                                            
                                           
                                          </select> 
                                          </div>

                                        <div class="col-md-4">
                                        <span>PL Rate Offered</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="PL Rate Offered" name="IRR" id="IRR" required readonly>
                                        </div>

                                        <div class="col-md-4">
                                        <span>Processing Fee</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Processing Fee" name="ProcFee" id="ProcFee" required readonly>
                                        </div>





                                        
                    </div>

                  
                        
                  <div class="col-md-4">Is any Co-Applicant added? :
                              <input type="radio" id="have" name="IsCoApp"  value="Y"> Yes
                                        <input type="radio" name="IsCoApp" id="not_have" checked value="N" > No
                              </div><br>


                  <div class="row">
                  <div style="display: none;"  id="co_app_details" >
                                    
           
                              <div class="col-md-4" >
                                          <span>Relationship With Co-applicant</span>
                                          <select class="form-control block drop-arr select-sty" name="CoAppReltn" 
                                           id="CoAppReltn" required>
                                            <option disabled selected  value="">Relationship With Co-applicant</option>
                                            <option selected value="0">0</option>
                                            <option  value="1">Spouse</option>
                                            <option  value="9">Father</option>
                                            <option  value="12">Mother</option>
                                            <option  value="21">Brother</option>
                                            <option  value="23">Son</option>
                                            <option  value="24">Daughter</option>
                                           
                                          </select> 
                                          </div>

                                        <div class="col-md-4" >
                                        <span><b>Co-applicant's Date Of Birth</b></span>
                                        <input type="text" class="form-control lastReportedCoAppDOB" id="CoAppDOB" name="CoAppDOB" placeholder="Co-applicant's Date Of Birth" value="0" required>
                                        </div>

                                        <div class="col-md-4">
                                        <span><b>Co-Employment Type</b></span>
                                        <select class="block drop-arr select-sty" name="CoAppEmpType" 
                                        id="CoAppEmpType" required>
                                        <option disabled selected  value="">Employment Type</option>
                                         <option selected value="0">0</option>
                                        <option  value="1">Salaried</option>
                                        </select> 
                                        </div>


                                        <div class="col-md-4">
                                        <span><b>Co applicant's Employer Name / Establishment Name</b></span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Co applicant's Employer Name / Establishment Name" name="CoAppOrg" id="CoAppOrg" value="0" required>
                                        </div> 

                                        <div class="col-md-4">
                                        <span>Co-applicant's Net Monthly Income</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Co-applicant's Net Monthly Income" minlength="5" maxlength="9" name="CoAppNMI" id="CoAppNMI" value="0"  required>
                                        </div> 

                                        <div class="col-md-4">
                                        <span>Emi Currently Pay</span>
                                        <input  type="text" class="form-control" onkeypress="return fnAllowNumeric(event)" placeholder="Emi Currently Pay" value="0"  name="CoAppEmiCurPay" id="CoAppEmiCurPay">
                                        </div>
                              </div>
                              </div>
                      
                                        
                    
                    
                    
                      
                      
                   
                    
                    <div class="col-md-12">
                    &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated kotak-pl-proceed dis-tbl" >Click To Proceed<i class="icon-arrow-right"></i></button>
                    <button style="display: none;" class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated kotak-pl-submit dis-tbl" >Confirm & Continue<i class="icon-arrow-right"></i></button>

                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>

                  
                
              </form>
          </div>
          <hr>
          </div>
          <button class="btn btn-primary btn-outline with-arrow mrg-top center-block kotak_pl"  id="kotak_personal_loan">NEXT<i class="icon-arrow-right" ></i></button>

        </div>
      </div>
    </div>  
  
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="kotak_pl_popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Kotak Personal Loan Lead Id is <b><span id="kotak_pl_refcode"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak_pl_popup_eligible">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Your Kotak Personal Loan Lead Id is <b><span id="kotak_pl_refcode"></span>You Are Eligible For LoanAmount<span id="kotak_pl_eligLnAmt"></span>And Eligible ROI is<span id="kotak_pl_roi"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak_pl_errcode_popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px"><b>Thank You For Banking With Kotak Bank Personal Loan. We are sorry to say you have been <span id="kotak_pl_errcode"></span> Lead Id is <span id="kotak_pll"></span></b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak_pl_status">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Thank You for your interest in Kotak Bank Personal Loan<b><span id="kotak_pl_status"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="kotak_popup_error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured.ErrorInfo is : <b><span id="kotak_duplicate"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="fill">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Please Fill Up All Details</b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<script type="text/javascript">

 function same_fn(checked){

       var id=  document.getElementById("same_id");
         // document.getElementById("same_id").checked = false;
     
     if(id.checked){

     $('#PerAddress1').val($('#ResAddress1').val());
     $('#PerAddress2').val($('#ResAddress2').val());
     $('#PerAddress3').val($('#ResAddress3').val());
    

     $('#PerCity').val($('#ResCity').val());
     $('#PerPin').val($('#ResPin').val());
      $('#PerResPhNo').val($('#ResPhNo').val());
     
     }else{

     $('#PerAddress1').val('');
     $('#PerAddress2').val(''); 
     $('#PerAddress3').val('');

     $('#PerCity').val('');
     $('#PerPin').val('');
     $('#PerResPhNo').val('');
     
     }
    
    
    

 }

</script>

<script type="text/javascript">

 $("#kotak_personal_loan").click(function(event){
         event.preventDefault();
      if(!  $('#Kotak_PL_form').valid()){
        return false;
      }else{$('#section1').show();
            if(!  $('#Kotak_PL_form').valid()){return false;
            }else{ $('#section2').show();
                if(! $('#Kotak_PL_form').valid()){
                       return false;
                }else{$('#section3').show();
               
                       if(! $('#Kotak_PL_form').valid()){return false;
                       }else{$('#section4').show();
               
                       if(! $('#Kotak_PL_form').valid()){
                        $('.kotak_pl').hide();
                        return false;
                       }else{      
                               $('.kotak_pl').hide();
                           $('#section5').show();


                               
                       }
                }
      }
    }

      }
});

 

 


  $(".kotak-pl-submit").click(function(event){
    // alert('okae');
    
    event.preventDefault();
     
      if(!  $('#Kotak_PL_form').valid()){
        return false;
      }else{
        
        $(".iframeloading").show();
     
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-pl-submit-dc')}}",
         data : $('#Kotak_PL_form').serialize(),
         dataType: 'json',
         success: function(msg){
          $(".iframeloading").hide();
          
          // console.log(msg);
          if (msg.status=='1') 
          {
          $('#kotak_pl_refcode').empty().append(msg.refcode);
          $('#kotak_pl_popup').modal('show');
          }else if(msg.status=='2')
          {
          $('#kotak_pl_code').empty().append(msg.refcode);
          $('#kotak_pl_eligLnAmt').empty().append(msg.EligLnAmt);
          $('#kotak_pl_roi').empty().append(msg.ROI);
          $('#kotak_pl_popup_eligible').modal('show');
          }
          else if(msg.status=='3')
          {
            var reject="Rejected";
           $('#kotak_pl_errcode').empty().append(reject);
           $('#kotak_pll').empty().append(msg.refcode);
           $('#kotak_pl_errcode_popup').modal('show');
          }
          else if(msg.status=='4'){
           $('#kotak_pl').empty().append(msg.refcode);
           $('#kotak_pl_status').modal('show');
          }else
          {
            $('#kotak_duplicate').empty().append(msg.errorinfo);
           $('#kotak_popup_error').modal('show');
          }
         

          
          
            
      }   
     });
      }
    });

    //   function get_kotak_error(id){
    //   error='';
    //   switch (id) {
    //     case 1: 
    //       error="INPUT OUT OF MASTERS RANGE";
    //       break;
    //     case 2: 
    //       error="VALIDATION ERROR";
    //       break;
    //     case 3: 
    //       error="INPUT NOT IN VALID DATA FORMAT (SPECIAL CHARACTERS etc)";
    //       break;
    //     case 4:
    //       error="SYSTEM UNAVAILABLE";
    //       break;
    //     case 5: 
    //       error="DECISION CENTER ERROR";
    //       break;
    //     case 6:
    //       error="DUPLICATE APPLICATION";
    //       break;
    //   }
    //     return error;
    // }


</script>



<script>
$('#IsExstCust').on('change', function() {
  // alert('okae');
  var IsExstCust=$('#IsExstCust').find(":selected").val();
  // console.log(IsExstCust);
  if ( IsExstCust == 'Y')
      {
       
      $("#customer_type").show();
     
        
      }
      else{
        
        $("#customer_type").hide();
        
      }
});
</script>

<script>
$('#ExstCustType').on('change', function() {
  // alert('okae');
  var ExstCustType=$('#ExstCustType').find(":selected").val();
  // console.log(ExstCustType);
  if ( ExstCustType == '1')
      {
       
      $("#crn").show();
       $("#partyid").hide();
     
        
      }
      else{
        
        $("#crn").hide();
        $("#partyid").show();
        
      }
});
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()-21 ;
    d.setFullYear(year);

    $("#DOB").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-76Y",
      yearRange: '-76:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurResSince").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CoAppDOB").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurCmpnyJoinDt").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
  function mail(obj,val){
    // console.log(obj);
    if(obj=='Email' ){
                   var str =$('#Email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
    function aadhar(obj,val){
        // //console.log(obj);
        if(obj=='Aadhar' ){
                   var str =$('#Aadhar').val();
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
</script>

<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='PAN' ){
                   var str =$('#PAN').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_number').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_number').show();

                    return false;
                  }
                  
    }
    }
    </script>

    <script type="text/javascript">
    function pan_nmbr(obj,val){
        // console.log(obj);
        if(obj=='pan' ){
                   var str =$('#pan').val();
                   // console.log(str);
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                        $('#pan_num').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pan_num').show();

                    return false;
                  }
                  
    }
    }
    </script>


<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('kotak-pl-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   // console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#ResCity').append('<option value="'+value.city_code+'">'+value.city_name+'</option>');

        }); 
    }else{
      $('#ResCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('kotak-pl-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   // console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#PerCity').append('<option value="'+value.city_code+'">'+value.city_name+'</option>');

        }); 
    }else{
      $('#PerCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('kotak-pl-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   // console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#OffCity').append('<option value="'+value.city_code+'">'+value.city_name+'</option>');

        }); 
    }else{
      $('#OffCity').empty().append('No Result Found');
    }

   },

 });
</script>

<script type="text/javascript">
  $('#have').change(function(){
 
  $("#co_app_details").show();
  });
</script>

<script type="text/javascript">
  $('#not_have').change(function(){
 
  $("#co_app_details").hide();
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
$(document).ready(function(){

    $(".search_company").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchkotak_plcompanyajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
           // //console.log(data);

            response(data);
            
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
            
          $(".search_company").attr("data-value","CAT D"); 
          $("#Company_Cat").val("CAT D");
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
  $('.kotak-pl-proceed').click(function(event){
   event.preventDefault();
     
      if(!  ($('#Organization')&&($('NMI'))&&($('NMI')))){
        return false;
      }else{
        var Organization=$("#Organization").val();
        var NMI=$("#NMI").val();
        var LnAmt=$("#LnAmt").val();
        var v_token = "{{csrf_token()}}";
        
        
        // $(".iframeloading").show();
     
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-pl-proceed')}}",
         data : { 'Organization': Organization ,'LnAmt': LnAmt , 'NMI': NMI ,'_token': v_token},
         dataType: 'json',
         success: function(msg){
          $('.kotak-pl-submit').show();
          $('.kotak-pl-proceed').hide();
          var data=msg[0];
          // console.log(data);

          $('#IRR').val(data.roi);
          var processing_fee=LnAmt*data.csc_pf/100;
          $('#ProcFee').val(processing_fee);

         // $(".iframeloading").hide();  
        }  
      }); 
      }
  });
</script>

<!-- <script type="text/javascript">
  $('#kotak-pl-status').click(function(){
    alert('okae');
     $('#kotak-pl-popup-status').modal('show');
     
  });
</script> -->

<script type="text/javascript">
  $('#kotak_status').click(function(event){
    // alert('okae');
     event.preventDefault();
     // alert('okae');
    if(! $('#kotak_personal_loan_status').valid())
       {
              $('#fill').modal('show');
               // alert('Please Fill Up All Details');
        }
        else
        {
         
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('kotak-personal-loan-status-dc')}}",
         data : $('#kotak_personal_loan_status').serialize(),
         success: function(msg){

          // console.log(msg.status);
         if (msg.status =="1") {
             
             $('#kotakrefcode').empty().append(msg.refcode);
             $('#kotakstatus').empty().append(msg.appstatusdesc);
             $('#kotak-status-popup').modal('show');
           } else {
             $('#kotak-status-popup').modal('hide');
            
             $('#kotak-hl-status-error').modal('show');
           }
           
            
              
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>







