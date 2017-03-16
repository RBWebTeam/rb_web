@include('layout.header')
<div id="fh5co-hero">
  <div class="container">
  <h2 class="align-center loan-head">Working Capital</h2>
  <div class="col-md-12 pad1 white-bg">

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
   <h4 class="wc-center"><input type="radio" name="bank1" onclick="bankName('bank1')"  checked="checked" id="bank1" value="bank1"/> Bank 1 &nbsp; &nbsp; <input type="radio" name="bank2" id="bank2"  onclick="bankName('bank2')" /> Bank 2 &nbsp; &nbsp;  <input type="radio" name="bank3" id="bank3" onclick="bankName('bank3')"/> Bank 3&nbsp;  &nbsp; </h4>
   </div>
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
  
 <form id="WorkingCapitalCurrent">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount" id="loanAmount_id" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="interest"  maxlength="2" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure"  maxlength="2" id="loanTenur" onkeypress="return isNumberKey(event)">
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
  <div class="white-bg heigh-bt">
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
       <center class="my-saving">
       <p>Monthly Interest Paid :<b class="em1"> ₹ <span id="monthlyinterest">0</span></b></p>
       <p>Drop in interest Paid:<b class="em1"> ₹ <span id="drop_interest">0</span></b></p>
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
  <div class="white-bg heigh-bt">
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group loanAmountAfter" placeholder="Loan Amount" id="loanAmount_idAfter" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group interestAfter" placeholder="10" value="10" id="interestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group loanTenurAfter" placeholder=" Loan Tenure"  maxlength="2" id="loanTenurAfter" onkeypress="return isNumberKey(event)" >

   <div >
   <button   class="btn btn-success pull-left afterbtn"   id="working_capitalAfter">Submit</button>
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
   <h4 class="wc-center"><input type="radio" name="tbank1" onclick="TbankName('bank1')"  checked="checked" id="tbank1" value="bank1"/> Bank 1 &nbsp; &nbsp; <input type="radio" name="tbank2" id="tbank2"  onclick="TbankName('bank2')" /> Bank 2 &nbsp; &nbsp;  <input type="radio" name="tbank3" id="tbank3" onclick="TbankName('bank3')"/> Bank 3&nbsp;  &nbsp; </h4>
   </div>
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
  
  <form id="term_loan_form">
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
   <input type="text" class="form-control form-group" placeholder="Loan Amount" id="termloanAmount" maxlength="10"  onkeypress="return isNumberKey(event)">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest" id="terminterest"  maxlength="2" onkeypress="return isNumberKey(event)" >
   <input type="text" class="form-control form-group" placeholder=" Loan Tenure"  maxlength="2" id="termloanTenur" onkeypress="return isNumberKey(event)">
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
  <div class="white-bg heigh-bt">
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
    <center class="my-saving">
       <p>Loan EMI :<b class="em1"> ₹ <span id="LoanEMI">0</span></b></p>
       <p>Drop EMI :<b class="em1"> ₹ <span id="Drop_EMI">0</span></b></p>
        <p>New Loan EMI:<b class="em1"> ₹ <span id="NewLoanEMI">0</span></b></p>
         <p>Drop-in Interest Rate:<b class="em1"> ₹ <span id="emidrop_interest">0</span></b></p>
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
  <div class="white-bg heigh-bt">
   <form id=WorkingCapitalAfter>
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
     <input type="text" class="form-control form-group tloanAmountAfter" placeholder="Loan Amount" id="tloanAmountAfter" maxlength="10"  onkeypress="return isNumberKey(event)" readonly>
   <input type="text" class="form-control form-group tinterestAfter" placeholder="10" value="10" id="tinterestAfter"  maxlength="2" onkeypress="return isNumberKey(event)"  readonly>
   <input type="text" class="form-control form-group tloanTenurAfter" placeholder=" Loan Tenure"  maxlength="2" id="tloanTenurAfter" onkeypress="return isNumberKey(event)" readonly>

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
  <div class="white-bg heigh-bt">
  
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount"  maxlength="10">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest"  maxlength="10">
    <input type="text" class="form-control form-group" placeholder="Sundry Debtors Cycle"  maxlength="10">
   <button class="btn btn-success pull-left " onclick="Working_capittal_fn(this.id)" id="credit_domestic">Submit</button>
   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
    <input type="text" class="form-control form-group" placeholder="Monthly Interest Paid"  maxlength="10"  />
   <input type="text" class="form-control form-group" placeholder="Drop in interest Paid"  maxlength="10" />
     <input type="text" class="form-control form-group" placeholder="Monthly Saving"  maxlength="10" />
   <input type="text" class="form-control form-group" placeholder="Total Yearly Saving"  maxlength="10" disabled />
   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
   
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount"  maxlength="10">
    <input type="text" class="form-control form-group " placeholder="Current Rate of Interest"  maxlength="10">
   <button class="btn btn-success pull-left " onclick="Working_capittal_fn(this.id)" id="credit_domestic">Submit</button>
   </div>
   </div>

  </div>
  </div>
  <div id="menu3" class="tab-pane fade">
    

  <div class="col-md-4">
  <div class="white-bg heigh-bt">
  
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">Current Status of Loan</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount"  maxlength="10">
   <input type="text" class="form-control form-group" placeholder="Current Rate of Interest"  maxlength="10">
   <input type="text" class="form-control form-group" placeholder="Sundry Debtors Cycle"  maxlength="10">
   <button class="btn btn-success pull-left " onclick="Working_capittal_fn(this.id)" id="foreign_currency">Submit</button>
   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
   
    <div class="border heigh-bt">
    <h3 class="emi-cal text-center">Your Saving</h3>
    <input type="text" class="form-control form-group" placeholder="Monthly Interest Paid"  maxlength="10"  />
   <input type="text" class="form-control form-group" placeholder="Drop in interest Paid"  maxlength="10" />
     <input type="text" class="form-control form-group" placeholder="Monthly Saving"  maxlength="10" />
   <input type="text" class="form-control form-group" placeholder="Total Yearly Saving"  maxlength="10" disabled />
   </div>
   </div>
  </div>
  
  <div class="col-md-4">
  <div class="white-bg heigh-bt">
   
  <div class="border heigh-bt">
  <h3 class="emi-cal text-center">After The Transfer</h3>
    <input type="text" class="form-control form-group" placeholder="Loan Amount"  maxlength="10">
    <input type="text" class="form-control form-group" placeholder="Current Rate of Interest"  maxlength="10">
   <button class="btn btn-success pull-left "  onclick="Working_capittal_fn(this.id)" id="foreign_currency">Submit</button>
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
    <td>0</td>
  </tr>
  <tr>
    <td class="text-left">Packing Credit Domestic</td>
    <td>0</td>
  </tr>
  <tr>
    <td class="text-left">Packing credit foreign Currency</td>
    <td>0</td>
  </tr>
