@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<!-- <div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div> -->
 
 <div class="col-md-12 white-bg pad">
 <h3 class="text-center loan-head">Unsecured Business Loan</h3>
<div class="col-md-8" id="mod">
<form name='business_loan_process_form' id='business_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
{{ csrf_field() }}  
 <!-- <img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" /> -->
 <div class="col-md-6">
  <div class="col-xs-12">
  
	 <input type="hidden" id="product" name="product_name" value="13">

	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Proprietorship</span></div></center>
      <span class="btn btn-default outer-brd active"><input type="radio" name="proprietor"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd"><input type="radio" name="proprietor"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd"><input  type="radio" name="proprietor"  value="Company" >Company</span>
      
      </div>
		</div>
		<div class="col-xs-12">
	   <div class="btn-grp pad status" data-toggle="buttons">
	   <center><div class="type-cover"><span>Business Type</span></div></center>
      <span class="btn btn-default circle outer-brd active"><input type="radio" name="emp_detail" value="1">Self Employed Non-Professional (SENP)</span>
      <span class="btn btn-default circle outer-brd"><input type="radio" name="emp_detail" value="2">Self Employed Professional (SEP)</span>

      </div>
		</div>
		
		<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  required>
	</div>
	<div class="col-xs-6 form-padding">
     <input class="form-input-new form-control" type="text" id="pan_no" name="pan_no" oninput="pan_card('pan_no')" maxlength="10" minlength="10"  placeholder="Pan No" required>
     <div id="pan_number" style="display:none;color: red;">Oops.Please Enter Valid Pan Number.!!</div>
	</div>
  <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control lastReporteddate1" name="applicant_dob" id="applicant_dob" placeholder="Date Of Birth"   required>
  </div>

  <div class="col-xs-6 form-padding">
  
     <select class="block drop-arr select-sty" id="loan_tenure" name="loan_tenure">
	  <option>LOAN TENURE</option>
	  <option value="1">1 Year</option>
		<option value="2">2 Year</option>
		<option value="3">3 Year</option>
		<option value="4">4 Year</option>
		<option selected="5" value="5">5 Year</option>
	</select>
  </div>
  
  

  
  
  <div class="col-md-12 no-pad comp-fin">
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
                     
					 <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="company_name" id="company_name"  placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required  >

	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="income_tax_paid" id="income_tax_paid" onkeypress="return isNumberKey(event)" required="" placeholder="Income Tax Paid - Firm">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="turnover" id="turnover" placeholder="Turnover/Topline" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="profit_after_tax" id="profit_after_tax" placeholder="Profit After Tax"  onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="depreciation" id="depreciation" placeholder="Depreciation" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="partner_remuneration" id="partner_remuneration" placeholder="Partner Remuneration" 
     onkeypress="return isNumberKey(event)"  required>
	</div>

			
<div class="col-xs-6 form-padding"> 
     <input type="name" class="form-input-new form-control" placeholder="Interest Paid On Bank Loans" step="0.01" min="0" name="interest_paid" id="interest_paid" onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-6 form-padding"> 

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
<div id="emp_detail">
                    <div class="col-xs-6 form-padding"> 

     <input type="text" class="form-input-new form-control" name="bank_name" id="bank_name" placeholder="Bank" onkeypress="return AllowAlphabet(event)"   required="">

     
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="emi" id="emi" placeholder="EMI"  onkeypress="return isNumberKey(event)" required>
	</div>
	<div class="col-xs-6 form-padding">
	 <select class="form-input-new form-control">
	     <option>Home Loan</option>
		 <option>Property Loan</option>
		 <option>Unsecured Business Loan</option>
		 <option>Car Loan</option>
		 <option>Term Loan</option>
		 <option>OD/CC</option>
		 <option>Others</option>
	 </select>
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="no_of_emi_paid" id="no_of_emi_paid" placeholder="No Of EMI Paid"  onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" required>
	</div>
	
  </div>
	<!-- <button class="btn btn-primary btn-outline top-mrg">Add Other Bank Existing EMI</button> -->
  <div id="new_div"></div>

  
<a href="javascript:void(0)" class="btn btn-info" id="button" >Add Bank</a>
 <a href="javascript:void(0)" class="btn btn-info" id="button_remove" >Remove</a>

<!-- <div id="duplicater"> 
    duplicate EVERYTHING INSIDE THIS DIV
