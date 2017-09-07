<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">
	
	<aside id="fh5co-hero">
	<!-- <div class="col-md-12">
	<h2 class="align-center loan-head">Unsecured Business Loan</h2>
	</div> -->
 
 <div class="col-md-12 white-bg pad box-shadow">
 <h1 class="text-center loan-head">Working Capital</h1>
<div class="col-md-8" id="mod">
<form name='working_capital_process_form' id='working_capital_process_form' action=<?php echo e(URL::to('loan-submit')); ?> method="POST">
<?php echo e(csrf_field()); ?>  
 <!-- <img src="<?php echo e(URL::to('images/9.png')); ?>" alt="Tribe Logo" class="img-responsive" /> -->
 <div class="col-md-6">
  <div class="col-xs-12">
  
	 <input type="hidden" id="product" name="product_name" value="11">

	   <div class="btn-grp mrg-top pad status" data-toggle="buttons">
	  
		<center><div class="type-cover"><span>Company type</span></div></center>
      <span class="btn btn-default outer-brd active mob-blk-dv"><input type="radio" name="company_type"  value="Sole Proprietor">Sole Proprietor</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input type="radio" name="company_type"  value="Partnership">Partnership</span>
      <span class="btn btn-default outer-brd mob-blk-dv"><input  type="radio" name="company_type"  value="Company" >Company</span>
      
      </div>
		</div>
		
		<div class="col-xs-6 form-padding pad text-right">
	 <span class="mrg-top">Export/Import - </span>
	</div>
	<div class="col-xs-6 form-padding pad">
    
		 <div id="ifYes" style="visibility:hidden">
        <select class="pull-right btn-default outer-brd btn-blu pad-ten" id='yes'>
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
         <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"> No&nbsp;&nbsp;
    
        
	</div>
		
		
		<div class="col-xs-12 mrg-top">
		<center><div class="type-cover"><span>Name of The Company</span></div></center>
     <input type="text" class="form-input-new  form-control" name="company_name" id="company_name" placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required >
	
	</div>
	
	<div class="col-xs-12 mrg-top">
	<center><div class="type-cover"><span>Date of Incorporation</span></div></center>
     <input class="form-input-new form-control lastReporteddate1" type="text" name="date_of_incorp" id="date_of_incorp" placeholder="Date Of Incorporation">
	 
	</div>
 <div class="col-md-12 pos-ins mrg-top">
 <input type="text" class="form-input-new form-control" name="loan_required" id="loan_required" placeholder="Loan Amount Required in Crores" onkeypress="return isNumberKey(event)" required>
 </div>

    <div class="col-md-12 mrg-top">
<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse61" aria-expanded="true" aria-controls="collapse61">
                        <i class="icon-plus more-less pull-right"></i>
                        Details 1
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
   <input type="text" class="form-input-new form-control" name="inventory_oneyr_amt" id="inventory_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="inventory_twoyr_amt" id="inventory_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="inventory_threeyr_amt" id="inventory_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Debtors</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtor_oneyr_amt" id="debtor_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtor_twoyr_amt" id="debtor_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="debtor_threeyr_amt" id="debtor_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Creditors</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditor_oneyr_amt" id="creditor_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditor_twoyr_amt" id="creditor_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="creditor_threeyr_amt" id="creditor_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Share Capital</span></div></center>
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="sharecap_oneyr_amt" id="sharecap_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="sharecap_twoyr_amt" id="sharecap_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
   </div>
   <div class="col-md-4 form-padding">
   <input type="text" class="form-input-new form-control" name="sharecap_threeyr_amt" id="sharecap_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
   </div>
 </div>

 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Reserve Surplus</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_oneyr_amt" id="reserve_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_twoyr_amt" id="reserve_twoyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="reserve_threeyr_amt" id="reserve_threeyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="3 Year"></div>
 </div>
