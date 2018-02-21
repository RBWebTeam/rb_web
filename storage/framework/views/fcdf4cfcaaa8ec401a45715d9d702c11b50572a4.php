<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <div class="iifl-image">
    <img src="images/early-salary.jpg">
    </div>

<div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="section-faq" id="section-faq">
                            <div class="">
                                
                                
                                
                                <h1 class=""><center>Early Salary</center></h1>
                                </br>
                                
                                <div class="row">    
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 450px;">
                        <h4 >Register With Us</h4>
                        <form method="POST" name="early_salary_form" id="early_salary_form">
                        <?php echo e(csrf_field()); ?>

                            <!-- Text input-->

                            <input type="hidden" name="merchantId" id="merchantId" value="66">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="FirstName">First Name</label>
                                <input id="FirstName" name="FirstName" type="text" placeholder="First Name" class="form-control input-md" onkeypress="return AllowAlphabet(event)" required="">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LastName">Last Name</label>
                                <input id="LastName" name="LastName" type="text" placeholder="Last Name" class="form-control input-md" onkeypress="return AllowAlphabet(event)" required="required">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="phoneNumber">Mobile No.</label>
                                <input id="phoneNumber" name="phoneNumber" onkeypress="return fnAllowNumeric(event)" type="text" placeholder="Mobile No." maxlength="10" class="form-control input-md" required="">
                            </div>
                            </div>



                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="Age">Age</label>
                                <input id="Age" name="Age" onkeypress="return fnAllowNumeric(event)" maxlength="2" type="text" placeholder="Age" class="form-control input-md" required="">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12" id="sal_div" style="display: none;">
                            <div class="form-group">
                                <label class="control-label sr-only" for="MonthlySalary">Monthly Take Home Salary</label>
                                <input id="MonthlySalary" name="MonthlySalary" maxlength="9" type="text" placeholder="Monthly Take Home Salary" class="form-control input-md" required="required">
                            </div>
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="LoanAmount">Monthly Take Home Salary</label>
                                <input id="LoanAmount" name="LoanAmount" maxlength="6" type="text" placeholder="Loan Amount" onkeypress="return fnAllowNumeric(event)" class="form-control input-md" required="required">
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="City">Select City</label>
                                <select id="City" name="City" class="form-control">
                                 <option selected disabled>Select City</option>
                                 <option value="Mumbai">Mumbai</option>
                                 <option value="Thane">Thane</option>
                                 <option value="Navi-Mumbai">Navi-Mumbai</option>
                                 <option value="Delhi">Delhi</option>
                                 <option value="Nodia">Nodia</option>
                                 <option value="Gurgaon">Gurgaon</option>
                                 <option value="Gaziabad">Gaziabad</option>
                                 <option value="Faridabad">Faridabad</option>
                                 <option value="Pune">Pune</option>
                                 <option value="PMPC">PMPC</option>
                                 <option value="Hyderabad">Hyderabad</option>
                                 <option value="Secunderabad">Secunderabad</option>
                                 <option value="Bangalore">Bangalore</option>
                                 <option value="Gandhinagar">Gandhinagar</option>
                                 <option value="Jaipur">Jaipur</option>
                                 <option value="Chennai">Chennai</option>
                                </select>
                            </div>
                            </div>


                            <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="control-label sr-only" for="RefferalCode">Refferal Code (If any)</label>
                                <input id="RefferalCode" name="RefferalCode" type="text" placeholder="Refferal Code (If any)" value="0" class="form-control input-md" required="required">
                            </div>
                            </div>
                             

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                        <input type="radio" id="Salary" value="Salary" name="Employment"/> Salary <input type="radio" id="Self_Employed" value="Self_Employed" name="Employment"/> Self Employed 
                                        </div>
                                        </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-sm" " id="early_salary_submit">Submit</a> </div>

                            

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

<div class="modal fade" tabindex="-1" role="dialog" id="early_salary">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Thank You!<br>
         For sharing your details. We've sent you a link to download the EarlySalary app on your mobile phone. Go ahead and start applying for instant cash!.</b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="early_salary_error">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black" ><b>Thank You!<br> 
         For sharing your details. The details that you've shared doesn't meet our basic criteria. You should be living in the 8 cities that we are operational in and drawing a minimum take home salary of Rs 20,000 (OR) Your Mobile No. Already Exists With Us. Kindly, Try With Your Alternate No.

         We've SMS'ed you the link to download the app. If you still wish to apply. </b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="salary">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Salary should be equal to 20000 OR greater than 20000.</b><h5></p></h4>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="loanamount">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirmation Status</h4>
      </div>
      <div class="modal-body">
        <h4><p id="modalerr"><h5 style="color: black"><b>Amount should be equal to 10000 &  less than (OR) equal to 100000.</b><h5></p></h4>
        
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
  $('#early_salary_submit').click(function(){
    // alert('okae');
    
      if(! $('#early_salary_form').valid())
       {
              alert('not valid');
        }
        if($('input[name=Employment]:checked').length<=0)
       {
           alert("No radio checked")
           return false;
       }
        else
        {
          if ((($('#MonthlySalary').val().length)<5))
          {
            // alert('Salary should be equal to 20000 OR greater than 20000');
            $('#salary').modal('show');
            return false;
          }
          if ((($('#LoanAmount').val().length)<5))
          {
            //alert('Amount should be between 10000-1000000');
            $('#loanamount').modal('show');
            return false;
          }
           
        $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('early-salary-submit')); ?>",
         data : $('#early_salary_form').serialize(),
         success: function(msg){
              // console.log(msg.status);
              if (msg.status=="200") 
              {
               $('#early_salary').modal('show');
              }
              else if(msg.error=="2")
              {
               $('#early_salary_error').modal('show')
              }
              
        }  
      });   
     }
  });
</script>

<script type="text/javascript">
  $('#Salary').click(function(){
     $('#sal_div').show();
  });
  $('#Self_Employed').click(function(){
    $('#sal_div').hide();
  });
</script>

<script type="text/javascript">
    function fnAllowNumeric(event) {
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          
          return false;
      }
    }
</script>

