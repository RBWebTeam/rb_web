@include('layout.header')
<div class="container ">
 <aside id="fh5co-hero">

 <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                    <h1 class=""><center>Smart Home Loan</center></h1>
<!--  <img src="{{URL::to('images/info-g-ban.png')}}" alt="Tribe Logo" class="img-responsive" /> -->
<div id="mod">
<form name="home_loan_process_form" id="home_loan_process_form" action="{{URL::to('loan-submit')}}" method="POST" >
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="product" name="product_name" value="12">
<input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
          <div class="row">
                       
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height:auto; float:left;">

                        <h4 >Property Information</h4>
                  
                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                
                                <select id="propery_types" name="propery_types" class="form-control">
                                    <option selected disabled="">Property Type</option>
                                    <option value="ready">Ready</option>
                                    <option value="searching">Searching</option>
                                    <option value="underconst">Under Construction</option>
                                    <option value="resale">Resale</option>
                                    <option value="constuction">Construction</option>
                                    <option value="others">Other</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                  <input type="text" class="form-input-new form-control" id="property_cost" name="property_cost" placeholder="Property Cost" required onkeypress="return fnAllowNumeric(event)" minlength="6"   maxlength="9">
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)"   >
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
                              </div>
                            </div>

                          <hr style="color:transparent; width:100%" />
                          <h4 >Applicant Details</h4>

                          <div class="col-md-6 col-sm-12 col-xs-12">  
                            <div class="form-group">
                            <select class="form-control input-md select-sty" name="loan_tenure" id="loan_tenure" required>
                                        <option selected value="">Loan Tenure</option>
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Year</option>
                                        <option value="3">3 Year</option>
                                        <option value="4">4 Year</option>
                                        <option value="5">5 Year</option>
                                        <option value="6">6 Year</option>
                                        <option value="7">7 Year</option>
                                        <option value="8">8 Year</option>
                                        <option value="9">9 Year</option>
                                        <option value="10">10 Year</option>
                                        <option value="11">11 Year</option>
                                        <option value="12">12 Year</option>
                                        <option value="13">13 Year</option>
                                        <option value="14">14 Year</option>
                                        <option value="15">15 Year</option>
                                        <option value="16">16 Year</option>
                                        <option value="17">17 Year</option>
                                        <option value="18">18 Year</option>
                                        <option value="19">19 Year</option>
                                        <option value="20">20 Year</option>
                                        </select>
                              </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control" name="applicantname" placeholder="Applicant Name"  required>
                            </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select id="gender" class="form-control input-md" name="gender">
                                  <option selected disabled="">Gender</option>
                                  <option value="M">Male</option>
                                  <option value="F">Female</option> 
                              </select>
                              <input type="hidden" name="emp_detail_id" value="1" >
                             </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control lastReporteddate"  name="dob"  placeholder="Date of Birth" required>
                            </div>
                          </div>
                    <!-- sal/selfemp -->
                             <!-- tab sal/selfemp -->
                             <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">                                
                                   <input type="radio" id="sala_DI" value="salaried" name="emp_detail" checked="checked" >Salaried                                  
                                    <input type="radio" id="self_DI" value="self-employed" name="emp_detail"  >Self Employee                                  
                                </div>
                            </div>

                            <div  style="display: none;" id="self-employed_ID"> 
       
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="turnover" placeholder="Annual Turnover" required  onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="profit_after_tax" placeholder="Profit After Tax" required  onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="depreciation" placeholder="Depreciation"  required onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="remuneration" placeholder="Partner/Director Remuneration"  required onkeypress="return fnAllowNumeric(event)">
                              </div>
                            </div>

                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12" id="income_ID">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control"  id="income" name="income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control"   name="obligation" placeholder="Existing EMI (If Any)"  onkeypress="return fnAllowNumeric(event)"> 
                              </div>
                            </div>

                            <hr style="color:transparent; width:100%" />
                <!-- ADD CO-APPLICANT -->
                <script>
               // $(document).ready(function(){
               //    $(".co-applicant").click(function(){
               //    $("#co-applicant-cont").toggle();
               //    });
               //  });
              </script>
              <div class="raw " >
                  <label class="switch">                             
                               Add Co-Applicant     
                                <input type="checkbox" id="co_applicant_DI" class="co-applicant"> 
                              <input type="hidden" class="co_applicant_DI" name="have_co_applicant" value="N">
                              </label>    
                              <br /><br />

                    <div class="col-md-12"  id="co-applicant-cont" style="display: none;">
                           <h4 >Co-Applicant Details</h4>

                           <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control" name="co_applicantname"  placeholder="Co-Applicant Name" required>
                            </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select id="cogender" class="form-control input-md" name="cogender">
                                  <option selected disabled="">Gender</option>
                                  <option value="M">Male</option>
                                  <option value="F">Female</option> 
                              </select>                              
                             </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                            <input type="text" class="form-input-new form-control lastReporteddate" name="co_dob" placeholder="Date of Birth"  required>
                          </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12" >
                              <div class="form-group">                                
                                   <input type="radio" id="co_sala_DI" value="salaried" name="co_emp_detail" checked="checked">Salaried                                  
                                    <input type="radio" id="co_self_DI" value="self-employed" name="co_emp_detail">Self Employee                                  
                                </div>
                            </div>

                            <div  style="display: none;" id="co_self-employed_ID"> 
       
                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="co_applicant_turnover" placeholder="Annual Turnover" required  onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="co_applicant_profit_after_tax" placeholder="Profit After Tax" required  onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="co_applicant_depreciation" placeholder="Depreciation"  required onkeypress="return fnAllowNumeric(event)">
                              </div>
                              </div>

                              <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control " name="co_applicant_remuneration" placeholder="Partner/Director Remuneration"  required onkeypress="return fnAllowNumeric(event)">
                              </div>
                            </div>

                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12" id="co_income_ID">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="co_applicant_income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
                              </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="text" class="form-input-new form-control"   name="co_applicant_obligation" placeholder="Existing EMI (If Any)"  onkeypress="return fnAllowNumeric(event)"> 
                              </div>
                            </div>         
                        </div>
                  </div>
               


     


     <div class="valid_ID"></div>                  
      
