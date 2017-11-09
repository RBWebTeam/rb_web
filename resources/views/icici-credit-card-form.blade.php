<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ICICI Credit Card :: RupeeBoss</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
  <link href="css/icici_css/component.css" rel="stylesheet" type="text/css"  />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/style-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="css/icici_css/responsive-home-loan.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/icici_css/jquery.datepicker.css">
  <link rel="stylesheet" href="css/icici_css/bootstrap-material-datetimepicker.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="js/icici_js/jquery.min.js"></script>
  <script type="text/javascript" src="js/icici_js/material.min.js"></script>
  <script type="text/javascript" src="js/icici_js/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="js/icici_js/bootstrap-material-datetimepicker.js"></script>
   
</script>


<script type="text/javascript" src="js/icici_js/jquery.datepicker.js"></script>


    
<script src="js/jquery.mask.js"></script>
<script src="js/icici_js/jquery.validate.min.js"></script>
  <style>
  .inp-fld {margin-bottom:10px; height:50px; position:relative;text-transform: uppercase;}
  .emp-nat span {padding:3px 5px;}
  .txt-tlt {padding-left:5px;width:100%;text-align:center; color:#666;font-size:18px;}
  .pg-titl {text-transform:uppercase;}
  .redio-lft {float:left;}
  .p-padding {padding:10px;}
  .mand-fld { display:block;}
  label.error {display: none !important; }
       .error {
                    border:1px solid red;
                }
  .lble {bottom:19px;}
  
  .sbmit-btn {
    padding: 10px 30px;
    top: 0px;
    position: absolute;
    color: #fff;
    font-size: 20px;
    right: 0px;
    border: none;
    background: #0070c0;
}
.icici {margin-top:-13px;}
 select option {text-transform:uppercase;}
 select {color:#636363 !important;}
 .lastReporteddob {color:#636363 !important;}
 
@media only screen and (max-width:768px) {
	
	.col-md-12 {padding:0px;margin:2px;}
}
.emp-nat span {
    padding: 3px 5px;
    font-size: 12px;
}
.lastReporteddob {height:48px;} 
.hdn5 {margin:0px !important}
#DateOfBirth {cursor:pointer;}
.text-lower {margin-bottom: 10px;height: 50px;position: relative;}
  </style>
  
  <script>
$(document).ready(function(){
    $(".click-hr").click(function(){
        $(".emil-id").toggle();
    });
});
</script>
  </head>
  
  <body class="cbp-spmenu-push">
  <script>
$(".top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});
</script>


               
<div>
       <!-- Main content -->
        <section class="container">
      <div class="row">
      <div class="col-md-12">
    <br>
    
      <div id="logo" class="text-center"><img id="myImage" src="http://erp.rupeeboss.com/personalloan/images/logo.png" class=""></div>
    
      <h4 class="text-center pg-titl">Apply For <img src="images/bank/icici.png" class="img-responsive icici" width="130"/> Credit Card</h4>
    
    <div class="col-md-3"></div>
	
	<form id="to_view_url" name="to_view_url" method="POST">
  {{ csrf_field() }}
    <div id="hideview" class="text-center col-md-6">
                                            <div class="form-padding">
                                                <h6 class="text-center top-heading click-hr"><a id="urlweb" href="javascript:void(0)">click here</a>
                                                to view this page in browser</h6>
                                                 <span id="urlmail_id" style="display:none;color: red;">Please Enter Valid Email Id.</span> 
                                               
                                              <div id="hideemailid" class="emil-id" style="margin-bottom: 14px; height: 50px; position: relative; display:none;">
                                                <input class="form-control text-lower" required type="text" id="urlemailid" name="urlemailid" oninput="url_mail('urlemailid')">
                                                
                                                <button class="sbmit-btn sub-btn1 pull-right" id="btnweburl">Submit</button> 
                                                <span class="highlight"></span><span class="bar"></span>
                                                <label class="form-label-new">E-MAIL ID (PERSONAL)</label>
                                                <div class="clear"></div>
                                              </div>
                                                
                                              <h5 id="msgalert" class="top-heading text-success text-center" style="display:none;font-size:15px;font-weight:bold; margin-bottom:15px;">As per your request we have sent a mail to your email ID.</h5>
                                            </div>
                                        </div>
                                        </form>
                    
                    

                <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
            
          <!-- <form action="">  -->  
            <div class="col-md-12">

            <form class="form12" id="compareform" role="form" method="POST" >
              
            <div class="panel-group" id="accordion" >
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp; PERSONAL INFORMATION
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">    

          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantFirstName" id="ApplicantFirstName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">First Name</label>
                      <div class="clear"></div>
                    </div>  
                   </div>
             
             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantMiddleName" id="ApplicantMiddleName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Middle Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>
              <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ApplicantLastName" id="ApplicantLastName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Last Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  
            <div class="col-xs-6 form-padding">
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                    <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">DATE OF BIRTH</span>
                      <input type="text" class="form-control lastReporteddob" id="datepicker" name="DateOfBirth" style="color:#636363 !important; font-size:14px;" required>
           <i class="fa fa-calendar" id="DateOfBirth" style="font-size: 25px;position: absolute;top: 15px;right: 11px;color: #3f7cb3;"></i>
                    </div>
                  </div>
                  
                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="NameOnCard" id="NameOnCard" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">NAME TO PRINT ON CARD</label>
                      <div class="clear"></div>
                    </div>  
                             </div>

                             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="MotherName" id="MotherName" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Mother's Maiden Name</label>
                      <div class="clear"></div>
                    </div>  
                             </div>

                    <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="no_of_dependents" id="no_of_dependents" required>
                      <option value="">NO OF DEPENDENTS</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5+">5+</option>
                    </select> 
                  </div>
         

        <div class="col-xs-6 col-md-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px;position: relative; padding: 0px 0px; margin-bottom:10px;">
                      <div class="padd-lef gender">
                       <div class="btn-grp" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Gender" checked value="Male"><img id="myImage"  src="images/male.png" class=""/></span>
                                    <span class="btn btn-primary outer-brd1"><input type="radio" name="Gender" value="Female"><img id="myImage1"  src="images/female.png" class="" ></span>
                             </div>
                        </div>
                     </div>
                  </div>
                
                <div class="col-xs-12 col-md-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">RESIDENT STATUS</span>
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="resident_status" checked value="Indian">INDIAN</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="resident_status" value="NRI/Foreign_National" >NRI/FOREIGN NATIONAL</span>
                </div>
                    </div>  
                </div>
        
        <div class="col-xs-6 form-padding">
                <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">MARITAL STATUS</span>
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="marital_status" checked value="Single">SINGLE</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="marital_status" value="Married" >MARRIED</span>
                </div>
                    </div>  
                </div>

              <div class="col-xs-6 form-padding">
                        <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                          <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">EMPLOYMENT NATURE</span> 
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="CustomerProfile" checked value="Salaried">SALARIED</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="CustomerProfile" value="Selfemployed" >SELF-EMP</span> 
                         </div>
                    </div>
                  </div>

            <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="preferred_address" id="preferred_address" required>
                      <option value="">PREFERRED MAILING ADDRESS</option>
                      <option value="Residence">RESIDENCE</option>
                      <option value="Office">OFFICE</option>
                    </select> 
            </div>

            <div class="col-xs-6 form-padding">
                        <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                        <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">APPLY SUPPLEMENTARY CARD</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" name="supplementary_card" checked value="Yes">YES</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="supplementary_card" value="No" >NO</span>
                      </div>
                      </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp; COMPANY DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
        
            <h4 class="txt-tlt pull-left hdn5">COMPANY DETAILS</h4> 
            
            <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld search_company" name="CompanyName" id="CompanyName" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">COMPANY NAME</label>
                      <div class="clear"></div>
                    </div>  
            </div>
             
             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="designation" id="designation" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">DESIGNATION</label>
                      <div class="clear"></div>
                    </div>  
             </div>

             <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="work_email" name="work_email" class="form-control text-lower" oninput="mail('work_email')"  required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">WORK EMAIL</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="work_STDCode" name="work_STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">WORK AREA STD CODE</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="work_number" name="work_number"  required  onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">PHONE NUMBER</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

                  <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="type_of_company" id="type_of_company" required>
                      <option value="">TYPE OF COMPANY</option>
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
                  
                  <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="highest_education" id="highest_education" required>
                      <option value="">HIGHEST EDUCATIONAL QUALIFICATIONS</option>
                      <option value="Under Graduate">Under Graduate</option>
                      <option value="Graduate/Diploma">Graduate/Diploma</option>
                      <option value="Post Graduate">Post Graduate</option>
                      <option value="Professional">Professional</option>
                      
                    </select> 
            </div>
             
              <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="Income" name="Income" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Income</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="ICICIBankRelationship" id="ICICIBankRelationship" required required>
                      <option value="">ICICI BANK RELATIONSHIP</option>
                        <option value="Salary">Salary</option>
                        <option value="Saving">Saving</option>
                        <option value="Loan">Loan</option>
                        <option value="Norelationship">Norelationship</option>
                    </select> 
          </div>


          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="Total_Exp" id="Total_Exp" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)" minlength="1" maxlength="3" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Total Experience</label>
                      <div class="clear"></div>
                    </div>  
                  </div>


              <div class="col-xs-6 form-padding" style="display: none" id="ICICIRelationshipNumbers">
                    <div>
 
                      <input type="text" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)" minlength="12" maxlength="16"  value="0" >
 
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">ICICI Relationship Number</label>
                      <div class="clear"></div>
                    </div>  
             </div>

 
					
          <div class="col-xs-6 form-padding">
                    <div class="form-control inp-fld" style="height:50px; position: relative; padding: 0px 0px;">
                      <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;"> OTHER BANK SALARY ACCT.</span>
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
      <span class="btn btn-primary outer-brd active"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" checked value="Yes"  >Yes</span>
      <span class="btn btn-primary outer-brd"><input type="radio" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" value="No">No</span>
         </div>
                    </div>
                  </div>
      </div>
         </div>     


     
     
     



                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; RESIDENCE ADDRESS DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">      
          
              <h4 class="txt-tlt pull-left hdn5">Current Address Details</h4> 
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ResidenceAddress1" id="ResidenceAddress1" class="form-control inp-fld" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Flat/Plot/House No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="ResidenceAddress2" id="ResidenceAddress2" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Building/Society Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="ResidenceAddress3" id="ResidenceAddress3" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Road No/Area/Locality</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="City" id="City" class="form-control inp-fld search_citynm" required dis>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">City</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pincode</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="ResidenceState" id="ResidenceState" class="form-control inp-fld search_statenm" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">State</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="type_current" id="type_current" required>
                      <option value="">RESIDENCE TYPE</option>
                     <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                      <option value="Rented_with_Family">Rented with Family</option>
                      <option value="Rented_with_Friends">Rented with Friends</option>
                      <option value="Rented_staying_alone">Rented staying alone</option>
                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                      <option value="Company_Provided">Company Provided</option>
                    </select> 
            </div>
      
      <div class="col-xs-12"><P style="padding:10px;font-size: 14px;line-height: 16px; display:-webkit-inline-box;" class="pull-left"><input type="checkbox" name="same" id="same_id" onclick="same_as_above('same_id');"/> &nbsp;&nbsp;Same As Above</p></div>
      
	  
	  <h4 class="txt-tlt pull-left hdn5">Permanent Address Details</h4>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerResidenceAddress1" id="PerResidenceAddress1" class="form-control inp-fld" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Flat/Plot/House No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="PerResidenceAddress2" id="PerResidenceAddress2" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Building/Society Name</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text"  name="PerResidenceAddress3" id="PerResidenceAddress3" class="form-control inp-fld" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Road No/Area/Locality</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerCity" id="PerCity" class="form-control inp-fld search_citynm" required dis>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">City</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="PerResidencePincode" name="PerResidencePincode" class="form-control inp-fld" required onkeypress="return fnAllowNumeric(event)" maxlength="6"  >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pincode</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" name="PerResidenceState" id="PerResidenceState" class="form-control inp-fld search_statenm" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">State</label>
                      <div class="clear"></div>
                    </div>  
                  </div>

          

            <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="per_res_type" id="per_res_type" required>
                      <option value="">RESIDENCE TYPE</option>
                      <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                      <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                      <option value="Rented_with_Family">Rented with Family</option>
                      <option value="Rented_with_Friends">Rented with Friends</option>
                      <option value="Rented_staying_alone">Rented staying alone</option>
                      <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                      <option value="Company_Provided">Company Provided</option>
                    </select> 
            </div> 

                   <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="email_id" name="email_id" class="form-control inp-fld" oninput="email('email_id')"  required >
                       <span id="mail_id" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Email ID(Personal)</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          
         </div>
         </div>
         
         
                
         <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; CONTACT DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">    
          
          <h4 class="txt-tlt pull-left hdn5">Contact Details</h4> 
		  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld"  id="ResidenceMobileNo" name="ResidenceMobileNo" required onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Mobile No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
				   <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="STDCode" name="STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">STD Code</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" class="form-control inp-fld" id="ResidencePhoneNumber" name="ResidencePhoneNumber" onkeypress="return fnAllowNumeric(event)" maxlength="10" required>
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Telephone No</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
          
         
      
    </div>
    </div>
    
  
    
 <!--   <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button>&nbsp; PERMANENT ADDRESS  DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
              
                  
          
          </div>
          </div>  -->
         
         
         
         
         
         
         
         
         
      <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <button class="ok-btn"><span class="glyphicon glyphicon-ok"></span></button> &nbsp;IDENTITY DETAILS
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">    
                  
          <h4 class="txt-tlt pull-left hdn5">Identity Details</h4> 
          <!-- <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-control inp-fld" required maxlength="13" minlength="13" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Application Number*</label>
                      <div class="clear"></div>
                    </div>  
                  </div> -->
                  <div class="col-xs-6 form-padding">
                    <div>
                      <input class="form-control inp-fld"  type="text" id="PanNo" name="PanNo"  oninput="pancard('PanNo')" required maxlength="10" minlength="10" >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Pancard</label>
                      <div class="clear"></div>
                      <div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                    </div>  
                  </div>
          <div class="col-xs-6 form-padding">
                    <select class="form-control inp-fld" name="SalaryAccountOpened" id="SalaryAccountOpened" required >
                      <option value="">SALARY ACCOUNT OPENED</option>
                          <option value="Above2Months"> > 2 Months</option>
                        <option value="Below2Months"> < 2 Months</option>
                        
                    </select> 
                               </div>
          

                  <div class="col-xs-6 form-padding">
                        <div class="form-control" style="height:50px; position: relative; padding: 0px 0px;">
                        <span style="position: absolute; z-index: 999; margin: 1px 0 0 8px; font-size: 10px; color: #bababa;">DO YOU HAVE A CREDIT CARD</span> 
                      
                      <div class="btn-grp mrg-top m-status emp-nat" data-toggle="buttons">
                      <span class="btn btn-primary outer-brd active"><input type="radio" id="have" name="have_credit_card" checked value="Yes">Yes</span>
                      <span class="btn btn-primary outer-brd"><input type="radio" name="have_credit_card" id="not_have" value="No" >No</span>
                      </div>
                      </div>
            </div>
            <div style="display: none;" id="credit_details" >
            <h4 class="txt-tlt pull-left">Please input details of your Credit Card having Maximum Credit Limit </h4>
           
            <div class="col-xs-6 form-padding" >
                    <div>
                      <input type="text" name="previous_bank" id="previous_bank" class="form-control inp-fld" onkeypress="return AllowAlphabet(event)" required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">Select Bank</label>
                      <div class="clear"></div>
                    </div>  
                   </div>

                   <div class="col-xs-6 form-padding" >
                    <div class="form-control" style="margin-bottom:10px; height:50px; position:relative; padding: 0;">
                      
                      <input type="text" class="form-control lastReportedsince" id="credit_date" name="credit_date" placeholder="Member Since" required>
                    </div>
                  </div>

                  <div class="col-xs-6 form-padding">
                    <div>
                      <input type="text" id="credit_limit" name="credit_limit" class="form-control inp-fld" onkeypress="return fnAllowNumeric(event)"  required >
                      <span class="highlight"></span><span class="bar"></span>
                      <label class="form-label-new lble">CREDIT LIMIT</label>
                      <div class="clear"></div>
                    </div>  
                  </div>
                  </div>
          
  </div>
  </div>
  
               <input type="hidden" name="prod" value="{{$prod}}">
               <input type="hidden" name="amount" value="{{$amount}}">
               <input type="hidden" name="interest" value="{{$interest}}">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <div class="col-md-12 pull-left text-justify">
            <p class="p-padding"><input type="checkbox" name="terms" id="checkboxid"  class="redio-lft"/>&nbsp; I hereby confirm that I have read and understood the Rupeeboss Terms and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.</p>
            
            <!-- <button class="sbmt-btn credit-submit dis-tbl">Confirm &amp; Continue</button> -->
            &nbsp;&nbsp;&nbsp;&nbsp;<button class="sbmt-btn icici-credit-submit dis-tbl " >Confirm & Continue<i class="icon-arrow-right"></i>


                  </button>
                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
            <!-- <b>All <mark style="color:red">*</mark>fields are mandatory.</b> -->
            </div> 
      
                  
          </div>
        </div>  
      </section>    
    </div>
    </form>

    <div class="modal fade" tabindex="-1" role="dialog" id="credit_process_sorry">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5>Your Application id is <b><span id="drop"></span></b>.<br>You have been <b><span id="drop1"></span></b>.<br><b><span id="drop2"></span></b><h5></p></h4>
        
        <p><b>Thank You For Choosing ICICI Credit Card.</b></p>
      </div>
      
      <div class="modal-footer">
        <a type="button" id="upload" name="upload" class="btn btn-primary" onclick="Redirect();" >Proceed to Document Upload</a>
        
      </div>
    </div>
  </div>
</div>



    
    
    
    <script>
    $(document).ready( function(){
    
      $('.income-source > div').click(function(){
        $('.income-source > div').removeClass('income-source-active');
        $(this).toggleClass('income-source-active');
      });
      
      $('.scenario > div').click(function(){
        $('.scenario > div').removeClass('scenario-active');
        $(this).toggleClass('scenario-active');
      });
    });
      
  </script>
  
  
  
  

    <!-- <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
    
    <script>
    function toggleChevron(e) {
      $(e.target)
        .prev('.panel-heading,.panel-heading1,.panel-heading2')
        .find("i.indicator")
        .toggleClass('glyphicon-minus glyphicon-plus');
    }
    $('#accordion').on('shown.bs.collapse', toggleChevron);
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    </script>
    
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>

<!--     <script>
      var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

      showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
      };

      function disableOther( button ) {
        if( button !== 'showRightPush' ) {
          classie.toggle( showRightPush, 'disabled' );
        }
      }
    </script> -->
  
    <script>
      $(window, document, undefined).ready(function() {

        $('input').blur(function() {
        var $this = $(this);
        if ($this.val())
          $this.addClass('used');
        else
          $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
          top: y + 'px',
          left: x + 'px'
        });

        $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
        });

      });
    </script>
    
    
  <!-- <script>
  $(function() {                       //run when the DOM is ready
  $(".outer-brd").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("active1");      //add the class to the clicked element
  });
   $(".outer-brd").dblclick(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("active1");      //add the class to the clicked element
  });
});
</script>

