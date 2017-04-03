@include('layout.header')
<div class="container ">
 <aside id="fh5co-hero">
	<div class="col-md-12">
	
	</div>
 <!-- <div class="col-md-12 white-bg pad1 mrg-btm">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />
 </div> -->
 <div class="col-md-12 white-bg pad">
 <h3 class="text-center loan-head">LOAN AGAINST Property</h3>
<div class="col-md-8"  id="mod">
<form name="lap_process_form" id="lap_process_form" action="{{URL::to('loan-submit')}}" method="POST" >
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="product" name="product_name" value=7>
	<div class="panel-group" id="accordion">
    <div class="panel panel-default">
    
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Property Information</a>
     <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
    
    
    

  <div class="col-md-12">
<center><div class="type-cover"><span>PROPERTY TYPE</span></div></center>
<?php
    if(isset($_GET['commercial'])){ ?>
      
    <?php }else{ ?>
      <div class="text-center flt-lft btn-grp" data-toggle="buttons">
              <div class="scenario">
                <div class="col-xs-4 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="residential"  class="radio1"  checked >RESIDENTIAL</a></div>
                <div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="commercial" class="radio1">COMMERCIAL</a></div>
                <div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="industrial" class="radio1">INDUSTRIAL</a></div>
                <div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="land" class="radio1">LAND</a></div>
                <div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="others" class="radio1">OTHERS</a></div>
                
                
              </div>
            </div> 
    <?php }

    ?>
            
            
            
            <div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control" id="property_cost" name="property_cost" placeholder="Property Cost" required onkeypress="return fnAllowNumeric(event)">
  </div>
  <div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)">
  </div>
  <div class="col-xs-4 form-padding">
     <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
  </div>
  
     </div>

   
  
     
     
    
    </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" >
        <h4 class="panel-title"> 
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span id="valid"></span> Applicant Details</a>
      <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse applicant_add">
        <div class="panel-body">
   
    <div class="col-xs-6 form-padding">
  
     <select class="block drop-arr select-sty" id="loan_tenure" name="loan_tenure">
    <option>LOAN TENURE</option>
      <option value="1">1 Year</option>
    <option value="2">2 Year</option>
    <option value="3">3 Year</option>
    <option value="4">4 Year</option>
    <option selected value="5">5 Year</option>
    <option value="6">6 Year</option>
    <option value="7">7 Year</option>
	</select>
  </div>
   
   
    <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="applicantname" placeholder="Applicant Name"  required>
  </div>
  
  <div class="col-xs-6 form-padding">
   <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" value="M" name="gender"  ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" value="F" name="gender" ><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
                        <input type="hidden" class="clr-blue"   name="emp_detail_id" value="1" >
                                    
           </div>      
     </div>
     
     <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate"  name="dob"  placeholder="Date of Birth" required>
  </div>
    <div class="col-xs-6 form-padding">
     <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" id="sala_DI" value="salaried" name="emp_detail"  > Salaried</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" id="self_DI" value="self-employed" name="emp_detail"  >Self-Emp</span>
 

         </div>
     </div>

     <div  style="display: none;" id="self-employed_ID">  <!-- self-employed-->
       
       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="turnover" placeholder="Annual turnover" required  onkeypress="return fnAllowNumeric(event)">
      </div>

       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="profit_after_tax" placeholder="Profit after tax" required  onkeypress="return fnAllowNumeric(event)">
      </div>
      <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="depreciation" placeholder="Depreciation"  required onkeypress="return fnAllowNumeric(event)">
      </div>
       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="remuneration" placeholder="Director Remuneration"  required onkeypress="return fnAllowNumeric(event)">
      </div>

     </div>

     
     <div class="col-xs-6 form-padding" id="income_ID">
     <input type="text" class="form-input-new form-control"  id="income" name="income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
  </div>
  
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"   name="obligation" placeholder="Exsisting EMI (If Any)" required onkeypress="return fnAllowNumeric(event)">
  </div>
    
    
    <!-- Rounded switch -->
	<div class="col-md-12 pad-no">
    <label class="switch"> <input type="checkbox" id="co_applicant_DI"><div class="slider round"><span class="co-applicant"> ADD CO-APPLICANT</span></div></label>
    </div>
    
    
    </div>
      </div>
    </div>
    <div class="panel panel-default" id="coapplicant_display" style="display: none;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Co-Applicant Details</a>
      <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
    
    <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicantname"  placeholder="Co-Applicant Name" required>
  </div>
  
  <div class="col-xs-6 form-padding">
   <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" name="cogender" value="M" ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" name="cogender" value="F"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>      
     </div>
     
     <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate" name="co_dob" placeholder="Date of Birth"  required>
  </div>
    <div class="col-xs-6 form-padding">
     <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" id="co_sala_DI" value="salaried"   name="co_emp_detail"  > Salared</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio"  id="co_self_DI" value="self-employed"  name="co_emp_detail"  >Self-Emp</span>
         </div>
     </div>


      <div  style="display: none;" id="co_self-employed_ID">  <!-- Co applicant self-employed-->
       
       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_turnover" placeholder="co-applicant annual turnover"  onkeypress="return fnAllowNumeric(event)" required>
      </div>

       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_profit_after_tax" placeholder="Co-Applicant profit after"  onkeypress="return fnAllowNumeric(event)" required>
      </div>
      <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_depreciation" placeholder="his/her depreciation" onkeypress="return fnAllowNumeric(event)" required>
      </div>
       <div class="col-xs-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_remuneration" placeholder="director remuneration"  onkeypress="return fnAllowNumeric(event)" required>
      </div>

     </div>
     
     <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_turnover" placeholder="Turnover/Topline"  onkeypress="return fnAllowNumeric(event)" required>
  </div>
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_profit_after_tax" placeholder="Profit After Tax"  required>
  </div>
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_depreciation" placeholder="Deprication"  required>
  </div>
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicant_remuneration" placeholder="Partner Remuneration"  required>
  </div>
  <div class="col-xs-6 form-padding" id="co_income_ID">
     <input type="text" class="form-input-new form-control"  name="co_applicant_income"  placeholder="Monthly Income" onkeypress="return fnAllowNumeric(event)" required>
  </div>
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="co_applicant_obligation" placeholder="All Existing EMI"   onkeypress="return fnAllowNumeric(event)" required>
  </div>
          
    </div>
      </div>
    </div>
