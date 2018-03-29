<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class=" ">
        <!-- content start -->
        <div class="container">
          <aside id="fh5co-hero">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">                       
                 <h1 class=""><center>SME Working Capital</center></h1>
                </br>             
                    <div class="row">    
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 600px;">
                        <h4 >Business Information</h4>
                        <form name='working_capital_process_form' id='working_capital_process_form' action=<?php echo e(URL::to('loan-submit')); ?> method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" id="product" name="product_name" value="11">                    

                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select id="company_type" class="form-control input-md" name="company_type">
                                                            <option selected disabled="">Company Type</option>
                                                            <option value="Sole Proprietor">Sole Proprietor</option>
                                                            <option value="Partnership">Partnership</option>
                                                            <option value="Company">Company</option>
 
                                                    </select>
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="yesno" class="form-control input-md" name="yesno">
                                                            <option selected disabled="">Export / Import</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
 
                                                    </select>

                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="loanTenur" class="form-control input-md" name="loanTenur" onchange="ChooseContact(this)">
                                                            <option selected disabled="">Export / Import in %</option>
                                                            <option value="10">10 %</option>
                                                            <option value="20">20 %</option>
                                                            <option value="30">30 %</option>
                                                            <option value="40">40 %</option>
                                                            <option value="50">50 %</option>
                                                            <option value="60">60 %</option>
                                                            <option value="70">70 %</option>
                                                            <option value="80">80 %</option>
                                                            <option value="90">90 %</option>
                                                            <option value="100">100 %</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>                           

                 <hr style="color:transparent; width:100%" />

                            <h4 >Business Details</h4>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new  form-control" name="company_name" id="company_name" placeholder="Company Name" onkeypress="return AllowAlphabet(event)" required >
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input class="form-input-new form-control lastReporteddate1" type="text" name="date_of_incorp" id="date_of_incorp" placeholder="Date Of Incorporation">
                              </div>
                             </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                               <input type="text" class="form-input-new form-control" name="loan_required" id="loan_required" placeholder="Loan Amount Required (In Crores)" onkeypress="return isNumberKey(event)" required>
                             </div>
                             </div>

                   <hr style="color:transparent; width:100%" />

                       <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title" style="font-size: 16px"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa sign fa-minus-circle" style="color: #ed1c24;"></i>Company Financials</a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                             
                            <p style="margin-bottom: 5px;">Turnover / Topline : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">                                
                              <input type="text" name="turnover_oneyr_amt" id="turnover_oneyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" name="turnover_twoyr_amt" id="turnover_twoyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year">
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" name="turnover_threeyr_amt" id="turnover_threeyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">EBIT / Net Operating Income : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" name="ebit_oneyr_amt" id="ebit_oneyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="1 Year">
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" name="ebit_twoyr_amt" id="ebit_twoyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" name="ebit_threeyr_amt" id="ebit_threeyr_amt" onkeypress="return isNumberKey(event)" required class="form-input-new form-control" placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Profit Before Tax : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pbt_oneyr_amt" id="pbt_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pbt_twoyr_amt " id="pbt_twoyr_amt " onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pbt_threeyr_amt" id="pbt_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>


                             <p style="margin-bottom: 5px;">Profit After Tax : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pat_oneyr_amt" id="pat_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pat_twoyr_amt" id="pat_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="pat_threeyr_amt" id="pat_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Depreciation : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="depre_oneyr_amt" id="depre_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year">
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="depre_twoyr_amt" id="depre_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="depre_threeyr_amt" id="depre_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Existing Term Loan : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="termloan_oneyr_amt" id="termloan_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="termloan_twoyr_amt" id="termloan_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="termloan_threeyr_amt" id="termloan_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>


                             <p style="margin-bottom: 5px;">Existing OD/CC : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="odcc_oneyr_amt" id="odcc_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="odcc_twoyr_amt" id="odcc_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="odcc_threeyr_amt" id="odcc_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Interest Paid : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="interestpaid_oneyr_amt" id="interestpaid_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="interestpaid_twoyr_amt" id="interestpaid_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="interestpaid_threeyr_amt" id="interestpaid_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Current Rate of Interest : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" step="0.01" min="0" maxlength="4" name="currentroi_oneyr_amt" id="currentroi_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" step="0.01" min="0" maxlength="4" class="form-input-new form-control" name="currentroi_twoyr_amt" id="currentroi_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" step="0.01" min="0" maxlength="4" class="form-input-new form-control" name="currentroi_threeyr_amt" id="currentroi_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Total EMI : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="totalemi_oneyr_amt" id="totalemi_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="totalemi_twoyr_amt" id="totalemi_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="totalemi_threeyr_amt" id="totalemi_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                        </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title" style="font-size: 16px"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa sign fa-minus-circle" style="color: #ed1c24;"></i>Details 1</a> </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                         <p style="margin-bottom: 5px;">Inventory : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="inventory_oneyr_amt" id="inventory_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="inventory_twoyr_amt" id="inventory_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="inventory_threeyr_amt" id="inventory_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>

                             <p style="margin-bottom: 5px;">Debtors : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="debtor_oneyr_amt" id="debtor_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="debtor_twoyr_amt" id="debtor_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="debtor_threeyr_amt" id="debtor_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>


                             <p style="margin-bottom: 5px;">Creditors : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                 <input type="text" class="form-input-new form-control" name="creditor_oneyr_amt" id="creditor_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="creditor_twoyr_amt" id="creditor_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="creditor_threeyr_amt" id="creditor_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>


                             <p style="margin-bottom: 5px;">Share Capital : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="sharecap_oneyr_amt" id="sharecap_oneyr_amt" onkeypress="return isNumberKey(event)" required placeholder="1 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="sharecap_twoyr_amt" id="sharecap_twoyr_amt" onkeypress="return isNumberKey(event)" required placeholder="2 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                               <input type="text" class="form-input-new form-control" name="sharecap_threeyr_amt" id="sharecap_threeyr_amt" onkeypress="return isNumberKey(event)" required placeholder="3 Year">
                             </div>
                             </div>


                             <p style="margin-bottom: 5px;">Reserve Surplus : </p>
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="reserve_oneyr_amt" id="reserve_oneyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="1 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="reserve_twoyr_amt" id="reserve_twoyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="2 Year">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="reserve_threeyr_amt" id="reserve_threeyr_amt" onkeypress="return isNumberKey(event)" required  placeholder="3 Year">
                             </div>
                             </div>

                                                    </div>
                                                </div>
                                            </div>


                                <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title" style="font-size: 16px"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa sign fa-minus-circle" style="color: #ed1c24;"></i>Details 2</a> </h4>
                                    </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                                         
                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="total_current_asset" id="total_current_asset" onkeypress="return isNumberKey(event)" required placeholder="Total Current Asset">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="total_current_liable" id="total_current_liable" onkeypress="return isNumberKey(event)" required placeholder="Total Current Liability">
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                               <input type="text" class="form-input-new form-control" name="total_noncurrent_liable" id="total_noncurrent_liable" onkeypress="return isNumberKey(event)" required placeholder="Total Non-Current Liability">
                             </div>
                             </div>
                          </div>
                              </div>
                         </div>                          
                      </div>
                    </div>     
                        <h4 >Other Details</h4>

                          <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">  
                              <select id="nature_of_business" class="form-control input-md" name="nature_of_business">
                                                            <option selected disabled="">Nature of Business</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Trading">Trading</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Retailer">Retailer</option>
                                                            <option value="Others">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="industry_type" class="form-control input-md" name="industry_type">
                                                            <option selected disabled="">Industry</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                            <option value="Auto Components">Auto Components</option>
                                                            <option value="Automobiles">Automobiles</option>
                                                            <option value="Aviation">Aviation</option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Biotechnology">Biotechnology </option>
                                                            <option value="Cement">Cement</option>
                                                            <option value="Consumer Markets">Consumer Markets</option>
                                                            <option value="Education And Training">Education And Training</option>
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Financial Services">Financial Services</option>
                                                            <option value="Food Industry">Food Industry</option>
                                                            <option value="Gems And Jewellery">Gems And Jewellery</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Infrastructure">Infrastructure</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="IT &ITeS">IT &ITeS</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Marketing And Strategy">Marketing And Strategy</option>
                                                            <option value="Media And Entertainment">Media And Entertainment</option>
                                                            <option value="Oil And Gas">Oil And Gas</option>
                                                            <option value="Pharmaceuticals">Pharmaceuticals</option>
                                                            <option value="Ports">Ports</option>
                                                            <option value="Power">Power</option>
                                                            <option value="Railways">Railways</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Research And Development">Research And Development</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Roads">Roads</option>
                                                            <option value="Rural Market">Rural Market</option>
                                                            <option value="Science And Technology">Science And Technology</option>
                                                            <option value="Semiconductor">Semiconductor</option>
                                                            <option value="Services">Services</option>
                                                            <option value="Steel">Steel</option>
                                                            <option value="Telecommunications">Telecommunications</option>
                                                            <option value="Textiles">Textiles</option>
                                                            <option value="Tourism And Hospitality">Tourism And Hospitality</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="office_type" class="form-control input-md" name="office_type">
                                                            <option selected disabled="">Office Type</option>
                                                            <option value="Owned">Owned</option>
                                                            <option value="Rented">Rented</option>
                                                            <option value="Parental">Parental</option>
                                                            <option value="Other">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                              <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                                   
                                                    <select id="residence_type" class="form-control input-md" name="residence_type">
                                                            <option selected disabled="">Residence Type</option>
                                                            <option value="Owned">Owned</option>
                                                            <option value="Rented">Rented</option>
                                                            <option value="Parental">Parental</option>
                                                            <option value="Other">Other</option>
 
                                                    </select>
                                                    
                             </div>
                             </div>


                            <hr style="color:transparent; width:100%" />

                            <h4 >Applicant Details</h4>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" id="customer_name" name="customer_name" class="form-input-new form-control" placeholder="Applicant Name" onkeypress="return AllowAlphabet(event)" required >
                             </div>
                             </div>


                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" id="customer_contact " name="customer_contact " class="form-input-new form-control" placeholder="Contact No" pattern="[789][0-9]{9}" maxlength="10" onkeypress="return isNumberKey(event)" required>
                             </div>
                             </div>

                             <div class="col-md-4 col-sm-12 col-xs-12">
                             <div class="form-group">
                                <input type="text" id="customer_email" name="customer_email" class="form-input-new form-control" placeholder="Email Id" oninput="email('customer_email')" required>
                  <span id="email_id" style="display:none;color: red;">Please Enter Valid Email Id.</span>
                             </div>
                             </div>

                <!-- <button type="submit" class="btn btn-default btn-sm">Apply Now</button> -->
                <a class="btn btn-default btn-sm apply_now"  data-toggle="modal">Apply Now</a>
                                                
                                          
                    </div>
                 </div>
                   
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 480px;">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                   <input type="text" class="form-control" id="loanamount_new" name="loanamount_new" value="" placeholder="Loan Amount" required class="clr-ddd" readonly />
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="rate" name="rate" placeholder="Best ROI" required class="clr-ddd" readonly />
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <input type="hidden" class="form-control" id="ratio_liability" name="ratio_liability" value="" placeholder="" required class="clr-ddd"  />

                                            <input type="hidden" class="form-control" id="debt_service_coverage_ratio" name="debt_service_coverage_ratio" value="" placeholder="" required class="clr-ddd"  />
                                            
                                            <div class="col-md-12 col-xs-12">
                                    <br>
                                                <!-- <button type="submit"  class="btn btn-default btn-sm" style="width: 100%;">Check Bankwise<br>Eligibility</button> -->

                                                <button id="eligibility" class="btn btn-default btn-sm disblk" title="See Bankwise Eligibility And Apply Amongst Best Bank"style="width: 100%;">Check Bankwise<br>Eligibility</button>                                          
                                    </div>

                                     <div class="col-md-12 col-xs-12">
                                    <br>
                                                <!-- <button type="submit" class="btn btn-default btn-sm trigger-custom" style="width: 100%;">Call<br>Manager</button> -->

                                                 <button type="button" class="btn btn-default btn-sm block"  id="call_rm" name="call_rm" data-toggle="modal" data-target="#Modal" title="Call For RM(Single Day Process)"style="width: 100%;">Call<br>Manager</button>
                                                
                                    </div>                               
                                   </div>                                 
                        </div>
                </div>

                </form>     
                    </div> 
    <p id="err" style="display:none;" ><span style="color: red;font-size: 20px;display: block; text-align: center;">Sorry, We are unable to process your request. Will get back to you in future.</span></p> 
  </div> 
  </div></div></div></div></div></aside></div></div>
  <br>
   <div id ="test123" class="col-md-8"></div>

