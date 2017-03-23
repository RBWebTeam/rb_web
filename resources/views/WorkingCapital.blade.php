@include('layout.header')
<div id="fh5co-hero">
  <div class="container">
  <h2 class="align-center loan-head">Working Capital</h2>
  <div>

  <ul class="nav nav-tabs" id="userTabs">
  <li class="active"><a data-toggle="tab" href="#home"><b>WORKING CAPITAL</b></a></li>
  <li><a data-toggle="tab" href="#menu1"><b>TERM LOAN</b></a></li>
  <li><a data-toggle="tab" href="#menu2"><b>PACKING CREDIT DOMESTIC</b></a></li>
  <li><a data-toggle="tab" href="#menu3"><b>PACKING CREDIT FOREIGN CURRENCY</b></a></li>
  <li><a data-toggle="tab" href="#menu4"><b>PROPOSAL</b></a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <div class="col-md-12">
	 <div class="col-md-3"></div>
   <h4 class="col-md-2"><input type="radio" name="bank1" onclick="bankName('bank1')"  checked="checked" id="bank1" value="bank1"/> Bank 1 </h4>
   <h4 class="col-md-2"><input type="radio" name="bank2" id="bank2"  onclick="bankName('bank2')" /> Bank 2 </h4>
   <h4 class="col-md-2"><input type="radio" name="bank3" id="bank3" onclick="bankName('bank3')"/> Bank 3 </h4>
   </div>
  <div class="col-md-4">
  <div>
  
 <form id="WorkingCapitalCurrent">
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure" value="1"  maxlength="1" id="loanTenur" onkeypress="return isNumberKey(event)" readonly>
   <button class="btn btn-success pull-left"  id="working_capital">Submit</button>
   <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div>
   </div>
 </form>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
    <div class="border heigh-bt white-bg">
    <h3 class="emi-cal text-center">Your Saving</h3>
       <center class="my-saving">
       <p>Monthly Interest Paid :<b class="em1"> ₹ <span id="monthlyinterest">0</span></b></p>
       <p>Drop in interest Paid:<b class="em1">  <span id="drop_interest">0</span>%</b></p>
       <p>Monthly Saving :<b class="em1"> ₹ <span id="monthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="yearlysaving">0</span></b></p>
       </center>
    <!-- <input type="text" class="form-control form-group" placeholder="Monthly Interest Paid" id="monthlyinterest" maxlength="10"  readonly/> -->
 <!--   <input type="text" class="form-control form-group" placeholder="Drop in interest Paid" id="drop_interest"  maxlength="10" readonly/>
     <input type="text" class="form-control form-group" placeholder="Monthly Saving"   maxlength="10" readonly id="monthlysavinf"/>
   <input type="text" class="form-control form-group" placeholder="Total Yearly Saving"  maxlength="10" disabled readonly id="yearlysaving"/> -->

   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group loanAmountAfter" placeholder="Loan Amount" id="loanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group interestAfter" placeholder="10" value="10" id="interestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group loanTenurAfter"   value="1"     maxlength="2" id="loanTenurAfter" onkeypress="return isNumberKey(event)" readonly>

   <div >
  <!--  <button   class="btn btn-success pull-left afterbtn"   id="working_capitalAfter">Submit</button> -->
    <!-- <div class="pull-right">
             <label><input type="radio" name="yearmonth1" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth1" id="Month" value="Month"> Month</label>
    </div> -->
    </div>

   </div>
   </form>
   </div>

  </div>
  
  
  </div>
  
  
  <div id="menu1" class="tab-pane fade">
  <div class="col-md-12">
  <h4 class="col-md-3"></h4>
   <h4 class="col-md-2"><input type="radio" name="Tbank1" onclick="TbankName('Tbank1')"  checked="checked" id="Tbank1" value="Tbank1"/> Bank 1</h4>
   <h4 class="col-md-2"><input type="radio" name="Tbank2" id="Tbank2"  onclick="TbankName('Tbank2')" /> Bank 2</h4>
   <h4 class="col-md-2"><input type="radio" name="Tbank3" id="Tbank3" onclick="TbankName('Tbank3')"/> Bank 3</h4>
   
   </div>
  <div class="col-md-4">
  <div>
  
  <form id="term_loan_form">
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
   <input type="text" class="form-control form-group" placeholder="Loan Amount" id="termloanAmount" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="terminterest"  maxlength="5" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure"  maxlength="5" id="termloanTenur" onkeypress="return isNumberKey(event)">
   <button class="btn btn-success pull-left"  id="termloanid">Submit</button>
   <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div>
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
    <div class="border heigh-bt white-bg">
    <h3 class="emi-cal text-center">Your Saving</h3>
    <center class="my-saving">
       <p>Loan EMI :<b class="em1"> ₹ <span id="LoanEMI">0</span></b></p>
       <p>Drop EMI :<b class="em1"> ₹ <span id="Drop_EMI">0</span></b></p>
        <p>New Loan EMI:<b class="em1"> ₹ <span id="NewLoanEMI">0</span></b></p>
         <p>Drop-in Interest Rate:<b class="em1">  <span id="emidrop_interest">0</span>%</b></p>
         <p>Your Savings:<b class="em1"> ₹ <span id="totalYearSaving">0</span></b></p>
       </center>
    
   <!--  <input type="text" class="form-control form-group"placeholder="Monthly Interest Paid" id="LoanEMI"  maxlength="10"  /> -->
  <!--   <input type="text" class="form-control form-group"placeholder="Drop in interest Paid" id="Drop_EMI"  maxlength="10" /> -->
    <!-- <input type="text" class="form-control form-group"placeholder="Monthly Saving"  id="NewLoanEMI" maxlength="10" /> -->
 <!--   <input type="text" class="form-control form-group"placeholder="Total Yearly Saving" id="emidrop_interest"  maxlength="10"  />
   <input type="text" class="form-control form-group"placeholder="Monthly Saving"  id="totalYearSaving" maxlength="10" /> -->
   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group tloanAmountAfter" placeholder="Loan Amount" id="tloanAmountAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group tinterestAfter" placeholder="10" value="10" id="tinterestAfter"  maxlength="5" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group tloanTenurAfter" placeholder=" Loan Tenure"  maxlength="5" id="tloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>

   <div >
  <!--  <button   class="btn btn-success pull-left afterbtn"   id="working_capitalAfter">Submit</button> -->
    <!-- <div class="pull-right">
             <label><input type="radio" name="yearmonth1" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth1" id="Month" value="Month"> Month</label>
    </div> -->
    </div>

   </div>
   </form>
   </div>

  </div>
  </div>
  
  
  <div id="menu2" class="tab-pane fade">
    
  
  <div class="col-md-4">
  <div>
  
  <form id="packing_credit_domesti">
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group dloanAmount_id" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group dinterest" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >

   <!-- <input type="text" class="form-control form-group dloanTenur" placeholder=" Loan Tenure" value="1"  maxlength="1" id="loanTenur" onkeypress="return isNumberKey(event)" readonly> -->

