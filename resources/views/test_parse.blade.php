@include('layout.header')
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" />
  <div ng-app="mainApp" ng-controller="NavController" id="fh5co-hero">

    <!-- The navigation menu will get the value of the "active" variable as a class.
       The $event.preventDefault() stops the page from jumping when a link is clicked. -->

    <nav class="@{{active}}" ng-click="$event.originalEvent.defaultPrevented" ng-init="active ='BASIC DETAIL'">

      <!-- When a link in the menu is clicked, we set the active variable -->
    <a href="#" id="nav0" ng-click="active ='BASIC DETAIL'" >BASIC DETAIL</a>
    <a href="#" ng-click="active='LOAN DETAIL'" id="nav1" class="go_to_next"><b>LOAN DETAIL</a>
    <a href="#" ng-click="active='PERSONAL DETAIL'" id="nav2" class="go_to_next"><b>PERSONAL DETAIL</a>
    <a href="#" ng-click="active='BUSINESS DETAIL'" id="nav3" class="go_to_next"><b>BUSINESS DETAIL</a>
    <a href="#" ng-click="active='ONLINE ID'" id="nav5" class="go_to_next"><b>ONLINE ID</a>
    <a href="#" ng-click="active='REFERENCE'" id="nav6" class="go_to_next"><b>REFERENCE</a>
    <a href="#"  id="nav4" ng-click="active='DOCUMENT'" class="go_to_next"><b>DOCUMENT</a>
    <a href="#"  id="nav7" ng-click="active='BANK STATEMENT'" class="go_to_next"><b>BANK STATEMENT</a>


    </nav>

    <!-- ng-show will show an element if the value in the quotes is truthful,
       while ng-hide does the opposite. Because the active variable is not set
       initially, this will cause the first paragraph to be visible. -->


    
    <form id="tribe_form" name="tribe_form">
    <div id="basic_detail" ng-show="active=='BASIC DETAIL'">
       <div class="col-md-12">
      <h3 class="mrg-top">Partner Details</h3>
    <hr>
      <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
      <div class="col-md-4">
      <p><input type="radio" name="is_loan_distributor" value="true" ng-model="is_tribe_dist"/> Yes&nbsp;&nbsp;
       <input type="radio" name="is_loan_distributor" value="false" ng-model="is_tribe_dist" checked /> No</p></div>
    <div  id="tribe_partner_div"  ng-if="is_tribe_dist === 'true'">
      <div class="col-md-6"><p>partnerID*</p></div>
      <div class="col-md-6"><input type="text" name="partner_id" class="form-control form-group" required /></div>
      <div class="col-md-6"><p>Agent Name*</p></div>
      <div class="col-md-6"><input type="text" name="agent_name"  class="form-control form-group" required /></div>
    </div>
    </div>
    <div class="col-md-12 mrg-top">

    <h3>Company Details</h3>
  <hr>
    <div class="col-md-3"><p>Company Name*</p></div>
    <div class="col-md-8"><input type="text" name="company_name" id="company_name" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><p>Owner Name*</p></div>
    <div class="col-md-8">
    <input type="text" name="owner_name" id="owner_name" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8">
    <input type="email" name="owner_email" id="owner_email" ng-model="owner_email" class="form-control form-group" required />
    <p ng-show="tribe_loan_form.owner_email.$error.email" class="error">Invalid Email address</p>
     <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main1')">Next<i class="icon-arrow-right"></i></a>
    </div>
    

  </div>
    </div>
    <div id="loan_detail" ng-show="active=='LOAN DETAIL'">
        
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
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
   
    </div>

    <div class="col-md-3"><p>Repayment Frequency</p></div>
    <div class="col-md-8 sec">
    <select class="drop-arr" name="repayment_frequency" id="repayment_frequency" required>
    <option disabled selected>Select</option>
    @foreach($data['repayment_frequency'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main2')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow"  onclick="go_back('main0')">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    <div id="loan_detail" ng-show="active=='PERSONAL DETAIL'">
      <h3 class="mrg-top">Personal Details</h3>
  <hr>
    <div class="col-md-3"><p>First Name*</p></div>
    <div class="col-md-8">
    <input type="text" name="first_name" id="first_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Middle Name</p></div>
    <div class="col-md-8">
    <input type="text" name="middle_name" id="middle_name" class="form-control form-group"/></div>
    
    <div class="col-md-3"><p>Last Name*</p></div>
    <div class="col-md-8"><input type="text" name="last_name" id="last_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Mobile No*</p></div>
   <div class="col-md-8"><input type="text" pattern="[789][0-9]{9}" maxlength="10" minlength="10"  name="mobile" id="mobile" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required /></div>
    
    <div class="col-md-3"><p>Email</p></div>
    <div class="col-md-8">
    <input type="email" name="email" id="email" class="form-control form-group" value="@{{owner_email}}" disabled />
    
    </div>
    
    <div class="col-md-3"><p>Address*</p></div>
    <div class="col-md-8"><textarea class="form-control form-control mrg-btm" colspan="2" name="address" id="address"></textarea></div>
    
    <div class="col-md-3"><p>Aadhaar Number*</p></div>
    <div class="col-md-8"><input type="text" name="aadhar_no" id="aadhar_no" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required maxlength="12" minlength="12" /></div>
    
    <!-- <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8">
    <input type="email" name="owner_email_personal" id="owner_email_personal" class="form-control form-group" required="" />
    <p ng-show="tribe_loan_form.owner_email_personal.$error.email" class="error">Invalid Email address</p>
    </div> -->
    
    <div class="col-md-3"><p>Date of Birth*</p></div>
    <div class="col-md-8"><input type="date" name="dob" id="dob" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Annual Income (INR)*</p></div>
    <div class="col-md-8">
    <input type="number" name="annual_income" onkeypress="return fnAllowNumeric(event)" id="annual_income" class="form-control form-group"/></div>
    
    <div class="col-md-3"><p>Education*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="education" id="education" required>
     <option disabled selected>Select</option>
      @foreach($data['education'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </select>
    </div>
    
    <div class="col-md-3"><p>Family Details*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="family_detail" id="family_detail" required>
      <option disabled selected>Select</option>
      @foreach($data['family_details'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow " onclick="go_to_next('main3')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main1')">Back<i class="icon-arrow-right"></i></a>
    </div>
    
    </div>
    <div id="loan_detail" ng-show="active=='BUSINESS DETAIL'">
       <h3 class="mrg-top">Business Details</h3>
  <hr>
    <div class="col-md-3"><p>Employees Count*</p></div>
    <div class="col-md-8">
    <input type="text" class="form-control form-group" name="employee_count" id="employee_count" onkeypress="return fnAllowNumeric(event)" />
    </div>
    
    <div class="col-md-3"><p>Registration Details*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="registration_detail" id="registration_detail" required>
       <option disabled selected>Select</option>
      @foreach($data['registration_details'] as $key=>$value)
      
      <option value="{{$value}}" ><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    <div id="partners_div" style="display: none;">
    <div class="col-md-3"><p>Number of Partners*</p></div>
    <div class="col-md-8 sec"  >
     <select class="drop-arr" name="partners_count" id="partners_count" required>
       <option disabled selected>Select</option>
      @foreach($data['partner_count'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="director_div" style="display: none;">
    <div class="col-md-3"><p>Number of Directors*</p></div>
    <div class="col-md-8 sec"  >
     <select class="drop-arr" name="directors_count" id="directors_count" required>
       <option disabled selected>Select</option>
      @foreach($data['director_count'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="business_run_by_div" style="display: none;">
    <div class="col-md-3"><p>Business Run by:*</p></div>
    <div class="col-md-8 sec"  >
     <select class="drop-arr" name="business_run_by" id="business_run_by" required>
       <option disabled selected>Select</option>
      @foreach($data['proprietorship_type'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>
    <div id="company_pan_card_div">
    <div class="col-md-3"><p>Company Pan Number*</p></div>
    <div class="col-md-8">
    <input type="text" name="company_pan_card" id="company_pan_card" class="form-control form-group" required="" /></div>
    </div>
    <div id="business_run_by_pan_div" style="display: none;">
    <div class="col-md-3"><p>Pan Number*</p></div>
    <div class="col-md-8">
    <input type="text" name="business_run_by_pan" id="business_run_by_pan" class="form-control form-group" required="" /></div>
    </div>
    <div class="col-md-3"><p>Address*</p></div>
    <div class="col-md-8">
    <textarea class="form-control form-control mrg-btm" colspan="2" id="work_address" name="work_address"></textarea></div>
    
    <div class="col-md-3"><p>Business Type*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" id="business_type" name="business_type" required>
      <option disabled selected>Select</option>
      @foreach($data['nature_of_business'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Do you carry out Online Sales?*</p></div>
    <div class="col-md-8"><p>
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',1);" value="true" /> Yes&nbsp;&nbsp; 
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',0);" value="false" checked/> No</p></div>
    
    <div class="col-md-3"><p>Do you carry out Offline Sales?*</p></div>
    <div class="col-md-8"><p>
    <input type="radio" name="offline_sale" value="true"  /> Yes&nbsp;&nbsp; 
    <input type="radio" name="offline_sale" value="false" checked /> No</p></div>
    <div style="display: none;" id="online_sale_channel_div" >
    <div class="col-md-3 sec"><p>online_sale_channel</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" id="online_sale_channel" name="online_sale_channel" required>
      <option disabled selected>Select</option>
      @foreach($data['online_sales_channels'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>


    <div class="col-md-3"><p>Turnover*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="turnover" id="turnover" required>
       <option disabled selected>Select</option>
      @foreach($data['turnover'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Business Premises*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="business_premises" id="business_premises" required>
       <option disabled selected>Select</option>
      @foreach($data['ownership'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Which products do you sell?*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="selling_product" id="selling_product" required>
       <option disabled selected>Select</option>
      @foreach($data['product_sell'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Loan Purpose*</p></div>
    <div class="col-md-8 sec">
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
    
    <div class="col-md-3"><p>How did you Know About Us?*</p></div>
    <div class="col-md-8">
    <input type="text" name="reached_us_via" id="reached_us_via" class="form-control form-group" />
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_to_next('main5')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow " onclick="go_back('main2')">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    <div id="loan_detail" ng-show="active=='ONLINE ID'">
      <p>Providing Online Credentials of Platforms/Marketplaces/Software that you make use of in your business will help us understand your business better and make the most appropriate 
    recommendations for Loans. This can also increase your chances of securing Loans at a lower interest rate. As a Business User, you gain free and complete access to all the insights that Tribe draws using your online credentials.</p>
    <ul>
   
     @foreach($data['aggregated_ids'] as $key=>$value)
      <li class="pad"><input type="radio" name="online_ids" ng-model="online_ids" value="{{$value}}"/> {{$key}}</li>
        <div class="col-sm-12" id="online_ids_{{$value}}" class="extra" ng-show="online_ids=={{$value}}">

          <?php $length=sizeof($data['aggregated_ids_credentials']->$value);
           for($i=0;$i<$length;$i++){ ?>
           <label class="col-sm-2"> {{$data['aggregated_ids_credentials']->$value[$i]}}:</label>
           <input type="text" class="form-control form-group col-sm-10" name="online_ids_array[{{$value}}][<?php echo $data['aggregated_ids_credentials']->$value[$i]; ?>]" required />
           
          <?php }?>
           </div>
     @endforeach
      </ul>
    
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_to_next('main6')">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main3')">Back<i class="icon-arrow-right"></i></a>
    </div>
    <div id="loan_detail" ng-show="active=='REFERENCE'">
      <div class="col-md-12">
    <h3 class="mrg-top">Reference</h3><hr>
  </div>
    <div class="col-md-3">First Name</div>
    <div class="col-md-8">
    <input type="text" id="ref_first_name" name="ref_first_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3">Middle Name</div>
    <div class="col-md-8">
    <input type="text" class="form-control form-group" name="ref_middle_name" id="ref_middle_name"/></div>
    
    <div class="col-md-3">Last Name</div>
    <div class="col-md-8">
    <input type="text" id="ref_last_name" name="ref_last_name" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3">Mobile Number</div>
    <div class="col-md-8">
    <input type="text" name="ref_mobile" id="ref_mobile" class="form-control form-group" maxlength="10" minlength="10"  onkeypress="return fnAllowNumeric(event)"/></div>
    
    <div class="col-md-3">Email</div>
    <div class="col-md-8">
    <input type="email" name="ref_email" id="ref_email" class="form-control form-group"/></div>
    <p ng-show="tribe_loan_form.ref_email.$error.email" class="error">Invalid Email address</p>
   <div class="col-md-3">
    <a class="btn btn-primary btn-outline with-arrow" onclick="go_back('main5')">Back<i class="icon-arrow-right"></i></a>
    </div>
     <div class="col-md-8"> <button class="btn btn-primary btn-outline with-arrow pull-left" id="save_form_button" ng-click="freeze()">Save Form<i class="icon-arrow-right"></i></button></div>
   
    </div>
    <div id="loan_detail" ng-show="active=='DOCUMENT'" ng-if="application_freezed==true">
      <h3 class="mrg-top">KYC Identity Proof(Atleast one document is required)</h3>
      <hr>
        <div class="col-md-4">Pan</div>
        <div class="col-md-8">
         <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(1)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_1">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_1" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_1">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
           <div style="display: none;" id="after_upload_div_1">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_1" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_1">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        </div>
        
        <div class="col-md-4">Aadhaar</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(2)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_2">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_2" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_2">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Driving License </div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(3)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_3">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_3" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_3">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Passport</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(4)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_4">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_4" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_4">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Voter ID</div>
        <div class="col-md-8">
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
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(6)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_6">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_6" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_6">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
         
        </div>
        
        <div class="col-md-4">Leave and License Agreement</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(7)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_7">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_7" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_7">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
       
        </div>
        
        <div class="col-md-12">
        <h3 class="mrg-top">Business KYC</h3><hr>
      </div>
        <div class="col-md-4">Registration Certificate</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(8)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_8">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_8" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_8">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-4">Tax Registration</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(9)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_9">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_9" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_9">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>

        <div class="col-md-4">Company PAN</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(11)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_11">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_11" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_11">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
       
        </div>

        <div class="col-md-12">
        <h3 class="mrg-top">Business Documents</h3><hr>
      </div>
        <div class="col-md-4">Company IT Returns</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(10)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_10">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_10" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_10">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
      
        </div>
        
        
        
         <div class="col-md-4">ITR/VAT Returns/ST Returns</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(12)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_12">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_12" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_12">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        
        </div>
        
        <div class="col-md-12">
        <h3 class="mrg-top">Other Documents</h3><hr>
      </div>
        <div class="col-md-4">Personal IT Returns</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(13)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_13">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_13" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_13">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
      
        </div>
        
        <div class="col-md-4">Other Documents</div>
        <div class="col-md-8">
        <a class="btn btn-primary btn-outline with-arrow pull-right" onclick="tribe_doc_upload(14)">Add Document<i class="icon-arrow-right"></i></a>
           <div style="display: none;" id="after_upload_div_14">
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="get_doc_14" >Show Document<i class="icon-arrow-right"></i></a>
              <a class="btn btn-primary btn-outline with-arrow pull-right" id="del_doc_14">Delete Document<i class="icon-arrow-right"></i></a>
          </div>
        </div>
        
    </div>
    <div id="loan_detail" ng-show="active=='BANK STATEMENT'" ng-if="application_freezed==true">
    <h3 class="mrg-top">BANK STATEMENTS</h3><hr>
          <a class="btn btn-primary btn-outline with-arrow " data-toggle="modal" data-target="#tribe_bank_statement_form" id="upload_bank_statement_submit">Upload Bank Document<i class="icon-arrow-right"></i></a>  
          <a class="btn btn-primary btn-outline with-arrow " id="tribe_final_submit" style="display: none;">Submit Application<i class="icon-arrow-right"></i></a> 
          <a class="btn btn-primary btn-outline with-arrow " id="abandon_tribe_application"> Abandon<i class="icon-arrow-right"></i></a>   
    </div>
    <!-- Include AngularJS from Google's CDN -->
    </form>
  </div>
  @include('layout.footer')
  @include('layout.script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular.min.js"></script>
  <script>
         var mainApp = angular.module("mainApp", []);
          

         mainApp.controller('NavController', function($scope) {
         // console.log($scope);
         $scope.application_freezed=false;
          $scope.freeze=function(){
             $scope.application_freezed=true;
          }
         
         });
      </script>
<style type="text/css">
  *{
  margin:0;
  padding:0;
}


/*-------------------------
  General Styles
--------------------------*/


body{
  font:15px/1.3 'Open Sans', sans-serif;
  color: #5e5b64;
  text-align:center;
}

a, a:visited {
  outline:none;
  color:#389dc1;
}

a:hover{
  text-decoration:none;
}

section, footer, header, aside, nav{
  display: block;
}


/*-------------------------
  The menu
--------------------------*/


nav{
  display:inline-block;
  margin:60px auto 45px;
  background-color:#55B460;
  box-shadow:0 1px 1px #ccc;
  border-radius:2px;
}

nav a{
  display:inline-block;
  padding: 18px 30px;
  color:#fff !important;
  font-weight:bold;
  font-size:14px;
  text-decoration:none !important;
  line-height:1;
  text-transform: uppercase;
  background-color:transparent;

  -webkit-transition:background-color 0.25s;
  -moz-transition:background-color 0.25s;
  transition:background-color 0.25s;
}

nav a:first-child{
  border-radius:2px 0 0 2px;
}

nav a:last-child{
  border-radius:0 2px 2px 0;
}

nav.home .home,
nav.team.team,
nav.about .about,
nav.contact .contact{
  background-color:#5867E3;
}

p{
  font-s
  color:#7d9098;
}

p b{
  color:#ffffff;
  display:inline-block;
  padding:5px 10px;
  background-color:#DC64C6;
  border-radius:2px;ize:22px;
  font-weight:bold;
  text-transform:uppercase;
  font-size:18px;
}
</style>