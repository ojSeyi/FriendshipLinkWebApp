<?php
include 'dbConnect.php';
/**
 * Created by PhpStorm.
 * User: Sommy B
 * Date: 4/11/2016
 * Time: 10:34 PM
 */

 if(isset($_POST['hostSelected'])){

    $getHostId = $_POST['hostSelected'];
     $select = "select * from host where h_id = $getHostId";
     $results = $dbs->query($select);
     $row = array();
     if(mysqli_num_rows($results)>0){
         $row = $results->fetch_assoc();
     }
     $h_email = $row['email'];
     $name = $row['name'];

    foreach($_POST['studentSelected'] as $student){

    $sql = "INSERT INTO `match` (`h_id`, `S_ID`)
            VALUES ('$getHostId', '$student')";
        if($query = $dbs ->query($sql)){

            //setting some variables with form value

//email subject
            $subject = "Befriend A Child - Survey Login";


//email body in html
//ATTENTION, THE LINK MAY POINT TO THE MASTER DOMAIN, RATHER THAN YOUR OWN VOLUNTEERLOGIN.PHP
            $txt = "Dear $name,
					<br><br>
					An account has been set up in your name.
					<br>
					If you would like to fill out a survey concerning your experience with Befriend A Child,
					please follow
					<a href='http://befriendachildtestsurvey.azurewebsites.net/Master/volunteerlogin.php'>this link</a>
					and login with:
					<br><br>
					User's Email address: $h_email
					<br>
					Name: $name
					<br><br>
					You will be able to change your password once logged in.
					<br><br>
					King Regards,
					<br><br>
					The FrienshipLink Team";


//take in the necessary swiftmailer code
            require_once 'swiftmailer/lib/swift_required.php';

//this is all swiftmailer magic, using the gmail smtp server of my account...
            $transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                ->setUsername('ukpehmfon@gmail.com')
                ->setPassword('seveneleven711');

//Creates an instance of the mailer
            $mailer = Swift_Mailer::newInstance($transporter);

//the message supplies some more detailed info
            $message = Swift_Message::newInstance('FriendshipLink Test Mail')
                ->setFrom(array('christophe.meyers.312@gmail.com' => 'Christophe Meyers'))//shows my name when email arrives
                ->setTo(array($h_email => $name))//shows volunteer name as linked to their email address
                ->setBody($txt, "text/html");    //tells swiftmailer that we're using html text

//Finally the mail is sent
            $result = $mailer->send($message);


            echo "Successful";
        header("Location: create_matches.php?s=1");
        }else{
        echo "Error" . $sql. '<br>'.mysqli_error($dbs);
        header('Location: create_matches.php?f=1');
        }
    }
}
    else{
header('Location: create_matches.php');
    }

/*
 *
 */

?>
