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
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">Enter Contact Details</div>
								
							<div class="panel-body">
							
							<form method="post" action="index.php?req=new">
								<input type="hidden" name="id" value=" " >
								<table class="table table-hover">
									<tr>
										<td>Contact Name</td>
										<td><input required class="form-control" type="text" name="name"  placeholder="Enter Name"></td>
									</tr>
									<tr>
										<td>Enter Number</td>
										<td><input required class="form-control" type="text" name="number"  placeholder="Enter Mobile Number"></td>
									</tr>
									<tr>
										<td colspan="2" align="center"><input class="btn btn-primary" type="submit" name="save" value="Save"></td>
									</tr>
								</table>
							</form>
					</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
		<div class="container">
				<div class="jumbotron"></div>
			</div>
		</div>
</body>
</html>