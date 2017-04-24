@include('layout.header')
<div id="fh5co-hero">
  <div class="container white">
  <h2 class="align-center loan-head">Working Capital</h2>
  <div class="col-md-10">

  <ul class="nav nav-tabs" id="userTabs">
  <li class="active"><a data-toggle="tab" href="#home"><b>WORKING CAPITAL</b></a></li>
  <li class="menu1"><a data-toggle="tab" href="#menu1" ><b>TERM LOAN</b></a></li>
  <li class="menu2"><a data-toggle="tab" href="#menu2"><b>PACKING CREDIT DOMESTIC</b></a></li>
  <li class="menu3"><a data-toggle="tab" href="#menu3"><b>PACKING CREDIT FOREIGN CURRENCY</b></a></li>
  <li class="menu4"><a data-toggle="tab" href="#menu4" id="proposel_ID"><b>PROPOSAL</b></a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
     <div class="col-md-12">
   <div class="col-md-3 col-xs-12"></div>
   <h4 class="col-md-2 col-xs-4"><input type="radio" name="bank1" onclick="bankName('bank1')"  checked="checked" id="bank1" value="bank1"/> Bank 1 </h4>
   <h4 class="col-md-2 col-xs-4"><input type="radio" name="bank2" id="bank2"  onclick="bankName('bank2')" /> Bank 2 </h4>
   <h4 class="col-md-2 col-xs-4"><input type="radio" name="bank3" id="bank3" onclick="bankName('bank3')"/> Bank 3 </h4>
   <a data-toggle="tab" href="#menu1" class="btn btn-success pull-right menu1act">NEXT</a>
   </div>
  <div class="col-md-4 pad-no">
  <div>
  
 <form id="WorkingCapitalCurrent">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure" value="1"  maxlength="1" id="loanTenur" onkeypress="return isNumberKey(event)" readonly>
      <div class="form-padding validate_id" style="display: none; color: red" >Please Fill All Inputs</div>
   <button class="btn btn-success pull-left btn_id"  id="working_capital">Submit</button>
   <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div>
   </div>
 </form>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
       <center class="my-saving">
       <p>Monthly Interest Paid :<b class="em1"> ₹ <span id="monthlyinterest">0</span></b></p>
       <p>Drop in interest Paid:<b class="em1">  <span id="drop_interest">0</span>%</b></p>
       <p>Monthly Saving :<b class="em1"> ₹ <span id="monthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="yearlysaving">0</span></b></p>
        
       </center>


   </div>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group loanAmountAfter" placeholder="Loan Amount" id="loanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group interestAfter" placeholder="10" value="10" id="interestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group loanTenurAfter"   value="1"     maxlength="2" id="loanTenurAfter" onkeypress="return isNumberKey(event)" readonly>

   <div >

    </div>

   </div>
   </form>
   </div>

  </div>
  
  
  </div>
  
  
  <div id="menu1" class="tab-pane fade">
  <div class="col-md-12">
  <h4 class="col-md-3 col-xs-12""></h4>
   <h4 class="col-md-2 col-xs-4"><input type="radio" name="Tbank1" onclick="TbankName('Tbank1')"  checked="checked" id="Tbank1" value="Tbank1"/> Bank 1</h4>
   <h4 class="col-md-2 col-xs-4""><input type="radio" name="Tbank2" id="Tbank2"  onclick="TbankName('Tbank2')" /> Bank 2</h4>
   <h4 class="col-md-2 col-xs-4""><input type="radio" name="Tbank3" id="Tbank3" onclick="TbankName('Tbank3')"/> Bank 3</h4>
   <a data-toggle="tab" href="#menu2" class="btn btn-success pull-right menu1act">NEXT</a>
   </div>
  <div class="col-md-4 pad-no">
  <div>
  
  <form id="term_loan_form">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
   <input type="text" class="form-control form-group" placeholder="Loan Amount" id="termloanAmount" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="terminterest"  maxlength="5" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure"  maxlength="5" id="termloanTenur" onkeypress="return isNumberKey(event)">
   <div class="form-padding validate_id" style="display: none; color: red" >Please Fill All Inputs</div>
   <button class="btn btn-success pull-left btn_id"  id="termloanid">Submit</button>
   <!-- <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div> -->
    <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="tYear"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="tMonth" value="Month"> Month</label>
    </div>
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
    <center class="my-saving">
       <p> Old Loan EMI :<b class="em1"> ₹ <span id="LoanEMI">0</span></b></p>
       <p>Drop EMI :<b class="em1"> ₹ <span id="Drop_EMI">0</span></b></p>
        <p>New Loan EMI:<b class="em1"> ₹ <span id="NewLoanEMI">0</span></b></p>
         <p>Drop-in Interest Rate:<b class="em1">  <span id="emidrop_interest">0</span>%</b></p>
         <p>Your Savings:<b class="em1"> ₹ <span id="totalYearSaving">0</span></b></p>
       </center>
    
 
   </div>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group tloanAmountAfter" placeholder="Loan Amount" id="tloanAmountAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group tinterestAfter" placeholder="10" value="10" id="tinterestAfter"  maxlength="5" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group tloanTenurAfter" placeholder=" Loan Tenure"  maxlength="5" id="tloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>

   <div >
    </div>

   </div>
   </form>
   </div>

  </div>
  </div>
  
  
  <div id="menu2" class="tab-pane fade">
      <div class="col-md-12"><a data-toggle="tab" href="#menu3" class="btn btn-success pull-right menu1act">NEXT</a></div>
  
  <div class="col-md-4 pad-no">
  <div>

  <form id="packing_credit_domesti">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group dloanAmount_id" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group dinterest" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >

