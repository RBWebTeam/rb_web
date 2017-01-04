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

        <li><span><input type="radio" name="emp_type" data-value="1" id="salar_" value="salaried"  onclick="changeTest(this,'q2');" /></span>&nbsp;  <label for="salar_">salaried</label></li>
      <li><span><input type="radio" name="emp_type" data-value="2" id="sel_e" value="self-employed"  onclick="changeTest(this,'q2_year');"/></span>&nbsp; <label for="sel_e" >self-employed </label></li>
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

        <li><span><input type="radio" name="obligation_type" value="yes" id="yes_id"  onclick="changeTest(this,'q4');" /></span>&nbsp; <label for="yes_id" > YES</label></label></li>
      <li><span><input type="radio" name="obligation_type" value="no" id="no_id" onclick="changeTest(this,'q5');"/></span>&nbsp; <label for="no_id" >NO </label></li>
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

        <li><span><input type="radio" name="gender_type" value="male" id="male"  onclick="changeTest(this,'q8');" /></span>&nbsp; <label for="male">Male</label> </li>
      <li><span><input type="radio" name="gender_type" value="female" id="Female" onclick="changeTest(this,'q8');"/></span>&nbsp; <label for="Female">Female</label> </li>
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

        <li><span><input type="radio" name="co_emp_type" data-value="1" id="c_salaried" value="salaried"  onclick="changeTest(this,'co_sal');" /></span>&nbsp; <label for="c_salaried">salaried</label></li>
      <li><span><input type="radio" name="co_emp_type" data-value="2" value="self-employed"  onclick="changeTest(this,'co_self');" id="c_selef_emp" /></span>&nbsp; <label for="c_selef_emp"> self-employed </label></li>
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

        <li><span><input type="radio" name="have_co_app" value="YES"  onclick="changeTest(this,'step_2_btn');"  /></span>&nbsp; YES</li>
      <li><span><input type="radio" name="have_co_app" value="NO"  onclick="changeTest(this,'step_2_btn');"/></span>&nbsp; NO </li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- co pop end -->