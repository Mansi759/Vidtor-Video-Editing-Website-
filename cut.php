<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="toolfx.css">
    <title>Cut a video</title>
</head>
<body>
    <div class="header">
        <a href="tools.php"><img src="logo.png">
        <h3>Vidtor</h3></a>
    </div>
<center>
<div class="container" style="margin-top:60px; width: 40%;">
    <div class="row">
	<div class="offset-md-4 col-md-4">
	    <form method="POST" enctype="multipart/form-data">
	        <div class="form-group">
	            <label>Video</label><br>
       	            <input type="file" name="video" class="form-control" onchange="onFileSelected(this);">
                       <video width="500" height="320" id="video" controls></video>
	        </div>

               <div class="form-group">
                   <label>Cut from</label><br>
                   <input type="text" name="cut_from" class="form-control" placeholder="00:00:00">
               </div>

               <div class="form-group">
                   <label>Duration</label><br>
                   <input type="text" name="duration" class="form-control" placeholder="00:00:00">
              </div>

              <input type="submit" name="submit" class="btn btn-primary" value="Split" style="width: 20%;background-color: rgb(5, 109, 173);color: white;">
              
	    </form>
	</div>
    </div>
</div>
</center>
<?php

if (isset($_POST["submit"]))
{
    $file_name = $_FILES["video"]["tmp_name"];
    $cut_from = $_POST["cut_from"];
    $duration = $_POST["duration"];

    $command = "ffmpeg -i " . $file_name . " -vcodec copy -ss " . $cut_from . " -t " . $duration . " cut_video.mp4";
    system($command);
    echo "<script>alert('File has been converted')</script>";
}

?>
<script>

    function onFileSelected(self) {
        var file = self.files[0];
        var reader = new FileReader();

        reader.onload = function (event) {
            var src = event.target.result;
            var video = document.getElementById("video");
            video.setAttribute("src", src);
        };

        reader.readAsDataURL(file);
    }

</script>
</body>
</html>