<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
    <aside id="fh5co-hero">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="section-faq" id="section-faq">
                        <div class="">
                            <h1 class=""><center>Unsecured Business Loan</center></h1>
                            </br>
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
                                    <div class="how-it-block1 bg-boxshadow" style=" min-height:auto; float:left;">
                                        <h4 >Business Information</h4>
                                        <form name='business_loan_process_form' id='business_loan_process_form' action=<?php echo e(URL::to('loan-submit')); ?> method="POST">
                                            <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                            <input type="hidden" id="product" name="product_name" value="13">
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
                                            

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                               <select id="emp_detail" class="form-control input-md" name="emp_detail" >
                                                <option selected disabled="">Business Type</option>
                                                <option value="2" >Self Employed Non-Professional (SENP)</option>
                                                <option value="2">Self Employed Professional (SEP)</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" minlength="6" maxlength="9" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  required>
                                            </div>
                                            </div>

                                            <hr style="color:transparent; width:100%" />
                                            <h4 >Business Details</h4>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                            <input class="form-input-new form-control" type="text" id="pan_no" name="pan_no" oninput="pan_card('pan_no')"  placeholder="Pan No" required>
                                                <span id="pan_number"  style="display:none;color: red;font-size:12px;">Enter Valid Pan No.</span>
                                            </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-input-new form-control lastReporteddate1" name="applicant_dob" id="applicant_dob" placeholder="Date Of Birth"   required>
                                            </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <select id="loan_tenure" class="form-control input-md select-sty" name="loan_tenure" id="loan_tenure" >
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
                                                    <option value="Auto Trading">Trading</option>
                                                    <option value="Services">Services</option>
                                                    <option value="Retailer">Retailer</option>
                                                    <option value="Others">Other</option>
                                                 </select>
                                                 <!-- <input type="hidden" name="nature_of_business" id="nature_of_business"> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <select id="industry_name" class="form-control input-md" name="industry_name">
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
                                                    <input type="text" id="date" name="date" class="form-control input-md lastReporteddate1" placeholder="Date Of Incorporation" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">                              
                                                <select id="office_type" class="form-control input-md" name="office_type">
                                                    <option selected disabled="">Office Type</option>
                                                    <option value="Owned">Owned</option>
                                                    <option value="Rented">Rented</option>
                                                    <option value="Parental">Parental</option>
                                                    <option value="Other">Other</option> 
                                                </select>   
                                                <!-- <input type="hidden" name="office_type" id="office_type"> -->                                                 
                                            </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="form-group">                                         
                                                    <select id="residence_type" class="form-control input-md" name="residence_type">
                                                            <option selected disabled="">Residence Type</option>
                                                            <option value="Owned">Owned</option>
                                                            <option value="Rented">Rented</option>
                                                            <option value="Parental">Parental</option>
                                                            <option value="Other">Other</option>
                                                        <!-- <input type="hidden" name="residence_type" id="residence_type"> --> 
                                                    </select>                                                 
                                            </div>
                                            </div>

                                        <hr style="color:transparent; width:100%" />
                                        <h4 >Company Financials</h4>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control"  name="company_name" id="company_name"  placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required  >
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control"  name="income_tax_paid" id="income_tax_paid" onkeypress="return isNumberKey(event)" required="" placeholder="Income Tax Paid - Firm">
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="turnover" id="turnover" placeholder="Turnover / Topline" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="profit_after_tax" id="profit_after_tax" placeholder="Profit After Tax"  onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="depreciation" id="depreciation" placeholder="Depreciation" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="partner_remuneration" id="partner_remuneration" placeholder="Partner Remuneration" onkeypress="return isNumberKey(event)"  required>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="name" class="form-input-new form-control" placeholder="Interest Paid On Loan" step="0.01" min="0" name="interest_paid" id="interest_paid" onkeypress="return isNumberKey(event)" required>
                                        </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-input-new form-control" name="existing_emi" id="existing_emi" placeholder="Existing All EMI" onkeypress="return isNumberKey(event)"  required>
                                        </div>
                                        </div>

                            <hr style="color:transparent; width:100%" />
                            <h4 >Bankwise EMI Details - List of Loan EMI</h4>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="bank_name[]" id="bank_name" placeholder="Bank" onkeypress="return AllowAlphabet(event)" value=""   required="">
                             </div>
                             </div>


                             <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="emi[]" id="emi" placeholder="EMI"  onkeypress="return isNumberKey(event)" value="" required>
                             </div>
                             </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select class="form-input-new form-control" name="loan">
                                    <option>Select Loan</option>
                                    <option>Home Loan</option>
                                    <option>Property Loan</option>
                                    <option>Unsecured Business Loan</option>
                                    <option>Car Loan</option>
                                    <option>Term Loan</option>
                                    <option>OD/CC</option>
                                    <option>Others</option>
                                </select>
                             </div>
                             </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="no_of_emi_paid[]" id="no_of_emi_paid" placeholder="No Of EMI Paid"  onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" required value="">
                             </div>
                             </div>

                               

                               <div class="valid_ID"></div>

                             <a class="btn btn-default btn-sm product_ID">Get Best Quotes</a>                     


                                        
                                    </div>
                                </div>



                <!-- Apply digitally right panel -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
      <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
        <div class="border" id="mi_ID">

          <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, No quotes found for your given requirements.</span></p>

           <div class="col-md-12 col-xs-12">
            <div class="form-group">
            <label class="form-label-new">Loan Amount</label>
              <input type="text" class="form-control" id="loanamount" name="name" value="" placeholder="Loan Amount" readonly />
            </div>
            </div>

            <div class="col-md-12 col-xs-12">
            <div class="form-group">
                <label class="form-label-new">Best ROI</label>
                <input type="text" class="form-control" id="rate" name="name" value="" placeholder="Best ROI" readonly />
            </div>
            </div>

            <div class="col-md-12 col-xs-12">
            <div class="form-group">
            <label class="form-label-new">Tenure</label>
                 <input type="text" class="form-control" id="term" name="name" value="" placeholder="Tenure"  class="clr-ddd" readonly>
            </div>
            </div>

            <div class="col-md-12 col-xs-12">
            <div class="form-group">
              <label class="form-label-new">Processing Fee </label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="Processing Fee" readonly />
            </div>
            </div>

            

          </div>


        <div class="col-md-6 col-xs-12">
            <br>
          <?php if(Session::get('is_login')): ?>
           <a type="button" class="btn btn-default btn-sm apply_new" title="Experience New Digital Era In Loans">Apply <br>Digitally</a>
           <?php else: ?>
           <a data-toggle="modal" data-target="#login_process" class="btn btn-default btn-sm disblk apply_digitally " title="Experience New Digital Era In Loans">Apply <br>Digitally</a>
           <?php endif; ?> 
         </div>


           <div class="col-md-6 col-xs-12">
            <br>

           <button type="button" class="btn btn-default btn-sm block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call<br> Manager</button>
           <div id="log_digital_text" style=" color: red"></div>
         </div>

          <div class="col-md-12 col-xs-12">
                <br>
           <button id="eligibility"  class="btn btn-default btn-sm disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" style="width: 100%;" disabled>Check Eligibility </button>      
            
          </div>


        </div>
      </div>
      </form></div></div></div></div></div></div></aside></div>
                <!-- Apply digitally right panel end -->


                           

