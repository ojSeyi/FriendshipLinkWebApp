<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Matches</title>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js">
    </script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js">
    </script>
    <script type="text/javascript" language="javascript" class="init">

        $(document).ready( function () {
            $('#student_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "server_processing.php"
            });
        } );

        $(document).ready( function () {
            $('#host_table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "host_processing.php"
            });
        } );

    </script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/create_match.css"/>


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
            <li><a href="create_match.php">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>
<!-- end of Header -->


<!-- Start of Main-->
<main>

    <div id="studenttable" style="float: left">


        <table id="student_table" class="display" cellspacing="0" width="45%" >
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Diet</th>
            </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Diet</th>
                </tr>
            </tfoot>
        </table>

    </div>


    <div id="hosttable" style=" float: right">



        <table id="host_table" class="display" cellspacing="0" width="45%" >
            <thead>
            <tr>
                <th>Name</th>
                <th>Student preference</th>
                <th>Interests</th>
                <th>Country</th>
                <th>Accomodate Vegans</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Student preference</th>
                <th>Interests</th>
                <th>Country</th>
                <th>Accomodate Vegans</th>
            </tr>
            </tfoot>
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