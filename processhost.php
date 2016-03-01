<?php
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 3/1/2016
 * Time: 12:47 PM
 */
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$phoneNbr = $_POST['phoneNbr'];
$Nationality= $_POST['Nationality'];

echo '<p> '. $Firstname.'</p> ';
echo '<p> '. $Lastname.'</p> ';
echo '<p> '. $phoneNbr.'</p> ';
echo '<p> '. $Nationality.'</p> ';

?>