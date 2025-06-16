<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toolfx.css">
    <title>thumbnail</title>
</head>
<body>
<div class="header">
    <a href="tools.php"><img src="logo.png">
    <h3>Vidtor</h3></a>
</div>
<center>
<div class="container" style="margin-top: 100px;">
	<div class="row">
	<div class="col-md-6 offset-md-4">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label>Select video</label>
				<input type="file" name="video" accept="video/*" required class="form-control">
			</div>

			<div class="form-group">
				<label>Select image</label>
				<input type="file" name="image" accept="image/*" required class="form-control">
			</div>

			<input type="submit" class="btn btn-primary" value="Add thumbnail" style="width: 38%;background-color: rgb(5, 109, 173);color: white;">

		</form>
	</div>
</div>
</div></center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$video = $_FILES["video"]["tmp_name"];
$image = $_FILES["image"]["tmp_name"];

$command = "ffmpeg -i $video -i $image -map 0 -map 1 -c copy -c:v:1 png -disposition:v:1 attached_pic thumbnail.mp4";
system($command);

echo "<script>alert('Thumbnail has been added')</script>";
}
?>
</body>
</html>