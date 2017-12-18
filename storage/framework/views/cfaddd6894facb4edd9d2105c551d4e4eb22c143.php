<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="fh5co-hero">
	<div class="container" id="elem">
	<div class="col-md-12 pad centeralign" style="margin:104px 30px 30px -46px"   >
	<center>
<img src=" <?php echo e(URL::to('images/coming.png')); ?>" class="img-responsive" >

 <div class="error-actions">
                    <a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="<?php echo e(URL::to('contact-us')); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>

</center>


</div>
</div>
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>