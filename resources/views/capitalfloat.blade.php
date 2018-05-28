@include('layout.header')
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
                                
                               
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                <div class="mb60  section-title text-center  ">
                                <h2 class="">
                                <center>Apply For Business Loan - Capital Float</center></h2>
                                </div>
                                </div>
                                
                                <div class="row">    
                       
                     <!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height:00px;"> -->
                        

             <div class="col-md-12">
          <div class="row text-left comp-pg rate white-bg">
          

              <form class="" id="capital_float_form" role="form" method="POST" >
                             {{ csrf_field() }}

                              <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'MAA=';?>">
                      <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'MAA=';?>">
                      <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'MAA=';?>"> 
               

                <div class="row">
                  <div class="form-group">
                  
                     <center><h3 class="loan-head" >Registration</h3></center>
                     <br>

                    <div class="col-md-4">
                                <!-- <span><b>Are You Existing Customer</b></span> -->

                                <input type="text" class="form-control" placeholder= "First Name" name="f_name" id="f_name" onkeypress="return AllowAlphabet(event)"  required="">
                                </div>

                                <div class="col-md-4">
                                 <!-- <span><b>Middle Name</b></span> -->
                                 <input type="text" class="form-control" oninput="mail('work_email')" id="work_email" name="work_email" placeholder="Email Address" required>
                                            <div id="email" style="display:none;color: red; font-size: 12px">Please Enter Valid Email Id.</div>
                                </div>

                                <div class="col-md-4">
                                 <!-- <span><b>Last Name</b></span> -->
                                  <input type="text" class="form-control" minlength="10" maxlength="10" id="mobile_no" name="mobile_no" placeholder="Mobile No" onkeypress="return fnAllowNumeric(event)" required>
                                </div>

                                <div class="col-md-4">
                                <!-- <span><b>Gender</b></span> -->
                                <input type="text" class="form-control search_citynm" placeholder="City" name="city" id="city" required>
                                </div>

                                <div class="col-md-4">
                                 
                                 <select class="form-control" name="operates_as" id="operates_as" required>
                                          <option disabled selected value="">You Operates As</option>
                                          <option value="MNC">MNC</option>
                                          <option value="Partnership">Partnership</option>
                                          <option value="Private Limited">Private Limited</option>
                                          <option value="Proprietorship">Proprietorship</option>
                                          <option value="Public Limited">Public Limited</option>
                                          
                                        </select>
                               
                                </div>

                                <div class="col-md-4">
                                 <!-- <span><b>DOB</b></span> -->
                                  <input type="text" class="form-control " id="company_turnover" name="company_turnover"  minlength="6" maxlength="9"  placeholder="Company Turnover" onkeypress="return fnAllowNumeric(event)" required>
                                </div>



                                <div class="col-md-4">
                                <!-- <span><b>Mobile</b></span> -->
                                <input type="text" class="form-control " id="loan_required" name="loan_required" placeholder="Loan Required" minlength="5" maxlength="9" onkeypress="return fnAllowNumeric(event)" required>
                                </div>

                                <div class="col-md-4">
                                 
                                 <select class="form-control" name="sell_online" id="sell_online" required>
                                          <option disabled selected >Do You Sell Online?</option>
                                          <option value="Yes">Yes</option>
                                          <option value="No">No</option>
                                          
                                        </select>
                               
                                </div>

                  </div>
                  <hr>
                </div>
                
                
                
                
                <div class="row sec" style="display: none;" id="section1">
                  <div class="form-group">
                    <center><h3 class="loan-head" >Business Details</h3></center>
                    <br>
                    <div class="col-md-4">
                                 <input type="text" class="form-control lastReportedsince" id="business_operating_since" name="business_operating_since" placeholder="Business Operating Since" required>
                                </div>

                                <div class="col-md-4">
                                 
                                 <select class="form-control" name="business_model" id="business_model" required>
                                          <option disabled selected value="">Business Model</option>
                                          <option value="Trading">Distribution/Trading</option>
                                          <option value="Manufacturing">Manufacturing</option>
                                          <option value="Partnership">Services</option>
                                        </select>
                               
                                </div>

                                <div class="col-md-4">
                                 
                                 <select class="form-control" name="office_premises" id="office_premises" required>
                                         <option disabled selected value="">Office Premises</option>
                                          <option value="Owned">Owned</option>
                                          <option value="Rented">Rented/Leased</option>
                                        </select>
                               
                                </div>

                                 <div class="col-md-4">
                                       
                                        <select class="form-control" name="product_category" id="product_category" required>
                                          <option disabled selected value="">Product Category</option>
                                          <option value="Apparels">Apparels</option>
                                          <option value="Appliances">Appliances</option>
                                          <option value="Automotive">Automotive</option>
                                          <option value="Baby_Care">Baby Care</option>
                                          <option value="Bags_and_Luggage">Bags & Luggage</option>
                                          <option value="Beauty_and_Personal_Care">Beauty & Personal Care</option>
                                          <option value="Books">Books</option>
                                          <option value="Camera_and_Accessories">Camera & Accessories</option>
                                          <option value="Computer_and_Peripherals">Computer & Peripherals</option>
                                          <option value="Eyewear">Eyewear</option>
                                          <option value="Fashion_Accessories">Fashion Accessories</option>
                                          <option value="Fragrances">Fragrances</option>
                                          <option value="Furniture">Furniture</option>
                                          <option value="Gaming">Gaming</option>
                                          <option value="Gifting_Events">Gifting Events</option>
                                          <option value="Hardware_and_Sanitary_Fittings">Hardware & Sanitary Fittings</option>
                                          <option value="Health">Health</option>
                                          <option value="Hobbies">Hobbies</option>
                                          </select> 
                                        </div>
                                        </div>
                                        <hr>
                                        </div>
                  
                  
                  
                <div class="row sec" style="display: none;" id="section2">   
                  <div class="form-group">
                    <center><h3 class="loan-head" >Financials Details</h3></center>
                    <br>

                    <div class="col-md-4">
                                        <!-- <span><b>Address 1</b></span> -->
                                        <input type="text" class="form-control" placeholder="Company Turnover(2014-2015)" name="company_turnoverfor_2014_2015" id="company_turnoverfor_2014_2015" onkeypress="return fnAllowNumeric(event)" maxlength="9" minlength="6" required>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Company Turnover(2015-2016)" name="company_turnovers_2015_2016" id="company_turnovers_2015_2016" onkeypress="return fnAllowNumeric(event)" maxlength="9" minlength="6" required>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Company Profit/Loss(2014-2015)" name="profit_loss_company_trnovr_2014_2015" id="profit_loss_company_trnovr_2014_2015" onkeypress="return fnAllowNumeric(event)" maxlength="9" minlength="6" required>
                                        </div>

                                        
                                          <div class="col-md-4">
                                           <!-- <span>Residence City</span> -->
                                            <input type="text" class="form-control" placeholder="Company Profit/Loss(2015-2016)" name="profit_loss_company_trnovr_2015_2016" id="profit_loss_company_trnovr_2015_2016" onkeypress="return fnAllowNumeric(event)" maxlength="9" minlength="6" required>
                                          </div>

                                          <div class="col-md-4">
                                        
                                            <select class="form-control" name="availing_any_credit" id="availing_any_credit" required>
                                            <option disabled selected value="">Availing Any Credit</option>
                                            <option value="OD/CC">OD/CC</option>
                                            <option value="Unsecured_business_loan">Unsecured Business Loan</option>
                                            <option value="Loan_Against_Property">Loan Against Property</option>
                                            <option value="Auto_Loan">Auto Loan</option>
                                          </select>
                                        </div>

                                          <div class="col-md-4">
                                          <!-- <span>Residence Type</span> -->
                                          <input type="text" class="form-control" placeholder="Obligations" name="obligations" id="obligations" onkeypress="return fnAllowNumeric(event)"> 
                                          </div>

                                          
                    </div>
                    <hr>
                  </div>
                                    
                  
                  
                                    <div class="row sec" style="display: none;" id="section3" >  
                  <div class="form-group">
                      
                    <center><h3 class="loan-head" >Personal Details</h3></center>
                    <br>
                    <div class="col-md-4">
                                          <!-- <span>Address 1</span> -->
                                            <input type="text" class="form-control" placeholder= "Father's Name" name="m_name" id="m_name" onkeypress="return AllowAlphabet(event)" required>
                                          </div>

                                          <div class="col-md-4">
                                          <!-- <span>Address 2</span> -->
                                            <input type="text" class="form-control" placeholder= "Last Name" name="l_name" id="l_name" onkeypress="return AllowAlphabet(event)" required>
                                          </div>

                                          <div class="col-md-4">
                                          <!-- <span>Address 3</span> -->
                                            <input type="text" class="form-control lastReporteddob" id="credit_date" name="credit_date" placeholder="Date of Birth*" required>
                                          </div>

                                          <div class="col-md-4">
                                             <!-- <span>Permanent Residence City</span> -->
                                              <input type="text" class="form-control" placeholder="Address" name="personaladdress1" id="personaladdress1" required>
                                            </div>

                                            <div class="col-md-4">
                                            <!-- <span>Permanent Residence Pincode</span> -->
                                            <input type="text" id="pin_code" name="pin_code" class="form-control" placeholder="Pincode*" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="6" required>
                                            </div>

                                            <div class="col-md-4">
                                            <!-- <span>Permanent Residence Phone numnber</span> -->
                                            <input type="text" class="form-control search_citynm" placeholder="City*" name="percity" id="percity" required>
                                            </div>

                                            <div class="col-md-4">
                                       
                                            <select class="form-control" name="personal_ownership" id="personal_ownership" required>
                                            <option disabled selected value="">Residence Ownership</option>
                                          <option value="Owned">Owned</option>
                                          <option value="Rented">Rented</option>
                                          </select>
                                        </div>

                                        <div class="col-md-4">
                                       
                                        <select class="form-control" name="share_holding" id="share_holding" required>
                                         <option disabled selected value="">Shareholding %</option>
                                         <option>10%</option>
                                         <option>20%</option>
                                         <option>30%</option>
                                         <option>40%</option>
                                         <option>50%</option>
                                         <option>60%</option>
                                         <option>70%</option>
                                         <option>80%</option>
                                         <option>90%</option>
                                        <option>100%</option>
                                        </select>
                                   </div>

                                   <div class="col-md-4">
                                 
                                <select class="form-control" name="highest_education" id="highest_education" required>
                                  <option selected disabled="" value="">Highest Educational Qualifications</option>
                                  <option value="Under Graduate">Under Graduate</option>
                                  <option value="Graduate/Diploma">Graduate/Diploma</option>
                                  <option value="Post Graduate">Post Graduate</option>
                                  <option value="Professional">Professional</option>
                                  
                                </select> 
                        </div>

                        <div class="col-md-4">
                                        
                                        <input type="text" class="form-control" placeholder="LinkedIn Profile URL" name="link_email" id="link_email" oninput="email('link_email')" required>
                                        <div id="e_mail" style="display:none;color: red; font-size: 12px">Please Enter Valid Email Id.</div>
                                        </div>

                    </div>
                     <hr>
                  </div>
  
                  
                  
                  <div class="row sec" style="display: none;" id="section4">
                    <div class="form-group">
                      <center><h3 class="loan-head" >Customer Details</h3></center>
                      <br>
                    
                      <div class="col-md-4">
                                        <!-- <span>Net Monthly Income</span> -->
                                        <input type="text" class="form-control" placeholder= "Customer Name" name="customer_name" id="customer_name" onkeypress="return AllowAlphabet(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder= "Average Monthly Sales" name="average_sales" id="average_sales" onkeypress="return fnAllowNumeric(event)" minlength="0" maxlength="8" required>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder= "Average Payment Cycle Days" name="average_payment_cycle" id="average_payment_cycle"  maxlength="3" minlength="2" onkeypress="return fnAllowNumeric(event)" required >
                                        </div>

                                        <div class="col-md-4" >
                                          <input type="text" class="form-control" placeholder= "Months In Business With The Customer" name="business_withThe_customer" id="business_withThe_customer" maxlength="3" minlength="1" onkeypress="return fnAllowNumeric(event)"  required>
                                          </div>
                                           </div>
                                           </div>

                  
                        
                 <div class="row sec" style="display: none;"  id="section5">
                    <div class="form-group">
                                        <center><h3 class="loan-head">Other Details</h3></center>
                                         

                                         <div class="col-md-4">
                                        <label>Company Profile :</label>
                                            <input type="text" class="form-control" placeholder= "Company Profile" name="company_profile" id="company_profile"  required>
                                        </div>



                                         <div class="col-md-4">
                                        <label>Company PAN :</label>
                                            <input type="text" class="form-control" placeholder= "Company PAN" name="pancard_no" id="pancard_no" oninput="pancard('pancard_no')" maxlength="10" minlength="10" required >
                                               <div id="pannumber" style="display:none;color: red; font-size: 12px">Oops.Please Enter Valid Pan Number.!!</div>
                                        </div>

                                        <div class="col-md-4">
                                        <label>VAT Registration Number :</label>
                                            <input type="text" class="form-control" placeholder= "VAT Registration Number" name="vat_registration" id="vat_registration"onkeypress="return fnAllowNumeric(event)" required="" >
                                        </div>


                                       <div class="col-md-4" >
                                       <label>Date Of Incorporation :</label>
                                       <input type="text" class="form-control lastReportedsince" id="date_incorporation" name="date_incorporation" placeholder="Date Of Incorporation" required>
                                        </div>


                                        <div class="col-md-4">
                                        <label>Company Website :</label>
                                            <input type="text" class="form-control" oninput="e_mail('company_email')" id="company_email" name="company_email" placeholder="Company Email Website" required>
                                            <div id="mail" style="display:none;color: red; font-size: 12px">Please Enter Valid Email Id.</div>
                                        </div>



                                       <div class="col-md-4">
                                        <label>Registered Address :</label>
                                            <input type="text" class="form-control" placeholder="Registered Address" name="registered_address" id="registered_address" required>
                                        </div>


                                        <div class="col-md-4">
                                          <label>Registered Pincode :</label>
                                          <input type="text" id="registered_pincode" name="registered_pincode" class="form-control" placeholder="Registered Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                            </div>
                                           

                                             <div class="col-md-4">
                                             <label>Registered City :</label>
                                            <input type="text" class="form-control search_citynm" placeholder="Registered City*" name="registered_city" id="registered_city" required>
                                        </div>


                                        <div class="col-md-4">
                                          <label>Registered Contact Number :</label>
                                                <input type="text" class="form-control" id="registered_mobile_no" name="registered_mobile_no" placeholder="Registered Contact Number" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
                                            </div>


                                          <div class="col-md-4">
                                            <label>Operating Address :</label>
                                            <input type="text" class="form-control" placeholder="Operating Address" name="operating_address" id="operating_address">
                                          </div>


                                             <div class="col-md-4">
                                              <label>Operating Pincode :</label>
                                                <input type="text" id="operating_pincode" name="operating_pincode" class="form-control" placeholder="Operating Pincode*" onkeypress="return fnAllowNumeric(event)" maxlength="6" required>
                                            </div>


                                             <div class="col-md-4">
                                             <label>Operating City :</label>
                                            <input type="text" class="form-control search_citynm" placeholder="Operating City*" name="operating_city" id="operating_city" required>
                                        </div>


                                         <div class="col-md-4">
                                          <label>Operating Contact Number :</label>
                                                <input type="text" class="form-control" id="operating_mobile_no" name="operating_mobile_no" placeholder="Operating Contact Number" required="" onkeypress="return fnAllowNumeric(event)" maxlength="10" minlength="10">
                                            </div>

                                          </div>
                                          </div>

                              <br>
                              <br>
                      

                    
                    
                    
                      
                      
                   
                    
                    <div class="col-md-12">
                    &nbsp;&nbsp;&nbsp;&nbsp;<button style="display: none;" class="btn btn-default btn-sm capital-submit " >Confirm & Continue<i class="icon-arrow-right"></i></button>
                    

                  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>

                  
                
              </form>
          </div>
          
          </div>
          <button class="btn btn-default btn-sm crd_id"  id="credit_id">NEXT<i class="" ></i></button>

             
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