<select id="loanTenur" class="form-control form-group dloanTenur" name="loanTenur">

<option value="30">30 days</option>
<option value="60">60 days</option>
<option value="90">90 days</option>
<option value="180">180 days</option>
 
</select>

   <button class="btn btn-success pull-left"  id="packingcreditdomesti">Submit</button>
   <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div>
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
    <div class="border heigh-bt white-bg">
    <h3 class="emi-cal text-center">Your Saving</h3>

        <center class="my-saving">
       <p>Interest Paid As Per Debtor Cycle :<b class="em1"> ₹ <span id="dmonthlyinterest">0</span></b></p>
       <p>Drop In Interest Paid:<b class="em1">  <span id="ddrop_interest">0</span>%</b></p>
       <p>Saving As Per Debtor Cycle :<b class="em1"> ₹ <span id="dmonthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="dyearlysaving">0</span></b></p>
       </center>
    <!-- <input type="text" class="form-control form-group" placeholder="Monthly Interest Paid"  maxlength="10"  />
   <input type="text" class="form-control form-group" placeholder="Drop in interest Paid"  maxlength="10" />
     <input type="text" class="form-control form-group" placeholder="Monthly Saving"  maxlength="10" />
   <input type="text" class="form-control form-group" placeholder="Total Yearly Saving"  maxlength="10" disabled /> -->

   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">After The Transfer</h3>
   <input type="text" class="form-control form-group dloanAmountAfter" placeholder="Loan Amount" id="dloanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group dinterestAfter" placeholder="10" value="7" id="dinterestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group dloanTenurAfter"    value="30 days"    maxlength="2" id="dloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>
   </div>
   </div>

  </div>
  </div>

  <div id="menu3" class="tab-pane fade">
    
 <div class="col-md-4">
  <div>
  
  <form id="packing_credit_foreign_currency">
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group fcloanAmount_id" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group fcinterest" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >

