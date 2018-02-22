@include('layout.header')
<div class="iifl-image">
    <img src="images/edelweiss.jpg">
    </div>
    
    <div class=" ">
        <!-- content start -->



<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                
								
								<h1 class=""><center>Unsecured Business Loan</center></h1>
								</br>
								
                                <div class="row">    
                       
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
                        <h4 >Business Information</h4>
                        <form name='edelweiss_process_form' id='edelweiss_process_form' action={{URL::to('loan-submit')}} method="POST">
                        {{ csrf_field() }} 
                            <!-- Text input-->

                          <input type="hidden" id="product" name="product_name" value="13">
						    <input type="hidden" id="Bank_Id" name="Bank_Id" value="15">
						   
						   <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
						          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
						          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
						          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 



                           

                                 <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="proprietor" class="form-control input-md" name="proprietor">
                                                            <option selected disabled="">Company Type</option>
                                                            <option value="Sole Proprietor">Sole Proprietor</option>
                                                            <option value="Partnership">Partnership</option>
                                                            <option value="Company">Company</option>

 
                                                    </select>
                            </div>
                            </div>




                            <!-- Text input-->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="emp_detail">Business Type</label>
                                <select id="emp_detail" class="form-control input-md" name="emp_detail" >
                                                            <option selected disabled="">Business Type</option>
                                                            <option value="2">Self Employed Non-Professional (SENP)</option>
                                                            <option value="2">Self Employed Professional (SEP)</option>

 
                                                    </select>
                            </div>
                            </div>


                            <!-- Text input-->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="loan_amount">Loan Amount</label>
                                <input id="loan_amount" name="loan_amount" minlength="6" maxlength="9" type="text" placeholder="Loan Amount" onkeypress="return isNumberKey(event)" class="form-control input-md" required="required">
                            </div>
                            </div>


                               



                                <hr style="color:transparent; width:100%" />

                            <h4 >Business Details</h4>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="pan_no">Pan No.</label>
                                <input id="pan_no" name="pan_no" oninput="pan_card('pan_no')" type="text" placeholder="Pan No." class="form-control input-md" required="required">
                               <span id="pan_number"  style="display:none;color: red;font-size:12px;">Enter Valid Pan No.</span>
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="applicant_dob">Date of Birth</label>
                                <input id="applicant_dob" name="applicant_dob" type="text" placeholder="Date of Birth" class="form-control input-md lastReporteddate1" required="required">
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="loan_tenure" class="form-control input-md" name="loan_tenure">
                                                    		<option selected disabled="">Loan Tenure</option>
															<option value="1">1 Year</option>
															<option value="2">2 Year</option>
															<option value="3">3 Year</option>
															<option value="4">4 Year</option>
															<option value="5">5 Year</option>
 
													</select>
                             </div>
                             </div>



                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="exchange" class="form-control input-md" name="exchange">
                                                            <option selected disabled="">Export / Import</option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
 
                                                    </select>

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select class="form-control input-md">
                                                            <option selected disabled="">Export / Import in %</option>
                                                            <option value="10">10 %</option>
                                                            <option value="20">20 %</option>
                                                            <option value="30">30 %</option>
                                                            <option value="40">40 %</option>
                                                            <option value="50">50 %</option>
                                                            <option value="60">60 %</option>
                                                            <option value="70">70 %</option>
                                                            <option value="80">80 %</option>
                                                            <option value="90">90 %</option>
                                                            <option value="100">100 %</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="repayment_track" class="form-control input-md" name="repayment_track" >
                                                            <option selected disabled="">Good Repayment Track Record in existing UBL/CC/OD?</option>
                                                            <option value="Y">Yes</option>
                                                            <option value="N">No</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="nature_of_business" class="form-control input-md" name="nature_of_business">
                                                            <option selected disabled="">Nature of Business</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Trading">Trading</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Retailer">Retailer</option>
                                                            <option value="Other">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="industry_name" class="form-control input-md" name="industry_name" >
                                                            <option selected disabled="">Industry</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                            <option value="Auto Components">Auto Components</option>
                                                            <option value="Automobiles">Automobiles</option>
                                                            <option value="Aviation">Aviation</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotechnology">Biotechnology </option>
                                                            <option value="Cement">Cement</option>
                                                            <option value="Consumer Markets">Consumer Markets</option>
                                                            <option value="Education And Training">Education And Training</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Financial Services">Financial Services</option>
                                                            <option value="Food Industry">Food Industry</option>
                                                            <option value="Gems And Jewellery">Gems And Jewellery</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Infrastructure">Infrastructure</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="IT &ITeS">IT &ITeS</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Marketing And Strategy">Marketing And Strategy</option>
                                                            <option value="Media And Entertainment">Media And Entertainment</option>
                                                            <option value="Oil And Gas">Oil And Gas</option>
                                                            <option value="Pharmaceuticals">Pharmaceuticals</option>
                                                            <option value="Ports">Ports</option>
                                                            <option value="Power">Power</option>
                                                            <option value="Railways">Railways</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research And Development">Research And Development</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Roads">Roads</option>
                                                            <option value="Rural Market">Rural Market</option>
                                                            <option value="Science And Technology">Science And Technology</option>
                                                            <option value="Semiconductor">Semiconductor</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Steel">Steel</option>
                                                            <option value="Telecommunications">Telecommunications</option>
                                                            <option value="Textiles">Textiles</option>
                                                            <option value="Tourism And Hospitality">Tourism And Hospitality</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>



                             

                               <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="date">Company Date of Incorporation</label>
                                <input id="date" name="date" type="text" placeholder="Company Date of Incorporation" class="form-control input-md lastReporteddate1" required="required">

                             </div>
                             </div>



                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="residence_type" class="form-control input-md" name="residence_type" >
                                                            <option selected disabled="">Office Type</option>
                                                            <option value="Owned">Owned</option>
                                                            <option value="Rented">Rented</option>
                                                            <option value="Parental">Parental</option>
                                                            <option value="Other">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="office_type" class="form-control input-md" name="office_type">
                                                            <option selected disabled="">Residence Type</option>
                                                            <option value="Owned">Owned</option>
                                                            <option value="Rented">Rented</option>
                                                            <option value="Parental">Parental</option>
                                                            <option value="Other">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>

                             <hr style="color:transparent; width:100%" />

                            <h4 >Company Financials</h4>


                             

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                             	<label class="control-label sr-only" for="company_name">Company Name</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="company_name" name="company_name" type="text" placeholder="Company Name" class="form-control input-md" required="required">

                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="income_tax_paid">Income Tax Paid - Firm</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="income_tax_paid" name="income_tax_paid" type="text" placeholder="Income Tax Paid - Firm" onkeypress="isNumberKey(event)" class="form-control input-md" required="required">

                             </div>
                             </div>



                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="turnover">Turnover / Topline</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="turnover" name="turnover" type="text" placeholder="Turnover / Topline" class="form-control input-md" onkeypress="isNumberKey(event)" required="required">

                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="profit_after_tax">Profit After Tax</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="profit_after_tax" name="profit_after_tax" type="text" placeholder="Profit After Tax" class="form-control input-md" onkeypress="isNumberKey(event)" required="required">

                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="depreciation">Depreciation</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="depreciation" name="depreciation" onkeypress="isNumberKey(event)" type="text" placeholder="Depreciation" class="form-control input-md" required="required">

                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="partner_remuneration">Partner Remuneration</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="partner_remuneration" name="partner_remuneration" type="text" placeholder="Partner Remuneration" class="form-control input-md" onkeypress="isNumberKey(event)" required="required">

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="interest_paid">Interest Paid On Loan</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input step="0.01" min="0" name="interest_paid" id="interest_paid" onkeypress="return isNumberKey(event)" required type="text" placeholder="Interest Paid On Loan" class="form-control input-md" required="required">

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="existing_emi">Existing All EMI</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input name="existing_emi" id="existing_emi" placeholder="Existing All EMI" onkeypress="return isNumberKey(event)" class="form-control input-md" required="required">

                             </div>
                             </div>



                             <hr style="color:transparent; width:100%" />

                            <h4 >Bankwise EMI Details - List of Loan EMI</h4>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="bank_name">Bank</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="bank_name" name="bank_name" type="text" placeholder="Bank" class="form-control input-md" onkeypress="return AllowAlphabet(event)" required="required">

                             </div>
                             </div>


                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="emi">EMI</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="emi" name="emi" onkeypress="isNumberKey(event)" type="text" placeholder="EMI" class="form-control input-md" required="required">

                             </div>
                             </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="product">Select Loan</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <select id="product" class="form-control input-md" name="product">
                                                            <option selected disabled="">Select Product</option>
                                                            <option value="Home Loan">Home Loan</option>
														     <option value="Property Loan">Property Loan</option>
														     <option value="Unsecured Business Loan">Unsecured Business Loan</option>
														     <option value="Car Loan">Car Loan</option>
														     <option value="Term Loan">Term Loan</option>
														     <option value="ODD/CC">OD/CC</option>
														     <option value="Others">Others</option>
 
                                                    </select>

                             </div>
                             </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <label class="control-label sr-only" for="no_of_emi_paid">No. of EMI Paid</label>
                                <!-- <input id="date" type="date" placeholder="Date of Birth"> -->
                                <input id="no_of_emi_paid" name="no_of_emi_paid" minlength="2" maxlength="2" onkeypress="isNumberKey(event)" type="text" placeholder="No. of EMI Paid" class="form-control input-md" required="required">

                             </div>
                             </div>

                             

