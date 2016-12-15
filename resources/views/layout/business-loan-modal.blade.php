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
    <form id="profession_type_form">
        <li><span><input type="radio" name="emp_type"  value="Self Employed Business" onchange="changeTest(this,'type_of_profession')" /></span>&nbsp; Self Employed Business</li>
      <li><span><input type="radio" name="emp_type" value="Self Employed Professional"  onclick="changeTest(this,'type_of_emp_profession');"/></span>&nbsp; Self Employed Professional(eg. doctor)</li>
      
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

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Self Employed Business?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="self_employed_loan_form">
        <li><span><input type="radio" name="self_employed"  value="Proprietor"  onclick="changeTest(this,'turnover');"/></span>&nbsp; Proprietor</li>
      <li><span><input type="radio" name="self_employed" value="Partnership Firm"  onclick="changeTest(this,'turnover');"/></span>&nbsp; Partnership Firm</li>
      <li><span><input type="radio" name="self_employed"  value="Pvt Ltd company"  onclick="changeTest(this,'turnover');"/></span>&nbsp; Pvt Ltd company</li>
      <li><span><input type="radio" name="self_employed"  value="Director applying as an Individual"  onclick="changeTest(this,'turnover');"/></span>&nbsp; Director applying as an Individual</li>
      <li><span><input type="radio" name="self_employed"  value="Other Business"  onclick="changeTest(this,'turnover');"/></span>&nbsp; Other Business</li>
     
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
        <h4 class="modal-title">Self Employed Professional?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="empl_form">
        <li><span><input type="radio" name="self_employed_bussiness"  value="Doctor"  onclick="changeTest(this,'gross_annual');"/></span>&nbsp; Doctor</li>
      <li><span><input type="radio" name="self_employed_bussiness" value="Chartered Accountant(CA)"  onclick="changeTest(this,'gross_annual');"/></span>&nbsp; Chartered Accountant(CA)</li>
      <li><span><input type="radio" name="self_employed_bussiness"  value="Company Secretary(CS)"  onclick="changeTest(this,'gross_annual');"/></span>&nbsp;Company Secretary(CS)</li>
      <li><span><input type="radio" name="self_employed_bussiness"  value="Architect(B.Arch)"  onclick="changeTest(this,'gross_annual');"/></span>&nbsp;Architect(B.Arch)</li>
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

<!-- popup3 end-->

