<?php
include("../../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Slider List</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
		.wrapper{
		margin: 0 auto;
		}
		img{
			width:100px;
			height:100px;
		}
		table tr td:last-child{
		width: 120px;
		}
		</style>
		<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		});
		</script>
	</head>
	<body>
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="mt-5 mb-3 clearfix">
							<h2 class="pull-left">Slider List</h2>
							<a href="../dashboard.php" class="btn btn-info pull-left ml-2"> Dashboard</a>
							<a href="add.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i>Slider Add</a>
						</div>
						<?php
						include("../../config/db_config.php");
						?>
						
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>S.N.</th>
									<th>Title</th>
									<th>Description</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include("../../config/db_config.php");
								$listData = mysqli_query($connection, "SELECT * FROM sliders ORDER BY id DESC");
								$i = 1;
								while($value = mysqli_fetch_array($listData)){
									$imagePath = "../../image/slider/".$value['image'];
								echo "<tr>";
										echo "<td>".$i++."</td>";
										echo "<td>".$value['title']."</td>";
										echo "<td>".$value['description']."</td>";
										echo "<td><img src=".$imagePath."></td>";
										echo "<td><a href='edit.php?id=$value[id]'>Edit</a> || <a href='delete.php?id=$value[id]'>Delete</a></td>";
								echo "</tr>";
								}
								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>