<!--    <input type="text" class="form-control form-group fcloanTenur" placeholder=" Loan Tenure" value="1"  maxlength="1" id="loanTenur" onkeypress="return isNumberKey(event)" readonly>
 -->
 <select id="loanTenur" class="form-control form-group fcloanTenur" name="loanTenur">

<option value="30">30 days</option>
<option value="60">60 days</option>
<option value="90">90 days</option>
<option value="180">180 days</option>
 
</select>

   <button class="btn btn-success pull-left"  id="packingcreditforeignCurr">Submit</button>


   <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div>
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
    <div class="border heigh-bt white-bg">
    <h3 class="emi-cal text-center">Your Saving</h3>

        <center class="my-saving">
       <p>Interest Paid As Per Debtor Cycle:<b class="em1"> ₹ <span id="fcmonthlyinterest">0</span></b></p>
       <p>Drop in interest Paid:<b class="em1">  <span id="fcdrop_interest">0</span>%</b></p>
       <p>Saving As Per Debtor Cycle  :<b class="em1"> ₹ <span id="fcmonthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="fcyearlysaving">0</span></b></p>
       </center>
    <!-- <input type="text" class="form-control form-group" placeholder="Monthly Interest Paid"  maxlength="10"  />
   <input type="text" class="form-control form-group" placeholder="Drop in interest Paid"  maxlength="10" />
     <input type="text" class="form-control form-group" placeholder="Monthly Saving"  maxlength="10" />
   <input type="text" class="form-control form-group" placeholder="Total Yearly Saving"  maxlength="10" disabled /> -->

   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div>
   
  <div class="border heigh-bt white-bg">
  <h3 class="emi-cal text-center">After The Transfer</h3>
   <input type="text" class="form-control form-group fcloanAmountAfter" placeholder="Loan Amount" id="fcloanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group fcinterestAfter" placeholder="10" value="5" id="fcinterestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group fcloanTenurAfter"   value="30 days"     maxlength="2" id="fcloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>
   </div>
   </div>

  </div>

  </div>
  <div id="menu4" class="tab-pane fade">
  <div class="table-responsive">
 <table width="100%" class="table-hover">
  <tr>
    <td>&nbsp;</td>
    <td>Total Saving</td>
     <td>Total Saving</td>
      <td>Total Saving</td>
  </tr>
  <tr>
    <td class="text-left">Working Capital</td>
    <td >Bank1<p id="bankName0"></p><td>Bank2<p id="bankName1"></p></td><td>Bank3<p id="bankName2"></p></td></td>
  </tr>
  <tr>
    <td class="text-left">Term Loan</td>
 <td >Bank1<p id="TbankName0"></p><td>Bank2<p id="TbankName1"></p></td><td>Bank3<p id="TbankName2"></p></td></td>
  </tr>
  <tr>
    <td class="text-left">Packing Credit Domestic</td>
    <td id="domestic_ID"></td>
  </tr>
  <tr>
    <td class="text-left" >Packing credit foreign Currency</td>
    <td id="currency_ID"></td>
  </tr>
</table>
  </div>
 
    
  
  </div>
  
  
  
  
</div>
  </div>
