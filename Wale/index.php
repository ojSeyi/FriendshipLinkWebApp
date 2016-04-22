<?php
include ("dbConnect.php");
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title> Admin </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login-page">
    <div class="form">
        <form method="post" action="login.php" >
            <label>Username </label> <input type="text" name="username" placeholder="username" required />

            <br>
            <br>
            <label>Password </label> <input type="password" name="password" placeholder="password"  />

            <br>
            <br>
            <div class="submit">
                <input type="submit" name="submit" value = "login"/>
                <br>
                <br>
            </div>
        </form>
    </div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>

