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
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
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

