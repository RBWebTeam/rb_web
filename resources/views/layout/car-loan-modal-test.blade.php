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

        <li><span><input type="radio" name="emp_type" data-value="1" id="salari_ed" value="salaried"  onclick="changeTest_new(this,'q2');" onchange="SetSession_pop('emp_typ',this.value);" /></span>&nbsp; <label for="salari_ed">Salaried</label></li>
      <li><span><input type="radio" name="emp_type" data-value="2" id="sel_empid" value="self-employed"  onclick="changeTest_new(this,'q2_year');" onchange="SetSession_pop('emp_typ',this.value);"/></span>&nbsp; <label for="sel_empid">Self-employed </label></li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup1 end-->

   <div id="page2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Any loan?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="obligation_form">

        <li><span><input type="radio" name="obligation_type" value="do" id="yes_id"  onclick="changeTest_new(this,'q4');" onchange="SetSession_pop('exst_loan_detail',this.value);" /></span> <label for="yes_id">Do</label></li>
      <li><span><input type="radio" name="obligation_type" value="don't" id="no_id"  onclick="changeTest_new(this,'q5');" onchange="SetSession_pop('exst_loan_detail',this.value);"/></span>&nbsp;<label for="no_id">Don't</label> </li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- pop 2 end -->


   <div id="gender_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> You  are a</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="gender_form">

        <li><span><input type="radio" name="gender_type" value="male" id="maleID"  onclick="changeTest_new(this,'date_birth');" onchange="SetSession_pop('gender',this.value);"/></span>  <label for="maleID">Male</label></li>
      <li><span><input type="radio" name="gender_type" value="female" id="femalID" onclick="changeTest_new(this,'date_birth');" onchange="SetSession_pop('gender',this.value);"/></span>&nbsp;<label for="femalID"> Female</label> </li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- pop 3 end -->

<!-- co_emp_popup Start-->
    <div id="co_emp_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Your Profession?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="co_emp_type_form">

        <li><span><input type="radio" name="co_emp_type" data-value="1" id="csalaried_ID" value="salaried"  onclick="changeTest_new(this,'co_sal');" onchange="SetSession_pop('co_emp_detail',this.value);" /></span>  <label for="csalaried_ID">Salaried</label></li>
      <li><span><input type="radio" name="co_emp_type" data-value="2" id="co_self_emp" value="self-employed"  onclick="changeTest_new(this,'co_self');" onchange="SetSession_pop('co_emp_detail',this.value);"/></span>  <label for="co_self_emp">Self-employed </label></li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- co_emp_popup end-->
<!-- co pop -->
 <div id="co_popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Any loan?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="have_co_form">

        <li><span><input type="radio" name="have_co_app" value="YES"  onclick="changeTest_new(this,'step_2_btn');"  /></span> Yes</li>
      <li><span><input type="radio" name="have_co_app" value="NO"  onclick="changeTest_new(this,'step_2_btn');"/></span> No </li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- co pop end -->
<!-- co pop -->
 <div id="co_obl_yes_pop" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Any loan?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="have_co_loan_form">

        <li><span><input type="radio" name="have_co_app_loan" value="YES"  onclick="changeTest_new(this,'co_obl_emi');" onchange="SetSession_pop('co_obl_yes',this.value);" /></span>  Yes</li>
      <li><span><input type="radio" name="have_co_app_loan" value="NO"  onclick="changeTest_new(this,'last_button');" onchange="SetSession_pop('co_obl_yes',this.value);" /></span> No</li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- co pop end -->
