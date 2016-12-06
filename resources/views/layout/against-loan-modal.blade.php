<div id="page1aginst" class="modal fade" role="dialog">
  <div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select type of property?</h4>
    </div>
    <div class="modal-body">
       <ul> 
        <form id="against_property">
          <li>
          <span>
             <input type="radio" name="against_p"  value="Residential Property"  onclick="loanAgainstfn(this,'against2qe');" />
            </span>
                             &nbsp; Loan against Residential Property</li> <li><span>
              <input type="radio" name="against_p" value="Commercial Property" onclick="loanAgainstfn(this,'against2qe');"/>
             </span>
                             &nbsp; Loan against Commercial Property</li> <li><span>
             <input type="radio" name="against_p"  value="Industrial Property"  onclick="loanAgainstfn(this,'against2qe');"/> 
        </span>              &nbsp; Loan against Industrial Property</li>
         </form>
       </ul>
      </div>
    </div>
  </div>
</div>


<div id="curr_popup" class="modal fade" role="dialog">
  <div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select currently employed</h4>
    </div>
    <div class="modal-body">
       <ul> 
        <form id="current_emp_id">
          <li>
          <span>
             <input type="radio" name="against_p"  value="Salaried"  onclick="loanAgainstfn(this,'curr_emp_id','Salaried');" />
            </span>
                             &nbsp; Salaried</li> <li><span>
              <input type="radio" name="against_p" value="Self Employed Professional" onclick="loanAgainstfn(this,'curr_emp_id','professional');"/>
             </span>
                             &nbsp; Self Employed Professional</li> <li><span>
             <input type="radio" name="against_p"  value="Self Employed Business"  onclick="loanAgainstfn(this,'curr_emp_id','Business');"/> 
        </span>              &nbsp; Self Employed Business</li>
         </form>
       </ul>
      </div>
    </div>
  </div>
</div>



<div id="co_borrow" class="modal fade" role="dialog">
  <div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Do you want to add co-borrower</h4>
    </div>
    <div class="modal-body">
       <ul> 
        <form id="co_borrow_against">
          <li>
          <span>
             <input type="radio" name="borrower_against"  value="Yes"  onclick="loanAgainstfn(this,'borrower_against','yes');" />
            </span>
                             &nbsp; Yes</li> <li><span>
              <input type="radio" name="borrower_against" value="No" onclick="loanAgainstfn(this,'borrower_against','no');"/>
             </span>
                             &nbsp; No</li> 
            
         </form>
       </ul>
      </div>
    </div>
  </div>
</div>


<div id="employment_aginst" class="modal fade" role="dialog">
  <div class="modal-dialog"><!-- Modal content-->
    <div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select employment type of your co-borrower</h4>
    </div>
    <div class="modal-body">
       <ul> 
        <form id="employment_type_aginst">
          <li>
          <span>
             <input type="radio" name="co_borrow_against"  value="Salaried"  onclick="loanAgainstfn(this,'employment_tuype_against','Salaried');" />
            </span>
                             &nbsp; Salaried</li> <li><span>
              <input type="radio" name="co_borrow_against" value="Self Employed" onclick="loanAgainstfn(this,'employment_tuype_against','self_emp');"/>
             </span>
                             &nbsp; Self Employed</li> <li><span>
             <input type="radio" name="co_borrow_against"  value="Non Working"  onclick="loanAgainstfn(this,'employment_tuype_against','no_work');"/> 
        </span>              &nbsp; Non Working</li>
         </form>
       </ul>
      </div>
    </div>
  </div>
</div>

<!-- otp end-->
