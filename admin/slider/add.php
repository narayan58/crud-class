<?php
include("../../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
    $titleErr = "";
    $title = "";
if (isset($_POST['submit'])) {

if (empty($_POST["title"])) {
    $titleErr = "Title is required";
  } else {
    $title = $_POST["title"];
  }
      if (!empty($title)) {
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
}
?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" >
                            <span class="text-danger"><?php echo $titleErr;?></span>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image_from_form" required >
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <br>
                            <textarea name="description" cols="80" rows="10"></textarea>
                        </div>
                        
                        <a href="index.php" class="btn btn-secondary ml-2">Back</a>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>


</body>
</html>