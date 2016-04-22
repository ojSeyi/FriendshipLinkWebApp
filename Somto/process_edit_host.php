<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/22/2016
 * Time: 4:23 PM
 */

include "dbConnect.php";


if(isset($_POST['update'])) {

    $Name = $_POST['name'];
    $Address = $_POST['address'];
    $Postcode = $_POST['postcode'];
    $phoneNbr = $_POST['phoneNbr'];
    $Email = $_POST['email'];
    $Status = $_POST['status'];
    $Children = $_POST['children'];
    $vegan = $_POST['vegan'];
    $preference = $_POST['preference'];
    $Church = $_POST['Church'];
    $pastor = $_POST['pastor'];
    $interests = $_POST['interests'];
    $interests_nation = $_POST['interest_nation'];
    $comments = $_POST['comments'];


    $sql = "UPDATE host set (name, address,postcode,phoneNbr,email,status,children,vegan,preference,church,pastor,interests,interest_nationality,comments)
        VALUES ('$Name', '$Address', '$Postcode', '$phoneNbr','$Email', '$Status', $Children, '$vegan','$preference', '$Church', '$pastor', '$interests','$interests_nation','$comments')";

    if ($sth = $dbs->query($sql)) {

        header('Location:view_host.php?s=1');

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbs);
        header('Location:view_host.php?f=1');
    }
}

else{
    header('Location: view_host.php');}
?>