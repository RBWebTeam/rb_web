<!-- home poup Start-->
 <div id="home-page1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select  Purpose of your Loan?</h4>
        </div>
        <div class="modal-body">
         <ul>
          <form id="emp_type_form">
              <li><span><input type="radio" name="pro_identi"  value="property_identified"  size="50" onclick="changeTest(this,'home_property');" /></span>&nbsp; property identified</li>
            <li><span><input type="radio" name="pro_identi" value="not_identified"  onclick="changeTest(this,'home_property');"/></span>&nbsp; Property not identified</li>
            <li><span><input type="radio" name="pro_identi"  value="existing_home_laon"  onclick="changeTest(this,'home_property');"/></span>&nbsp; Transfer your existing home laon</li>
            </form>
        </ul>
      </div>
    </div>
  </div>
</div>




 <!-- home poup2 Start-->
<div id="home-page2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">How are you currently employed ?</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="how_currently_employed">
            <li><span><input type="radio" name="currnt_emp"  value="Salaried"  size="50" onclick="currently_employee(this,'Salaried');" /></span>&nbsp;Salaried</li>
          <li><span><input type="radio" name="currnt_emp" value="Self employed"  onclick="currently_employee(this,'Self_employed');"/></span>&nbsp; Self employed</li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>




<div id="home-page3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What kind of property you want?</h4>
      </div>
      <div class="modal-body">
       <ul>
         <form id="kind_of_place">
            <li><span><input type="radio" name="currnt_emp"  value="ready to move in"  size="50" onclick="kind_of_property(this,'ready_to_move');" /></span>&nbsp;ready to move in</li>
          <li><span><input type="radio" name="currnt_emp" value="Under construction"  onclick="kind_of_property(this,'construction');"/></span>&nbsp; Under construction</li>
          <li><span><input type="radio" name="currnt_emp" value="Plot"  onclick="kind_of_property(this,'plot');"/>
          </span>&nbsp; Plot</li>
          </form>
       </ul>
      </div>
    </div>
   
  </div>
</div>



 <!-- home poup2 Start-->
<div id="home-page4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What type of loan are you looking for ?</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="type_of_loan_loking">
            <li><span><input type="radio" name="currnt_emp"  value="Purchase a plot"  size="50" onclick="type_of_loan(this,'purchase_plot');" /></span>&nbsp;Purchase a plot</li>
          <li><span><input type="radio" name="currnt_emp" value="Construct a plot your own"  onclick="type_of_loan(this,'construct_plot');"/></span>&nbsp; Construct a plot your own</li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>

<div id="home-page5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Do you want to add co borrower?</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="add_co_borrower">
            <li><span><input type="radio" name="co_borrower_"  value="Yes"  size="50" onclick="co_borrower_f(this,'Yes');" /></span>&nbsp;Yes</li>
          <li><span><input type="radio" name="co_borrower_" value="No"  onclick="co_borrower_f(this,'No');"/></span>&nbsp; No</li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>

<div id="home-page6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Do you want to add co borrower?</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="employment__type">
            <li><span><input type="radio" name="co_borrower_emp"  value="Salaried"  size="50" onclick="employment_f(this,'Salaried_');" /></span>&nbsp;Salaried</li>
          <li><span><input type="radio" name="co_borrower_emp" value="Self_employed"  onclick="employment_f(this,'Self_employed_');"/></span>&nbsp; Self_employed</li>
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
