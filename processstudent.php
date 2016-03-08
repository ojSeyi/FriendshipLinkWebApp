<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/8/2016
 * Time: 10:32 PM
 */


$db = new PDO('mysql:host=ap-cdbr-azure-east-c.cloudapp.net;dbname=friendshiplink;charset=utf8mb4', 'b3c438583f3e44', '3cf27899',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$Name = $_POST['name'];
$Address = $_POST['address'];
$Postcode = $_POST['postcode'];
$phoneNbr = $_POST['phoneNbr'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$Status = $_POST['status'];
$ifMarried = $_POST['ifMarried'];
$university = $_POST['university'];
$course = $_POST['course'];
$endOfStudy = $_POST['endOfStudy'];
$interests = $_POST['interests'];
$diet = $_POST['diet'];

if(submit){

    try {
        $sql = "INSERT INTO student (name, address,postcode,phoneNbr,email,nationality,age,gender,status,ifMarried,university,course,endOfStudy,interests,diet)
                VALUES ('$Name', '$Address', '$Postcode', '$phoneNbr','$email', '$nationality', $age, '$gender','$Status', '$ifMarried', '$university', '$course',$endOfStudy,'$interests','$diet')";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    header('Location:new_student.php?s=1');
}else{
    header('Location:index.html');
}






?>

