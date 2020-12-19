<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>
	<br>
	
		<form method="post" enctype="multipart/form-data">

			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<fieldset>
				<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="ename" value="<?php echo e($ename); ?>"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" value="<?php echo e($contact); ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo e($username); ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" value="<?php echo e($password); ?>"></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo e($err); ?> <br>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH G:\ATP 3 Part 2\class practice\Final Lab Exam\resources\views/admin/edit.blade.php ENDPATH**/ ?>