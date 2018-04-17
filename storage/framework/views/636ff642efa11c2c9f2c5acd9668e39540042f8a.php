<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container ">
 <aside id="fh5co-hero">
 <div class="row">
    <div class="col-md-12">
      <div class="wrapper-content bg-white pinside40">
        <div class="">
              <?php if($loan == "home-loan") {?>
              <div class="container">
                <div class="mb60  section-title text-center">
                  <h1>Home Loan Balance Transfer</h1>
                  <p>Let's find out how much you can save!!&nbsp;
                  To know, please enter your current home loan details.</p>
                </div>
              </div>
              <?php }elseif($loan == "personal-loan"){?>
              <div class="container">
                <div class="mb60  section-title text-center">
                  <h1>Personal Loan Balance Transfer </h1>
                  <p>Let's find out how much you can save!!&nbsp;
                  To know,please enter your current personal loan details.</p>
                </div>
              </div>
              <?php }else{?>
              <div class="container">
                <div class="mb60  section-title text-center">
                  <h1>Loan Against Property Balance Transfer </h1>
                  <p>Let's find out how much you can save!!&nbsp;
                  To know,please enter your current loan against property details.</p>
                </div>
              </div>
    <?php }?>
          <div class="row">
            <!-- Current Loan Status -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">

                      <h3 class="emi-cal">
                        <?php if($loan == "home-loan") {?>
                         Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                        <?php }elseif($loan == "personal-loan"){?>
                        Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                        <?php }else{?>
                        Current Loan Status  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                        <?php }?>

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

          <input type="text" name="loanamount" class="form-control" id="loanamount" placeholder="Outstanding Principal" value="" onblur ="myfun()" onKeyPress="return isNumberKey(event)" maxlength="10" title="Outstanding Principal">
                        </div>

                        <!-- <h4 style="text-align: center;" >Current Loan Status <i class="fa fa-exchange" ></i></h4> -->
                        <div class="form-group">
                          <input type="text" name="loaninterest" step="0.01"  maxlength="5" class="form-control" id="loaninterest" placeholder="Present Int. Rate"  value="" onBlur="myfun()" onKeyPress="return isNumberKey(event)" title="Present Int.Rate">
                        </div>

                        <div class="form-group">
                          <input type="text" name="loanterm" class="form-control" id="loanterm" placeholder="Remaining Tenure" value="" onBlur="myfun()" onKeyPress="return isNumberKey(event)" title="Remaining Tenure">
                      <span style="color:red; font-size:13px;display:none" id="err">Please Fill All Inputs</span>
                        </div>

                        <div class="col-md-5 col-xs-6" style="padding:0px;">
                          <button class="btn btn-default btn-sm ">Submit</button>
                            <!-- <div class="pull-right">
                              <input type="radio" name="Year" id="Year" value="" checked="checked">Year
                              <input type="radio" name="Year" id="Month" value=""> Month
                            </div> -->
                        </div>

                        <div class="col-md-7 col-xs-6 text-right" style="padding-right:0px;">
                                            <input type="radio" name="Year" id="Year" value="" checked="checked">Year &nbsp;
                                                <input type="radio" name="Year" id="Month" value=""> Month
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
                    <!-- Current Loan Status end-->
                    <!-- My Savings -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">
                        <h4 style="text-align: center;" >My Savings <i class="fa fa-credit-card" ></i></h4>
                        <center class="my-saving">
                           <p>Loan EMI :<b class="em1"> <i class="fa fa-inr"></i> <span id="emi">0</span></b><br/>
                          
                          <!--  <p>Total Payable Interest :</p>
                           <h2 class="em2">₹ <b><span id="emi1">0</span></b></h2>
                           <p>Total Payment(Principal + Int) :</p>
                           <h2 class="em3">₹ <b><span id="emi2">0</span></b></h2> -->
                           Drop_EMI :  <b class="em5"> <i class="fa fa-inr"></i> <span id="emi3">0</span></b><br/>
                           New Loan EMI : <b class="em6"> <i class="fa fa-inr"></i> <span id="emi4">0</span></b><br/>
                       
                          Drop-in Interest Rate : <b class="em7"><span id="emi5">0</span>%</b></p>
                        
                           <p>Your <span style="color: #ed1c24">Savings</span> through reduced Interest:<br>
                            </p>
                           <h2 class="em8"><i class="fa fa-inr" style="font-size: 24px"></i> <b><span id="emi6">0</span></b></h2>
                           <?php if($loan == "home-loan") {?>
                           <button type="button" class="btn btn-default btn-sm" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#myModaltest" style="display:none;">Apply Now</button>
                           <?php }elseif($loan == "personal-loan"){?>
                           <button type="button" class="btn btn-default btn-sm" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#borrow_personal" style="display:none;">Apply Now</button>
                            <?php }else{?>
                            <button type="button" class="btn btn-default btn-sm" id="revise_apply2" name="revise_apply" data-toggle="modal" data-target="#borrow_lap" style="display:none;">Apply Now</button>
                             <?php }?>
       <!-- <div id="b"></div> -->
                    </center>
                      </div>
                    </div>
                    <!-- My Savings end-->
                    <!-- After Transfer -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">
                        <h3 class="emi-cal">
                          <?php if($loan == "home-loan") {?>
                           After Transfer  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                          <?php }elseif($loan == "personal-loan"){?>
                          After Transfer  <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                          <?php }else{?>
                          After Transfer <i class="fa fa-exchange" aria-hidden="true"></i></h3>
                          <?php }?>

                          <div class="form-group">
                            <input type="text" name="loanamount" class="form-control" id="loanamount_new" placeholder="Loan Amount" value=""  onkeypress="return isNumberKey(event)" maxlength="9" title="Loanamount"  >
                          </div>

                          <div class="form-group">
                            <input type="text" name="loaninterest" step="0.01" min="0" class="form-control" id="loaninterest_new" placeholder="Interest"  value=""  onkeypress="return isNumberKey(event)" title="Interest" >
                          </div>

                          <div class="form-group right-block">
                            <input type="text" name="loanterm" class="form-control" id="loanterm_new" placeholder="Loan Tenure" value="" onKeyPress="return isNumberKey(event)" title="Tenure"  >
                              <p id="err" style="display:none;"><span style="color:red; font-size:13px; position:absolute;">Please Fill All Inputs</span></p>

                              <div class="col-md-12 pad">
                                <button type="button" class="btn btn-default btn-sm" onClick="myfun_new()" id="revise" name="revise" style="display:none;">Revise & calculate</button>
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
                    <!-- After Transfer end -->
                    <br><br>

                    <?php if($loan == "home-loan") {?>

                    <div class="col-md-12"><h3 class="blue-bg" style="text-align: center;">Would you like to borrow &nbsp;&nbsp;<b><i class="fa fa-inr"></i> <span id="drop">0</span> (in lacs)</b>&nbsp;&nbsp;extra and pay the same EMI.&nbsp;&nbsp;<button type="button" class="btn btn-default btn-sm" id="revise_apply" name="revise_apply" data-toggle="modal" data-target="#myModaltest" style="display:none;">Apply Now</button></h3></div>
                  
                    <?php }elseif($loan == "personal-loan"){?>
                  
                    <?php }else{?>
                   <div class="col-md-12"><h3 class="blue-bg" style="text-align: center;">Would you like to borrow &nbsp;&nbsp;<b><i class="fa fa-inr" style="font-size: 24px"></i> <span id="drop">0</span> (in lacs)</b>&nbsp;&nbsp;extra and pay the same EMI.&nbsp;&nbsp;<button type="button" class="btn btn-default" id="revise_apply" name="revise_apply" data-toggle="modal" data-target="#borrow_lap" style="display:none;">Apply Now</button>
                    </h3></div>
                    <?php }?>

                    <br><br>                              


                  </div><!-- row end -->
                  
        </div>
      </div>
      <div id="test"></div>
    </div>
  </div>
</aside>
</div>

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

                  var drpint = msg.drop_in_int.toFixed(2);
                   console.log(drpint);
                   $('#emi5').empty().append(drpint);                   
                   var nrate=(($('#loaninterest').val())-msg.drop_in_int).toFixed(2);
                  $('#loaninterest_new').val( nrate);
                  console.log(nrate);
                   
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

                   var drop_int_here = msg.drop_in_int_new.toFixed(2);
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
