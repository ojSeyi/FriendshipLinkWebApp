<?php
include ("dbConnect.php");

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Admin Login </title>
  <!--  <link rel="stylesheet" href="style1.css" type="text/css" /> -->
</head>
<body>
<h1>  COMPANY & STAFF REGISTRATION SYSTEM  </h1>
<h4> Note to self: more work on the login admin UI...and make the user password md5 encryption to make it more secure </h4>
<div class="loginBox">
    <h3> <STRONG> ADMIN LOGIN </STRONG> </h3>
    <br>
    <br>
    <fieldset>
    <form method="post" action="login.php" >
        <label>Username </label> <input type="text" name="username" placeholder="username" />

        <br>
        <br>
        <label>Password </label> <input type="password" name="password" placeholder="password" />

        <br>
        <br>

        <div class="submit">
        <input type="submit" name="submit" value = "login" />
            <br>
            <br>
           <a href="UserEnter.php"> <p style="color: mintcream"> Create New Account </p> </a>;
</div>
      </form>
    </fieldset>

    <div class="error"><?php //echo $error;?><?php //echo $username; echo   $password;?>


</div>
</div>


<footer>
    <p>
        <a href="#top"><img alt="" src="images/fi-logo-reverse.png" style="width: 200px; height: 100px;" title="Back to top"></a>
    </p>
    <p>Copyright © 2016 Team B(eta) </p>

</footer>

</body>
</html>

