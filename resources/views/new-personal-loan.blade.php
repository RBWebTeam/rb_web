@include('layout.header')
<div class="container">
  <aside id="fh5co-hero">
    <div class="row">
 <div class="col-md-12">
  <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
<h1 class=""><center>Personal Loan</center></h1>
  <div id="mod">
    <form name="personal_loan_process_form" id="personal_loan_process_form" action="#" method="POST" >
      {{ csrf_field() }}
      <input type="hidden" id="product" name="product_name" value=9>
      <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
   <!--  <div id ="test123" class="col-md-8"></div> -->
  <div class="row">
 <!--  <h3 class="main-header">Genral Information</h3> -->
 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
    <div class="how-it-block1 bg-boxshadow" style=" min-height:auto; float:left;">

                        <div class="col-md-6 col-sm-12 col-xs-12">
                             <div class="form-group">
                              <select id="purpose" name="purpose" class="form-control">
                                    <option selected disabled="">Purpose of Loan</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Home Related">Home Related</option>
                                    <option value="Business">Business</option>
                                    <option value="Other">Other</option>                                    
                                </select>
                              </div>
                            </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" name="loan_amount" id="loan_amount" class="form-input-new form-control" placeholder="Loan Required" onkeypress="return isNumberKey(event)" minlength="6" maxlength="9" required="">
                            </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <input type="text" id="city_name" name="city_name" class="form-input-new form-control search_city" placeholder="City of Location" required="">
                            </div>
                          </div>

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
                                </select>
                              </div>
                          </div>

                          <div class="col-md-6 col-sm-12 col-xs-12">  
                            <div class="form-group">
                              <input type="text" name="applicant_name" id="applicant_name" class="form-input-new form-control" placeholder="Applicant Name" onkeypress="return AllowAlphabet(event)" required="">
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
                              <input type="text" id="dob" name="dob" class="form-input-new form-control lastReporteddate1" placeholder="Date of Birth" required="">
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

                            <div class="col-md-6 col-sm-12 col-xs-12">
                              <div class="form-group">                                
                                   <input type="radio" id="sala_DI" value="salaried" name="emp_detail" checked="checked" >Salaried                                  
                                    <input type="radio" id="self_DI" value="self-employed" name="emp_detail"  >Self Employee                                  
                                </div>
                            </div>

                            
  

  
              <br>
    <!-- <?php if(Session::get('is_login')) {?>
                <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
              <button class="btn btn-primary btn-outline with-arrow top-mrg product_name " >Get Best Quotes<i class="icon-arrow-right"></i></button>
              <?php }else{?> 
                <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name" data-toggle="modal" data-target="#contact_id">Get Best Quotes<i class="icon-arrow-right"></i></a>
                      <?php }?>
            <?php }else{?>
            <button  style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name " id="btn_refresh_co">Get Best Quotes<i class="icon-arrow-right"></i></button>


              <a class="btn btn-primary btn-outline with-arrow top-mrg product_name" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Get Best Quotes<i class="icon-arrow-right"></i></a>
            <?php } ?> -->

             <a class="btn btn-default btn-sm product_name product_ID" >Get Best Quotes</a>  

     
    </div>
  </div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
      <div class="how-it-block1 bg-boxshadow" style=" min-height: auto; float:left;">
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
           <button type="button" class="btn btn-default btn-sm block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call <br> Manager</button>
         </div>

           <div class="col-md-12 col-xs-12">
            <br>
           <button id="eligibility"  class="btn btn-default btn-sm disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" style="width: 100%;" disabled>Check Eligibility </button>            

            <div id="log_digital_text" style=" color: red"></div>
         </div>


        </div>
      </div>
      </form>	 
    </div></div> </div></div></div></div></aside></div>  
	 
  <div id ="test123"></div>
  <!-- product description -->
  <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="wrapper-content bg-white pinside40">
                     <p>Dreaming to Enjoy Vacation in foreign country??&nbsp;&nbsp; A Royal Wedding plan??&nbsp;&nbsp; Renovation of your house??&nbsp;&nbsp; Here we have Personal Loan to make your dreams true.&nbsp;&nbsp;<br> A Personal Loan is a Short Term Unsecured Loan for 1 to 5 years which helps individual to make their dream true by fulfilling their needs. Personal Loan can be disburse within 48 hours as well.</p>


                        <div class="section-faq" id="section-faq">
                            <div class="">                                
                                <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">    <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title"><i class="fa fa-minus-circle sign"></i>Documents Required</h4>
                                </div>
                                
                                    <div class="panel-body">
                                        <strong>Important parameters Banks look for :</strong>
                                            <ul class="listnone bullet bullet-check-circle-default">
                                                <li>A Copy of Latest Salary Slips or Salary Certificate.</li>
                                                <li>Form 16 and Copy of ITR for the last two years.</li>
                                                <li>Last 6 months bank statements, S.O.A (Statements of Accounts)</li>
                                                <li>Appointment Letter </li>
                                                <li>Other Loan/ Obligation / Existing Specified Expenses (last 1 year)</li>
                                                <li>CIBIL Score / Credit Rating</li>
                                                <li>Government Recognize ID and Address Proof </li>
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
  <!-- end of product description -->

@include('layout.footer')
@include('layout.script')
  </div>
 
  </div>

<script type="text/javascript">
$(document).ready(function(){
    src = "{{ route('searchajax') }}";
    $(".search_city").autocomplete({
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
          $(".search_city").val("");
          $(".search_city").attr("disabled", false);
         
        }else{

         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
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
var getUrl=0;

$(".product_ID").click(function(e){
   e.preventDefault();
  




    if(!$('#personal_loan_process_form').valid()){

            return false;
           
          }else{
 $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#personal_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
              // console.log(msg);
                    $(".iframeloading").hide();
                           if(msg.success ==true){

                            var quote=msg.quote_id;
                            // console.log(quote);

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
                     var url = "apply-lead-online?appid=0&qoutid="+quote+"&is_liza=1&BankId="+Bank_id+"&product=9&processing_fee="+processingfee+"&loanamout="+loan_eligible+"&roi_type="+roi+"";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();
                      $('#apply_new').show();
                      $('#mi_id').show();
                   
                        $('#eligibility').prop('disabled', false);
                      
                    //   $(window).scrollTop($('#lowest').offset().top-50);

                         getUrl=url;

                   }else{
                    $('#eligibility').prop('disabled', true);
                    getUrl='';
                    // alert("ok");
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
  $(document).ready(function(){
  $('#sala_DI').change(function(){
   $("#self-employed_ID").hide();
   $("#income_ID").show();
  });

  $('#self_DI').change(function(){
  $("#income_ID").hide();
  $("#self-employed_ID").show();
  });

  });
</script>