<?php
include ("dbConnect.php");

if($dbs)
echo 'successful!!';

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Admin Login </title>
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
</head>
<body style="color: mintcream;">
<h1><a href="home.html">FriendshipLink WebApp - Admin Login </a></h1>

    <fieldset>
    <form method="post" action="login.php" >
        <label>Username </label> <input type="text" name="username" placeholder="username" required />

        <br>
        <br>
        <label>Password </label> <input type="password" name="password" placeholder="password" required />

        <br>
        <br>
        <div class="submit">
        <input type="submit" name="submit" value = "login" style="float: right" />
            <br>
            <br>
      </div>
      </form>
    </fieldset>


</body>
</html>

