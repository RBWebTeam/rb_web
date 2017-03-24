@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Edelweiss</h2>
	</div>

 <div class="col-md-12 white-bg pad">
 <div class="col-md-8">
 <img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />
 <div class="col-md-6">
  <div class="col-xs-12">
 
	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Proprietor Ship</span></div></center>
      <span class="btn btn-default outer-brd active"><input type="radio" name="Status" id="option1">Sole Proprietor</span>
      <span class="btn btn-default outer-brd"><input type="radio" name="Status" id="option2">Partnership</span>
      <span class="btn btn-default outer-brd"><input type="radio" name="Status" id="option3">Company</span>

      </div>
		</div>
		<div class="col-xs-12">
	   <div class="btn-grp pad status" data-toggle="buttons">
	   <center><div class="type-cover"><span>Business Type</span></div></center>
      <span class="btn btn-default circle outer-brd active"><input type="radio" name="Status" id="option1">Self Employed Non-Professional (SENP)</span>
      <span class="btn btn-default circle outer-brd"><input type="radio" name="Status" id="option2">Self Employed Professional (SEP)</span>

      </div>
		</div>
		
		<div class="loan-tenure">
									<center>
										<div class="type-cover">
											<span>Loan Tenure</span>
										</div>
									</center>
									<div class="text-center">
										<div class="scaling-slider">
											<img src="images/slider.png" class="img-responsive">
										</div>
									</div>
								</div>
     <div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Name of The company" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Income Tax Paid - Firm" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Turnover/Topline" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Profit After Tax" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Depreciation" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Partner Remuneration" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Interest Paid On Bank Loans" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Existing All EMI" required="">
	</div>
 </div>
	<div class="col-md-6">
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
     <div class="btn-grp border-none" data-toggle="buttons">
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
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">NATURE OF BUSINESS</a>
		 <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
							
	<div class="text-center flt-lft btn-grp" data-toggle="buttons">
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
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">INDUSTRY</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<div class="text-center flt-lft btn-grp" data-toggle="buttons">
							<div class="scenario">
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >Selection 1</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Selection 2</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Selection 3</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Selection 4</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">Selection 5</a></div>
							</div>
						</div>
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">DATE OF INCORPORATION</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		  <div class="col-xs-12 form-padding">
     <input type="date" class="form-input-new form-control" placeholder="EXISTING EMI IF ANY" required="">
	</div>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">RESIDENCE TYPE</a>
		  <i class="icon-plus pull-right more-less"></i>
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
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">OFFICE TYPE</a>
		  <i class="icon-plus pull-right more-less"></i>
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
	  	</div>
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
				   
				 <button style="width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">SUBMIT</button>
				  </div>
			   
			  </div>
			</form>
		</div>	
	</div>
	</div>
	</aside>
	</div>
@include('layout.footer')
@include('layout.script')