<!-- 
                                    <a data-toggle="collapse" data-target="#demo1" class="btn btn-default btn-sm">Know More</a> 
 -->



                                    
                                     <div class="valid_ID"></div>
                                                <a class="btn btn-default btn-sm product_ID" id="product_ID">Get Best Quotes</a>
                                                
                                    

                            

                        </form>

                        
                        
                    </div>


                </div>
               
                










                 <div class="col-md-4" >
     <div class="border brd-for" id="mi_id">

            
           <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, No quotes found for your given requirements.</span></p> 
           
            <div class="inp-hig">
            <label class="form-label-new">Loan Amount</label>
              <input type="text" class="form-control" id="loanamount" name="name" value="" placeholder="" required class="clr-ddd" readonly />
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Best ROI</label>
              <input type="text" class="form-control" id="rate" name="name" value="" placeholder="" required class="clr-ddd" readonly />
            </div>

            <div class="inp-hig">
            <label class="form-label-new">Tenure</label>
                 <input type="text" class="form-control" id="term" name="name" value="" placeholder="" required class="clr-ddd" readonly>
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Processing Fee</label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="" required class="clr-ddd" readonly />
            </div>

       <div class="col-md-6 col-xs-12">
                                    <br>
         <a id="apply_new" type="button" class="btn btn-default btn-sm disblk" title="Experience New Digital Era In Loans">Apply Digitally</a></div>
         <div class="col-md-6 col-xs-12">
                                    <br>
         <button id="eligibility" class="btn btn-default btn-sm disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" disabled>Check Bankwise Eligibility</button></div>
         <div class="col-md-6 col-xs-12">
                                    <br>
         <button type="button" class="btn btn-default btn-sm call_rm"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
        
     
    </div> 
  </div>





                                    
                                </div>
                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        
    </div>

     <div id ="test123"></div>

