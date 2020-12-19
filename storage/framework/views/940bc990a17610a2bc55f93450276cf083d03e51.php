<?php $__env->startSection('head'); ?>
	Welcome home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<br>
	<br>
	ID: <?php echo e($id); ?> <br>
	Name: <?php echo e($name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Home Page
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\ATP 3 Part 2\class practice\DB\resources\views/home/index.blade.php ENDPATH**/ ?>