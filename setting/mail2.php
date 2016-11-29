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

    $to = 'rowshon10@yahoo.com';

    $subject = 'Marriage Proposal';

    $message = 'Hi Jane, will you marry me?'; 

    $from = 'suraya.rowshom@gmail.com';

     

    // Sending email

    if(mail($to, $subject, $message, $from)){

        echo 'Your mail has been sent successfully.';

    } else{

        echo 'Unable to send email. Please try again.';

    }

    ?>


    </body>
</html>
