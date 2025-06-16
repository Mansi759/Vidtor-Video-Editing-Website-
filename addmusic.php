<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="toolfx.css">
    <title>Add music</title>
</head>
<body >
<div class="header">
    <a href="tools.php"><img src="logo.png">
    <h3>Vidtor</h3></a>
</div>
<center>
    <div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Select video</label>
                    <input type="file" name="video" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Select audio</label>
                    <input type="file" name="audio" class="form-control" required>
                </div>

                <input type="submit" class="btn btn-success" value="Add Audio" style="width: 25%;background-color: rgb(53, 151, 53);color: white;">
            </form>
        </div>
    </div>
</div></center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $video = $_FILES["video"]["tmp_name"];
    $audio = $_FILES["audio"]["tmp_name"];

    $command = "ffmpeg -i " . $video . " -i " . $audio . " -c:v copy -map 0:v:0 -map 1:a:0 add_music.mp4";
    system($command);
    echo "<script>alert('File has been converted')</script>";

}
?>
</body>
</html>