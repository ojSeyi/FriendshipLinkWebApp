<?php
include ("dbConnect.php");


$dbSuccess = false;
$dbConnected = mysqli_connect($dbs['hostname'],$dbs['username'], $dbs['password']);

if($dbConnected){
    echo 'successful!!!!';
}

?>

<?
/**
if($dbConnected) {
$dbSelected = mysqli_select_db($dbConnected, $db['database']);

if ($dbSelected) {

$dbSuccess = true;
} else {
echo "DB Selection FAiled";
}
}else{
echo "MYSQL Connection FAiled";
}
?>



**/

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

