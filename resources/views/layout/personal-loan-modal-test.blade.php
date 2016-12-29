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

        <li><span><input type="radio" name="emp_type" data-value="1" value="salaried"  onclick="changeTest(this,'q2');" /></span>&nbsp; salaried</li>
      <li><span><input type="radio" name="emp_type" data-value="2" value="self-employed"  onclick="changeTest(this,'q2_year');"/></span>&nbsp; self-employed </li>
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

        <li><span><input type="radio" name="obligation_type" value="yes"  onclick="changeTest(this,'q4');" /></span>&nbsp; YES</li>
      <li><span><input type="radio" name="obligation_type" value="no"  onclick="changeTest(this,'q5');"/></span>&nbsp; NO </li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>
<!-- pop 2 end -->
