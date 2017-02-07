@include('layout.header')
<style>
  body {color:#666;}
  .tbl-clr {color:#fff; }
  .tbl-clr td {text-align:center;}
  .rw-hei{margin-bottom:20px; height:280px;}
   .rw-hei p {font-size:16px;color:#666; margin-bottom:10px;}
   .em1 {color:#666;}
   .rw-hei h1 {margin-top:10px;}
   .sub-title {color:#999;}
   .em1 {
   color: #5f5656;}

   
   .mthy {Font-weight:bold;}
   .table-bordered>thead>tr>th {color:#fff;}
   .fh5co-cta {background:#666; margin-top:106px; margin-bottom:20px;}
   
</style>
</head>

<body>


<div class="fh5co-cta bt-bg" style="background:url(../images/bt-bg.jpg) no-repeat;">
    <div class="overlay"></div>
    <?php if($loan == "home-loan") {?>
    <div class="container">
      <div class="col-md-12 text-center animate-box wht-brd pad fadeInUp animated">
        <h1 class="h1-hd">Home Loan Balance Transfer</h1>
        <h3>Let's find out how much you can save!!</h3>
        <h3>To know,please enter your current home loan details.</h3>
      </div>
    </div>
    <?php }elseif($loan == "personal-loan"){?>
    <div class="container">
      <div class="col-md-12 text-center animate-box wht-brd pad fadeInUp animated">
        <h1 class="h1-hd">Personal Loan Balance Transfer </h1>
        <h3>Let's find out how much you can save!!</h3>
        <h3>To know,please enter your current personal loan details.</h3>
      </div>
    </div>
    <?php }else{?>
    <div class="container">
      <div class="col-md-12 text-center animate-box wht-brd pad fadeInUp animated">
        <h1 class="h1-hd">Loan Against Property Balance Transfer </h1>
        <h3>Let's find out how much you can save!!</h3>
        <h3>To know,please enter your current loan against property details.</h3>
      </div>
    </div>
    <?php }?>
  </div>
  
  
<div class="container">
  <div class="row">
     <div class="col-sm-4 rw-hei">
	 <div class="white-bg pad1 heigh-bt">
	 <h3 class="emi-cal">
    <?php if($loan == "home-loan") {?>
     Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }elseif($loan == "personal-loan"){?>
    Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }else{?>
    Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }?>


     <!-- <i class="fa fa-exchange" aria-hidden="true"></i> -->
    <div class="form-group">
    <input type="hidden" name="brokerid" id="brokerid" value="<?php echo isset($_GET['brokerid'])?$_GET['brokerid']:'';?>">
       <!-- <label class="control-label" for="Loan Amount">Outstanding Principal:</label> -->
       <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Outstanding Principal" value="" onblur ="myfun()" onkeypress="return isNumberKey(event)" maxlength="9" title="Outstanding Principal">

    </div>
    <div class="form-group">
      <!-- <label class="control-label" for="Interest Rate"> Current Interest Rate:</label> -->

      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Present Int.Rate"  value="" onblur="myfun()" onkeypress="return isNumberKey(event)" title="Present Int.Rate">

    </div>
   
    <div class="form-group right-block">
       <!-- <label class="control-label" for="Loan Tenure">Remaining Tenure:</label> -->
        <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Remaining Tenure" value="" onblur="myfun()" onkeypress="return isNumberKey(event)" title="Remaining Tenure">
    <p id="err" style="display:none;"><span style="color:red; font-size:13px; position:absolute;">Please Fill All Inputs</span></p>

  
    <div class="col-md-12 pad">
  <button class="btn btn-success pull-left ">Submit</button>
  <div class="pull-right">
          <label><input type="radio" name="Year" id="Year" value="" checked="checked"> Yr</label>
             <label><input type="radio" name="Year" id="Month" value=""> Mo</label>
    </div>
    </div>
  

    </div>

    <?php if($loan == "home-loan") {?>
    <input type="hidden" name="product_id" id="product_id" value="12">
    <?php }elseif($loan == "personal-loan"){?>
    <input type="hidden" name="product_id" id="product_id" value="9">
    <?php }else{?>
    <input type="hidden" name="product_id" id="product_id" value="7">
    <?php }?>

     </div>
    </div>
    <div class="col-sm-4 rw-hei brd-rgt">
	<div class="white-bg pad1 heigh-bt">
	<h3 class="transfer-cal">
    My Savings <i class="fa fa-credit-card" aria-hidden="true"></i></h3>
    <!-- <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
    <span class="sr-only">Loading...</span></h3> -->
     <!-- <i class="fa fa-credit-card" aria-hidden="true"></i></h3> -->
     
     <center>
       <p>Loan EMI :<b class="em1"> ₹ <span id="emi">0</span></b></p>
      
      <!--  <p>Total Payable Interest :</p>
       <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
       <p>Total Payment(Principal + Int) :</p>
       <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2> -->
       <p>Drop_EMI : ₹ <b class="em5"><span id="emi3">0</span></b></p>
       <p>New Loan EMI : <b class="em6">₹<span id="emi4">0</span></b></p>
   
        <p>Drop-in Interest Rate:<b class="em7"><span id="emi5">0</span>%</b></p>
    
       <p><h6>Your <mark style="color:red">Savings</mark> through reduced Interest:</h6></p>
       <h2 class="em8">₹ <b><span id="emi6">0</span></b></h2>
       
       


       <!-- <div id="b"></div> -->
      </center>
	  </div>
  </div>
  <div class="col-sm-4 rw-hei">
  <div class="white-bg pad1 heigh-bt">
  <h3 class="emi-cal">
    <?php if($loan == "home-loan") {?>
     After Transfer  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }elseif($loan == "personal-loan"){?>
    After Transfer  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }else{?>
    After Transfer <i class="fa fa-exchange" aria-hidden="true"></i></h3>
    <?php }?>


     <!-- <i class="fa fa-exchange" aria-hidden="true"></i> -->
    <div class="form-group">
    <input type="hidden" name="brokerid" id="brokerid" value="<?php echo isset($_GET['brokerid'])?$_GET['brokerid']:'';?>">
       <!-- <label class="control-label" for="Loan Amount">Outstanding Principal:</label> -->

       <input type="text" name="loanamount" class="form-control" id="loanamount_new" placeholder="Loan Amount" value="" onblur ="myfun()" onkeypress="return isNumberKey(event)" maxlength="9" title="Loanamount" >
    </div>
    <div class="form-group">
      <!-- <label class="control-label" for="Interest Rate"> Current Interest Rate:</label> -->
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest_new" placeholder="Interest"  value="" onblur="myfun()" onkeypress="return isNumberKey(event)" title="Interest">

    </div>
	
    <div class="form-group right-block">
       <!-- <label class="control-label" for="Loan Tenure">Remaining Tenure:</label> -->

        <input type="text" name="loanterm" class="form-control" id="loanterm_new" placeholder="Loan Tenure(in months)" value="" onblur="myfun()" onkeypress="return isNumberKey(event)" title="Tenure" >
    <p id="err" style="display:none;"><span style="color:red; font-size:13px; position:absolute;">Please Fill All Inputs</span></p>
	
   <div class="col-md-12 pad"><button class="btn btn-success pull-left ">Revise & calculate</button></div>
    </div>

    <?php if($loan == "home-loan") {?>
    <input type="hidden" name="product_id" id="product_id" value="12">
    <?php }elseif($loan == "personal-loan"){?>
    <input type="hidden" name="product_id" id="product_id" value="9">
    <?php }else{?>
    <input type="hidden" name="product_id" id="product_id" value="7">
    <?php }?>

     </div>
    </div>
  
</div>

</div>
<br>




<div id="test"></div>



@include('layout.footer')
@include('layout.script')

<?php if($loan == "home-loan") {?>
    <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Amount should be greater than "5,00,000" and lesser than "10,00,000,000".</p></h4>
        <h4><p>As well as Interest should be greater than  8.54%. If less you are already on Lower Rate.</p></h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

    <?php }elseif($loan == "personal-loan"){?>
   <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Amount should be greater than "1,00,000" and lesser than "10,00,000,000".</p></h4>
        <h4><p>As well as Interest should be greater than (Or)equal to 11.49% If less you are already on Lower Rate.</p></h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

    <?php }else{?>
    <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Amount should be greater than "5,00,000" and lesser than "10,00,000,000".</p></h4>
        <h4><p>As well as Interest should be greater than (Or)equal to 10.25%. If less you are already on Lower Rate.</p></h4>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <?php }?>



<script type="text/javascript">

  $(document).ready(function(){
    $("#Month").change(function(){
      var amt = $("#loanterm").val();
      console.log($("#loanterm").val());
      var month = amt;
      
      //console.log(month);
      $('#loanterm').val(month);
    });
    $("#Year").change(function(){
      var amt1 = $("#loanterm1").val();
      console.log($("#loanterm").val());
      var yr = amt1 / 12;
      //console.log(yr);
      //console.log(year);
      $('#loanterm1').val(yr);
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
      $('#loanamount_new').val(loanamount);
      // console.log($("#loanamount").val());
      var loaninterest = $("#loaninterest").val();
       // var bank = $("#bank").val();
         
      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
        $('#loanterm_new').val(loanterm);
      }else{
        var loanterm = $("#loanterm").val();

      }
      var profession=$("#profession").val();
      var product_id=$("#product_id").val();
      var brokerid =$("#brokerid").val();
      //console.log(profession);

      
       var v_token = "{{csrf_token()}}";
      $.ajax({  
               type: "POST",  
               url: "{{URL::to('calculation')}}",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'_token': v_token,'profession':profession,'product_id':product_id,'brokerid':brokerid},
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
                   var nrate=($('#loaninterest').val())-msg.drop_in_int;
                  $('#loaninterest_new').val( nrate);
                   var numb4 = msg.savings.toFixed();
                   $('#emi6').empty().append(numb4);

                        $("#1").show();
                        $("#4").show();
                        $("#5").show();
                        $("#6").show();
                        $("#7").show();
                        $('#test').html(msg.html);
                  }else{
                    //console.log(msg.success);
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