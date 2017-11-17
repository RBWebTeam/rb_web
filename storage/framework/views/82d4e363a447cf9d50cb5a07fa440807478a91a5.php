<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style>
  body {color:#666;}
  .tbl-clr {color:#fff; }
  .tbl-clr td {text-align:center;}
  .rw-hei{margin-bottom:20px;}
  .heigh-bt1 {min-height:300px;}
   .rw-hei p {font-size:16px;color:#666; margin-bottom:2px;}
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


<div class="fh5co-cta bt-bg" style="background:url(../images/bt-bg.jpg) no-repeat; width:100%;">
    <div class="overlay"></div>
    <?php if($loan == "home-loan") {?>
    <div class="container">
      <div class="col-md-12 text-center animate-box wht-brd fadeInUp animated">
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
    <?php
          $myString = isset($_GET['referrer']);
          if($myString){

            Session::put('refid', '1');
            $refapp =Session::get('refid');

            $myArray = explode('@', $_GET['referrer']);
            if(isset($myArray[0])){
              Session::put('empid', $myArray[0]);
              $empid = Session::get('empid');
            }else{
              $empid="";
            }
            if(isset($myArray[1])){
             Session::put('brokerid', $myArray[1]);
              $brokerid = Session::get('brokerid');
            }else{
              $brokerid ="";
            }
            if(isset($myArray[2])){
              Session::put('source', $myArray[2]);
              $source = Session::get('source');


            }else{
               $source="";
            }
            
            //$a= str_replace('�', '', $brokerid);
            // echo $empid;
             
          }else{


            $empid = Session::get('empid')?Session::get('empid'):0;
            $brokerid =Session::get('brokerid')?Session::get('brokerid'):0;
            $source =Session::get('source')?Session::get('source'):0;
            $refapp=Session::get('refid')?Session::get('refid'):0;
          }
          
          ?>
	
    <input type="hidden" name="empid" class="empid" id="empid"  value="<?php echo $empid;?>">
          <input type="hidden" name="brokerid" id="brokerid" class="brokerid" value="<?php echo $brokerid;?>">
          <input type="hidden" name="source" id="source"  class="source" value="<?php echo $source;?>">
          <input type="hidden" name="refapp" id="refapp"  class="source" value="<?php echo $refapp;?>">                  
       <!-- <label class="control-label" for="Loan Amount">Outstanding Principal:</label> -->
       <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Outstanding Principal" value="" onblur ="myfun()" onKeyPress="return isNumberKey(event)" maxlength="10" title="Outstanding Principal">

    </div>
    <div class="form-group">
      <!-- <label class="control-label" for="Interest Rate"> Current Interest Rate:</label> -->

      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest" placeholder="Present Int.Rate"  value="" onBlur="myfun()" onKeyPress="return isNumberKey(event)" title="Present Int.Rate">

    </div>
   
    <div class="form-group right-block">
       <!-- <label class="control-label" for="Loan Tenure">Remaining Tenure:</label> -->
        <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Remaining Tenure" value="" onBlur="myfun()" onKeyPress="return isNumberKey(event)" title="Remaining Tenure">
    <span style="color:red; font-size:13px;display:none" id="err">Please Fill All Inputs</span>
  
    <div class="col-md-12 pad">
  <button class="btn btn-success pull-left ">Submit</button>
  <div class="pull-right">
          <label><input type="radio" name="Year" id="Year" value="" checked="checked"> Year</label>
             <label><input type="radio" name="Year" id="Month" value=""> Month</label>
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
	<div class="white-bg pad1 heigh-bt1">
	<h3 class="text-center">
    My Savings <i class="fa fa-credit-card" aria-hidden="true"></i></h3>
    <!-- <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
    <span class="sr-only">Loading...</span></h3> -->
     <!-- <i class="fa fa-credit-card" aria-hidden="true"></i></h3> -->
     
     <center class="my-saving">
       <p>Loan EMI :<b class="em1"> ₹ <span id="emi">0</span></b></p>
      
      <!--  <p>Total Payable Interest :</p>
       <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
       <p>Total Payment(Principal + Int) :</p>
       <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2> -->
       <p>Drop_EMI : ₹ <b class="em5"><span id="emi3">0</span></b></p>
       <p>New Loan EMI : <b class="em6">₹<span id="emi4">0</span></b></p>
   
        <p>Drop-in Interest Rate:<b class="em7"><span id="emi5">0</span>%</b></p>
    
       <p><h6>Your <mark style="color:red"><b>Savings</b></mark> through reduced Interest:</h6></p>
       <h2 class="em8">₹ <b><span id="emi6">0</span></b></h2>
       <?php if($loan == "home-loan") {?>
       <button type="button" class="btn btn-success" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#myModaltest" style="display:none;">Apply Now</button>
       <?php }elseif($loan == "personal-loan"){?>
       <button type="button" class="btn btn-success" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#borrow_personal" style="display:none;">Apply Now</button>
        <?php }else{?>
        <button type="button" class="btn btn-success" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#borrow_lap" style="display:none;">Apply Now</button>
         <?php }?>


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
     
      <!-- <label class="control-label" for="Loan Amount">Outstanding Principal:</label> -->

       <input type="text" name="loanamount" class="form-control" id="loanamount_new" placeholder="Loan Amount" value=""  onkeypress="return isNumberKey(event)" maxlength="9" title="Loanamount"  >
    </div>
    <div class="form-group">
      <!-- <label class="control-label" for="Interest Rate"> Current Interest Rate:</label> -->
      <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest_new" placeholder="Interest"  value=""  onkeypress="return isNumberKey(event)" title="Interest" >

    </div>
	
    <div class="form-group right-block">
       <!-- <label class="control-label" for="Loan Tenure">Remaining Tenure:</label> -->


        <input type="text" name="loanterm" class="form-control" id="loanterm_new" placeholder="Loan Tenure" value="" onKeyPress="return isNumberKey(event)" title="Tenure"  >
    <p id="err" style="display:none;"><span style="color:red; font-size:13px; position:absolute;">Please Fill All Inputs</span></p>

	
   <!-- <div class="col-md-12 pad"><button class="btn btn-success pull-left" onclick="myfun_new()" >Revise & calculate</button></div> -->
   <div class="col-md-12 pad"><button type="button" class="btn btn-success" onClick="myfun_new()" id="revise" name="revise" style="display:none;">Revise & calculate</button></div>

  
  

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


<?php if($loan == "home-loan") {?>

    <div class="col-md-12"><h3 class="blue-bg">Would you like to borrow &nbsp;&nbsp;<b>₹<span id="drop">0</span> (in lacs)</b>&nbsp;&nbsp;extra and pay the same EMI.&nbsp;&nbsp;<button type="button" class="btn btn-success" id="revise_apply" name="revise_apply" data-toggle="modal" data-target="#myModaltest" style="display:none;">Apply Now</button></h3></div>
  
    <?php }elseif($loan == "personal-loan"){?>
  
    <?php }else{?>
   <div class="col-md-12"><h3 class="blue-bg">Would you like to borrow &nbsp;&nbsp;<b>₹<span id="drop">0</span> (in lacs)</b>&nbsp;&nbsp;extra and pay the same EMI.&nbsp;&nbsp;<button type="button" class="btn btn-success" id="revise_apply" name="revise_apply" data-toggle="modal" data-target="#borrow_lap" style="display:none;">Apply Now</button>
</h3></div>
  
    <?php }?>
	
</div>

</div>
<div id="test"></div>



<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if($loan == "home-loan") {?>
    <div class="modal fade" tabindex="-1" role="dialog" id="homeTransfer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4><p>Amount should be greater than <b>"5,00,000" and lesser than "10,00,000,000"</b>.</p></h4>
        <h4><p>As well as Interest should be greater than <b><?php echo $alert_rate;?></b>. If less you are already on Lower Rate.</p></h4>
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
        <h4><p>Amount should be greater than <b>"1,00,000" and lesser than "10,00,000,000"</b>.</p></h4>
        <h4><p>As well as Interest should be greater than (Or)equal to <b><?php echo $alert_rate;?></b> If less you are already on Lower Rate.</p></h4>
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
        <h4><p>Amount should be greater than <b>"5,00,000" and lesser than "10,00,000,000"</b>.</p></h4>
        <h4><p>As well as Interest should be greater than (Or)equal to <b><?php echo $alert_rate;?></b>. If less you are already on Lower Rate.</p></h4>
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
    
    // console.log("ok");
    var lm = $("#loanamount").val().length;
       var lin = $("#loaninterest").val().length;
       var lt = $("#loanterm").val().length;
       
       
       if(lm >0 && lin >0 && lt>0){
      
      var loanamount = $("#loanamount").val();
      $('#loanamount_new').val(loanamount);
      
      // console.log($("#loanamount").val());
      var loaninterest = $("#loaninterest").val();
      
        // $('#loaninterest_new').val(loaninterest);
         
      if ($("#Year").prop("checked")) {
        var loanterm1 = $("#loanterm").val();
        var loanterm = loanterm1*12;
        $('#loanterm_new').val(loanterm1);
        //appending inform to submit on erp
         $('.Principal_Amt').val(loanamount);
         $('.Interest_Rate').val( loaninterest);
         $('.Remaining_Tenure').val(loanterm1);
        
      }else{
        var loanterm = $("#loanterm").val();

      }
      var profession=$("#profession").val();
      var product_id=$("#product_id").val();
      var brokerid =$("#brokerid").val();
       var empcode =$("#empcode").val();
       var refapp =$("#refapp").val();
       // console.log(app);

      
       var v_token = "<?php echo e(csrf_token()); ?>";
      $.ajax({  
               type: "POST",  
               url: "<?php echo e(URL::to('calculation')); ?>",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'_token': v_token,'profession':profession,'product_id':product_id,'brokerid':brokerid,'empcode':empcode,'refapp':refapp},
               // 'bank':bank},
               success: function(msg){
                    console.log(msg);
                  if(msg.success ==true){
                  var numb = msg.amount.toFixed();
                   $('#emi').empty().append(numb);
                  
                    var numb1 = msg.drop_emi.toFixed();
                  $('#emi3').empty().append(numb1);

                    var numb2 = msg.new_amount.toFixed();
                   $('#emi4').empty().append(numb2);

                  
                   $('#emi5').empty().append( msg.drop_in_int);
                   var nrate=(($('#loaninterest').val())-msg.drop_in_int).toFixed(2);
                  $('#loaninterest_new').val( nrate);
                  // console.log(nrate);
                   
                   var numb4 = msg.savings.toFixed();
                   $('#emi6').empty().append(numb4);

                   var borrow = msg.borrow.toFixed(2);
                   $('#drop').empty().append(borrow);


                   

                  $('#revise').show();
                  $('#revise_apply').show();
                  
      
                  $('#revise_apply2').show();
                  
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

<!-- After Transfer Script -->
<script type="text/javascript">

  function myfun_new(){
      // console.log("ok");
      var lm = $("#loanamount_new").val().length;
      var lin = $("#loaninterest_new").val().length;
      var lt = $("#loanterm_new").val().length;
       
       
       if(lm >0 && lin >0 && lt>0){
      
      var loanamount = $("#loanamount_new").val();
    
      var loaninterest = $("#loaninterest_new").val();
      var loanterm = $("#loanterm_new").val();
     

      var old_loaninterest = $("#loaninterest").val();
      var old_drop_emi = $(".em5 span").text();
       // console.log(old_drop_emi);

      
      var v_token = "<?php echo e(csrf_token()); ?>";
      $.ajax({  
               type: "POST",  
               url: "<?php echo e(URL::to('after-transfer-calculation')); ?>",
               dataType:'json',
               data : { 'loanamount': loanamount , 'loaninterest': loaninterest ,'loanterm' :loanterm,'_token': v_token,'old_loaninterest':old_loaninterest,'old_drop_emi':old_drop_emi},
               // 'bank':bank},
               success: function(msg){
                   // console.log(msg);
                  if(msg.success ==true){
                    // console.log('ok');
                    // console.log(msg.emi);
                    // console.log(msg.loaninterest);
                    // return false;
                  var after_numb = msg.emi.toFixed();
                   $('#after_emi').empty().append(after_numb);
                  
                    var after_numb1 = msg.after_savings.toFixed();
                  $('#after_savings').empty().append(after_numb1);
                    
                    var after_interest = msg.loaninterest;
                     // console.log(msg.loaninterest);
                    $('#new_int').empty().append(after_interest);

                    var borrow_new = msg.borrow.toFixed(2);
                    $('#drop').empty().append(borrow_new);
                       


                  
                  
                   
                  
                   var drop_emi_here = msg.drop_emi_new.toFixed();
                  
                   if (drop_emi_here >0) 
                   {
                     
                    
                    $('#emi3').empty().append(drop_emi_here);
                    $('#emi4').empty().append(after_numb);

                   var drop_int_here = msg.drop_in_int_new;
                   $('#emi5').empty().append(drop_int_here);

                   $('#emi6').empty().append(after_numb1);





                     
                        $("#e").show();
                        $("#s").show();
                        $("#l").show();
                         
                   } 
                   else 
                   {
                    alert('Oops!!! Sorry,your EMI cannot be '+drop_emi_here+'')
                   }

                   
                        
                  }

                  
              

                        
                        
                        
                         
                     }  
                  }); 
        
        
        $("#err").hide();
      }else{
        $("#err").show();
      }
    
  }


</script>
<!-- End -->
