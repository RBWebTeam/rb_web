@include('layout.header')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <div id="fh5co-hero" ng-app="">
  <form id="tribe_loan_form" method="POST" name="tribe_loan_form" >
  {{ csrf_field() }}
    <div class="container">
    <h2 class="align-center loan-head">Tribe</h2>
    <div class="col-md-12 pad1 white-bg box-shadow">

   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#main">BASIC DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main1" class="go_to_next"><b>LOAN DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main2" class="go_to_next"><b>PERSONAL DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main3" class="go_to_next"><b>BUSINESS DETAIL</b></a></li>
    <li><a data-toggle="tab" href="#main5" class="go_to_next"><b>ONLINE ID</b></a></li>
    <li><a data-toggle="tab" href="#main6" class="go_to_next"><b>REFERENCE</b></a></li>
    <li><a data-toggle="tab" href="#main4" class="go_to_next"><b>DOCUMENT</b></a></li>
    <li><a data-toggle="tab" href="#main7" class="go_to_next"><b>BANK STATEMENT</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active" ng-app="First_tab">
      
    <div class="col-md-12">
    <h3 class="mrg-top">Partner Details</h3>
  <hr>
    <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
    <div class="col-md-4">
    <p><input type="radio" name="tribe_partner" onclick="showHidden('tribe_partner_div',1)" /> Yes&nbsp;&nbsp;
     <input type="radio" name="tribe_partner" onclick="showHidden('tribe_partner_div',0)" checked /> No</p></div>
  <div  id="tribe_partner_div" style="display: none;">
    <div class="col-md-6"><p>partnerID*</p></div>
    <div class="col-md-6"><input type="text" name="partner_id"  class="form-control form-group" required /></div>
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
     <a class="btn btn-primary btn-outline with-arrow go_to_next" href="#main1" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
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
    
    <div class="col-md-3"><p>Repayment Frequency</p></div>
    <div class="col-md-8 sec">
    <select class="drop-arr" name="repayment_frequency" id="repayment_frequency" required>
    <option disabled selected>Select</option>
    @foreach($data['repayment_frequency'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow go_to_next" href="#main2" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    
    <div id="main2" class="tab-pane fade">
      
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
   <div class="col-md-8"><input type="text" pattern="[789][0-9]{9}" maxlength="10" name="mobile" id="mobile" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required /></div>
    
    <div class="col-md-3"><p>Email</p></div>
    <div class="col-md-8">
    <input type="email" name="email" id="email" class="form-control form-group" required/>
    <p ng-show="tribe_loan_form.email.$error.email" class="error">Invalid Email address</p>
    </div>
    
    <div class="col-md-3"><p>Address*</p></div>
    <div class="col-md-8"><textarea class="form-control form-control mrg-btm" colspan="2" name="address" id="address"></textarea></div>
    
    <div class="col-md-3"><p>Aadhaar Number*</p></div>
    <div class="col-md-8"><input type="text" name="aadhar_no" id="aadhar_no" class="form-control form-group" onkeypress="return fnAllowNumeric(event)" required maxlength="12" minlength="12" /></div>
    
    <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8">
    <input type="email" name="owner_email_personal" id="owner_email_personal" class="form-control form-group" required="" />
    <p ng-show="tribe_loan_form.owner_email_personal.$error.email" class="error">Invalid Email address</p>
    </div>
    
    <div class="col-md-3"><p>Date of Birth*</p></div>
    <div class="col-md-8"><input type="date" name="dob" id="dob" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Annual Income (INR)*</p></div>
    <div class="col-md-8">
    <input type="number" name="annual_income" onkeypress="return fnAllowNumeric(event)" id="annual_income" class="form-control form-group"/></div>
    
    <div class="col-md-3"><p>Education*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="education" id="education">
     <option disabled selected>Select</option>
      @foreach($data['education'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </select>
    </div>
    
    <div class="col-md-3"><p>Family Details*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="family_detail" id="family_detail" >
      <option disabled selected>Select</option>
      @foreach($data['family_details'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow  go_to_next"  href="#main3" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    
    </div>
    <div id="main3" class="tab-pane fade">
      <h3 class="mrg-top">Business Details</h3>
  <hr>
    <div class="col-md-3"><p>Employees Count*</p></div>
    <div class="col-md-8">
    <input type="text" class="form-control form-group" name="employee_count" id="employee_count" onkeypress="return fnAllowNumeric(event)" />
    </div>
    
    <div class="col-md-3"><p>Registration Details*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="registration_detail" id="registration_detail">
       <option disabled selected>Select</option>
      @foreach($data['registration_details'] as $key=>$value)
      
      <option value="{{$value}}" ><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    <div id="partners_div" style="display: none;">
    <div class="col-md-3"><p>Number of Partners*</p></div>
    <div class="col-md-8 sec"  >
     <select class="drop-arr" name="partners_count" id="partners_count">
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
     <select class="drop-arr" name="directors_count" id="directors_count">
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
     <select class="drop-arr" name="business_run_by" id="business_run_by">
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
    <textarea class="form-control form-control mrg-btm" colspan="2" id="company_address" name="company_address"></textarea></div>
    
    <div class="col-md-3"><p>Business Type*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" id="business_type" name="business_type">
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
      <select class="drop-arr" id="online_sale_channel" name="online_sale_channel">
      <option disabled selected>Select</option>
      @foreach($data['online_sales_channels'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>


    <div class="col-md-3"><p>Turnover*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="turnover" id="turnover">
       <option disabled selected>Select</option>
      @foreach($data['turnover'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Business Premises*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="business_premises" id="business_premises">
       <option disabled selected>Select</option>
      @foreach($data['ownership'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Which products do you sell?*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="selling_product" id="selling_product">
       <option disabled selected>Select</option>
      @foreach($data['product_sell'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Loan Purpose*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="loan_purpose" id="loan_purpose">
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
    <a class="btn btn-primary btn-outline with-arrow go_to_next"  href="#main5" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    
    <div id="main5" class="tab-pane fade">
      <p>Providing Online Credentials of Platforms/Marketplaces/Software that you make use of in your business will help us understand your business better and make the most appropriate 
    recommendations for Loans. This can also increase your chances of securing Loans at a lower interest rate. As a Business User, you gain free and complete access to all the insights that Tribe draws using your online credentials.</p>
    <ul>
   
     @foreach($data['aggregated_ids'] as $key=>$value)
      <li class="pad"><input type="radio" name="online_ids" value="{{$value}}" onclick="showDiv('online_ids_{{$value}}')" /> {{$key}}</li>
        <div class="col-sm-12" id="online_ids_{{$value}}" style="display: none;" class="extra">

          <?php $length=sizeof($data['aggregated_ids_credentials']->$value);
           for($i=0;$i<$length;$i++){ ?>
           <label class="col-sm-2"> {{$data['aggregated_ids_credentials']->$value[$i]}}:</label>
           <input type="text" class="form-control form-group col-sm-10" name="online_ids_array[{{$value}}][<?php echo $data['aggregated_ids_credentials']->$value[$i]; ?>]" required />
           
          <?php }?>
           </div>
     @endforeach
      </ul>
    
    <a class="btn btn-primary btn-outline with-arrow go_to_next"  href="#main6" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow ">Back<i class="icon-arrow-right"></i></a>
    </div>
    <div id="main6" class="tab-pane fade">
      
    <div class="col-md-12">
    <h3 class="mrg-top">Refrence</h3><hr>
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
    <input type="text" name="ref_mobile" id="ref_mobile" class="form-control form-group" maxlength="10" onkeypress="return fnAllowNumeric(event)"/></div>
    
    <div class="col-md-3">Email</div>
    <div class="col-md-8">
    <input type="email" name="ref_email" id="ref_email" class="form-control form-group"/></div>
    <p ng-show="tribe_loan_form.ref_email.$error.email" class="error">Invalid Email address</p>
   <div class="col-md-3">
    <a class="btn btn-primary btn-outline with-arrow go_to_next"  href="#main4" data-toggle="tab">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
     <div class="col-md-8"> <button class="btn btn-primary btn-outline with-arrow pull-left" id="save_form_button">Save Form<i class="icon-arrow-right"></i></button></div>
   
    </div>
    </form>
    
    <div id="main4" class="tab-pane fade">
      <form id="kyc_form" name="kyc_form" enctype="multipart/form-data">
    <h3 class="mrg-top">KYC Identity Proof</h3>
  <hr>
    <div class="col-md-3">Pan</div>
    <div class="col-md-8">
    <input type="file" name="docpan" id="docpan"  class="form-control form-group no-border"/>
    </div>
    
    <div class="col-md-3">Aadhaar</div>
    <div class="col-md-8">
    <input type="file" name="doc_aadhar"  id="doc_aadhar" class="form-control form-group no-border"/></div>
    
    <div class="col-md-3">Driving License </div>
    <div class="col-md-8">
     <input type="file" name="doc_dl" id="doc_dl" class="form-control form-group no-border"/>
    </div>
    
    <div class="col-md-3">Passport</div>
    <div class="col-md-8">
     <input type="file" name="doc_passport" id="doc_passport" class="form-control form-group no-border"/>
    </div>
    
    <div class="col-md-3">Voter ID</div>
    <div class="col-md-8">
     <input type="file" id="doc_voter" name="doc_voter" id="doc_voter" class="form-control form-group no-border"/>
    </div>
    <div class="col-md-12">
    <h3 class="mrg-top">Address Proof</h3><hr>
  </div>
  <div class="col-md-3">Electricity Bill</div>
    <div class="col-md-8">
     <input type="file" name="doc_electricity_bill" id="doc_electricity_bill" class="form-control form-group no-border"/>
    </div>
    
    <div class="col-md-3">Leave and License Agreement</div>
    <div class="col-md-8">
    <input type="file" id="doc_leave_license" name="doc_leave_license" id="doc_leave_license" class="form-control form-group no-border"/></div>
    
    <div class="col-md-12">
    <h3 class="mrg-top">Business KYC</h3><hr>
  </div>
    <div class="col-md-3">Registration Certificate</div>
    <div class="col-md-8">
    <input type="file" id="doc_reg_certification" name="doc_reg_certification" class="form-control form-group no-border"/></div>
    
    <div class="col-md-3">Tax Registration</div>
    <div class="col-md-8">
    <input type="file" id="doc_tax_registration" name="doc_tax_registration" class="form-control form-group no-border"/></div>
    
    <div class="col-md-12">
    <h3 class="mrg-top">Business Documents</h3><hr>
  </div>
    <div class="col-md-3">Company IT Returns</div>
    <div class="col-md-8">
    <input type="file" name="doc_comapany_it_returns" id="doc_comapny_it_returns" class="form-control form-group no-border"/></div>
    
    <div class="col-md-3">Company PAN</div>
    <div class="col-md-8">
    <input type="file" id="doc_company_pan" name="doc_company_pan" class="form-control form-group no-border"/></div>
    
     <div class="col-md-3">ITR/VAT Returns/ST Returns</div>
    <div class="col-md-8">
    <input type="file" id="doc_vat_return" name="doc_vat_return" class="form-control form-group no-border"/></div>
    
    <div class="col-md-12">
    <h3 class="mrg-top">Other Documents</h3><hr>
  </div>
    <div class="col-md-3">Personal IT Returns</div>
    <div class="col-md-8">
    <input type="file" id="doc_it_returns" name="doc_it_returns" class="form-control form-group no-border"/></div>
    
    <div class="col-md-3">Other Documents</div>
    <div class="col-md-8">
    <input type="file" name="doc_other" id="doc_other" class="form-control form-group no-border"/>
     <a class="btn btn-primary btn-outline with-arrow go_to_next ">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    </form>
    </div>

    <div id="main7" class="tab-pane fade">
      <h3 class="mrg-top">Refrence</h3><hr>

    <div class="col-md-3">UPLOAD COMPANY BANK STATEMENTS</div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="bank_statement" id="bank_statement">
       <option disabled selected>Select</option>
      @foreach($data['institution'] as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3">Start Date</div>
    <div class="col-md-8"
    ><input type="date" name="start_date" id="start_date" class="form-control form-group" /></div>
    
    <div class="col-md-3">End Date</div>
    <div class="col-md-8">
    <input type="date" id="end_date" name="end_date" class="form-control form-group"/></div>
    
    <div class="col-md-3">Upload Document</div>
    <div class="col-md-8">
    <input type="file" multiple id="upload_doc" name="upload_doc" class="form-control form-group no-border"/></div>
    <div class="col-md-3"></div>
    <div class="col-md-8 mrg-top"><a class="btn btn-primary btn-outline with-arrow">Submit Statment<i class="icon-arrow-right"></i></a></div>
    </div>
    
  </div>

  </div>

    </div>
  </div>
  <br>
  @include('layout.footer')
  @include('layout.script')
  <script type="text/javascript">
  var previousPartner;
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
    // $('form').submit(function() {
    //   var formData = new FormData(this);
    //  // console.log(formData);
    //  // return false;
    //   $.ajax({  
    //            type: "POST",  
    //            url: "{{URL::to('save-tribe-form')}}",
    //            data : formData,
    //            mimeType: "multipart/form-data",
    //            cache: false,
    //             contentType: false,
    //             processData: false,
    //            success: function(msg){
    //               if(msg=='true'){
    //                 console.log(msg);
    //               }
    //             console.log(msg);
    //             }  
    //     }); 
    // });
    $("#save_form_button").click(function(){
       event.preventDefault(); 
       if(! $('#tribe_loan_form').valid()){
          return false;
       }
    $.ajax({  
             type: "POST",  
             url: "{{URL::to('save-tribe-form')}}",
             data : $('#tribe_loan_form').serialize(),
             success: function(msg){
               console.log(msg);  
                  } 
          });
    });
  </script>
  <script type="text/javascript">
  $('#registration_detail').change(function() {
    //console.log($(this).val());
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
  </script>
 <script type="text/javascript">
  $('.go_to_next').click(function(){
    //console.log($(this).closest("form").attr('id'));
    if($('#'+$(this).closest("form").attr('id')).valid()){
      console.log("valid_tab");
    }else{
      //return false;
    }
  });
  </script>
