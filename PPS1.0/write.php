<?php
$success=0;
$writeq=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include './partials/connectw.php';
    $writeq=$_POST['writeq'];
    $db=$_POST['db'];
    $writea=$_POST['writea'];

    $sql="Select * from `ai-pps` where writeq='$writeq'";

    $result=mysqli_query($con,$sql);
    if(result){
        $num=mysqli_num_rows($result);
        if($num>0){

            $user=0;
        }else {

            $sql="insert into `ai-pps`(writeq,db,writea,
            values('$writeq','$db','$writea'))";
            $result=mysqli_query($con,$sql);

            if($result){
                success=1;
            }else {
                die(mysqli_error($con));
            }
        }
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset utf="-8">
        <link rel="stylesheet" href="write.css">
        <title>writebot</title>
    </head>
    <body>
        <?php include './partials/header.php';?>
        
        <select action="write.php" method="post">
            <option>location</option>
            <option>londonCiki</option>
        </select>

        <?php include './partials/footer.php';?>

        <script src="write.js"></script>
    </body>
</html>