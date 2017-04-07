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
      <span class="btn btn-default outer-brd active mob-blk-dv"><input type="radio" name="proprietor"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input type="radio" name="proprietor"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input  type="radio" name="proprietor"  value="Company" >Company</span>
      
      </div>
		</div>
		
		<div class="col-xs-8 form-padding pad">
	 <h4 class="mrg-top text-center">Export/Import -</h4>
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
		
		
		<div class="col-xs-12 form-padding mrg-top">
		<center><div class="type-cover"><span>Name of The Company</span></div></center>
     <input type="text" class="form-input-new form-control" name="company" id="company" placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required >
	</div>
	<div class="col-xs-12 form-padding">
	<center><div class="type-cover"><span>Date of Incorporation</span></div></center>
     <input class="form-input-new form-control lastReporteddate1" type="text" name="date" id="date" placeholder="Date Of Incorporation">
	</div>
 <div class="col-md-12 form-padding">
 <input type="text" class="form-input-new form-control" name="loan_amount" id="loan_amount" placeholder="Loan Amount Required in Crores" onkeypress="return isNumberKey(event)" required>
 </div>
 
    <div class="col-md-12 pad-no">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse61" aria-expanded="true" aria-controls="collapse61">
                        <i class="icon-plus more-less pull-right"></i>
                        Tab 1 
                    </a>
                </h4>
            </div>
            <div id="collapse61" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading61">
                <div class="panel-body">
                  <div class="col-md-12 pad-no">
<div>
   <div class="col-md-12 pad-no">

   <center><div class="type-cover"><span>Inventory</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="inventory_1" id="inventory_1" onkeypress="return isNumberKey(event)" required  placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="inventory_2" id="inventory_2" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="inventory_3" id="inventory_3" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Debtors</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtors_1" id="debtors_1" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtors_2" id="debtors_2" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtors_3" id="debtors_3" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Creditors</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditors_1" id="creditors_1" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditors_2" id="creditors_2" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditors_3" id="creditors_3" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Share Capital</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="share_capital_1" id="share_capital_1" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="share_capital_2" id="share_capital_2" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="share_capital_3" id="share_capital_3" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Reserve Surplus</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_surplus_1" id="reserve_surplus_1" onkeypress="return isNumberKey(event)" required  placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_surplus_2" id="reserve_surplus_2" onkeypress="return isNumberKey(event)" required  placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_surplus_3" id="reserve_surplus_3" onkeypress="return isNumberKey(event)" required  placeholder="3 Year"></div>
 </div>
</div>
				
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading71">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse71" aria-expanded="false" aria-controls="collapse71">
                        <i class="icon-plus more-less pull-right"></i>
                        Tab 2
                    </a>
                </h4>
            </div>
            <div id="collapse71" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="panel-body">
             <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_current_assest" id="total_current_assest" onkeypress="return isNumberKey(event)" required placeholder="Total Current Asset">
	         </div>
			 <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_current_liability" id="total_current_liability" onkeypress="return isNumberKey(event)" required placeholder="Total Current Liability">
	         </div>
			 <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_non_current_liability" id="total_non_current_liability" onkeypress="return isNumberKey(event)" required placeholder="Total Non-Current Liability">
	         </div>
			
					
                </div>
            </div>
        </div>
        
        
    </div><!-- panel-group -->
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
   <div class="col-md-4 form-padding"><input type="text" name="turnover_1" id="turnover_1" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="turnover_2" id="turnover_2" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="turnover_3" id="turnover_3" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>EBIT</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_1" id="ebit_1" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_2" id="ebit_2" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_3" id="ebit_3" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Profit Before Tax</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="profit_before_tax_1" id="profit_before_tax_1" onkeypress="return isNumberKey(event)" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="profit_before_tax_2" id="profit_before_tax_2" onkeypress="return isNumberKey(event)" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="profit_before_tax_3" id="profit_before_tax_3" onkeypress="return isNumberKey(event)" placeholder="3 Year"></div>
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
								<div class="col-xs-12 col-md-6 pad-no scenario-active"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_1"  class="radio1" checked >Agriculture </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_2" class="radio1">Auto Components </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_3" class="radio1">Automobiles</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Aviation</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Banking</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Biotechnology </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Cement</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Consumer Markets</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Education And Training </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Engineering</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Financial Services</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Food Industry</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Gems And Jewellery </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Healthcare</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Infrastructure</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Insurance </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">IT & ITeS</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Manufacturing</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Marketing And Strategy</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Media & Entertainment </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Oil And Gas</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Pharmaceuticals</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Ports</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Power</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Railways</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Real Estate</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Research And Development</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Retail</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Roads</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Rural Market </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Science And Technology </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Semiconductor</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Services</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Steel </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Telecommunications </a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Textiles</a></div>
								<div class="col-xs-12 col-md-6 pad-no"><a class="scenario-1 btn"><input type="radio" name="industry" value="Type_4" class="radio1">Tourism And Hospitality </a></div>
								
							</div>
		</div>
      </div>
    </div>
    <!--<div class="panel panel-default">
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
    </div> -->
	
	
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
	<a class="btn btn-primary btn-outline with-arrow" id="" data-toggle="modal">Apply Now<i class="icon-arrow-right"></i></a>
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

