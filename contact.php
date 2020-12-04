<?php
$username = $_POST['username'];
$email = $_POST['email']
$mmessage = $_POST['message'];
// $profession = $_POST['profession'];
// $city = $_POST['city'];
// $state = $_POST['state'];
// $other = $_POST['other'];
// $message = $_POST['tell_us_about_yourself'];
// $message2= $_POST['elaborate_your_cencern'];

$email_form = 'Whyuniverseisexist@gail.com';
$email_subject = 'form_submission';
$email_body = "User Name: $username.\n".
                "User Email: $email.\n".
                "User message: $message.\n".
                // "User Profession: $profession.\n".
                // "User City: $City.\n".
                // "User State: $state.\n".
                // "User Other State: $other.\n".
//                 "User Message: $tell_us_about_yourself.\n".
//                 "User Message2: $elaborate_your_cencern.\n";


                $to = 'astrophysicist07070@gmail.com';
                $headder = "form: $email_form\r\n";
                $headder = "Replay-to: $vistor_email \r\n";
                mail($to,$email_subject,$email_body,$headders);
                headder("Location: contact.html")



?>
