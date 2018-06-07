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

<div class=" " >
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
	  <input type="text" name="address_state" id="address_state" onkeypress="return AllowAlphabet(event)"  class="form-control search_statenm" required="">
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
    <div id="details" class="row" style="display: none;">
    <h3><center>Update Flexi Loan Application</center></h3>
    <br/>
    <form id="update-flexi-loan-application" name="update-flexi-loan-application" method="POST"  class="frm">

      {{ csrf_field() }}
      <input type="hidden" name="customerCode" id="customerCode">
      <input type="hidden" name="loanCode" id="loanCode" value="">
      <input type="hidden" name="access_token" id="acc_token" value="">
      <input type="hidden" name="partner_count" value="2">
      <input type="hidden" name="loan_type" value="ecom">
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






    <!-- Business Details -->

    <div  class="row" style="display: none;">
        <h3><center>Business Details</center></h3>
        <br/>
        <form id="business-details" name="business-details" method="POST"  class="frm">
			{{ csrf_field() }}								
        <input type="text" name="name" id="full_nm">
        <input type="text" name="pan" id="personal_acc">
        <input type="text" name="dob" id="date_of_birth">
        <input type="text" name="gender" id="who_you_are">
        <input type="text" name="postal_code" id="postal">
        <input type="text" name="city" id="which_city">
        <input type="text" name="state" id="which_state">
        <input type="text" name="address" id="which_address">
        <input type="text" name="residence_ownership_status" id="ownership_status">
        <input type="text" name="mobile_no" id="mobile_numbr">
	    <input type="hidden" name="access_token" id="access_tkn">
        <input type="hidden" name="loanCode" id="loancode">
        <div class="panel-body">
		<div class="col-md-3">
		<label>Business Name<span class="mandtry"> *</span></label>
		<input type="text" name="name" id="business_name" class="form-control" required="">
		</div>

	 <div class="col-md-3">
      <label>Nature Of Business<span class="mandtry"> *</span></label>
       <select name="nature_of_business" id="nature_of_business" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Nature Of Business</option>
       <option value="Retailer">Retailer</option>
       <option value="Manufacturer">Manufacturer</option>
	    <option value="Trader">Trader</option>
		 <option value="Service">Service</option>
		 <option value="Distributor">Distributor</option>
		 <option value="Importer">Importer</option>
		 <option value="Exporter">Exporter</option>
		 <option value="Job Worker">Job Worker</option>
       </select> 
       </div>

	 <div class="col-md-3">
      <label>Product<span class="mandtry"> *</span></label>
       <select name="product_classfication" id="product_classfication" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Product</option>
       <option value="Accessories">Accessories</option>
       <option value="Appliances">Appliances</option>
	    <option value="Baby Care">Baby Care</option>
		<option value="Bags & Luggages">Bags & Luggages</option>
		<option value="Beauty & Personal Care">Beauty & Personal Care</option>
		<option value="Camera & Accessories">Camera & Accessories</option>
		<option value="Mobile">Mobile</option>
		<option value="Computers">Computers</option>
		<option value="Electronics">Electronics</option>
		<option value="Computers">Computers</option>
		<option value="Eyewear">Eyewear</option>
		<option value="Fashion">Fashion</option>
		<option value="Fragrance">Fragrance</option>
		<option value="Furniture">Furniture</option>
		<option value="Footwear">Footwear</option>
		<option value="Garments">Garments</option>
		<option value="Hardware & Sanitary">Hardware & Sanitary</option>
		<option value="Hotels">Hotels</option>
		<option value="Jewellery">Jewellery</option>
		<option value="Others">Others</option>
       </select> 
       </div>
	  
	  
	  <div class="col-md-3">
	  <label>Date of Incorporation<span class="mandtry"> *</span></label>
	  <input type="text" name="date_of_incorporation" id="date_of_incorporation" class="form-control lastReported" required="">
	  </div>

	  <div class="col-md-3">
		<label>No. Of Employess<span class="mandtry"> *</span></label>
		<input type="text" name="employee_count" id="employee_count" onkeypress="return fnAllowNumeric(event)" class="form-control" required="">
		</div>

	  <div class="col-md-3">
	  <label>Loan Purpose<span class="mandtry"> *</span></label>
	  <select name="loan_purpose" id="loan_purpose" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Loan Purpose</option>
       <option value="Term Loan">Term Loan</option>
       <option value="Female">Loan Against POS Transactions</option>
       <option value="Other">Drop-line OverDraft</option>
       <option value="Invoice Discounting">Invoice Discounting</option>
       </select> 
	  </div>
	  
	  <div class="col-md-3">
	  <label>Flat No<span class="mandtry"> *</span></label>
	  <input type="text" name="address_flat_no" id="addr" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Building<span class="mandtry"> *</span></label>
	  <input type="text" name="address_building" id="addr_building" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>Area<span class="mandtry"> *</span></label>
	  <input type="text" name="address_area" id="addr_area" class="form-control" required="">
	  </div>

	  
	  
	  <div class="col-md-3">
	  <label>Pincode<span class="mandtry"> *</span></label>
	  <input type="text" name="address_pincode" id="addr_pincode" minlength="6" maxlength="6" class="form-control" required="">
	  </div>

	  <div class="col-md-3">
	  <label>City<span class="mandtry"> *</span></label>
	  <input type="text" name="address_city" id="addr_city" onkeypress="return AllowAlphabet(event)"  class="form-control search_city" required="">
	  </div>

	  <div class="col-md-3">
	  <label>State <span class="mandtry"> *</span></label>
	  <input type="text" name="address_state" id="addr_state" onkeypress="return AllowAlphabet(event)"  class="form-control search_statenm" required="">
	  </div>
	  
	  
	  <div class="col-md-3">
      <label>Premise Ownership Status<span class="mandtry"> *</span></label>
       <select name="address_ownership_status" id="addr_ownership_status" class="block drop-arr select-sty form-control"  required="">
       <option disabled selected value>Premise Ownership Status</option>
       <option value="Rented">Rented</option>
       <option value="Owned">Owned</option>
       </select> 
       </div>

       <div class="col-md-3">
      <label>Loan From Previous Sources<span class="mandtry"> *</span></label><br>
       
                          <input type="radio" id="Yes" value="true" name="previous_loan_taken"  >&nbsp; Yes  &nbsp; <input id="No" checked type="radio" value="false" name="previous_loan_taken">&nbsp;No                                  
       </div>

       
    <div class="col-md-12"></div>

	   <div class="col-md-3">
	    <label>Company PAN Number</label>
	    <input type="text" name="pan_no" id="pannum" oninput="pan_card('pannum')" minlength="10" maxlength="10" class="form-control" required="">
	    <span id="pan_num" style="display:none;color: red; font-size: 10px;">Oops.Please Enter Valid Pan Number.!!</span>
	    </div>

	    <div class="col-md-3">
	    <label>GST Number</label>
	    <input type="text" name="gst_no" id="gst_no" minlength="15"  maxlength="15" class="form-control" required="">
	    </div>

	    <div class="col-md-3">
	    <label>Udyog Aadhaar Number</label>
	    <input type="text" name="udyog_aadhaar_no" id="udyog_aadhaar_no" onkeypress="return fnAllowNumeric(event)" minlength="12"  maxlength="12" class="form-control" required="">
	    </div>

	    <div class="col-md-3">
	    <label>TIN Number</label>
	    <input type="text" name="tin_no" id="tin_no" onkeypress="return fnAllowNumeric(event)" minlength="12"  maxlength="12" class="form-control" required="">
	    </div>
       <div class="col-md-12 ">
       <a class="btn btn-default btn-sm" id="business_details">NEXT<i class="icon-arrow-right"></i></a>
       </div>
	</div>
	</form>
    </div>

    <!-- Financial Details -->
    <div  class="row" style="display: none;">
        <h3><center>Financial Details</center></h3>
        <br/>
        <form id="financial-details" name="financial-details" method="POST"  class="frm">
			{{ csrf_field() }}								
        <input type="hidden" name="access_token" id="access">
        <input type="hidden" name="loanCode" id="code">
        <div class="panel-body">
		<div class="col-md-3">
		<label>Channel you use to sell products</label>
		<select name="platform" id="platform" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Platform</option>
       <option value="Online">Online</option>
       <option value="Offline">Offline</option>
	    <option value="Both">Both</option>
		</select> 
		</div>

	 <div class="col-md-3" id="selling_since">
      <label>Selling Online Since</label>
       <input type="text" name="selling_online_since" id="selling_online_since" placeholder="Online Since" class="form-control lastReported" required="">
       </div>

       <div class="col-md-3">
       <label>Top market place that you sell on</label>
	   <select multiple name="marketPlaces"  id="marketPlaces" class="block drop-arr select-sty form-control" required="">
       <option data-group='SHOW' disabled value=''>Market Place</option>
       <option data-group="Online" value="1c41176794537">Flipkart</option>
       <option data-group="Online"  value="78f92504ce5be">Jabong</option>
	   <option data-group="Online" value="4aa1fdfded9cc">Limeroad</option>
	   <option data-group="Online" value="59631bc68f9e3">OverCart</option>
	   <option data-group="Online" value="5969727576129">Paytm</option>
	   <option data-group="Online" value="019c03d0e6beb">Shopclues</option>
	   <option data-group="Online" value="504147b7ed54c">Snapdeal</option>
	   <option data-group="Online" value="051417102815b">Voonik</option>
	   <option data-group="Online" value="aa31a9fd5ed3b">XSTOK</option>
	   <option data-group="Offline" value="59002aaed7a40">ICICI Merchant Services</option>
	   <option data-group="Offline" value="8ce45a8c335e1">MSwipe</option>
	   <option data-group="Offline" value="0b16a2206f607">Pine Labs</option>
	   <option  value="9c7bfcd45af46">Other</option>
	   </select> 
       </div>

       <div class="col-md-3">
	    <label>Total monthly sales</label>
	    <input type="text" name="total_monthly_sales" id="total_monthly_sales" onkeypress="return fnAllowNumeric(event)" minlength="5"  maxlength="9" class="form-control" required="">
	    </div>
          <div class="col-md-12 ">
       <a class="btn btn-default btn-sm" id="financial_details">NEXT<i class="icon-arrow-right"></i></a>
       </div>
	 
	</div>
	</form>
    </div>

    <!-- Personal Details -->
    <div  class="row">
        <h3><center>Personal Details</center></h3>
        <br/>
        <form id="personal-details" name="personal-details" method="POST"  class="frm">
			{{ csrf_field() }}								
        <input type="hidden" name="access_token" id="acc_tkn">
        <input type="hidden" name="loanCode" id="loancd">
        <div class="panel-body">
		<div class="col-md-3">
		<label>Education</label>
		<select name="education" id="education" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Education</option>
       <option value="Primary">Primary</option>
       <option value="Secondary">Secondary</option>
	   <option value="Bachelor's Degree">Bachelor's Degree</option>
	   <option value="Master's Degree">Master's Degree</option>
		</select> 
		</div>

		<div class="col-md-3">
		<label>Marital Status</label>
		<select name="marital_status" id="marital_status" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Marital Status</option>
       <option value="Married">Married</option>
       <option value="Single">Single</option>
	   <option value="Divorced">Divorced</option>
	   
		</select> 
		</div>

	 <div class="col-md-3">
      <label>Aadhar number</label>
       <input type="text" name="aadhar_no" id="aadhar_no" minlength="12" maxlength="12"  class="form-control" >
       </div>

       <div class="col-md-3">
		<label>Annual Income(all sources)</label>
		<select name="annual_income" id="annual_income" class="block drop-arr select-sty form-control" required="">
       <option disabled selected value="">Annual Income</option>
       <option value="100000 <">100000 <</option>
       <option value="100000 - 500000">100000 - 500000</option>
	   <option value="500001 - 1000000">500001 - 1000000</option>
	   <option value="> 1000000">> 1000000</option>
	   
		</select> 
		</div>

		<h4><b>References:</b></h4>
		<h4>Business Colleague 1</h4><hr>
		<div class="col-md-3">
      <label>Full Name</label>
       <input type="text" name="name" id="nm"  onkeypress="return AllowAlphabet(event)"  class="form-control" required>
       </div>

       <div class="col-md-3">
      <label>Phone number</label>
       <input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)"  class="form-control" required >
       </div>

       <div class="col-md-3">
      <label>Profession</label>
       <input type="text" name="profession" id="profession" class="form-control" required >
       </div>

       <div class="col-md-3">
      <label>Number of Years Known</label>
       <input type="text" name="yearsOfKnowability" id="yearsOfKnowability" onkeypress="return fnAllowNumeric(event)" minlength="1" maxlength="2"  class="form-control" required >
       </div>

       <h4>Business Colleague 2</h4><hr>
		<div class="col-md-3">
      <label>Full Name</label>
       <input type="text" name="name" id="nme"  onkeypress="return AllowAlphabet(event)"  class="form-control" required>
       </div>

       <div class="col-md-3">
      <label>Phone number</label>
       <input type="text" name="mobile" id="mobi" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)"  class="form-control" required >
       </div>

       <div class="col-md-3">
      <label>Profession</label>
       <input type="text" name="profession" id="professn" class="form-control" required >
       </div>

       <div class="col-md-3">
      <label>Number of Years Known</label>
       <input type="text" name="yearsOfKnowability" id="yearsOfKnow" onkeypress="return fnAllowNumeric(event)" minlength="1" maxlength="2"  class="form-control" required >
       </div>

          <div class="col-md-12 ">
       <a class="btn btn-default btn-sm" id="personal_details">NEXT<i class="icon-arrow-right"></i></a>
       </div>
	 
	</div>
	</form>
    </div>

    <div  class="row">
        <h3><center>Upload Documents</center></h3>
        <br/>
        <form id="doc-details" name="doc-details" enctype="multipart/form-data"  method="POST"  class="frm">
			{{ csrf_field() }}
			<div class="col-md-3">PAN Card - Personal</div>
            <div class="col-md-4">
			<input type="file" name="name" class="form-control" placeholder="Upload File" required>
			</div>
			<div class="col-md-3 ">
            <a class="btn btn-default btn-sm" id="doc_details">NEXT<i class="icon-arrow-right"></i></a>
            </div>
			</form>
			</div>
                    			
       
                    			
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