</div>
				
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading71">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse71" aria-expanded="false" aria-controls="collapse71">
                        <i class="icon-plus more-less pull-right"></i>
                        Details 2
                    </a>
                </h4>
            </div>
            <div id="collapse71" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="panel-body">
             <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_current_asset" id="total_current_asset" onkeypress="return isNumberKey(event)" required placeholder="Total Current Asset">
	         </div>
			 <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_current_liable" id="total_current_liable" onkeypress="return isNumberKey(event)" required placeholder="Total Current Liability">
	         </div>
			 <div class="col-md-12 form-padding">
     <input type="text" class="form-input-new form-control" name="total_noncurrent_liable" id="total_noncurrent_liable" onkeypress="return isNumberKey(event)" required placeholder="Total Non-Current Liability">
	         </div>
			
					
                </div>
            </div>
        </div>
        
        
    </div><!-- panel-group -->
	</div>
  
   </div>

  
  
  <div class="col-md-6 no-pad comp-fin">
    <div class="panel-group" id="accordion1">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
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
   <div class="col-md-4 form-padding"><input type="text" name="turnover_oneyr_amt" id="turnover_oneyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="turnover_twoyr_amt" id="turnover_twoyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="turnover_threeyr_amt" id="turnover_threeyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>EBIT/Net Operating Income</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_oneyr_amt" id="ebit_oneyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_twoyr_amt" id="ebit_twoyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" name="ebit_threeyr_amt" id="ebit_threeyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Profit Before Tax</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pbt_oneyr_amt" id="pbt_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pbt_twoyr_amt " id="pbt_twoyr_amt " onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pbt_threeyr_amt" id="pbt_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Profit After Tax</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pat_oneyr_amt" id="pat_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pat_twoyr_amt" id="pat_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="pat_threeyr_amt" id="pat_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Depreciation</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="depre_oneyr_amt" id="depre_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="depre_twoyr_amt" id="depre_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="depre_threeyr_amt" id="depre_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Existing Term Loan</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="termloan_oneyr_amt" id="termloan_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="termloan_twoyr_amt" id="termloan_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="termloan_threeyr_amt" id="termloan_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Existing OD/CC</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="odcc_oneyr_amt" id="odcc_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="odcc_twoyr_amt" id="odcc_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="odcc_threeyr_amt" id="odcc_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Interest Paid</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="interestpaid_oneyr_amt" id="interestpaid_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="interestpaid_twoyr_amt" id="interestpaid_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="interestpaid_threeyr_amt" id="interestpaid_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Current Rate of Interest</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" step="0.01" min="0" maxlength="4" name="currentroi_oneyr_amt" id="currentroi_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" step="0.01" min="0" maxlength="4" class="form-input-new form-control" name="currentroi_twoyr_amt" id="currentroi_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" step="0.01" min="0" maxlength="4" class="form-input-new form-control" name="currentroi_threeyr_amt" id="currentroi_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
 <div>
   <div class="col-md-12 pad-no">
   <center><div class="type-cover"><span>Total EMI</span></div></center>
   </div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="totalemi_oneyr_amt" id="totalemi_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="totalemi_twoyr_amt" id="totalemi_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year"></div>
   <div class="col-md-4 form-padding"><input type="text" class="form-input-new form-control" name="totalemi_threeyr_amt" id="totalemi_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year"></div>
 </div>
					
		
					 
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading7">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        <i class="icon-plus more-less pull-right"></i>
                       OTHER DETAILS 
                    </a>
                </h4>
            </div>
            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                <div class="panel-body">

	             <div class="panel-group" id="accordion5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion5" href="#collapse111">NATURE OF BUSINESS <i class="icon-plus pull-right more-less"></i></a>
		
        </h4>
      </div>
      <div id="collapse111" class="panel-collapse collapse">
        <div class="panel-body">
	<div class="scenario">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="alertme('Manufacturing')">
                Manufacturing</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Trading')">Trading </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Services')">Services</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Retailer')">Retailer</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alertme('Others')">Others</a></div>

                <input type="hidden" name="nature_of_business" id="nature_of_business">

								
							</div>
						
	   
	   
		
		</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion5" href="#collapse112">INDUSTRY <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse112" class="panel-collapse collapse">
        <div class="panel-body">
		   
		   <div class="scenario1">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="callme('Agriculture')">
                Agriculture</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Auto Components')">Auto Components </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Automobiles')">Automobiles</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Aviation')">Aviation</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Banking')">Banking</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Biotechnology')">Biotechnology </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Cement')">Cement</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Consumer Markets')">Consumer Markets</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Education And Training')">Education And Training </a></div>

                <div class="col-xs-6 pad-no "><a class="scenario-1 btn"  onclick="callme('Engineering')">
                Engineering</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Financial Services')">Financial Services </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Food Industry')">Food Industry</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Gems And Jewellery')">Gems And Jewellery</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Healthcare')">Healthcare</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Infrastructure')">Infrastructure </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Insurance')">Insurance</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('IT & ITeS')">IT & ITeS</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Manufacturing')">Manufacturing</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Marketing And Strategy')">Marketing And Strategy </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Media And Entertainment')">Media And Entertainment</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Oil And Gas')">Oil And Gas</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Pharmaceuticals')">Pharmaceuticals</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Ports')">Ports </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Power')">Power</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Railways')">Railways</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Real Estate')">Real Estate</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Research And Development')">Research And Development </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Retail')">Retail</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Roads')">Roads</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Rural Market')">Rural Market</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Science And Technology')">Science And Technology </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Semiconductor')">Semiconductor</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Services')">Services</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Steel')">Steel</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Telecommunications')">Telecommunications</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Textiles')">Textiles</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="callme('Tourism And Hospitality')">Tourism And Hospitality</a></div>
                <input type="hidden" name="industry_type" id="industry_type">
                 

                

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
          <a data-toggle="collapse" data-parent="#accordion5" href="#collapse114">RESIDENCE TYPE <i class="icon-plus pull-right more-less"></i></a>
		 
        </h4>
      </div>
      <div id="collapse114" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario2">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="alert('Owned')">
                Owned</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alert('Rented')">Rented </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alert('Parental')">Parental</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="alert('Others')">Others</a></div>
                
                <input type="hidden" name="residence_type" id="residence_type">
								
							</div>
		</div>
      </div>
    </div>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion5" href="#collapse115">OFFICE TYPE<i class="icon-plus pull-right more-less"></i></a>
		  
        </h4>
      </div>
      <div id="collapse115" class="panel-collapse collapse">
        <div class="panel-body">
		   <div class="scenario3">
								<div class="col-xs-6 pad-no scenario-active"><a class="scenario-1 btn"  onclick="call('Owned')">
                Owned</a></div>

                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="call('Rented')">Rented </a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="call('Parental')">Parental</a></div>
                <div class="col-xs-6 pad-no"><a class="scenario-1 btn" onclick="call('Others')">Others</a></div>
                
                <input type="hidden" name="office_type" id="office_type">
								
							</div>
		</div>
      </div>
    </div>
  </div> 
					
                </div>
            </div>
        </div>
		
