<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
	
	<aside id="fh5co-hero">
	<!-- <div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div> -->
 <br>
 <div class="col-md-12 white-bg pad box-shadow">
 <h3 class="text-center loan-head">Unsecured Business Loan</h3>
<div class="col-md-8" id="mod">
<form name='edelweiss_process_form' id='edelweiss_process_form' action=<?php echo e(URL::to('loan-submit')); ?> method="POST">
<?php echo e(csrf_field()); ?>  
 <!-- <img src="<?php echo e(URL::to('images/9.png')); ?>" alt="Tribe Logo" class="img-responsive" /> -->
 <div class="col-md-6">
  <div class="col-xs-12 pad-no">
  
	 <input type="hidden" id="product" name="product_name" value="13">
    <input type="hidden" id="Bank_Id" name="Bank_Id" value="15">
	 
	 <input type="hidden" name="empid" class="empid" value=" <?php echo Session::get('empid')?Session::get('empid'):'';?>">
          <input type="hidden" name="brokerid" class="brokerid" value="<?php echo Session::get('brokerid')?Session::get('brokerid'):'';?>">
          <input type="hidden" name="source" class="source" value="<?php echo Session::get('source')?Session::get('source'):'';?>"> 
          <input type="hidden" name="refapp" class="refapp" value="<?php echo Session::get('refid')?Session::get('refid'):'';?>"> 

	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Company Type</span></div></center>
      <span class="btn btn-default outer-brd mob-blk-dv active"><input type="radio" name="proprietor"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input type="radio" name="proprietor"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input  type="radio" name="proprietor"  value="Company" >Company</span>
      
      </div>
		</div>
		<div class="col-xs-12 pad-no">
	   <div class="btn-grp pad status" data-toggle="buttons">
	   <center><div class="type-cover"><span>Business Type</span></div></center>
      <span class="btn btn-default circle outer-brd active"><input type="radio" name="emp_detail" value="2">Self Employed Non-Professional (SENP)</span>
      <span class="btn btn-default circle outer-brd"><input type="radio" name="emp_detail" value="2">Self Employed Professional (SEP)</span>

      </div>
		</div>
		
		<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" minlength="6" maxlength="9" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
	
     <input class="form-input-new form-control" type="text" id="pan_no" name="pan_no" oninput="pan_card('pan_no')"  placeholder="Pan No" required>
	 <span id="pan_number"  style="display:none;color: red;font-size:12px;">Enter Valid Pan No.</span>
     
	</div>
  <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate1" name="applicant_dob" id="applicant_dob" placeholder="Date Of Birth"   required>
  </div>

  <div class="col-xs-12 col-md-6 form-padding" >
  
     <select class="block drop-arr select-sty"  name="loan_tenure" id="loan_tenure" required>
	  <option value="">Loan Tenure</option>
	  <option value="1">1 Year</option>
		<option value="2">2 Year</option>
		<option value="3">3 Year</option>
		<option value="4">4 Year</option>
		<option value="5">5 Year</option>
	</select>
  </div>
  
  

  
  
  <div class="col-md-12 pad-no comp-fin">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                        <i class="icon-plus more-less pull-right"></i>
                        COMPANY FINANCIALS
                    </a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="panel-body">
                     
					 <div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="company_name" id="company_name"  placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required  >

	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="income_tax_paid" id="income_tax_paid" onkeypress="return isNumberKey(event)" required="" placeholder="Income Tax Paid - Firm">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="turnover" id="turnover" placeholder="Turnover/Topline" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="profit_after_tax" id="profit_after_tax" placeholder="Profit After Tax"  onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="depreciation" id="depreciation" placeholder="Depreciation" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="partner_remuneration" id="partner_remuneration" placeholder="Partner Remuneration" 
     onkeypress="return isNumberKey(event)"  required>
	</div>

			
<div class="col-xs-12 col-md-6 form-padding"> 
     <input type="name" class="form-input-new form-control" placeholder="Interest Paid On Loan" step="0.01" min="0" name="interest_paid" id="interest_paid" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding"> 

     <input type="text" class="form-input-new form-control" name="existing_emi" id="existing_emi" placeholder="Existing All EMI" onkeypress="return isNumberKey(event)"  required>

	</div>			
					 
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading7">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        <i class="icon-plus more-less pull-right"></i>
                        BANKWISE EMI DETAILS 
                    </a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
<div class="panel-body">
<div>

