<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="toolfx.css">
    <title>Compress a video</title>
    <?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
   $video = $_FILES["video"]["tmp_name"];
   $bitrate = $_POST["bitrate"];
   $command = "ffmpeg -i $video -b:v $bitrate -bufsize $bitrate compressed_file.mp4";
   system($command);
   echo "<script>alert('File has been converted')</script>";
}
?>
    
</head>
<body>

    <div class="header">
        <a href="tools.php"><img src="logo.png">
        <h3>Vidtor</h3></a>
    </div>
    <center>   
<div class="container" style="margin-top:150px;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1>Change bitrate</h1>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Select video</label>
                    <input type="file" name="video" class="form-control" required="" accept="video/*">
                </div>
                <div class="form-group">
                    <label>Select bitrate</label><br>
                    <select name="bitrate" class="form-control">
                        <option value="350k">240p</option>
                        <option value="700k">360p</option>
                        <option value="1200k">480p</option>
                        <option value="2500k">720p</option>
                        <option value="5000k">1080p</option>
                    </select>
                </div>
                <input type="submit" name="change_bitrate" class="btn btn-info" value="Change bitrate"  style="width:38%;background-color: rgb(5, 109, 173);color: white;">
            </form>
        </div>
    </div>
</div>
</center>

</body>
</html>