@include('layout.header')
<br>
<div class="container" id="fh5co-hero">

  <center>
    <div class="section-title"><h1>Loan EMI Calculator</h1></div>
    <p class="sub-title">Recalculate your Loan EMI and Total Interest Due in a snap!</p>
  </center>
  <div class="row">
    <div class="col-sm-4 rw-hei" style="background-color:#fff;"><h3 class="emi-cal"><b>EMI Calculator</b></h3>
      <div class="form-group">
       <label class="control-label" for="Loan Amount">Loan Amount:</label>
       <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" onkeypress="return isNumberKey(event)"  value=""  onblur="myfun()" >
       
     </div>
     <div class="form-group">
      <label class="control-label" for="Interest Rate">Interest Rate:</label>
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest" onkeypress="return isNumberKey(event)"  value="" onblur="myfun()" >
    </div>
    <div class="form-group right-block">
     <label class="control-label" for="Loan Tenure">Loan Tenure:</label>
     <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" onkeypress="return isNumberKey(event)" value="" onblur="myfun()">
     <br>
	 
     <div class="btn-group">
	 <p id="err" style="display:none;"><span style="color:red;position:absolute;font-size:13px;">Please Fill All Inputs</span></p>
      <label class="btn btn-primary"><input type="radio" name="Year" id="Year" value="" checked="checked">Yr</label>
      <label class="btn btn-primary"><input type="radio" name="Year" id="Month" value="">Mo</label>
       
       
    </div>
    

    
   </div>
  
  </div>
  <div class="col-sm-4 rw-hei" style="background-color:lavenderblush;">
   <h3 class="emi-cal"><b>Loan Details</b></h3>
   <center>
     <p>Loan EMI :</p>
     <h2 class="em1">₹ <b><span id="emi">0</span></b></h2>
     <p>Total Payable Interest :</p>
     <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
     <p>Total Payment(Principal + Int) :</p>
     <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2>
   </center>
 </div>
 <div class="col-sm-4 rw-hei brd-rgt" style="background-color:#fff"><h3 class="emi-cal"><b>Break-up of Loan Details</b></h3>
   <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#c2da6b;"></i>&nbsp;<span>Loan EMI</span></div>
   <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#00B9B9;"></i>&nbsp;<span>Total Payable Interest</span></div>
   <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#4A9ACF;"></i>&nbsp;<span>Total Payment(Principal + Interest)</span></div>
   <div><center><canvas id="mycanvas" width="220" height="230"></div></canvas></center>
 </div>
</div>
</div>

<div class="container white-bg">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="emipaymenttable"></table>
</div>
</div>
<br>
@include('layout.footer')
@include('layout.script') 


