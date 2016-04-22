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
        <form class="register-form" action="login.php" method="post">
          <input type="text" name="username" placeholder="username" required />

            <br>
            <br>
        <input type="password" name="password" placeholder="password"  />

            <button>create</button>
            <p class="message">Already registered? <a href="login.php" methods="post">Sign In</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button>login</button>

        </form>
    </div>
</div>



<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>




</body>
</html>