<script>
  $(function() {                       //run when the DOM is ready
  $(".padd-lef img").click(function() {  //use a class, since your ID gets mangled
    $(this).addClass("img-brd");      //add the class to the clicked element
  });
   $(".padd-lef img").mouseenter(function() {  //use a class, since your ID gets mangled
    $(this).removeClass("img-brd");      //add the class to the clicked element
  });
});
</script> -->


<script>
$(document).ready(function($){
    $("#phone").mask("(99) 9999-9999"); 
    $("#telf1").mask("(99) 9999*-9999");    
    $("#telf2").mask("(99) 9999?-9999"); 
});
</script>
 
 

<script>
$(document).ready(function(){

  
  // fade in #back-top
  $(function () {
    

    // scroll body to 0px on click
    $('.top').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      
    });
  });

});
</script>
  </body>
</html>
    
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
  function fnAllowNumeric(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

              return false;
            }
            return true;
          }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#ICICIBankRelationship').on('change', function() {
       

      if ( this.value == 'Salary')
      {
         $("#ICICIRelationshipNumber").val('');
         $("#ICICIRelationshipNumbers").show();
      }
      else{
        $("#ICICIRelationshipNumbers").hide();

        
      }


    });
});
</script>

<script type="text/javascript">

  

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_citynm").autocomplete({
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
          $(".search_citynm").val("");
          $(".search_citynm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  

 $(document).ready(function(){
    
    $(".search_statenm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchstateajax') }}",
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
          $(".search_statenm").val("");
          $(".search_statenm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  

 $(document).ready(function(){
    
    $(".search_company").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchcompanyajax') }}",
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
          //$(".search_company").val("");
          $(".search_company").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  function pancard(obj,val){
    // console.log(obj);
    if(obj=='PanNo' ){
                   var str =$('#PanNo').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#pannumber').hide();
                      // $('.credit-submit').show();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pannumber').show();
                    // $('.credit-submit').hide();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  

window.onload=function(){
// Change styles according to panels state


// Initialize collapsibles

$('.collapse').collapse({
  toggle: false,
  parent: '#accordion'
});


$(".icici-credit-submit").click(function(event){
  // alert('ojkae');
  event.preventDefault();


$('form#compareform').find('input').each(function(){
    if($(this).val() =="" && $('#compareform').valid()){
         var current = $(this).closest(".panel-collapse");
        if (!current.hasClass("in")) {
           current.collapse("show");

   
        }else{

          // current.addClass("in");

        } 



return false;
         
    }else{ 

       if( $('#ResidenceMobileNo').val()!='' &&  $('#ResidencePhoneNumber').val()!=''  &&  $('#PanNo').val()!='' &&  $('#checkboxid').val()==1){
        $(".iframeloading").show();
        $('#upload').show();
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('icici-credit-submit')}}",
         data : $('#compareform').serialize(),
         dataType: 'json',
         success: function(msg){
         $(".iframeloading").hide();  
        
         
          if(msg==2){
            
             alert("Something Went Wrong");

             
          }else{
            
            if (msg.Decision =='Declined') {
              $('#upload').hide();

            }
            if(msg.Decision==""){
              msg.Decision="Approved";
            }
             $('#drop').text(msg.id);
              $('#drop1').text(msg.Decision);
              $('#drop2').text(msg.Reason);
             $('#credit_process_sorry').modal('show');
          }
          return false;
        }  
    

      }); 

     
       return false;
       

      } 
    } 
 
    
});










 



});
}


 


</script>

<!--script type="text/javascript">
var prv_head;
var head_index=0;
var inputs = $("#compareform input[required='required']");
  $(".icici-credit-submit").click(function(event){
    //alert("okae");
    event.preventDefault();
      //var form=$(this).closest("form").attr('id');
      //console.log($('#compareform'));
      //var form=$('#compareform');
      var visible_err=0;
      
      var x=$(':input[required]:visible');
          x.each(function( index, element ) {
            var temp= element.getAttribute("value");
            var id=element.getAttribute("id");
            if(element.getAttribute("id")!="urlemailid" ){
              var have_value=$('#'+id).val();
              if(!have_value){
                var collapse_id=$('#'+id).parents().parents().parents().parents()[0].getAttribute("id");
                $("#"+id).addClass("error");
                prv_head= heading_no1 = "#heading"+collapse_id.replace("collapse", "");
                $(heading_no1).prop("style","border:1px solid #d02323");
                //alert("f"+ heading_no1);
                visible_err=1;
                return false;
              }
            }

            
          });
          //highlighting errors
           x.each(function( index, element ) {
            var id=element.getAttribute("id");
             var have_value=$('#'+id).val();
              if(!have_value){
                $("#"+id).addClass("error");
              }
            
          });
          //console.log(visible_err);
          if(visible_err==1){
           return false;
         }else{
         // alert(prv_head);
          $(prv_head).prop("style","border:1px solid #33da32 ");
         }
      var y=$(':input[required]:hidden');
          y.each(function( index, element ) {
            
            var temp= element.getAttribute("value");
            var id=element.getAttribute("id");
            //console.log(temp);
            if(element.getAttribute("id")!="urlemailid" ){
              var have_value=$('#'+id).val();
              //console.log("have"+have_value);
              if(!have_value){
                var collapse_id=$('#'+id).parents().parents().parents().parents()[0].getAttribute("id");
                $("#"+id).addClass("error");
                 var heading_no = "#heading"+collapse_id.replace("collapse", "");
                 $(heading_no).prop("style","border:1px solid #d02323 ");
                $(heading_no).find("a").click();
                //console.log(collapse_id +" " +id+" "+heading_no);
                return false;
               
              }
              
            }
            
          });


 
      if(! $('#compareform').valid()){    
         
        return false;
      }else{
      //THIS IS USELESS 
    if( $('#ResidenceMobileNo').val()!='' && $('#PerResidencePincode').val()!='' && $('#ResidencePincode').val()!='' && $('#work_number').val()!='' && $('#designation').val()!='' && $('#work_email').val()!='' && $('#CompanyName').val()!='' && $('#preferred_address').val()!='' && $('#NameOnCard').val()!='' && $('#ApplicantFirstName').val()!='' && $('#net_annual_income').val()!='' && $('#DateOfBirth').val()!='' && $('#CompanyName').val()!='' && $('#ResidenceAddress1').val()!='' && 
    $('#PerResidenceAddress1').val()!='' && $('#ResidencePhoneNumber').val()!='' && $('#ApplicationNumber').val()!=''){

        //console.log($('#compareform'));
        $(".iframeloading").show();
        // $(".icici-credit-submit").hide(); 
        $('#upload').show();
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('icici-credit-submit')}}",
         data : $('#compareform').serialize(),
         dataType: 'json',
         success: function(msg){
         $(".iframeloading").hide();  
          console.log(msg);
         
          if(msg==2){
            
             alert("Something Went Wrong");

             
          } 
          else{
            
            if (msg.Decision =='Declined') {
              $('#upload').hide();

            }
             $('#drop').text(msg.id);
              $('#drop1').text(msg.Decision);
              $('#drop2').text(msg.Reason);
             $('#credit_process_sorry').modal('show');
          }

        }  
      }); 

}else{

  alert("Please Enter All Mandatory Fields.");

}


      }






    });


</script-->



<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='email_id' ){
                   var str =$('#email_id').val();
                   var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function mail(obj,val){
 
    if(obj=='work_email' ){
                   var str =$('#work_email').val();
                   var emailPattern =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                   var res = str.match(emailPattern);


                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_error').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_error').show();
 
                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  function url_mail(obj,val){
    //console.log(obj);
    if(obj=='urlemailid' ){
                   var str =$('#urlemailid').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#urlmail_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#urlmail_id').show();

                    return false;
                  }
                  
  }
}
</script>


<script type="text/javascript">
          function Redirect() 
          {
            var mobile=$('#ResidenceMobileNo').val();
            var app_id=$('#drop').text();
            window.location="http://erp.rupeeboss.com/Credit_Card_Upload_Docs.aspx?App_Id="+app_id+"&CardType=ICICI&MobileNo="+mobile;
            // window.location.href ="{{URL::to('thank-you')}}";
          }
</script>

<!-- <script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReportedsince").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script> -->

<script type="text/javascript">
  $('#have').change(function(){
 
  $("#credit_details").show();
  });
</script>

<script type="text/javascript">
  $('#not_have').change(function(){
 
  $("#credit_details").hide();
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $('#net_annual_income').on('change', function() {
      //console.log(this.value);
      //resetting dropdown as all dropdown based on first one
      $('#your_interests').get(0).selectedIndex = 0;
      $('#cards').get(0).selectedIndex = 0;
      if ( this.value == '>2.5Lacs')
      {
        $("#credit_card_type").show();
        $("#your_interests option[value='Travel']").hide();
        $("#your_interests option[value='Motorsports']").hide();
       
      }
      else if(this.value == '>5.0Lacs' || this.value == '>10Lacs' || this.value == '>15Lacs')
      {
        $("#credit_card_type").show();
        $("#your_interests option[value='Travel']").show();
        $("#your_interests option[value='Motorsports']").show();
      }
    });

    $('#your_interests').on('change', function() {
       //resetting cards dropdown as changing intrest changs cards
      $('#cards').get(0).selectedIndex = 0;
      var net_annual_income=$('#net_annual_income').find(":selected").val();
      var your_interests=$('#your_interests').find(":selected").val();
     // console.log(net_annual_income);
      $("#credit_card_name").show();
      $("#cards option[value='Platinum Chip Credit Card']").hide();
      $("#cards option[value='Coral Credit Card']").hide();
      $("#cards option[value='Jet Coral Credit Card']").hide();
      $("#cards option[value='Ferrari Platinum Credit Card']").hide();
      $("#cards option[value='Rubyx Credit Card']").hide();
      $("#cards option[value='Sapphiro Credit Card']").hide();
      $("#cards option[value='Jet Rubyx Credit Card']").hide();
      $("#cards option[value='Jet Sapphiro Credit Card']").hide();
      $("#cards option[value=' Ferrari Signature Credit Card']").hide();
      if ( your_interests == 'Lifestyle')
      {
       
        $("#cards option[value='Platinum Chip Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>5.0Lacs'))
      {
       
        $("#cards option[value='Coral Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>10Lacs'))
      {
        $("#cards option[value='Rubyx Credit Card']").show();
      }
      if (( your_interests == 'Lifestyle' && net_annual_income == '>15Lacs'))
      {
        $("#cards option[value='Sapphiro Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>5.0Lacs'))
      {
       $("#cards option[value='Jet Coral Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>10Lacs'))
      {
         $("#cards option[value='Jet Rubyx Credit Card']").show();
      }
      if (( your_interests == 'Travel' && net_annual_income == '>15Lacs'))
      {
        $("#cards option[value='Jet Sapphiro Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>5.0Lacs'))
      {
           $("#cards option[value='Ferrari Platinum Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>10Lacs'))
      {
         $("#cards option[value=' Ferrari Signature Credit Card']").show();
      }
      if (( your_interests == 'Motorsports' && net_annual_income == '>15Lacs'))
      {
         $("#cards option[value=' Ferrari Signature Credit Card']").show();
      }
    });
});
</script>

<script type="text/javascript">
  function same_as_above(obj,val){

     // console.log(obj);
     var atLeastOneIsChecked = $('#same_id:checkbox:checked').length > 0;
     // console.log(atLeastOneIsChecked);
    if (atLeastOneIsChecked == true) {
      // alert("ok");

    $('#PerResidenceAddress1').val($('#ResidenceAddress1').val());
     $('#PerResidenceAddress2').val($('#ResidenceAddress2').val());
     $('#PerResidenceAddress3').val($('#ResidenceAddress3').val());
     $('#PerResidenceState').val($('#ResidenceState').val());

     $('#PerCity').val($('#City').val());
     $('#PerResidencePincode').val($('#ResidencePincode').val());
     $('#Persearch_statenm').val($('#search_statenm').val());
     $('#per_res_type').val($('#type_current').val());
     $('#PerResidenceAddress1').addClass("used");
     $('#PerResidenceAddress2').addClass("used");
     $('#PerResidenceAddress3').addClass("used");
     $('#PerResidenceState').addClass("used");


     $('#PerCity').addClass("used");
     $('#PerResidencePincode').addClass("used");
     $('#Persearch_statenm').addClass("used");
     $('#per_res_type').addClass("used");
     }else{

     $('#PerResidenceAddress1').val('');
     $('#PerResidenceAddress2').val(''); 
     $('#PerResidenceAddress3').val('');
      $('#PerResidenceState').val('');

     $('#PerCity').val('');
     $('#PerResidencePincode').val('');
     $('#Persearch_statenm').val('');
     $('#per_res_type').val('');
     $('#PerResidenceAddress1').removeClass("used");
     $('#PerResidenceAddress2').removeClass("used");
     $('#PerResidenceAddress3').removeClass("used");
     $('#PerResidenceState').removeClass("used");


     $('#PerCity').removeClass("used");
     $('#PerResidencePincode').removeClass("used");
     $('#Persearch_statenm').removeClass("used");
     $('#per_res_type').removeClass("used");
  }
}



</script>

<script src="js/icici_js/classie.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>  
<link href="css/jquery-ui.min.css" rel="Stylesheet"></link>
<script src="js/jquery-ui.js" ></script>
<script type="text/javascript" src="js/datepicker.js"></script>


<script>
		  $( function() {
			$( '#datepicker,#datepicker1,#datepicker2' ).datepicker({
				changeMonth:true,
				changeYear:true,
				dateFormat: 'dd-mm-yy',
				yearRange : 'c-65:c+10'
			});
		  });
	 </script>

<script>
  $("#DateOfBirth").click(function() {
    $(".lastReporteddob").datepicker('show');
});





 

  $('#checkboxid').click(function () {
    if ($(this).is(':checked')) {

         $('#checkboxid').val(1);
        
    } else {
        $('#checkboxid').val(0);
    }
});

</script>

<script type="text/javascript">
  $('#btnweburl').click(function(){
    event.preventDefault();
      $form=$('#to_view_url');
      if(! $form.valid()){

      }else{
       $.ajax({  
         type: "POST",  
         url: "{{URL::to('to-view-on-browser-url')}}",
         data : $('#to_view_url').serialize(),
         success: function(msg){
           //console.log(msg);
           if (msg == 1) 
           {
             alert('As per your request we have sent a mail to your email ID.');
           } else 
           {
            alert('Oops..!! Something Went Wrong');
           }
          
        }  
      }); 
      }
  });
</script>

<!-- var y=$(':input[required]:hidden');
          y.each(function( index, element ) {
            
            var temp= element.getAttribute("value");
            //console.log(temp);
            if(element.getAttribute("id")!="urlemailid" && temp==null){

              console.log(element.getAttribute("id")+" "+temp);
            }
            
          });
      
 -->