<br>
    <!-- <?php if(Session::get('is_login')) {?>
                <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
              <button class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" >Get Best Quotes<i class="icon-arrow-right"></i></button>
              <?php }else{?> 
                <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" data-toggle="modal" data-target="#contact_id">Get Best Quotes<i class="icon-arrow-right"></i></a>
                      <?php }?>
            <?php }else{?>
            <button  style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co">Get Best Quotes<i class="icon-arrow-right"></i></button>

              <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Get Best Quotes<i class="icon-arrow-right"></i></a>
            <?php } ?> -->

              <a class="btn btn-default btn-sm product_name product_ID" >Get Best Quotes</a> 

            </div>
             
      </div>
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
          @if(Session::get('is_login'))
           <a type="button" class="btn btn-default btn-sm apply_new" title="Experience New Digital Era In Loans">Apply <br>Digitally</a>
           @else
           <a data-toggle="modal" data-target="#login_process" class="btn btn-default btn-sm disblk apply_digitally " title="Experience New Digital Era In Loans">Apply <br>Digitally</a>
           @endif 
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



 <div  id="form_ID"></div>

<!-- product description start-->
<div class="">
    <div class="container">

      <div class="row">

        <div class="col-md-12">
          <div class="wrapper-content bg-white pinside40">

              <p>It will be a proud movement for you to buy your own home at your dream location, so don't wait just click and apply for a home loan.</p>

              <p>Home Loan is a type of secured loan which is offered by Banks and Non banking Financial Companies (NBFC) with lowest interest rates possible. Bank or NBCF will have possession on all property paper and all type of presale documentation between buyer and seller till the successful completion of loan tenure.</p>


              <div class="section-faq" id="section-faq">
                            <div class="">                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="st-accordion ">
                                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                          <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingOne">
                                                  <h4 class="panel-title"><i class="fa fa-minus-circle sign"></i>
                                                  Who can apply for a Home loan??</h4>
                                                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                  <ul class="listnone bullet bullet-check-circle-default">
                                                          <li>Individual (salaried)</li>
                                                          <li>Self Employed Professionals (Doctors, Lawyers, Teachers, etc)</li>
                                                          <li>Businessman</li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                     </div>
                                                   </div>

                                          <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingTwo">
                                                  <h4 class="panel-title"><i class="fa fa-minus-circle sign"></i>Type of property bank and NBFC fund for??</h4>  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">                                       
                                                  <ul class="listnone bullet bullet-check-circle-default">
                                                      <li>It should be registered and clearly identifiable whether the property is in under construction, fully constructed or Re-sale</li>
                                                  </ul>
                                                </div>
                                              </div>
                                              </div>
                                              </div> 

                                          <div class="panel panel-default">
                                              <div class="panel-heading" role="tab" id="headingThree">
                                                  <h4 class="panel-title"><i class="fa fa-minus-circle sign"></i>Documents Required</h4>            
                                                  <strong>Important parameters Banks look for :</strong>
                                                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                      <ul class="listnone bullet bullet-check-circle-default">
                                                              <li>Employment Status</li>
                                                              <li>Duration of Current Employment</li>
                                                              <li>Credit History and Credit Score</li>
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
    </div>
