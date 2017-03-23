@include('layout.header')

<div class="container">

  
  <aside id="fh5co-hero">
  <div class="col-md-12">
  <h2 class="align-center loan-head">Personal Loan</h2>
  </div>
 <div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div>
 <div class="col-md-12 white-bg pad box-shadow fl-lft">
  <!--   <div id ="test123" class="col-md-8"></div> -->
 
    <form name="personal_loan_process_form" id="personal_loan_process_form" action="#" method="POST" >
      {{ csrf_field() }}
      <input type="hidden" id="product" name="product_name" value=9>
   <!--  <div id ="test123" class="col-md-8"></div> -->
  <div class="col-md-8">
  <h3 class="main-header">Genral Information</h3>
<center><div class="type-cover"><span>PURPOSE OF LOAN</span></div></center>

<div class="text-center flt-lft btn-grp" data-toggle="buttons">
              <div class="scenario">
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Marriage" class="radio1">Marriage</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Home Releted" class="radio1">Home Related</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Business" class="radio1">Business</a></div>
                <div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Other" class="radio1" checked >Other</a></div>
              
                
              </div>
            </div> 




            
            <div class="col-xs-4 form-padding">
     <input type="text" name="custom_id" id="custom_id" class="form-input-new form-control" placeholder="Existing Custom Id if Any" onkeypress="return isNumberKey(event)" required="">
  </div>
  <div class="col-xs-4 form-padding">
     <input type="text" name="loan_amount" id="loan_amount" class="form-input-new form-control" placeholder="Loan Required" onkeypress="return isNumberKey(event)" maxlength="10" required="">
  </div>
  <div class="col-xs-4 form-padding">
     <input type="text" id="city_name" name="city_name" class="form-input-new form-control search_city" placeholder="City of Location" required="">
  </div>
  
  <div class="loan-tenure">
  <center>
    <div class="type-cover">
      <span>LOAN TENURE</span>
    </div>
  </center>
  <div class="scaling-slider">
  
    <div class="tenure offset5 pad">
    
                              <div  id="unranged-value" value="" style="width:100%; height:10px;"></div>
    </div>
    <input  type="hidden" id="loan_tenure" name="loan_tenure" value="5"  />
    </div>
  </div>

                
                
                
  
     <div class="col-xs-12 form-padding">
     <input type="text" name="applicant_name" id="applicant_name" class="form-input-new form-control" placeholder="Applicant Name" onkeypress="return AllowAlphabet(event)" required="">
  </div>
  <div class="col-xs-6 form-padding">
     <input type="text" id="dob" name="dob" class="form-input-new form-control lastReporteddate1" placeholder="Date of Birth" required="">
  </div>
  <div class="col-xs-6 form-padding">
   <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 outer-brd1 active"><input type="radio" name="gender"  value="M" checked><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-default outer-brd1 outer-brd1 "><input type="radio" name="gender"  value="F"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>      
     </div>

    <!--  <div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" name="gender"  value="Male">Male</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio" name="gender"  value="Female">Female</span>
         </div>
     </div> -->
  
  <div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd active"><input type="radio" name="emp_detail_id"   value="1" checked>Salaried</span>
      <span class="btn btn-default outer-brd "><input type="radio" name="emp_detail_id"  value="2"> Self-Emp</span>
         </div>
     </div>
     
     <div class="col-xs-6 form-padding">
     <input type="text" name="income" id="income" class="form-input-new form-control"  onkeypress="return isNumberKey(event)"  placeholder="Monthly Income" required="">
  </div>
  
  <div class="col-xs-6 form-padding">
     <input type="text" name="obligation" id="obligation" class="form-input-new form-control" placeholder="Existing EMI (If Any)" onkeypress="return isNumberKey(event)" required="">
  </div>
  
  <div class="col-md-12">

  <!-- <?php if(Session::get('is_login')) {?>
                <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
              <a type="button" class="btn btn-primary btn-outline with-arrow top-mrg product_name" id="quotes">Get Me Loan<i class="icon-arrow-right"></i></a>
              <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
              <?php }else{?> 
                <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name" data-toggle="modal" data-target="#contact_id">Get Me Loan<i class="icon-arrow-right"></i></a>
                      <?php }?>
            <?php }else{?>
            <a type="button" style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name " id="btn_refresh_co">Get Me Loan<i class="icon-arrow-right"></i></a>
            <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>

              <a id="btn_refresh1" class="btn btn-primary btn-outline with-arrow animate-box product_name" onclick="get_quote_button()">Get Me Loan<i class="icon-arrow-right"></i></a>
            <?php } ?>
   -->

