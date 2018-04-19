@include('layout.header')
<style>
.numbr { margin-right:10px;   padding: 5px;padding-left: 8px;display: inline-block;width: 29px;height: 29px;border-radius: 60%;background: #e4e3e3;border: 1px solid #dad8d8;}
.mandtry {color:red;font-weight:bold;}
.panel-default > .panel-heading {
    color: #333333;
    background-color: #f5f5f5;
    border-color: #ddd;
	padding: 10px;
}
.frm label {font-size:10px;}
.decoration1 {margin-right:10px;padding: 5px;border: 1px dashed #8c8686;color: #666;width: 29px;display: inline-block;border-radius: 52px;}
h4 {color:#999;}
.mrg-lft {margin:4px 0px 0px 18px;}


@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
.panel-title > a:before {
    float: right !important;
    font-family: FontAwesome;
    content:"\f067";
    padding-right: 5px;
}
.panel-title > a.collapsed:before {
    float: right !important;
    content:"\f067";
}
.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
</style>

<div class=" ">
    <!-- content start -->
    <div class="container">
        <div class="row"> 	 	
        <div class="col-md-12">
        <div class="wrapper-content bg-white pinside40" style="min-height:auto; float:left;">
        <div class="section-faq" id="section-faq">
        <h1 class=""><center>Flexi Loan</center></h1>
                               
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
        <div class="how-it-block1 bg-boxshadow" style=" min-height: 450px;">                	 
                    			
        <form  id="to_get_token" name="to_get_token" method="POST">
	    {{ csrf_field() }}
		</form>
		<!-- Flexi Loan Application -->
        <div id="details" class="row">
        <h3><center>Flexi Loan Application</center></h3>
        <br/>
        <form id="flexi-loan-application" name="flexi-loan-application" method="POST"  class="frm">
			{{ csrf_field() }}								

	    <input type="text" name="access_token" id="access_token" value="">
        <input type="hidden" name="partner_count" id="partner_count" value="2">
        <div class="panel-body">
		<div class="col-md-3">
		<label>Full Name<span class="mandtry"> *</span></label>
		<input type="text" name="name" id="f_name" onkeypress="return AllowAlphabet(event)" class="form-control" required="">
		</div>

	  <div class="col-md-3">
	  <label>Mobile No.<span class="mandtry"> *</span></label>
	  <input type="text" name="mobileNo" id="mobileNo" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Alternate Phone Number</label>
	  <input type="text" name="alt_mobileNo" id="alt_mobileNo" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" class="form-control">
	  </div>
	  
	  
	  <div class="col-md-3">
	  <label>Date of Birth<span class="mandtry"> *</span></label>
	  <input type="text" name="dob" id="dob" class="form-control lastReporteddob" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Gender<span class="mandtry"> *</span></label>
	  
	  <select name="gender" id="gender" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Gender</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Other">Other</option>
       </select> 
	  </div>
	  
	  <div class="col-md-3">
	  <label>Flat No<span class="mandtry"> *</span></label>
	  <input type="text" name="address_flat_no" id="address_flat_no" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Building<span class="mandtry"> *</span></label>
	  <input type="text" name="address_building" id="address_building" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Area<span class="mandtry"> *</span></label>
	  <input type="text" name="address_area" id="address_area" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Landmark<span class="mandtry"> *</span></label>
	  <input type="text" name="address_landmark" id="address_landmark" class="form-control" required="">
	  </div>
	  
	  <div class="col-md-3">
	  <label>Pincode<span class="mandtry"> *</span></label>
	  <input type="text" name="address_pincode" id="address_pincode" minlength="6" maxlength="6" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>City<span class="mandtry"> *</span></label>
	  <input type="text" name="address_city" id="address_city" onkeypress="return AllowAlphabet(event)"  class="form-control search_city" required="">
	  </div>

	  <div class="col-md-3">
	  <label>State <span class="mandtry"> *</span></label>
	  <input type="text" name="address_state" id="address_state" onkeypress="return AllowAlphabet(event)"  class="form-control" required="">
	  </div>
	  
	  
	  <div class="col-md-3">
      <label>Premise Ownership Status<span class="mandtry"> *</span></label>
       <select name="address_ownership_status" id="address_ownership_status" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Type</option>
       <option value="Rented">Rented</option>
       <option value="Owned">Owned</option>
       </select> 
       </div>
	   
	    
	  <div class="col-md-3">
      <label>Required Living since <span class="mandtry"> *</span></label>
       <select name="address_living_since" id="address_living_since" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Living since</option>
       <option value="1 year">< 1 year</option>
       <option value="1-2 years">1-2 years</option>
	    <option value="3-7 years">3-7 years</option>
		 <option value="7 years">7 years</option>
       </select> 
       </div>
	   
	   <div class="col-md-3">
	   <label>Personal PAN Number<span class="mandtry"> *</span></label>
	   <input type="text" name="pan" style="text-transform:uppercase" id="pan" oninput="pan_card('pan')" minlength="10" maxlength="10" class="form-control" required="">
	   <span id="pan_number" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Pan Number.!!</span>
	   </div>

	   <div class="col-md-3">
       <label>Monthly turnover <span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control" name="monthly_turnover" id=" monthly_turnover"  required="">
        <option disabled selected value>Select a value</option>
        <option value="50,000">< 50,000</option>
        <option value="50,000 - 1L">50,000 - 1L</option>
	    <option value="1L - 3L">1L - 3L</option>
		<option value="3L - 5L">3L - 5L</option>
		<option value="5L - 10L">5L - 10L</option>
		<option value="10L"> 10L</option>
        </select> 
        </div>

	  <div class="col-md-3">
	  <label>Loan Amount<span class="mandtry"> *</span></label>
	  <input type="text" name="amount" id="amount" onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" class="form-control" required="">
	  </div>
	  
	  
        <div class="col-md-3">
        <label>Loan Via<span class="mandtry"> *</span></label>
        <select class="form-control input-md partner_code" name="partner_code"  required>
        <option disabled selected value="">Select Partner</option>
        </select>
        </div>

        <input type="hidden" name="loan_type" id="loan_type" value="ecom">
                                
	  <div class="col-md-3">
      <label>Legal Status<span class="mandtry"> *</span></label>
       <select name="legal_status" id="legal_status" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value="">Select a value</option>
       <option value="Proprietorship">Proprietorship</option>
       <option value="One Person Company (OPC)">One Person Company (OPC)</option>
	    <option value="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)</option>
		 <option value="Partnership">Partnership</option>
		 <option value="Private Limited">Private Limited</option>
		 <option value="Public Limited">Public Limited</option>
       </select> 
       </div>

       <div class="col-md-3">
	  <label>Email<span class="mandtry"> *</span></label>
	  <input type="text" name="email" id="email" class="form-control" required="">
	  </div>

       <div>
       <a class="btn btn-default btn-sm " id="flexi_loan_application">NEXT<i class="icon-arrow-right"></i></a>
       </div>
	</div>
	</form>
    </div>






    <!-- UpdateFlexiLoanAppln -->
    <div id="details" class="row">
    <h3><center>Update Flexi Loan Application</center></h3>
    <br/>
    <form id="update-flexi-loan-application" name="update-flexi-loan-application" method="POST"  class="frm">

      {{ csrf_field() }}
      <input type="text" name="customerCode" id="customerCode" value="599593ab9df04">
      <input type="text" name="loanCode" id="loanCode" value="">
      <input type="text" name="access_token" id="acc_token" value="">
      <input type="text" name="partner_count" value="2">
      <input type="text" name="loan_type" value="ecom">
        <div class="panel-body">
		<div class="col-md-3">
		<label>Full Name<span class="mandtry"> *</span></label>
		<input type="text" name="name" id="full_name" onkeypress="return AllowAlphabet(event)" class="form-control" required="">
		</div>

	  <div class="col-md-3">
	  <label>Mobile No.<span class="mandtry"> *</span></label>
	  <input type="text" name="mobileNo" id="mobNo" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Alternate Phone Number</label>
	  <input type="text" name="alt_mobileNo" id="alt_mobNo" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" class="form-control">
	  </div>
	  
	  
	  <div class="col-md-3">
	  <label>Date of Birth<span class="mandtry"> *</span></label>
	  <input type="text" name="dob" id="date" class="form-control lastReporteddob" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Gender<span class="mandtry"> *</span></label>
	  <select name="gender" id="sex" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Gender</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Other">Other</option>
       </select> 
	  </div>
	  
	  <div class="col-md-3">
	  <label>Flat No<span class="mandtry"> *</span></label>
	  <input type="text" name="address_flat_no" id="flat_no" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Building<span class="mandtry"> *</span></label>
	  <input type="text" name="address_building" id="building" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Area<span class="mandtry"> *</span></label>
	  <input type="text" name="address_area" id="area" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Landmark<span class="mandtry"> *</span></label>
	  <input type="text" name="address_landmark" id="landmark" class="form-control" required="">
	  </div>
	  
	  <div class="col-md-3">
	  <label>Pincode<span class="mandtry"> *</span></label>
	  <input type="text" name="address_pincode" id="pincode" minlength="6" maxlength="6" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>City<span class="mandtry"> *</span></label>
	  <input type="text" name="address_city" id="city" onkeypress="return AllowAlphabet(event)"  class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>State <span class="mandtry"> *</span></label>
	  <input type="text" name="address_state" id="state" onkeypress="return AllowAlphabet(event)"  class="form-control" required="">
	  </div>
	  
	  
	  <div class="col-md-3">
      <label>Premise Ownership Status<span class="mandtry"> *</span></label>
       <select name="address_ownership_status" id="ownership" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Type</option>
       <option value="Rented">Rented</option>
       <option value="Owned">Owned</option>
       </select> 
       </div>
	   
	    
	  <div class="col-md-3">
      <label>Required Living since <span class="mandtry"> *</span></label>
       <select name="address_living_since" id="living_since" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Living since</option>
       <option value="1 year">< 1 year</option>
       <option value="1-2 years">1-2 years</option>
	    <option value="3-7 years">3-7 years</option>
		 <option value="7 years">7 years</option>
       </select> 
       </div>
	   
	   <div class="col-md-3">
	   <label>Personal PAN Number<span class="mandtry"> *</span></label>
	   <input type="text" name="pan" id="pan_no" minlength="10" maxlength="10" class="form-control" required="">
	   
	   </div>

	   <div class="col-md-3">
       <label>Monthly turnover <span class="mandtry"> *</span></label>
       <select class="block drop-arr select-sty form-control" id="turnover" name="monthly_turnover"  required="">
        <option disabled selected value>Select a value</option>
        <option value="50,000">< 50,000</option>
        <option value="50,000 - 1L">50,000 - 1L</option>
	    <option value="1L - 3L">1L - 3L</option>
		<option value="3L - 5L">3L - 5L</option>
		<option value="5L - 10L">5L - 10L</option>
		<option value="10L"> 10L</option>
        </select> 
        </div>

	  <div class="col-md-3">
	  <label>Loan Amount<span class="mandtry"> *</span></label>
	  <input type="text" name="amount" id="loanamount" onkeypress="return fnAllowNumeric(event)" minlength="5" maxlength="9" class="form-control" required="">
	  </div>
	  
	  
        <div class="col-md-3">
        <label>Loan Via<span class="mandtry"> *</span></label>
        <select class="form-control input-md partner_code" name="partner_code" id="partner_list" required>
        <option disabled selected value="">Select Partner</option>
        </select>
        </div>

        
                                
	  <div class="col-md-3">
      <label>Legal Status<span class="mandtry"> *</span></label>
       <select name="legal_status" id="status" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value="">Select a value</option>
       <option value="Proprietorship">Proprietorship</option>
       <option value="One Person Company (OPC)">One Person Company (OPC)</option>
	    <option value="Limited Liability Partnership (LLP)">Limited Liability Partnership (LLP)</option>
		 <option value="Partnership">Partnership</option>
		 <option value="Private Limited">Private Limited</option>
		 <option value="Public Limited">Public Limited</option>
       </select> 
       </div>

       <div class="col-md-3">
	  <label>Email<span class="mandtry"> *</span></label>
	  <input type="text" name="email" id="email_address" class="form-control" required="">
	  </div>

       <div>
        <!-- <a class="btn btn-default btn-sm " id="flexi_loan_update_application_back">BACK<i class="icon-arrow-right"></i></a> -->
       <a class="btn btn-default btn-sm " id="flexi_loan_update_application">NEXT<i class="icon-arrow-right"></i></a>
       </div>
       </div>
	   </form>
       </div>
                    			
       <div id="get_quotes" class="row" style="display: none;" >
                    				<form id="quotes" name="quotes" >
                    					<h3 class=""><center>Get Quote</center></h3>

				                	 		<div class="col-md-6 col-sm-12 col-xs-12">
				                	 			<div class="form-group">
				                	 				<div class="amount">
				                	 				<input type="text" class="form-control " placeholder="Loan amount*" name="loan_amount" id="loan_amount" minlength="5" maxlength="7" onkeypress="return fnAllowNumeric(event)" required="" onkeyup ="calc()">
				                	 			</div>
				                	 			</div>
				                	 		</div>

				                	 		<input type="hidden" name="roi" id="roi" value="0.013">

				                	 		<div class="col-md-6 col-sm-12 col-xs-12">
				                	 			<div class="form-group">
				                	 				<div class="amount">
				                	 					<select class="form-control select-sty " name="tenure" id="tenure"  required onchange="calc()">
				                                            <option disabled selected  value="">Tenure</option>
				                                            <option  value="12">12 months</option>
				                                            <option  value="24">24 months</option>
				                                            <option  value="36">36 months</option>
				                                            <option  value="48">48 months</option>
				                                            <option  value="60">60 months</option>
										                </select> 
				                	 				</div>
				                	 			</div>
				                	 		</div>

				                	 		<table class="">
				                	 			<thead>
				                                    <tr>
				                                       <th scope="col">Loan Eligibilty</th>
				                                       <th scope="col">Rate Type</th>
				                                       <th scope="col">Best Rate</th>
				                                       <th scope="col">EMI</th>
				                                       <th scope="col">Processing Fee</th>
				                                       <th scope="col"></th>                                                
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                        <tr>
				                                           <td data-label="Loan Required :" style="padding-top: 20px;">
				                                               <div class="form-group">
				                                               	<input type="text" class="form-input-new form-control" name="loanamount" id="loanamount" minlength="6" maxlength="9" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)" readonly>
				                                               </div>
				                                           </td>
				                                           <td>Fixed</td>
				                                           <td><span>16%</span></td>
				                                           <td><span id="monthly_installment"></span></td>
				                                           <td><span id="processingfee"></span></td>
				                                           <td><a class="btn btn-default btn-sm" id="apply">APPLY</a></td>
				                                       </tr>
				                                   </tbody>
				                	 		</table>
				                	 		<br />
                    				</form>
                    				<p>The Quote displayed here is not the final approved loan amount This is basis the details shared by you. Approval of loan would be to RBL Bank internal prodct and policy guidelines. the applicants are required to fill the RBL Bank Applications froms to Proceed further.</p>

			                        <p>Besides offering you the best interest rates and eligibility in the business, RBL Bank now offers you the fastest loan processing service as well.</p>

			                        <p>Apply Now and experience for yourself RBL Bank's superior loan processing service.</p>
                    			</div>
                    			<!-- Personal Loan - Get Quote end -->
                    			<!-- step 2 end-->

                    			<!-- step 3 -->
                    			<!-- Personal Loan - Customer Details -->
                    			<div class="row">
                    				<div class="col-md-1"></div>
                    				<form id="customer_details_form" method="POST" style="display: none;" >
                    					{{ csrf_field() }}
                    					<h3 class=""><center>Customer Details</center></h3>
                    					<table class="">
                    						<thead>
                                            <tr>
                                                <th scope="col">Loan Amount</th>
                                                <th scope="col">Loan Tenure (in months)</th>
                                                <th scope="col">Interest Rate</th>
                                                <th scope="col">EMI</th>
                                                <th scope="col">Processing Fee</th>                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                           	<td><b><span id="amount"></span></b></td>
										    <td><b><span id="period"></span></b></td>
										    <td><b>16%</b></td>
										    <td><b><span id="to_pay"></span></b></td>
										    <td><b><span id="p_fee"></span></b></td>
                                           </tr>
                                        </tbody>
                    					</table>
                    					<br />
                    					<h4 >Personal Information</h4>

                    					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">

                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="First Name" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="MiddleName" class="form-control" id="MiddleName" placeholder="Middle Name" onkeypress=" return AllowAlphabet(event)" />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="LastName" class="form-control" id="LastName" placeholder="Last Name" onkeypress="return AllowAlphabet(event)" required />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<select class="form-control drop-arr select-sty" name="Gender" id="Gender" required>
												   <option disabled selected  value="">Gender*</option>
												        <option value="1">Male</option>
													    <option value="2">Female</option>
													    <option value="3">Third Gender</option>
											</select>	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResAddress1" id="ResAddress1" placeholder="Address Line 1" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResAddress2" id="ResAddress2" placeholder="Address Line 2" />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResLand" id="ResLand" placeholder="Residence Landmark"/>	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control date" placeholder="Date of Birth" name="DOB" id="DOB" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
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
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="lastReportedsince form-control" name="CurResSince" id="CurResSince" placeholder="Living Since" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="ResPIN" id="ResPIN" maxlength="10" placeholder="Pincode" required/>	
                            				</div>
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

										<hr style="color:transparent; width:100%" />
										<h4 >Employment & Income Details</h4>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="form-control" name="CompanyName" id="CompanyName" placeholder="Company Name" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<input type="text" class="lastReporteddoj form-control" name="CurCmpnyJoinDt" id="CurCmpnyJoinDt" placeholder="When did You Join This Company" required />	
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="TotWrkExp" class="form-control" id="TotWrkExp" onkeypress="return fnAllowNumeric(event)" placeholder="Total Work Experience" required/>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffAddress1" class="form-control" id="OffAddress1" placeholder="Office Address Line 1"  />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffAddress2" class="form-control" id="OffAddress2" placeholder="Office Address Line 2" />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<select class="form-control select-sty" name="OrgCategory"" id="OrgCategory"" required>
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
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            				<select class="form-control drop-arr select-sty" name="OffCity" id="OffCity">
											  <option disabled selected value="">City</option>
											</select>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffPIN" class="form-control" id="OffPIN" onkeypress=" return fnAllowNumeric(event)" placeholder=" Pincode" maxlength="6"  />
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="OffPhone" class="form-control" id="OffPhone" onkeypress="return fnAllowNumeric(event)" placeholder="Phone No." maxlength="8"/>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<input type="text" name="PAN" id="PAN" class="form-control" oninput="pan_card('PAN')" maxlength="10" placeholder="Pancard Number" required />
	<span id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</span>
                            				</div>
                            			</div>

                            			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            				<div class="form-group">
                            					<select class="form-control select-sty" name="Qualification" id="Qualification" required>
												   <option disabled selected  value="">Qualification*</option>
												        <option value="1">Under Graduate</option>
													    <option value="2">Graduate</option>
													    <option value="3">Post Graduate</option>
													    <option value="4">Professional</option>
													    <option value="9999">Others</option>
												</select>
                            				</div>
                            			</div>

                            			<input type="checkbox" name="check" required /> I have read the terms & Conditions

                            			<div class="col-md-12">
<a class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated" id="submit_application">Submit my Application<i class="icon-arrow-right"></i></a>
</div>
 <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
  <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
 </div>

                    				</form>
                    			</div>
                    			<!-- Personal Loan - Customer Details end -->
                    			<!-- step 3 end -->
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@include('layout.script')

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
    var year = d.getFullYear()-21 ;
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-84Y",
      yearRange: '-84:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">
    function pan_card(obj,val){
        // console.log(obj);
        if(obj=='pan' ){
                   var str =$('#pan').val();
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


<!-- API -->
<!-- getFlexiLoanToken -->
<script type="text/javascript">
	$(document).ready(function(){
		var v_token = "{{csrf_token()}}";
		$.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-loans-token')}}",
         data : {'_token': v_token},
         success: function(msg){
         	console.log(msg.access_token);

          $('#access_token').val(msg.access_token);
          $('#acc_token').val(msg.access_token);
      }   
     });
	});
</script>


<!--getFlexiLoanPartnerList
  -->
<script type="text/javascript">
$(document).ready(function(){


	// var v_token = "{{csrf_token()}}";
	  $.ajax({ 
   url: "{{URL::to('flexi-loans-partner-list')}}",
   method:"GET",
   // data : {'_token': v_token}, 
   success: function(msg)  
   {
   	console.log(msg.partnerList);
   	if(msg.partnerList)
      {      $.each(msg.partnerList, function( index, value ) {
            $('.partner_code').append('<option value="'+value.code+'">'+value.name+'</option>');

        }); 
    }else{
      $('.partner_code').empty().append('No Result Found');
    }

   }

 })

	  
	});
	
</script>


<!-- CreateFlexiLoanAppln -->
<script type="text/javascript">
	$('#flexi_loan_application').click(function(){
          
       if(! $('#flexi-loan-application').valid()) 
       	{
            return false;
       	} 
       	else 
       	{   
       		var f_name = $('#f_name').val();
       		console.log(f_name);
       		$('#full_name').val(f_name);

       		var mobileNo = $('#mobileNo').val();
       		console.log(mobileNo);
       		$('#mobNo').val(mobileNo);

       		var amount=$('#amount').val();
       		$('#loanamount').val(amount);

       		var address_flat_no=$('#address_flat_no').val();
       		console.log(address_flat_no);
       		$('#flat_no').val(address_flat_no);

       		var address_building=$('#address_building').val();
       		console.log(address_building);
       		$('#building').val(address_building);

            var address_area=$('#address_area').val();
            console.log(address_area);
       		$('#area').val(address_area);

       		var address_landmark=$('#address_landmark').val();
       		console.log(address_landmark);
       		$('#landmark').val(address_landmark);
            
            var address_pincode=$('#address_pincode').val();
            console.log(address_pincode);
       		$('#pincode').val(address_pincode); 

       		var address_city=$('#address_city').val();
       		console.log(address_city);
       		$('#city').val(address_city); 

       		var address_state=$('#address_state').val();
       		console.log(address_state);
       		$('#state').val(address_state); 


       		var email =$('#email').val();
       		console.log(email);
       		$('#email_address').val(email);

       		var pan_number=$('#pan').val();
       		console.log(pan_number);
       		$('#pan_no').val(pan_number);

       		var address_ownership_status=$('#address_ownership_status').val();
       		console.log(address_ownership_status);
       		$('#ownership').val(address_ownership_status);

       		var gender=$('#gender').val();
       		console.log(gender);
       		$('#sex').val(gender);

       		var address_living_since=$('#address_living_since').val();
       		console.log(address_living_since);
       		$('#living_since').val(address_living_since);

       		var monthly_turnover=$('#monthly_turnover').val();
       		console.log(monthly_turnover);
       		$('#turnover').val(monthly_turnover);

       		var legal_status=$('#legal_status').val();
       		console.log(legal_status);
       		$('#status').val(legal_status);

       		var partner_code=$('.partner_code').val();
       		console.log(partner_code);
       		$('#partner_list').val(partner_code);

       		
       		
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-loans-appln')}}",
         data : $('#flexi-loan-application').serialize(),
         success: function(msg){
         	console.log(msg.success);
         if(msg.success==true)
         {
           $('#loanCode').val(msg.loanCode);
           // $('#customerCode').val(msg.customerCode);
         }else
         {
         	$('#loanCode').val(msg.loanCode);
            alert(msg.error);
         }	
					
					  
      }   
     });
       	}
	});
</script>

<script type="text/javascript">
	$('#flexi_loan_update_application').click(function(){
      if (!$('#update-flexi-loan-application').valid()) 
      	{
           return false;
      	} 
      	else 
      	{
          	
          $.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-loans-appln-update')}}",
         data : $('#update-flexi-loan-application').serialize(),
         success: function(msg){
         	console.log(msg.success);
         	if (msg.success==true) 
         	{
              alert('Your Application has been updated');
         	}else
         	{
             alert(msg.error);
         	}
         
					
					  
      }   
     });
      	}
	});
</script>


