@include('layout.header')


<div id="fh5co-hero">
	<div class="container">
		  <!--Step 1 -->
          
          
        <div id="details" class="row">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <h1 class="align-center loan-head">RBL Personal Loan</h1>
					
</div>
				<div class="col-md-6">
              <img src="{{url('images/rbl_personal_loan.jpg')}}"  width="570" class="img-responsive"/>
			  <div>
			    <ul class="text-left pad1 ull">
				    <li>Loan amount from Rs.1 Lakh up to Rs.20 Lakhs.</li>
                    <li>Convenient loan repayment option of 12 to 60 months.</li>
                    <li>No security or collateral required to avail this loan.</li>
                   <li> Simplified and quick documentation.</li>
                    <li>Attractive interest rates from 14.5% p.a. up to 23% p.a.</li>
                    <li>Hassle-free loan sanction and disbursal procedure.</li>
                    <li>Representative example: Borrowing Rs. 5,00,000 at 16% interest rate and repaying over a tenure of 4 years with 48 monthly repayments of Rs 14,170.</li>
				</ul>
			  </div>
				</div>
				
<<<<<<< HEAD
				<div class="col-md-6 titl-1">
=======
				<div class="col-md-6">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
					<div class="row text-left rate box-shadow pad1 white-bg mrg-btm">
				
					<form class="rbl_personal_loan_form" id="rbl_personal_loan_form" role="form" method="POST">
					<div class="row">
					<div class="form-group">
					<h4 class="hdr pad1 text-center">&nbsp;&nbsp;&nbsp;&nbsp;Your Loan Quote in Under 1 Minute.</h4>
					<br>
<<<<<<< HEAD
					<div class="col-md-6 col-xs-12">
					<span>City</span>
=======
					<div class="col-md-6 col-xs-6">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
					<select class="form-control drop-arr select-sty" name="city" id="city">
					  <option disabled selected value="">City</option>
					</select>
					</div>

<<<<<<< HEAD
					<div class="col-md-6 col-xs-12">
					<span>First Name</span>
					<input type="text" class="form-control" placeholder="First Name *" 
					name="first_name" id="first_name" onkeypress="return AllowAlphabet(event)" required=""></div>
					
					<div class="col-md-6 col-xs-12">
					<span>Date of Birth</span>
					<input type="text" class="form-control date lastReporteddob" placeholder="Date of Birth *" name="dob" id="dob" required=""></div>
					
					
					<div class="col-md-6 col-xs-12">
					<span>Select Employment & Mode of Credit</span>
=======
					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="First Name *" 
					name="first_name" id="first_name" onkeypress="return AllowAlphabet(event)" required=""></div>
					<div class="col-md-6 col-xs-6"><input type="text" class="form-control date lastReporteddob" placeholder="Date of Birth *" name="dob" id="dob" required=""></div>
					
					
					<div class="col-md-6 col-xs-6">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
					<select class="form-control drop-arr select-sty" name="employ_type" id="employ_type" required>
					   <option disabled selected  value="">Select Employment & Mode of Credit *</option>
					        <option value="1">Salaried: Account Transfer</option>
						    <option value="2">Salaried: By Cheque</option>
						    <option value="3">Salaried: By Cash</option>
						    <option value="4">Self employed</option>
						    <option value="5">Others</option>
					</select>
					</div>

<<<<<<< HEAD
					<div class="col-md-6 col-xs-12">
					<span>Employer Name</span>
					<input type="text" class="form-control" placeholder="Employer Name *" name="employer_name" id="employer_name" onkeypress="return AllowAlphabet(event)" required=""></div>

					<div class="col-md-6 col-xs-12">
					<span>Net Monthly Income</span>
					<input type="text" class="form-control" placeholder="Net Monthly Income *" name="income" id="income" onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" required=""></div>

					<div class="col-md-6 col-xs-12">
					<span>EMI Amount for Existing Loan</span>
					<input type="text" class="form-control" placeholder="EMI Amount for Existing Loan *" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-12">
					<span>Email ID</span>
					<input type="text" class="form-control" placeholder="Email ID *" name="email" id="email" oninput="mail('email')" required=""><span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span></div>
					

				    <div class="col-md-6 col-xs-12">
					<span>Mobile No</span>
					<input type="text" class="form-control" placeholder="Mobile No*" name="mobile_no" id="mobile_no" maxlength="10" onkeypress="return fnAllowNumeric(event)" required=""></div>
