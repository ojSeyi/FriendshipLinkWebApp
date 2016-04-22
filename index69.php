<?php
include ("dbConnect.php");
$dbSuccess = false;
$dbConnected = mysqli_connect($dbs['hostname'],$dbs['DB_USERNAME'], $dbs['DB_PASSWORD']);


if($dbConnected) {
    $dbSelected = mysqli_select_db($dbConnected, $dbs['database']);

    if ($dbSelected) {
  echo 'DB success';
        $dbSuccess = true;
    } else {
        echo "DB Selection FAiled";
    }
}else{
    echo "MYSQL Connection FAiled";
}


echo 'working';


