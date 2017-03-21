@include('layout.header')
<div class="container">
<aside id="fh5co-hero">
	<div class="col-md-12">
	<h2 class="align-center loan-head">Loan Against Property</h2>
	</div>
 <div class="col-md-12 white-bg pad1 mrg-btm">
<img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" />

 </div>
 <div class="col-md-12 white-bg pad">
 
	<div class="col-md-8">

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
 <div class="text-center flt-lft btn-grp" data-toggle="buttons">
							<div class="scenario">
								<div class="col-xs-4 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1"  class="radio1" checked >RESIDENTIAL</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">COMMERCIAL</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">INDUSTRIAL</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">LAND</a></div>
								<div class="col-xs-4 pad-no"><a class="scenario-1 btn"><input type="radio" name="Status" id="option1" class="radio1">OTHERS</a></div>
								
							</div>
						</div> 

						
						<div class="col-xs-4 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Property Cost" required="">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Loan Required" required="">
	</div>
	<div class="col-xs-4 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Enter City" required="">
	</div>
	

	
	
     </div>

	 
	
	   
	   
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Applicant Details</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
	
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
     <input type="name" class="form-input-new form-control" placeholder="Applicant Name" required="">
	</div>
	
	<div class="col-xs-6 form-padding">
	 <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Status" id="option1"><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-primary outer-brd1 "><input type="radio" name="Status" id="option2"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>		   
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="date" class="form-input-new form-control" placeholder="Date of Birth" required="">
	</div>
		<div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" name="Status" id="option1"> Salared</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio" name="Status" id="option2">Self-Emp</span>
         </div>
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Monthly Income" required="">
	</div>
	
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Exsisting EMI (If Any)" required="">
	</div>
		
		
		<!-- Rounded switch -->
		<label class="switch"> <input type="checkbox"><div class="slider round"><span class="co-applicant"> ADD CO-APPLICANT</span></div></label>
		
		
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Co-Applicant Details</a>
		  <i class="icon-plus pull-right more-less"></i>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
		
		<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Co-Applicant Name" required="">
	</div>
	
	<div class="col-xs-6 form-padding">
	 <div class="btn-grp form-control border-none" data-toggle="buttons">
                                    <span class="btn btn-primary outer-brd1 active"><input type="radio" name="Status" id="option1"><img id="myImage" src="images/male.png" class=""></span><span class="hidden-xs">Male</span>
                                   <span class="btn btn-primary outer-brd1 "><input type="radio" name="Status" id="option2"><img id="myImage1" src="images/female.png" class=""></span> <span class="hidden-xs">Female</span>
           </div>		   
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="date" class="form-input-new form-control" placeholder="Date of Birth" required="">
	</div>
		<div class="col-xs-6 form-padding">
     <div class="btn-grp form-control border-none" data-toggle="buttons">
      <span class="btn btn-primary outer-brd btn-blu active"><input type="radio" name="Status" id="option1"> Salared</span>
      <span class="btn btn-primary outer-brd btn-blu"><input type="radio" name="Status" id="option2">Self-Emp</span>
         </div>
	   </div>
	   
	   <div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Turnover/Topline" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Profit After Tax" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Deprication" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Partner Remuneration" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="Monthly Income" required="">
	</div>
	<div class="col-xs-6 form-padding">
     <input type="name" class="form-input-new form-control" placeholder="All Existing EMI" required="">
	</div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
		
		</div>
      </div>
    </div>
  </div> 
  

   <button class="btn btn-primary btn-outline with-arrow top-mrg">Get Best Quotes<i class="icon-arrow-right"></i></button>
	  	</div>

		<div class="col-md-4">
	   <div class="border">

             <form class="" id="compareform" role="form" method="POST" action="">
				  
				  
				    <div class="inp-hig">
					  <label class="form-label-new">Loan Amount</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="5,00,000" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Best ROI</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="Best ROI" required class="clr-ddd" />
				    </div>

				    <div class="inp-hig">
                 <label class="form-label-new">Tenure</label>
					  <select class="form-control">

					  <option>5</option>
					   <option>1</option>
					  <option>3</option>
					 
					  <option>7</option>
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>30</option>
					  </select>
				    </div>

				    <div class="inp-hig">
					<label class="form-label-new">Processing Fee</label>
				      <input type="text" class="form-control" id="name" name="name" placeholder="2,500" required class="clr-ddd" />
				    </div>

			  <div> 
			    
			     <button style="display:block; width:100%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;" title="APPLY EXPERIENCE NEW DIGITAL ERA IN LOANS">Apply Now</button>
				 <button style="width:49%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;" title="SEE BANKWISE ELIGIBILITY AND APPLY">Eligibility</button>
				 <button style="width:49%;font-size:20px;padding:5px; background:#28a0ff;color:#fff;" title="SINGLE DAY PROCESS">Call For RM</button>
			   
			  </div>
			</form>
		</div>	
	</div>
	</div>
	</aside>
	</div>

@include('layout.footer')
@include('layout.script')