<!-- Date Of Incorporation -->
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear();
    d.setFullYear(year);

    $(".lastReported").datepicker({ dateFormat: "yy-mm-dd",
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
    <!-- State Dropdown -->
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
         	// console.log(msg.access_token);

          $('#access_token').val(msg.access_token);
          $('#acc_token').val(msg.access_token);
          $('#access_tkn').val(msg.access_token);
          $('#access').val(msg.access_token);
          $('#acc_tkn').val(msg.access_token);
          
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
   	// console.log(msg.partnerList);
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
         	// console.log(msg.success);
         if(msg.success==true)
         {
           $('#loanCode').val(msg.loanCode);
           $('#code').val(msg.loanCode);
           $('#loancd').val(msg.loanCode);
           $('#customerCode').val(msg.customerCode);
           // $('#loancode').val(msg.loanCode);
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

<!-- Update -->
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

<!-- Business Details -->
<script type="text/javascript">
	$('#business_details').click(function(){
		if (!$('#business-details').valid()) 
			{
             return false;
			} 
			else 
			{
              $.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-business')}}",
         data : $('#business-details').serialize(),
         success: function(msg){
         	
         	if (msg.success==true) 
         		{
                 alert('Your Business Details has been recieved');
         		} 
         		else 
         		{
                  alert(msg.errorMsg);
         		}
         			  
      }   
     });
			}
	})
</script>

<!-- Financial Details -->
<script type="text/javascript">
	$('#financial_details').click(function(){
		if (!$('#financial-details').valid()) 
			{
             return false;
			} 
			else 
			{
              $.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-financial')}}",
         data : $('#financial-details').serialize(),
         success: function(msg){
         	
         	if (msg.success==true) 
         		{
                 alert('Your Financial Details has been recieved');
         		} 
         		else 
         		{
                  alert(msg.errorMsg);
         		}
         			  
      }   
     });
			}
	})
