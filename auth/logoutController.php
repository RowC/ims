<?php
session_start();
session_unset();
session_destroy();
//setcookie('userName', '', time() - 1*24*60*60);
//setcookie('password', '', time() - 1*24*60*60);
echo '<script>window.open("../index.php","_self")</script>';
//session_start();
//unset($_SESSION(['user_name']));
//session_destroy();
//header("location:index.php");

exit();
?>