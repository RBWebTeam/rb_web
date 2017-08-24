<form method="POST" action ="xml">
	<?php echo e(csrf_field()); ?>

	<input type="text" name="wae">
	<input type="text" name="sae">
	<button>submit</button>
</form>