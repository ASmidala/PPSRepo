<?php

$con=mysqli_connect('localhost','root','','ai-pps');

if($con){
    echo "connection successfull";
}else {
    die(mysqli_error($con));
}

if(!con){
    die(mysqli_error($con));
}
?>