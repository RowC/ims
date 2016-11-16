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
             echo '<script>window.open("../index.php","_self")</script>';
            return NULL;
        } else
            $loggedIn = true;
    }

    if (!$loggedIn) {
        echo '<script>alert("Sorry invalid user name or password.Please try again")</script>';
        return NULL;
    } else {
        $_SESSION["username"] = $userName;
        $query = "SELECT DISTINCT au.user_name as `userName`,(SELECT arl.authority from `auth_role`as arl WHERE arl.id= ur.auth_role)as `userRole`,"
                . "ar.url as `URL` FROM `auth_user`as au, `user_role` as ur, `auth_requestmap` as ar "
                . "WHERE au.id=ur.auth_user AND ur.auth_role = ar.config_attribute AND au.user_name = '$userName' AND au.password = '$encriptedPassword'";
      
        $result = mysqli_query($conn, $query);
        if(!$result){            
        printf("Error: %s\n", mysqli_error($conn));
    exit();
        }  else { 
        $row = mysqli_fetch_array($result);
        $username = $row['userName'];
        $userRole = $row['userRole'];
        if ($userRole == "ROLE_ADMIN") {
            // echo $query."-username-".$username."-userRole-".$userRole."111";
            echo '<script>window.open("../setting/adminDashboard.php","_self")</script>';
        } elseif ($userRole == "ROLE_USER") {
             //echo $query."-username-".$username."-userRole-".$userRole."222";
            echo '<script>window.open("../setting/userProfile.php","_self")</script>';
        }
        }
      
    }
}
?>