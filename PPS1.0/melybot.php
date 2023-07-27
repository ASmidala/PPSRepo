<?php
$success=0;
$voiceover=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include './partials/connectm.php';
    $voiceover=$_POST['voiceover'];
    $db=$_POST['db'];
    $voicer=$_POST['voicer'];

    $sql="Select * from `ai-pps`where voiceover='$voiceover'";

    $result=mysqli_query($con,$sql);
    if($num>0){
        $voiceover=0;
    }else{

        $sql="insert into `ai-pps`(voiceover,db,voicer,
        values'($voiceover','$db','$voicer')";
        $result=mysqli_query($con,$sql);

        if($result){
            $success=1;
        }else {
            die(mysqli_error($con));
        }
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/chatbot.css">
        <title>melybotPage</title>
    </head>
    <body>

    <?php include './partials/header.php';?>
    
        <group action="melybot.php" method="post">
       <p>Click the play button to play the video:</p>
       
        <video width="1340" height="340" controls>
            <source src="movie.ogg" type="video/ogg">
            your browser  does not support the video tag.
        </video>
        <video width="445" height="" controls><source src="Simagery.NASA" type="video/SNASA">
        <source src="Simagery.mp4" type="video/mpeg"><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=londonCiki&t=k&z=20&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
        </video>
        <video width="440" height="" controls><source src="Simagery.NASA" type="video/SNASA">
            <source src="Simagery.mp4" type="video/mpeg">
            </video>
            <video width="440" height="" controls><source src="Simagery.NASA" type="video/SNASA">
                <source src="Simagery.mp4" type="video/mpeg">
                </video>
    </div>
    <div>
         <!--<h1>the audio element</h1>-->
        <p>Mely service sound:</p>

        <audio width="" src="horse.ogg" controls>
            your browser does not support the audio element
        </audio>
        <audio width="" controls><source src="horse.ogg" type="audio/ogg">
        <source src="horse.mp3" type="audio/mpeg"></audio>
    </audio>
    <audio width="1000" controls><source src="horse.ogg" type="audio/ogg">
    <source src="horse.mp3" type="audio/mpeg"></audio>
</audio>
<audio width="1000" controls><source src="horse.ogg" type="audio/ogg">
<source src="horse.mp3" type="audio/mpeg"></audio>
</audio>
    </div>
    <h1>Satelite Imagery and Destination:</h1>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=londonCiki&t=k&z=20&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=k&z=20&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
    </div>
    </group>
    <?php include './partials/footer.php';?>
<script>
    function checker(){
        var result = ("Thak you for choosing Mely chatbot service!");
        if( result == false){
            event.preventDefault();
        }
    }
</script>
         
    </body>
</html>