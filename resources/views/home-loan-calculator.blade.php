@include('layout.header')
<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        
                            <div class="">
                                
                                
                                
                                <h1 class=""><center>Home Loan EMI Calculator</center></h1>
                                <p style="margin: 0 0 0px;"><center>Calculate your Home Loan EMI and Eligibility Status Due in a snap! <i class="fa fa-calculator" style="color:#000000" aria-hidden="true"></i></center></p>
                                </br>
                                
                                <div class="row">    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 400px;">
                        
                        <form class="" id="home_loan_calculator_form" name="home_loan_calculator_form" role="form" method="POST" >
                                 {{ csrf_field() }}
                            <!-- Text input-->

                             <input type="hidden" name="ProductId" id="ProductId" value="12">

                             <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ApplicantSource">Loan Tenure</label>
                                <select id="ApplicantSource" name="ApplicantSource" class="form-control">
                                                <option value="">Applicant Source</option>
                                            <option value="1">Salaried</option>
                                            <option value="2">Self-Employed</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="PropertyCost">Property Cost</label>
                                <input id="PropertyCost" name="PropertyCost" type="text" placeholder="Property Cost" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" minlength="6" maxlength="9" required>
                            </div>
                            </div>




                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LoanRequired">Loan Amount</label>
                                <input id="LoanRequired" name="LoanRequired" readonly type="text" placeholder="Loan Amount" class="form-control input-md" required="required">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LoanTenure">Loan Tenure</label>
                                <select id="LoanTenure" name="LoanTenure" class="form-control">
                                                <option selected disabled="">Loan Tenure</option>
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
                            </div>


                            
                                        <!-- Nav tabs -->
                                        



                                        <!-- Tab panes -->
                                        
                                           
                            <div class="col-md-4 col-sm-12 col-xs-12" id="income" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ApplicantIncome">Income</label>
                                <input id="ApplicantIncome" name="ApplicantIncome" type="text" placeholder="Loan Amount" class="form-control input-md" minlength="5" maxlength="9"   onkeypress="return fnAllowNumeric(event)" required>
                            </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-4 col-sm-12 col-xs-12" id="obligation" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ApplicantObligations">Loan Amount</label>
                                <input type="text" id="ApplicantObligations" name="ApplicantObligations" placeholder="Obligations" value="" onkeypress="return fnAllowNumeric(event)"  class="form-control input-md" required="required">
                            </div>
                            </div>
                            
                                            
                                           
                                                <div class="col-md-4 col-sm-12 col-xs-12" id="turnover" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="Turnover">Turnover</label>
                                <input type="text" id="Turnover" name="Turnover" placeholder="Turnover" onkeypress="return fnAllowNumeric(event)" class="form-control input-md" required="required">
                            </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-4 col-sm-12 col-xs-12" id="pat" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="ProfitAfterTax">Profit After Tax</label>
                                <input id="ProfitAfterTax" name="ProfitAfterTax" placeholder="Profit After Tax"  onkeypress="return fnAllowNumeric(event)" type="text" class="form-control input-md" required="required">
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12" id="depreciation" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="Depreciation">Depreciation</label>
                                <input id="Depreciation" name="Depreciation" placeholder="Depreciation"  onkeypress="return fnAllowNumeric(event)" type="text"  class="form-control input-md" required="required">
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12" id="remuneration" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="DirectorRemuneration">Director/Partner Remuneration </label>
                                <input id="DirectorRemuneration" name="DirectorRemuneration" placeholder="Director/Partner Remuneration " type="text" onkeypress="return fnAllowNumeric(event)" class="form-control input-md" required="required">
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

@include('layout.footer')
@include('layout.script')

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
         url: "{{URL::to('home-loan-calculation')}}",
         data : $('#home_loan_calculator_form').serialize(),
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

