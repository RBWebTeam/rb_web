@include('layout.header')
<br>
<div class="container" id="fh5co-hero">
                     <div class="fh5co-contact animate-box">
                         <div class="container">
                          <div class="row">
                        <center>
                        <h1 class="loan-head">Business Loan EMI Calculator</h1>
                        <p class="sub-title">Calculate your Business Loan EMI and Total Interest Due in a snap!</p>
                      </center>
                            <div class="col-md-12">
                            <div class="row text-left comp-pg rate white-bg">
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
                                                <option value="4">4</option>
                                                <option value="5">5</option>
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
                                            <input type="text" class="form-control" id="emi" name="emi" placeholder="Total EMI "  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="no_of_emi_paid" name="no_of_emi_paid" placeholder="No Of EMI Paid"  onkeypress="return fnAllowNumeric(event)" required>
                                        </div>

                                    </div>
                                    <hr>
                                </div>
                                <a class="btn btn-primary btn-outline with-arrow mrg-top" id="ckeck_eligibility">Check Eligibility<i class="icon-arrow-right"></i></a>
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

<script type="text/javascript">
    $('#ckeck_eligibility').click(function(){
      if(! $('#business_loan_calculator_form').valid())
       {
              alert('not valid');

        }
        else
        {
           
        $.ajax({  
         type: "POST",  
         url: "{{URL::to('business-loan-calculation')}}",
         data : $('#business_loan_calculator_form').serialize(),
         success: function(msg){
              console.log(msg);
        }  
      });   
     } 
    });
</script>

<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
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

