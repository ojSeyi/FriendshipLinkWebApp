<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($dbConnected,$_POST['username']);
    $password = mysqli_real_escape_string($dbConnected,$_POST['password']);

    $sql = "SELECT uid
            FROM users
            WHERE username = '$username'
            and
            password = '$password'";

    $result = mysqli_query($dbConnected,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $username and $password, table row must be 1 row

    if($count == 1) {
//error check here...........
        $_SESSION['login_user'] = $username;
        echo $_SESSION['login_user'];
        header("location: Home.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}

if(empty($_POST["username"]) || empty($_POST["password"])) {

    echo "Both fields are required. ";
}