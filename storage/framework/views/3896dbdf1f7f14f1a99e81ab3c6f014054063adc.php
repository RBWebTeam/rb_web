<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                
                                
                                <h1 class=""><center>Business Loan EMI Calculator</center></h1>
                                <p style="margin: 0 0 0px;"><center>Calculate your Business Loan EMI and Eligibility Status Due in a snap! <i class="fa fa-calculator" style="color:#000000" aria-hidden="true"></i></center></p>
                                </br>
                                
                                <div class="row">    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: auto;float: left;">
                        
                        <form class="" id="business_loan_calculator_form" name="business_loan_calculator_form" role="form" method="POST" >
                                 <?php echo e(csrf_field()); ?>

                            <!-- Text input-->

                            <input type="hidden" name="applicant_dob" id="applicant_dob" value="1980-12-12">
                                       <input type="hidden" name="emp_detail" id="emp_detail" value="2">
                                       <input type="hidden" name="Bank_Id" id="Bank_Id" value="113">
                                       <input type="hidden" name="ProductId" id="ProductId" value="13">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="loan_amount">Loan Amount</label>
                                <input id="loan_amount" name="loan_amount" type="text" placeholder="Loan Amount" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="loan_tenure">Loan Tenure</label>
                                <select id="loan_tenure" name="loan_tenure" class="form-control" required>
                                                <option selected disabled="">Loan Tenure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                </select>
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="date">Date Of Incorporation</label>
                                <input id="date" name="date" type="text" placeholder="Date Of Incorporation" class="form-control input-md lastReporteddob" required="required">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="turnover">Turnover</label>
                                <input id="turnover" name="turnover" type="text" placeholder="Turnover" class="form-control input-md"  onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>
                            </div>



                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="interest_paid">Interest Paid On Loans</label>
                                <input id="interest_paid" name="interest_paid" type="text" placeholder="Interest Paid On Loans" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>
                            </div>


                           

                          

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="profit_after_tax">Profit After Tax</label>
                                <input id="profit_after_tax" name="profit_after_tax" type="text" placeholder="Profit After Tax" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>
                            </div>
                            


                           

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="depreciation">Depreciation</label>
                                <input id="depreciation" name="depreciation" type="text" placeholder="Depreciation" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>
                            </div>



                             <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="partner_remuneration">Dir/Partners Remuneration</label>
                                <input id="partner_remuneration" name="partner_remuneration" type="text" placeholder="Dir/Partners Remuneration" class="form-control input-md" onkeypress="fnAllowNumeric(event)" required="required">
                            </div>
                            </div>



                             <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="emi">Total EMI Paying Currently</label>
                                <input id="emi" name="emi" type="text" onkeypress="fnAllowNumeric(event)" placeholder="Total EMI Paying Currently" class="form-control input-md" required="required">
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="no_of_emi_paid">No Of EMI Paid</label>
                                <input id="no_of_emi_paid" name="no_of_emi_paid" type="text" onkeypress="fnAllowNumeric(event)" onkeypress="fnAllowNumeric(event)" placeholder="No Of EMI Paid" class="form-control input-md" required="required">
                            </div>
                            </div>

                            


                    <div class="col-md-12">
                                    
                            <a class="btn btn-default btn-sm" id="ckeck_eligibility">Check Eligibility</a>
                                                
                    </div>

                            

                        </form>
                        
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
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="business_eligible">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eligibility Status</h4>
      </div>
      <div class="modal-body">
        <center>
        <span id="bank_logo"></span>
        
        <h4><b><p>Proposed Bank: <span style="color:#9333FF; font-family:arial; padding:5px 0px;" id="bank_name"></span>.</p></b></h4>
        <h4><b><p>Loan Eligible: ₹<span style="color:#c2da6b; font-family:arial; padding:5px 0px;" id="loan_eligible"></span>.</p></b></h4>
        <h4><b><p>Rate Of Interest: <span style="color:#00B9B9; font-family:arial; padding:5px 0px;" id="roi"></span>%.</p></b></h4>
        <h4><b><p>Proposed EMI: ₹<span style="color:#4A9ACF; font-family:arial; padding:5px 0px;" id="EMI"></span>.</p></b></h4>
        <h4><b><p>Processing Fee: ₹<span style="color:#33FFEC; font-family:arial; padding:5px 0px;" id="processingfee"></span>.</p></b></h4>
        </center>
      </div>
      
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="business_not_eligible">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Eligibility Status</h4>
      </div>
      <div class="modal-body">
        
        <h4><p><b>Oops!!! You are Not Eligibile</b></p></h4>
        
      </div>
      
      
    </div>
  </div>
</div>

<script type="text/javascript">
    $('#ckeck_eligibility').click(function(){
      if(! $('#business_loan_calculator_form').valid())
       {
              // alert('not valid');

        }
        else
        {
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('business-loan-calculation')); ?>",
         data : $('#business_loan_calculator_form').serialize(),
         success: function(msg){
              console.log(msg.status);
              if (msg.status==1) 
              {
                 var loan_eligible = msg.data.loan_eligible;
                 console.log(loan_eligible);
                  $('#loan_eligible').empty().append(loan_eligible);

                 var roi = msg.data.roi;
                 $('#roi').empty().append(roi);

                 var emi = msg.data.emi;
                 console.log(emi);
                  $('#EMI').empty().append(emi);


                 var processingfee = msg.data.processingfee;
                  console.log(processingfee);
                  $('#processingfee').empty().append(processingfee);

                  var Bank_Name = msg.data.Bank_Name;
                  console.log(Bank_Name);
                  $('#bank_name').empty().append(Bank_Name);

                  var Bank_Logo = msg.data.Bank_Logo;
                  console.log(Bank_Logo);
                  $('#bank_logo').html('<img src='+Bank_Logo+' width="150px">');

                  $('#business_eligible').modal('show');  
              }
              else{
                $('#business_not_eligible').modal('show');  
              }
        }  
      });   
     } 
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear();
    d.setFullYear(year);

    $(".lastReporteddob").datepicker({ dateFormat: "yy-mm-dd",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

