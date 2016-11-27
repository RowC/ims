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
        $query = "SELECT au.id as `user_id`, au.user_name as username,au.password as passwords,(SELECT ar.authority from auth_role as ar where ar.id = ur.auth_role) as rolename FROM `auth_user` as au,user_role as ur WHERE au.user_name = '$userName' AND au.password = '$encriptedPassword' AND au.id = ur.auth_user ";
                //"SELECT user_name FROM auth_user WHERE user_name = '$userName' AND password = '$encriptedPassword'"; // AND password = $userPass";

        $result = mysqli_query($conn, $query);
        $rowUser = mysqli_fetch_array($result);
        $userID = $rowUser['user_id'];

        if (!$rowUser) {
            echo '<script>alert("No existing user or wrong password.")</script>';
             echo '<script>window.open("../index.php","_self")</script>';
            return NULL;
        } else
            $loggedIn = true;
//    }

    if (!$loggedIn) {
        echo '<script>alert("Sorry invalid user name or password.Please try again")</script>';
        return NULL;
    } else {       
        $query = "SELECT DISTINCT au.user_name as `userName`,au.id as `id`,(SELECT arl.authority from `auth_role`as arl WHERE arl.id= ur.auth_role)as `userRole`,"
                . "ar.url as `URL` FROM `auth_user`as au, `user_role` as ur, `auth_requestmap` as ar "
                . "WHERE au.id=ur.auth_user AND ur.auth_role = ar.config_attribute AND au.user_name = '$userName' AND au.password = '$encriptedPassword'";
      
        $result = mysqli_query($conn, $query);
        if(!$result){            
        printf("Error: %s\n", mysqli_error($conn));
    exit();
        }  else { 
        $row = mysqli_fetch_array($result);
       $userRole = $row['userRole'];
        $username = $row['userName'];
        $userUrl = $row['URL'];
        if ($userRole && $username==$userName) {            
         $searchRoleByUser = "select ar.id as `role_id`, ar.authority as `role_name` from auth_role as `ar`,user_role as `ur` where ar.id=ur.auth_role and auth_user=".$userID."";
         $resultSearchRoleByUser = mysqli_query($conn, $searchRoleByUser);
        $rowResultSearchRoleByUser = mysqli_fetch_array($resultSearchRoleByUser);        
//        $userRoleFromUserRole = $rowResultSearchRoleByUser['role_name'];
        $userRoleFromUserRole = $rowResultSearchRoleByUser['role_id'];
            //echo '..'.$userUrl;
             $_SESSION["username"] = $_POST['userName'];
            $_SESSION["userPass"] = $encriptedPassword;
            $_SESSION["userRole"] = $userRoleFromUserRole;
            $_SESSION["userUrl"] = $userUrl;
            echo '<script>window.open("'.$userUrl.'","_self")</script>';
            
        }  else {
           echo "OH!!!!!sorry.........."; 
        }
//        if ($userRole == "ROLE_ADMIN" && $username==$userName) {
//            // echo $query."-username-".$username."-userRole-".$userRole."111";
//            echo '<script>window.open("../setting/adminDashboard.php","_self")</script>';
//        } elseif ($userRole == "ROLE_USER" && $username==$userName) {
//             //echo $query."-username-".$username."-userRole-".$userRole."222";
//            echo '<script>window.open("../setting/userProfile.php","_self")</script>';
//        }
        }
      
    }
    }
}
?>