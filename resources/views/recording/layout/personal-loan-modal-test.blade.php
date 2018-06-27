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

        <li><span><input type="radio" name="emp_type" data-value="1" value="salaried"  onclick="changeTest_new(this,'q2');" id="psalariedID" onchange="SetSession_pop('emp_typ',this.value);" /></span>&nbsp;<label for="psalariedID"> Salaried</label></li>
      <li><span><input type="radio" name="emp_type" data-value="2" id="slef_salariedID" value="self-employed"  onclick="changeTest_new(this,'q2_year');" onchange="SetSession_pop('emp_typ',this.value);"/></span> <label for="slef_salariedID">Self-employed </label></li>
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

        <li><span><input type="radio" name="obligation_type" value="do"  id="p_yesID" onclick="changeTest_new(this,'q4');" onchange="SetSession_pop('exst_loan_detail',this.value);"  /></span>  <label for="p_yesID">Do</label></li>
      <li><span><input type="radio" name="obligation_type" value="don't" id="p_no"  onclick="changeTest_new(this,'q5');" onchange="SetSession_pop('exst_loan_detail',this.value);" /></span> <label for="p_no">Don't</label></li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- pop 2 end -->