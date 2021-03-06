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
<script type="text/javascript" src="js/datepicker.js"></script>


  <div>
	<div class="container">
		  <!--Step 1 -->
          
          
        <div id="details" class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <h1 class="align-center loan-head">RBL Medical Loan</h1>
					
</div>
				<div class="col-md-6">
              <img src="{{url('images/rbl_mediacal_loan.jpg')}}"  width="570" class="img-responsive"/>
			  <div>
			    <ul class="text-left pad1 ull">
				    <li>Loan amount from Rs.1 Lakh up to Rs.20 Lakhs.</li>
                    <li>Convenient loan repayment option of 12 to 60 months.</li>
                    <li>No security or collateral required to avail this loan.</li>
                   <li> Simplified and quick documentation.</li>
                    
                    <li>Hassle-free loan sanction and disbursal procedure.</li>
                    
				</ul>
			  </div>
				</div>
				
				<div class="col-md-6">
					<div class="row text-left rate box-shadow pad1 white-bg mrg-btm">
				
					<form class="rbl_personal_loan_form" id="rbl_personal_loan_form" role="form" method="POST">
					 <?php if(isset($_GET['CampaignName'])){?>
								<input type="hidden" name="CampaignName" id="CampaignName" value="<?php echo isset($_GET['CampaignName'])?$_GET['CampaignName']:'';?>">
								<?php }else{?>
								<input type="hidden" name="CampaignName" id="CampaignName" value="0">
								<?php }?>
					<div class="row">
					<div class="form-group">
					<h4 class="hdr pad1 text-center">&nbsp;&nbsp;&nbsp;&nbsp;Your Loan Quote in Under 1 Minute.</h4>
					<br>
					<div class="col-md-6 col-xs-6">
					<select class="form-control drop-arr select-sty" name="city" id="city">
					  <option disabled selected value="">City</option>
					</select>
					</div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="First Name *" 
					name="first_name" id="first_name" onkeypress="return AllowAlphabet(event)" required=""></div>
					<div class="col-md-6 col-xs-6"><input type="text" class="form-control date lastReporteddob" placeholder="Date of Birth *" name="dob" id="dob" required=""></div>
					
					
					<div class="col-md-6 col-xs-6">
					<select class="form-control drop-arr select-sty" name="employ_type" id="employ_type" required>
					   <option disabled selected  value="">Select Employment & Mode of Credit *</option>
					        <option value="1">Salaried: Account Transfer</option>
						    <option value="2">Salaried: By Cheque</option>
						    <option value="3">Salaried: By Cash</option>
						    <option value="4">Self employed</option>
						    <option value="5">Others</option>
					</select>
					</div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Employer Name *" name="employer_name" id="employer_name" onkeypress="return AllowAlphabet(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Net Monthly Income *" name="income" id="income" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="EMI Amount for Existing Loan *" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Email ID *" name="email" id="email" oninput="mail('email')" required=""><span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span></div>
					

				    <div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Mobile No*" name="mobile_no" id="mobile_no" maxlength="10" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-10 col-xs-12">
					<input type="checkbox" name="check" required /> I authorize RBL Bank to contact me. This will override registry on DND / NDNC * 
					</div>
					</div>
					</div>
					
					<!-- <p>Have you been at the current address for more then 6 month. if no, provide the previous address</p> -->
					
					<br>
					<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="proceed">Proceed<i class="icon-arrow-right"></i></a>
					</form>
					</div>		
				</div>
			</div>
            
            
       
     
     
     
     
         <!--Step 2-->
       
       <div class="row">
       <div class="col-md-1"></div>
	<div class="col-md-10 pad-no-mob">
	 <form id="customer_details_form" method="POST" style="display: none;" >
	  {{ csrf_field() }}
	
<div class="col-md-12">
<h2 class="pad">Personal Loan - Customer Details </h2>
<div class="table-responsive comp-pg white-bg">
	<table width="100%" border="1" class="tbl  table-striped ">
  <tr>
    <td><b>Loan Amount</b></td>
    <td><b>Loan Tenure (in months)</b></td>
    <td><b>Interest Rate</b></td>
    <td><b>EMI</b></td>
    <td><b>Processing Fees</b></td>
  </tr>
  <tr>
    <td><b><span id="amount"></span></b></td>
    <td><b><span id="period"></span></b></td>
    <td><b>16%</b></td>
    <td><b><span id="to_pay"></span></b></td>
    <td><b><span id="p_fee"></span></b></td>
  </tr>


</table>
</div>
</div>

	<div class="col-md-12 titl-1">
	
	
	
    
    <div class="table-responsive white-bg box-shadow pad">
	
	
	
	<h4 class="text-center bg-info pad">Personal Information</h4>
	<br>
	
	<div class="col-md-4">
	<span>First Name</span>
	<input type="text" name="FirstName" class="form-control" id="FirstName" required />
	</div>
	<div class="col-md-4">
	<span>Middle Name</span>
	<input type="text" name="MiddleName" class="form-control" id="MiddleName" onkeypress=" return AllowAlphabet(event)" />
	</div>
	<div class="col-md-4">
	<span>Last Name</span>
	<input type="text" name="LastName" class="form-control" id="LastName" onkeypress="return AllowAlphabet(event)" required />
	</div>
	<div class="col-md-4">
	<span>Gender</span>
	<td><select class="form-control drop-arr select-sty" name="Gender" id="Gender" required>
					   <option disabled selected  value="">Gender*</option>
					        <option value="1">Male</option>
						    <option value="2">Female</option>
						    <option value="3">Third Gender</option>
				</select></td>
	</div>
	<div class="col-md-4">
	<span>Address Line 1</span>
    <input type="text" class="form-control" name="ResAddress1" id="ResAddress1" required />
	</div>
	<div class="col-md-4">
	<span>Address Line 2</span>
    <input type="text" class="form-control" name="ResAddress2" id="ResAddress2" />
	</div>
	<div class="col-md-4">
	<span>Residence Landmark</span>
    <input type="text" class="form-control" name="ResLand" id="ResLand"/>
	</div>
	<div class="col-md-4">
	<span>Date Of Birth</span>
    <input type="text" class="form-control date" name="DOB" id="DOB" required />
	</div>
	<div class="col-md-4">
	<span>Residence Type</span>
	<select class="form-control drop-arr select-sty" name="ResType" id="ResType" required>
					   <option disabled selected  value="">Residence Type*</option>
					        <option value="1">Owned by Self-Spouse</option>
						    <option value="2">Owned by Parents/Sibling</option>
						    <option value="3">Owned by Relative</option>
						    <option value="4">Rented with Family</option>
						    <option value="5">Rented with Friends</option>
						    <option value="6">Rented- Staying Alone</option>
						    <option value="7">Guest House</option>
						    <option value="8">Hostel</option>
						    <option value="9">Company Lease</option>
						    
					</select>
	</div>
	
	<div class="col-md-4">
	<span>Living Since</span>
    <input type="text" class="lastReportedsince form-control" name="CurResSince" id="CurResSince" required />
	</div>
	
	<div class="col-md-4">
	<span>Pincode</span>
	<input type="text" class="form-control" name="ResPIN" id="ResPIN" maxlength="10" required/>
	</div>
	
	
   
	<table width="100%" border="1" class="tbl table-bordered table-striped">
	<!-- <input type="hidden" name="Version" id="Version" value="3"> -->
	<input type="hidden" name="Mobile" id="Mobile">
	<input type="hidden" name="Email" id="Email">
	<input type="hidden" name="EmpType" id="EmpType">
	<input type="hidden" name="LnAmt" id="LnAmt">
	<input type="hidden" name="TnrMths" id="TnrMths">
	<input type="hidden" name="IRR" id="IRR">
	<input type="hidden" name="ProcFee" id="ProcFee" value="">
	<input type="hidden" name="NMI" id="NMI">
	<input type="hidden" name="EmiCurPay" id="EmiCurPay">
	<input type="hidden" name="ResCity" id="ResCity">
 
</table>
    <br>

	<h4 class="text-center bg-info pad">Employment & Income Details</h4>
	<br>
	<div class="table-responsive">
	
	<div class="col-md-4">
	<span>Company Name</span>
	<input type="text" class="form-control" name="CompanyName" id="CompanyName" required />
	</div>
	<div class="col-md-4">
	<span>When did You Join This Company</span>
	<input type="text" class="lastReporteddoj form-control" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" required />
	</div>
	<div class="col-md-4">
	<span>Total Work Experience</span>
	<input type="text" name="TotWrkExp" class="form-control" id="TotWrkExp" onkeypress="return fnAllowNumeric(event)" required/>
	</div>
	<div class="col-md-4">
	<span>Office Address 1</span>
	<input type="text" name="OffAddress1" class="form-control" id="OffAddress1"  />
	</div>
	<div class="col-md-4">
	<span>Office Address 2</span>
	<input type="text" name="OffAddress2" class="form-control" id="OffAddress2" />
	</div>
	<div class="col-md-4">
	<span>Organization Category</span>
	<select class="form-control drop-arr select-sty" name="OrgCategory"" id="OrgCategory"" required>
					   <option disabled selected  value="">Organization Category*</option>
					        <option value="1">Public Ltd</option>
						    <option value="2">Private Ltd</option>
						    <option value="3">MNC</option>
						    <option value="4">Central/State Govt</option>
						    <option value="5">Proprietorship</option>
						    <option value="6">LLP</option>
						    <option value="7">Partnership firm</option>
						    <option value="8">Others including Society/Trust/AOP</option>
					</select>
	</div>
	<div class="col-md-4">
	<span>Office City</span>
	<select class="form-control drop-arr select-sty" name="OffCity" id="OffCity">
					  <option disabled selected value="">City</option>
					</select>
	</div>
	<div class="col-md-4">
	<span>Pincode</span>
	<input type="text" name="OffPIN" class="form-control" id="OffPIN" onkeypress=" return fnAllowNumeric(event)" maxlength="6"  />
	</div>
	<div class="col-md-4">
	<span>Phone No.</span>
	<input type="text" name="OffPhone" class="form-control" id="OffPhone" onkeypress="return fnAllowNumeric(event)" maxlength="8"/>
	</div>
	<div class="col-md-4">
	<span>Pancard</span>
	<input type="text" name="PAN" id="PAN" class="form-control" oninput="pan_card('PAN')" maxlength="10" required />
	<span id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</span>
	</div>
	<div class="col-md-4">
	<span>Qualification</span>
	<select class="form-control drop-arr select-sty" name="Qualification" id="Qualification" required>
					   <option disabled selected  value="">Qualification*</option>
					        <option value="1">Under Graduate</option>
						    <option value="2">Graduate</option>
						    <option value="3">Post Graduate</option>
						    <option value="4">Professional</option>
						    <option value="9999">Others</option>
					</select>
	</div>
	
	
	
	
	
	
	
</div>
<!-- <div class="col-md-12">
<input type="checkbox" name="check" required /> I have read the terms & Conditions and
</div> -->
<br>
<div class="col-md-12">
<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit_application">Submit my Application<i class="icon-arrow-right"></i></a>
</div>
 <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
  <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
 </div>
</div>
	</div>
	</form>
	</div>
	</div>
    
    
    
    
   
   <!--Step 3 -->
   
   <form id="quotes" name="quotes" >
   <div id="get_quotes" class="row" style="display: none;">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2 class="pad">Personal Loan - Get Quote </h2>
					
                </div>
                 <div class="col-md-1"></div>
				<div class="col-md-10 white-bg box-shadow pad">
			
				<div class="col-md-1"></div>
				<div class="col-md-10 col-xs-12">
					<!-- <h2 class="head-rbl">Move Slider to Customize Your Loan Amount</h2> -->
					<div class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Loan amount:</h3>
                   <input type="text" class="form-control " placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="7" onkeypress="return fnAllowNumeric(event)" required="" onkeyup ="calc()"></div>
					</div>
					<input type="hidden" name="roi" id="roi" value="0.013">
					<!-- <input type="hidden" name="fee" id="fee" value="2"> -->
					<div id="" class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Tenure:</h3>
					 <select class="form-control block drop-arr select-sty " name="tenure" id="tenure"  required onchange="calc()">
                                            <option disabled selected  value="">Tenure</option>
                                            <option  value="12">12 months</option>
                                            <option  value="24">24 months</option>
                                            <option  value="36">36 months</option>
                                            <option  value="48">48 months</option>
                                            <option  value="60">60 months</option>
						                    </select> 
					</div></div>
				</div>
				<div class="row">
				<div class="col-md-12 col-xs-12 ">
				<div class="table-responsive white-bg" style="margin-bottom:0px;">
				<table width="100%" class="table table-bordered mrg-top box-shadow">
				 <tr class="bg-info pad">
				   <td><b>Loan Eligibilty</b></td>
				  <!--   <td><b>Max Eligiblity</b></td> -->
				   <td><b>Rate Type</b></td>
				   <td><b>Best Rate</b></td>
				   <td><b>EMI</b></td>
				   <td><b>Processing Fee</b></td>
				  <!--  <td><b>Total Savings</b></td> -->
				   <td></td>
				 </tr>
				 <tr>
				   <td> <input type="text" class="form-input-new form-control" name="loanamount" id="loanamount" minlength="6" maxlength="9" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)" readonly></td>
				   <td>Fixed</td>
				   <!-- <td><span><strike>16%</strike></span> <span>15%</span></td> -->
				   <td><span>16%</span></td>
				   <td><span id="monthly_installment"></span></td>
				   <!-- <td>6000</td> -->
				   <td><span id="processingfee"></span></td>
				   <td><a class="btn btn-primary btn-outline animate-box fadeInUp animated" id="apply">APPLY</a></td>
				 </tr>
				</table>
				</div>
				</div>
				</div>
                   
				   <div class="row">
				 <div class="col-md-8 para">
				 <p class="mrg-top"> The Quote displayed here is not the final approved loan amount This is basis the details shared by you. Approval of loan would be to  RBL Bank internal prodct and policy guidelines. the applicants are required to fill the RBL Bank Applications froms to Proceed further.</p>
				 </div>
				 <div class="col-md-4 text-justify para">
				 <p>Besides offering you the best interest rates and eligibility in the business, RBL Bank now offers you the fastest loan processing service as well</p>
               <p>Apply Now and experience for yourself RBL Bank's superior loan processing service.</p>
				 </div>
				 </div>
				 </div>
				 
			</div> 
			</br>
			</form>
