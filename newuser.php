<?php
    require 'database/userinfo.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> NEW USER </title>
        <link rel="stylesheet"  href="css/style.css">
    </head>
      
    <body style="background-color : #34495e">
    <div id="box">
        
        <h2> REGISTRATION FORM </h2>
        <img src="images/profile.png" class="profile" style="left-margin:100px"/>
        
        <form class="form" action="newuser.php" method="post">
            <label><b>USERNAME:</label>
            <input name="username" type="text" class="input" placeholder="ENTER USER NAME" required/>
            <br><br>
            <label><b>MOBILE NUMBER:</label>
            <input type="text" class="input" maxlength="10" placeholder="ENETR MOBILE NUMBER" required/>
            <br><br>
            <label><b>EMAIL ID::</label>
            <input type="email" class="input" placeholder="ENTRE YOUR EMAIL ID" required/>
            <br><br>
            <label><b>PASSWORD:</label>
            <input name="pword" type="password" class="input" placeholder="ENTER PASSWORD" required/>
            <br><br>
            <label><b>RE-ENTER PASSWORD:</label>
            <input  name="cpword" type="cpassword" class="input" placeholder="CONFIRM PASSWORD" required/>
            <br><br>
            <a href="home.php"><input type="submit" class="signbtn" value="SIGN UP"/></a>
            <br><br>
            <a href="login.php"><input type="button" class="back" value="MOVE TO LOGIN PAGE"/></a>
            <br><br>

            

        </form>

        <?php
            if(isset($_POST['signbtn']))
            {
               // echo '<script type="text/javascript">  alert("singed up") </script>';
               $username = $_POST['username'];
               $pword = $_POST['pword'];
               $cpword = $_POST['cpword']; 

               if($pword==$cpword)
               {
                   $query=" insert into user values('$username','$pword') ";
                   $run = mysqli_querry($var , $query);
               }
            }

        ?>
     </div>

    </body>
</html>