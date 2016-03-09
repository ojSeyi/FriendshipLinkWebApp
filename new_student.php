<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
</head>

<body>

<header>
    <div id ="logo">
        <a class="uk-navbar-brand uk-hidden-small" href="index.html">
            <img src="images/fi-logo.png" alt="Demo" width="200"></a>
    </div>
    <h1><a href="index.html">Friendship Link Creator</a></h1>
    <nav>
        <ul>
            <li><a href="#">New</a></li>
                <ul>
                    <li><a href="new_student.php">New Student Details</a></li>
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
        <br>
        <br>
        <br>
        <br>
        <div id="title">
        <header>
            <h2>New Student Details</h2>
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

        <form action="processstudent.php" method="post">
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
            <!--Date of Birth:
            <input type="date" name="DoB">
            <br>
            <br>-->
            <label>Home Country:</label>
            <input type="text" name="nationality" value=""/>
            <br>
            <br>
            <label>Age:</label>
            <input type="number" name="age" value=""/>
            <br>
            <br>
            <label>Gender:</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="fmale">Female
            <br>
            <br>
            <label>Marital Status:</label>
            <input type="radio" name="status" value="Married"/>Married
            <input type="radio" name="status" value="Single"/>Single
            <br>
            <br>
            <label>If married, Enter details(if not applicable enter null):</label>
            <textarea name="ifMarried" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label>University:</label>
            <input type="radio" name="university" value="RGU"/>Robert Gordon
            <input type="radio" name="university" value="Aberdeen University"/>Aberdeen University
            <br>
            <br>
            <label>Course of study</label>
            <input type="text" name="course" value=""/>
            <br>
            <br>
            <label>End of Study date:</label>
            <input type="date" name="endOfStudy" value=""/>
            <br>
            <br>
            <label>Special interests (sport, music, hobbies):</label>
            <textarea name="interests" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label>Special diet:</label>
            <textarea name="diet" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <input type="submit" value="Submit" />

        </form>

    </main>
</body>
</html>