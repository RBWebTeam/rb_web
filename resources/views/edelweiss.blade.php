@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<!-- <div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div> -->
 <br>
 <div class="col-md-12 white-bg pad box-shadow">
 <h3 class="text-center loan-head">Unsecured Edelweiss Loan</h3>
<div class="col-md-8" id="mod">
<form name='edelweiss_process_form' id='edelweiss_process_form' action={{URL::to('loan-submit')}} method="POST">
{{ csrf_field() }}  
 <!-- <img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" /> -->
 <div class="col-md-6">
  <div class="col-xs-12 pad-no">
  
	 <input type="hidden" id="product" name="product_name" value="13">
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
		
	



	
  
  
		<div class="col-xs-12 form-padding">
  
     <select class="block drop-arr select-sty" name="loan_tenure" id="loan_tenure" required>
	  <option>LOAN TENURE</option>
	    <option>1 Year</option>
		<option>2 Year</option>
		<option>3 Year</option>
		<option>4 Year</option>
		<option>5 Year</option>
		<option>6 Year</option>
		<option>7 Year</option>
	</select>
  </div>
  
     <div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control"  name="company_name" id="company_name" placeholder="Name of The company" required="" onkeypress="return AllowAlphabet(event)">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" name="income_tax_paid" id="income_tax_paid"  placeholder="Income Tax Paid - Firm" required="" onkeypress="return isNumberKey(event)">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" name="turnover" id="turnover" placeholder="Turnover/Topline" required="" onkeypress="return isNumberKey(event)" >
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" name="profit_after_tax" id="profit_after_tax"  placeholder="Profit After Tax" required=""  onkeypress="return isNumberKey(event)" >
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Depreciation" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" name="depreciation" id="depreciation" placeholder="Partner Remuneration" required="" onkeypress="return isNumberKey(event)">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control"  name="interest_paid" id="interest_paid" onkeypress="return isNumberKey(event)"  placeholder="Interest Paid On Bank Loans" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" name="existing_emi" id="existing_emi" placeholder="Existing All EMI" required=""  onkeypress="return isNumberKey(event)">
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
	  <select class="pull-right btn-default outer-brd btn-blu pad-ten" required>
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

								<input type="hidden" name="nature_of_business" id="nature_of_business" value="Manufacturing">

								
							
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
		<select class="drop-arr" name="industry_name" id="industry_name" required>
		<option>Select Industry Type</option>
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
								
								<input type="hidden" name="residence_type" id="residence_type" value="Owned">
								
								
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
								
								<input type="hidden" name="office_type" id="office_type" value="Owned">
								
							</div>
		</div>
      </div>
    </div>
  </div> 
   
   <div class="valid_ID"></div>

  

 <a class="btn btn-primary btn-outline with-arrow top-mrg product_name product_edel" id="btn_refresh_co1" >Get Best Quotes<i class="icon-arrow-right"></i></a>  


   </form>
   <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
</div>
</div>
		
	
	<div class="col-md-4" >
     <div class="border brd-for" id="mi_id">

             <!-- <form name="compareform" id="compareform" > -->
          
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
        
        <!-- <p id="err" style="display:none;" ><span style="color:skyblue;position:absolute;font-size:13px;">No Quotes Found.</span></p> -->
   
    <!--   </form> -->

    </div> 
   <!--  <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, No quotes found for your given requirements.</span></p>  -->
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
  
@include('layout.footer')
@include('layout.script')

<script type="text/javascript"> 
 
  function AllowAlphabet(e){
  isIE = document.all ? 1 : 0
  keyEntry = !isIE ? e.which : event.keyCode;
  if (((keyEntry >= '65') && (keyEntry <= '90')) || ((keyEntry >= '97') && (keyEntry <= '122')) || (keyEntry == '46') || (keyEntry == '32') || keyEntry == '45')
     return true;
  else
{
    
    return false;
      }
}

 	


$(".product_edel").click(function(e){
   e.preventDefault();
 
    if(!$('#edelweiss_process_form').valid()){
            return false;
          }else{
          	var company_name=$('#company_name').val();
            var date=$('#date').val();
            var industry_name=   $('#industry_name').val();   
            var var_name='';
               if("Select Industry Type"==industry_name){}else{var_name='1';}

      if(company_name!='' && date!='' && var_name!=''){
             $('#login_process').attr( 'id', 'login_process');
             $(".iframeloading").show();
             $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
             data : $("#edelweiss_process_form").serialize(),
             success: function(msg){
         	   	
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
                      
                     var url="thank-you";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();
                      $('#apply_new').show();
                      $('#mi_id').show();
                       $('#eligibility').prop('disabled',false);
                              
                       
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
                     
                      
                    }
                   
                  
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



	function alertme(test){
	$('#nature_of_business').val(test);}


function alert(test){
	$('#residence_type').val(test);
}


	function call(test){
	$('#office_type').val(test);
}
</script>



 
 
 
 