@include('layout.header')
<div class="container" id="fh5co-hero">
                     <div class="fh5co-contact animate-box">
                         <div class="container">
                          <div class="row">
                        <center>
                        <h1 class="loan-head">Business Loan EMI Calculator</h1>
                        <h3><p class="sub-title">Calculate your Business Loan EMI and Eligibility Status Due in a snap!</p></h3>
                      </center>
					  
					  <div class="col-md-2"></div>
                            <div class="col-md-8 box-shadow white-bg comp-pg">
							
                            <div class="row text-left rate pad">
                                 <form class="" id="business_loan_calculator_form" name="business_loan_calculator_form" role="form" method="POST" >
                                 {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                       <input type="hidden" name="applicant_dob" id="applicant_dob" value="1980-12-12">
                                       <input type="hidden" name="emp_detail" id="emp_detail" value="2">
                                       <input type="hidden" name="Bank_Id" id="Bank_Id" value="113">
                                       <input type="hidden" name="ProductId" id="ProductId" value="13">
                                        
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder= "Loan Amount" name="loan_amount" id="loan_amount" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="block drop-arr select-sty" name="loan_tenure" id="loan_tenure" required>
                                              <option disabled selected  value="">Loan Tenure</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                
                                            </select> 
                                        </div>
                                        <div class="col-md-4 lst-nam">
                                            <input type="text" class="form-control lastReporteddob" placeholder="Date Of Incorporation" name="date" id="date" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="turnover" name="turnover" placeholder="Turnover"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                         <div class="col-md-4">
                                            <input type="text" class="form-control " id="interest_paid" name="interest_paid" placeholder="Interest Paid On Loans" onkeypress="return fnAllowNumeric(event)"  required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control " id="profit_after_tax" name="profit_after_tax" placeholder="Profit After Tax" onkeypress="return fnAllowNumeric(event)"  required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="depreciation" name="depreciation" placeholder="Depreciation"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="partner_remuneration" name="partner_remuneration" placeholder="Dir/Partners Remuneration"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="emi" name="emi" placeholder="Total EMI Paying Currently "  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_of_emi_paid" name="no_of_emi_paid" placeholder="No Of EMI Paid"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                    </div>
                                    <hr>
                                </div>
                                <div style="text-align: center;">
                                <a class="btn btn-primery btn-outline with-arrow mrg-top" id="ckeck_eligibility">Check Eligibility<i class="icon-arrow-right"></i></a></div>
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
         url: "{{URL::to('business-loan-calculation')}}",
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

