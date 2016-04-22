<?php
include 'dbConnect.php';
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/11/2016
 * Time: 10:34 PM
 */
 
 if(isset($_POST['hostSelected'])){

    $getHostId = $_POST['hostSelected'];
     $select = "select * from host where h_id = $getHostId";
     $results = $dbs->query($select);
     $row = array();
     if(mysqli_num_rows($results)>0){
         $row = $results->fetch_assoc();
     }
     $h_email = $row['email'];

     echo $h_email;
    /*foreach($_POST['studentSelected'] as $student){

    $sql = "INSERT INTO `match` (`h_id`, `S_ID`)
            VALUES ('$getHostId', '$student')";
        if($query = $dbs ->query($sql)){

        echo "Successful";
        header("Location: create_matches.php?s=1");
        }else{
        echo "Error" . $sql. '<br>'.mysqli_error($dbs);
        header('Location: create_matches.php?f=1');
        }
    }*/
}
    else{
header('Location: create_matches.php');
    }






?>