<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="wrapper-content bg-white pinside40">
                     <p>Working Capital Loan is basically meant to meet all financing needs for everyday operations and activity of a company. companies that have high seasonality sales cycles usually rely on working capital loans to manage and cover their accounts payable ,wages ,etc. Working capital loan is a secured loan usually duration of a working capital loan from 6 to 12 months .whereas the interest rates lies between 11% to 16%.</p>
                      <div class="section-faq" id="section-faq">
                            <div class="">                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa sign fa-minus-circle" style="color: #ed1c24;"></i>Documents Required</a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">

                                    <ul class="listnone bullet bullet-check-circle-default">
                                                <li>Proof of Identity / Address Proof.(Business as well as All Directors)</li>
                                                <li>2 years ITR with Computation of Income, Balance Sheet, Profit & Loss Account</li>
                                                <li>Bank Statements</li>
                                                <li>Business should be in operation from last 3 years</li>
                                            </ul>

                                        </div>
                                </div>
                            </div>                          
                        </div>
                    </div>
                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menumaker.js"></script>
    <!-- animsition -->
    <script type="text/javascript" src="js/animsition.js"></script>
    <script type="text/javascript" src="js/animsition-script.js"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <!-- slider script -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-carousel.js"></script>
    <script type="text/javascript" src="js/service-carousel.js"></script>
    <!-- Back to top script -->
    <script src="js/back-to-top.js" type="text/javascript"></script>
    <!-- Faq Accordion -->
    <script src="js/accordion.js" type="text/javascript"></script>
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
$("#apply_new").click(function() {
   window.location.href ="<?php echo e(URL::to('thank-you')); ?>";
});
</script>