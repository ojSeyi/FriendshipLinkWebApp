<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FriendshipLinkWebApp</title>
</head>
<body>

    <header>

        <h1><a href="index.html"><img src="http://friendsinternational.uk/images/master-site/logos/fi-logo.png" alt="Friends International"/> Friendship Link Creator</a></h1>
            <nav>
                <ul>
                    <li><a href="#">New</a></li>
                    <ul>
                        <li><a href="new_student.html">New Student Details</a></li>
                        <li><a href="new_host.php">New Host Details</a></li>
                    </ul>
                    <li><a href="#">View</a></li>
                    <ul>
                        <li><a href="#">View Students </a></li>
                        <li><a href="#">View Hosts</a></li>
                        <li><a href="#">View Match</a></li>
                    </ul>
                    <li><a href="#">Create Match</a></li>
                    <li><a href="#">Generate Report</a></li>
                </ul>
            </nav>
    </header>

    <main>
        <header>
            <h2>New Host Details</h2>
        </header>
        <span>
            <?php if($_GET['s']) {
                echo '<span style="color: blue;">Record Added! </span>';
            }

            ?>
        </span>

        <form action="processhost.php" method="POST">
            <label>First Name:</label>
            <input type="text" name="Lastname" value=""/>
            <br>
            <br>
            <label>Address:</label>
            <input type="text" name="address" value=""/>
            <br>
            <br>
            <label>phoneNbr</label>
            <input type="text" name="phoneNbr" value=""/>
            <br>
            <br>
            <label>Nationality</label>
            <input type="text" name="Nationality" value=""/>
            <br>
            <br>
            <input type="submit" value="Submit" name="submit"/>

        </form>

    </main>
</body>

<footer>(c) 2016 friends International (team B)</footer>



</html>