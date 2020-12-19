<!DOCTYPE html>
<html>
<head>
	<title>User list page</title>
</head>
<body>

	<h3>All User</h3>
	<a href="<?php echo e(route('home.index')); ?>">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>E NAME</td>
			<td>Contact</td>
			<td>User Name</td>
			<td>Action</td>
			
		</tr>

		<?php for($i=0; $i < count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]['id']); ?></td>
			<td><?php echo e($users[$i]['ename']); ?></td>
			<td><?php echo e($users[$i]['contact']); ?></td>
			<td><?php echo e($users[$i]['username']); ?></td>
			<td>
				
				<a href="<?php echo e(route('home.edit', $users[$i]['id'])); ?>">Edit</a> |
				<a href="/delete/<?php echo e($users[$i]['id']); ?>">Delete</a> 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH G:\ATP 3 Part 2\class practice\Final Lab Exam\resources\views/admin/userlist.blade.php ENDPATH**/ ?>