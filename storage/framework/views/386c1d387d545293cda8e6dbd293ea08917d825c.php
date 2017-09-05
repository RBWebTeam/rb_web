<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>
<div class="container" id="fh5co-hero">

<div class="row white-bg pad1">
		<div class="col-sm-5">
			<img src="<?php echo e(URL::to('images/contact_img.jpg')); ?>" alt="Contact Us" title="Contact Us" class="img-responsive">
		</div>
		<div  class="col-sm-6">
			<h2 class="">Have us call you now.</h2>
			<h3>Your contact details:</h3>
			<div class="row">
			<form name="contact_back_now" id="subscribe-form" method="post"> 
                   <?php echo e(csrf_field()); ?>

                <input type="hidden" name="form" value="contact-back-form">
                        
                    <div class="form-group col-sm-12">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="">
                        <input class="newsletter-name" id="name" name="name" placeholder="Name" required />
                    </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="control-label col-sm-2" for="contact">Contact:</label>
                    <div>
                        <input type="tel" class="newsletter-name" name="contact" onkeypress="return fnAllowNumeric(event)" placeholder="Number" minlength="10" maxlength="10" required />
                    </div>
					<br>
					 <button class="btn btn-primary btn-outline with-arrow pull-left sidebar-submit" >Call Me Back<i class="icon-arrow-right"></i></button>
                    </div>
                          
                   
                           

                  
                    <div class="iframeloading" style= "display: none; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;">
                <img src="<?php echo e(URL::to('images/ajaxloader.gif')); ?>" alt="Loader" title="Loader" style="top: 50%; position: relative; left: 50%;"  />
               </div> 
            </form>
            
            <div class='msg displaynone' ><p>Thanks. We will reach you soon.</p></div>
            <div class='msg_err displaynone'><p>Ooops. Something went wrong.</p></div>
           
			</div>

             <span id='err' class='displaynonemsg'>Will reach you soon</span>

		</div>
		<br>
		<div class="col-md-12 border">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3770.51082761713!2d72.8894307!3d19.0852334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c87d64ffffff%3A0x52070606740f342d!2sRupeeBoss+financial+Services+Pvt.+ltd!5e0!3m2!1sen!2s!4v1492498308982" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>

</div>
<br>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

