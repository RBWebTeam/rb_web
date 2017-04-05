@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">

 <div class="col-md-12 white-bg pad">
 <h2 class="align-center loan-head">Edelweiss</h2>
 <!-- <img src="{{URL::to('images/Loan-Image-Sliding.gif')}}" alt="Tribe Logo" class="pull-left img-responsive" /> -->
 <div class="col-md-8">
 
 <div class="col-md-6">
  <div class="col-xs-12">
 
	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Proprietorship</span></div></center>
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
		
		
		<div class="col-xs-12 form-padding mrg-btm">
  
     <select class="block drop-arr select-sty">
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
     <input type="name" class="form-input-new form-control" placeholder="Name of The company" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Income Tax Paid - Firm" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Turnover/Topline" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Profit After Tax" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Depreciation" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Partner Remuneration" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Interest Paid On Bank Loans" required="">
	</div>
	<div class="col-xs-12 col-md-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Existing All EMI" required="">
	</div>
 </div>
	<div class="col-md-6">
	<div class="panel-group" id="accordion">
	<div class="panel-default">
      <div id="collapse0" class="panel-collapse collapse in">
        <div class="panel-body">
		
	
	<div class="col-xs-7 form-padding pad">
	 <h4 class="mrg-top">Export/Import</h4>
	</div>
	<div class="col-xs-5 form-padding pad">
     <div class="btn-grp border-none" data-toggle="buttons">
	
      <span class="btn btn-default outer-brd btn-blu active"><input type="radio" name="Status" id="option1">Y</span>
      <span class="btn btn-default outer-brd btn-blu"><input type="radio" name="Status" id="option2">N</span>
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
	<div class="col-xs-7 form-padding pad">
	 <span>Has a Good Repayment track record in existing UBL / CC / OD ?</span>
	</div>
	<div class="col-xs-5 form-padding pad">
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
      <div id="collapse1" class="panel-collapse collapse">
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
                <br>
			  <div> 
			    
			     <button style="display:block; width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">GET OTP</button>
				<br>
				<!-- <div class="inp-hig">
				      <input type="text" class="form-control" id="name" name="name" placeholder="ENTER OTP" required class="clr-ddd" />
				   
				 <button style="width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;">SUBMIT</button>
				  </div> -->
			   
			  </div>
			</form>
		</div>	
	</div>
	</div>
	</aside>
	</div>
@include('layout.footer')
@include('layout.script')