<select id="loanTenur" class="form-group dloanTenur block drop-arr select-sty" name="loanTenur">
<option value="30">30 days</option>
<option value="60">60 days</option>
<option value="90">90 days</option>
<option value="180">180 days</option>
 
</select>
<br>
<div class="form-padding validate_id" style="display: none; color: red" >Please Fill All Inputs</div>
   <button class="btn btn-success pull-left btn_id"  id="packingcreditdomesti">Submit</button>
   <!-- <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div> -->
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>

        <center class="my-saving">
       <p>Interest Paid As Per Debtor Cycle :<b class="em1"> ₹ <span id="dmonthlyinterest">0</span></b></p>
       <p>Drop In Interest Paid:<b class="em1">  <span id="ddrop_interest">0</span>%</b></p>
       <p>Saving As Per Debtor Cycle :<b class="em1"> ₹ <span id="dmonthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="dyearlysaving">0</span></b></p>
       </center>

   </div>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
   <input type="text" class="form-control form-group dloanAmountAfter" placeholder="Loan Amount" id="dloanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group dinterestAfter" placeholder="10" value="7" id="dinterestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group dloanTenurAfter"    value="30 days"    maxlength="2" id="dloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>
   </div>
   </div>

  </div>
  </div>

  <div id="menu3" class="tab-pane fade">
     <div class="col-md-12"><a data-toggle="tab" href="#menu4" id="proposel_ID" class="btn btn-success pull-right proposel_ID menu1act">NEXT</a></div> 
 <div class="col-md-4 pad-no">
  <div>
  
  <form id="packing_credit_foreign_currency">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group fcloanAmount_id" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group fcinterest" placeholder="Current Rate of Interest" id="interest"  maxlength="5" onkeypress="return isNumberKey(event)" >
 <select id="loanTenur" class="form-group fcloanTenur block drop-arr select-sty" name="loanTenur">
