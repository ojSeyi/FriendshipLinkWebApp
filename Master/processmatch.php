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
					You have a match.

					you have been matched based on the prefrences made

					<br><br>
					User's Email address: $h_email
					<br>
					Name: $name
					<br><br>
					hope your happy with matches made based on your prefrences.
					<br><br>
					King Regards,
					<br><br>
					The Friendship link";


            $transport = \Swift_SmtpTransport::newInstance()
                ->setUsername('mfonukpeh@outlook.com')->setPassword('seventyseven77')
                ->setHost('smtp-mail.windowslive.com')
                ->setPort(587)->setEncryption('tls');

            $mailer = \Swift_Mailer::newInstance($transport);

            $message = \Swift_Message::newInstance()
                ->setSubject($param['title'])
                ->setFrom(array('mfonukpeh@outlook.com' => 'Freindship link'))
                ->setTo(array($h_email => $h_email))
                ->addPart($txt,'text/html')
            ;

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