=======
					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Employer Name *" name="employer_name" id="employer_name" onkeypress="return AllowAlphabet(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Net Monthly Income *" name="income" id="income" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="EMI Amount for Existing Loan *" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Email ID *" name="email" id="email" oninput="mail('email')" required=""><span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span></div>
					

				    <div class="col-md-6 col-xs-6"><input type="text" class="form-control" placeholder="Mobile No*" name="mobile_no" id="mobile_no" maxlength="10" onkeypress="return fnAllowNumeric(event)" required=""></div>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d

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
<<<<<<< HEAD
	<div class="col-md-10 pad-no-mob padding-0-xs-10">
=======
	<div class="col-md-10 pad-no-mob">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
	 <form id="customer_details_form" method="POST" style="display: none;">
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
<<<<<<< HEAD
    <td><b>2%</b></td>
=======
    <td><b><span id="p_fee"></span></b></td>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
<<<<<<< HEAD
    <input type="text" class="lastReporteddate form-control date" name="CurResSince" id="CurResSince" required />
=======
    <input type="text" class="lastReportedsince form-control" name="CurResSince" id="CurResSince" required />
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
	</div>
	
	<div class="col-md-4">
	<span>Pincode</span>
	<input type="text" class="form-control" name="ResPIN" id="ResPIN" required/>
	</div>
	
	
   
	<table width="100%" border="1" class="tbl table-bordered table-striped">
	<input type="hidden" name="Version" id="Version" value="5">
	<input type="hidden" name="Mobile" id="Mobile">
	<input type="hidden" name="Email" id="Email">
	<input type="hidden" name="EmpType" id="EmpType">
	<input type="hidden" name="LnAmt" id="LnAmt">
	<input type="hidden" name="TnrMths" id="TnrMths">
	<input type="hidden" name="IRR" id="IRR">
<<<<<<< HEAD
	<input type="hidden" name="ProcFee" id="ProcFee">
=======
	<input type="hidden" name="ProcFee" id="ProcFee" value="">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
<<<<<<< HEAD
	<input type="text" class="lastReporteddoj form-control date" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" required />
=======
	<input type="text" class="lastReporteddoj form-control" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" required />
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
	</div>
	<div class="col-md-4">
	<span>Total Work Experience</span>
	<input type="text" name="TotWrkExp" class="form-control" id="TotWrkExp" onkeypress="return fnAllowNumeric(event)" required/>
	</div>
	<div class="col-md-4">
	<span>Office Address 1</span>
	<input type="text" name="OffAddress1" class="form-control" id="OffAddress1" required />
	</div>
	<div class="col-md-4">
	<span>Office Address 2</span>
	<input type="text" name="OffAddress2" class="form-control" id="OffAddress2" required/>
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
	<input type="text" name="OffPIN" class="form-control" id="OffPIN" onkeypress=" return fnAllowNumeric(event)" maxlength="6" required  />
	</div>
	<div class="col-md-4">
	<span>Phone No.</span>
	<input type="text" name="OffPhone" class="form-control" id="OffPhone" onkeypress="return fnAllowNumeric(event)" maxlength="8" required />
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
<div class="col-md-12">
<input type="checkbox" name="check" required /> I have read the terms & Conditions and
</div>
<br>
<div class="col-md-12">
<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit_application">Submit my Application<i class="icon-arrow-right"></i></a>
</div>
<<<<<<< HEAD
=======
 <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
  <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
 </div>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
</div>
	</div>
	</form>
	</div>
	</div>
    
    
    
    
   
   <!--Step 3 -->
   
<<<<<<< HEAD
   <form id="quotes" name="quotes">
   <div id="get_quotes" class="row" style="display:none;">
=======
   <form id="quotes" name="quotes" >
   <div id="get_quotes" class="row" style="display: none;">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2 class="pad">Personal Loan - Get Quote </h2>
					
                </div>
                 <div class="col-md-1"></div>
<<<<<<< HEAD
				<div class="col-md-10 white-bg box-shadow pad1">
=======
				<div class="col-md-10 white-bg box-shadow pad">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
			
				<div class="col-md-1"></div>
				<div class="col-md-10 col-xs-12">
					<!-- <h2 class="head-rbl">Move Slider to Customize Your Loan Amount</h2> -->
					<div class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Loan amount:</h3>
<<<<<<< HEAD
                   <input type="text" class="form-control" placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="9" onkeypress="return fnAllowNumeric(event)" required=""></div>
					</div>
					<input type="hidden" name="roi" id="roi" value="0.013">
					<input type="hidden" name="fee" id="fee" value="2">
					<div id="" class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Tenure:</h3>
					 <select class="form-control block drop-arr select-sty" name="tenure" id="tenure"  required>
=======
                   <input type="text" class="form-control " placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="7" onkeypress="return fnAllowNumeric(event)" required="" onkeyup ="calc()"></div>
					</div>
					<input type="hidden" name="roi" id="roi" value="0.013">
					<!-- <input type="hidden" name="fee" id="fee" value="2"> -->
					<div id="" class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Tenure:</h3>
					 <select class="form-control block drop-arr select-sty " name="tenure" id="tenure"  required onchange="calc()">
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
                                            <option disabled selected  value="">Tenure</option>
                                            <option  value="12">12 months</option>
                                            <option  value="24">24 months</option>
                                            <option  value="36">36 months</option>
                                            <option  value="48">48 months</option>
<<<<<<< HEAD
                                            <option  value="64">64 months</option>
=======
                                            <option  value="60">60 months</option>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
<<<<<<< HEAD
				   <td><span>2%</span></td>
=======
				   <td><span id="processingfee"></span></td>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
@include('layout.footer')
@include('layout.script')

<<<<<<< HEAD
=======

>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
<<<<<<< HEAD
        <h4><p id="modalerr"><h5 style="color: black">Thank You..!! Our Representative Will Contact You.Your Application ID is <b><span id="rbl"></span></b>.<h5></p></h4>
=======
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
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
        
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
<<<<<<< HEAD
        <h4><p id="modalerr"><h5 style="color: black">Thank You..!! Our Representative Will Contact You.Your Application ID is <b><span id="rbl"></span></b>.<h5></p></h4>
=======
        <h4><p id="modalerr"><h5 style="color: black">Thank You for your interest in RBL Bank Personal Loan<b>.<h5></p></h4>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
        
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
<<<<<<< HEAD
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured.</b><h5>Your Application ID is <b><span id="rbl"></span></b>And ErrorInfo is <b><span id="rbl-duplicate"></span></b>.<h5></p></h4>
=======
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured.ErrorInfo is <b><span id="rbl-duplicate"></span></b>.<h5></p></h4>
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
        
      </div>
      
      
    </div>
  </div>
</div>

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
<<<<<<< HEAD
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
=======
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
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
              
<<<<<<< HEAD
              alert("You must agree to the terms first.");
=======
              // alert("You must agree to the terms first.");
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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
<<<<<<< HEAD
=======
        	if (income < 25000) 
           {
             alert('Your Net Income Should Be Minimum 25000');
             return false;
           }
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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

<<<<<<< HEAD
<script type="text/javascript">
	
	$(document).ready(function(){
    $("#tenure").blur(function(){
    	var amt=$('#loan_amount').val();
    	var tenure=$('#tenure').val();
=======


<script type="text/javascript">
	
	
		
    function calc(){
      
    	
    	var amt=$('#loan_amount').val();
    	var tenure=$('#tenure').val();
    	if(!tenure)return;
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
        var roi = 0.013;
       
        var emi  = amt * roi * (Math.pow(1 + roi, tenure) / (Math.pow(1 + roi, tenure) - 1));
        var installment =Math.round(emi);
<<<<<<< HEAD
        console.log(installment);
        $('#monthly_installment').empty().append(installment);
        $('#amount').empty().append(amt);
        $('#period').empty().append(tenure);
        $('#to_pay').empty().append(installment);
    });
});
=======
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

>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
</script>

<script type="text/javascript">
	// $('#apply').click(function(){
	// 	alert('okae');
 //     $('#customer_details_form').show();
 //     $('#get_quotes').hide();
	// });
	$('#apply').click(function(){
<<<<<<< HEAD
		
      // alert('okae');
       if(! $('#quotes').valid())
       {
       	alert('Amount should be equal to 1Lac (or) between 1Lac to 20Lacs');
       
            return false; 
=======
		// alert('okae');
       if(! $('#quotes').valid())
       {
       	
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
        }
        else
        {
      var loanamount =$('#loan_amount').val();
      console.log(loanamount);
<<<<<<< HEAD
=======
      if ($('#loan_amount').val()>2000000) 
           {
             alert('Amount should be equal to 1Lac (or) between 1Lac to 20Lacs');
             return false;
           }
    	

>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
      $('#LnAmt').val(loanamount);

      var roi =16;
       console.log(roi);
      $('#IRR').val(roi);

      var tenure =$('#tenure').val();
       console.log(tenure);
      $('#TnrMths').val(tenure);

<<<<<<< HEAD
      var process_fee =$('#fee').val();
       console.log(process_fee);
      $('#ProcFee').val(process_fee);
=======
      // var process_fee =$('#p_fee').val();
      //  console.log(process_fee);
      // $('#ProcFee').val(process_fee);
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d


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
<<<<<<< HEAD
        console.log(cost);
        var total = (cost);
       
        console.log(total);
=======
        // console.log(cost);
        var total = (cost);
       
        // console.log(total);
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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

<<<<<<< HEAD
    $(".lastReporteddoj").datepicker({ dateFormat: "yy-mm-dd",
=======
    $("#CurCmpnyJoinDt").datepicker({ dateFormat: "yy-mm-dd",
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<<<<<<< HEAD
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
=======

>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d

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
<<<<<<< HEAD
        {
=======
        {     
        	  $('#submit_application').hide();
        	  $(".iframeloading").show();
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('rbl-personal-loan-submit')}}",
         data : $('#customer_details_form').serialize(),
         success: function(msg){
<<<<<<< HEAD
         	var returnedData = JSON.parse(msg);
         	console.log(returnedData);
			var status_id=returnedData.Status;
			var error=returnedData.Errorinfo;
              console.log(status_id);
=======
         	$(".iframeloading").hide();
         	var returnedData = JSON.parse(msg);
         	console.log(returnedData.ReferenceCode);
			var status_id=returnedData.Status;
			var error=returnedData.Errorinfo;
              console.log(returnedData.ReferenceCode);
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
               if(status_id==0){
						// e_id=returnedData.Errorcode;
						// status="Ooops! Error occured.";
						// if(e_id)
						// {
						// 	error=get_rbl_error(e_id);
						// }
<<<<<<< HEAD
=======
						
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
						$('#rbl-duplicate').empty().append(returnedData.Errorinfo);
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-duplicate').modal('show');
						
					}else if(status_id==1){
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup').modal('show');
					}else if(status_id==4){
<<<<<<< HEAD
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup').modal('show');
					}else{
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-error').modal('show');
=======
						$('#rbl_success').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-success').modal('show');
					}else{
					    $('#rbl-popup-error').modal('show');
>>>>>>> c0d6c6700c3f44404a38e93d7274089736aec27d
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