<option value="30">30 days</option>
<option value="60">60 days</option>
<option value="90">90 days</option>
<option value="180">180 days</option>
</select>
<br>
<div class="form-padding validate_id" style="display: none; color: red" >Please Fill All Inputs</div>
   <button class="btn btn-success pull-left btn_id"  id="packingcreditforeignCurr">Submit</button>


  <!--  <div class="pull-right">
             <label><input type="radio" name="yearmonth" id="Year"  value="Year" checked="checked"> Year</label>
             <label><input type="radio" name="yearmonth" id="Month" value="Month"> Month</label>
    </div> -->
   </div>
   </form>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>

        <center class="my-saving">
       <p>Interest Paid As Per Debtor Cycle:<b class="em1"> ₹ <span id="fcmonthlyinterest">0</span></b></p>
       <p>Drop in interest Paid:<b class="em1">  <span id="fcdrop_interest">0</span>%</b></p>
       <p>Saving As Per Debtor Cycle  :<b class="em1"> ₹ <span id="fcmonthlysavinf">0</span></b></p>
       <p>Total Yearly Saving :<b class="em1"> ₹ <span id="fcyearlysaving">0</span></b></p>
       </center>

   </div>
   </div>
  </div>
  
  <div class="col-md-4 pad-no">
  <div>
   
  <div class="border heigh-bt">
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
 <table width="100%" class="table-striped table-bordered" id="table_total">
  <tr>
    <td><h3>Type Of Loan</h3></td>
    <td><h3>Bank 1 Saving</h3></td>
     <td><h3>Bank 2 Saving</h3></td>
     <td><h3>Bank 3 Saving</h3></td>
     <td><h3>Total Saving</h3></td>

  </tr>
  <tr>
    <td class="text-left"><h4 class="text-center">Working Capital</h4></td>
    <td id="bankName0"> </td>
    <td id="bankName1"> </td>
    <td id="bankName2"> </td>
    <td id="banktotal">  </td>
    
  </tr>
  <tr>
   <td class="text-left"><h4 class="text-center">Term Loan</h4></b> </td>
   <td id="TbankName0">  </td>
   <td id="TbankName1">  </td>
   <td id="TbankName2">  </td>
   <td id="Tbanktotal">  </td>
  </tr>
  <tr>
  <td class="text-left"><h4 class="text-center">Packing Credit Domestic</h4></b></</td>
  <td  id="domestic_ID">  </td>
   
  <td  >-</td>
  <td  >-</td>
  <td  id="tdomestic_ID"> </td>
  </tr>
  <tr>
  <td class="text-left" ><h4 class="text-center">Packing Credit Foreign Currency</h4></</td>
  <td id="currency_ID" > </td>
 
  <td >-</td>
  <td >-</td>
  <td id="tcurrency_ID" > </td>
  </tr>

  <tr>
    <td class="text-left"><h3 class="text-center">Total:</h3></td>
    <td id="bank1_saving"> </td>
    <td id="bank2_saving">  </td>
    <td id="bank3_saving"> </td>
    <td id="bank4_saving" class="tbank4_saving">   </td>
    </td>
  </tr>
</table>
  </div>
 
    
  
  </div>
  
  
  
  
</div>
  </div>
  <div class="col-md-2 col-xs-12 totl-sav">
  <div class="fix-pos">
    <div class="text-center guid nl-form-errors" id='bank_ID'>Total Saving 0</div>
        <div class="text-center img1"><img src="{{URL::to('images/photo.jpg')}}" alt="pop_up_pic"></div>
    </div>
    <a href="{{url('new-working-capital')}}" class="btn btn-success aply-btn disblk ">Apply Now</a>
 </div>
</div>
</br>
@include('layout.footer')
@include('layout.script')

<div id="working_model" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
       <a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
        <div class="modal-header">
       </div>
        <h4 class="modal-title text-center" id="working_i_d"></h4>
     </div>
   </div>
  </div>

<script type="text/javascript">
//var restoredSession = JSON.parse(localStorage.getItem('session'));
   sessionStorage.clear();
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
    
    var total=0,ttotal=0;
    var bankone=0,tbankone=0;
    var banktwo=0,tbanktwo=0;
    var bankthree=0,tbankthree=0;
    var session_pcd=0;
    var session_pcfc=0;
    if(obj.bank1!=null){
      bankone=parseInt(obj.bank1.monthlysavinf);
      $('#bankName0').append(bankone);
    }if(obj.bank2!=null){
       banktwo=parseInt(obj.bank2.monthlysavinf);
      $('#bankName1').append(banktwo);
     
    }if(obj.bank3!=null){
      bankthree=parseInt(obj.bank3.monthlysavinf);
      $('#bankName2').append(bankthree);
    }

       total=bankone+banktwo+bankthree;  // Working Capital total 
        $('#banktotal').append(total);
 
    if(Tobj.Tbank1!=null){
         tbankone=parseInt(Tobj.Tbank1.Drop_EMI);
      $('#TbankName0').append(tbankone);
    }if(Tobj.Tbank2!=null){
       tbanktwo=parseInt(Tobj.Tbank2.Drop_EMI);
      $('#TbankName1').append(tbanktwo);

    }if(Tobj.Tbank3!=null){
       tbankthree=parseInt(Tobj.Tbank3.Drop_EMI);
      $('#TbankName2').append(tbankthree);
    }
    

       ttotal=tbankone+tbanktwo+tbankthree;  // Term Loan total
      $('#Tbanktotal').append(ttotal);
 
  session_pcd=sessionStorage.getItem('pcd');
  session_pcfc=sessionStorage.getItem('pcfc');

 

