<?php
$login=0;
$invalid=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include './partials/connect.php';
    $username=$_POST['FULLNAME'];
    $password=$_POST['PASSWORD'];

    // $CONFIRMPASSWORD=$_POST['CONFIRMPASSWORD'];
    // $GENDER=$_POST['GENDER'];
    // $EMAIL=$_POST['EMAIL'];
    // $COUNTRY=$_POST['COUNTRY'];
    // $PHONENO=$_POST['PHONE-NO'];
    // $DOB=$_POST['DOB'];
    // $IMAGE=$_POST['IMAGE'];
    // $CRITERIA=$_POST['CRITERIA'];
  
//     $sql="insert into `registration_forms`(fullname,password,
//     confirmpassword,email,gender,country,phone-no,dob,image,criteria)
//     values('$fullname','$password','$confirmpassword','$email',
//     '$gender','$country','$phoneno','$dob',;$image','$criteria')";
//     $result=mysqli_query($con,$sql);

//     if($result){
//         echo "Data inserted successfully";
//     }else{
//         die(mysqli_error($con));
//     }
// }


$sql="Select * from `registration_forms` w here
username='$username' and password='$password'";

$result=mysqli_query($con,$sql);
if(result){
    $num=mysqli_num_rows($result); 
    if($num>0){
        // echo "Login successful";
        $login=1;
        session_start();
        $_SESSION['username'];
        header('location:home.php');

    }else {
       //  echo "Invalid credentials";
       $invalid=1;
      
    }
        
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/login.css">
        <title>LoginPage</title>
    </head>
    <body>
        <?php
    if($login){
        echo "you are successfully logged";
    }
    ?>
    <?php 
    if($invalid){
        echo "your credential does not match";
    }
    ?>
</div>
       <!--<form>
            <div>
            <label for="userid">UserID</label>
            <input class="userid"  type="text" value="userid" id="name" placeholder="userid">
        </div>
        <div>
            <label class="pd" for="password">Password</label>
            <input class="pwd" type="pwd" value="password" id="password" placeholder="password">
        </div>

        <div class="rc">
        <label for="remember me">Remember Me</label> 
        <input type="checkbox" value="checkbox" id="checkbox">
        
    </div>
    <br>
        
        </form>
        <button class="login">Login</button>
        <br>
        <label class="signup" for="signup">New Register here<a href="Signup.html">Signup</a></label>
        
    </div>
</div>-->
<div class="container">
    <h1></h1>
    <a href="#" class="button" id="button">Login</a>
</div>

<div class="popup">
    <div class="popup-content">
        <img src="close.png" alt="close" class="close">
      <img src="user.png"  alt="User">
      <input type="text" placeholder="Username">
      <input type="password" placeholder="Password">
      <a href="#" class="button">Login</a>
      <br/>
      <br/>
      <label class="signup" for="signup">New Register here<a href="Signup.php">Signup</a></label>
    </div>
   
</div>
    <script>
        document.getElementById("button").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
})

document.getElementById(".close").addEventListener("click", function(){
    document.querySelector(".close").style.display = "close";
})
    </script>
</body>
</html>
