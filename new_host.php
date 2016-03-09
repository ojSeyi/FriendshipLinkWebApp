<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Host</title>
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
                <a class="dropbtn" href="#">New</a>
                <div class="dropdown-content">
                    <a href="new_student.php">New Student Details</a>
                    <a href="new_host.php">New Host Details</a>
                </div>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropbtn">View</a>
                <div class="dropdown-content">
                    <a href="#">View Students </a>
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

        <div id="title">
            <header>
                <h2>New Host Details</h2>
            </header>
        </div>

        <span>
            <?php if($_GET['s']) {
                echo '<span style="color: blue;">Record Added! </span>';
            }

            ?>
        </span>
        <br>
        <br>

        <form action="processhost.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" value=""/>
            <br>
            <br>
            <label>Address:</label>
            <input type="text" name="address" value=""/>
            <br>
            <br>
            <label>Postcode:</label>
            <input type="text" name="postcode" value=""/>
            <br>
            <br>
            <label>Telephone Number:</label>
            <input type="number" name="phoneNbr" value=""/>
            <br>
            <br>
            <label>E-mail address:</label>
            <input type="email" name="email" value=""/>
            <br>
            <br>
            <label>Marital Status:</label>
            <input type="radio" name="status" value="Married"/>Married
            <input type="radio" name="status" value="Single"/>Single
            <br>
            <br>
            <label>No. of Children</label>
            <input type="number" name="children" value=""/>
            <br>
            <br>
            <label>Are you happy to provide Vegetarian food?</label>
            <input type="radio" name="vegan" value="yes"/>Yes
            <input type="radio" name="vegan" value="no"/>No
            <br>
            <br>
            <label>Would you prefer us to link you with male or female students? Or no preference?</label>
            <input type="radio" name="preference" value="male"/>Male
            <input type="radio" name="preference" value="female"/>Female
            <input type="radio" name="preference" value="noPref"/>No Preference
            <br>
            <br>
            <label>Church attended</label>
            <input type="text" name="Church" value=""/>
            <br>
            <br>
            <label>Name of minister/pastor</label>
            <input type="text" name="pastor" value=""/>
            <br>
            <br>
            <label>Special interests (sport, music, hobbies):</label>
            <textarea name="interests" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label>Interest in particular areas of the world:</label>
            <textarea name="interest_nation" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label>Any other relevant information:</label>
            <textarea name="comments" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="Submit" name="submit"/>

        </form>
    </main>

<footer>
    <p>(c) 2016 Team B(eta) </p>
</footer>
</body>
</html>