</div>
</br>
@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
//var restoredSession = JSON.parse(localStorage.getItem('session'));
//sessionStorage.clear();
var array=new Array;
var bank = {};
var termbank = {};
var sessionName='bank1';
var TsessionName='Tbank1';
var _token='{{csrf_token()}}';
var loanTenurMonth='';
var SessionBank = function() {
    this.bank1 =JSON.parse(sessionStorage.getItem('bank1'));
    this.bank2 = JSON.parse(sessionStorage.getItem('bank2'));
    this.bank3 = JSON.parse(sessionStorage.getItem('bank3'));
}

var TSessionBank = function() {
    this.Tbank1 =JSON.parse(sessionStorage.getItem('Tbank1'));
    this.Tbank2 = JSON.parse(sessionStorage.getItem('Tbank2'));
    this.Tbank3 = JSON.parse(sessionStorage.getItem('Tbank3'));
}
 $(document).ready(function(){
    var obj= new SessionBank();
    var Tobj=new TSessionBank();
    if( obj.bank1!=null){
      $('#bankName0').append(obj.bank1.yearlysaving);
    }if(obj.bank2!=null){
      $('#bankName1').append(obj.bank2.yearlysaving);

    }if(obj.bank3!=null){
      $('#bankName2').append(obj.bank3.yearlysaving);
    }else{
      
         // $.each(bank1, function(k, v) {
         //      $('#bankName0').append(k + " "+v);
         //      });
    }

    if(Tobj.Tbank1!=null){
      $('#TbankName0').append(Tobj.Tbank1.totalYearSaving);
    }if(Tobj.Tbank2!=null){
      $('#TbankName1').append(Tobj.Tbank2.totalYearSaving);

    }if(Tobj.Tbank3!=null){
      $('#TbankName2').append(Tobj.Tbank3.totalYearSaving);
    }
    
 


 });


var form='';
var loanAmount='';
var interest='';
var loanTenure='';
var yearmonth='';
var validation=1;   
var  ID='';
var paid=0;
   function formValidat(loanAmount,interest,loanTenure){
    if(loanAmount!='' && interest!='' && loanTenure!='' ){
        return 0;
    }else{
      return 1;
    }

   }
   
       
