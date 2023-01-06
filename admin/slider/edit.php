<?php
include("../../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

	<?php
	$id = $_GET['id'];
	include("../../config/db_config.php");
	$result = mysqli_query($connection, "SELECT * FROM sliders WHERE id = $id");

	while($data = mysqli_fetch_array($result)){
		$title  = $data['title'];
		$description = $data['description'];
		$imagePath = "../../image/slider/".$data['image'];;
		$id = $data['id'];
	}
	?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Edit Record</h2>
                    <form method="POST" action="update.php" enctype="multipart/form-data">
					<input type="hidden" name="slider_id" value="<?php echo $id?>">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" value="<?php echo $title?>" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image_from_form" required>
                            <img style="height:50px; height:50px;" src="<?php echo $imagePath ?>">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <br>
                            <textarea name="description" cols="80" rows="10"><?php echo $description?></textarea>
                        </div>
                        
                        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                        <input type="submit" name="update" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>        
        </div>
    </div>

<?php
if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$filename = $_FILES["image_from_form"]["name"];
    $tempname = $_FILES["image_from_form"]["tmp_name"];
    $folder = "../../image/slider/" . $filename;
	include("../../config/db_config.php");
	$insert = mysqli_query($connection, "INSERT INTO sliders(title, description, image, created_at) VALUES ('$title', '$description', '$filename',current_timestamp())");
	move_uploaded_file($tempname, $folder);
	if ($insert) {
		header('Location:index.php');
	}
}
?>
</body>
</html>