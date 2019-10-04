<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title> LOGIN PAGE </title>
        <link rel="stylesheet"  href="css/style.css">
    </head>
      
    <body style="background-color : #34495e">
    <div id="box">
        
        <h2> LOGIN FORM </h2>
        <img src="images/profile.png" class="profile" style="left-margin:100px"/>
        
        <form class="form" action="login.php" method="post">
            <label><b>USERNAME:</label>
            <input type="text" class="input" placeholder="ENTER USER NAME"/>
            <br><br>
            <label><b>PASSWORD:</label>
            <input type="password" class="input" placeholder="ENTER PASSWORD"/>
            <br><br>
            <a href = "home.php"><input type="submit" class="loginbtn" value="LOGIN"/></a>
            <br><br>
            <a href = "newuser.php"><input type="button" class="newuser" value="REGISTRATION"/></a>
            <br><br>

            

        </form>
     </div>

    </body>
</html>