$("button").click(function(e){
   e.preventDefault();
   form=$(this).closest("form").attr('id');
   loanAmount = document.getElementById(form).elements[0].value;
   interest = document.getElementById(form).elements[1].value;
   loanTenure = document.getElementById(form).elements[2].value;
   yearmonth = $('input[name=yearmonth]:checked').val();
   validation=formValidat(loanAmount,interest,loanTenure);
  

       if(form=='WorkingCapitalCurrent'){
          if(validation==1){
             alert("Please Fill All Inputs");
          }else{
               ID='tlf';
                    if(9.5<=interest && 10>=interest){
                    paid=interest-(0.25);
                    }else if(interest>=10){
                    paid=10;
                     }else{
                     paid=0;
                     }
             // loanTenurMonth=moyear(yearmonth,loanTenure);
           ajax(_token,loanAmount,interest,loanTenure*12,ID,paid);
       
          }  
       }else if(form=='packing_credit_domesti'){

          if(validation==1){
             alert("Please Fill All Inputs");
          }else{
           if(7<=interest){
                    paid=7;
                    // }else if(interest>=10){
                    // paid=10;
                     }else{
                     paid=0;
                     }
           ID='pcd';

           
             if(loanTenure==30){
               loanTenure=12;
             }else if(loanTenure==60){
               loanTenure=6;
             }else if(loanTenure==90){
               loanTenure=4;

             }else if(loanTenure==180){
               loanTenure=2;

             }

           
          
           ajax(_token,loanAmount,interest,loanTenure,ID,paid);
}

       }else if(form=='packing_credit_foreign_currency'){

               if(validation==1){
             alert("Please Fill All Inputs");
          }else{
           if(5<=interest){
                    paid=5;
                    // }else if(interest>=10){
                    // paid=10;
                     }else{
                     paid=0;
                     }
           ID='pcfc';

           
             if(loanTenure==30){
               loanTenure=12;
             }else if(loanTenure==60){
               loanTenure=6;
             }else if(loanTenure==90){
               loanTenure=4;

             }else if(loanTenure==180){
               loanTenure=2;

             }

           
          
           ajax(_token,loanAmount,interest,loanTenure,ID,paid);
}

       }
      //  else if(form=='WorkingCapitalAfter'){
      //   if(validation==1){
      //        alert("Please Fill All Inputs");
      //     }else{
      //          var ID=0;
      //          var paid=10;
      //          var interestT1=$('#interest').val();
      //      ajax(_token,loanAmount,interestT1,loanTenure*12,ID,paid);
      //     }
          
      // }


      if(form=='term_loan_form'){
        Tenure=loanTenure*12;

        if(validation==1){
             alert("Please Fill All Inputs");
          }else{
      $.ajax({  
             type: "POST",  
             url: "{{URL::to('term-loan/calculate')}}",
             dataType:"json",
             data: {_token :_token,loanAmount:loanAmount,interest:interest,loanTenure:Tenure},
             success: function(msg){
             // console.log(msg);return false;
                    
                    var LoanEMI=msg.LoanEMI.toFixed();
                    var Drop_EMI=msg.Drop_EMI.toFixed();
                     var NewLoanEMI=msg.NewLoanEMI.toFixed();
                      var drop_interest=msg.drop_interest;
                       var totalYearSaving=msg.totalYearSaving.toFixed();

                  $('#LoanEMI').text(LoanEMI);
                   $('#Drop_EMI').text(Drop_EMI);
                    $('#NewLoanEMI').text(NewLoanEMI);
                     $('#emidrop_interest').text(drop_interest);
                      $('#totalYearSaving').text(totalYearSaving);
                  //document.getElementById("LoanEMI").value= msg.LoanEMI.toFixed();
                  // document.getElementById("Drop_EMI").value=msg.Drop_EMI.toFixed();
                  // document.getElementById("NewLoanEMI").value=msg.NewLoanEMI.toFixed();
                  // document.getElementById("emidrop_interest").value=msg.drop_interest.toFixed();
                  // document.getElementById("totalYearSaving").value=msg.totalYearSaving.toFixed();
 
                     termbank.LoanEMI=LoanEMI;
                     termbank.Drop_EMI=Drop_EMI;
                     termbank.NewLoanEMI=NewLoanEMI;
                     termbank.drop_interest=drop_interest;
                     termbank.totalYearSaving=totalYearSaving;
                     sessionStorage.setItem(TsessionName, JSON.stringify(termbank));
                     TbankAppend(TsessionName,totalYearSaving);
                 
             }


      });

}

}
          
});

// function Working_capittal_fn(clicked_id){
//         if(clicked_id=="working_capital"){
//            var loanAmount_id=$('#loanAmount_id').val();
//            var interest=$('#interest').val();
//            var loanTenur=$('#loanTenur').val();
//            var yearmonth=$('input[name=yearmonth]:checked').val();
//            var ID=1;    
//              if(loanAmount_id!='' && interest!=''&& loanTenur!=''){
//                 loanTenurMonth=moyear(yearmonth,loanTenur);
//            ajax(_token,loanAmount_id,interest,loanTenurMonth,ID);
//        }else{
//         alert("Please Fill All Inputs");

//        }
        
//         }else if(clicked_id=="working_capitalAfter"){
//            var loanAmount_id=$('#loanAmount_idAfter').val();
//            var interest=$('#interest').val();
//            var loanTenur=$('#loanTenurAfter').val();
//            var yearmonth=$('input[name=yearmonth1]:checked').val();
//            var ID=0;
               
//             if(loanAmount_id!='' && interest!=''&& loanTenur!=''){
//                loanTenurMonth=moyear(yearmonth,loanTenur);
//           ajax(_token,loanAmount_id,interest,loanTenur*12);
//          }else{
//                 alert("Please Fill All Inputs");
//              }
           
//         }else if(clicked_id=="credit_domestic"){
//          alert(clicked_id);
//         }else if(clicked_id=="foreign_currency"){
//          alert(clicked_id);
//         }else{


//         }
// }

 