</div>
</div>


<!-- modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black; font-size: 15px">Thank You for your interest in RBL Bank Personal Loan.Your application has been Approved in Principle. We request you to kindly note your Application reference no.<b><span id="rbl"></span></b> for future reference.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-success">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px">Thank You for your interest in RBL Bank Personal Loan.Your application has been submitted successfully. We request you to kindly note your Application reference no.<b><span id="rbl_success"></span></b> for future reference.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Thank You for your interest in RBL Bank Personal Loan.We are sorry to say you have been <span id="rbl_pl_errcode"> </span> and your Application reference no <b><span id="rbl_error"></span></b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup-duplicate">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured.ErrorInfo is : <b><span id="rbl-duplicate"></span></b>.<h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="terms">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px;"><b>You must agree to the terms first.<b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="income">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px;"><b>Your Net Income Should Be Minimum 25000.<b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="amt">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black;font-size: 15px;"><b>Amount should be equal to 1Lac (or) between 1Lac to 20Lacs.<b><h5></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<!-- script -->

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
    var d = new Date();
    var year = d.getFullYear()-25 ;
    d.setFullYear(year);

    $("#dob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-84Y",
      yearRange: '-84:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurResSince").datepicker({ dateFormat: "yy-mm-dd",
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
    if(obj=='email' ){
                   var str =$('#email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
	$('#proceed').click(function(){
    
      if(! $('#rbl_personal_loan_form').valid())
       {
              $('#terms').modal('show');
              // alert("You must agree to the terms first.");
        }
        else
        {   
        	var city = $('#city').val();
        	console.log(city);
        	$('#ResCity').val(city);
        	
        	
        	var name = $('#first_name').val();
        	console.log(name);
        	$('#FirstName').val(name);

        	var dob = $('#dob').val();
        	console.log(dob);
        	$('#DOB').val(dob);

        	var employment_type =$('#employ_type').val();
        	console.log(employment_type);
        	$('#EmpType').val(employment_type);

        	var income =$('#income').val();
        	console.log(income);
        	if (income < 25000) 
           {
           	$('#income').modal('show');
             // alert('Your Net Income Should Be Minimum 25000');
             return false;
           }
        	$('#NMI').val(income);

        	var emi =$('#emi').val();
        	console.log(emi);
        	$('#EmiCurPay').val(emi);

        	var email_id =$('#email').val();
        	console.log(email_id);
        	$('#Email').val(email_id);

        	var mob =$('#mobile_no').val();
        	console.log(mob);
        	$('#Mobile').val(mob);

        	var company_name =$('#employer_name').val();
        	console.log(mob);
        	$('#CompanyName').val(company_name);
              
              $('#get_quotes').show();
	          $('#details').hide();
        }
	});
</script>

<script type="text/javascript">   

 $.ajax({ 
   url: "{{URL::to('rbl-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#city').append('<option value="'+value.code+'">'+value.city+'</option>');

        }); 
    }else{
      $('#city').empty().append('No Result Found');
    }

   },

 });
