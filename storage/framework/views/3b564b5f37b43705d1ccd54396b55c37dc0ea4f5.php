<?php $__env->startSection('content'); ?>
	
	<div class="col-sm-8 blog-main">

		<h1><?php echo e($post->title); ?></h1>
		
		<?php echo e($post->body); ?>

	
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>