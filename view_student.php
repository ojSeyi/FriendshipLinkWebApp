<?php include 'dbConnect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
</head>
<body>
<header>
    <div id ="logo">
        <a href="index.html"><img src="images/fi-logo.png" alt="Demo" width="200"></a>
    </div>

    <h1><a href="index.html">FriendshipLink WebApp</a></h1>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
                <a class="active dropbtn" href="#">New</a>
                <div class="dropdown-content">
                    <a href="new_student.php">New Student Details</a>
                    <a href="new_host.php">New Host Details</a>
                </div>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropbtn">View</a>
                <div class="dropdown-content">
                    <a href="view_student.php">View Students </a>
                    <a href="#">View Hosts</a>
                    <a href="#">View Match</a>
                </div>
            </li>
            <li><a href="#">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>
<main>
<h2>Student Table</h2>


    <table style="margin-left: auto; margin-right: auto;">
        <tr>
            <th class="table-style">Sr. #</th>
            <th class="table-style">Name</th>
            <th class="table-style">address</th>
            <th class="table-style">postcode</th>
            <?php

            $sql_query = "SELECT * FROM student";

            $result =  mysqli_query($dbs,$sql);
            if(mysqli_num_rows($result)>0)                                                {

            $counter = 0;
            while ($row=  mysqli_fetch_array($result))
            {
            $counter++;
            ?>
        <tr>
            <td class="table-style"><?php echo $counter; ?></td>
            <td class="table-style"><?php echo $row['name']; ?></td>
            <td class="table-style"><?php echo $row['address']; ?></td>
            <td class="table-style"><?php echo $row['postcode']; ?></td>
        </tr>
        <?php

        }//end of for loop
        }//end if statement ?>

    </table>


</main>
</body>
</html>




<!--

include "dbConnect.php";


$sql_query = "SELECT * FROM student";

$result =  mysqli_query($dbs,$sql);

while($row = $result->fetch_array())
{
    $Name = $row['name'];
    $Address = $row['address'];
    $Postcode = $row['postcode'];
    $phoneNbr = $row['phoneNbr'];
    $email = $row['email'];
    $nationality = $row['nationality'];
   /* $age = $row['age'];
    $gender = $row['gender'];
    $Status = $row['status'];
    $ifMarried = $row['ifMarried'];
    $university = $row['university'];
    $course = $row['course'];
    $endOfStudy = $row['endOfStudy'];
    $interests = $row['interests'];
    $diet = $row['diet'];*/

    echo "<p>{$Name}</p>";
    echo "<p>{$Address}</p>";
    echo "<p>{$Postcode}</p>";
    echo "<p>{$phoneNbr}</p>";
    echo "<p>{$email}</p>";
    echo "<p>{$nationality}</p>";
   /* echo "<p>{$age}</p>";
    echo "<p>{$gender}</p>";
    echo "<p>{$Status}</p>";
    echo "<p>{$ifMarried}</p>";
    echo "<p>{$university}</p>";
    echo "<p>{$course}</p>";
    echo "<p>{$endOfStudy}</p>";
    echo "<p>{$interests}</p>";
    echo "<p>{$diet}</p>";*/
    echo "<br>";
}
?>-->