</script>

<!-- Personal Details -->
<script type="text/javascript">
	$('#personal_details').click(function(){
		if (!$('#personal-details').valid()) 
			{
             return false;
			} 
			else 
			{
              $.ajax({  
         type: "POST",  
         url: "{{URL::to('flexi-personal')}}",
         data : $('#personal-details').serialize(),
         success: function(msg){
         	
         	if (msg.success==true) 
         		{
                 alert('Your Personal Details has been recieved');
         		} 
         		else 
         		{
                  alert(msg.errorMsg);
         		}
         			  
      }   
     });
			}
	})
</script>


<!-- Doc Upload -->
<script type="text/javascript">
	$('#doc_details').click(function(){
 
  if (!$('#doc-details').valid()) {
  return false;
    }
    else
    {    

    	$.ajax({  
         url:"{{URL::to('flexi-doc-kyc')}}" ,  
          data:new FormData($("#doc-details")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success: function(msg){
          
            
              
        }  
      });   
     }
  });
</script>


<script type="text/javascript">
function pan_card(obj,val){
        // console.log(obj);
        if(obj=='pannum' ){
                   var str =$('#pannum').val();
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

$('#platform').on('change', function() {
  // alert('okae');
  var platform=$('#platform').find(":selected").val();
  console.log(platform);
  if ( platform == 'Online' || platform == 'Both')
      {
       
        $("#selling_since").show();
        
       
      }
      else{
       $("#selling_since").hide();
      }
});

$('#platform').on('change', function(){
    	$("#marketPlaces").val('');
        var val = $(this).val();
        // alert(val);
        
        var sub = $('#marketPlaces');

        $('option', sub).filter(function(){
            if (
                 $(this).attr('data-group') === val 
              || $(this).attr('data-group') === 'SHOW'
            ) {
                $(this).show();
            } else {
                $(this).show();
            }
        });
    });
    $('#platform').trigger('change');
</script>





