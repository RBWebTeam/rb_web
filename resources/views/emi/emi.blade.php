@include('layout.header')

        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" >
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Loan EMI Calculator</h1>
                                        <p>Recalculate your Loan EMI and Total Interest Due in a snap!</p>
                                    </div>
                                </div>
                                <div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 420px;">
  <h4 style="text-align: center;" >EMI Calculator</h4>
  
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
     <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" onkeypress="return isNumberKey(event)" minlength="2" maxlength="2" value="" onblur="myfun()" >
     <p id="err" style="display:none;"><span style="color:red;position:absolute;font-size:13px;">Please Fill All Inputs</span></p>
   
     <div>

    
      <div class="pull-right">
      
    <label><input type="radio" name="Year" id="Year" value="" checked="checked"> Year </label>
       <label><input type="radio" name="Year" id="Month" value=""> Month &nbsp;&nbsp;</label>
     
        </div>
     <button class="btn btn-primary pull-left mrg-tp">Submit</button>
    </div>
   

    
   </div>
  </div>
  </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 420px;">
                        <h4 style="text-align: center;" >Loan Details</h4>
                        <div class="mb40" style="text-align: center;">
                            <p>Loan EMI : <br><i class="fa fa-inr" style="font-size: 24px"></i> <span id="emi" style="font-size: 24px; color: #ed1c24;">0</span><br>
                            Total Payable Interest : <br><i class="fa fa-inr" style="font-size: 24px"></i> <span id="emi1"style="font-size: 24px; color: #c36265;">0</span><br>
                            Total Payment(Principal + Int) : <br><i class="fa fa-inr" style="font-size: 24px"></i> <span id="emi2" style="font-size: 24px; color: #dca3a5;">0</span></p>
                        </div>
                        
                    </div>
                </div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 420px;">
 <h4 style="text-align: center;" >Break-up of Loan Details</h4>
                        <div class="mb40" style="text-align: center;">
   <i class="fa fa-cloud" style="font-size:20px;color:#ed1c24;"></i> Loan EMI<br>
                            <i class="fa fa-cloud" style="font-size:20px;color:#c36265;"></i> Total Payable Interest<br>
                            <i class="fa fa-cloud" style="font-size:20px;color:#dca3a5;"></i> Total Payment (Principal + Int)<br>
   <div><center><canvas id="mycanvas" width="220" height="230"></div></canvas></center>
 </div>
 </div>
</div>
</div>
<br>
<div class="container mrg-top">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="emipaymenttable"></table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



@include('layout.script') 
@include('layout.footer')