function ajax(_token,loanAmount_id,interest,loanTenurMonth,ID,paid){
    $.ajax({  
             type: "POST",  
             url: "{{URL::to('Working-Capital/calculate')}}",
             dataType:"json",
             data: {_token :_token,loanAmount_id:loanAmount_id,interest:interest,loanTenur:loanTenurMonth,ID:ID,paid:paid},
             success: function(msg){
                var totals=0;
                 if(msg.success==true){
                  var numb = msg.drop_interest;
                  var month = msg.monthlyinterest.toFixed();
                  var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                  var totalYearSaving = msg.totalYearSaving.toFixed();
                  document.getElementById("drop_interest").innerHTML=numb;
                  document.getElementById("monthlyinterest").innerHTML=month;
                  document.getElementById("monthlysavinf").innerHTML=totleMonthlysaving;
                  document.getElementById("yearlysaving").innerHTML=totalYearSaving;
                     bank.monthlyinterest=numb;
                     bank.drop_interest=month;
                     bank.monthlysavinf=totleMonthlysaving;
                     bank.yearlysaving=totalYearSaving;
                 //  localStorage.setItem(sessionName, JSON.stringify(bank));
                     sessionStorage.setItem(sessionName, JSON.stringify(bank));
                    bankAppend(sessionName,totalYearSaving);
                     $('.afterbtn').show();
                   
              }


                     if(msg.success0==true){

                  var numb = msg.drop_interest;
                  var month = msg.monthlyinterest.toFixed();
                  var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                  var totalYearSaving = msg.totalYearSaving.toFixed();
                  document.getElementById("ddrop_interest").innerHTML=numb;
                  document.getElementById("dmonthlyinterest").innerHTML=month;
                  document.getElementById("dmonthlysavinf").innerHTML=totleMonthlysaving;
                  document.getElementById("dyearlysaving").innerHTML=totalYearSaving;
                      
                    $('#domestic_ID').text(totalYearSaving);
                      
                     }
                  

                    if(msg.success1==true){

                  var numb = msg.drop_interest;
                  var month = msg.monthlyinterest.toFixed();
                  var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                  var totalYearSaving = msg.totalYearSaving.toFixed();
                  document.getElementById("fcdrop_interest").innerHTML=numb;
                  document.getElementById("fcmonthlyinterest").innerHTML=month;
                  document.getElementById("fcmonthlysavinf").innerHTML=totleMonthlysaving;
                  document.getElementById("fcyearlysaving").innerHTML=totalYearSaving;
                      
                   $('#currency_ID').text(totalYearSaving);
                      
                     }

 
                //  if(msg.success0==true){  
                  
                // var numb = msg.drop_interest.toFixed();
                // var month = msg.monthlyinterest.toFixed();
                // var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                // var totalYearSaving = msg.totalYearSaving.toFixed();
                // document.getElementById("monthlysavinf").innerHTML=totleMonthlysaving;
                // document.getElementById("yearlysaving").innerHTML=totalYearSaving;
                //      bank.monthlysavinf=totleMonthlysaving;
                //      bank.yearlysaving=totalYearSaving;
                //      sessionStorage.setItem(sessionName, JSON.stringify(bank));
                //    bankAppend(sessionName,totalYearSaving);
                //   $('.afterbtn').show();


                
                // }
                
          }         


                  });
}



 function bankAppend(sessionName,totalYearSaving){    //    append value on proposal

                if(sessionName=='bank1'){
                  $('#bankName0').empty();
                    $('#bankName0').append(totalYearSaving);
                }else if(sessionName=='bank2'){
                  $('#bankName1').empty();
                   $('#bankName1').append(totalYearSaving);
                }else if(sessionName=='bank3'){
                  $('#bankName2').empty();
                  $('#bankName2').append(totalYearSaving);
                }
 }

 function TbankAppend(sessionName,totalYearSaving){    //    append value on proposal

                if(TsessionName=='Tbank1'){
                  $('#TbankName0').empty();
                    $('#TbankName0').append(totalYearSaving);
                }else if(TsessionName=='Tbank2'){
                  $('#TbankName1').empty();
                   $('#TbankName1').append(totalYearSaving);
                }else if(TsessionName=='Tbank3'){
                  $('#TbankName2').empty();
                  $('#TbankName2').append(totalYearSaving);
                }
 }


