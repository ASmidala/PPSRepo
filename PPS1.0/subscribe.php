<?php
$success=0;
$userid=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include './partials/connect2.php';
    $userid=$_POST['userid'];
    $carddetails=$_POST['carddetails'];
    $expirydate=$_POST['expirydate'];
    $cc=$_POST['cc'];

    $sql="Select * from `ai-pps` where
    userid='$userid'";

    $result=mysqli_query($con,$sql);
    if(result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $userid=0;
        }else {

            $sql="insert into 'ai-pps`(useris,carddetails,
            expirydate,cc,values('$userid','$carddetails',$expirydate','$cc')";
            $result=mysqli_query($con,$sql);

            if($result){
                $success=1;
            } else {
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
        <link rel="stylesheet" href="css/subscribe.css">
        <title>SubscriptionPage</title>
    </head>
    <body>

        
        <?php 
        if($userid){
            echo "warning the card is already exist";
        }
        ?>
        <?php 
        if($success){
            echo "successfully payment";
        }
        ?>
        }
  <div  action="subscribe.php" class="container"  method="post">
            <!--<h1>SUBSCRIBE</h1>-->
            <a href="#" class="button" id="button">Subscribe</a>
                </div>
                <div class="popup">
                    <div class="popup-content">
                        <img src="close.png" alt="close" class="close">
                        <form >
                            <h6 class="ID">UserID.<input class="ID" type="alphanumeric" value="e.g Joe Doe"></h6>
                            
                                <div class="CardDetails">
                                <label for="carddetails">Card Details</label>
                                <input class="cd" type="card no" id="card no" value="" placeholder="**************">
                            </div>
                            <div class="Expirydate">
                                <label class="expiry-date"for="expiry-date">Expiry-Date</label>
                                <input  class="ed" type="numbers" value="" id="expiry date" placeholder="mm/yy"> 
                               
                    
                                <label class="cc" for="cc">CC</label>
                                <input  class="cc" type="numbers" value="" placeholder="***">   
                            </div>
                            <a href="#" class="button" id="button">Submit</a><a href="#" class="button" id="button">Clear</a>
                                <img class="img" src="img/pay.png" alt="sub">
                           
                                </div>
                              
                               
                            </div>
                            <br/>
                            
                        </div>
                            <br/>
                            <div>
                           
                    </div>
                    </div>
                </div>
            </form>
           <!-- </form>
       <form id="subs">
        <h6 class="ID">UserID.<input class="ID" type="alphanumeric" value="e.g Joe Doe"></h6>
        
            <div class="CardDetails">
            <label for="carddetails">Card Details</label>
            <input class="cd" type="card no" id="card no" value="" placeholder="**************">
        </div>
        <div class="Expirydate">
            <label class="expiry-date"for="expiry-date">Expiry-Date</label>
            <input  class="ed" type="numbers" value="" id="expiry date" placeholder="mm/yy"> 
           

            <label class="cc" for="cc">CC</label>
            <input  class="cc" type="numbers" value="" placeholder="***">   
        </div>
            </div>
        </div>
        <br/>
        <div class="btn">
        <button id="submit">Submit</button> <button id="clear">Clear</button>
    </div>
        <br/>
        <img class="img" src="img/pay.png" alt="sub">
        </form>-->

    </form>
        <script>
            document.getElementById("button").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
            })

            document.getElementById(".close").addEventListener("click", function() {
                document.querySelector(".close").style.display = "close";
            })
        </script>
    </body>
</html>