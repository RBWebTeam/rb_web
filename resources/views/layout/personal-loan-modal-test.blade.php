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

        <li><span><input type="radio" name="emp_type" data-value="1" value="salaried"  onclick="changeTest_new(this,'q2');" id="psalariedID" onchange="SetCookie_pop('personal_loan_emp_type',this.value,1);"/></span>&nbsp;<label for="psalariedID"> salaried</label></li>
      <li><span><input type="radio" name="emp_type" data-value="2" id="slef_salariedID" value="self-employed"  onclick="changeTest_new(this,'q2_year');" onchange="SetCookie_pop('personal_loan_emp_type',this.value,1);"/></span>&nbsp; <label for="slef_salariedID"> self-employed </label></li>
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

        <li><span><input type="radio" name="obligation_type" value="yes" id="p_yesID" onclick="changeTest_new(this,'q4');" onchange="SetCookie_pop('personal_loan_exst_loan_detail',this.value,1);"/></span>&nbsp; <label for="p_yesID">YES</label></li>
      <li><span><input type="radio" name="obligation_type" value="no" id="p_no"  onclick="changeTest_new(this,'q5');" onchange="SetCookie_pop('personal_loan_exst_loan_detail',this.value,1);"/></span>&nbsp; <label for="p_no"> NO </label></li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- pop 2 end -->
