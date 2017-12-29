
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">

  
  <aside id="fh5co-hero">

 <!-- <div class="col-md-12 white-bg pad1 mrg-btm box-shadow">
<img src="<?php echo e(URL::to('images/9.png')); ?>" alt="Tribe Logo" class="img-responsive" />


 </div>
 <div class="col-md-12 white-bg pad box-shadow fl-lft" id="lowest">

</div> -->
<br>
 <div class="col-md-12 white-bg pad box-shadow fl-lft">
<h1 class="align-center loan-head">Personal Loan</h1>
  <!--   <div id ="test123" class="col-md-8"></div> -->
 
    <form name="personal_loan_process_form" id="personal_loan_process_form" action="#" method="POST" >
      <?php echo e(csrf_field()); ?>

      <input type="hidden" id="product" name="product_name" value=9>
      <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 
   <!--  <div id ="test123" class="col-md-8"></div> -->
  <div class="col-md-8"  id="mod">
 <!--  <h3 class="main-header">Genral Information</h3> -->
 <br>
<center><div class="type-cover"><span>PURPOSE OF LOAN</span></div></center>

<div class="text-center flt-lft btn-grp" data-toggle="buttons">
              <div class="scenario">
                <div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Marriage" class="radio1">Marriage</a></div>
                <div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Home Releted" class="radio1">Home Related</a></div>
                <div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Business" class="radio1">Business</a></div>
                <div class="col-xs-12 col-md-6 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="purpose"  value="Other" class="radio1" checked >Other</a></div>
              
                
              </div>
            </div> 




            
            <!-- <div class="col-xs-4 form-padding">
     <input type="text" name="custom_id" id="custom_id" class="form-input-new form-control" placeholder="Existing Custom Id if Any" onkeypress="return isNumberKey(event)" >
  </div> -->
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" name="loan_amount" id="loan_amount" class="form-input-new form-control" placeholder="Loan Required" onkeypress="return isNumberKey(event)" minlength="6" maxlength="9" required="">
  </div>
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" id="city_name" name="city_name" class="form-input-new form-control search_city" placeholder="City of Location" required="">
  </div>
  
  <div class="col-xs-12 col-md-6 form-padding">
  
     <select class="block drop-arr select-sty"  name="loan_tenure" id="loan_tenure" required>
    <option value="" >LOAN TENURE</option>
      <option value="1">1 Year</option>
    <option value="2">2 Year</option>
    <option value="3">3 Year</option>
    <option value="4">4 Year</option>
    <option value="5">5 Year</option>
    <option value="6">6 Year</option>
    <option value="7">7 Year</option>
  </select>
  </div>

                
                
                
  
     <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" name="applicant_name" id="applicant_name" class="form-input-new form-control" placeholder="Applicant Name" onkeypress="return AllowAlphabet(event)" required="">
  </div>
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" id="dob" name="dob" class="form-input-new form-control lastReporteddate1" placeholder="Date of Birth" required="">
  </div>
  <div class="col-xs-12 col-md-6 form-padding">
   <div class="btn-grp border-none pad-no form-control" data-toggle="buttons">
                                    <span class="btn btn-default outer-brd1 outer-brd1 active"><input type="radio" name="gender"  value="M" checked><img id="myImage" src="images/male.png" cla></span><span class="hidden-xs"> Male</span>
                                   <span class="btn btn-default outer-brd1 outer-brd1 "><input type="radio" name="gender"  value="F"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>      
     </div>

  
  <div class="col-xs-12 col-md-6 form-padding">
     <div class="btn-grp form-control border-none pad-no" data-toggle="buttons">
      <span class="btn btn-default outer-brd active"><input type="radio" name="emp_detail_id" id="sala_DI"    value="1" checked>Salaried</span>
      <span class="btn btn-default outer-brd "><input type="radio" name="emp_detail_id" id="self_DI"  value="2"> Self-Emp</span>
         </div>
     </div>

     <div  style="display: none;" id="self-employed_ID">  <!-- self-employed-->
       
       <div class="col-xs-12 col-md-6 form-padding">
          <input type="text" class="form-input-new form-control " name="turnover" placeholder="Annual income" required  onkeypress="return fnAllowNumeric(event)">
      </div>
      </div>
     
     <div class="col-xs-12 col-md-6 form-padding"  id="income_ID">
     <input type="text" name="income" id="income" class="form-input-new form-control"  onkeypress="return isNumberKey(event)"  placeholder="Monthly Income" required="">
  </div>
  
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" name="obligation" id="obligation" class="form-input-new form-control" placeholder="Existing EMI (If Any)" onkeypress="return isNumberKey(event)" >
  </div>
  
  <div class="col-md-12 fl-lft">

 
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


             <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID"   >Get Best Quotes<i class="icon-arrow-right mrg-btm"></i></a> 

 
      </div>
      <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
      </form>
	  
	 
     </div>
	 
	 
	 
	 
     <div class="col-md-4" >
     <div class="border brd-for hei-frtrt" id="mi_id">

             <!-- <form name="compareform" id="compareform" > -->
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
          <label class="form-label-new">Processing Fee</label>
              <input type="text" class="form-control" id="processfee" name="name" placeholder="" required class="clr-ddd" readonly />
            </div>
         <br>
        <div class="col-md-12 pad-no"> 
          
      <!--    <a id="apply_new" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a> -->

          <?php if(Session::get('is_login')): ?>
           <a   type="button" class="btn btn-info disblk apply_new" title="Experience New Digital Era In Loans">Apply Digitally</a>
           <?php else: ?>
           <a   data-toggle="modal" data-target="#login_process" class="btn btn-info disblk apply_digitally " title="Experience New Digital Era In Loans">Apply Digitally</a>
           <?php endif; ?>    
 

         <button id="eligibility"  class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" disabled="" >Check Bankwise Eligibility</button>
         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         <div id="log_digital_text" style=" color: red"></div>
        </div>
       
       

    </div> 

    <!-- <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, no quotes found for your given requirements.</span></p>  -->

     
  </div> 
 
   </aside>
   
  </div>
  
  
  <br>
  <div id ="test123"></div>
  <div class="container">
  <div class="col-md-12 mrg-top white-bg pad1 box-shadow">
	 <hr>
	 <p>Dreaming to Enjoy Vacation in foreign country, A Royal Wedding plan, Renovation of your house.... Here we have Personal Loan to make your dreams true. A Personal Loan is a Short Term Unsecured Loan for 1 to 5 years which helps individual to make their dream true by fulfilling their needs. Personal Loan can be disburse within 48 hours as well.</p>
	    <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Documents Required  </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
	  
	  
	  <ul>
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
	 <br>
  <?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
 
  </div>


<script type="text/javascript">
$(document).ready(function(){
    src = "<?php echo e(route('searchajax')); ?>";
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

$(".btn-primary").click(function(e){
   e.preventDefault();
  




    if(!$('#personal_loan_process_form').valid()){

    
            return false;
           
          }else{
 $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "<?php echo e(URL::to('loan-submit')); ?>",
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