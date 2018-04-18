<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-content bg-white pinside40">
                    <div class="row">
          
          
                        <div class="col-md-12">
            
            <h2 class="text-center">Mobile Verification</h2>
            
            <br>
                            <div class="row" id="equifax_otp">
                               
                                <div class="col-md-6 col-md-offset-3">
                        <div class="request-form" style="background-color: #fbfbfb;box-shadow: 1px 1px 3px 1px #ccc;padding:0px;border-radius: 4px;">
                        <h4 class="text-center" style="padding:10px;background:#ccc;">ENTER YOUR MOBILE NO. AND GET STARTED</h4>
            <img src="images/verification_img.png" style="margin:0 auto; display:block; padding:20px;"/>
                        <!-- <p>Easy to apply for a loan with us,Once you have complete this form. </p> -->
                        <form name="equifax_otp_form" id="equifax_otp_form" method="POST" style="padding:0px 30px 20px 30px;">
                         <?php echo e(csrf_field()); ?>

                        
                           
                          
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="mobile">Phone</label>
                                <input id="mobile" name="mobile" type="text" placeholder="+91 XXXXX XXXXX" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" minlength="10" maxlength="10" required="">
                            </div>
                            
                            
                            <!-- Button -->
                            <div class="form-group">
                                <a class="btn btn-default btn-sm" id="equifax_get_otp" style="margin:0 auto; display:block;">GET OTP</a>
                            </div>
                        </form>
                    </div>
                                </div>
                                
                                 
                            </div>

                            <div class="row" id="otp_verify" style="display: none;">
                               
                                <div class="col-md-6 col-md-offset-3">
                        <div class="request-form" style="background-color: #fbfbfb;box-shadow: 1px 1px 3px 1px #ccc;padding:0px;border-radius: 4px;">
                        <h4 class="text-center" style="padding:10px;background:#ccc;">Enter your verification code sent on your number</h4>

            <img src="images/verification_img.png" style="margin:0 auto; display:block; padding:20px;"/>
                        <!-- <p>Easy to apply for a loan with us,Once you have complete this form. </p> -->
                        <form name="equifax_verify_form" id="equifax_verify_form" method="POST" style="padding:0px 30px 20px 30px;">
                         <?php echo e(csrf_field()); ?>

                        
                           
                          
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label sr-only" for="verify_otp_equifax">Phone</label>
                                <input id="verify_otp_equifax" name="verify_otp_equifax" type="text" placeholder="ENTER OTP" class="form-control input-md" onkeypress="return fnAllowNumeric(event)" maxlength="6" required="">
                            </div>
                            
                            
                            <!-- Button -->
                            <div class="form-group">
                                <a class="btn btn-default btn-sm" id="equifax_verify" style="margin:0 auto; display:block;">VERIFY OTP</a>
                                 <div id="otp_value" style="display: none;color: red;">Otp is of 6 digits.</div>
                           <div id="wrong_otp_value" style="display: none;color: red;">Wrong Otp !!!</div>
                           <div id="waiting_div_otp" style="display: none;color: red;">Please wait ...</div>
                            </div>
                        </form>
                    </div>
                                </div>
                                
                                 
                            </div>

                           
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>


<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script type="text/javascript">
    $('#equifax_get_otp').click(function(event){
      event.preventDefault();
      // alert('okae');
      if (! $('#equifax_otp_form').valid()) {

      } 
      else {
      if(($('#mobile').val().length)<10)
        {
              $('#mobile_value').show();
              return false;
            }
             $('#mobile_value').hide();   

      $.ajax({  
         type: "POST",  
         url: "<?php echo e(URL::to('equifax-send-otp')); ?>",
         data : $('#equifax_otp_form').serialize(),
         success: function(msg){
            console.log(msg);
            if (msg.data==true) 
                {
                $('#equifax_otp').hide();
                $('#otp_verify').show();
                } 
                else 
                {
                window.location.href="<?php echo e(URL::to('went-wrong')); ?>";
                }
        
        }   
     });
      }
    });

    $("#equifax_verify").click(function(event){
    event.preventDefault();
     
      if (! $('#equifax_verify_form').valid()) {

      }else{
        //var s=$('#'+form).serialize();
       
        if(($('#verify_otp_equifax').val().length)<6)
        {
              $('#otp_value').show();
              return false;
            }

    $('#otp_value').hide();
    $('#wrong_otp_value').hide();
    $('#waiting_div_otp').show();
    $.ajax({  
     type: "POST",  
     url: "<?php echo e(URL::to('equifax-verify')); ?>",
     dataType:"json",
     data : $('#equifax_verify_form').serialize(),
     success: function(msg){
        console.log(msg.data)
        
       if(msg.data=="true"){
        // console.log("yes");
        alert('OTP verified')
        $('#waiting_div_otp').hide();
        window.location.href="<?php echo e(URL::to('equifax')); ?>";

      }else{
        // console.log("no");
        $('#wrong_otp_value').show();
        
      }
    }
  });
}
});
</script>

