@include('layout.header')
<div class="container ">
 <aside id="fh5co-hero">
  
 <!-- <div class="col-md-12 white-bg pad1 mrg-btm">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div> -->
 <div class="row">
 <div class="col-md-12">
  <div class="wrapper-content bg-white pinside40">
    <div class="mb60  section-title text-center  ">
      <!-- section title start-->
      <h1>Car Loan</h1>
    </div>
    <div class="section-faq" id="section-faq">
      <div class="">
        <div class="row">

<form name="car_loan_process_form" id="car_loan_process_form" action="{{URL::to('loan-submit')}}" method="POST" >
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="product" name="product_name" value="4">
 <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 


      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
          <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
              <h4 >Car Information</h4>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control" id="car_cost" name="car_cost" placeholder="On Road Price" required onkeypress="return fnAllowNumeric(event)" minlength="6"  maxlength="9">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)" value="" disabled="true">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
                            </div>
                          </div>

                          <hr style="color:transparent; width:100%" />

                          <h4 >Applicant Details</h4>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select id="loan_tenure" class="form-control input-md select-sty" name="loan_tenure" required>
                              <option selected disabled="">Loan Tenure</option>
                              <option value="1">1 Year</option>
                              <option value="2">2 Year</option>
                              <option value="3">3 Year</option>
                              <option value="4">4 Year</option>
                              <option value="5">5 Year</option> 
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

                            <br>

                            <a class="btn btn-default btn-sm product_name product_ID" >Get Best Quotes</a>

              </div>
          </div>
        </form>
     

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
           <a type="button" data-toggle="modal" data-target="#login_process" class="btn btn-default btn-sm apply_new" title="Experience New Digital Era In Loans">Apply <br>Digitally</a>
           @else
           <a data-toggle="modal" data-target="#login_process" class="btn btn-default btn-sm disblk apply_digitally " title="Experience New Digital Era In Loans">Apply<br> Digitally</a>
           @endif 
         </div>


           <div class="col-md-6 col-xs-12">
            <br>
           <button type="button" class="btn btn-default btn-sm block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call <br>Manager</button>
         </div>

           <div class="col-md-12 col-xs-12">
                <br>
           <button id="eligibility"  class="btn btn-default btn-sm disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" style="width: 100%;" disabled>Check Eligibility </button>      
            <div id="log_digital_text" style=" color: red"></div>
          </div>


        </div>
      </div>




              </div>
            </div>
          </div>
        </div>
        <div  id="form_ID"></div>
      </div>
    </div>
  </aside>
</div>

<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="wrapper-content bg-white pinside40">
                      <p>Car Loan is a short term loan for 3 to 5 years of tenure which all banks and non-banking financial institution offer to the clients.&nbsp; Interest rates varies for personal and commercial use of car.</p>

                      <div class="section-faq" id="section-faq">
                            <div class="">                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                     <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title"><i class="fa fa-minus-circle sign"></i>Documents Required</h4>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                    <strong>Important parameters Banks look for :</strong>
                                    <h4>Salaried</h4>
                                    
                                            <ul class="listnone bullet bullet-check-circle-default">    
                                               <li>Minimum 21 years of age</li>
                                                <li>Minimum net annual salary of 240000 p.a.</li>
                                                <li>Latest 3 months Salary slip and Form 16</li>
                                                <li>Credit Score </li>
                                                <li>bank statement for last 6 month </li>
                                            </ul>
                                          </div>
                                        </div>
                                           <!--  <hr style="color:transparent; width:100%" /> -->
                                              <h4>Self-Employee </h4>
                                              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                            <ul class="listnone bullet bullet-check-circle-default">
                                                <li>Proof of continuation: Trade license /Establishment /Sales Tax certificate </li>
                                                <li>ITR for latest 3 year along with balance sheet ,P&L account,computation of income.</li>
                                                <li>Current account statement for last 6 month </li>
                                            </ul>
                                                <p style="color: red;">ID Proof & Address proof for both the above given category </p>
                                              </div></div>
                                </div>
                                
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></div></div></div></div></div></div>

      

@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
$(document).ready(function(){
    $('#co_applicant_DI').change(function(){
        if(this.checked)
           $('#coapplicant_display').show();
        else
         $('#coapplicant_display').hide();
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
    if(!$('#car_loan_process_form').valid()){
     // $('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
            return false;
          }else{
           
               var property_cost=$('#car_cost').val();
               var obligation=$('#obligation').val();
      if(property_cost!='' && obligation!=''){
         $('#login_process').attr( 'id', 'login_process');
             $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#car_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
                            $(".iframeloading").hide();                   
                             if(msg.success ==true){
                              var quote=msg.quote;
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
                           // var url = "apply-lead-online?qoutid="+quote+"&BankId="+Bank_id+"&product=12&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";

                             var url="thank-you";
                             $("#apply_new").attr("href", url);
                             $('#mi_ID').show();
                             $('#err').hide();
                             // $(window).scrollTop($('#form_ID').offset().top-20);

                              $('#eligibility').prop('disabled', false);
                         }else{

                               $('#eligibility').prop('disabled', true);

                                $('#err').show();
                                $('#loanamount').val("");
                                $('#rate').val("");
                                $('#term').val("");
                                $('#processfee').val("");
                                $('#bank').val("");
                                $('#apply_new').hide();
                                // $('#mi_ID').hide();
                                $("#form_ID").empty();
                                
                                
                         }
                  
               }                    
           }  
       });

}else{
 $('#login_process').removeAttr('id');
  alert("This field is required.");

  
}

     }
  

  });

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
      if(! $("#car_cost").val()){
          $("#loan_amount").val('');
      }else{
        var cost = parseFloat($("#car_cost").val());
        // console.log(cost);
        var total = (cost)*90/100;
        // var total = total.toFixed(2);
        // console.log(total);
        $("#loan_amount").val(total);
      }
    }
    $(document).on("change, keyup", "#car_cost", update);
});
</script>

 
