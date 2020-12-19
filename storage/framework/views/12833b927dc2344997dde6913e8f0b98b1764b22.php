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
			<td>NAME</td>
			<td>USERNAME</td>
			<td>CGPA</td>
			<td>Action</td>
		</tr>

		<?php for($i=0; $i < count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]['userId']); ?></td>
			<td><?php echo e($users[$i]['name']); ?></td>
			<td><?php echo e($users[$i]['username']); ?></td>
			<td><?php echo e($users[$i]['cgpa']); ?></td>
			<td>
				<a href="/details/<?php echo e($users[$i]['userId']); ?>">Details</a> |
				<a href="<?php echo e(route('home.edit', $users[$i]['userId'])); ?>">Edit</a> |
				<a href="/delete/<?php echo e($users[$i]['userId']); ?>">Delete</a> 
			</td>
		</tr>
		<?php endfor; ?>
	</table>

</body>
</html><?php /**PATH G:\ATP 3 Part 2\class practice\DB\resources\views/home/userlist.blade.php ENDPATH**/ ?>