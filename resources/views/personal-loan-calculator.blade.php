@include('layout.header')
<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Personal Loan Calculator</h1>
                                        <p>Calculate your Personal Loan EMI and Eligibility Status Due in a snap! <i class="fa fa-calculator" style="color:#000000" aria-hidden="true"></i></p>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 260px;">
                       <!--  <h4 style="text-align: center;" >EMI Calculator</h4> -->
                        <form class="" id="personal_loan_calculator_form" name="personal_loan_calculator_form" role="form" method="POST" >
                                 {{ csrf_field() }}
                                        <div class=" ">
                                        <br>
                                            <!-- Text input-->
                                             <input type="hidden" name="ApplicantSource" id="ApplicantSource" value="2">
                                       
                                             <input type="hidden" name="ProductId" id="ProductId" value="9">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="LoanRequired">Loan Amount<span class=" "> </span></label>
                                                    <input id="LoanRequired" name="LoanRequired" type="text" placeholder="Loan Amount" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <select class="form-control drop-arr block drop-arr select-sty" name="LoanTenure" id="LoanTenure" required>
                                              <option disabled selected  value="">Loan Tenure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select> 
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="ApplicantIncome">Income<span class=" "> </span></label>
                                                    <input id="ApplicantIncome" name="ApplicantIncome" type="text" placeholder="Income" onkeypress="return fnAllowNumeric(event)" class="form-control input-md" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="ApplicantObligations">Obligations<span class=" "> </span></label>
                                                    <input id="ApplicantObligations" name="ApplicantObligations" type="text" placeholder="Obligations" class="form-control input-md" required>
                                                </div>
                                            </div>

                                             <!-- Button -->
                                            <div class="col-md-5 col-xs-6">
                                                <a class="btn btn-default btn-sm" id="check_eligibility">Check Eligibility</a>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </form>
                        
                    </div>
                </div>
               
               
                                    
                                </div>
                              
                            </div>
                            <!-- /.section title start-->
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="personal_loan_eligible">
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

<div class="modal fade" tabindex="-1" role="dialog" id="personal_loan_not_eligible">
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
    $('#check_eligibility').click(function(){

      if(! $('#personal_loan_calculator_form').valid())
       {
              // alert('not valid');

        }
        else
        {
           
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('personal-loan-calculation')}}",
         data : $('#personal_loan_calculator_form').serialize(),
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

                  $('#personal_loan_eligible').modal('show');  
              }
              else{
                $('#personal_loan_not_eligible').modal('show');  
              }
        }  
      });   
     } 
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

$('#check_eligibility').click(function(){
    var testInput = ApplicantObligations();
    if(testInput){
        var finalValue = $('#ApplicantObligations').val();
         $('span').text(finalValue);
    }
});
</script>