</script>



<script type="text/javascript">
	
	
		
    function calc(){
      
    	
    	var amt=$('#loan_amount').val();
    	var tenure=$('#tenure').val();
    	if(!tenure)return;
        var roi = 0.013;
       
        var emi  = amt * roi * (Math.pow(1 + roi, tenure) / (Math.pow(1 + roi, tenure) - 1));
        var installment =Math.round(emi);
        var fee =amt*0.02;
        console.log(installment);
        $('#monthly_installment').empty().append(installment);
        $('#processingfee').empty().append(fee);
        $('#amount').empty().append(amt);
        $('#period').empty().append(tenure);
        $('#to_pay').empty().append(installment);
        $('#p_fee').empty().append(fee);
        $('#ProcFee').val(fee);

    }

</script>

<script type="text/javascript">
	// $('#apply').click(function(){
	// 	alert('okae');
 //     $('#customer_details_form').show();
 //     $('#get_quotes').hide();
	// });
	$('#apply').click(function(){
		// alert('okae');
       if(! $('#quotes').valid())
       {
       	
        }
        else
        {
      var loanamount =$('#loan_amount').val();
      console.log(loanamount);
      if ($('#loan_amount').val()>2000000) 
           {
           	$('#amt').modal('show');
             // alert('Amount should be equal to 1Lac (or) between 1Lac to 20Lacs');
             return false;
           }
    	

      $('#LnAmt').val(loanamount);

      var roi =16;
       console.log(roi);
      $('#IRR').val(roi);

      var tenure =$('#tenure').val();
       console.log(tenure);
      $('#TnrMths').val(tenure);

      // var process_fee =$('#p_fee').val();
      //  console.log(process_fee);
      // $('#ProcFee').val(process_fee);


      $('#customer_details_form').show();
      $('#get_quotes').hide();
      // $('#details').hide();
  }
	});