<br>
    <?php if(Session::get('is_login')) {?>
                <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
              <button class="btn btn-primary btn-outline with-arrow top-mrg product_name " >Get Best Quotes<i class="icon-arrow-right"></i></button>
              <?php }else{?> 
                <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name" data-toggle="modal" data-target="#contact_id">Get Best Quotes<i class="icon-arrow-right"></i></a>
                      <?php }?>
            <?php }else{?>
            <button  style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name " id="btn_refresh_co">Get Best Quotes<i class="icon-arrow-right"></i></button>


              <a class="btn btn-primary btn-outline with-arrow top-mrg product_name" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Get Best Quotes<i class="icon-arrow-right"></i></a>
            <?php } ?>

  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
      </div>
      </form>
     </div>
     <div class="col-md-4" >
     <div class="border brd-for">

             <form class="" id="compareform" role="form">
          
          
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

        <div> 
          
         <a id="apply_new" type="button" class="btn btn-info" title="Experience New Digital Era In Loans">Apply Now</a>
         <button id="eligibility" class="btn btn-info" title="See Bankwise Eligibility And Apply Amongst Best Bank">Eligibility</button>
         <button type="button" class="btn btn-info"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call RM</button>
         
        </div>
        <br>
        <!-- <p id="err" style="display:none;" ><span style="color:skyblue;position:absolute;font-size:13px;">No Quotes Found.</span></p> -->
   
      </form>

    </div> 
    <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;margin-top: 200px;text-align: center;">No Quotes Found.</span></p> 
  </div> 
   </aside>
   
  </div>
  </div>
  <div id ="test123" class="col-md-8"></div>
  
      
  
  
   <br>
  
  
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
$(".btn-primary").click(function(e){
   e.preventDefault();
  //       var slidr = $("#unranged-value").text();
  //        $('#loan_tenure').val(slidr);
  //        console.log(slidr);
  //       // alert('ok');
  //       $(".iframeloading").show();
  //       var v_token = "{{csrf_token()}}";
  //     $.ajax({  
  //              type: "POST",  
  //              url: "{{URL::to('loan-submit')}}",
  //              dataType:'json',
  //               data : $('#personal_loan_process_form').serialize(),
  //              success: function(msg){
  //                   // console.log(msg);
  //                 if(msg.success ==true){
  //                   //console.log(msg.html);
  //                  //  $(".iframeloading").hide();
  //                   // $("#personal_loan_process_form").hide();
  //                   $("#test123").empty().append(msg.html);

  //                   var loan_eligible = msg.loan_eligible;
  //                   // console.log(loan_eligible);
  //                  $('#loanamount').val(loan_eligible);

  //                   var roi = msg.roi;
  //                   $('#rate').val(roi);

  //                     var LoanTenure = msg.LoanTenure;
  //                   $('#term').val(LoanTenure);

  //                   var processingfee = msg.processingfee;
  //                   $('#processfee').val(processingfee);

  //                   var Bank_id = msg.Bank_Id;
  //                   $('#bank').val(Bank_id);
  //                    var url = "apply-lead-online?qoutid=0&BankId="+Bank_id+"&product=9&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";
  //                    $("#apply_new").attr("href", url);
                  

  //                 $('#call_rm').show();
  //                 }else{
                    
  //                    // window.location.href ="{{URL::to('went-wrong')}}";
  //                    $(".iframeloading").hide();
                      

  //                 }
  //                 }  
  //                 }); 
        
  //       // $('#express_form').hide();
  //       // $('#generic').show();
        
  // });




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
                    $(".iframeloading").hide();
                           if(msg.success ==true){

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
                     var url = "apply-lead-online?qoutid=0&BankId="+Bank_id+"&product=9&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();

                   }else{
                     $('#err').show();
                     $('#compareform').hide();

                    }
                     // $(window).scrollTop($('#test123').offset().top-20);
                  
                  }

                             
                        
                    }  
                  });

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