<h4 class="text-center">List of Loan EMI</h4>
<div class="add_new_content">
        <div class="col-xs-12 col-md-6 form-padding"> 

     <input type="text" class="form-input-new form-control" name="bank_name" id="bank_name" placeholder="Bank" onkeypress="return AllowAlphabet(event)" value=""   required="">

     
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="emi" id="emi" placeholder="EMI"  onkeypress="return isNumberKey(event)" value="" required>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
	 <select class="form-input-new form-control">
	 <option>Select Loan</option>
	     <option>Home Loan</option>
		 <option>Property Loan</option>
		 <option>Unsecured Business Loan</option>
		 <option>Car Loan</option>
		 <option>Term Loan</option>
		 <option>OD/CC</option>
		 <option>Others</option>
	 </select>
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="text" class="form-input-new form-control" name="no_of_emi_paid" id="no_of_emi_paid" placeholder="No Of EMI Paid"  onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" required value="">
	</div>
	
  </div>
  

  <div><input type="button" class=" btn btn-info add_new_box" value="Add Bank" 
  > &nbsp;<input type="button"  class="btn btn-info remove_new_box" value="Remove" >
  </div>


	

  
<!-- <a href="javascript:void(0)" class="btn btn-info" id="button" va >Add Bank</a>
 <a href="javascript:void(0)" class="btn btn-info" id="button_remove" >Remove</a> -->
  

	</div>
	</div>
	
     </div>
        </div>
    </div><!-- panel-group -->


  </div>
 </div>
 
 
	<div class="col-md-6 no-pad flt-lft" style="display:inline-table;">
	<div class="panel-group" id="accordion1">
	<div class="panel-default">
      <div id="collapse0" class="panel-collapse collapse in">
  <div class="panel-body">
		
	
	<div class="col-xs-8 form-padding pad-no">
	 <h4 class="mrg-top">Export/Import</h4>
	</div>
	<div class="col-xs-4 form-padding pad">
     <div class="btn-grp border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" name="exchange" value="Y">Y</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" name="exchange" value="N">N</span>
	  <select class="pull-right btn-default outer-brd btn-blu pad-ten">
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
	</div>

	<div class="col-xs-8 form-padding">
	 <span>Has a Good Repayment track record in existing UBL /CC/OD?</span>
	</div>
	<div class="col-xs-4 form-padding pad">
     <div class="btn-grp  border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" name="repayment_track" value="Y">Y</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" name="repayment_track" value="N">N</span>
         </div>
	</div>
</div>
		
		
      </div>
    </div>
	
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">NATURE OF BUSINESS <i class="icon-plus pull-right more-less"></i></a>
		
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
	<div class="scenario">

                                
                                <div class="col-xs-12 col-md-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="alertme('Manufacturing')">
								Manufacturing</a></div>

								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Auto Trading')">Trading </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Services')">Services</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Retailer')">Retailer</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Others')">Others</a></div>

								<input type="hidden" name="nature_of_business" id="nature_of_business">

								
							
							</div>

		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">INDUSTRY <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body sec">
		<select class="drop-arr" name="industry_name" id="industry_name">
		<option>-- Select Industry Type --</option>
		   <option>Agriculture</option>
		   <option>Auto Components</option>
		   <option>Automobiles</option>
		   <option>Aviation</option>
		   <option>Banking</option>
		   <option>Biotechnology </option>
		  <option>Cement</option>
		<option>Consumer Markets</option>
		<option>Education And Training</option>
         <option>Engineering</option>
           <option>Financial Services</option>
		<option>Food Industry</option>
		<option>Gems And Jewellery</option>
		<option>Healthcare</option>
		<option>Infrastructure</option>
		<option>Insurance</option>
		<option>IT & ITeS</option>
		<option>Manufacturing</option>
		<option>Marketing And Strategy</option>
		<option>Media And Entertainment</option>
		<option>Oil And Gas</option>
        <option>Pharmaceuticals</option>
		<option>Ports </option>
		<option>Power</option>
		<option>Railways</option>
		<option>Real Estate</option>
		<option>Research And Development</option>
		<option>Retail</option>
		<option>Roads</option>
		<option>Rural Market</option>
		<option>Science And Technology</option>
		<option>Semiconductor</option>
		<option>Services</option>
		<option>Steel</option>
		<option>Telecommunications</option>
		<option>Textiles</option>
		<option>Tourism And Hospitality</option>

		</select>
		    
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">COMPANY'S DATE OF INCORPORATION <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		  <div class="col-xs-12 form-padding">
     <input type="text" id="date" name="date" class="form-input-new form-control lastReporteddate1" placeholder="Date Of Incorporation" required>
	</div>
		</div>
      </div>
    </div>
	
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">RESIDENCE TYPE <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario2">
								

								<div class="col-xs-12 col-md-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="alert('Owned')">
								Owned</a></div>

								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alert('Rented')">Rented </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alert('Parental')">Parental</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="alert('Others')">Others</a></div>
								
								<input type="hidden" name="residence_type" id="residence_type">
								
								
							</div>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion1" href="#collapse5">OFFICE TYPE<i class="icon-plus pull-right more-less"></i></a>
		  
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario3">
								<div class="col-xs-12 col-md-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="call('Owned')">
								Owned</a></div>

								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="call('Rented')">Rented </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="call('Parental')">Parental</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn" onclick="call('Others')">Others</a></div>
								
								<input type="hidden" name="office_type" id="office_type">
								
							</div>
		</div>
      </div>
    </div>
  </div> 
   
   <div class="valid_ID"></div>
 

 <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_ID" id="btn_refresh_co1" >Get Best Quotes<i class="icon-arrow-right"></i></a>  


   </form>
   <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
