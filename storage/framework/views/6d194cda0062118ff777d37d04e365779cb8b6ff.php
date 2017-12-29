<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container ">
 <aside id="fh5co-hero">
	

 <br>
 <div class="col-md-12 white-bg pad box-shadow">
 <h1 class="text-center loan-head">Home Loan</h1>
<!--  <img src="<?php echo e(URL::to('images/info-g-ban.png')); ?>" alt="Tribe Logo" class="img-responsive" /> -->
<div class="col-md-8" id="mod">
<form name="home_loan_process_form" id="home_loan_process_form" action="<?php echo e(URL::to('loan-submit')); ?>" method="POST" >
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" id="product" name="product_name" value="12">
<input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
	<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Property Information <i class="icon-minus pull-right more-less"></i></a>
		
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
		
	  
	  

	<div class="col-md-12">
<center><div class="type-cover"><span>PROPERTY TYPE</span></div></center>
						
						<div class="text-center flt-lft btn-grp" data-toggle="buttons">
							<div class="scenario">
								<div class="col-xs-6 col-md-4 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="ready"  class="radio1"  checked >READY</a></div>
								<div class="col-xs-6 col-md-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="searching" class="radio1">SEARCHING</a></div>
								<div class="col-xs-7 col-md-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="underconst" class="radio1">UNDER-CONSTRUCTION</a></div>
								<div class="col-xs-5 col-md-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="resale" class="radio1">RESALE</a></div>
								<div class="col-xs-6 col-md-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" value="constuction" class="radio1">CONSTRUCTION</a></div>
								<div class="col-xs-6 col-md-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="propery_types" id="others" class="radio1">OTHER</a></div>
								
							</div>
						</div> 
						
						<div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control" id="property_cost" name="property_cost" placeholder="Property Cost" required onkeypress="return fnAllowNumeric(event)" minlength="6"   maxlength="9">
	</div>
	<div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Required" required onkeypress="return fnAllowNumeric(event)"   >
	</div>
	<div class="col-xs-12 col-md-4 form-padding">
     <input type="text" class="form-input-new form-control search_city" name='city_name' placeholder="Enter City" required >
	</div>
	
     </div>

	 
	
	   
	   
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" >
        <h4 class="panel-title"> 
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span id="valid"></span> Applicant Details<i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse applicant_add">
        <div class="panel-body">
		
		<div class="col-xs-12 col-md-6 form-padding">
  
     <select class="block drop-arr select-sty" name="loan_tenure" id="loan_tenure" required>
	  <option value="">Loan Tenure</option>
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
		<option selected value="20">20 Year</option>
    <option value="21">21 Year</option>
    <option value="22">22 Year</option>
    <option value="23">23 Year</option>
    <option value="24">24 Year</option>
    <option value="25">25 Year</option>
    <option value="26">26 Year</option>
    <option value="27">27 Year</option>
    <option value="28">28 Year</option>
    <option value="29">29 Year</option>
    <option value="30">30 Year</option>
	</select>
  </div>
		
		
		
    <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="applicantname" placeholder="Applicant Name"  required>
	</div>
	
	<div class="col-xs-12 col-md-6 form-padding">
	 <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" value="M" name="gender"  ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs"> Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" value="F" name="gender" ><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs"> Female</span>
                        <input type="hidden" class="clr-blue"   name="emp_detail_id" value="1" >
                                    
           </div>		   
	   </div>
	   
	   <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate"  name="dob"  placeholder="Date of Birth" required>
	</div>
		<div class="col-xs-12 col-md-6 form-padding">
     <div class="btn-grp form-control border-none pad-no" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" id="sala_DI" value="salaried" name="emp_detail"  >Salaried</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" id="self_DI" value="self-employed" name="emp_detail"  >Self-Emp</span>
 

         </div>
	   </div>

     <div  style="display: none;" id="self-employed_ID"> 
       
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="turnover" placeholder="Annual Turnover" required  onkeypress="return fnAllowNumeric(event)">
      </div>

       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="profit_after_tax" placeholder="Profit After Tax" required  onkeypress="return fnAllowNumeric(event)">
      </div>
      <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="depreciation" placeholder="Depreciation"  required onkeypress="return fnAllowNumeric(event)">
      </div>
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="remuneration" placeholder="Partner/Director Remuneration"  required onkeypress="return fnAllowNumeric(event)">
      </div>

     </div>

	   
	   <div class="col-xs-12 col-md-6 form-padding" id="income_ID">
     <input type="text" class="form-input-new form-control"  id="income" name="income"  placeholder="Monthly Income" required onkeypress="return fnAllowNumeric(event)">
	</div>
	
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control"   name="obligation" placeholder="Existing EMI (If Any)"  onkeypress="return fnAllowNumeric(event)"> 
	</div>
		
		
    <input type="hidden" class="co_applicant_DI" name="have_co_applicant" value="N">
		<!-- Rounded switch -->
		<div class="col-xs-12 form-padding">

		<label class="switch"> 
    <input type="checkbox"   id="co_applicant_DI"><div class="slider round">
    <span class="co-applicant"> ADD CO-APPLICANT</span></div></label>
		</div>
		
		
		</div>
      </div>
    </div>

    <div class="panel panel-default" id="coapplicant_display" style="display: none;">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Co-Applicant Details<i class="icon-plus pull-right more-less"></i></a>
		  
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		
		<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="co_applicantname"  placeholder="Co-Applicant Name" required>
	</div>
	
	<div class="col-xs-12 col-md-6 form-padding">
	 <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 active"><input type="radio" name="cogender" value="M" ><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-default outer-brd1 "><input type="radio" name="cogender" value="F"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>		   
	   </div>
	   
	   <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate" name="co_dob" placeholder="Date of Birth"  required>
	</div>
		<div class="col-xs-12 col-md-6 form-padding">
     <div class="btn-grp form-control pad-no border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" id="co_sala_DI" value="salaried"   name="co_emp_detail"  > Salaried</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio"  id="co_self_DI" value="self-employed"  name="co_emp_detail"  >Self-Emp</span>
         </div>
	   </div>


      <div  style="display: none;" id="co_self-employed_ID"> 
       
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_turnover" placeholder="Turnover"  onkeypress="return fnAllowNumeric(event)" required>
      </div>

       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_profit_after_tax" placeholder="Profit After Tax"  onkeypress="return fnAllowNumeric(event)" required>
      </div>
      <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_depreciation" placeholder="Depreciation" onkeypress="return fnAllowNumeric(event)" required>
      </div>
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="co_applicant_remuneration" placeholder="Partner/Director Remuneration"  onkeypress="return fnAllowNumeric(event)" required>
      </div>

     </div>
	   
	   <!-- <div class="col-xs-6 form-padding">
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
	</div> -->
	<div class="col-xs-12 col-md-6 form-padding" id="co_income_ID">
     <input type="text" class="form-input-new form-control"  name="co_applicant_income"  placeholder="Monthly Income" onkeypress="return fnAllowNumeric(event)" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="co_applicant_obligation" placeholder=" Existing EMI"   onkeypress="return fnAllowNumeric(event)">
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

						  <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID"   >Get Best Quotes<i class="icon-arrow-right"></i></a> 
						 
  </div> 
  <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
  </form>