<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="wrapper-content bg-white pinside40">
                     <p>Funds require to manage day to day operations of your business???......funds require to expand your business?? …...fund requirement is a most important factor for any business to run smoothly.....here is a Rupeeboss to understand your needs deeply,and make funds available for you to your doorstep.</p>

                     <p>Business loan fulfills any kind of business needs. It is a type of short term unsecured loan for 3 to 5 year of repayment period. Business loan can be easily sanction in minimum 7 working days.</p>


                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">




                                    <div class="col-md-12 col-sm-12 col-xs-12">



                                            <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa sign fa-minus-circle" style="color: #ed1c24;"></i>Documents Required</a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">

                                    <ul class="listnone bullet bullet-check-circle-default">
                                                <li>Proof of Identity / Address Proof.(Business as well as All Directors)</li>
                                                <li>Memorandum of Association & Article of Association, Certificate of Commencement of Business</li>
                                                <li>Bank Statements (Business as well as Director)</li>
                                                <li>Require Income Tax Return File (ITR) along with Computation of Income, B/S&P/L accounts for last 3 year. It should be Audited and Certified by CA</li>
                                                <li>Proof of Continuation : Trade License / Establishment / Sales Tax Certificate</li>
                                            </ul>

                                        </div>
                                </div>
                            </div>
                            
                           
                           
                        </div>
                    </div>



                                             






                                       
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


