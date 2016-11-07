<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
//$to = "rowshon10@yahoo.com,suraya.rowshon@gmail.com";
//$subject = "My subject";
//$txt = "PHP Email!";
//$headers = "From: webmaster@example.com" . "\r\n" .
//
//
//mail($to,$subject,$txt,$headers);
       
?>
    </body>
    <?php
require_once("Mail.php");

$from = "rowshon10@yahoo.com";
$to = "suraya.rowshon@gmail.com";
$subject = "Subject";
$body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit...";

$host = "mailserver.blahblah.com";
$username = "suraya.rowshon@gmail.com";
$password = "abbumaamiRj2EE";

$headers = array('From' => $from, 'To' => $to, 'Subject' => $subject);

$smtp = Mail::factory('smtp', array ('host' => $host,
                                     'auth' => true,
                                     'username' => $username,
                                     'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if ( PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent.</p>");
}
?>
</html>
