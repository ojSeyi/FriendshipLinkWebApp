<?php include 'dbConnect.php' ?>

<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/17/2016
 * Time: 1:51 PM
 */



$sql = "SELECT student.* FROM student inner Join `match` on student.S_ID = `match`.S_ID  WHERE `match`.h_ID = 1";
$result2= $dbs->query($sql);
while( $row2 = $result2->fetch_array()) {

    echo $row2['name'];
    echo $row2['age'];
    echo $row2['gender'];
    echo $row2['nationality'];
    echo $row2['diet'];
}



?>