function moyear(yearmonth,loanTenur){     //     convert year to monthly
    if(yearmonth=='Year'){
                     loanTenurMonth=loanTenur*12;
               }else{
                loanTenurMonth=loanTenur;
               }

               return loanTenurMonth;
}

     function bankName(bank){   //   textbox clear function
          if(bank=='bank2'){
           $('#home input[type="text"]').val('');
           sessionName='bank2';
            document.getElementById("interestAfter").value=10;
            document.getElementById("loanTenur").value=1;   // working capital loanTenur
             document.getElementById("loanTenurAfter").value=1;   // working capital loanTenur after transfer
          }else if(bank=='bank3'){
                $('#home input[type="text"]').val('');
               sessionName='bank3';
                document.getElementById("interestAfter").value=10;
                document.getElementById("loanTenur").value=1;   // working capital loanTenur
                 document.getElementById("loanTenurAfter").value=1;   // working capital loanTenur after transfer
          }else{
             $('#home input[type="text"]').val('');
             sessionName='bank1';
             document.getElementById("loanTenur").value=1;   // working capital loanTenur
             document.getElementById("loanTenurAfter").value=1;   // working capital loanTenur after transfer

          }         
 }


    function TbankName(bank){   //  Term laon textbox clear function
          if(bank=='Tbank2'){
           $('#menu1 input[type="text"]').val('');
           TsessionName='Tbank2';
            document.getElementById("interestAfter").value=10;
          }else if(bank=='Tbank3'){
                $('#menu1 input[type="text"]').val('');
               TsessionName='Tbank3';
                document.getElementById("interestAfter").value=10;
          }else{
             $('#menu1 input[type="text"]').val('');
             TsessionName='Tbank1';

          }         
 }



$( "#loanAmount_id" ).keyup(function() {   //working capital 
    var value = $( this ).val();
     $('.loanAmountAfter').val(value);
  }) ;



$( "#interest" ).keyup(function() {   //working capital 
    var value = $( this ).val();
     
        if(9.5<=value && 10>=value){
          loaninterest=value-(0.25);
         $('.interestAfter').val(loaninterest);
    }else if(value>=10){
         $('.interestAfter').val(10);
           
   }else{
      $('.interestAfter').val(0);
    
   }

  }) ;

$( "#loanTenur" ).keyup(function() {
    var value = $( this ).val();
      if(value!=''){
      $('.loanTenurAfter').val(value);
  }else{
    $('#afterbtn').hide();
  }
  }) ;


    $( ".dloanAmount_id").keyup(function(){         ////  PACKING CREDIT DOMESTIC
        var value = $( this ).val();
       $('.dloanAmountAfter').val(value);
});


    $( ".fcloanAmount_id").keyup(function(){         ////  PACKING CREDIT FORIEGN
        var value = $( this ).val();
       $('.fcloanAmountAfter').val(value);
});



$('.dloanTenur').on('change', function() {   //pcd
  $('#dloanTenurAfter').val( this.value+' days' ); 
})


$('.fcloanTenur').on('change', function() {   //pcfc
  $('#fcloanTenurAfter').val( this.value+' days'); 
})


  $(document).ready(function(){
   

    $("#Month").change(function(){
      var amt = $("#loanTenur").val();
      var month = amt*12;
      $('#loanTenur').val(month);
 
     
    });


    $("#Year").change(function(){
      var amt1 = $("#loanTenur").val();
      var yr = amt1 / 12;
      $('#loanTenur').val(yr);
    });
    });


  $( "#termloanAmount" ).keyup(function() {   //Term laon
    var value = $( this ).val();
     $('.tloanAmountAfter').val(value);
  }) ;

$( "#termloanTenur" ).keyup(function() {
    var value = $( this ).val();
      if(value!=''){
      $('.tloanTenurAfter').val(value);
  }else{
    $('#afterbtn').hide();
  }
  }) ;


 
 
</script>