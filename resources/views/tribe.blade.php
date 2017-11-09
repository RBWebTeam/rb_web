@include('layout.header')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style src="css/jquery-ui.min.css"></style>
<style type="text/css">
  .drop-arr {text-transform: uppercase;}
</style>
  <div id="fh5co-hero" ng-app="">
  <form id="tribe_loan_form" method="POST" name="tribe_loan_form" >
  {!! csrf_field() !!}
    <div class="container">
    <h2 class="align-center loan-head">Tribe</h2>
    <div class="col-md-12 pad1 white-bg box-shadow">

   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" id="nav0" href="#main">BASIC DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main1" id="nav1" class="go_to_next"><b>LOAN DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main2" id="nav2" class="go_to_next"><b>PERSONAL DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main3" id="nav3" class="go_to_next"><b>BUSINESS DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main5" id="nav5" class="go_to_next"><b>ONLINE ID</b></a></li>
    <li><a data-toggle="tab" href="#main6" id="nav6" class="go_to_next"><b>REFERENCE</b></a></li>
    <li><a data-toggle="tab"  id="nav4" class="go_to_next"><b>DOCUMENT</b></a></li>
    <li><a data-toggle="tab"  id="nav7" class="go_to_next"><b>BANK STATEMENT</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active" ng-app="First_tab">
      
    <div class="col-md-12">
    <h3 class="mrg-top">Partner Details</h3>
  <hr>
    <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
    <div class="col-md-4">
    <p><input type="radio" name="is_loan_distributor" onclick="showHidden('tribe_partner_div',1)" value="true" /> Yes&nbsp;&nbsp;
     <input type="radio" name="is_loan_distributor" onclick="showHidden('tribe_partner_div',0)" value="false" checked /> No</p></div>
  <div  id="tribe_partner_div" class="col-md-12" style="display: none;">
    <div class="col-md-3"><p>partnerID*</p></div>
    <div class="col-md-8 form-padding"><input type="text" name="partner_id"  class="form-control form-group" required /></div>
    <div class="col-md-3"><p>Agent Name*</p></div>
    <div class="col-md-8 form-padding"><input type="text" name="agent_name"  class="form-control form-group" required /></div>
  </div>
  </div>

  <div class="col-md-12 mrg-top">

    <h3>Company Details</h3>
  <hr>
    <div class="col-md-3"><span>Company Name*</span></div>
    <div class="col-md-8 form-padding"><input type="text" name="company_name" id="company_name" class="form-control form-group " required /></div>
    
    <div class="col-md-3"><span>Owner Name*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" name="owner_name" id="owner_name" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><span>Owner Email*</span></div>
    <div class="col-md-8 form-padding">
    <input type="email" name="owner_email" id="owner_email" ng-model="owner_email" class="form-control form-group" required />
	
    
	
    </div>
	<div class="col-md-3"></div>
	<div class="col-md-8 pad-no">
    <p ng-show="tribe_loan_form.owner_email.$error.email" class="error flt-lft">Invalid Email address</p>
     <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main1')">Next<i class="icon-arrow-right"></i></a>
	 </div>

  </div>

    </div>
    <div id="main1" class="tab-pane fade" ng-app="second_tab">
      
    <h3 class="mrg-top">Loan Details</h3>
  <hr>
    <div class="col-md-3"><p>Loan Amount (Rs.)</p></div>
    <div class="col-md-8"><p>
    <input type="text" name="loan_amount" id="loan_amount" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required /></p></div>
    
    <div class="col-md-3"><p>Loan Tenure (Months)</p></div>
    <div class="col-md-8"><p>
    <input type="text" name="loan_tenure" id="loan_tenure_tribe_loan" class="form-control form-group" required onkeypress="return fnAllowNumeric(event)" /></p></div>
    
    <div class="col-md-3"><p>Loan Type</p></div>
    <div class="col-md-8 sec">
    <select class="drop-arr" name="loan_type" id="loan_type" required>
    <option disabled selected>Select</option>
    @foreach($data['loan_type'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
   
    </div>

    <div class="col-md-3"><p>Repayment Frequency</p></div>
    <div class="col-md-8 sec">
    <select class="drop-arr" name="repayment_frequency" id="repayment_frequency" required>
    <option disabled selected>Select</option>
    @foreach($data['repayment_frequency'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main2')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow"  onclick="go_back('main0')">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    
    <div id="main2" class="tab-pane fade">
      
    <h3 class="mrg-top">Personal Details</h3>
  <hr>
    <div class="col-md-3"><span>First Name*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" name="first_name" id="first_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><span>Middle Name</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" name="middle_name" id="middle_name" class="form-control form-group"/></div>
    
    <div class="col-md-3"><span>Last Name*</span></div>
    <div class="col-md-8 form-padding"><input type="text" name="last_name" id="last_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><span>Mobile No*</span></div>
   <div class="col-md-8 form-padding"><input type="text" pattern="[789][0-9]{9}" maxlength="10" minlength="10"  name="mobile" id="mobile" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required /></div>
    
    <div class="col-md-3"><span>Email</span></div>
    <div class="col-md-8 form-padding">
    <input type="email" name="email" id="email" class="form-control form-group" value="@{{owner_email}}" disabled />
    
    </div>
    
    <div class="col-md-3"><span>Address*</span></div>
    <div class="col-md-8 form-padding mrg-btm"><textarea class="form-control form-control mrg-btm" colspan="2" name="address" id="address"></textarea></div>
    
    <div class="col-md-3"><span>Aadhaar Number*</Numberspan></div>
    <div class="col-md-8 form-padding"><input type="text" name="aadhar_no" id="aadhar_no" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required maxlength="12" minlength="12" /></div>
    
    <!-- <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8">
    <input type="email" name="owner_email_personal" id="owner_email_personal" class="form-control form-group" required="" />
    <p ng-show="tribe_loan_form.owner_email_personal.$error.email" class="error">Invalid Email address</p>
    </div> -->
    
    <div class="col-md-3"><span>Date of Birth*</span></div>
    <div class="col-md-8 form-padding"><input type="date" name="dob" id="dob" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><span>Annual Income (INR)*</span></div>
    <div class="col-md-8 form-padding">
    <input type="number" name="annual_income" onkeypress="return fnAllowNumeric(event)" id="annual_income" class="form-control form-group"/></div>
    
    <div class="col-md-3"><span>Education*</span></div>
    <div class="col-md-8 form-padding sec">
      <select class="drop-arr" name="education" id="education" required>
     <option disabled selected>Select</option>
      @foreach($data['education'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </select>
    </div>
    
    <div class="col-md-3"><span>Family Details*</span></div>
    <div class="col-md-8 form-padding sec">
       <select class="drop-arr" name="family_detail" id="family_detail" required>
      <option disabled selected>Select</option>
      @foreach($data['family_details'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    
    </div>
    <div class="col-md-3"></div>
	<div class="col-md-8 pad-no"><a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main3')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main1')">Back<i class="icon-arrow-right"></i></a></div>
    </div>
    <div id="main3" class="tab-pane fade">
      <h3 class="mrg-top">Business Details</h3>
  <hr>
    <div class="col-md-3"><span>Employees Count*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" class="form-control form-group" name="employee_count" id="employee_count" onkeypress="return fnAllowNumeric(event)" required="" />
    </div>
    
    <div class="col-md-3"><span>Registration Details*</span></div>
    <div class="col-md-8 form-padding sec">
     <select class="drop-arr" name="registration_detail" id="registration_detail" required>
       <option disabled selected>Select</option>
      @foreach($data['registration_details'] as $key=>$value)
      
      <option value="{{$value}}" ><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    <div id="partners_div" style="display: none;">
    <div class="col-md-3"><p>Number of Partners*</p></div>
    <div class="col-md-8 form-padding sec"  >
     <select class="drop-arr" name="partners_count" id="partners_count" required>
       <option disabled selected>Select</option>
      @foreach($data['partner_count'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="director_div" style="display: none;">
    <div class="col-md-3"><span>Number of Directors*</span></div>
    <div class="col-md-8 form-padding sec"  >
     <select class="drop-arr" name="directors_count" id="directors_count" required>
       <option disabled selected>Select</option>
      @foreach($data['director_count'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="business_run_by_div" style="display: none;">
    <div class="col-md-3"><span>Business Run by:*</span></div>
    <div class="col-md-8 form-padding sec"  >
     <select class="drop-arr" name="business_run_by" id="business_run_by" required>
       <option disabled selected>Select</option>
      @foreach($data['proprietorship_type'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="company_pan_card_div">
    <div class="col-md-3"><span>Company Pan Number*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" pattern="/^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/" name="company_pan_card" id="company_pan_card" class="form-control form-group pan_valid" required="" /></div>
    </div>
    <div id="business_run_by_pan_div" style="display: none;">
    <div class="col-md-3"><span>Pan Number*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" pattern="/^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/" name="business_run_by_pan" id="business_run_by_pan" class="form-control form-group pan_valid" required="" /></div>
    </div>
    <div class="col-md-3"><span>Address*</span></div>
    <div class="col-md-8 form-padding">
    <textarea class="form-control form-control mrg-btm" colspan="2" id="work_address" name="work_address" required=""></textarea></div>
    
    <div class="col-md-3"><span>Business Type*</span></div>
    <div class="col-md-8 form-padding sec">
      <select class="drop-arr" id="business_type" name="business_type" required>
      <option disabled selected>Select</option>
      @foreach($data['nature_of_business'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><span>Do you carry out Online Sales?*</span></div>
    <div class="col-md-8 form-padding"><p>
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',1);" value="true" /> Yes&nbsp;&nbsp; 
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',0);" value="false" checked/> No</p></div>
    
    <div class="col-md-3"><span>Do you carry out Offline Sales?*</span></div>
    <div class="col-md-8 form-padding"><span>
    <input type="radio" name="offline_sale" value="true"  /> Yes&nbsp;&nbsp; 
    <input type="radio" name="offline_sale" value="false" checked /> No</span></div>
    <div style="display: none;" id="online_sale_channel_div" >
    <div class="col-md-3 sec"><span>online_sale_channel</span></div>
    <div class="col-md-8 form-padding sec">
      <select class="drop-arr" id="online_sale_channel" name="online_sale_channel" required>
      <option disabled selected>Select</option>
      @foreach($data['online_sales_channels'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    </div>


    <div class="col-md-3"><span>Turnover*</span></div>
    <div class="col-md-8 form-padding sec">
       <select class="drop-arr" name="turnover" id="turnover" required>
       <option disabled selected>Select</option>
      @foreach($data['turnover'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><span>Business Premises*</span></div>
    <div class="col-md-8 form-padding sec">
      <select class="drop-arr" name="business_premises" id="business_premises" required>
       <option disabled selected>Select</option>
      @foreach($data['ownership'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><span>Which products do you sell?*</span></div>
    <div class="col-md-8 form-padding sec">
      <select class="drop-arr" name="selling_product" id="selling_product" required>
       <option disabled selected>Select</option>
      @foreach($data['product_sell'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><span>Loan Purpose*</span></div>
    <div class="col-md-8 form-padding sec">
     <select class="drop-arr" name="loan_purpose" id="loan_purpose" required>
       <option disabled selected>Select Loan Purpose</option>
       <option value="1">inventory rotation</option>
       <option value="1">product differentiation</option>
       <option value="1">expansion</option>
       <option value="1">launch of new product</option>
       <option value="1">working capital</option>
       <option value="1">others</option>
    </select>
    </div>
    
    <div class="col-md-3"><span>How did you Know About Us?*</span></div>
    <div class="col-md-8 form-padding">
    <input type="text" name="reached_us_via" id="reached_us_via" class="form-control form-group" required="" />
    
    </div>
	<div class="col-md-3"></div>
	<div class="col-md-8 pad-no"><a class="btn btn-primary btn-outline with-arrow" onclick="go_to_next('main5')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow " onclick="go_back('main2')">Back<i class="icon-arrow-right"></i></a></div>
    </div>
    
    <div id="main5" class="tab-pane fade drop-arr">
      <p>Providing Online Credentials of Platforms/Marketplaces/Software that you make use of in your business will help us understand your business better and make the most appropriate 
    recommendations for Loans. This can also increase your chances of securing Loans at a lower interest rate. As a Business User, you gain free and complete access to all the insights that Tribe draws using your online credentials.</p>
    <ul>
   
     @foreach($data['aggregated_ids'] as $key=>$value)
      <li class="pad"><input type="radio" name="online_ids" value="{{$value}}" onclick="showDiv('online_ids_{{$value}}')" /> {{ str_replace("_"," ",$key)}}</li>
        <div class="col-sm-12" id="online_ids_{{$value}}" style="display: none;" class="extra">

          <?php $length=sizeof($data['aggregated_ids_credentials']->$value);
           for($i=0;$i<$length;$i++){ ?>
           <label class="col-sm-2"> {{ str_replace("_"," ",$data['aggregated_ids_credentials']->$value[$i])}}:</label>
           <input type="text" class="form-control form-group col-sm-10" name="online_ids_array[{{$value}}][<?php echo $data['aggregated_ids_credentials']->$value[$i]; ?>]" required />
           
          <?php }?>
           </div>
     @endforeach
      </ul>
    
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_to_next('main6')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main3')">Back<i class="icon-arrow-right"></i></a>
    </div>
    <div id="main6" class="tab-pane fade">
      
    <div class="col-md-12">
    <h3 class="mrg-top">Reference</h3><hr>
  </div>
    <div class="col-md-3">First Name*</div>
    <div class="col-md-8 form-padding">
    <input type="text" id="ref_first_name" name="ref_first_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3">Middle Name</div>
    <div class="col-md-8 form-padding">
    <input type="text" class="form-control form-group" name="ref_middle_name" id="ref_middle_name"/></div>
    
    <div class="col-md-3">Last Name*</div>
    <div class="col-md-8 form-padding">
    <input type="text" id="ref_last_name" name="ref_last_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3">Mobile Number*</div>
    <div class="col-md-8 form-padding">
    <input type="text" name="ref_mobile" id="ref_mobile" class="form-control form-group" maxlength="10" minlength="10"  onkeypress="return fnAllowNumeric(event)" required="" /></div>
    
    <div class="col-md-3">Email*</div>
    <div class="col-md-8 form-padding">
    <input type="email" name="ref_email" id="ref_email" class="form-control form-group" required="" /></div>
    <p ng-show="tribe_loan_form.ref_email.$error.email" class="error">Invalid Email address</p>
   <div class="col-md-3">
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main5')">Back<i class="icon-arrow-right"></i></a>
    </div>
     <div class="col-md-8 form-padding"> <button class="btn btn-primary btn-outline with-arrow pull-left" id="save_form_button">Save Form<i class="icon-arrow-right"></i></button></div>
   
    </div>
    </form>
    
    <div id="main4" class="tab-pane fade">
     
        <h3 class="mrg-top">KYC Identity Proof(Atleast one document is required)</h3>
      <hr>
        <div class="col-md-4">Pan</div>
        <div class="col-md-8 form-padding">
         <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(1)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_1">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_1" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_1">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
         
        </div>
        
        <div class="col-md-4">Aadhaar</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(2)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_2">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_2" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_2">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Driving License </div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(3)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_3">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_3" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_3">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Passport</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(4)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_4">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_4" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_4">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Voter ID</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(5)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_5">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_5" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_5">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        <div class="col-md-12">
        <h3 class="mrg-top">Address Proof</h3><hr>
      </div>
      <div class="col-md-4">Electricity Bill</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(12)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_12">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_12" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_12">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
         
        </div>
        
        <div class="col-md-4">Leave and License Agreement</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(13)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_13">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_13" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_13">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
       
        </div>
        
        <div class="col-md-12">
        <h3 class="mrg-top">Business KYC</h3><hr>
      </div>
        <div class="col-md-4">Registration Certificate</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(14)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_14">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_14" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_14">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Tax Registration</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(15)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_15">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_15" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_15">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>

        <div class="col-md-4">Company PAN</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(8)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_8">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_8" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_8">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
       
        </div>

        <div class="col-md-12">
        <h3 class="mrg-top">Business Documents</h3><hr>
      </div>
        <div class="col-md-4">Company IT Returns</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(7)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_7">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_7" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_7">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
      
        </div>
        
        
        
         <div class="col-md-4">ITR/VAT Returns/ST Returns</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(9)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_9">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_9" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_9">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-12">
        <h3 class="mrg-top">Other Documents</h3><hr>
      </div>
        <div class="col-md-4">Personal IT Returns</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(6)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_6">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_6" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_6">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
      
        </div>
        
        <div class="col-md-4">Other Documents</div>
        <div class="col-md-8 form-padding">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(11)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_11">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_11" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_11">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        </div>
        
    </div>

    <div id="main7" class="tab-pane fade">
      <h3 class="mrg-top">BANK STATEMENTS</h3><hr>
          <a class="btn btn-primary btn-outline with-arrow " data-toggle="modal" data-target="#tribe_bank_statement_form" id="upload_bank_statement_submit">Upload Bank Document<i class="icon-arrow-right"></i></a>  
          <a class="btn btn-primary btn-outline with-arrow " id="tribe_final_submit" style="display: none;">Submit Application<i class="icon-arrow-right"></i></a> 
          <a class="btn btn-primary btn-outline with-arrow " id="abandon_tribe_application"> Abandon<i class="icon-arrow-right"></i></a>   
    </div>
    <div id="thank_you_div" class="tab-pane fade" style="display: none;">
    <br>
      <h3 class="mrg-top">Thank You</h3><hr>
            
    </div>
  </div>
  </div>
  </div>
  </div>
  <br>


  @include('layout.footer')
  @include('layout.script')
 <!-- modal for bank statement -->

<div id="tribe_bank_statement_form" class="modal fade" role="dialog">
 <div class="modal-dialog">
 <div class="modal-content" style="float:left;">
 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
         <h4 class="modal-title">Upload Bank Document</h4>
      </div>
 <form id="bank_statement_form" class="pad1" name="bank_statement_form" enctype="multipart/form-data" method="POST" >
    {!! csrf_field() !!}
    <input type="hidden" name="loan_id" class="loan_id">
    <input type="hidden" name="transaction_id" class="transaction_id">
    
        <div class="col-md-3">Institue Name</div>
        <div class="col-md-8 form-padding sec">
         <select class="drop-arr" name="institution"  required>
           <option disabled selected>Select</option>
          @foreach($data['institution'] as $key=>$value)
          
          <option value="{{$value}}"><?php echo str_replace("_"," ",$key);?></option>
          @endforeach
        </select>
        </div>
        
        <div class="col-md-3">Start Date</div>
        <div class="col-md-8 form-padding"
        ><input type="date" name="start_date"  class="form-control form-group" />
        </div>
        
        <div class="col-md-3">End Date</div>
        <div class="col-md-8 form-padding">
        <input type="date"  name="end_date" class="form-control form-group"/>
        </div>
        
        <div class="col-md-3">Upload Document</div>
        <div class="col-md-8 form-padding">
        <input type="file"  name="upload_statement" class="files" id="statement_file" class="form-control form-group no-border" accept="application/pdf"/>
        <div style="display: none;" class="error file_ext_error">Only Pdf files are allowed</div>
        </div>
        
       <div class="col-md-3">PDF Password(if any)</div>
        <div class="col-md-8 form-padding"  >
        <input type="checkbox" name="pdf_has_pwd" id="pdf_has_pwd" >
        <input type="password" name="pdf_password" id="pdf_password" class="form-control form-group" style="display: none;" />
        </div>
        
        <div class="col-md-3"></div>
        <div class="col-md-8 form-padding mrg-top">
        <a class="btn btn-primary btn-outline with-arrow pull-left" id="submit_tribe_statement">Submit Statment
        <i class="icon-arrow-right"></i>
        </a>
        <div id="close_tribe_transaction_div" style="display: none;">
          <a class="btn btn-primary btn-outline with-arrow pull-right" id="close_tribe_transaction">Close Transaction
          <i class="icon-arrow-right"></i>
          </a>
        </div>
        </div>
    </form>
	</div>
	</div>
</div>
<!-- end modal -->

<script type="text/javascript">
  var previousPartner;
  var doc_id;
  $('.pan_valid').blur(function(){
    //console.log($(this));
    var str =$(this).val();
    var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
    var res = str.match(pancardPattern);
    if(res){
      $(this).removeClass('error');
     
    }else{
     
       $(this).addClass('error');
       $(this).removeClass('valid');
       return false;
    }
  });
    function showDiv(name){
       $('#'+previousPartner).hide();
       $('#'+name).show();
       previousPartner=name;
    }

    function showHidden(div,flag){
        if(flag==0){
          $('#'+div).hide();
        }else{
         $('#'+div).show();
        }
    }

    $("#save_form_button").click(function(){
       event.preventDefault(); 
       if(! $('#tribe_loan_form').valid()){
          return false;
       }
          $('#freeze_form_modal').modal('show');
      
    });
 

  $('#registration_detail').change(function() {
    $('#director_div').hide();
    $('#partners_div').hide();
    $('#business_run_by_div').hide();
    $('#company_pan_card_div').show();
    $('#business_run_by_pan_div').hide();
    if($(this).val()==1 || $(this).val() ==7){
      //show directors
      $('#director_div').show();
    }else if($(this).val()==2 || $(this).val() ==10){
      //no. of partners
      $('#partners_div').show();
    }else if($(this).val()==9){
      //Business run by /PAN
      $('#business_run_by_div').show();
      $('#company_pan_card_div').hide();
      $('#business_run_by_pan_div').show();
    }     
  });
  $('.go_to_next').click(function(){
if($('#tribe_loan_form').valid()){
      //console.log("valid_tab");
   }else{
    return false;
   }
});
function go_to_next(next){
    var nav_number=next.split('main');
   if($('#tribe_loan_form').valid()){
     //console.log("valid_tab");
      $( "#nav"+nav_number[1] ).trigger( "click" );
      window.scrollTo(0,0);
    }else{
      return false;
    }
}
 function go_back(next){
    var nav_number=next.split('main');
      $( "#nav"+nav_number[1] ).trigger( "click" );
      //return false;
      window.scrollTo(0,0);
 }

$("#upload_doc_submit").click(function(){
  $('#went_wrong_modal').modal('hide');
    if(!$('#kyc_form').valid()){
      return false;
    }
    //console.log($('#tribe_document_itself'));
  if(!check_file_ext('tribe_document_itself')){
   
    return false;
  }
  
  var form_url="{{URL::to('upload-tribe-doc')}}";
  $.ajax({
      url:form_url ,  
      data:new FormData($("#kyc_form")[0]),
      dataType:'json',
      async:false,
      type:'POST',
      processData: false,
      contentType: false,
      success:function(response){
       // console.log(response);
        if(response.status){
              
            $('#kyc_form')[0].reset();
            $('#tribe_doc_upload_modal').modal('hide');
            $('#after_upload_div_'+doc_id).show();
            $('#get_doc_'+doc_id).attr('onclick','get_doc_fun('+response.document_id+')');
            $('#del_doc_'+doc_id).attr('onclick','del_doc_fun('+response.document_id+','+doc_id+')');
        }else{
           $('#tribe_doc_upload_modal').modal('hide');
          $('#went_wrong_modal').modal('show');
          //console.log("error => "+response.error);
        }
        
        
      },
    });
 });

$("#submit_tribe_statement").click(function(){
  $('#went_wrong_modal').modal('hide');
  if(!$('#bank_statement_form').valid()){
    return false;
  }
    else{
   // var CSRF_TOKEN = $('input[name="_token"]').val();    

   if(!check_file_ext('statement_file')){
    return false;
  }              
    var form_url="{{URL::to('upload-tribe-bank-statement')}}";
    $.ajax({
          url:form_url ,
          data:new FormData($("#bank_statement_form")[0]),
          dataType:'json',
          async:false,
          type:'POST',
          processData: false,
          contentType: false,
          success:function(response){
            //console.log(response.status);
            if(response.status){
              $('.transaction_id').val(response.transaction_id);
              $('#close_tribe_transaction_div').show();
              //$('.loan_id').val(response.loan_id);
            }else{
              $('#tribe_bank_statement_form').modal('hide');
              $('#went_wrong_modal').modal('show');
             // console.log("something went wrong in ");
            }
          },
        });
  }
 });

$('#freeze_form').click(function(){
     
      var CSRF_TOKEN = $('input[name="_token"]').val();
    
     $('#freeze_form_modal').modal('hide');
     $('#went_wrong_modal').modal('hide');
    $.ajax({  
             type: "POST",  
             url: "{{URL::to('save-tribe-form')}}",
             data : $('#tribe_loan_form').serialize(),
             success: function(msg){

              if(msg.status){

                $('#tribe_loan_form').find('input, radio,textarea, button, select').attr('disabled','disabled');
                  $('.app_id').val(msg.tribe);
                  $('.loan_id').val(msg.loan_id);

                  //enable further links
                  $( "#nav4").attr( "href","#main4" );
                  $( "#nav7").attr( "href","#main7" );
                  $( "#nav4").trigger( "click" );

                }else{
                  $('#went_wrong_modal').modal('show');
                 // console.log("error "+msg);
                 // window.location.href="{{URL::to('went-wrong')}}";
                }
               }
          });
});

$('#decline_freeze').click(function(){
     $('#freeze_form_modal').modal('hide');
});
$('#pdf_has_pwd').change(function(){
     if(this.checked == true){
        $('#pdf_password').show();
    }else{

        $('#pdf_password').hide();
        $('#pdf_password').val('');
   }
});

function tribe_doc_upload(id){
    $('#tribe_doc_upload_modal').modal('show');
    $('#uplaoding_doc_name').val(id);
    doc_id=id;
     $('#doc_special_fields_ITR').hide();
     $('#doc_special_fields').hide();
    if(id==6 || id==7){
      $('#doc_special_fields').show();
    }else if(id==9){
      $('#doc_special_fields_ITR').show();
    }
}

  $('#close_tribe_transaction').click(function(){
       var form_url="{{URL::to('tribe-close-transaction')}}";
      $('#went_wrong_modal').modal('hide');
    $.ajax({
          url:form_url ,
          data:"_token={!! csrf_token() !!}",
          type:'POST',
          success:function(response){
           // console.log(response);
           if(response.status)
           {  

              $('#tribe_final_submit').show();
              $('#upload_bank_statement_submit').hide();
                        
              $('#tribe_bank_statement_form').modal('hide');
            }else{
              $('#tribe_bank_statement_form').modal('hide');
              $('#went_wrong_modal').modal('show');
              //console.log("No such transaction / error");
            }
          },
        });
  });
    
    $('#abandon_tribe_application').click(function(){
      $('#went_wrong_modal').modal('hide');
        $.ajax({  
               type: "POST",  
               url: "{{URL::to('abandon-tribe-application')}}",
               data : "_token={!! csrf_token() !!}",
               success: function(msg){

                if(msg.status){
                   

                  }else{
                    $('#went_wrong_modal').modal('show');
                   // console.log("error "+msg);
                   // window.location.href="{{URL::to('went-wrong')}}";
                  }
                 }
            });
    });

    $('#tribe_final_submit').click(function(){
       $('#went_wrong_modal').modal('hide');
     $.ajax({  
               type: "POST",  
               url: "{{URL::to('tribe-final-submission')}}",
               data :"_token={!! csrf_token() !!}",
               success: function(msg){

                if(msg.status){
                   $('#main7').hide();
                   window.location.href="{{URL::to('thank-you')}}";

                  }else{
                    $('#went_wrong_modal').modal('show');
                    //console.log("error "+msg);
                   // window.location.href="{{URL::to('went-wrong')}}";
                  }
                 }
            });
    });

//get and delete doc function
function get_doc_fun(id){
  var new_id=id;
  $('#went_wrong_modal').modal('hide');
    $.ajax({  
               type: "POST",  
               url: "{{URL::to('get-tribe-doc')}}",
               data : "id="+new_id+"&_token={!! csrf_token() !!}",
               success: function(msg){
               // console.log(msg);
                if(msg.status){
                    window.open(msg.url,'_blank');
                  }else{
                    $('#went_wrong_modal').modal('show');
                   // console.log("error "+msg);
                   // window.location.href="{{URL::to('went-wrong')}}";
                  }
                 }
            });
}
function del_doc_fun(id,doc){
  var new_id=id;
  $('#went_wrong_modal').modal('hide');
    $.ajax({  
               type: "POST",  
               url: "{{URL::to('del-tribe-doc')}}",
               data : "id="+new_id+"&_token={!! csrf_token() !!}",
               success: function(msg){
               // console.log(msg);
                if(msg.status){
                   //console.log(msg.document_id);
                    $('#after_upload_div_'+doc).hide();

                  }else{
                    $('#went_wrong_modal').modal('show');
                   // console.log("error "+msg);
                   // window.location.href="{{URL::to('went-wrong')}}";
                  }
                 }
            });
}
  </script>
 <script>
 jQuery(function() {
    jQuery( "#datepicker1" ).datepicker({
        minDate:"2017-05-05",
        dateFormat: "yy-mm-dd",
        onSelect: function(date){
        //alert("none");
        var date1 = jQuery('#datepicker1').datepicker('getDate');           
        var date = new Date( Date.parse( date1 ) ); 
        date.setDate( date.getDate() + 1 );        
        var newDate = date.toDateString(); 
        newDate = new Date( Date.parse( newDate ) );                      
        jQuery('#datepicker2').datepicker("option","minDate",newDate);            
    } 
    });
    jQuery( "#datepicker2" ).datepicker({
        minDate: '+1d',
        dateFormat: "yy-mm-dd"
       });
 });
 function check_file_ext(id){
    var ext = $('#'+id).val().split('.').pop().toLowerCase();
    if(ext!='pdf'){
      $('#'+id).val('');
      $('.file_ext_error').show();
      return false;
    }else{
      return true;
    }
 }
 $('.files').click(function(){
   $('.file_ext_error').hide();
 });


</script>
 