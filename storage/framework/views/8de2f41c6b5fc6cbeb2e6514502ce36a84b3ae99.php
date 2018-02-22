
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class=" ">
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
                                        <h1>Working Capital EMI Calculator</h1>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">
                       <!--  <h4 style="text-align: center;" >EMI Calculator</h4> -->
                      <!--   <form class="calculator_form" name="calculator_form" method="post" action="calculator_form"> -->
                       <!--    <?php echo e(csrf_field()); ?> -->
                        
                         <form  id="calculator_form" name="calculator_form" method="post" action="calculator_form">
                               <?php echo e(csrf_field()); ?>



                                        <div class="row">
                                        <br>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                 <label class="sr-only control-label" for="Loan Amount">Turnover / Topline<span class=" "> </span></label>
                                                    <input id="turnover" name="turnover" class="form-control" type="text" placeholder="Turnover / Topline" onkeypress="return workNumberKey(event,this)"    required >
                                                </div>
                                            </div>

                                            

     <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Loan Amount">Profit Before Tax<span class=" "> </span></label>
                                                    <input id="profitbefore" name="profitbefore" type="text" placeholder="Profit Before Tax" class="form-control" onkeypress="return workNumberKey(event,this)"    required >
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Interest Rate">Depreciation<span class=" "> </span></label>
                                                    <input id="depreciation" name="depreciation" type="text" placeholder="Depreciation" class="form-control" onkeypress="return workNumberKey(event,this)"    required >
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Loan Tenure">Finance Cost<span class=" "> </span></label>
                                                    <input id="financecost" name="financecost" type="text" placeholder="Finance-cost" class="form-control" onkeypress="return workNumberKey(event,this)"   required >
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    <!-- </form> -->
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">
                       <!--  <h4 style="text-align: center;" >EMI Calculator</h4> -->
                    <!--     <form class="contact-us" method="post" action="#"> -->
                                        <div class=" ">
                                        <br>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Loan Amount">Inventory<span class=" "> </span></label>
                                                    <input id="inventory" name="inventory" type="text" placeholder="Inventory" class="form-control" onkeypress="return workNumberKey(event,this)" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Interest Rate">Debtors<span class=" "> </span></label>
                                                    <input id="debtors" name="debtors" type="text" placeholder="Debtors" class="form-control" onkeypress="return workNumberKey(event,this)" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Loan Tenure">Creditors<span class=" "> </span></label>
                                                    <input id="creditors" name="creditors" type="text" placeholder="Creditors" class="form-control" onkeypress="return workNumberKey(event,this)" required>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-xs-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="Interest Rate">Existing OD / CC<span class=" "> </span></label>
                                                    <input id="existing" name="existing" type="text" placeholder="Existing OD / CC" class="form-control"  onkeypress="return workNumberKey(event,this)" required>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                      <!--       <div class="col-md-5 col-xs-6"> -->
                                                <!-- <button type="submit" class="btn btn-default btn-sm">Submit</button> -->

                                                <div>
                                                <button type="submit" class="btn btn-primary pull-left" id="calculator_id">Submit</button>
                                            </div>


                                            
                                            
                                        </div>
                                    </form>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 20px">
                    <div class="how-it-block1 bg-boxshadow" style=" min-height: 360px;">
                        <h4 style="text-align: center;" >Eligible Loan Amount</h4>
                        <div class="mb40" style="text-align: center;">

    <center><h3 id="proposedlimit_ID" style="color: red; margin: 116px 10px 20px 40px "></h3></center>
                           
                        </div>
                        
                    </div>                </div>
                                    
                                </div>
                              
                            </div>
                            <!-- /.section title start-->
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>




<script type="text/javascript">
  
    function workNumberKey(evt,val){

      // var charCode = (evt.which) ? evt.which : evt.keyCode;
      // if (charCode != 46 && charCode > 31  && (charCode < 48 || charCode > 57) ||  charCode=="" )
      //  return false;
              var charCode = (evt.which) ? evt.which : evt.keyCode;
          switch (charCode){
        case 45:
           // return val.value.length == 0 ? true : false;
            break;
        case 48:
        case 49:
        case 50:
        case 51:
        case 52:
        case 53:
        case 54:
        case 55:
        case 56:
        case 57:
            return true;
            break;
        default:
            return false;
            break;
    }

     
   }
</script>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<script type="text/javascript">
  $(document).ready(function(){
    $('#calculator_id').on('click',function(e){
      e.preventDefault();
        if(!$('#calculator_form').valid()){
              return false;
        }else{
           $.ajax({  
             type: "POST",  
             url: "<?php echo e(URL::to('api/working-capital-emi-calculator-api')); ?>",
             data : $("#calculator_form").serialize(),
             dataType: 'json',
             success: function(msg){ 
                 if(msg.statusid==0){
                      
                        $('#proposedlimit_ID').empty().append('<i class="fa fa-inr" aria-hidden="true"></i> '+parseInt(msg.data['proposedlimit']));
                       
                 }else if(msg.statusid==1){
                  $('#proposedlimit_ID').empty().append("Proposed limit reject..");
                 }

            }


          });
     
        }
        
    })   

  });
</script>

