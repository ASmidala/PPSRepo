<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSSWORD = '';
$DATABaSE = 'ai-pps';

$con=mysqli_connect('localhost','root','','ai-pps');

if($con){
    echo "connection successful";
}else {
    die(mysqli_error($con));
}

// if(!$con2){
    die(mysqli_error($con))
// }
?>