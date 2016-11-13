<?php
session_start();
session_unset();
session_destroy();
echo '<script>window.open("../index.php","_self")</script>';
//session_start();
//unset($_SESSION(['user_name']));
//session_destroy();
//header("location:index.php");

exit();
?>