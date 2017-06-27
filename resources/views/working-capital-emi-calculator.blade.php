
@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

  <center>
    <h1 class="loan-head">Working Capital EMI Calculator</h1>
    <!-- <p class="sub-title">Recalculate your Loan EMI and Total Interest Due in a snap!</p>  -->
  </center>
  <div class="row">

    <div class="col-sm-4">
	<div class="heigh-bt2 pad1 white">
	<!--  <h3 class="emi-cal"><b>WC Calculator</b></h3> -->
	
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Turnover/Topline</label>
       <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  value=""  onblur="myfun()" >
       
     </div>
     <div class="form-group">
      <label class="control-label" for="Interest Rate">Depreciation</label>
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest" onkeypress="return isNumberKey(event)"  value="" onblur="myfun()" >
    </div>
    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Finance Cost</label>
     <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" value="" onblur="myfun()" >
    
    
   </div>
   <div class="form-group">
       <label class="control-label" for="Loan Amount">Inventory</label>
       <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  value=""  onblur="myfun()" >
       
     </div>
  </div>
  </div>
  
  
  
  <div class="col-sm-4">
	<div class="heigh-bt2 pad1 white">
      
     <div class="form-group">
      <label class="control-label" for="Interest Rate">Debtors</label>
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest" onkeypress="return isNumberKey(event)"  value="" onblur="myfun()" >
    </div>
    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Creditors</label>
     <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" value="" onblur="myfun()" >
	 </div>
	 
	 <div class="form-group">
      <label class="control-label" for="Interest Rate">Existing OD/CCcx</label>
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest" onkeypress="return isNumberKey(event)"  value="" onblur="myfun()" >
    </div>
     <div>

	   <button type="submit" class="btn btn-primary pull-left">Submit</button>
    </div>
   

    
   
  </div>
  </div>
  
  
  
 <div class="col-sm-4 brd-rgt">
  <div class="heigh-bt2 pad1 white">
 <h3 class="emi-cal"><b>Eligible Loan Amount</b></h3>
   
 </div>
 </div>

</div>
</br>
</div>

@include('layout.footer')
@include('layout.script') 




