<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

	<h1><?php echo $__env->yieldContent('head'); ?></h1>
	<nav>
		<?php echo $__env->yieldContent('navbar'); ?>
	</nav>

	<div id="main-content">
		<?php echo $__env->yieldContent('content'); ?>;
	</div>

	<div id="footer">
		<p>copyright@2020</p>
	</div>
</body>
</html><?php /**PATH G:\ATP 3 Part 2\class practice\DB\resources\views/layout/main.blade.php ENDPATH**/ ?>