	<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container-fluid">
		
		<aside id="fh5co-hero">
		<div class="col-md-2"></div>
	   <div class="col-md-8 exp-pad"><h2>You hereby Appoint Rupeeboss As Your Authorised Representive to Receive Your Credit Information from Experian.</h2></div>
	    <div class="col-lg-4"></div>
		<div class="col-lg-4">
	                       <div class="exp-form box-shadow">
						   
						   <form name="credit_report_otp_form" id="credit_report_otp_form" method="POST">
						       <?php echo e(csrf_field()); ?>

						   <h3 class="text-center">Enter your mobile number & verify using OTP</h3>
						   <input type="text" name="contact" id="mobile" class="form-control" pattern="[789][0-9]{9}" required maxlength="10" placeholder="9XXXX XXXXX" onkeypress="return fnAllowNumeric(event)">
					
						   
						   <div id="mobile_val" style="display: none;color: red;text-align:center;">Phone number should be of 10 digits.</div>
						   <div id="wait_div" style="display: none;color: red;">Sending OTP ...</div>
						   <a class="btn btn-primary btn-lg btn-view" id="credit_report_send_otp">SEND OTP</a>
						   </form>


						   <form name="credit_report_verify_form" id="credit_report_verify_form" style="display:none" method="POST" onkeypress="return fnAllowNumeric(event)">
						       <?php echo e(csrf_field()); ?>

						   <h3>Enter your verification code sent on your number</h3>
						   <input type="text" name="verify" id="verify" class="form-control" onkeypress="return fnAllowNumeric(event)" required maxlength="6" placeholder="Enter OTP Code">
						   <hr class="hr-clr">

						   <a class="btn btn-primary btn-lg btn-view" id="credit_report_verify_otp">VERIFY OTP</a>
						   <div id="otp_val" style="display: none;color: red;">Otp is of 6 digits.</div>
						   <div id="wrong_otp" style="display: none;color: red;">Wrong Otp !!!</div>
						   <div id="wait_div_otp" style="display: none;color: red;">Please wait ...</div>
						   </form>
						   </div>
	                             
	                            </div>
								
							
		
		</aside>
		</div>
		
		
	<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	