</div>
<!-- product description end-->


<br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">

var getUrl=0;


$(document).ready(function(){
    $('#co_applicant_DI').change(function(){

      $('.co_applicant_DI').val('Y');
     
        if(this.checked)
           $('#co-applicant-cont').show();
         // $('#co_applicant_DI').val('YES');
         else
         $('#co-applicant-cont').hide();
         // $('#co_applicant_DI').val('YES');
           

    });

//    applicacnt 
  $('#sala_DI').change(function(){
   $("#self-employed_ID").hide();
   $("#income_ID").show();
  });

  $('#self_DI').change(function(){
  $("#income_ID").hide();
  $("#self-employed_ID").show();
  });

  // applicant end
  // co applicant 
 $('#co_sala_DI').change(function(){
 $("#co_self-employed_ID").hide();
     $("#co_income_ID").show();
  });

  $('#co_self_DI').change(function(){
  $("#co_income_ID").hide();
  $("#co_self-employed_ID").show();
  });

  

 

$(".product_ID").click(function(e){
   e.preventDefault();
    if(!$('#home_loan_process_form').valid()){
    //  $('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
            return false;
          }else{
            // $(".iframeloading").show();
               var property_cost=$('#property_cost').val();
               var obligation=$('#obligation').val();
      if(property_cost!='' && obligation!=''){
         $('#login_process').attr( 'id', 'login_process');
         $('#valid_ID').hide();
            $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#home_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){ 
              //console.log(msg);
                            $(".iframeloading").hide();                  
                             if(msg.success ==true){
                              var quote=msg.quote_id;
                            var loan_eligible = msg.loan_eligible;
                             if (loan_eligible>0) {
                             $("#form_ID").empty().append(msg.html);
                             $('#loanamount').val(loan_eligible);
                           var roi = msg.roi;
                             $('#rate').val(roi);
                           var LoanTenure = msg.LoanTenure;
                             $('#term').val(LoanTenure);
                           var processingfee = msg.processingfee;
                             $('#processfee').val(processingfee);
                           var Bank_id = msg.Bank_Id;
                             $('#bank').val(Bank_id);
                           var url = "apply-lead-online?qoutid="+quote+"&is_liza=1&BankId="+Bank_id+"&product=12&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";
                             $("#apply_new").attr("href", url+'&is_liza=1');
                             $('#mi_ID').show();
                             $('#err').hide();
                              
                              $('#eligibility').prop('disabled', false);
                           
                            
                             // $(window).scrollTop($('#form_ID').offset().top-20);

                               
                                 getUrl=url;

                         }else{
                                $('#eligibility').prop('disabled', true);
                                getUrl='';
                                $('#err').show();
                                $('#loanamount').val("");
                                $('#rate').val("");
                                $('#term').val("");
                                $('#processfee').val("");
                                $('#bank').val("");
                              //  $('#apply_new').hide();
                                // $('#mi_ID').hide();
                                $("#form_ID").empty();

                                
                                
                         }
                  
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


// $('.log_digital').click(function(){
//   $('#log_digital_text').empty().append(" please login and get quotes.");
// });



});


$(document).on('click','.apply_new',function(e){
     if(getUrl!=0 || getUrl!=''){
         $(".iframeloading").show();
          location.href =getUrl;
     }else{
       $('#log_digital_text').empty().append("please  show quotes.");
      
     }
     
});
 

</script>

<script type="text/javascript">
$("#eligibility").click(function() {
  $(window).scrollTop($('#form_ID').offset().top-20);
});



</script>

<script type="text/javascript">
  $(document).ready(function()
{
    function update()
    { 
      if(! $("#property_cost").val()){
          $("#loan_amount").val('');
      }else{
        var cost = parseFloat($("#property_cost").val());
        // console.log(cost);
        var total = (cost)*80/100;
        // var total = total.toFixed(2);
        // console.log(total);
        $("#loan_amount").val(total);
      }
    }
    $(document).on("change, keyup", "#property_cost", update);
});
</script>
