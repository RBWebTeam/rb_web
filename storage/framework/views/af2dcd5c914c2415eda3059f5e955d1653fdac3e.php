<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<br>
<div id="fh5co-hero">
<div class="container">
    <div class="row">
    <img src="<?php echo e(URL::to('images/404.png')); ?>" class="img-responsive error-img pull-center" >
    <br>
        <div class="col-md-12">
            <div class="error-template">
<!--                 <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2> -->
               <!--  <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div> -->
                <div class="error-actions ">
                    <a href="<?php echo e(URL::to('/')); ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>&nbsp;&nbsp;<a href="<?php echo e(URL::to('contact-us')); ?>" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
