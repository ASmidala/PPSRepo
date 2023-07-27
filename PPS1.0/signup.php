<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include './partials/connect.php';
    $FULLNAME=$_POST['FULLNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    $CONFIRMPASSWORD=$_POST['CONFIRMPASSWORD'];
    $GENDER=$_POST['GENDER'];
    $EMAIL=$_POST['EMAIL'];
    $COUNTRY=$_POST['COUNTRY'];
    $PHONENO=$_POST['PHONE-NO'];
    $DOB=$_POST['DOB'];
    $IMAGE=$_POST['IMAGE'];
    $CRITERIA=$_POST['CRITERIA'];
  
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


$sql="Select * from `registration_forms` where
fullname='$fullname'";

$result=mysqli_query($con,$sql);
if(result){
    $num=mysqli_num_rows($result); 
    if($num>0){
        // echo "User already exist";
        $user=0;
    }else {

        $sql="insert into `registration_forms`(fullname,password,     confirmpassword,email,gender,country,phone-no,dob,image,criteria)
        values('$fullname','$password','$confirmpassword','$email',
       '$gender','$country','$phoneno','$dob',;$image','$criteria'))";
        $result=mysqli_query($con,$sql);

        if($result){
             //  echo "Signup successful";
             $success=1;
                  }  else{
                       die(mysqli_error($con));
                 }
             }
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/signup.css">
        <title>SignupPage</title>
    </head>
    <body> 
        
    <?php include '/.partials/header.php';?>
    <?php include './partials/footer.php';?>
        
    <?php 
    if($user){
        echo "warning is already on the db";
    }
    ?>
    <?php 
    if($success){
        echo "you are successfully signed up";
    }
    ?>
       <!-- <form>
            <div class="fname">
                <label for="fullname">Fullname</label>
                <input type="text" value="Fullname" id="name" placeholder="name">
            </div>
            <br>
            <div class="pwdd">
                <label for="password">Password</label>
                <input type="pwd" value="password" id="pwd" placeholder="password">
            </div>
                <br>
                <div class="pwddd">
                <label for="password">Password</label>
                <input type="pwd" value="Re-type password" id="pwd" placeholder="Re-type password">
            </div>
            <br>
            <div class="email">
                <label class="em" for="email">Email</label>
                <input type="email"  value="johndoe@gmail.com">
            </div>
            <div class="gender">
                <p>Gender</p>       
                <p>Male<input type="radio"  value="male" id="Male" placeholder="male"></p> <p>Female<input type="radio"  value="female" id="Female" placeholder="female"></p>
               
            </div>
            <div class="country">
            <p>Country</p>
            <select class="btn">
                <option class="btn">select</option>
                <option>Nigeria</option>
                <option>U.S.A</option>
                <option>China</option>
                <option>Japan</option>
                <option>UK</option>
                <option>Germany</option>
                <option>Ukrain</option>
                <option>India</option>
            </select>
        </div>
        <div class="phone">
            <label for="phone no">Phone Number</label>
            <select class="ph">
                <option>+234<img src="ng.png" alt="ng"></option>
                <option>+10<img src="usa.png" alt="u.s"></option>
                <option>+301<img src="china.png" alt="china"></option>
                <option>+01<img src="japan.png" alt="japan"></option>
                <option>-40<img src="uk.png" alt="uk"></option>
                <option>+110<img src="germany.png" alt="u.s"></option>
                <option>-06<img src="ukrain.png" alt="u.s"></option>
                <option>+120<img src="india.png" alt="india"></option>
                <input class="main" type="number" value=" number" id="Pn" placeholder="number" >
            </select>
        </div>
        <div class="DOB">
            <p>Date of Birth</p>
            <label for="year">Year</label>
                         <select>
                        <option>1897</option>
                        <option>1980</option>
                        <option>1970</option>
                        <option>1980</option>
                        <option>1990</option>
                        <option>2000</option>
                        <option>2020</option>
                    </select>
                <label for="month">Month</label>
                        <select>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</Obj></option>
                            <option>November</option>
                            <option>December</option>
                            </select></a>
                            <label for="day">Day</label>
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                            </select></a>
        </div>
        <div>
        <br>
            <label class="IMAGE2" for="image">Images</label>
        <input class="img" type="file" id="file-uploader">
            <p class="R">Register as a </p>
            <ul class=" choose">
                <li>Operator<input type="checkbox"></li>
                <li>Researcher<input type="checkbox"></li>
                <li>Bodies<input type="checkbox"></li>
            </ul>
        </div>
            <br>
            
            <button id="signup">Signup</button>
        
    </div>
</form>-->






<div class="container" >
    <h1></h1>
    <a href="#" class="button" id="button">SIGNUP</a>
</div>
<div class="popup">
    <div class="popup-content">
        <img src="close.png" alt="close" class="close">
      <img src="user.png"  alt="User">
      <form action="signup.php" method="post">
        <div class="fname">
            <label for="fullname">Fullname</label>
            <input type="text" value="" id="name" placeholder="name">
        </div>
        <br>
        <div class="pwdd">
            <label for="password">Password</label>
            <input type="pwd" value="" id="pwd" placeholder="password">
        </div>
            <br>
            <div class="pwddd">
            <label for="password">Password</label>
            <input type="pwd" value="" id="pwd" placeholder="confirm-type password">
        </div>
        <br>
        <div class="email">
            <label class="em" for="email">Email</label>
            <input type="text"  value="" placeholder="johndoe@gmail.com">
        </div>
        <div class="gender">
            <p>Gender</p>       
            <p>Male<input type="radio" value="" id="" placeholder="male"></p> <p>Female<input type="radio"  value="" id="" placeholder="female"></p>
        </div>
        <div class="country">
        <p>Country</p>
        <select class="btn">
            <option class="btn">select</option>
            <option>Nigeria</option>
            <option>U.S.A</option>
            <option>China</option>
            <option>Japan</option>
            <option>UK</option>
            <option>Germany</option>
            <option>Ukrain</option>
            <option>India</option>
        </select>
    </div>
    <div class="phone">
        <label for="phone no">Phone Number</label>
        <select class="ph">
            <option>+234<img src="ng.png" alt="ng"></option>
            <option>+10<img src="usa.png" alt="u.s"></option>
            <option>+301<img src="china.png" alt="china"></option>
            <option>+01<img src="japan.png" alt="japan"></option>
            <option>-40<img src="uk.png" alt="uk"></option>
            <option>+110<img src="germany.png" alt="u.s"></option>
            <option>-06<img src="ukrain.png" alt="u.s"></option>
            <option>+120<img src="india.png" alt="india"></option>
            <input class="main" type="number" value=" number" id="Pn" placeholder="number" >
        </select>
    </div>
    <div class="DOB">
        <p>Date of Birth</p>
        <input type="datetime-local" id="date" value="2000-01-01">
            
    </div>
    
    <br>
        <label class="IMAGE2" for="image">Images</label>
    <input class="img" type="file" id="file-uploader">
        <p class="R">Register as a </p>
        <ul class=" choose">
            <li>Operator<input type="checkbox"></li>
            <li>Researcher<input type="checkbox"></li>
            <li>Bodies<input type="checkbox"></li>
        </ul>
        <br>
        </br>
        <br>
       <a href="#" class="button" id="button">Signup</a>
    </div>
        <br>
        
        
 </div>
 <!--<a href="#" class="button" id="button">Signup</a>-->
</form>    
    </div>
</div>
        <script>
            document.getElementById("button").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
            })

            document.getElementById(".close").addEventListener("click", function(){
                document.querySelector(".close").style.display = "none";
            })
        </script>
    </body>
    </html>