<div class="modal fade" tabindex="-1" role="dialog" id="capitalfloat-bank-bl-popup">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: red; font-size: 12px" >Your Capital Float Bank Business Loan Lead Id is <span id="capitalfloatbank"></span> .<h5></p></h4>
        
      </div>

      <div class="modal-footer">
        <a type="button" id="okae" name="okae" class="btn btn-primary capitalfloat_bl_proceed">OK</a>
        
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="capitalfloat-bank-bl-popup-error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black">Oops!! Unable To Process.T.<h5></p></h4>
        
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

    

 $(document).ready(function(){
    src = "{{ route('searchajax') }}";
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
 
  console.log(name);
         event.preventDefault();
      if(!  $('#capital_float_form').valid()){
        return false;
      }else{$('#section1').show();
            if(!  $('#capital_float_form').valid()){return false;
            }else{ $('#section2').show();
                if(! $('#capital_float_form').valid()){return false;
                      }else{$('#section3').show();
                            if(! $('#capital_float_form').valid()){return false;
                                  }else{      
                                      $('#section4').show();
                                    }
                                    if(! $('#capital_float_form').valid()){return false;
                                  }else{      
                                    $('.crd_id').hide();
                                    $('.capital-submit').show();
                                        $('#section5').show();

                               
                         }
                }
      }

      }
});










  $(".capital-submit").click(function(event){
    alert("okae");
    event.preventDefault();
      //var form=$(this).closest("form").attr('id');
      //console.log($('#compareform'));
      //var form=$('#compareform');
      if(!  $('#capital_float_form').valid()){
        return false;
      }else{
        //var s=$('#'+form).serialize();
        //console.log($('#compareform'));
        $(".iframeloading").show();
        // $(".icici-credit-submit").hide(); 
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('capital-submit')}}",
         data : $('#capital_float_form').serialize(),
        
         success: function(msg){
          if (msg.Status==1) {
              $('#capitalfloat-bank-bl-popup').modal('show');
              $('#capitalfloatbank').empty().append(msg.Lead_Id);
            } 
            else {
                $('#capitalfloat-bank-bl-popup').modal('hide');
                 $('#capitalfloat-bank-bl-popup-error').modal('show');
                
            }
        
        }  
      }); 
      }

    });


</script>


<script type="text/javascript">
  function mail(obj,val){
    //console.log(obj);
    if(obj=='work_email' ){
                   var str =$('#work_email').val();
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
  function e_mail(obj,val){
    // console.log(obj);
    if(obj=='company_email' ){
                   var str =$('#company_email').val();
                   var emailPattern = /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#mail').show();

                    return false;
                  }
                  
  }
}
</script>


<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='link_email' ){
                   var str =$('#link_email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#e_mail').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#e_mail').show();

                    return false;
                  }
                  
  }
}
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

<!-- DOB -->
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()-21 ;
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
  function pancard(obj,val){
    // console.log(obj);
    if(obj=='pancard_no' ){
                   var str =$('#pancard_no').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#pannumber').hide();
                      // $('.credit-submit').show();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#pannumber').show();
                    // $('.credit-submit').hide();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">
  $('.capitalfloat_bl_proceed').click(function(){
    window.location.href ="{{URL::to('thank-you')}}";
  });
</script>