<div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse711" aria-expanded="true" aria-controls="collapse711">
                        <i class="icon-plus more-less pull-right"></i>
                        APPLICANT DETAILS
                    </a>
                </h4>
            </div>
            <div id="collapse711" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading71">
                <div class="panel-body">
                    
					<div class="col-xs-6 form-padding">
     <input type="text" id="customer_name" name="customer_name" class="form-input-new form-control" placeholder="Applicant Name" onkeypress="return AllowAlphabet(event)" required >
                  </div>
				  
				  <div class="col-xs-6 form-padding">
     <input type="text" id="customer_contact " name="customer_contact " class="form-input-new form-control" placeholder="Contact No." pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)" required>
                  </div>
				  <div class="col-xs-12 form-padding">
     <input type="text" id="customer_email" name="customer_email" class="form-input-new form-control" placeholder="Email Id" oninput="email('customer_email')" required>
    <span id="email_id" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                  </div>
				  

					
		
					 
                </div>
            </div>
        </div>


        
        
    </div><!-- panel-group -->
	<a class="btn btn-primary btn-outline with-arrow apply_now"  data-toggle="modal">Apply Now<i class="icon-arrow-right"></i></a> 
  </div>
  
  


</div>

		
	
	<div class="col-md-4" >
     <div class="border brd-for" id="mi_id">

             
          
          
            <div class="inp-hig">
            <label class="form-label-new">Loan Amount</label>
              <input type="text" class="form-control" id="loanamount_new" name="loanamount_new" value="" placeholder="" required class="clr-ddd" readonly />
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Best ROI</label>
              <input type="text" class="form-control" id="rate" name="rate" placeholder="" required class="clr-ddd" readonly />
            </div>

             <input type="hidden" class="form-control" id="ratio_liability" name="ratio_liability" value="" placeholder="" required class="clr-ddd"  />

             <input type="hidden" class="form-control" id="debt_service_coverage_ratio" name="debt_service_coverage_ratio" value="" placeholder="" required class="clr-ddd"  />

            <!-- <div class="inp-hig">
            <label class="form-label-new">Tenure</label>
                 <input type="text" class="form-control" id="term" name="term" value="" placeholder="" required class="clr-ddd" readonly>
            </div>

            <div class="inp-hig">
          <label class="form-label-new">Processing Fee</label>
              <input type="text" class="form-control" id="processfee" name="processfee" placeholder="" required class="clr-ddd" readonly />
            </div> -->

        <div> 
          <br>
         <a id="apply_new" style="display: none;" type="button" class="btn btn-info disblk" title="Experience New Digital Era In Loans">Apply Digitally</a>
         <button id="eligibility" class="btn btn-info disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank">Check Bankwise Eligibility</button>
         <button type="button" class="btn btn-info block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)">Call Manager</button>
         
        </div>
        
        <!-- <p id="err" style="display:none;" ><span style="color:skyblue;position:absolute;font-size:13px;">No Quotes Found.</span></p> -->
   
      </form>

    </div> 
    <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, We are unable to process your request. Will get back to you in future.</span></p> 
  </div> 
	
	
	
	
	</div>
	</aside>
	</div>
	<br>
   <div id ="test123" class="col-md-8"></div>
   
     <div class="container">
  <div class="col-md-12 mrg-top white-bg pad1 box-shadow">
	 <hr>
	 <p>working capital loan is basically meant to meet all financing needs for everyday operations and activity of a company. companies that have high seasonality sales cycles usually rely on working capital loans to manage and cover their accounts payable ,wages ,etc. Working capital loan is a secured loan usually duration of a working capital loan from 6 to 12 months .whereas the interest rates lies between 11 % to 16%</p>
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
	     <li>Proof of Identity / address proof.(business as well as All directors).</li>
		 <li>2 years ITR with computation of income,balance sheet ,profit & loss account .</li>
		 <li>Bank statements</li>
		 <li>Business should be in operation from last 3 years </li>

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

