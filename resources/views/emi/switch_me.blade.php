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
       <input type="number" name="loanamount" class="form-control" id="loanamount" placeholder="Loan Amount" value="" onblur ="myfun()">
    </div>
    <div class="form-group">
      <label class="control-label" for="Interest Rate"> Current Interest Rate:</label>
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
  
</div>
</div>





<div id="test"></div>



@include('layout.footer')
@include('layout.script')

<div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h3><p>Amount should be greater than "5,00,000" and lesser than "10,00,000,000".</p></h3>
        <h3><p>As well as Interest should be greater than 9%. If less you already on Lower Rate.</p></h3>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

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
      //console.log(loanamount);
      var loaninterest = $("#loaninterest").val();
       // var bank = $("#bank").val();
         
      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
      }else{
        var loanterm = $("#loanterm").val();
      }
      var profession=$("#profession").val();
      //console.log(profession);

      
       var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('calculation')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'_token': v_token,'profession':profession},
               // 'bank':bank},
               success: function(msg){
                  //console.log(msg.success);
                  if(msg.success ==true){
                  var numb = msg.amount.toFixed();
                   $('#emi').empty().append(numb);
                  
                    var numb1 = msg.drop_emi.toFixed();
                  $('#emi3').empty().append(numb1);

                    var numb2 = msg.new_amount.toFixed();
                   $('#emi4').empty().append(numb2);

                  
                   $('#emi5').empty().append( msg.drop_in_int);

                   var numb4 = msg.savings.toFixed();
                   $('#emi6').empty().append(numb4);

                        $("#1").show();
                        $("#4").show();
                        $("#5").show();
                        $("#6").show();
                        $("#7").show();
                        $('#test').html(msg.html);
                  }else{
                    console.log(lm);
                     $('#homeTransfer').modal('show');  
                      

                  }
                    

                  
              

                        
                        
                        
                         
                     }  
                  }); 
        
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }


</script>



