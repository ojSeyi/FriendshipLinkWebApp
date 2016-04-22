<?php
include ("dbConnect.php");
$dbSuccess = false;
$dbConnected = mysqli_connect($dbs['DB_SERVER'],$dbs['DB_USERNAME'], $dbs['DB_PASSWORD'],$dbs['friendshiplink']);


if($dbConnected) {
    $dbSelected = mysqli_select_db($dbConnected, $dbs['friendshiplink']);

    if ($dbSelected) {
  echo 'DB success!!!';
        $dbSuccess = true;
    } else {
        echo "DB Selection FAiled";
    }
}else{
    echo "MYSQL Connection FAiled";
}


echo 'working';


