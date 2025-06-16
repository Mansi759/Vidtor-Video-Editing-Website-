<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vidtor</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="learn.css">
    <link rel="stylesheet" href="tool.css">

    
</head>
<body>
    <!--Header-->
    <div class="header">
        <table border="0px">
        <tr>
            <td width="5%"><img src="logo.png"></td>
            <td width="65%"><h3>Vidtor</h3></td>
            <td><a href="#home">Home</a></td>
            <td><a href="#lt">Learn</a></td>
                
            <td><a href="#tooltable">Tools</a></td>
           
            <td><a href="logout-user.php"><button>Log out</button></a></td>
        </tr>
       </table>

    </div>
    <!--End header-->
    <!--Home-->
    <div class="box">
    
    <div id="home">
        <table border="0px">
            <tr>
                <td>
                    <h1>Online Video Editor</h1>
                </td>
            </tr>
            <tr>
                <td><h2>Edit the video the way you want.</h2></td>
            </tr>
            <tr>
                <td><a href="#tooltable"><button>Get Started!!</button></a></td>
                
            </tr>
        </table>
    </div>
    </div>
    <table>
        <table border="0px" class="i" >
            <tr>
                <td class="text"><h1>Your all-in-one online video editor</h1>
                    <p>Make your own video from scratch, edit it and add music — all in one screen! Our seamless video editor allows you to manage the added media easily with the help of multi-track timeline.</p>
                <td><img src="1.avif"</td>
            </tr>
            <tr>
                <td><img src="m2.webp" width="100%"></td>
                <td class="text"><h1>Add music to your video</h1>
                <p>a video of variable duration that integrates a song or an album with imagery that is produced for promotional or musical artistic purposes.</p></td>
            </tr>
            <tr>
                <td class="text"><h1>Reduce the size of video</h1>
                <p>the process of reducing the total number of bits needed to represent a given image or video sequence. </p></td>
                <td><img src="3.avif"></td>
            </tr>
        </table>
    </table>
    <hr>
    <!--End home-->
    <!--Learn-->
    
        <table border="0px" id="lt">
            <th colspan="2" id="heading">How to create a video online</th>
            <tr>
                <td><h2>STEP 1.  <em>Get Started</em></h2>
                
                <p>Upload all the pics, videos and audio you want to the editor. You can choose them from your device, Google Drive and Dropbox storage account. If you want to make a video from scratch, just proceed to the next step.</p></td>
                <td>
                    <img src="step1.avif" >

                </td>
            </tr>
            <tr>
                <td><h2>STEP 2. <em>Create a video</em></h2>
                
                <p>Add all the necessary files to the timeline and change their order to your liking. Edit each file one by one: crop, adjust saturation and other settings, change speed and volume. Then add any text you need, set its font, color, size, etc.</p></td>
                <td>
                    <img src="step2.avif">

                </td>
            </tr>
            <tr>
                <td><h2>STEP 3. <em>Save the result</em></h2>
                    
                    <p>Now just click on "Export" at the top right, choose one of the export options, and download the new video to your device or save to a cloud storage account.</p></td>
                    <td>
                        <img src="step3.avif">
    
                    </td>
                </tr>
                   
            </tr>

        </table>

    </table>
    <hr>
    <!--EndLearn-->
    <!--Tools-->
    <table border="0px" id="tooltable">
        <th colspan="3">READY? LET'S DO THIS.</th>
        <tr>
            <td>
                <table border="0px">
                    <tr><td><a href="header1.php"><img src="screen-video-editor.png"></a></td></tr>
                    <tr><td><h3>Video Editor</h3><hr></td></tr>
                    <tr><td><p>Your all-in-one online video editor. Combine and manage video, images, text and music in the multi-track timeline.</p></td></tr>
                </table>
            </td>
            <td>
                <table>
                    <tr><td><a href="compress.html"><img src="screen-compress-video.jpg"></a></td></tr>
                    <tr><td><h3>Compress Video</h3><hr></td></tr>
                    <tr><td><p>Use the tool to compress a video of any format with one click.</p></td></tr>
                </table>
            </td>
            <td>
                <table>
                    <tr><td><a href="cut.html"><img src="screen-cut-video.png"></a></td></tr>
                    <tr><td><h3>Cut Video</h3><hr></td></tr>
                    <tr><td><p>Enter the necessary period of time or move markers to quickly cut your video file.</p></td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="padding-left:30%;padding-top:10%">
                    <tr><td><a href="add _music.html"><img src="screen-add-audio-to-video.png"></a></td></tr>
                    <tr><td><h3>Add Music To Video</h3><hr></td></tr>
                    <tr><td><p>Add audio or favorite song to a video for free right in your browser.</p></td></tr>
                </table>
            </td>
            
            <td >
                <table style="padding-left:65%;padding-top:10%;">
                <tr><td><a href="thumbnail.html"><img src="screen-crop-video.png"></a></td></tr>
                    <tr><td><h3>Thumbnail</h3><hr></td></tr>
                    <tr><td><p>Choose one of the prepared image as ypur video thumbnail.</p></td></tr>
                </table>
            </td>
        </tr>
    </table>
    <hr>
    <!--EndTools-->
    <!--Footer-->
   <div style="color: rgb(75, 67, 67); font-size: 100%;">
    <center> 
    © 2023–2025 Vidtor. All rights reserved.

    </center>
   </div>

    <!--EndFooter-->
</body>
</html>