</div>



		<div class="col-md-4 pad-no-res">
     <div class="border" id="mi_ID">

        <!--      <form class="" id="compareform" role="form" method="POST" action=""> -->
          
          <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, No quotes found for your given requirements.</span></p> 
          
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
          
         


           <?php if(Session::get('is_login')): ?>
           <a   type="button" class="btn btn-info disblk apply_new" title="Experience New Digital Era In Loans">Apply Digitally</a>
           <?php else: ?>
           <a   data-toggle="modal" data-target="#login_process" class="btn btn-info disblk apply_digitally " title="Experience New Digital Era In Loans">Apply Digitally</a>
           <?php endif; ?>    
 



         <button id="eligibility"  class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" disabled>Check Bankwise Eligibility </button>

         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         <div id="log_digital_text" style=" color: red"></div>
        </div>
      <!-- </form> -->
    </div>  

    <!-- <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block;text-align: center;">Sorry, No quotes found for your given requirements.</span></p>  -->
  </div>


<!-- 	 <div id ="test123" class="col-md-8" ></div> -->
	</div>
	</aside>
 
	</div>

	<div  id="form_ID"></div>
	  <div class="container">
  <div class="col-md-12 mrg-top white-bg pad1 box-shadow">
	 <hr>
	 <p>It will be a proud movement for you to buy your own home at your dream location, so don't wait just click and apply for a home loan. </p>
	 <p>Home loan is a type of secured loan which is offered by Banks and Non banking Financial Companies (NBFC) with lowest interest rates possible.
Bank or NBCF will have possession on all property paper and all type of presale documentation between buyer and seller till the successful completion of loan tenure.</p>

<h3>Who can apply for a Home loan ??</h3>
    <ul>
	   <li>Individual (salaried )</li>
	   <li>Self employed professionals (Doctors,Lawyers,Teachers,etc)</li>
	   <li>Businessman</li>
	</ul>
	<h3>Type of property bank and NBFC fund for ??</h3>
    <p>It should be registered and clearly identifiable whether the property is in under construction, fully constructed or Re-sale </p>

	    <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse100">Documents Required  </a>
      </h4>
    </div>
    <div id="collapse100" class="panel-collapse collapse">
      <div class="panel-body">
	  
	  <h3>Important parameters Banks look for :</h3>
	  <ul>
	     <li>Employment status.</li>
		 <li>Duration of current employment .</li>
		 <li>Credit history and credit score.</li>
	  </ul>
	  </div>
      
    </div>
    </div>
   </div>
	 </div>
	 </div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">

var getUrl=0;


$(document).ready(function(){
    $('#co_applicant_DI').change(function(){

      $('.co_applicant_DI').val('Y');
     
        if(this.checked)
           $('#coapplicant_display').show();
         // $('#co_applicant_DI').val('YES');
         else
         $('#coapplicant_display').hide();
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
    //	$('#valid').empty().append('<span class="icon-remove text-danger" id="tt2"></span>');
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
             url: "<?php echo e(URL::to('loan-submit')); ?>",
           data : $("#home_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){ 
              console.log(msg);
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