<div  id="test123"></div>

<!-- footer content -->

<!-- end footer content -->


<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
$(".product_ID").click(function(e){ e.preventDefault();
     
    if(!$('#business_loan_process_form').valid()){
        // alert('not valid');
        return false;
    }else{
   
               var company_name=$('#company_name').val();
               var bank_name=$('#bank_name').val();
               var emi=$('#emi1').val();
               console.log(emi);

               if(company_name!='' && bank_name!=''){
               $('#login_process').attr( 'id', 'login_process');
 //$(".iframeloading").show(); 
              $.ajax({  
                type: "POST",  
                url: "<?php echo e(URL::to('loan-submit')); ?>",
                data : $("#business_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
              console.log(msg);
                   //$(".iframeloading").hide();
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
  //alert("This field is required.");

 $('.valid_ID').empty().append('<div style=" color: red" >Please Fill All Inputs</div>');
  
}
}


});
</script>

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
    
//      alert(test);
}
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
$("#eligibility").click(function() {
  $(window).scrollTop($('#test123').offset().top-20);
});
</script>

<script type="text/javascript">
    function alertme(test){
    //alert($(this).closest("radio").attr('value'));
    
    $('#nature_of_business').val(test);
    
//      alert(test);
}
</script>

<script type="text/javascript">
    function alert(test){
    //alert($(this).closest("radio").attr('value'));
    $('#residence_type').val(test);
    
//      alert(test);
}
</script>

<script type="text/javascript">
    function call(test){
    //alert($(this).closest("radio").attr('value'));
    $('#office_type').val(test);
    
//      alert(test);
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
    
     $(".add_new_box").click(function(){
    
     $('.add_new_content:last').clone()
                          .find("input:text").val("").end()
                          .appendTo('.add_new_content:last');
    
    });
    
    });
</script>

<script>
$(document).ready(function(){
    // $('#button_remove').click(function(){
    //     $('#new_div').css('display','none');
    $(".remove_new_box").click(function() {
    if($(".add_new_content").length!=1)
    $(".add_new_content:last").remove();
    });
});

    
// });
</script>