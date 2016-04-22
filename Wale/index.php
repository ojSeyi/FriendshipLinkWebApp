<?php

define('DB_SERVER','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME','b3c438583f3e44');
define('DB_PASSWORD','3cf27899');
define('DB_DATABASE','friendshiplink');

$dbs = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($dbs){
    echo 'succesful!!!!';
}
// test if connection was established, and print any errors
if($dbs ->connect_errno){
    die('Connectfailed['.$dbs->connect_errno.']');}


?>




<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FriendshipLink Admin Login </title>
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
</head>
<body>
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

