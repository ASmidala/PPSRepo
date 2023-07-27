<?php
 $HOSTNAME='localhost';
 $USERNAME='root';
 $PASSWORD='';
 $DATABaSE='registration_forms';

 
// $con=mysqli_connect('localhost','root','','registration_forms');


// if($con){
//     echo "connection successful";
// }else{
//     die(mysqli_error($con));
// }

if(!$con){
    die(mysqli_error($con));
}

?>