<br>
    <?php if(Session::get('is_login')) {?>
                <?php if(Session::get('contact')!=''){ Session::get('contact'); ?>
              <button class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" >Get Best Quotes<i class="icon-arrow-right"></i></button>
              <?php }else{?> 
                <a  class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" data-toggle="modal" data-target="#contact_id">Get Best Quotes<i class="icon-arrow-right"></i></a>
                      <?php }?>
            <?php }else{?>
            <button  style="display:none" class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co">Get Best Quotes<i class="icon-arrow-right"></i></button>

              <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co1" data-toggle="modal" data-target="#login_process">Get Best Quotes<i class="icon-arrow-right"></i></a>
            <?php } ?>

             
             
  </div> 
  </form>
</div>



    <div class="col-md-4">
     <div class="border" id="mi_ID">

        <!--      <form class="" id="compareform" role="form" method="POST" action=""> -->
          
          
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
          <label class="form-label-new">Processing Fee </label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="" required class="clr-ddd" readonly />
            </div>
         <br>
        <div> 
          
         <a id="apply_new" type="button" class="btn btn-info" title="Experience New Digital Era In Loans">Apply Digitally</a>
         <button id="eligibility" class="btn btn-info" title="See Bankwise Eligibility And Apply Amongst Best Bank">Check Bankwise Eligibility</button>
         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
      <!-- </form> -->
    </div>  

    <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, we are unable to process your request. Will get back to you in future.</span></p> 
  </div>


<!--   <div id ="test123" class="col-md-8" ></div> -->
  </div>
  </aside>
 
  </div>

  <div  id="form_ID"></div>

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
    if(!$('#lap_process_form').valid()){
      $('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
            return false;
          }else{
               var property_cost=$('#property_cost').val();
               var obligation=$('#obligation').val();
      if(property_cost!='' && obligation!=''){
         $('#login_process').attr( 'id', 'login_process');

              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#lap_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){                   
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
                           var url = "apply-lead-online?qoutid="+quote+"&BankId="+Bank_id+"&product=7&processing_fee="+processingfee+"&loan_eligible="+loan_eligible+"&roi_type="+roi+"";
                             $("#apply_new").attr("href", url);
                             $('#mi_ID').show();
                             $('#err').hide();
                             // $(window).scrollTop($('#form_ID').offset().top-20);
                         }else{

                                $('#err').show();
                                $('#apply_new').hide();
                                $('#mi_ID').hide();
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