</script>

<script type="text/javascript">
 
  $(document).ready(function()
{
    function update()
    {
      if(! $("#loan_amount").val()){
          $("#loanamount").val('');
      }else{
        var cost = parseFloat($("#loan_amount").val());
        // console.log(cost);
        var total = (cost);
       
        // console.log(total);
        $("#loanamount").val(total);
      }
    }
    $(document).on("change, keyup", "#loan_amount", update);
});
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $("#CurCmpnyJoinDt").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
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
    	$('#submit_application').click(function(e){
        // e.preventDefault();
         // alert('okae');
         if(! $('#customer_details_form').valid())
       {
              alert("You must agree to the terms first.");
              return false;
        }
        else
        {     
        	  // $('#submit_application').hide();
        	  $(".iframeloading").show();
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('rbl-personal-loan-submit-dc')}}",
         data : $('#customer_details_form').serialize(),
         success: function(msg){
         	$(".iframeloading").hide();
         	var returnedData = JSON.parse(msg);
         	console.log(returnedData.ReferenceCode);
			var status_id=returnedData.Status;
			var error=returnedData.Errorinfo;
              console.log(returnedData.ReferenceCode);
               if(status_id==0){
						// e_id=returnedData.Errorcode;
						// status="Ooops! Error occured.";
						// if(e_id)
						// {
						// 	error=get_rbl_error(e_id);
						// }
						
						$('#rbl-duplicate').empty().append(returnedData.Errorinfo);
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-duplicate').modal('show');
						
					}else if(status_id==1){
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup').modal('show');
					}else if(status_id==4){
						$('#rbl_success').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-success').modal('show');
					}else{
						var reject="Rejected";
                        $('#rbl_pl_errcode').empty().append(reject);
					    $('#rbl-popup-error').modal('show');
					    $('#rbl_error').empty().append(returnedData.ReferenceCode);
					}

					
					  
      }   
     });
    	}
    });

    	function get_rbl_error(id){
			error='';
			switch (id) {
				case 1: 
					error="INPUT OUT OF MASTERS RANGE";
					break;
				case 2: 
					error="VALIDATION ERROR";
					break;
				case 3: 
					error="INPUT NOT IN VALID DATA FORMAT (SPECIAL CHARACTERS etc)";
					break;
				case 4:
					error="SYSTEM UNAVAILABLE";
					break;
				case 5: 
					error="DECISION CENTER ERROR";
					break;
				case 6:
					error="DUPLICATE APPLICATION";
				 	break;
			}
				return error;
		}
    </script>

    <script type="text/javascript">   
    $.ajax({ 
   url: "{{URL::to('rbl-off-city-master')}}",
   method:"GET",
   success: function(datas)  
   {
   var data=$.parseJSON(datas);
   console.log(data);
   if(data)
      {      $.each(data, function( index, value ) {
            $('#OffCity').append('<option value="'+value.code+'">'+value.city+'</option>');

        }); 
    }else{
      $('#OffCity').empty().append('No Result Found');
    }

   },

 });
</script>