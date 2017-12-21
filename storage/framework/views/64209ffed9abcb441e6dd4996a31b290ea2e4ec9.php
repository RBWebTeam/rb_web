<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>
<div id="fh5co-hero">
    <div class="fh5co-contact animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left fh5co-heading animate-box fadeInUp animated">
                    <h1 class="loan-head">Apply For Business Loan - Capital Float</h1>
                    
                </div>
                <div class="col-md-12">
                    <div class="row text-left comp-pg rate white-bg">

                        
                            <form class="" id="capital_float_form" role="form" method="POST" >
                             <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="form-group">
                                    
                                        <h6 class="loan-head">Registration</h6>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder= "First Name*" name="ApplicantFirstName" id="ApplicantFirstName" onkeypress="return AllowAlphabet(event)" required>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" oninput="mail('Email')" id="Email" name="Email" placeholder="Email Address" required>
                                            <div id="email" style="display:none;color: red; font-size: 10px">Please Enter Valid Email Id.</div>
                                        </div>

                                         <div class="col-md-4">
                                            <input type="text" class="form-control " maxlength="10" id="Mobile_no" name="Mobile_no" placeholder="Mobile No" onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control search_citynm" placeholder="City*" name="City" id="City" required>
                                        </div>

                                        <div class="col-md-4">
                                        <select class="block drop-arr select-sty" name="operates_as" id="operates_as" required>
                                          <option disabled selected value="">You Operates As</option>
                                          <option value="MNC">MNC</option>
                                          <option value="Partnership">Partnership</option>
                                          <option value="Private Limited">Private Limited</option>
                                          <option value="Proprietorship">Proprietorship</option>
                                          <option value="Public Limited">Public Limited</option>
                                          
                                        </select> 
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control " id="Company_turnover" name="Company_turnover" placeholder="Company Turnover" onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control " id="Loan_required" name="Loan_required" placeholder="Loan Required" onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4 mrg-top">
                                        <select class="drop-arr select-sty pull-left" name="Sell_online" id="Sell_online" required>
                                          <option disabled selected >Do You Sell Online?</option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                        </select> 
                                        </div>

                                    </div>
                                    <hr>
                                </div>
                                
                                
                                
                                
                                <div class="row sec" id="section1">
                                    <div class="form-group">
                                        <h6 class="loan-head">Business</h6>
                                         <div class="col-md-4" >
                                        <input type="text" class="form-control lastReportedsince" id="business_operating_since" name="business_operating_since" placeholder="Business Operating Since" required>
                                        </div>

                                        <div class="col-md-4">
                                        <select class="block drop-arr select-sty" name="business_model" id="business_model" required>
                                          <option disabled selected value="">Business Model</option>
                                          <option value="Trading">Distribution/Trading</option>
                                          <option value="Manufacturing">Manufacturing</option>
                                          <option value="Partnership">Services</option>
                                        </select> 
                                        </div>

                                        <div class="col-md-4">
                                        <select class="block drop-arr select-sty" name="office_premises" id="office_premises" required>
                                          <option disabled selected value="">Office Premises</option>
                                          <option value="Owned">Owned</option>
                                          <option value="Rented">Rented/Leased</option>
                                        </select> 
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" id="Income" name="Income" class="form-control" placeholder="Income*" onkeypress="return fnAllowNumeric(event)"  required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation*"onkeypress="return AllowAlphabet(event)"  required>
                                        </div>
                                        
                                        <!-- <div class="col-md-4">
                                            <input type="text" id="work_email" name="work_email"  oninput="mail('work_email')" class="form-control" placeholder="Work Email*"  required>
                                            <div id="email" style="display:none;color: red;">Please Enter Valid Email Id.</div>
                                        </div> -->

                                        <!-- <div class="col-md-4">ICICI Bank Relationship<b>:</b> Yes &nbsp;&nbsp;
                                            <input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship"  class="radiob" required value="Yesrelationship">&nbsp;&nbsp;  No&nbsp;&nbsp;<input type="radio" name="ICICIBankRelationship" id="ICICIBankRelationship" class="radiob" value="Norelationship">
                                        </div>

 -->                                    
                                         <div class="col-md-4">
                                            <input type="text" class="form-control" id="work_STDCode" name="work_STDCode"  required  onkeypress="return fnAllowNumeric(event)" maxlength="5" minlength="3" placeholder="Work Area STD Code*" >
                                        </div>

                                        <div class="col-md-4">
                                             <input type="text" class="form-control" id="work_number" name="work_number"  required  onkeypress="return fnAllowNumeric(event)" maxlength="10" placeholder="Phone Number" >
                                        </div>

                                        <div class="col-md-4">
                                        <select class="block drop-arr select-sty" name="type_of_company" id="type_of_company" required>
                                          <option disabled selected value="">Type of Company</option>
                                          <option value="Central Government">Central Government</option>
                                          <option value="MNC">MNC</option>
                                          <option value="Partnership">Partnership</option>
                                          <option value="Private Limited">Private Limited</option>
                                          <option value="Proprietorship">Proprietorship</option>
                                          <option value="PSU">PSU</option>
                                          <option value="Public Limited">Public Limited</option>
                                          <option value="State Government">State Government</option>
                                        </select> 
                                </div>

                                        <div class="col-md-4">
                                            <select class="block drop-arr select-sty" name="highest_education" id="highest_education" required>
                                              <option selected disabled="" value="">Highest Educational Qualifications</option>
                                              <option value="Under Graduate">Under Graduate</option>
                                              <option value="Graduate/Diploma">Graduate/Diploma</option>
                                              <option value="Post Graduate">Post Graduate</option>
                                              <option value="Professional">Professional</option>
                                              
                                            </select> 
                                    </div>
             
                                           <div class="col-md-4">
  
                                             <select class="block drop-arr select-sty" name="ICICIBankRelationship" id="ICICIBankRelationship" required>
                                              <option value="">ICICI Bank Relationship</option>
                                                <option value="Salary">Salary</option>
                                                <option value="Saving">Saving</option>
                                                <option value="Loan">Loan</option>
                                                <option value="Norelationship">Norelationship</option>
                                                
                                            </select>
                                            </div>

                                            <div class="col-md-4">
                                             <input  type="text" class="form-input-new form-control" name="Total_Exp" id="Total_Exp" placeholder="Total Experience" onkeypress="return isNumberKey(event)"  required>
                                            </div>

                                            

                                            <div class="col-md-4">
                                             <input  style='display:none;' type="text" class="form-input-new form-control" name="ICICIRelationshipNumber" id="ICICIRelationshipNumber" placeholder="ICICI Relationship Number" minlength="12" maxlength="16" onkeypress="return isNumberKey(event)"  required>
                                            </div>
        
        
                                        
                                        
                                            <div class="col-md-8">Salary Account With Other Bank<b>:</b> <label for="160">Yes</label>
                                            <input type="radio" id="160" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank"  class="radiob" checked value="Yes"> <label for="161"> &nbsp;&nbsp; No</label> <input type="radio" id="161" name="SalaryAccountWithOtherBank" id="SalaryAccountWithOtherBank" class="radiob" value=" No">
                                        </div>
                                        </div>
                                        <hr>
                                    </div>
                                    
                                    
                                    
                                <div class="row sec" style="display:none;" id="section2">   
                                    <div class="form-group">
                                        <h4 class="hdr text-center">Current Address Details:</h4>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Flat No / Plot No / House No*" name="ResidenceAddress1" id="ResidenceAddress1" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Building / Society Name" name="ResidenceAddress2" id="ResidenceAddress2">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Road No / Area / Locality" name="ResidenceAddress3" id="ResidenceAddress3">
                                        </div>
                                        
                                        <div class="col-md-4">
                                                <input type="text" id="ResidencePincode" name="ResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                            </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control search_statenm" placeholder="State*" name="ResidenceState" id="ResidenceState" required>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <select class="block drop-arr select-sty" name="type_current" id="type_current" required>
                                              <option disabled selected value="">Residence Type</option>
                                             <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                                              <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                                              <option value="Rented_with_Family">Rented with Family</option>
                                              <option value="Rented_with_Friends">Rented with Friends</option>
                                              <option value="Rented_staying_alone">Rented staying alone</option>
                                              <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                                              <option value="Company_Provided">Company Provided</option>
                                            </select> 
                                    </div>

                                        </div>
                                        <hr>
                                    </div>
                                    
                                    
                                    
                                    <div class="row sec" style="display:none;" id="section3" >  
                                    <div class="form-group">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="same" id="same_id" onclick="same_fn();" /> Same As Above
                                        <h4 class="hdr text-center">Permanent Address Details:</h4>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="flat No / Plot No / House No*" name="PerResidenceAddress1" id="PerResidenceAddress1" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Building / Society Name" name="PerResidenceAddress2" id="PerResidenceAddress2">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Road No / Area / Locality" name="PerResidenceAddress3" id="PerResidenceAddress3">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control search_citynm" placeholder="City*" name="PerCity" id="PerCity" required>
                                        </div>
                                        <div class="col-md-4">
                                                <input type="text" id="PerResidencePincode" name="PerResidencePincode" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                            </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control search_statenm" placeholder="State*" name="PerResidenceState" id="PerResidenceState" required>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <select class="block drop-arr select-sty" name="per_res_type" id="per_res_type" required>
                                              <option disabled selected value="">Residence Type</option>
                                             <option value="Owned_by_self/spouse">Owned by self/spouse</option>
                                              <option value="Owned_by_parents/siblings">Owned by parents/siblings</option>
                                              <option value="Rented_with_Family">Rented with Family</option>
                                              <option value="Rented_with_Friends">Rented with Friends</option>
                                              <option value="Rented_staying_alone">Rented staying alone</option>
                                              <option value="Paying_guest/Hostel">Paying guest/Hostel</option>
                                              <option value="Company_Provided">Company Provided</option>
                                            </select> 
                                    </div>

                                        </div>
                                         <hr>
                                    </div>
  
                                    
                                    
                                    <div class="row sec" style="display:none;" id="section4">
                                        <div class="form-group">
                                            <h4 class="hdr text-center">Contact Details</h4>
                                        
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="ResidencePhoneNumber" name="ResidencePhoneNumber" placeholder="Telephone No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="ResidenceMobileNo" name="ResidenceMobileNo" placeholder="Mobile No" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="STDCode" name="STDCode" placeholder="STD Code" required  onkeypress="return fnAllowNumeric(event)" minlength="3" maxlength="5"  >
                                            </div>
                                                
                                        </div>
                                    

                                    <div class="col-md-4">Do You Have A Credit Card :
                                        <input type="radio" id="have" name="have_credit_card"  value="Yes"> Yes
                                        <input type="radio" name="have_credit_card" id="not_have" checked value="No" > No
                                        </div><br>


                                    <div class="row">
                                    <div style="display: none;"  id="credit_details" >
                                    <h4 class="hdr">Please input details of your Credit Card having Maximum Credit Limit </h4>
           
                                        <div class="col-md-4" >
                                        <input type="text" class="form-control" name="previous_bank" id="previous_bank" class="form-input-new" onkeypress="return AllowAlphabet(event)" placeholder="Select Bank" required >
                                        </div>

                                        <div class="col-md-4" >
                                        <input type="text" class="form-control lastReportedsince" id="credit_date" name="credit_date" placeholder="Member Since*" required>
                                        </div>
                                        <div class="col-md-4">
                                       <input type="text" class="form-control" id="credit_limit" name="credit_limit" class="form-input-new" onkeypress="return fnAllowNumeric(event)" placeholder="Credit Limit"  required >
                                        </div>  
                                          </div>
                                          </div>
                                          
                                        
                                        
                                        
                                        <div class="form-group">
                                            <h4 class="hdr">Identity Details</h4>
                                            <!-- <div class="col-md-4">
                                                <input type="text" id="ApplicationNumber" name="ApplicationNumber" class="form-control" placeholder="Application Number*"   maxlength="13" minlength="13" required>
                                            </div> -->
                                            <div class="col-md-4">
                                                <input type="text" id="PanNo" name="PanNo" class="form-control" placeholder="Pancard*" oninput="pancard('PanNo')" maxlength="10" minlength="10" required >
                                                <div id="pannumber" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
                                            </div>
                                            <div class="col-md-4">
                                             <select class="block drop-arr select-sty" name="SalaryAccountOpened" id="SalaryAccountOpened" required>
                                              <option value="">Salary Account Opened</option>
                                                <option value="Above2Months"> > 2 Months</option>
                                                <option value="Below2Months"><=2 Months</option>
                                            </select>
                                            </div>                                              
                                            
                                            </div>
                                            
                                            <!-- <div class="col-md-4">
                                                <input type="text" class="form-control lastReporteddob" id="SalaryAcOpenDate" name="SalaryAcOpenDate" placeholder="Salary Ac Open Date*" required>
                                            </div> -->
                                        <div class="col-md-12">
                                        <input type="checkbox"  name="terms" required>
                                            I hereby confirm that I have read and understood the
                                    <!-- <a href="#" data-toggle="modal" data-target="#Experian_terms_modal"></a>--> Rupeeboss Terms and Conditions applicable to this service and that all the details furnished by me above are true and correct. I further provide consent to Rupeeboss and its affiliates to contact me with reference to financial products and this consent shall override any registration with DNC/NDNC.

                                        </div>
                                        
                                        <div class="col-md-12">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary btn-outline with-arrow animate-box fadeInUp animated credit-submit dis-tbl" >Confirm & Continue<i class="icon-arrow-right"></i></button>
                                    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
                                    <p><b>All <span class="text-danger">* </span>fields are mandatory.</b></p>
                                
                            </form>
                    </div>
                    <hr>
                    </div>
                    <button class="btn btn-primary btn-outline with-arrow mrg-top center-block crd_id"  id="credit_id">NEXT<i class="icon-arrow-right" ></i></button>

                </div>
            </div>
        </div>  
    </div>
</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
  function mail(obj,val){
    //console.log(obj);
    if(obj=='Email' ){
                   var str =$('#Email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">

    

 $(document).ready(function(){
    src = "<?php echo e(route('searchajax')); ?>";
    $(".search_citynm").autocomplete({
      source: function(request, response) {
        
        $.ajax({
          url: src,
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
          $(".search_citynm").val("");
          $(".search_citynm").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">

 $("#credit_id").click(function(event){
         event.preventDefault();
      if(!  $('#capital_float_form').valid()){
        return false;
      }else{$('#section1').show();
            if(!  $('#capital_float_form').valid()){return false;
            }else{ $('#section2').show();
                if(! $('#capital_float_form').valid()){
                       return false;
                }else{$('#section3').show();
               
                         if(! $('#capital_float_form').valid()){return false;
                         }else{      
                               $('.crd_id').hide();
                               $('#section4').show();


                               
                         }
                }
      }

      }
});
</script> 

<script type="text/javascript">
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
</script>



