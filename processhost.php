<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/1/2016
 * Time: 12:47 PM
 */

$db = new PDO('mysql:host=ap-cdbr-azure-east-c.cloudapp.net;dbname=friendshiplink;charset=utf8mb4', 'b3c438583f3e44', '3cf27899',array(PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$Lastname = $_POST['Lastname'];
$Address = $_POST['address'];
$phoneNbr = $_POST['phoneNbr'];
$Nationality= $_POST['Nationality'];


if(submit){

    try {
        $sql = "INSERT INTO host (lastname, address,nationality,phoneNbr) VALUES ('$Lastname', '$Address', '$Nationality', '$phoneNbr')";
        $sth = $db->query($sql);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

    echo 'Successful';
}else{
    header('Location:index.html');
}

?>