if( session_pcd!=null){
 $('#domestic_ID').text(session_pcd);
 $('#tdomestic_ID').text(session_pcd);
}
 
 

if( session_pcfc!=null){
   $('#currency_ID').text(session_pcfc);
   $('#tcurrency_ID').text(session_pcfc);
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
             $('.validate_id').show();
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
             $('.validate_id').show();
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
             $('.validate_id').show();
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


      if(form=='term_loan_form'){
        Tenure=loanTenure*12;

        if(validation==1){
              $('.validate_id').show();
          }else{
      $.ajax({  
             type: "POST",  
             url: "{{URL::to('term-loan/calculate')}}",
             dataType:"json",
             data: {_token :_token,loanAmount:loanAmount,interest:interest,loanTenure:Tenure},
             success: function(msg){

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
          
                       termbank.LoanEMI=LoanEMI;
                       termbank.Drop_EMI=Drop_EMI;
                       termbank.NewLoanEMI=NewLoanEMI;
                       termbank.drop_interest=drop_interest;
                       termbank.totalYearSaving=totalYearSaving;
                       sessionStorage.setItem(TsessionName, JSON.stringify(termbank));
                       TbankAppend(TsessionName,Drop_EMI); 

                    if(msg.ttlf==303){
                      $('#working_i_d').empty().append('Current interest rate should be greater than 10');
                      $('#working_model').modal('show');
                     }
                 
             }


      });

}

}

//    get row 
// function nancheck(rows) {
//               rows=parseInt(rows);
//            return a= isNaN(rows)==true ? 0 : rows;
//   }
//   var table=document.getElementById("table_total");
//    var  rows1=table.rows[1].cells[1].innerHTML;
//    var  rows2=table.rows[2].cells[1].innerHTML;
//    var  rows3=table.rows[3].cells[1].innerHTML;
//    var  rows4=table.rows[4].cells[1].innerHTML;
//    var total1=nancheck(rows1)+nancheck(rows2)+nancheck(rows3)+nancheck(rows4);
//    $("#bank1_saving").text(total1);
 
//     var  rows12=table.rows[1].cells[2].innerHTML;
//     var  rows22=table.rows[2].cells[2].innerHTML;
//     var  rows32=table.rows[3].cells[2].innerHTML;
//     var  rows42=table.rows[4].cells[2].innerHTML;
//     var total2=nancheck(rows12)+nancheck(rows22)+nancheck(rows32)+nancheck(rows42);
//     $("#bank2_saving").text(total2);
  
//     var  rows13=table.rows[1].cells[3].innerHTML;
//     var  rows23=table.rows[2].cells[3].innerHTML;
//     var  rows33=table.rows[3].cells[3].innerHTML;
//     var  rows43=table.rows[4].cells[3].innerHTML;
//     var total3=nancheck(rows13)+nancheck(rows23)+nancheck(rows33)+nancheck(rows43);
//     $("#bank3_saving").text(total3);

//     var  rows14=table.rows[1].cells[4].innerHTML;
//     var  rows24=table.rows[2].cells[4].innerHTML;
//     var  rows34=table.rows[3].cells[4].innerHTML;
//     var  rows44=table.rows[4].cells[4].innerHTML;
//     var total4=nancheck(rows14)+nancheck(rows24)+nancheck(rows34)+nancheck(rows44);
//     $("#bank4_saving").text(total4);
    
//     $('#bank_ID').empty().append('Total Saving '+$(".tbank4_saving").text());
  
// get row end
      
      
});

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
                    bankAppend(sessionName,totleMonthlysaving);
                     $('.afterbtn').show();


                   
              }


                     if(msg.success0==true){

                  var numb = msg.drop_interest;
                  var month = msg.monthlyinterest.toFixed();
                  var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                  var totalYearSaving = msg.totalYearSaving.toFixed();
                 
                      
                              var convertMonth=totleMonthlysaving;
                            if(loanTenurMonth==6){
                               convertMonth=(totleMonthlysaving/2).toFixed();
                               $('#domestic_ID').text(convertMonth);
                               $('#tdomestic_ID').text(convertMonth);
                            }else if(loanTenurMonth==4){
                             convertMonth=(totleMonthlysaving/3).toFixed();
                               $('#domestic_ID').text(convertMonth);
                               $('#tdomestic_ID').text(convertMonth);
                            }else  if(loanTenurMonth==2){
                              convertMonth=(totleMonthlysaving/6).toFixed();
                               $('#domestic_ID').text(convertMonth);
                               $('#tdomestic_ID').text(convertMonth);
                            }else{
                           $('#domestic_ID').text(convertMonth);
                           $('#tdomestic_ID').text(convertMonth);
                            }
                
                  document.getElementById("ddrop_interest").innerHTML=numb;
                  document.getElementById("dmonthlyinterest").innerHTML=month;
                  document.getElementById("dmonthlysavinf").innerHTML=convertMonth;
                  document.getElementById("dyearlysaving").innerHTML=totalYearSaving;
                    

                //   $('#bank_ID').empty().append('Total Saving'+totleMonthlysaving);
                     sessionStorage.setItem("pcd",convertMonth);
                         

                     }
                  

                    if(msg.success1==true){

                  var numb = msg.drop_interest;
                  var month = msg.monthlyinterest.toFixed();
                  var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                  var totalYearSaving = msg.totalYearSaving.toFixed();
                 
                      
                   // $('#currency_ID').text(totleMonthlysaving);
                   // $('#tcurrency_ID').text(totleMonthlysaving);
                    var convertMonth1=totleMonthlysaving;
                            if(loanTenurMonth==6){
                               convertMonth1=(totleMonthlysaving/2).toFixed();
                               $('#currency_ID').text(convertMonth1);
                               $('#tcurrency_ID').text(convertMonth1);
                            }else if(loanTenurMonth==4){
                             convertMonth1=(totleMonthlysaving/3).toFixed();
                               $('#currency_ID').text(convertMonth1);
                               $('#tcurrency_ID').text(convertMonth1);
                            }else  if(loanTenurMonth==2){
                              convertMonth1=(totleMonthlysaving/6).toFixed();
                               $('#currency_ID').text(convertMonth1);
                               $('#tcurrency_ID').text(convertMonth1);
                            }else{

                              $('#currency_ID').text(convertMonth1);
                               $('#tcurrency_ID').text(convertMonth1);
                            }

                  document.getElementById("fcdrop_interest").innerHTML=numb;
                  document.getElementById("fcmonthlyinterest").innerHTML=month;
                  document.getElementById("fcmonthlysavinf").innerHTML=convertMonth1;
                  document.getElementById("fcyearlysaving").innerHTML=totalYearSaving;

               //    $('#bank_ID').empty().append('Total Saving'+totleMonthlysaving);
                    sessionStorage.setItem("pcfc",convertMonth1);
                   
                     }

              
                     if(msg.wtlf==303){   
                       $('#working_i_d').empty().append('Current interest rate should be greater than 9.5');
                       $('#working_model').modal('show'); 
                     }if(msg.ptlf==303){
                      $('#working_i_d').empty().append('Current interest rate should be greater than 7');
                      $('#working_model').modal('show');
                     }if(msg.pctlf==303){
                      $('#working_i_d').empty().append('Current interest rate should be greater than 5');
                      $('#working_model').modal('show');
                     } 

                
          }         


                  });
}


  var  totalb=0, total1=0,total2=0,total3=0,cutotal=0;

 function bankAppend(sessionName,totalYearSaving){    //    append value on proposal
            if(sessionName=='bank1'){
              total1=parseInt(totalYearSaving); 
              $('#bankName0').empty().append(total1);
             $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total1+'</h3>');
               
                }else if(sessionName=='bank2'){
                    total2=parseInt(totalYearSaving);
                   $('#bankName1').empty().append(total2);
            $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total2+'</h3>');
             
                }else if(sessionName=='bank3'){
                    total3=parseInt(totalYearSaving);
                  $('#bankName2').empty().append(total3);
               $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total3+'</h3>');
           
                }
                $('#banktotal').empty().append(totalb=total1+total2+total3);     //parseInt

              
                 $('#bank_ID').empty().append(totalb=total1+total2+total3); 
               //  $('#bank_ID').empty().append(totalb);

 }        
   //sessionStorage.clear();
 var  totalb1=0, total11=0,total21=0,total31=0;
 function TbankAppend(sessionName,totalYearSaving){    //    append value on proposal
                if(TsessionName=='Tbank1'){
                      total11=parseInt(totalYearSaving); 
                    $('#TbankName0').empty().append(total11);
                   $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total11+'</h3>');
                }else if(TsessionName=='Tbank2'){
                   total21=parseInt(totalYearSaving);
                   $('#TbankName1').empty().append(total21);
                  $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total21+'</h3>');
                }else if(TsessionName=='Tbank3'){
                  total31=parseInt(totalYearSaving);
                  $('#TbankName2').empty().append(total31);
                 $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total31+'</h3>');
                }
                $('#Tbanktotal').empty().append(totalb1=total11+total21+total31);
             
               $('#bank_ID').empty().append(totalb1=total11+total21+total31); 
               
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
 
     $('#.checked').removeClass('checked').prop('checked',false);
    });


    $("#Year").change(function(){
      var amt1 = $("#loanTenur").val();
      var yr = amt1 / 12;
      $('#loanTenur').val(yr);
    });


   $("#tMonth").change(function(){
      var amt = $("#termloanTenur").val();
      var month = amt*12;
      $('#termloanTenur').val(month);
     $('#.checked').removeClass('checked').prop('checked',false);
     
    });


    $("#tYear").change(function(){
      var amt1 = $("#termloanTenur").val();
      var yr = amt1 / 12;
      $('#termloanTenur').val(yr);
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


 $(document).ready(function(){
  
  function nancheck(rows) {
              rows=parseInt(rows);
           return a= isNaN(rows)==true ? 0 : rows;
  }
 $("#proposel_ID").click(function ( event ){
 proposal();
 });

$(".proposel_ID").click(function ( event ){

 proposal();
 });


 function proposal(){
   var table=document.getElementById("table_total");
   var  rows1=table.rows[1].cells[1].innerHTML;
   var  rows2=table.rows[2].cells[1].innerHTML;
   var  rows3=table.rows[3].cells[1].innerHTML;
   var  rows4=table.rows[4].cells[1].innerHTML;
   var total1=nancheck(rows1)+nancheck(rows2)+nancheck(rows3)+nancheck(rows4);
   $("#bank1_saving").text(total1);
 
    var  rows12=table.rows[1].cells[2].innerHTML;
    var  rows22=table.rows[2].cells[2].innerHTML;
    var  rows32=table.rows[3].cells[2].innerHTML;
    var  rows42=table.rows[4].cells[2].innerHTML;
    var total2=nancheck(rows12)+nancheck(rows22)+nancheck(rows32)+nancheck(rows42);
    $("#bank2_saving").text(total2);
  
    var  rows13=table.rows[1].cells[3].innerHTML;
    var  rows23=table.rows[2].cells[3].innerHTML;
    var  rows33=table.rows[3].cells[3].innerHTML;
    var  rows43=table.rows[4].cells[3].innerHTML;
    var total3=nancheck(rows13)+nancheck(rows23)+nancheck(rows33)+nancheck(rows43);
    $("#bank3_saving").text(total3);

    var  rows14=table.rows[1].cells[4].innerHTML;
    var  rows24=table.rows[2].cells[4].innerHTML;
    var  rows34=table.rows[3].cells[4].innerHTML;
    var  rows44=table.rows[4].cells[4].innerHTML;
    var total4=nancheck(rows14)+nancheck(rows24)+nancheck(rows34)+nancheck(rows44);
    $("#bank4_saving").text(total4);
    
     $('#bank_ID').empty().append('Total Saving<h3 class="tot-sav-txt">'+total4+'</h3>');

 }




$('.menu1act').click(function(e){
     e.preventDefault();
          var act=$(this).attr('href');
           if(act=="#menu1"){
           $(".active").removeClass("active");
           $(".menu1").addClass("active");
          }else if(act=="#menu2"){
           $(".menu1").removeClass("active");
           $(".menu2").addClass("active");
          }else if(act=="#menu3"){
           $(".menu2").removeClass("active");
           $(".menu3").addClass("active");
          }else if(act=="#menu4"){
           $(".menu3").removeClass("active");
           $(".menu4").addClass("active");
          }

});



$('input[type=radio]').on('change', function(){
    $('input[type=radio]').not(this).prop('checked', false);

    $('#tYear').addClass('checked').prop('checked', true);
    $('#Year').addClass('checked').prop('checked', true);
});

 }); 
</script>



