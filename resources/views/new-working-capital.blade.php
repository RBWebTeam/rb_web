@include('layout.header')
<div class="container">
	
	<aside id="fh5co-hero">
	<!-- <div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div> -->
 
 <div class="col-md-12 white-bg pad">
 <h3 class="text-center loan-head">Working Capital</h3>
<div class="col-md-8" id="mod">
<form name='business_loan_process_form' id='business_loan_process_form' action={{URL::to('loan-submit')}} method="POST">
{{ csrf_field() }}  
 <!-- <img src="{{URL::to('images/9.png')}}" alt="Tribe Logo" class="img-responsive" /> -->
 <div class="col-md-6">
  <div class="col-xs-12">
  
	 <input type="hidden" id="product" name="product_name" value="13">

	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Company type</span></div></center>
      <span class="btn btn-default outer-brd active"><input type="radio" name="proprietor"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd"><input type="radio" name="proprietor"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd"><input  type="radio" name="proprietor"  value="Company" >Company</span>
      
      </div>
		</div>
		
		<div class="col-xs-8 form-padding pad">
	 <h4 class="mrg-top text-center">Export/Import -</h4>
	</div>
	<div class="col-xs-4 form-padding pad">
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
		
		
		<div class="col-xs-12 form-padding mrg-top">
		<center><div class="type-cover"><span>Name of The Company</span></div></center>
     <input type="text" class="form-input-new form-control" placeholder="" >
	</div>
	<div class="col-xs-12 form-padding">
	<center><div class="type-cover"><span>Date of Incorporation</span></div></center>
     <input class="form-input-new form-control" type="date"  placeholder="Date">
	</div>

<div class="col-md-12 pad-no">
<span class="block"><b>LOAN AMOUNT REQUIRED IN CRORES</b></span>
<div>
   <div class="col-md-12 pad-no">

   <center><div class="type-cover"><span>Inventory</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Debtors</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Creditors</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Share</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Reserves</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
</div>
  
   </div>

  
  
  <div class="col-md-6 no-pad comp-fin">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                        <i class="icon-minus more-less pull-right"></i>
                        COMPANY FINANCIALS
                    </a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
                <div class="panel-body">
                     
					 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Turnover/Topline</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Ebidta</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Profit Before Tax</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Profit After Tax</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Depreciation</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Existing Term Loan</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Existing OD/CC</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Interest Paid</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Current Rate of Interest</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text"class="form-input-new form-control" placeholder="3 Year"></div>
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

	             <div class="panel-group" id="accordion1">
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
								<div class="col-xs-12 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_1"  class="radio1" checked >Type 1</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_2" class="radio1">Type 2</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_3" class="radio1">Type 3</a></div>
								<div class="col-xs-12 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Type 4</a></div>
								
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
					
                </div>
            </div>
        </div>
        
        
    </div><!-- panel-group -->
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
         <a id="apply_new" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a>
         <button id="eligibility" class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank">Check Bankwise Eligibility</button>
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

