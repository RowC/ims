<?php
if (!isset($_SESSION)) {
    session_start();
}
include ('../config/datasource.php');

    if (isset($_POST['sub'])) {
//        if ($_SESSION["userName"]) {
//            echo "You are already logged in, " . $_SESSION['userName'];
////            unset($_SESSION);
//            unset($_SESSION);
//            session_destroy();
//            exit("");
//        }

        $loggedIn = false;
         $userName = $_POST['userName'];
    $password = $_POST['password'];
     $encriptedPassword = md5($password);

        if ($userName && $encriptedPassword) {
            // User Entered fields
            $query = "SELECT user_name FROM auth_user WHERE user_name = '$userName' AND password = '$encriptedPassword'"; // AND password = $userPass";

            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);

            if (!$row) {
                echo '<script>alert("No existing user or wrong password.")</script>';
                 return NULL;
            } else
                $loggedIn = true;
        }

        if (!$loggedIn) {
            echo '<script>alert("Sorry invalid user name or password.Please try again")</script>';
             return NULL;
        } else {
            $_SESSION["username"] = $userName;
            echo '<script>window.open("../setting/adminDashboard.php","_self")</script>';
        }
    }
  
?>