</div>
</div>
		
	
	<div class="col-md-4" >
     <div class="border brd-for" id="mi_id">

            
           <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, No quotes found for your given requirements.</span></p> 
           
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
          <br>
         <a id="apply_new" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a>
         <button id="eligibility" class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank" disabled>Check Bankwise Eligibility</button>
         <button type="button" class="btn btn-info block call_rm"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
        
     
    </div> 
  </div> 
	
	
	
	
	</div>
	</aside>
	</div>
	<br>
   <div id ="test123"></div>
   
     <div class="container">
  <div class="col-md-12 mrg-top white-bg pad1 box-shadow">
	 <hr>
	 <p>Funds require to manage day to day operations of your business???......funds require to expand your business?? …...fund requirement is a most important factor for any business to run smoothly.....here is a Rupeeboss to understand your needs deeply,and make funds available for you to your doorstep.</p>
	 <p>Business loan fulfills any kind of  business needs. It is a type of short term unsecured loan for 3 to 5 year of repayment period. Business loan can be easily sanction in minimum 7 working days.</p>
	    <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse102">Documents Required  </a>
      </h4>
    </div>
    <div id="collapse102" class="panel-collapse collapse">
      <div class="panel-body">
	  
	  
	  <ul>
	     <li>Proof of Identity / address proof.(business as well as All directors)</li>
		 <li>Memorandum of association & article of association ,certificate of commencement of business</li>
		 <li>Bank statements (business as well as Director)</li>
		 <li>Require Income tax return file (ITR) along with Computation of income ,B/S&P/L accounts for last 3 year. It should be audited and certified by CA</li>
		 <li>Proof of continuation: Trade license /Establishment /Sales Tax certificate </li>
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


function callme(test){
	//alert($(this).closest("radio").attr('value'));
	$('#industry_name').val(test);
	
//		alert(test);
}


</script>



 

<script type="text/javascript">
$(".product_ID").click(function(e){
   e.preventDefault();
 

    if(!$('#edelweiss_process_form').valid()){

  
            return false;
           
          }else{
          	   var company_name=$('#company_name').val();
               var bank_name=$('#bank_name').val();
              
      if(company_name!='' && bank_name!=''){
         $('#login_process').attr( 'id', 'login_process');
         $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "<?php echo e(URL::to('loan-submit')); ?>",
           data : $("#edelweiss_process_form").serialize(),
        
             success: function(msg){
            //  console.log(msg);
                    $(".iframeloading").hide();
                           if(msg.success ==true){

                            var quote=msg.quote;

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
                     // var url = "apply-lead-online?appid=0&qoutid="+quote+"&BankId="+Bank_id+"&product=13&processing_fee="+processingfee+"&loanamout="+loan_eligible+"&roi_type="+roi+"";
                     var url="thank-you";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();
                      $('#apply_new').show();
                      $('#mi_id').show();
                       $('#eligibility').prop('disabled',false);
                              
                       // $(window).scrollTop($('#lowest').offset().top-50);

                   }else{
                   	$('#eligibility').prop('disabled', true);
                                getUrl='';
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
          else{
 $('#login_process').removeAttr('id');
 $('.valid_ID').empty().append('<div style=" color: red" >Please Fill All Inputs</div>');
  
}
}


});
</script>



<script type="text/javascript">
$("#eligibility").click(function() {
  $(window).scrollTop($('#test123').offset().top-20);
});
</script>





<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear()  ;
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

	function alertme(test){
	$('#nature_of_business').val(test);}


function alert(test){
	$('#residence_type').val(test);
}


	function call(test){
	$('#office_type').val(test);
}


</script>
 

<!-- <script type="text/javascript">
	$(document).ready(function(){
    
     $(".add_new_box").click(function(){
    
     $('.add_new_content:last').clone()
                          .find("input:text").val("").end()
                          .appendTo('.add_new_content:last');
    
    });
    
    });
</script>
 -->



<!-- <script>
$(document).ready(function(){
     
    $(".remove_new_box").click(function() {
    if($(".add_new_content").length!=1)
    $(".add_new_content:last").remove();
    });
});

</script>
 -->