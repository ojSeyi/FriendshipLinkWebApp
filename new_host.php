<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FriendshipLinkWebApp</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
    <!--<link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>-->

</head>
<body>
<body>
<header>
    <div id ="logo">
        <a class="uk-navbar-brand uk-hidden-small" href="http://friendsinternational.uk">
            <img src="images/fi-logo.png" alt="Demo" width="200"></a>
    </div>
    <h1><a href="index.html">Friendship Link Creator</a></h1>
    <nav>
        <ul>
            <li><a href="#">New</a></li>
            <ul>
                <li><a href="new_student.html">New Student Details</a></li>
                <li><a href="new_host.html">New Host Details</a></li>
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
        <br>
        <br>
        <br>
        <br>
        <header>
            <h2>New Host Details</h2>
        </header>

        <span>
            <?php if($_GET['s']) {
                echo '<span style="color: blue;">Record Added! </span>';
            }

            ?>
        </span>
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
            <input type="text" name="phoneNbr" value=""/>
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
            <input type="text" name="children" value=""/>
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
</body>
<div id="quickfix"></div>
<footer>(c) 2016 friends International (team B)</footer>



</html>