</div> -->

	</div>
	
					
                </div>
            </div>
        </div>
        
        
    </div><!-- panel-group -->
  </div>
  
  

	
	
 </div>
	<div class="col-md-6 no-pad">
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
         </div>
	</div>
	<div class="col-xs-8 form-padding">
	 <span>Has a Good Repayment track record in existing UBL / CC / OD ?</span>
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
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="natue_of_business" value="Manufacturing" class="radio1"  >MANUFACTURING</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="natue_of_business" value="Trading" class="radio1">TRADING</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="natue_of_business" value="Services" class="radio1">SERVICES</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="natue_of_business" value="Retailer" class="radio1">RETAILER</a></div>
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="natue_of_business" 
								value="Others" class="radio1" checked>OTHER</a></div>
								
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
        <div class="panel-body">
		   <div class="scenario">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_1"  class="radio1" checked >Agriculture </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_2" class="radio1">Auto Components </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_3" class="radio1">Automobiles</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Aviation</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Banking</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Biotechnology </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Cement</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Consumer Markets</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Education And Training </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Engineering</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Financial Services</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Food Industry</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Gems And Jewellery </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Healthcare</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Infrastructure</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Insurance </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">IT & ITeS</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Manufacturing</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Marketing And Strategy</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Media And Entertainment </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Oil And Gas</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Pharmaceuticals</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Ports</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Power</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Railways</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Real Estate</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Research And Development</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Retail</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Roads</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Rural Market </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Science And Technology </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Semiconductor</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Services</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Steel </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Telecommunications </a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Textiles</a></div>
								<div class="col-xs-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Tourism And Hospitality </a></div>
								
							</div>
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
     <input type="text" id="date" name="date" class="form-input-new form-control lastReporteddate1" placeholder="Date of incorporation" required>
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
		   <div class="scenario">
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="residence_type" value="Owned"  class="radio1" checked >Owned</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="residence_type" value="Rented"  class="radio1">Rented</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="residence_type" value="Parental"  class="radio1">Parental</a></div>
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="residence_type" value="Others"  class="radio1">Others</a></div>
								
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
		   <div class="scenario">
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="office_type" value="Owned"  class="radio1" checked >Owned</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="office_type" value="Rented" class="radio1">Rented</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="office_type" value="Parental"class="radio1">Parental</a></div>
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="office_type" value="Others" class="radio1">Others</a></div>
								
							</div>
		</div>
      </div>
    </div>
  </div> 
  

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
   </form>
   <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="{{URL::to('images/ajaxloader.gif')}}" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
</div>
</div>
		
	
	<div class="col-md-4" >
     <div class="border brd-for" id="mi_id">

             <!-- <form name="compareform" id="compareform" > -->
          
          
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
         <a id="apply_new" type="button" class="btn btn-info" title="Experience New Digital Era In Loans">Apply Digitally</a>
         <button id="eligibility" class="btn btn-info" title="See Bankwise Eligibility And Apply Amongst Best Bank">Check Bankwise Eligibility</button>
         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
        
        <!-- <p id="err" style="display:none;" ><span style="color:skyblue;position:absolute;font-size:13px;">No Quotes Found.</span></p> -->
   
    <!--   </form> -->

    </div> 
    <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, We are unable to process your request. Will get back to you in future.</span></p> 
  </div> 
	
	
	
	
	</div>
	</aside>
	</div>
	<br>
   <div id ="test123" class="col-md-8"></div>
  
@include('layout.footer')
@include('layout.script')

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
	function pan_card(obj,val){
		console.log(obj);
		if(obj=='pan_no' ){
                   var str =$('#pan_no').val();
                   var pancardPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
                   var res = str.match(pancardPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                     	$('#pan_number').hide();

                  }else{
                  	// console.log('Oops.Please Enter Valid Pan Number.!!');
                  	$('#pan_number').show();

                  	return false;
                  }
                  
	}
}
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
$(".btn-primary").click(function(e){
   e.preventDefault();
  




    if(!$('#business_loan_process_form').valid()){

    
            return false;
           
          }else{
 $(".iframeloading").show();
              $.ajax({  
             type: "POST",  
             url: "{{URL::to('loan-submit')}}",
           data : $("#business_loan_process_form").serialize(),
        //   data: {_token :_token,username:username,password:password},
             success: function(msg){
              console.log(msg);
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
                     var url = "apply-lead-online?appid=0&qoutid="+quote+"&BankId="+Bank_id+"&product=13&processing_fee="+processingfee+"&loanamout="+loan_eligible+"&roi_type="+roi+"";
                     $("#apply_new").attr("href", url);
                      $('#err').hide();
                      $('#apply_new').show();
                      $('#mi_id').show();
                       $(window).scrollTop($('#lowest').offset().top-50);

                   }else{
                     $('#err').show();
                     $('#apply_new').hide();
                      $("#test123").empty();
                       $('#mi_id').hide();
                      
                    }
                     // $(window).scrollTop($('#test123').offset().top-20);
                  
                  }

                             
                        
                    }  
                  });

          }


});



</script>

<script>
$(document).ready(function(){
    $("#button").click(function(){
        $("#emp_detail").clone().appendTo("#new_div");
    });

    
});
</script>

<script>
$(document).ready(function(){
    $('#button_remove').click(function(){
        $('#new_div').css('display','none');
});

    
});
</script>

<script type="text/javascript">
$("#eligibility").click(function() {
  $(window).scrollTop($('#test123').offset().top-20);
});



</script>