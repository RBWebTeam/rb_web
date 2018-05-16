@include('layout.header')
 <style>
   .bg-img {background: url("images/bg_img.png")no-repeat; width:447px; height:502px;}
   .pl-frm {padding-top:190px;}
   .form-group {margin-bottom: 5px !important;} 
   .form-control {margin-bottom:6px !important;}
   .wrapper-content {background:#ffffff url("images/watermark_img.png")no-repeat;}
</style>
   
  <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                     <!-- <h1 class=""><center>Personal Loan</center></h1> -->
                        <div class="section-faq" id="section-faq">
                                <div class="row">
                                <div id="pl_form" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                                 
                             <div class="col-md-6 col-md-offset-3 ">
                 <div class="bg-img" id="show-hid" style="display:none; padding:0px 10px;">
                 <form class="pl-frm" name="personal_loan_process_form" id="personal_loan_process_form"  method="post">
                 <div id="section">

                 {{ csrf_field() }}
                            <input type="hidden" id="product" name="product_name" value=9>
                            <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
                            <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
                            <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
                            <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
                  
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input type="text" name="loan_amount" id="loan_amount" class="form-input-new form-control" placeholder="Desired Loan Amt" onkeypress="return isNumberKey(event)" minlength="6" maxlength="9" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
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

                             <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                               <select class="form-control input-md select-sty" name="emp_detail" id="emp_detail" required>
                                        <option selected value="">Employment Status</option>
                                        <option value="salaried">Salaried</option>
                                        <option value="self-employed">Self-Employed</option>
                                                                         
                                </select>
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12" style="display: none;" id="monthly_income">
                                <div class="form-group">
                                <input type="text" name="income" id="income" class="form-input-new form-control" placeholder="Monthly Income" onkeypress="return isNumberKey(event)" minlength="5" maxlength="9" required="">
                               </div>
                               </div>
                               </div>
                               
                               <!-- SECTION 1 -->
                               <div id="section1" style="display: none;">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                               <input type="text" name="city_name" id="city_name" class="form-input-new form-control search_city" placeholder="City" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input type="text" name="applicant_name" id="applicant_name" class="form-input-new form-control" placeholder="Applicant Name" maxlength="100" onkeypress="return AllowAlphabet(event)" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12" >
                               <div class="form-group">
                                <select id="gender" class="form-control input-md" name="gender" required>
                                <option selected disabled="">Gender</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option> 
                                </select>
                                <input type="hidden" name="emp_detail_id" value="1" >
                                </div>
                                </div>

                              <div class="col-md-12 col-sm-12 col-xs-12">  
                              <div class="form-group">
                              <input type="text" id="dob" name="dob" class="form-input-new form-control lastReporteddate1" placeholder="Date of Birth" required="">
                              </div>
                             </div>

                             </div>

                             <!-- SECTION 2 -->
                              <div id="section2" style="display: none;">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                               <input type="text" name="mobile" id="mobile" class="form-input-new form-control" placeholder="Mobile" minlength="10" maxlength="10" onkeypress="return fnAllowNumeric(event)" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input type="text" name="pan_number" id="pan_number" class="form-input-new form-control" placeholder="Pan No" oninput="pan_card('pan_number')" required="">
                                <span id="pan" style="display:none;color: red; font-size: 10px">Oops.Please Enter Valid Pan Number.!!</span>
                               </div>
                               </div>

                               

                             </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                
                               </div>
                               </div>
                 
                 
                 
                               <div class="col-md-12">
                               <a class="btn btn-default btn-sm" id="next">Next</a>
                               <a style="display: none;" class="btn btn-default btn-sm product_name product_ID" >Get Best Quotes</a>  
                               </div>
              
                               </form>
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


@include('layout.footer')
@include('layout.script')
  
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
    var year = d.getFullYear() -21 ;
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
                              $('#pl_form').hide();
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
                   
                        // $('#eligibility').prop('disabled', false);
                        $("#eligibility").removeClass("disabled", true);
                      
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
                     //$(window).scrollTop($('#test123').offset().top-20);
                  
                  }

                             
                        
                    }  
                  });

          


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

<!-- <script type="text/javascript">
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
</script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $('#emp_detail').on('change', function() {
       

      if ( this.value == 'salaried')
      {
         
         $("#income_ID").show();
         $("#self-employed_ID").hide();
      }
      else{
        $("#self-employed_ID").show();
        $("#income_ID").hide();

        
      }


    });
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#loan_tenure').on('change', function() {
       $('#abc').show();

    });
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#emp_detail').on('change', function() {
       $('#efg').show();

    });
});
</script>

<script>
        $( window ).load(function() {
        $('#show-hid').slideDown(1000);
        });
        </script>


<script>
$('#emp_detail').on('change', function() {
  // alert('okae');
  var emp_detail=$('#emp_detail').find(":selected").val();
  // console.log(LeadType);
  if ( emp_detail == 'salaried')
      {
       
        $("#monthly_income").show();

        
      }
      else{
        $("#monthly_income").show();
      }
});
</script>

<script type="text/javascript">

 $("#next").click(function(event){
  // alert('okae');
         event.preventDefault();
      if(!  $('#personal_loan_process_form').valid()){
        return false;
      }else{
        $('#section').hide();
        $('#section1').show();
        $('#section2').hide();
            if(!  $('#personal_loan_process_form').valid())
              {
                return false;
            }
            else
              { 
                $('#section1').hide();
                $('#section2').show();
                if(! $('#personal_loan_process_form').valid())
                {
                       return false;
                }
                else{     
                     $('#next').hide();
                     $('.product_ID').show();
                   
    
                }
      }
    }

      });


 </script>