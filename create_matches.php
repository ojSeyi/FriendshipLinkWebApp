<?php include 'dbConnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Matches</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
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
                    <a href="view_host.php">View Hosts</a>
                    <a href="view_match.html">View Match</a>
                </div>
            </li>
            <li><a href="create_matches.php">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>
<!-- end of Header -->


<!-- Start of Main-->
<main>

    <div id="hosttable" style=" border: dashed; border-color: red; width: 50%; float: left; font-size: small;">

        <table id="host_table">
            <thead>
            <tr>
                <th></th>
                <th>SN</th>
                <th>Name</th>
                <th>Student preference</th>
                <th>Interests</th>
                <th>Country</th>
                <th>Accomodate Vegans</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_query = "SELECT * FROM host";
            $result =  $dbs->query($sql_query);

            if(mysqli_num_rows($result)>0){
                $counter = 0;

                while ($row = $result->fetch_array())
                {
                    $counter++;
                    ?>
                    <tr>
                        <td><input type="checkbox" name="studentSelected" id="studentSelected" value="<?php
                            echo $row["h_id"]; ?>" onchange="alert('disabled');" /></td>
                        <td><?php echo $counter;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['preference'];?></td>
                        <td><?php echo $row['interests'];?></td>
                        <td><?php echo $row['interest_nationality'];?></td>
                        <td><?php echo $row['vegan'];?></td>
                    </tr>
                    <?php
                }
            }
            $result->close();
            ?>
            </tbody>

        </table>

    </div>

    <button id="match">Match</button>

    <div id="studenttable" style="border: dashed; width: 40%; float: right; font-size:small">
            <table id="student_table">
            <thead>
            <tr>
                <th></th>
                <th>SN</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Diet</th>
            </tr>
            </thead>
                <tbody>
                <?php
                $sql_query = "SELECT * FROM student";
                $result =  $dbs->query($sql_query);

                if(mysqli_num_rows($result)>0){
                    $counter = 0;

                    while ($row = $result->fetch_array())
                    {
                        $counter++;
                        ?>
                        <tr>
                            <td><input type="checkbox" name="studentSelected" value="<?php echo $row["S_ID"]; ?>" /></td>
                            <td><?php echo $counter;?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['age'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['nationality'];?></td>
                            <td><?php echo $row['diet'];?></td>
                        </tr>
                        <?php
                    }
                }
                $result->close();
                $dbs->close();
                ?>
                </tbody>
        </table>

    </div>


</main>
<!-- End of Main-->


<footer>
    <p>
        <a href="#top"><img alt="" src="images/fi-logo-reverse.png" style="width: 200px; height: 100px;" title="Back to top"></a>
    </p>
    <p>Copyright © 2016 Team B(eta) </p>

</footer>

</body>
</html>