<?php
include 'dbConnect.php';
if(isset($_GET['name']))
{
    $user_login=$_GET['name'];
    $sql_query = "select * from host where name ='$user_login'";
    $result = $dbs->query($sql_query);
    $row = $result->fetch_assoc();

    echo $row['email'];


}else {
    header("location: view_host.php");
}


?>