function callme(test){
	//alert($(this).closest("radio").attr('value'));
	$('#industry_name').val(test);
	
//		alert(test);
}


</script>



 

<script type="text/javascript">
$(".product_ID").click(function(e){
   e.preventDefault();
 

    if(!$('#edelweiss_process_form').valid()){

  
            return false;
           
          }else{
          	   var company_name=$('#company_name').val();
               var bank_name=$('#bank_name').val();
              
      if(company_name!='' && bank_name!=''){
         $('#login_process').attr( 'id', 'login_process');
         $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#edelweiss_process_form").serialize(),
        
             success: function(msg){
            //  console.log(msg);
                    $(".iframeloading").hide();
                           if(msg.success ==true){

                            var quote=msg.quote;

                        var loan_eligible = msg.loan_eligible;


                             if (loan_eligible>0) {
                             $("#test123").empty().append(msg.html);  
                             $('#loanamount').val(loan_eligible);
                            var roi = msg.roi;
                             $('#rate').val(roi);
                          var LoanTenure = msg.LoanTenure;
                             $('#term').val(LoanTenure);
                    var processingfee = msg.processingfee;
                    $('#processfee').val(processingfee);
                    var Bank_id = msg.Bank_Id;
                    $('#bank').val(Bank_id);
                     // var url = "apply-lead-online?appid=0&qoutid="+quote+"&BankId="+Bank_id+"&product=13&processing_fee="+processingfee+"&loanamout="+loan_eligible+"&roi_type="+roi+"";
                     var url="thank-you";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();
                      $('#apply_new').show();
                      $('#mi_id').show();
                       $('#eligibility').prop('disabled',false);
                              
                       // $(window).scrollTop($('#lowest').offset().top-50);

                   }else{
                   	$('#eligibility').prop('disabled', true);
                                getUrl='';
                     $('#err').show();
                     $('#loanamount').val("");
                     $('#rate').val("");
                     $('#term').val("");
                     $('#processfee').val("");
                     $('#bank').val("");
                     $('#apply_new').hide();
                      $("#test123").empty();
                       // $('#mi_id').hide();
                      
                    }
                     // $(window).scrollTop($('#test123').offset().top-20);
                  
                  }

                             
                        
                    }  
                  });

          }
          else{
 $('#login_process').removeAttr('id');
 $('.valid_ID').empty().append('<div style=" color: red" >Please Fill All Inputs</div>');
  
}
}


});
</script>



<script type="text/javascript">
$("#eligibility").click(function() {
  $(window).scrollTop($('#test123').offset().top-20);
});
</script>





<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()  ;
    d.setFullYear(year);

    $(".lastReporteddate1").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

 

<script type="text/javascript">

	function alertme(test){
	$('#nature_of_business').val(test);}


function alert(test){
	$('#residence_type').val(test);
}


	function call(test){
	$('#office_type').val(test);
}


</script>
 

<!-- <script type="text/javascript">
	$(document).ready(function(){
    
     $(".add_new_box").click(function(){
    
     $('.add_new_content:last').clone()
                          .find("input:text").val("").end()
                          .appendTo('.add_new_content:last');
    
    });
    
    });
</script>
 -->



<!-- <script>
$(document).ready(function(){
     
    $(".remove_new_box").click(function() {
    if($(".add_new_content").length!=1)
    $(".add_new_content:last").remove();
    });
});

</script>
 -->