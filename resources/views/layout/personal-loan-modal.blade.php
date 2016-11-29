<!-- popup1 Start-->
    <div id="page1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Your Profession?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="emp_type_form">
        <li><span><input type="radio" name="emp_type"  value="salaried"  onclick="changeTest(this,'q2');" /></span>&nbsp; salaried</li>
      <li><span><input type="radio" name="emp_type" value="self-employed"  onclick="changeTest(this,'q2');"/></span>&nbsp; self-employed (eg. doctor)</li>
      <li><span><input type="radio" name="emp_type"  value="self-employed business"  onclick="changeTest(this,'q2');"/></span>&nbsp; self-employed business</li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup1 end-->
<!-- popup2 Start-->
    <div id="page2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Any Existing Loan?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="exst_loan_form">
        <li><span><input type="radio" name="exst_loan"  value="Do"  onclick="changeTest(this,'q4');"/></span>&nbsp; Do</li>
      <li><span><input type="radio" name="exst_loan" value="Don`t"  onclick="changeTest(this,'q4');"/></span>&nbsp; Don`t</li>
     
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup2 end-->
<!-- popup3 Start-->
    <div id="page3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Loan Taken?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="loan_taken_form">
        <li><span><input type="radio" name="loan_taken"  value="Have"  onclick="changeTest(this,'q5');"/></span>&nbsp; Have</li>
      <li><span><input type="radio" name="loan_taken" value="Have  never"  onclick="changeTest(this,'q5');"/></span>&nbsp; Have Never</li>
     
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup3 end-->
<!-- popup4 Start-->
    <div id="page4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Have Credit Card?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="credit_card_form">
        <li><span><input type="radio" name="credit_card"  value="Have"  onclick="changeTest(this,'q6');"/></span>&nbsp; Have</li>
      <li><span><input type="radio" name="credit_card" value="Do Not Have"  onclick="changeTest(this,'q6');"/></span>&nbsp; Do Not Have</li>
     
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup4 end-->
<!-- popup5 Start-->
    <div id="page5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delayed EMI?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="emi_delayed_form">
        <li><span><input type="radio" name="emi_delayed"  value="Have"  onclick="changeTest(this,'btn_step1')"/></span>&nbsp; Have</li>
      <li><span><input type="radio" name="emi_delayed" value="Have not" onclick="changeTest(this,'btn_step1')"/></span>&nbsp;  Have Not</li>
     
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup5 end-->
<!-- popup6 Start 
Liza process page 2
 start-->
    <div id="page6" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get your salary via?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="salary_via_form">
        <li><span><input type="radio" name="salary_via"  value="Cheque"  onclick="changeTest(this,'step_2_btn')"/></span>&nbsp; Cheque</li>
      <li><span><input type="radio" name="salary_via" value="NEFT" onclick="changeTest(this,'step_2_btn')"/></span>&nbsp;  An Account transfer(NEFT)</li>
     <li><span><input type="radio" name="salary_via" value="Cash" onclick="changeTest(this,'step_2_btn')"/></span>&nbsp;  Cash</li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup6 end-->
<!-- popup7 Start 
Liza process page 3
 start-->
    <div id="page7" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Where Do You Live?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="city_form">
        <li><span><input type="radio" name="city_name"  value="Delhi"  onclick="changeTest(this,'stay_in')"/></span>&nbsp; Delhi</li>
      <li><span><input type="radio" name="city_name" value="Mumbai" onclick="changeTest(this,'stay_in')"/></span>&nbsp;  Mumbai</li>
     <li><span><input type="radio" name="city_name" value="Ahmedabad" onclick="changeTest(this,'stay_in')"/></span>&nbsp;  Ahmedabad</li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup7 end-->
<!-- popup8 Start -->
    <div id="page8" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Where Do You Live?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <div onchange="changeTest(this,'dob')">
    <form id="stay_in_form">
        <li><span><input type="radio" name="stay_in"  value="my own house (Self/Spouse)"  onclick="changeTest(this,'dob')"/></span>&nbsp; my own house (Self/Spouse)</li>
      <li><span><input type="radio" name="stay_in" value="a rented house (with Family)" onclick="changeTest(this,'dob')"/></span>&nbsp;  a rented house (with Family)</li>
     
      </form>
      </div>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup8 end-->
<!-- login Start-->
    <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Fill details</h4>
      </div>
      <div >
     <div> 
   <div id="send_otp">  
    <form class="form-horizontal" id="login_form" method="POST">
     {{ csrf_field() }}
   
    <div class="form-group">
    
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="your good name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="contact" class="col-sm-2 control-label">Contact</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact number"  pattern="[789][0-9]{9}" required maxlength="10" minlength="10" onkeypress="return fnAllowNumeric(event)">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10">
     <span id='msg_err' style="display: none;">oops something went wrong</span>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="product" value="personal_loan">
      <button class="btn btn-default"  id="send_otp_button" data-toggle="modal" data-target="#otp_modal">Send OTP</button>
    </div>
  </div>
  </form>
  </div>
      </div>
      </div>
      
    </div>
   
  </div>
</div>

<!-- login end-->
<!-- otp Start-->
<div id="otp_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Enter OTP</h4>
        <form id="otp_form" class="form-horizontal">
         {{ csrf_field() }}
         <input type="text" class="form-control" name="otp" id="otp" minlength="6" maxlength="6" required onkeypress="return fnAllowNumeric(event)">
         <span id='otp_err' style="display: none; color: red">oops!! OTP is wrong</span><br>
         <button class="btn btn-default"  class="form-control" id="verify_otp" >Verify</button><br>
         
      </div>
    </div>
  </div>
</div>

<!-- otp end-->
