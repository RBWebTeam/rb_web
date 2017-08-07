<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container" id="fh5co-hero">
                     <div class="fh5co-contact animate-box">
                         <div class="container">
                          <div class="row">
                        <center>
                        <h1 class="loan-head">Home Loan EMI Calculator</h1>
                        <h3><p class="sub-title" >Calculate your Home Loan EMI and Eligibility Status Due in a snap! </p></h3>
                      </center>
                      
                      <div class="col-md-2"></div>
                            <div class="col-md-8 box-shadow white-bg">
                            
                            <div class="row text-left comp-pg rate">
                                 <form class="" id="home_loan_calculator_form" name="home_loan_calculator_form" role="form" method="POST" >
                                 <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="form-group">
                                       
                                       <!-- <input type="hidden" name="ApplicantSource" id="ApplicantSource" value="1"> -->
                                      <input type="hidden" name="ProductId" id="ProductId" value="12">
                                        
                                        <div class="col-md-6">
                                          <select class="form-control block drop-arr select-sty" name="ApplicantSource" id="ApplicantSource"  required>
                                            <option value="">Applicant Source</option>
                                            <option value="1">Salaried</option>
                                            <option value="2">Self-Employed</option>
                                              
                                          </select> 
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder= "Property Cost" name="PropertyCost" id="PropertyCost" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                                        </div>


                                        
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Loan Amount" name="LoanRequired" id="LoanRequired" minlength="6" maxlength="9" required>
                                        </div>

                                        <div class="col-md-6">
                                            <select class=" form-control block drop-arr select-sty" name="LoanTenure" id="LoanTenure" required>
                                              <option disabled selected  value="">Loan Tenure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>

                                            </select> 
                                        </div>

                                        <div class="col-md-4" id="income" style="display: none;">
                                            <input type="text" class="form-control" id="ApplicantIncome" name="ApplicantIncome" placeholder="Income"  minlength="5" maxlength="9"   onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                         <div class="col-md-4" id="obligation" style="display: none;" >
                                            <input type="text" class="form-control " id="ApplicantObligations" name="ApplicantObligations" placeholder="Obligations" value="" onkeypress="return fnAllowNumeric(event)" >
                                        </div>


                                        

                                         <div class="col-md-4" id="turnover" style="display: none;">
                                            <input type="text" class="form-control " id="Turnover" name="Turnover" placeholder="Turnover" onkeypress="return fnAllowNumeric(event)"  required>
                                        </div>

                                        

                                        <div class="col-md-4" id="pat" style="display: none;">
                                            <input type="text" class="form-control" id="ProfitAfterTax" name="ProfitAfterTax" placeholder="Profit After Tax"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4" id="depreciation" style="display: none;">
                                            <input type="text" class="form-control" id="Depreciation" name="Depreciation" placeholder="Depreciation"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4" id="remuneration" style="display: none;">
                                            <input type="text" class="form-control" id="DirectorRemuneration" name="DirectorRemuneration" placeholder="Director/Partner Remuneration "  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        

                                    </div>
                                    <hr>
                                </div>
                                <div style="text-align: center;">
                                <a class="btn btn-primery btn-outline with-arrow mrg-top" id="ckeck_eligibility">Check Eligibility <i class="icon-arrow-right"></i></a></div>
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                    
</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="modal fade" tabindex="-1" role="dialog" id="home_loan_eligible">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align: center">Eligibility Status</h4>
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

<div class="modal fade" tabindex="-1" role="dialog" id="home_loan_not_eligible">
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
      if(! $('#home_loan_calculator_form').valid())
       {
              // alert('not valid');

        }
        else
        {
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('home-loan-calculation')); ?>",
         data : $('#home_loan_calculator_form').serialize(),
         success: function(msg){
              //console.log(msg.status);
              if (msg.status==1) 
              {
                 var loan_eligible = msg.data.loan_eligible;
                 //console.log(loan_eligible);
                  $('#loan_eligible').empty().append(loan_eligible);

                 var roi = msg.data.roi;
                 $('#roi').empty().append(roi);

                 var emi = msg.data.emi;
                 //console.log(emi);
                  $('#EMI').empty().append(emi);


                 var processingfee = msg.data.processingfee;
                  //console.log(processingfee);
                  $('#processingfee').empty().append(processingfee);

                  var Bank_Name = msg.data.Bank_Name;
                  //console.log(Bank_Name);
                  $('#bank_name').empty().append(Bank_Name);

                  var Bank_Logo = msg.data.Bank_Logo;
                  //console.log(Bank_Logo);
                  $('#bank_logo').html('<img src='+Bank_Logo+' width="150px">');

                  $('#home_loan_eligible').modal('show');  
              }
              else{
                $('#home_loan_not_eligible').modal('show');  
              }
        }  
      });   
     } 
    });
</script>

<script type="text/javascript">
  $(document).ready(function()
{
    function update()
    { 
      if(! $("#PropertyCost").val()){
          $("#LoanRequired").val('');
      }else{
        var cost = parseFloat($("#PropertyCost").val());
        // console.log(cost);
        var total = (cost)*80/100;
        // var total = total.toFixed(2);
        // console.log(total);
        $("#LoanRequired").val(total);
      }
    }
    $(document).on("change, keyup", "#PropertyCost", update);
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#ApplicantSource').on('change', function() {
      // console.log(this.value);
      if ( this.value == 2)

      {
        // alert('2');
        $("#turnover").show();
        $("#pat").show();
        $("#depreciation").show();
        $("#remuneration").show();
        $("#income").hide();
        $("#obligation").hide();
      }
      else if (this.value == 1) 
      {
        // alert('1');
        $("#turnover").hide();
        $("#pat").hide();
        $("#depreciation").hide();
        $("#remuneration").hide();
        $("#income").show();
        $("#obligation").show();
        
      }
    });
});
</script>

<script type="text/javascript">
  function ApplicantObligations(){
var result = true;
$("input").each(function() {
        if (!this.value) {
            this.value = 0;
        }
        
        if(jQuery.isNumeric(this.value) && this.value>=0){
            
        }else{
            result = false;
        }
    });
    return result;
}

$('#ckeck_eligibility').click(function(){
    var testInput = ApplicantObligations();
    if(testInput){
        var finalValue = $('#ApplicantObligations').val();
         $('span').text(finalValue);
    }
});
</script>

