@include('layout.header')
 <!-- <style>
   .bg-img {background: url("images/bg_img.png")no-repeat; width:447px; height:502px;}
   .pl-frm {padding-top:190px;}
   .form-group {margin-bottom: 5px !important;} 
   .form-control {margin-bottom:6px !important;}
   .wrapper-content {background:#ffffff url("images/personal-loan.jpg")no-repeat;}
   .form-control{height:45px !important;}
</style> -->
<style>
   .bg-img {background: url("../images/bg_img.gif")no-repeat; width:447px; height:179px; z-index:1000;position:inherit;margin-left:20px;}
   .heading {background: url("../images/heading.png")no-repeat;z-index:10000;right:90px; position:absolute; width:235px; height:175px;}
   .bg-img img {margin:0 auto; display:block;}
   .form-group {margin-bottom: 5px !important;} 
   .form-control {margin-bottom:6px !important;}
   /*.wrapper-content {background:#ffffff url("images/watermark_bg.png");}*/
   .btn-center {display:block;margin:0 auto;width: 80px;}
   .bg1 {background: #e6ecef !important;border:5px solid #dce8ef; padding: 20px 0px;float: left;z-index: 0;margin-top: -13px;box-shadow: 10px 10px 5px #888;}
   
   .hero-bkg-animated {
  background: #f3f3f3 url("images/watermark_bg_1.png") repeat 0 0;
  width: 100%;
  
  -webkit-animation: slide 20s linear infinite;
}

@-webkit-keyframes slide {
    from { background-position: 0 0; }
    to { background-position: -400px 0; }
}


   
   @media only screen and (max-width: 768px) {
    .wrapper-content {background:transparent;}
   }

   .btn-sm {background:#fff;padding: 15px 16px !important;}
</style>

   
  <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <div class="heading" style="display:none;"></div>
                    <div class="wrapper-content bg-white pinside40 hero-bkg-animated" id="pl_form">
                     <!-- <h1 class=""><center>Personal Loan</center></h1> -->
                        <div class="section-faq" id="section-faq">
                                <div class="row">
                
                <!-- <div style="font-style: oblique" class="col-md-6 col-md-offset-3 text-center"><h3>Hey.. Let me find out best <b>Personal Loan</b> quotes and your <b> Free Credit Score.</b></h3></div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                                 
                             <div class="col-md-6 col-md-offset-3 ">
                 <div class="bg-img" id="show-hid" style="display:none; padding:0px 10px;"></div>
                 
                  <div class="bg1">
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

                               <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                               <select class="form-control input-md select-sty" name="loan_tenure" id="loan_tenure" required>
                                <option selected value="">Loan Tenure</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                                        
                                </select>
                               </div>
                               </div> -->

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div style="background:transparent;float:left;margin-bottom:8px;width:100%;margin:5px;margin-bottom:8px;">
                                 <span style="font-size:14px;">Loan Tenure</span>
                                <div class="btn-grp mrg-top status form-control1" data-toggle="buttons">
                                   <span class="btn btn-primary btn-sm outer-brd active"><input type="radio" name="loan_tenure" id="option1" value="1">1 Year</span>
                                   <span class="btn btn-primary btn-sm outer-brd"><input type="radio" name="loan_tenure" id="option2" value="2" >2 Years</span>
                                   <span class="btn btn-primary btn-sm outer-brd"><input type="radio" name="loan_tenure" id="option3" value="3" >3 Years</span>
                                 <span class="btn btn-primary btn-sm outer-brd"><input type="radio" name="loan_tenure" id="option3" value="4" >4 Years</span>
                                 <span class="btn btn-primary btn-sm outer-brd"><input type="radio" name="loan_tenure" id="option3" value="5" >5 Years</span>
                               </div>
                               </div>
                               </div>

                             <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                               <select class="form-control input-md select-sty" name="emp_detail" id="emp_detail" required>
                                        <option selected value="">Employment Status</option>
                                        <option value="salaried">Salaried</option>
                                        <option value="self-employed">Self-Employed</option>
                                                                         
                                </select>
                               </div>
                               
                               </div> -->

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div style="background:transparent;float:left;margin-bottom:8px;width:100%;margin:5px;margin-bottom:8px;">
                                 <span style="font-size:14px;">Employment</span>
                                <div class="btn-grp mrg-top status form-control1" data-toggle="buttons">
                                   <span class="btn btn-primary btn-sm outer-brd active"><input type="radio" name="emp_detail" id="option1" value="salaried">Salaried</span>
                                   <span class="btn btn-primary btn-sm outer-brd"><input type="radio" name="emp_detail" id="option2" value="self-employed" >Self-Emp</span>
                                   
                               </div>
                               </div>
                               </div>


                               <div class="col-md-12 col-sm-12 col-xs-12" id="monthly_income">
                                <div class="form-group">
                                <input type="text" name="income" id="income" class="form-input-new form-control" placeholder="Monthly Income" onkeypress="return isNumberKey(event)" minlength="5" maxlength="9" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                               <select id="AddressType" class="form-control input-md" name="AddressType[]" required>
                                <option selected disabled="">AddressType</option>
                                 <option value="C">Current or Present</option>
                                 <option value="P"> Permanent</option>
                                 <option value="O">Office</option>
                                 <option value="X">Other or Unspecified</option>
                                </select>
                               </div>
                               
                               </div>
                               
                               </div>

                               <!-- SECTION 1 -->
                               <div id="section1" style="display: none;">
                               

                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div id="text" style="display: none;font-style: oblique; font-size: 10px";><p class="blink"><b>"Hey bingo..!! Just few more details to get quotes and also avail your 50% discount on Credit Report"</b></p></div>
                               <div class="form-group">
                               <input type="text" name="AddressLine[]" id="AddressLine" class="form-input-new form-control" placeholder="Address" required="">
                               </div>
                               </div>


                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                               <input type="text" name="city_name" id="city_name" class="form-input-new form-control search_city" placeholder="City" required="">
                               </div>
                               </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                   <div class="form-group">
                                  <select name="State[]" class="form-control dropdown valid" required="">
                                   <option disabled="" selected="" value="">Select State</option>
                                                    <option value="AN">Andaman &amp; Nicobar Islands</option>
                                                 <option value="AP">Andhra Pradesh</option>
                                                 <option value="AR">Arunachal Pradesh</option>
                                                 <option value="AS">Assam</option>
                                                 <option value="BR">Bihar</option>
                                                 <option value="CH">Chandigarh</option>
                                                 <option value="CG">Chhattisgarh</option>
                                                 <option value="DN">Dadra &amp; Nagar Haveli</option>
                                                 <option value="DD">Daman &amp; Diu</option>
                                                 <option value="DL">Delhi</option>
                                                 <option value="GA">Goa</option>
                                                 <option value="GJ">Gujarat</option>
                                                 <option value="HR">Haryana</option>
                                                 <option value="HP">Himachal Pradesh</option>
                                                 <option value="JK">Jammu &amp; Kashmir</option>
                                                 <option value="JH">Jharkhand</option>
                                                 <option value="KA">Karnataka</option>
                                                 <option value="KL">Kerala</option>
                                                 <option value="LD">Lakshadweep</option>
                                                 <option value="MP">Madhya Pradesh</option>
                                                 <option value="MH">Maharashtra</option>
                                                 <option value="MN">Manipur</option>
                                                 <option value="ML">Meghalaya</option>
                                                 <option value="MZ">Mizoram</option>
                                                 <option value="NL">Nagaland</option>
                                                 <option value="OR">Orissa</option>
                                                 <option value="PY">Pondicherry/Puducherry</option>
                                                 <option value="PB">Punjab</option>
                                                 <option value="RJ">Rajasthan</option>
                                                 <option value="SK">Sikkim</option>
                                                 <option value="TN">Tamil Nadu</option>
                                                 <option value="TR">Tripura</option>
                                                 <option value="UP">Uttar Pradesh</option>
                                                 <option value="UL">Uttaranchal/Uttarakhand</option>
                                                 <option value="WB">West Bengal</option>
                                               </select>
                                   </div>
                                </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                               <input type="text" name="Postal[]" id="Postal" class="form-input-new form-control" placeholder="Pincode" required="">
                               </div>
                               </div>

                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                <input type="text" name="applicant_name" id="applicant_name" class="form-input-new form-control" placeholder="Applicant Name" maxlength="100" onkeypress="return AllowAlphabet(event)" required="">
                               </div>
                               
                               </div>
                               


                               

                             </div>

                             <!-- SECTION 2 -->
                              <div id="section2" style="display: none;" ;>
                              <div class="col-md-12 col-sm-12 col-xs-12" >
                               <div class="form-group">
                                <select id="Gender" class="form-control input-md" name="Gender" required>
                                <option selected disabled="">Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option> 
                                </select>
                                </div>
                                <input type="hidden" name="emp_detail_id" value="1" >
                               
                                </div>
                                 
                                 <div class="col-md-12 col-sm-12 col-xs-12" >
                                <div class="form-group">
                                <select id="MaritalStatus" name="MaritalStatus" class="form-control valid" required="">
                                    <option selected="" value="" disabled="">Marital Status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                </select>
                               
                                </div>
                                </div>

                              <div class="col-md-12 col-sm-12 col-xs-12">  
                              <div class="form-group">
                              <input type="text" id="dob" name="dob" class="form-input-new form-control lastReporteddate1" placeholder="Date of Birth" required="">
                              </div>
                              
                             </div>
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

                               <input type="hidden" name="FirstName" id="FirstName">
                               <input type="hidden" name="InquiryPurpose" id="InquiryPurpose" value="00">
                               <input type="hidden" name="DOB" id="DOB">
                               <input type="hidden" name="TransactionAmount" id="TransactionAmount" value="0">
                               <input type="hidden" name="MobilePhone" id="MobilePhone">
                               <input type="hidden" name="PANId" id="PANId">
                               <input type="hidden" name="PhoneType" id="PhoneType" value="M">
                               <input type="hidden" name="City[]" id="City">
                               <input type="hidden" name="AccountNumber[0]" id="AccountNumber" value="">
                               <input type="hidden" name="MiddleName" id="MiddleName" value="">
                               <input type="hidden" name="LastName" id="LastName" value="">
                               <input type="hidden" name="Locality1[]" id="Locality1" value="">
                               <input type="hidden" name="Locality2[]" id="Locality2" value="">
                               <input type="hidden" name="PassportId" id="PassportId" value="">
                               <input type="hidden" name="VoterId" id="VoterId" value="">
                               <input type="hidden" name="DriverLicense" id="DriverLicense" value="">
                               <input type="hidden" name="HomePhone" id="HomePhone" value="">
                               <input type="hidden" name="NationalIdCard" id="NationalIdCard" value="">
                               <input type="hidden" name="RationCard" id="RationCard" value="">


                               

                             </div>
                             
                
                              <div class="col-md-12"><br>
                               <a class="btn btn-default btn-sm btn-center" id="next">Next</a>
                                <!-- <a class="btn btn-default btn-sm" id="prev">Previous</a> -->
                               <a style="display: none;" class="btn btn-default btn-sm product_name product_ID btn-center" >Get Best Quotes</a>  
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
  event.preventDefault();
   $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('p_loansubmit')}}",
           data : $("#personal_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
              console.log(msg);
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
                var first_nm=$('#applicant_name').val();
                console.log(first_nm);
                $('#FirstName').val(first_nm);

                var dob=$('#dob').val();
                $('#DOB').val(dob);
                
                var city_name=$('#city_name').val();
                $('#City').val(city_name);
               
                $('#section1').hide();
                $('#section2').show();
                if(! $('#personal_loan_process_form').valid())
                {
                       return false;
                }
                else{ 
                 var mobile=$('#mobile').val();
                $('#MobilePhone').val(mobile); 

                var pan_no=$('#pan_number').val();
                $('#PANId').val(pan_no);      
                     $('#next').hide();
                     $('.product_ID').show();
                   
    
                }
      }
    }

      });



$('#applicant_name').click(function(){
$('#text').show();
});
 </script>

 <script>
        $( window ).load(function() {
        $('#show-hid').show("slow");
    $('.heading').show(1500);
        });
        </script>

