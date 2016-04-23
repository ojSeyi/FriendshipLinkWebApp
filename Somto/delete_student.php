<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/23/2016
 * Time: 6:32 PM
 */


include "dbConnect.php";

$S_ID =  $_GET['S_ID'];



$deleteQuery = "DELETE FROM students WHERE S_ID = $S_ID ";
$result = $dbs->query($deleteQuery);

if($sth = $dbs->query($sql)){

    header('Location:view_student.php?d=1');

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($dbs);
    header('Location:view_student.php?f=1');
}

