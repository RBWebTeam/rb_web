<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="fh5co-hero">
	<div class="container">
		<div class=" pad error-template">
		  <img src="<?php echo e(URL::to('images/went-wrong.png')); ?>" alt="Went Wrong" title="Went Wrong" class="pull-center"/>
		    <h1 class="align-center loan-head">
			 Something went wrong
			</h1>
			<div class="error-actions">
                    <a href="http://www.rupeeboss.com" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="http://www.rupeeboss.com/contact-us" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
		</div>
	</div>
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