<div class="modal fade" tabindex="-1" role="dialog" id="working_capital_process">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p><b>Thank You. Our representative will get in touch with you.</b></p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="working_capital_process_oops">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Oops.!!<br>
        Something went wrong.</p>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>







<!-- <div class="modal fade" id="newWorkingModal" role="dialog">
    <div class="modal-dialog">
    
 
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instant Call Back...</h4>
        </div>
        <div class="modal-body">
          <form name="instant_call_form" id="instant_call_form" method="post" >
          <?php echo e(csrf_field()); ?>

          <input type="hidden" name="form" value="instant_call">
                  <div>
                    <fieldset>
                      <input class="newsletter-name" name="name" placeholder="Name" required>
                    </fieldset>
                    </div>
                  <div>
                    <fieldset>
                      <input type="text" class="newsletter-name" name="contact" pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile Number">
                    </fieldset>                 
                    </div>

                    <div>
                    <fieldset>
                      <input type="email" class="newsletter-name" name="email"  required maxlength="10" placeholder="Email">
                    </fieldset>                 
                    </div>

                  <div>
                      <button class="btn btn-primary btn-outline with-arrow sidebar-submit" id="instant_call_submit">Call Me Back<i class="icon-arrow-right"></i>
                      </button>
                </div>
                <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div>
                  

            </form>
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone' ><p>Ooops. Something went wrong.</p></div>
            
        </div>
        
      </div>
      
    </div>
  </div>

