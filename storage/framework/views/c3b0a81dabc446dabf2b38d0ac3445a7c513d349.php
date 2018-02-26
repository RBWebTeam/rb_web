<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
  <aside class="pad-tp">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
              
                                <div class="col-md-6">
                                   <img src="<?php echo e($Bank_Logo); ?>" class="img-responsive" style="align-content: center;margin: 0 auto;display: block;margin-top: 70px;" />
                                </div>

                                <div class="col-md-6">
                                    <div class="request-form">
                        <h2>Request A Call Back</h2>
                        <!-- <p>Easy to apply for a loan with us,Once you have complete this form. </p> -->
                         <form class="" id="compareform" role="form" method="POST">            
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="form" value="subscribe-form">
                            <!-- Text input-->
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required />
                                <input type="hidden" class="form-control" id="product" value="<?php echo e($product); ?>" name="product"  />
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <input type="text" name="contact" id="contact" class="form-control clr-ddd" onkeypress="fnAllowNumeric(event)" 
      pattern="[789][0-9]{9}" required maxlength="10" placeholder="Mobile No" >
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <input type="email" class="form-control clr-ddd" id="email" name="email" placeholder="Email Id" required  />
                            </div>
                            
                            
                            
                            <!-- Button -->
                            <div class="form-group">
                                <button class="btn btn-default2 btn-block sidebar-submit">Send A Request</button>
                            </div>
                        </form>
                    </div>

                    <div class='msg displaynone'><p>Thank You. We will reach you soon.</p></div>
                    <div class='msg_err displaynone'><p>Ooops. Something went wrong.</p></div>

                                </div>
                                
                                 
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
      </aside>
    </div>

  <div class="container">
   <div class="row">
     <div class="col-md-12 pad11">
    
    <div class="">
    <table width="100%" border="1" class="tbl pad1">
  <tr>
   <!--  <td>Your  Loan Search for <b>5 Lakhs</b> Loan</td>
   -->
</table>
</div>
 

 <?php $__currentLoopData = $getQuery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<div class="wrapper-content bg-white pinside40 " style="overflow-x:auto;">
 <div class="table-responsive outer-brd">
  <table class="">
   <thead>
      <tr>
        <th scope="col">Rate Of Interest</th>
        <th scope="col">Loan Amount</th>
        <th scope="col">Minimum Income</th>
        <th scope="col">Age</th>
        <th scope="col">Women Rate Of Interest</th>
        <th scope="col">Minimum Credit Score</th>
        <th scope="col">Tenure</th>
        <th scope="col">Profession</th>
        <th scope="col">Special Features</th>
      </tr>
   </thead>
    <!-- <td width="9%" class="upper">Compare</td> -->
    <!-- <td><div class="img-c"> --><!-- <img src="<?php echo e(url('images/axis.jpg')); ?>" width="100" height="30"> --><!-- Bank_ID</div></td> --> 
    
    
   <!--  <td class="upper" width="17%"><a href="<?php echo e(url('apply')); ?>dw">Apply Online</a></td> -->


  <tr>
<!--     <td><input type="checkbox" name="cehckbox"/></td> -->
   <!--  <td><?php echo e($value->Bank_Id); ?></td>  -->
    <td><?php echo e($value->roi); ?>%</td> 
    <td><?php echo e((int)$value->Min_Loan_Amt/100000); ?>Lacs-<?php echo e((int)$value->Max_Loan_Amt/10000000); ?>Cr</td> 
   <td><?php echo e((int)$value->Min_Income); ?></td>
   <td><span><?php echo e((int)$value->Min_Age); ?>-<?php echo e((int)$value->Max_Age); ?></span></td>
     <?php if($value->women_roi!=''): ?>
        <td><?php echo e($value->women_roi); ?>%</td> 
     <?php else: ?>
      <td>-</td> 
     <?php endif; ?>


   <td><?php echo e($value->MinCredit_Score); ?></td> 
   <td><?php echo e((int)$value->Min_Tenure); ?>-<?php echo e((int)$value->Max_Tenure); ?>&nbsp;Years</td> 
   <td><?php echo e($value->Profession_Name); ?></td> 
  <!--  <td class="upper" width="17%"><a href="<?php echo e(URL::to('apply-')); ?><?php echo e($product); ?>">Apply Online</a></td> -->

    <td>Pre close Fee <?php echo e($value->Pre_Closer_Fixed); ?>%</td>
  </tr>
</table>
  <br />  
 
    
<a data-toggle="collapse" data-target="#<?php echo e($key); ?>" class="btn btn-default btn-sm">Know More</a> 

      <!-- <a href="#">Know More</a> -->
    <!-- <td>Processing Fee - INR ertert + ST</td> -->
   <!--  <td>Intrest Paid - INR 50,000</td> -->
    <!-- <td width="18%" class="upper">Tenure:<?php echo e($value->Min_Tenure); ?>-<?php echo e($value->Max_Tenure); ?>years</td> -->
   
    <?php if($product_id == 12 || $product_id ==9){

    ?>

    <?php $product=strtolower(str_replace(' ','-',$product)); ?>
    <a href="<?php echo e(URL::to('')); ?>/<?php echo e($product); ?>" class="btn btn-default btn-sm">Apply Online</a>
  <?php }else{ ?>
  <a href="<?php echo e(URL::to('business-loan')); ?>" class="btn btn-default btn-sm">Apply Online</a>

  <?php } ?>
    
      
