<?php 
namespace App\Http\Controllers;
use DB;
use App\recording\recordingModel;
?>



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




<div id="professaginst" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content       our Profession Type-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Profession Type</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="professionTypeagainst">

            <li><span>
                 <input type="radio" name="proAgainst" value="Architect"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Architect
            </li>
             <li><span>
           <input type="radio" name="proAgainst" value="Chartered Accountant"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Chartered Accountant
            </li>
             <li><span>
            <input type="radio" name="proAgainst" value="Company Secretary"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Company Secretary
            </li>
             <li><span>
                <input type="radio" name="proAgainst" value="Consultant"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Consultant
            </li>
           <li><span>
                <input type="radio" name="proAgainst" value="Accountant"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Accountant
            </li>
             <li><span>
                   <input type="radio" name="proAgainst" value="Dentist"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Dentist
            </li>
            <li><span>
                  <input type="radio" name="proAgainst" value="Engineer"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Engineer
            </li>
             <li><span>
                    <input type="radio" name="proAgainst" value="Doctor"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Doctor
            </li>
            <li><span>
                   <input type="radio" name="proAgainst" value="Lawyer"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;Lawyer
            </li>
             <li><span>
                       <input type="radio" name="proAgainst" value="MBA"  size="50" onclick="loanAgainstfn(this,'proTagainst');" /></span>&nbsp;MBA
            </li>
            <li><span>
                    <input type="radio" name="proAgainst" value="Others"  size="50" onclick="loanAgainstfn(this,'proAgainst');" /></span>&nbsp;Others
            </li>
          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>



<div id="bankAcountaginst" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content       our Profession Type-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Select Your bank account is with</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="bankAcountAgainst">
<?php  foreach ($data as $key => $value){ ?>
            <li><span>
                 <input type="radio" name="bankAcount" value="<?php echo $value->Bank_Name?>"  size="50" onclick="loanAgainstfn(this,'bankAcount');" /></span>&nbsp;<?php echo $value->Bank_Name?>
            </li>
            <?php } ?>

          </form>
        </ul>
      </div> 
    </div>
  </div>
</div>



<div id="against_co_borrw" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What is your relationship with co-borrower</h4>
        </div>
        <div class="modal-body">  
        <ul>
          <form id="against_co_bo">
            
              <li><span>
            <input type="radio" name="add_borrowAgainst" value="Spouse"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Spouse
            </li>
             <li><span>
            <input type="radio" name="add_borrowAgainst" value="Father"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Father
            </li>
             <li><span>
            <input type="radio" name="add_borrowAgainst" value="Mother"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Mother
            </li>
            <li><span>
            <input type="radio" name="add_borrowAgainst" value="Brother"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Brother
            </li>
            <li><span>
            <input type="radio" name="add_borrowAgainst" value="Sister"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Sister
            </li>
             <li><span>
            <input type="radio" name="add_borrowAgainst" value="Child"  size="50" onclick="loanAgainstfn(this,'add_borrowAgainst');" /></span>&nbsp;Child
            </li>

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
             <input type="radio" name="against_p"  data-value="1" value="salaried"   onclick="loanAgainstfn(this,'curr_emp_id','Salaried');" />
            </span>
                             &nbsp; Salaried</li> <li><span>
              <input type="radio" name="against_p" data-value="2" value="self-employed" onclick="loanAgainstfn(this,'curr_emp_id','professional');"/>
             </span>
                             &nbsp; Self Employed Professional</li><!--  <li><span>
             <input type="radio" name="against_p"  value="Self Employed Business"  onclick="loanAgainstfn(this,'curr_emp_id','Business');"/> 
        </span>              &nbsp; Self Employed Business</li> -->
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
             <input type="radio" name="co_borrow_against"  data-value="1" value="salaried"   onclick="loanAgainstfn(this,'employment_tuype_against','Salaried');" />
            </span>
                             &nbsp; Salaried</li> <li><span>
              <input type="radio" name="co_borrow_against"  data-value="2" value="self-employed" onclick="loanAgainstfn(this,'employment_tuype_against','self_emp');"/>
             </span>
                             &nbsp; Self Employed</li> <!-- <li><span>
             <input type="radio" name="co_borrow_against"  value="Non Working"  onclick="loanAgainstfn(this,'employment_tuype_against','no_work');"/> 
        </span>              &nbsp; Non Working</li> -->
         </form>
       </ul>
      </div>
    </div>
  </div>
</div>

<!-- otp end-->
