  <?php// print "<pre>";print_r($data->loan_details[0]->mapping);exit(); ?>
  @include('layout.header')

  <div id="fh5co-hero">
  <form id="tribe_loan_form">
  	<div class="container">
  	<h2 class="align-center loan-head">Tribe</h2>
  	<div class="col-md-12 pad1 white-bg box-shadow">

   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#main">BASIC DETAILS</b></a></li>
    <li><a data-toggle="tab" href="#main1"><b>LOAN DETAILS</b></a></li>
    <li><a data-toggle="tab" href="#main2"><b>PERSONAL DETAILS</b></a></li>
    <li><a data-toggle="tab" href="#main3"><b>BUSNESS DETAILS</b></a></li>
    <li><a data-toggle="tab" href="#main4"><b>DOCUMENTS</b></a></li>
    <li><a data-toggle="tab" href="#main5"><b>ONLINE IDS</b></a></li>
    <li><a data-toggle="tab" href="#main6"><b>REFRENCES</b></a></li>
    <li><a data-toggle="tab" href="#main7"><b>BANK STATMENTS</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="main" class="tab-pane fade in active">
      
  	<div class="col-md-12">
    <h3 class="mrg-top">Partner Details</h3>
  <hr>
    <div class="col-md-3"><p>Are you a Tribe Partner?</p></div>
    <div class="col-md-4">
    <p><input type="radio" name="tribe_partner" onclick="showHidden('tribe_partner_div',1)" /> Yes&nbsp;&nbsp;
     <input type="radio" name="tribe_partner" onclick="showHidden('tribe_partner_div',0)" /> No</p></div>
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
    <input type="text" name="owner_email" id="owner_email" class="form-control form-group"/>
     <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
    </div>
    

  </div>

    </div>
    <div id="main1" class="tab-pane fade">
      
  	<h3 class="mrg-top">Loan Details</h3>
  <hr>
    <div class="col-md-3"><p>Loan Amount (Rs.)</p></div>
    <div class="col-md-8"><p>
    <input type="text" name="loan_amount" id="loan_amount" class="form-control form-group" required /></p></div>
    
    <div class="col-md-3"><p>Loan Tenure (Months)</p></div>
    <div class="col-md-8"><p>
    <input type="text" name="loan_tenure" id="loan_tenure" class="form-control form-group" required /></p></div>
    
    <div class="col-md-3"><p>Repayment Frequency</p></div>
    <div class="col-md-8 sec">
    <select class="drop-arr" name="repayment_frequency" id="repayment_frequency" required>
    <option disabled selected>Select</option>
    @foreach($data->loan_details[0]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
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
   <div class="col-md-8"><input type="text" pattern="[789][0-9]{9}" required="" maxlength="10" name="mobile" id="mobile" class="form-control form-group" required /></div>
    
    <div class="col-md-3"><p>Email</p></div>
    <div class="col-md-8"><input type="email" name="email" id="email" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Address*</p></div>
    <div class="col-md-8"><textarea class="form-control form-control mrg-btm" colspan="2" name="address" id="address"></textarea></div>
    
    <div class="col-md-3"><p>Aadhaar Number*</p></div>
    <div class="col-md-8"><input type="text" name="aadhar_no" id="aadhar_no" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Owner Email*</p></div>
    <div class="col-md-8"><input type="text" name="owner_email_personal" id="owner_email_personal" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Date of Birth*</p></div>
    <div class="col-md-8"><input type="date" name="dob" id="dob" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Annual Income (INR)*</p></div>
    <div class="col-md-8"><input type="number" name="annual_income" id="annual_income" class="form-control form-group"/></div>
    
    <div class="col-md-3"><p>Education*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="education" id="education">
     <option disabled selected>Select</option>
      @foreach($data->personal_details[1]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </select>
    </div>
    
    <div class="col-md-3"><p>Family Details*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="family_detail" id="family_detail" >
      <option disabled selected>Select</option>
      @foreach($data->personal_details[0]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    
    </div>
    <div id="main3" class="tab-pane fade">
      <h3 class="mrg-top">Business Details</h3>
  <hr>
    <div class="col-md-3"><p>Employees Count*</p></div>
    <div class="col-md-8">
    <input type="text" name="txt" class="form-control form-group" name="employee_count" id="employee_count"/></div>
    
    <div class="col-md-3"><p>Registration Details*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="registration_detail" id="registration_detail">
       <option disabled selected>Select</option>
      @foreach($data->business_details[5]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    <div class="col-md-3"><p>Number of Partners*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="partners_count" id="partners_count">
       <option disabled selected>Select</option>
      @foreach($data->business_details[8]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Company Pan Number*</p></div>
    <div class="col-md-8">
    <input type="text" name="company_pan_card" id="company_pan_card" class="form-control form-group" required="" /></div>
    
    <div class="col-md-3"><p>Address*</p></div>
    <div class="col-md-8">
    <textarea class="form-control form-control mrg-btm" colspan="2" id="company_address" name="company_address"></textarea></div>
    
    <div class="col-md-3"><p>Business Type*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" id="business_type" name="business_type">
      <option disabled selected>Select</option>
      @foreach($data->business_details[6]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Do you carry out Online Sales?*</p></div>
    <div class="col-md-8"><p>
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',1);" /> Yes&nbsp;&nbsp; 
    <input type="radio" name="online_sale" onclick="showHidden('online_sale_channel_div',0);" /> No</p></div>
    
    <div class="col-md-3"><p>Do you carry out Offline Sales?*</p></div>
    <div class="col-md-8"><p>
    <input type="radio" name="offline_sale" /> Yes&nbsp;&nbsp; 
    <input type="radio" name="offline_sale" /> No</p></div>
    <div style="display: none;" id="online_sale_channel_div" >
    <div class="col-md-3 sec"><p>online_sale_channel</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" id="online_sale_channel" name="online_sale_channel">
      <option disabled selected>Select</option>
      @foreach($data->business_details[0]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    </div>


    <div class="col-md-3"><p>Turnover*</p></div>
    <div class="col-md-8 sec">
       <select class="drop-arr" name="turnover" id="turnover">
       <option disabled selected>Select</option>
      @foreach($data->business_details[2]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Business Premises*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="business_premises" id="business_premises">
       <option disabled selected>Select</option>
      @foreach($data->business_details[7]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Which products do you sell?*</p></div>
    <div class="col-md-8 sec">
      <select class="drop-arr" name="selling_product" id="selling_product">
       <option disabled selected>Select</option>
      @foreach($data->business_details[4]->mapping as $key=>$value)
      
      <option value="{{$value}}"><?php echo $key;?></option>
      @endforeach
    </select>
    </div>
    
    <div class="col-md-3"><p>Loan Purpose*</p></div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="loan_purpose" id="loan_purpose">
           <option>-Select Loan Purpose-</option>
  		 <option>inventory rotation</option>
  		 <option>product differentiation</option>
  		 <option>expansion</option>
  		 <option>launch of new product</option>
  		 <option>working capital/option>
  		 <option>others</option>
    </select>
    </div>
    
    <div class="col-md-3"><p>How did you Know About Us?*</p></div>
    <div class="col-md-8">
    <input type="text" name="reached_us_via" id="reached_us_via" class="form-control form-group" />
    <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    </div>
    <div id="main4" class="tab-pane fade">
      
  	<h3 class="mrg-top">KYC Identity Proof</h3>
  <hr>
    <div class="col-md-3">Pan</div>
    <div class="col-md-8"><input type="file" id="doc_pan" name="doc_pan" class="form-control form-group no-border"/></div>
    
    <div class="col-md-3">Aadhaar</div>
    <div class="col-md-8"><input type="file" name="doc_aadhar" id="doc_aadhar" class="form-control form-group no-border"/></div>
    
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
    <input type="file" name="doc_comapny_it_returns" id="doc_comapny_it_returns" class="form-control form-group no-border"/></div>
    
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
     <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
    
    </div>
    <div id="main5" class="tab-pane fade">
      <p>Providing Online Credentials of Platforms/Marketplaces/Software that you make use of in your business will help us understand your business better and make the most appropriate 
  	recommendations for Loans. This can also increase your chances of securing Loans at a lower interest rate. As a Business User, you gain free and complete access to all the insights that Tribe draws using your online credentials.</p>
  	<ul>
     @foreach($data->aggregated_ids_details->mapping as $key=>$value)
      <li class="pad"><input type="radio" name="online_ids" value="{{$value}}" onclick="showDiv('online_ids_{{$value}}')" /> {{$key}}</li>
        <div class="col-sm-12" id="online_ids_{{$value}}" style="display: none;" class="extra">
          @foreach($data->aggregated_ids_credential_details->mapping->$value as $key2=>$value2)
           <label class="col-sm-2"> {{$value2}}:</label>
           <input type="text" class="form-control form-group col-sm-10" name="{{$value2}}" required />
          @endforeach
           </div>
     @endforeach
  	  </ul>
  	
  	<a class="btn btn-primary btn-outline with-arrow ">Next<i class="icon-arrow-right"></i></a>
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
    <input type="text" name="ref_mobile" id="ref_mobile" class="form-control form-group"/></div>
    
    <div class="col-md-3">Email</div>
    <div class="col-md-8">
    <input type="text" name="ref_email" id="ref_email" class="form-control form-group"/></div>
    
   <div class="col-md-3">
    <a class="btn btn-primary btn-outline with-arrow  ">Next<i class="icon-arrow-right"></i></a>
    <a class="btn btn-primary btn-outline with-arrow  ">Back<i class="icon-arrow-right"></i></a>
    </div>
     <div class="col-md-8"> <a class="btn btn-primary btn-outline with-arrow pull-left" id="save_form_button">Save Form<i class="icon-arrow-right"></i></a></div>
   
    </div>
    </form>
    <div id="main7" class="tab-pane fade">
      <h3 class="mrg-top">Refrance</h3><hr>

    <div class="col-md-3">UPLOAD COMPANY BANK STATEMENTS</div>
    <div class="col-md-8 sec">
     <select class="drop-arr" name="bank_statement" id="bank_statement">
       <option disabled selected>Select</option>
      @foreach($data->institution_details->mapping as $key=>$value)
      
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

    $('#save_form_button').click(function() {
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('save-tribe-form')}}",
               data : $('#'+form).serialize(),
               success: function(msg){
                  if(msg=='true'){
                    console.log(msg);
                  }
                console.log(msg);
                }  
        }); 
    });
  </script>