<div id="<?php echo e($key); ?>" class="lender-feature-list collapse">   
   <ul class="listnone bullet bullet-check-circle-default">
      <li>No guarantor required</li>
      <li>No pre-closure and part payment fee <strong>Special offers are available for women applicants at a lower rate</strong></li>
      <li>Age at least 18 and less than 60</li>
      <li>Salaried / Self - Employed with regular income,Earn more than the minimum income required</li>
    </ul>
  </div>


</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


</div></div></div><!-- </div> -->


  <?php  if($product_id == 12){
    ?>
   <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 st-accordion col-xs-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">                                         



                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Home Loan</a> </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">RupeeBoss brings home loans to your doorstep from all leading banks and NBFC’s. Over 300 man-years of collective experience, a dedicated team of experts and a complete package to meet all your housing finance needs, RupeeBoss helps you realize your dreams.
                                                        <br />

We make available home loans for individuals for fresh purchase or resale or for construction of houses. Applications can be made individually or jointly.</div>
                                                </div>
                                            </div>




                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">The RupeeBoss Advantage</a> </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body"><ul class="listnone bullet bullet-check-circle-default">
                                                <li>Experienced and well-qualified personnel to ensure smooth and easy processing.</li>
                                                <li>Stage wise updating on applications status.</li>
                                                <li>Transparency in all dealings.</li>
                                                <li>Counselling and advisory services while deciding on right loan which suits you.</li>
                                                <li>Efficient and quick processing of loans.</li>
                                                <li>Branches across 30 cities in India.</li>
                                                <li>Dedicated relationship managers.</li>
                                            </ul></div>
                                                </div>
                                            </div>




                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Home Improvement Loan</a> </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">The interiors of any home reflect the personal preferences and tastes of its owners. A need is invariably felt to constantly upgrade the interiors with the changing times. This loan facility seeks to cover repairs and other structural improvements.</div>
                                                </div>
                                            </div>





                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Home Extension Loan</a> </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">Home Extension Loan for adding more space to your existing home for meeting the requirements of your growing family.</div>
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


  <?php }else if ($product_id == 9){ ?>
  <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 st-accordion col-xs-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">                                         



                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Personal Loan</a> </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">A personal loan is a short term unsecured loan that you can use to meet current personal financial needs. <br />It is commonly used to meet expenses related to debt restructuring, to meet Wedding Expenses, vacations, unexpected medical expenses and down payments, a personal loan may be used for practically any type of expense.<br/> Tenure of a personal loan is shorter as compared to a mortgage. Unlike mortgage, a personal loan is commonly for between one and five years.
                                                        </div>
                                                </div>
                                            </div>




                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">The RupeeBoss Advantage</a> </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body"><ul class="listnone bullet bullet-check-circle-default">
                                                <li>Experienced and well-qualified personnel to ensure smooth and easy processing.</li>
                                                <li>Stage wise updating on applications status.</li>
                                                <li>Transparency in all dealings.</li>
                                                <li>Counselling and advisory services while deciding on right loan which suits you.</li>
                                                <li>Efficient and quick processing of loans.</li>
                                                <li>Branches across 30 cities in India.</li>
                                                <li>Dedicated relationship managers.</li>
                                            </ul></div>
                                                </div>
                                            </div>




                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Why Choose a Personal Loan?</a> </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                      <p>There's no limit to the number of ways a personal loan can be used. It can be taken for any personal reason, such as:</p>
                                                      <ul class="listnone bullet bullet-check-circle-default">
                                                        <li>Renovation of your house</li>
                                                        <li>To meet wedding expenses.</li>
                                                        <li>To buy a new Cell Phone</li>
                                                        <li>To plan and spend holidays with the family</li>
                                                        <li>To simply pay off credit card bills or other debts.</li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Documents Required</a> </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                      <p>Most banks have similar guidelines for documentation requirement for personal loan. The list of documents you need for a personal loan are:</p>
                                                      <ul class="listnone bullet bullet-check-circle-default">
                                                        <li>A copy of latest salary slips or salary certificate.</li>
                                                        <li>Form 16 and a copy of ITR for the last two years.</li>
                                                        <li>Copy of the appointment letter or an employment certificate to prove job continuity.</li>
                                                        <li>Last 6 months' salary account statements.</li>
                                                        <li>Proof of employment certificate.</li>
                                                         <li>Proof of employment certificate.</li>
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

    <?php }else{ ?>
   <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 st-accordion col-xs-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">                                         



                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Business Loan</a> </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">Do you own a business that needs funds for expansion? Or do you have a big business order in hand and require funds for some working capital?
                                                        <br />

If you can relate to any of the above situations, then a Business Loan is the right solution for you. Our team of dedicated professionals helps you determine your requirements, especially for small businesses; and you can get started within the shortest possible time.</div>
                                                </div>
                                            </div>




                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Documents Required</a> </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                      <p>Most banks have similar guidelines for documentation requirement for business loan. The list of documents you need for a business loan are:</p>
                                                      <p>For salaried individuals:</p>
                                                      <ul class="listnone bullet bullet-check-circle-default">
                                                <li>Proof of Identity</li>
                                                <li>Address Proof</li>
                                                <li>Date of Birth Proof</li>
                                                <li>Bank Statements</li>
                                                <li>Latest ITR along with computation of income, B/S & P&L a/c for the last 2 yrs. certified by a CA</li>
                                                <li>Proof of continuation:  Trade license /Establishment /Sales Tax certificate</li>
                                                <li>Other Mandatory Documents (Sole Prop. Decl. Or Cert. Copy of Partnership Deed, Cert. Copy of MOA, AOA & Board resolution)</li>
                                            </ul></div>
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
  <?php } ?>

  
  
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>