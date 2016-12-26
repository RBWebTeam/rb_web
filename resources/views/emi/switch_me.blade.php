  @include('layout.header')
<style>
  .rw-hei {height:590px;border: 2px dashed #ccc;border-right:none;}
  .brd-rgt {border-right: 2px dashed #ccc;}
  body {color:#666;}
  .tbl-clr {color:#fff; }
  .tbl-clr td {text-align:center;}
   .rw-hei p {font-size:16px;color:#999;}
   .rw-hei h1 {margin-top:10px;}
   .sub-title {color:#999;}
   .emi-cal {background:#333;padding:10px;display:block;color:#fff; text-align:center;}
   .transfer-cal {background:#333;padding:10px;display:block;color:#fff; text-align:center;}
   .mthy {Font-weight:bold;}
   .table-bordered>thead>tr>th {color:#fff;}
   
</style>
</head>

<body>

<div class="jumbotron text-center" style="background-color:lightblue;" id="fh5co-hero">
<center>
  <p class="text-primary"><h2>Home Loan Transfer Service</h2></p> 
  <p>Let's find out how much you can save!!</p>
  <p>Know how much you'll save. Please enter your current home loan details.</p> 
</center>  
            
                            
  
</div>
  
<div class="container">
  <div class="row">
     <div class="col-sm-6 rw-hei brd-rgt" style="background-color:lavender;"><h3 class="emi-cal">Home Loan Transfer Savings  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
     <!-- <i class="fa fa-exchange" aria-hidden="true"></i> -->
    <div class="form-group">
       <label class="control-label" for="Loan Amount">Outstanding Principal:</label>
       <input type="number" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" value=""  onblur="myfun()">
    </div>
    <div class="form-group">
      <label class="control-label" for="Interest Rate">Interest Rate:</label>
      <input type="number" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Interest"  value="" onblur="myfun()">
    </div>
    <div class="form-group" >
       <label class="control-label" for="Your Property Location">Your Profession Type:</label>
       <select name="profession" id="profession" onblur="myfun()">
       <option value="1">Salaried</option>
       <option value="2">Self-Employed</option>
       
       </select>
      <!--  </label> -->
    </div>
    <!-- <div class="form-group">
       <label class="control-label" for="Current Lender">Current Lender:</label>
     
      <select>
       <option value="ADITYA BIRLA FINANCE LIMITED">ADITYA BIRLA FINANCE LIMITED</option>
       <option value="ADITYA-BIRLA HOUSING FINANCIAL LIMITED">ADITYA BIRLA HOUSING FINANCIAL LIMITED</option>
       <option value="AU HOUSING FINANCE LIMITED">AU HOUSING FINANCE LIMITED</option>
       <option value="AXIS BANK LTD">AXIS BANK LTD</option>
       <option value="BAJAJ FINANCE LIMITED">BAJAJ FINANCE LIMITED</option>
       <option value="CAPITAL FIRST LIMITED">CAPITAL FIRST LIMITED</option>
       <option value="CAPRI GLOBAL CAPITAL LIMITED">CAPRI GLOBAL CAPITAL LIMITED</option>
       <option value="CITI">CITI</option>
       <option value="CREDIT SUDHAR">CREDIT SUDHAR</option>
       <option value="DBS">DBS</option>
       <option value="DCB BANK">DCB BANK</option>
       <option value="DEUTSCHE BANK">DEUTSCHE BANK</option>
       <option value="EDELWEISS FINANCE LIMITED">EDELWEISS FINANCE LIMITED</option>
       <option value="FULLERTON INDIA CREDIT COMPANY LIMIT">FULLERTON INDIA CREDIT COMPANY LIMITED</option>
       <option value="HDB FINANCIAL SERVICES LTD">HDB FINANCIAL SERVICES LTD</option>
       <option value="HDFC BANK LTD ">HDFC BANK LTD</option>
       <option value="HDFC LTD">HDFC LTD</option>
       <option value="HERO FIN CORP">HERO FIN CORP</option>
       <option value="HSBCK">HSBC</option>
       <option value="ICICI BANK LIMITED">ICICI BANK LIMITED</option>
       <option value="ICICI BANK">ICICI BANK</option>
       </select>
    
    </div>
 -->

    <div class="form-group right-block">
       <label class="control-label" for="Loan Tenure">Remaining Tenure:</label>
        <input type="number" name="loanterm" class="form-control" id="loanterm" placeholder="Loan Tenure" value="" onblur="myfun()">
    <br>
    <div class="btn-group">
          <label class="btn btn-primary"><input type="radio" name="Year" id="Year" value="" checked="checked">Yr</label>
             <label class="btn btn-primary"><input type="radio" name="Year" id="Month" value="">Mo</label>
    </div>
    </div>

    
     <p id="err" style="display:none;">Please Fill All Inputs
    </div>
    <div class="col-sm-6 rw-hei brd-rgt" style="background-color:lavenderblush;"><h3 class="transfer-cal">
    <i class="fa fa-credit-card" aria-hidden="true"></i>  My Savings</h3>
    <!-- <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
    <span class="sr-only">Loading...</span></h3> -->
     <!-- <i class="fa fa-credit-card" aria-hidden="true"></i></h3> -->
     
     <center>
       <p>Loan EMI :<i class="fa fa-caret-right" style="font-size:20px;" aria-hidden="true"></i></p>
       <h2 class="em1">₹ <b><span id="emi">0</span></b></h2>
      <!--  <p>Total Payable Interest :</p>
       <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
       <p>Total Payment(Principal + Int) :</p>
       <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2> -->
       <p>Drop_EMI : <i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i> </p>
       <h2 class="em5">₹ <b><span id="emi3">0</span></b></h2>
       <p>New Loan EMI : <i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></p>
       <h2 class="em6">₹ <b><span id="emi4">0</span></b></h2>
        <p>Drop-in Interest Rate: <i class="fa fa-caret-down" style="font-size:20px;color:lightgreen;" aria-hidden="true"></i></p>
       <h2 class="em7"> <b><span id="emi5">0</span>%</b></h2>
       <p><h6>Your <mark style="color:red">Savings</mark> through reduced Interest: <i class="fa fa-credit-card" style="font-size:18px;color:"></i></h6></p>
       <h2 class="em8">₹ <b><span id="emi6">0</span></b></h2>
       
       


       <!-- <div id="b"></div> -->
      </center>
  </div>
  <!-- <div class="col-sm-4 rw-hei brd-rgt" style="background-color:lavender"><h3><center>Break-up of Loan Details</center></h3>
     <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#c2da6b;"></i>&nbsp;<span>Loan EMI</span>
     </div>
     <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#00B9B9;"></i>&nbsp;<span>Total Payable Interest</span>
     </div>
     <div class="text-center"><i class="fa fa-cloud" style="font-size:18px;color:#4A9ACF;"></i>&nbsp;<span>Total Payment(Principal + Interest)</span>
     </div>
  </div> -->
</div>
</div>

<center><h1>Savings Table:<i class="fa fa-hand-o-down" aria-hidden="true"></i></h1></center>
<div id="test"></div>

@include('layout.footer')
@include('layout.script')

<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      var month = amt;
      
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm").val();
      var yr = amt1 / 12;
      //console.log(yr);
      //console.log(year);
      $('#loanterm').val(yr);
    });
    });
</script>

<script type="text/javascript">

  function myfun(){
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       if(lm >0 && lin >0 && lt>0){
      
      var loanamount = $("#loanamount").val();
      var loaninterest = $("#loaninterest").val();
       // var bank = $("#bank").val();
         
      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
      }else{
        var loanterm = $("#loanterm").val();
      }
      var profession=$("#profession").val();

      
       var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('calculation')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'_token': v_token,'profession':profession},
               // 'bank':bank},
               success: function(msg){
                console.log(msg);

                    var numb = msg.amount.toFixed();
                   $('#emi').empty().append(numb);
                  // // $('#emi1').empty().append(msg.total);
                  // // $('#emi2').empty().append(msg.ttl_payment);
                    var numb1 = msg.drop_emi.toFixed();
                  $('#emi3').empty().append(numb1);

                    var numb2 = msg.new_amount.toFixed();
                   $('#emi4').empty().append(numb2);

                  var numb3 = msg.drop_in_int.toFixed();
                   $('#emi5').empty().append(msg.drop_in_int);

                   var numb4 = msg.savings.toFixed();
                   $('#emi6').empty().append(numb4);

                  // //console.log(numb4);

                  // $('#emi7').empty().append(msg.query[0].roi);
                  //console.log(msg.query);
                  //var html ="";
                  // $.each(msg.query, function(index, value) {
                  //   var html = "<h1>"+value.Bank_Name+"</h1>";
                  //   $("#test").empty().append(html);
                  // });
                  //$("#test").empty().append(msg);
                  if(msg.success == true) {
              //user_jobs div defined on page
              $('#test').html(msg.html);
            } else {
              console.log("false");
            }

                  $("#1").show();
                  // $("#2").show();
                  // $("#3").show();
                  $("#4").show();
                  $("#5").show();
                  $("#6").show();
                  $("#7").show();
                   // $("#8").show();
                  
                   
               }  
               }); 
        
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }


</script>

<!-- emi scripts end -->
