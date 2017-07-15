@include('layout.header')
<br>
<div class="container" id="fh5co-hero">
                     <div class="fh5co-contact animate-box">
                         <div class="container">
                          <div class="row">
                        <center>
                        <h1 class="loan-head" >Personal Loan EMI Calculator</h1>
                        <p class="sub-title">Calculate your Personal Loan EMI and Eligibility Status Due in a snap! <i class="fa fa-calculator" style="color:#000000" aria-hidden="true"></i></p>
                      </center>
                      <div class="col-md-3"></div>
                            <div class="col-md-6 box-shadow brdr-blue">
                            <div class="row text-left comp-pg rate white-bg">
                                 <form class="" id="personal_loan_calculator_form" name="personal_loan_calculator_form" role="form" method="POST" >
                                 {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                       
                                       <input type="hidden" name="ApplicantSource" id="ApplicantSource" value="2">
                                       
                                       <input type="hidden" name="ProductId" id="ProductId" value="9">
                                        
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder= "Loan Amount" name="LoanRequired" id="LoanRequired" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="drop-arr block drop-arr select-sty" name="LoanTenure" id="LoanTenure" required>
                                              <option disabled selected  value="">Loan Tenure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select> 
                                        </div>
                                        

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="ApplicantIncome" name="ApplicantIncome" placeholder="Income"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                         <div class="col-md-6" >
                                            <input type="text" class="form-control " id="ApplicantObligations" name="ApplicantObligations" placeholder="Obligations" onkeypress="return fnAllowNumeric(event)"  required>
                                        </div>

                                </div>
                                    <hr>
                                </div>
                                <div style="text-align: center;">
                                <a class="btn btn-info btn-outline with-arrow mrg-top" id="check_eligibility">Check Eligibility<i class="icon-arrow-right"></i></a></div>
                                </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                    
</div>
<br>
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

