<?php

include "dbConnect.php";

$sql_query = "SELECT * FROM students";
$result = $db->query($sql_query);
while($row = $result->fetch_array())
{
    $Name = $row['name'];
    $Address = $row['address'];
    $Postcode = $row['postcode'];
    $phoneNbr = $row['phoneNbr'];
    $email = $row['email'];
    $nationality = $row['nationality'];
    $age = $row['age'];
    $gender = $row['gender'];
    $Status = $row['status'];
    $ifMarried = $row['ifMarried'];
    $university = $row['university'];
    $course = $row['course'];
    $endOfStudy = $row['endOfStudy'];
    $interests = $row['interests'];
    $diet = $row['diet'];

    echo "<p>{$Name}</p>";
    echo "<p>{$Address}</p>";
    echo "<p>{$Postcode}</p>";
    echo "<p>{$phoneNbr}</p>";
    echo "<p>{$email}</p>";
    echo "<p>{$nationality}</p>";
    echo "<p>{$age}</p>";
    echo "<p>{$gender}</p>";
    echo "<p>{$Status}</p>";
    echo "<p>{$ifMarried}</p>";
    echo "<p>{$university}</p>";
    echo "<p>{$course}</p>";
    echo "<p>{$endOfStudy}</p>";
    echo "<p>{$interests}</p>";
    echo "<p>{$diet}</p>";
    echo "<br>";

}

?>