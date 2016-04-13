<?php include 'dbConnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Matches</title>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
    <style>

        .expand1 { display: none;
    }

    .expand2 { display: none;
    }

    </style>
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
                    <a href="view_match.php">View Match</a>
                </div>
            </li>
            <li><a href="create_matches.php">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>

<main>



    <table class="">
        <thead>
            <tr>
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
            $sql_query = "SELECT host.* FROM host, `match` where host.h_id = `match`.h_id Group by `match`.h_id;";
            $result =  $dbs->query($sql_query);

        if(mysqli_num_rows($result)>0) {
        $counter = 0;

        while ($row = $result->fetch_array()) {
            $counter++;
            ?>

            <tr>
                <td class="btn"><?php echo $counter; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['preference']; ?></td>
                <td><?php echo $row['interests']; ?></td>
                <td><?php echo $row['interest_nationality']; ?></td>
                <td><?php echo $row['vegan']; ?></td>
            </tr>
            <tr>
                <th class="expand1">SN</th>
                <th class="expand1">Name</th>
                <th class="expand1">Age</th>
                <th class="expand1">Gender</th>
                <th class="expand1">Country</th>
                <th class="expand1">Diet</th>
            </tr>
            <?php
            $sql_query2 = "SELECT * FROM student";
            $result2 = $dbs->query($sql_query2);

            while ($row2 = $result2->fetch_array()) {
                ?>

                <tr>
                    <td class="expand1"><?php echo $counter; ?></td>
                    <td class="expand1"><?php echo $row2['name']; ?></td>
                    <td class="expand1"><?php echo $row2['age']; ?></td>
                    <td class="expand1"><?php echo $row2['gender']; ?></td>
                    <td class="expand1"><?php echo $row2['nationality']; ?></td>
                    <td class="expand1"><?php echo $row2['diet']; ?></td>
                </tr>
                <?php
            }
        }

        }
        $result->close();
        $dbs->close();
        ?>
        </tbody>


       <tr><td class="expand1">2</td><td class="expand1">Stepahne</td><td class="expand1">24</td><td class="expand1">male</td><td class="expand1">ghana</td><td class="expand1">vegan</td></tr>

        <tr><td class="btn2">available</td><td>1gb</td><td>2gb</td></tr>
        <tr><td class="expand2">drive 1</td><td class="expand2">0.5gb</td><td class="expand2">1gb</td></tr>
        <tr><td class="expand2">drive 2</td><td class="expand2">0.5gb</td><td class="expand2">1gb</td></tr>
        <tr><td>total</td><td>2gb</td><td>4gb</td></tr> -->


    </table>


    <script>
        $(document).ready(function(){
            $(".btn").click(function(){
                $(".expand1").toggle();
            });
            $(".btn2").click(function(){
                $(".expand2").toggle();
            });
        })

    </script>


</main>



<footer>
    <p>
        <a href="#top"><img alt="" src="images/fi-logo-reverse.png" style="width: 200px; height: 100px;" title="Back to top"></a>
    </p>
    <p>Copyright © 2016 Team B(eta) </p>

</footer>

</body>
</html>