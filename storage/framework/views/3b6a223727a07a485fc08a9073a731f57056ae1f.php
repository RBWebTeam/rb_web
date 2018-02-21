<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<form id="tracapp" method="post" action="<?php echo e(URL::to('view-your-application')); ?>" >
                <?php echo e(csrf_field()); ?>


<div class="container">
        <div class="row">
            <div class="col-md-12">
            
                <div class="wrapper-content bg-white pinside40">
                 <h2 class=""><center>Track Your Application Status</center></h2>
                 <p style="text-align: center;">To Know Your Loan Application Status, Please fill the following details.</p>
                 </br>
                    <div class="row">
                    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           
                            <!-- /.card listing -->
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card-listing">
                                
                                <div class="card-content" style="text-align: center;">
                                    <div class="form-group">
                                <label class="control-label sr-only" for="applicationId">Application ID</label>
                                <input id="applicationId" name="App_Id" type="text" placeholder="Application ID" class="form-control input-md" required="required">
                            </div>


                            <div class="form-group">
                                <label class="control-label sr-only" for="Mobile">Mobile No.</label>
                                <input id="Mobile" name="Mobile" type="text" placeholder="Mobile No." class="form-control input-md" onkeypress="return fnAllowNumeric(event)" required="required">
                            </div>


                                               
                                <!-- <a href="#" class="btn btn-default btn-sm" style="margin-right: 0px;">Track Application</a> -->

                                    <button class="btn btn-default btn-sm" id="trackid" style="margin-right: 0px;" type="submit">Track Application</button>


                                    <h3 style="text-align: center;"><br>OR</h3>


                                    <a href="#" class="btn btn-default btn-sm trigger-custom" style="margin-right: 0px;">Log In / Register</a>
                                </div>
                            </div>
                            <!-- /.card listing -->
                        </div>



                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<script type="text/javascript">

 // $("#trackid").click(function(event){
 //         event.preventDefault();
 //      if(!  $('#tracapp').valid()){
 //        return false;
 //      }else{
 //        document.getElementById('tracapp').submit();

            
      //    $.ajax({  
      //    type: "POST",  
      //    url: "<?php echo e(URL::to('trackapp_sub')); ?>",
      //    data : $('#tracapp').serialize(),
      //    dataType: 'json',
      //    success: function(msg){
      //    $(".iframeloading").hide(); 
      //     if(msg==2){
      //        alert("Something Went Wrong");       
      //     } 
      //     else{
            
      //     }

      //   }  
      // });
       // }
// });
</script>

<script>
    // $("#tracapp").submit(function(e)){

    //     e.preventDefault();

    //     var $form = $(this),
    //     term = $form.find('input[name = "applicationId"]').val(),
    //     url = "<?php echo e(URL::to('view-your-application')); ?>";

    //     var posting = $.post(url, {
    //         applicationId : term
    //     });

    //     posting.done(function(data){
    //         var content = $(data).find('#content');
    //         $("#result").empty().append(content);
    //     });
    // });


</script>
