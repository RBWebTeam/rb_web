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
				
				<div class="col-md-6 titl-1">
					<div class="row text-left rate box-shadow pad1 white-bg mrg-btm">
				
					<form class="rbl_personal_loan_form" id="rbl_personal_loan_form" role="form" method="POST">
					<div class="row">
					<div class="form-group">
					<h4 class="hdr pad1 text-center">&nbsp;&nbsp;&nbsp;&nbsp;Your Loan Quote in Under 1 Minute.</h4>
					<br>
					<div class="col-md-6 col-xs-6">
					<span>City</span>
					<select class="form-control drop-arr select-sty" name="city" id="city">
					  <option disabled selected value="">City</option>
					</select>
					</div>

					<div class="col-md-6 col-xs-6">
					<span>First Name</span>
					<input type="text" class="form-control" placeholder="First Name *" 
					name="first_name" id="first_name" onkeypress="return AllowAlphabet(event)" required=""></div>
					
					<div class="col-md-6 col-xs-6">
					<span>Date of Birth</span>
					<input type="text" class="form-control date lastReporteddob" placeholder="Date of Birth *" name="dob" id="dob" required=""></div>
					
					
					<div class="col-md-6 col-xs-6">
					<span>Select Employment & Mode of Credit</span>
					<select class="form-control drop-arr select-sty" name="employ_type" id="employ_type" required>
					   <option disabled selected  value="">Select Employment & Mode of Credit *</option>
					        <option value="1">Salaried: Account Transfer</option>
						    <option value="2">Salaried: By Cheque</option>
						    <option value="3">Salaried: By Cash</option>
						    <option value="4">Self employed</option>
						    <option value="5">Others</option>
					</select>
					</div>

					<div class="col-md-6 col-xs-6">
					<span>Employer Name</span>
					<input type="text" class="form-control" placeholder="Employer Name *" name="employer_name" id="employer_name" onkeypress="return AllowAlphabet(event)" required=""></div>

					<div class="col-md-6 col-xs-6">
					<span>Net Monthly Income</span>
					<input type="text" class="form-control" placeholder="Net Monthly Income *" name="income" id="income" onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" required=""></div>

					<div class="col-md-6 col-xs-6">
					<span>EMI Amount for Existing Loan</span>
					<input type="text" class="form-control" placeholder="EMI Amount for Existing Loan *" name="emi" id="emi" onkeypress="return fnAllowNumeric(event)" required=""></div>

					<div class="col-md-6 col-xs-6">
					<span>Email ID</span>
					<input type="text" class="form-control" placeholder="Email ID *" name="email" id="email" oninput="mail('email')" required=""><span id="email_id" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</span></div>
					

				    <div class="col-md-6 col-xs-6">
					<span>Mobile No</span>
					<input type="text" class="form-control" placeholder="Mobile No*" name="mobile_no" id="mobile_no" maxlength="10" onkeypress="return fnAllowNumeric(event)" required=""></div>

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
    <td><b>2%</b></td>
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
    <input type="text" class="lastReporteddate form-control" name="CurResSince" id="CurResSince" required />
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
	<input type="hidden" name="ProcFee" id="ProcFee">
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
</div>
	</div>
	</form>
	</div>
	</div>
    
    
    
    
   
   <!--Step 3 -->
   
   <form id="quotes" name="quotes">
   <div id="get_quotes" class="row" style="display:none;">
				<div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
					<h2 class="pad">Personal Loan - Get Quote </h2>
					
                </div>
                 <div class="col-md-1"></div>
				<div class="col-md-10 white-bg box-shadow pad">
			
				<div class="col-md-1"></div>
				<div class="col-md-10 col-xs-12">
					<!-- <h2 class="head-rbl">Move Slider to Customize Your Loan Amount</h2> -->
					<div class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Loan amount:</h3>
                   <input type="text" class="form-control" placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="9" onkeypress="return fnAllowNumeric(event)" required=""></div>
					</div>
					<input type="hidden" name="roi" id="roi" value="0.013">
					<input type="hidden" name="fee" id="fee" value="2">
					<div id="" class="col-md-6 col-xs-12"><div class="amount"><h3 class="text-info">Tenure:</h3>
					 <select class="form-control block drop-arr select-sty" name="tenure" id="tenure"  required>
                                            <option disabled selected  value="">Tenure</option>
                                            <option  value="12">12 months</option>
                                            <option  value="24">24 months</option>
                                            <option  value="36">36 months</option>
                                            <option  value="48">48 months</option>
                                            <option  value="64">64 months</option>
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
				   <td><span>2%</span></td>
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

<div class="modal fade" tabindex="-1" role="dialog" id="rbl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Thank You..!! Our Representative Will Contact You.Your Application ID is <b><span id="rbl"></span></b>.<h5></p></h4>
        
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
        <h4><p id="modalerr"><h5 style="color: black">Thank You..!! Our Representative Will Contact You.Your Application ID is <b><span id="rbl"></span></b>.<h5></p></h4>
        
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
        <h4><p id="modalerr"><h5 style="color: black"><b>Ooops! Error occured.</b><h5>Your Application ID is <b><span id="rbl"></span></b>And ErrorInfo is <b><span id="rbl-duplicate"></span></b>.<h5></p></h4>
        
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
    var year = d.getFullYear() ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
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
              
              alert("You must agree to the terms first.");
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
	
	$(document).ready(function(){
    $("#tenure").blur(function(){
    	var amt=$('#loan_amount').val();
    	var tenure=$('#tenure').val();
        var roi = 0.013;
       
        var emi  = amt * roi * (Math.pow(1 + roi, tenure) / (Math.pow(1 + roi, tenure) - 1));
        var installment =Math.round(emi);
        console.log(installment);
        $('#monthly_installment').empty().append(installment);
        $('#amount').empty().append(amt);
        $('#period').empty().append(tenure);
        $('#to_pay').empty().append(installment);
    });
});
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
            return false; 
        }
        else
        {
      var loanamount =$('#loan_amount').val();
      console.log(loanamount);
      $('#LnAmt').val(loanamount);

      var roi =16;
       console.log(roi);
      $('#IRR').val(roi);

      var tenure =$('#tenure').val();
       console.log(tenure);
      $('#TnrMths').val(tenure);

      var process_fee =$('#fee').val();
       console.log(process_fee);
      $('#ProcFee').val(process_fee);


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
        console.log(cost);
        var total = (cost);
       
        console.log(total);
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

    $(".lastReporteddoj").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
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
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('rbl-personal-loan-submit')}}",
         data : $('#customer_details_form').serialize(),
         success: function(msg){
         	var returnedData = JSON.parse(msg);
         	console.log(returnedData);
			var status_id=returnedData.Status;
			var error=returnedData.Errorinfo;
              console.log(status_id);
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
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup').modal('show');
					}else{
						$('#rbl').empty().append(returnedData.ReferenceCode);
						$('#rbl-popup-error').modal('show');
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

<script type="text/javascript">
	$('#loan_amount').click(function(){
       alert('Amount should be equal to 1Lac (or) between 1Lac to 20Lacs');
       return false;
	});
</script>
