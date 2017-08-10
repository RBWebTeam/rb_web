<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div id="fh5co-page">
	<div class="fh5co-contact animate-box">
		<div class="container" id="fh5co-hero">
			<div class="row">
						
				<div class="col-md-12">
					<div class="row pad11 white-bg comp-pg">

                   <img src="<?php echo e(URL::to('images/Comfy-Sales Leaflet-Front.jpg')); ?>" alt="Comfy Leaflet-Front" title="Comfy Leaflet-Front" class="img-responsive"/>
				   <img src="<?php echo e(URL::to('images/Comfy-Sales Leaflet-Back.jpg')); ?>" alt="Comfy Leaflet-Back" title="Comfy Leaflet-Back" class="img-responsive"/>
					</div>
				</div>
			</div>
		</div>	
	</div>

	</div>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