<script type="text/javascript">

$(window).load(function(){  

    $('#newWorkingModal').modal('show') ;

  });

</script> -->
 















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
  function callme(test){
  //alert($(this).closest("radio").attr('value'));
  $('#industry_type').val(test);
  
//    alert(test);
}
</script>

<script type="text/javascript">
  function alertme(test){
  //alert($(this).closest("radio").attr('value'));
  
  $('#nature_of_business').val(test);
  
//    alert(test);
}
</script>

<script type="text/javascript">
  function alert(test){
  //alert($(this).closest("radio").attr('value'));
  $('#residence_type').val(test);
  
//    alert(test);
}
</script>

<script type="text/javascript">
  function call(test){
  //alert($(this).closest("radio").attr('value'));
  $('#office_type').val(test);
  
//    alert(test);
}
</script>

<script type="text/javascript">
  $(".apply_now").click(function(event){
    // console.log("ok");

    event.preventDefault();
      var form=$(this).closest("form").attr('id');
      $form=$('#'+form);
      if(! $form.valid()){
      }else{
        var amount = ($("#inventory_threeyr_amt").val()-$("#creditor_threeyr_amt").val());
        // console.log(amount);
        var amt= (parseFloat(amount)+ parseFloat($("#debtor_threeyr_amt").val()));
        // console.log(amt);
        var drawing_power=0.25*parseFloat(amt);
        // console.log(drawing_power);
         // $('#loanamount_new').val(drawing_power);

         var turnover=$("#turnover_threeyr_amt").val()*0.2;
         // console.log(turnover);

         if (drawing_power>turnover) 
         {
             $('#loanamount_new').val(turnover);
         } 
         else if(drawing_power<turnover) 
         {
           $('#loanamount_new').val(drawing_power);
         }

         var assets= (parseFloat($("#total_current_liable").val())+parseFloat($("#total_noncurrent_liable").val()));
         // console.log(assets);

         var quantity= (parseFloat($("#sharecap_threeyr_amt").val())+parseFloat($("#reserve_threeyr_amt").val()));
         var ratio= parseFloat(assets)/parseFloat(quantity);
         $('#ratio_liability').val(ratio);

         var net=(parseFloat($("#pat_threeyr_amt").val())+parseFloat($("#depre_threeyr_amt").val())+parseFloat($("#interestpaid_threeyr_amt").val()));
        
         var emi=parseFloat($("#totalemi_threeyr_amt").val());
         
         var dscr=parseFloat(net)/parseFloat(emi);
        
          $('#debt_service_coverage_ratio').val(dscr);
        
        var roi=10;
         $('#rate').val(roi);


        // $(".iframeloading").show();
        // $(".credit-submit").hide(); 
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('working-capital-submit')); ?>",
         data : $('#'+form).serialize(),
         dataType: 'json',
         success: function(msg){
         // $(".iframeloading").hide();  
       
         // console.log(msg);
          if(msg.data==true){
             $('#apply_new').show();
            // console.log(msg);

             // alert("Thank you for your interest in ICICI Bank Credit Cards. Our representative will get in touch with you within 3 working days subject to your application meeting the eligibility criteria");
            $('#working_capital_process').modal('show');        
           } 
          else if(msg.data==false){
            // console.log(msg);
            // alert("Something Went Wrong");
             $('#working_capital_process_oops').modal('show');
          }

        }  
      }); 
      }

    });


</script>

<script type="text/javascript">
  function email(obj,val){
    // console.log(obj);
    if(obj=='customer_email' ){
                   var str =$('#customer_email').val();
                   var emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; 
                   var res = str.match(emailPattern);
                   if(res){
                     // console.log('Pancard is valid one.!!');
                      $('#email_id').hide();

                  }else{
                    // console.log('Oops.Please Enter Valid Pan Number.!!');
                    $('#email_id').show();

                    return false;
                  }
                  
  }
}
</script>

<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}

</script>


  <script type="text/javascript">
$("#apply_new").click(function() {
   window.location.href ="<?php echo e(URL::to('thank-you')); ?>";
});
</script>





