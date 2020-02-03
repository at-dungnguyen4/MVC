<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
		table{
		margin: 0 auto 0;
		margin-top:30px;
	}
		table, th, td {
  border: 1px solid black;
}
		td{
		text-align:center;
		}
	</style>
</head>
<body>
	<table style="border-collapse:collapse;">
	<a href="index.php?controller=user&action=adduser" title="" style="margin-left:38%">New User</a>
		<thead>
			<tr>				
				<th>ID</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Action</th>				
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($data as $value) {				
			?>
			<tr>
				<td><a href="index.php?controller=user&action=info&id=<?php echo $value['id']; ?>" title=""><?php echo $value['id']; ?></a></td>
				<td><?php echo $value['full_name']; ?></td>
				<td><?php echo $value['email']; ?></td>
				<td>
					<a href="index.php?controller=user&action=updateuser&id=<?php echo $value['id']; ?>" title="">Update</a>
					<a href="index.php?controller=user&action=deleteuser&id=<?php echo $value['id']; ?>" title="">Delete</a>
				</td>				
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>

</body>
</html>