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
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  $recipients = array(
  $_REQUEST['email'],
  // more emails
);
$email  = implode(',', $recipients); // your email address
  //Email information
  $admin_email = "rowshon10@yahoo.com";
  //$email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  for($i=0;$i<100;$i++){
  mail($email, "$subject", $comment, "From:" . $admin_email);
//   mail($admin_email, "$subject", $comment, "From:" . $email);
  print_r("to users****** ".$email);
  }
 
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>
    </body>
</html>
