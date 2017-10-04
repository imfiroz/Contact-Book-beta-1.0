<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="public/css/bootstrap-3.3.7.min.css" type="text/css">
		
		<script src="public/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initail-scale=1.0"/>
		<title>New OOPS Project</title>
		
		<script type="text/javascript"></script> 
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<h1>Contact Book</h1>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table class="table table-bordered">
						<tr>
							<td colspan="5"><a href="index.php?req=new" class="btn btn-primary">Add New Contact</a></td>
						</tr>
						<tr>
							<th>#</th>
							<th>Contact Name</th>
							<th>Contact Number</th>
							<th colspan="2" align="center">Action</th>
						</tr>
						
						<?php
						//Creating loop for  datarow
						//var_dump($contacts);
						while($row = $contacts->fetch(PDO::FETCH_OBJ)){
							//print_r($row);
						?>
						<tr>
							<td><?php print htmlentities($row->id); ?></td>
							<td><?php print htmlentities($row->name); ?></td>
							<td><?php print htmlentities($row->phone); ?></td>
							<td><a href="index.php?req=edit&id=<?php print htmlentities($row->id); ?>" class="btn btn-info">Edit</a></td>
							<td><a href="index.php?req=delete&id=<?php print htmlentities($row->id); ?>" class="btn btn-danger">Delete</a></td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<div class="container">
				<div class="jumbotron"></div>
			</div>
		</div>
	</body>
</html>
	