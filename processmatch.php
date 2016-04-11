<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/11/2016
 * Time: 10:34 PM
 */
$getHostId = $_POST['hostSelected'];
foreach($_POST['studentSelected'] as $student){
   echo $student;
}


echo 'Host Id:' . $getHostId. ' ' . '<br>'. 'Student Id:' .$student;

?>