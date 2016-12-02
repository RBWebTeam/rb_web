<!-- popup1 Start-->
    <div id="page1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Type of Car?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <form id="car_type_form">
        <li><span><input type="radio" name="car_type"  value="New Car"  onclick="changeTest(this,'preferred')"   /></span>&nbsp; New Car</li>
      <li><span><input type="radio" name="car_type" value="Used Car"  onclick="changeTest(this,'manufacture')"/></span>&nbsp; Used Car</li>
      
      </form>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>

 
    <div id="page2" class="modal fade" role="dialog">
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
        <li><span><input type="radio" name="salary_via"  value="Cheque"  onclick="changeTest(this,'salary_deposit')"/></span>&nbsp; Cheque</li>
      <li><span><input type="radio" name="salary_via" value="NEFT" onclick="changeTest(this,'salary_deposit')"/></span>&nbsp;  An Account transfer(NEFT)</li>
     <li><span><input type="radio" name="salary_via" value="Cash" onclick="changeTest(this,'salary_deposit')"/></span>&nbsp;  Cash</li>
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

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Where Do You Live?</h4>
      </div>
      <div class="modal-body">
      
    <ul>
    <div onchange="changeTest(this,'birth')">
    <form id="stay_in_form">
        <li><span><input type="radio" name="stay_in"  value="my own house (Self/Spouse)"  onclick="changeTest(this,'birth')"/></span>&nbsp; my own house (Self/Spouse)</li>
      <li><span><input type="radio" name="stay_in" value="a rented house (with Family)" onclick="changeTest(this,'birth')"/></span>&nbsp;  a rented house (with Family)</li>
       <li><span><input type="radio" name="stay_in"  value="a rented house (with Friends)"  onclick="changeTest(this,'birth')"/></span>&nbsp; a rented house (with Friends)</li>
       <li><span><input type="radio" name="stay_in"  value="a rented house (Staying alone)"  onclick="changeTest(this,'birth')"/></span>&nbsp; a rented house (Staying alone)</li>
       <li><span><input type="radio" name="stay_in"  value="Paying guest"  onclick="changeTest(this,'birth')"/></span>&nbsp; Paying guest</li>
       <li><span><input type="radio" name="stay_in"  value=" Hostel"  onclick="changeTest(this,'birth')"/></span>&nbsp; Hostel</li>
       <li><span><input type="radio" name="stay_in"  value="y own house (Parent/Siblings)"  onclick="changeTest(this,'birth')"/></span>&nbsp; my own house (Parent/Siblings)</li>
       <li><span><input type="radio" name="stay_in"  value="Company provided house"  onclick="changeTest(this,'birth')"/></span>&nbsp; Company provided house</li>
     
     
      </form>
      </div>
      </ul>
      
      </div>
      
    </div>
   
  </div>
</div>