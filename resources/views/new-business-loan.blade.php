@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div>
 <div class="col-md-12 white-bg mrg-btm">
 <img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div>
 <div class="col-md-12 white-bg pad">

 <div class="col-md-4">
  <div class="col-xs-12">
 <form name='business_loan_process_form' id='business_loan_process_form' action={{URL::to('loan-submit')}} method="POST">   
	 <input type="hidden" id="product" name="product_name" value="13">

	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Proprietor Ship</span></div></center>
      <span class="btn btn-default outer-brd active"><input type="radio" name="proprietor"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd"><input type="radio" name="proprietor"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd"><input  type="radio" name="proprietor"  value="Company" >Company</span>
      
      </div>
		</div>
		<div class="col-xs-12">
	   <div class="btn-grp pad status" data-toggle="buttons">
	   <center><div class="type-cover"><span>Business Type</span></div></center>
      <span class="btn btn-default circle outer-brd active"><input type="radio" name="emp_detail" value="Self Employed Non-Professional (SENP)">Self Employed Non-Professional (SENP)</span>
      <span class="btn btn-default circle outer-brd"><input type="radio" name="emp_detail" value="Self Employed Professional (SEP)">Self Employed Professional (SEP)</span>

      </div>
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
  
  
     <div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="company_name" id="company_name"  placeholder="Company Name"  onkeypress="return AllowAlphabet(event)" required=""  >
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control"  name="income_tax_paid" id="income_tax_paid" onkeypress="return isNumberKey(event)" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="turnover" id="turnover" placeholder="Turnover/Topline" onkeypress="return isNumberKey(event)" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="profit_after_tax" id="profit_after_tax" placeholder="Profit After Tax"  onkeypress="return isNumberKey(event)" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="depreciation" id="depreciation" placeholder="Depreciation" onkeypress="return isNumberKey(event)" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="text" class="form-input-new form-control" name="partner_remuneration" id="partner_remuneration" placeholder="Partner Remuneration" onkeypress="return isNumberKey(event)"  required="">
	</div>
	<div class="col-xs-6 form-padding"> 
     <input type="text" class="form-input-new form-control" name="interest_paid" id="interest_paid" placeholder="Interest Paid On Bank Loans" required="">
	</div>
	<div class="col-xs-6 form-padding"> 
     <input type="name" class="form-input-new form-control" placeholder="Existing All EMI" required="">
	</div>
	<div class="col-xs-6 form-padding"> 
     <input type="name" class="form-input-new form-control" placeholder="Bank" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="EMI" required="">
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
     <input type="name" class="form-input-new form-control" placeholder="Tenure" required="">
	</div>
 </div>
	<div class="col-md-4">
	<div class="panel-group" id="accordion">
	<div class="panel-default">
      <div id="collapse0" class="panel-collapse collapse in">
        <div class="panel-body">
		
	
	<div class="col-xs-8 form-padding pad">
	 <h4 class="mrg-top">Export/Import</h4>
	</div>
	<div class="col-xs-4 form-padding pad">
     <div class="btn-grp border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" name="Status" id="option1">Y</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" name="Status" id="option2">N</span>
         </div>
	</div>
	<div class="col-xs-8 form-padding pad">
	 <span>Has a Good Repayment track record in existing UBL / CC / OD ?</span>
	</div>
	<div class="col-xs-4 form-padding pad">
     <div class="btn-grp  border-none" data-toggle="buttons">
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" name="Status" id="option1">Y</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" name="Status" id="option2">N</span>
         </div>
	</div>
		</div>
      </div>
    </div>
	
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">NATURE OF BUSINESS <i class="icon-plus pull-right more-less"></i></a>
		
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
	  
	<div class="scenario">
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >MANUFACTURING</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">TRADING</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">SERVICES</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">RETAILER</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">OTHER</a></div>
								
							</div>
						
	   
	   
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">INDUSTRY <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario">
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >Type 1</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Type 2</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Type 3</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Type 4</a></div>
								
							</div>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">DATE OF INCORPORATION <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		  <div class="col-xs-12 form-padding">
     <input type="date" class="form-input-new form-control" placeholder="EXISTING ALL EMI" required="">
	</div>
		</div>
      </div>
    </div>
	
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">RESIDENCE TYPE <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario">
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >Owned</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Rented</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Parental</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Others</a></div>
								
							</div>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">OFFICE TYPE<i class="icon-plus pull-right more-less"></i></a>
		  
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario">
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >Owned</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Rented</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Parental</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Others</a></div>
								
							</div>
		</div>
      </div>
    </div>
  </div> 
  

   <button class="btn btn-primary btn-outline with-arrow top-mrg">Get Best Quotes<i class="icon-arrow-right"></i></button>
   </form>
	  	</div>

		<div class="col-md-4">
	   <div class="border">

             <form class="" id="compareform" role="form" method="POST" action="">
				  
				  
				    <div class="inp-hig">
					  <label class="form-label-new">Name</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="enter Name" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Mobile No.</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Mobile No." required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Pan No.</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Pan No." required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Loan Amount Required</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="5,00,000" required class="clr-ddd" />
				    </div>

			  <div> 
			    
			     <button style="display:block; width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">GET OTP</button>
				<br>
				<div class="inp-hig">
				      <input type="text" class="form-control" id="name" name="name" placeholder="ENTER OTP" required class="clr-ddd" />
				    </div>
				 <button style="width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">SUBMIT</button>
			   
			  </div>
			</form>
		</div>	
	</div>
	</div>
	</aside>
	</div>
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