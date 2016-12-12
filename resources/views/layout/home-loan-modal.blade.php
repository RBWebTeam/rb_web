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
              <li><span><input type="radio" name="pro_identi"  value="property identified"  size="50" onclick="homeLoanFn(this,'home_property');" /></span>&nbsp; property identified</li>
            <li><span><input type="radio" name="pro_identi" value="Property not identified"  onclick="homeLoanFn(this,'home_property');"/></span>&nbsp; Property not identified</li>
            <li><span><input type="radio" name="pro_identi"  value="Transfer your existing home loan"  onclick="homeLoanFn(this,'home_property');"/></span>&nbsp; Transfer your existing home loan</li>
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
            <li><span><input type="radio" name="currnt_emp"  value="Salaried"  size="50" onclick="homeLoanFn(this,'Salaried');" /></span>&nbsp;Salaried</li>
          <li><span><input type="radio" name="currnt_emp" value="Self employed"  onclick="homeLoanFn(this,'Self_employed');"/></span>&nbsp; Self employed</li>
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
            <li><span><input type="radio" name="currnt_emp"  value="ready to move in"  size="50" onclick="homeLoanFn(this,'ready_to_move');" /></span>&nbsp;ready to move in</li>
          <li><span><input type="radio" name="currnt_emp" value="Under construction"  onclick="homeLoanFn(this,'ready_to_move');"/></span>&nbsp; Under construction</li>
          <li><span><input type="radio" name="currnt_emp" value="Plot"  onclick="homeLoanFn(this,'plot');"/>
          </span>&nbsp; Plot</li>
          </form>
       </ul>
      </div>
    </div>
   
  </div>
</div>



 <!-- home poup2 Start-->
<div id="home_page4" class="modal fade" role="dialog">
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
            <li><span><input type="radio" name="currnt_emp"  value="Purchase a plot"  size="50" onclick="homeLoanFn(this,'purchase_plot');" /></span>&nbsp;Purchase a plot</li>
          <li><span><input type="radio" name="currnt_emp" value="Construct a plot your own"  onclick="homeLoanFn(this,'construct_plot');"/></span>&nbsp; Construct a plot your own</li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>


<div id="profession_page" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content       our Profession Type-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Profession Type</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="type_of_Profession">

            <li><span>
            <input type="radio" name="profType" value="Architect"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Architect
            </li>
             <li><span>
            <input type="radio" name="profType" value="Chartered Accountant"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Chartered Accountant
            </li>
             <li><span>
            <input type="radio" name="profType" value="Company Secretary"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Company Secretary
            </li>
             <li><span>
            <input type="radio" name="profType" value="Consultant"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Consultant
            </li>
           <li><span>
            <input type="radio" name="profType" value="Accountant"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Accountant
            </li>
             <li><span>
            <input type="radio" name="profType" value="Dentist"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Dentist
            </li>
            <li><span>
            <input type="radio" name="profType" value="Engineer"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Engineer
            </li>
             <li><span>
            <input type="radio" name="profType" value="Doctor"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Doctor
            </li>
            <li><span>
            <input type="radio" name="profType" value="Lawyer"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Lawyer
            </li>
             <li><span>
            <input type="radio" name="profType" value="MBA"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;MBA
            </li>
            <li><span>
            <input type="radio" name="profType" value="Others"  size="50" onclick="homeLoanFn(this,'profType');" /></span>&nbsp;Others
            </li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>
<!--Your Bank account is with-->


<div id="account_page" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content       our Profession Type-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Profession Type</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="banck_acount">

            <li><span>
            <input type="radio" name="home_acoutn" value="HDFC"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;HDFC
            </li>
             <li><span>
            <input type="radio" name="home_acoutn" value="SBI"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;SBI
            </li>
             <li><span>
            <input type="radio" name="home_acoutn" value="ICICI"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;ICICI
            </li>
            <li><span>
            <input type="radio" name="home_acoutn" value="AXIS"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;AXIS
            </li>
            <li><span>
            <input type="radio" name="home_acoutn" value="Standard Chartered Bank"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;Standard Chartered Bank
            </li>
             <li><span>
            <input type="radio" name="home_acoutn" value="Andhra Bank"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;Andhra Bank
            </li>
             <li><span>
            <input type="radio" name="home_acoutn" value="Axis Bank"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;Axis Bank
            </li>
            <li><span>
            <input type="radio" name="home_acoutn" value="Abhyuday Co-op Bank Ltd"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;Abhyuday Co-op Bank Ltd
            </li>
            <li><span>
            <input type="radio" name="home_acoutn" value="Abhyuday Co-op Bank Ltd"  size="50" onclick="homeLoanFn(this,'home_acoutn');" /></span>&nbsp;Allahabad Bank
            </li>
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
        <h4 class="modal-title">Your relationship with the co-borrower</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="relationship_co_borrower">
            <li><span><input type="radio" name="relation_borrower_"  value="Yes"  size="50" onclick="homeLoanFn(this,'Yes');" /></span>&nbsp;Yes</li>
          <li><span><input type="radio" name="relation_borrower_" value="No"  onclick="homeLoanFn(this,'No');"/></span>&nbsp; No</li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>


<div id="home_page_borrower" class="modal fade" role="dialog">
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
            
              <li><span>
            <input type="radio" name="add_borrow" value="Spouse"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Spouse
            </li>
             <li><span>
            <input type="radio" name="add_borrow" value="Father"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Father
            </li>
             <li><span>
            <input type="radio" name="add_borrow" value="Mother"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Mother
            </li>
            <li><span>
            <input type="radio" name="add_borrow" value="Brother"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Brother
            </li>
            <li><span>
            <input type="radio" name="add_borrow" value="Sister"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Sister
            </li>
             <li><span>
            <input type="radio" name="add_borrow" value="Child"  size="50" onclick="homeLoanFn(this,'add_borrow');" /></span>&nbsp;Child
            </li>

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
            <li><span><input type="radio" name="co_borrower_emp"  value="Salaried"  size="50" onclick="homeLoanFn(this,'co_working');" /></span>&nbsp;Salaried</li>
          <li><span><input type="radio" name="co_borrower_emp" value="Self employed"  onclick="homeLoanFn(this,'co_working');"/></span>&nbsp; Self employed</li>
           <li><span><input type="radio" name="co_borrower_emp"  value="Non working"  size="50" onclick="homeLoanFn(this,'no_working');" /></span>&nbsp;Non working</li>

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
