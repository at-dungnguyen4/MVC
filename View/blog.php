<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
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
	<a href="index.php?controller=blog&action=addblog" style="margin-left:3%" title="">Newblog</a></br>
	<table style="border-collapse:collapse;">
		<thead>
			<tr>
				<th>Id</th>
				<th>Category_id</th>
				<th>User_id</th>
				<th>Title</th>
				<th>View</th>
				<th>Is_active</th>
				<th>Content</th>
				<th>Created_at</th>
				<th>Updated_at</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($data as $value) {				
			?>
			<tr>
				<td><a href="index.php?controller=blog&action=infoblog&id=<?php echo $value['id']; ?>" title=""><?php echo $value['id']; ?></a></td>
				<td><?php echo $value['category_id']; ?></td>
				<td><?php echo $value['user_id']; ?></td>
				<td><?php echo $value['title']; ?></td>
				<td><?php echo $value['view']; ?></td>
				<td><?php echo $value['is_active']; ?></td>
				<td style="width:600px;"><?php echo $value['content']; ?></td>
				<td><?php echo $value['created_at']; ?></td>
				<td><?php echo $value['updated_at']; ?></td>
				<td>
					<a href="index.php?controller=blog&action=updateblog&id=<?php echo $value['id']; ?>" title="">Update</a>
					<a href="index.php?controller=blog&action=deleteblog&id=<?php echo $value['id']; ?>" title="">Delete</a>
				</td>	
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>