</table>
  </div>
 
    
  
  </div>
  
  
  
  
</div>
  </div>
</div>

@include('layout.footer')
@include('layout.script')

<script type="text/javascript">
//var restoredSession = JSON.parse(localStorage.getItem('session'));
//sessionStorage.clear();
var array=new Array;
var bank = {};
var sessionName='bank1';
var TsessionName='bank1';
var _token='{{csrf_token()}}';
var loanTenurMonth='';
var SessionBank = function() {
    this.bank1 =JSON.parse(sessionStorage.getItem('bank1'));
    this.bank2 = JSON.parse(sessionStorage.getItem('bank2'));
    this.bank3 = JSON.parse(sessionStorage.getItem('bank3'));
}
 $(document).ready(function(){
    var obj= new SessionBank();
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
 


 });


var form='';
var loanAmount='';
var interest='';
var loanTenure='';
var yearmonth='';
var validation=1;   
var  ID='';
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
               ID=1;
               var paid=10;
             // loanTenurMonth=moyear(yearmonth,loanTenure);
           ajax(_token,loanAmount,interest,loanTenure*12,ID,paid);
       
          }  
       }else if(form=='WorkingCapitalAfter'){
        if(validation==1){
             alert("Please Fill All Inputs");
          }else{
               var ID=0;
               var paid=10;
               var interestT1=$('#interest').val();
           ajax(_token,loanAmount,interestT1,loanTenure*12,ID,paid);
          }
          
      }


      if(form=='term_loan_form'){
        Tenure=loanTenure*12;
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
                      var drop_interest=msg.drop_interest.toFixed();
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

                     bank.LoanEMI=LoanEMI;
                     bank.Drop_EMI=Drop_EMI;
                     bank.NewLoanEMI=NewLoanEMI;
                     bank.drop_interest=drop_interest;
                     bank.totalYearSaving=totalYearSaving;

                    // sessionStorage.setItem(TsessionName, JSON.stringify(bank));
                     //bankAppend(TsessionName,totalYearSaving);
                 
             }


      });

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
                  var numb = msg.drop_interest.toFixed();
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
                  
                var numb = msg.drop_interest.toFixed();
                var month = msg.monthlyinterest.toFixed();
                var totleMonthlysaving = msg.totleMonthlysaving.toFixed();
                var totalYearSaving = msg.totalYearSaving.toFixed();
                document.getElementById("monthlysavinf").innerHTML=totleMonthlysaving;
                document.getElementById("yearlysaving").innerHTML=totalYearSaving;
                     bank.monthlysavinf=totleMonthlysaving;
                     bank.yearlysaving=totalYearSaving;
                     sessionStorage.setItem(sessionName, JSON.stringify(bank));
                   bankAppend(sessionName,totalYearSaving);
                  $('.afterbtn').show();


                
                }
                
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
          }else if(bank=='bank3'){
                $('#home input[type="text"]').val('');
               sessionName='bank3';
                document.getElementById("interestAfter").value=10;
          }else{
             $('#home input[type="text"]').val('');
             sessionName='bank1';

          }         
 }


    function TbankName(bank){   //  Term laon textbox clear function
          if(bank=='bank2'){
           $('#menu1 input[type="text"]').val('');
           TsessionName='bank2';
            document.getElementById("interestAfter").value=10;
          }else if(bank=='bank3'){
                $('#menu1 input[type="text"]').val('');
               TsessionName='bank3';
                document.getElementById("interestAfter").value=10;
          }else{
             $('#menu1 input[type="text"]').val('');
             TsessionName='bank1';

          }         
 }



$( "#loanAmount_id" ).keyup(function() {   //working capital 
    var value = $( this ).val();
     $('.loanAmountAfter').val(value);
  }) ;

$( "#loanTenur" ).keyup(function() {
    var value = $( this ).val();
      if(value!=''){
      $('.loanTenurAfter').val(value);
  }else{
    $('#afterbtn').hide();
  }
  }) ;

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