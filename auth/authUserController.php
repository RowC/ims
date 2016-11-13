<?php

include '../config/datasource.php';
//if (isset($_POST['role'])) {
if (isset($_REQUEST)) {
    $fullName = $_POST['fullName'];
//    $userName = mysqli_real_escape_string($_POST['userName']);
//    $password = mysqli_real_escape_string($_POST['password']);
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $roleId = $_POST['roleId'];
    $email = $_POST['email'];
    $cellNo = $_POST['cellNo'];
    $stamp = date("y.m.d.hs");
//$ip = $_SERVER['REMOTE_ADDR'];
    $orderid = "C-$stamp";
    $var = str_replace(".", "", "$orderid");
    if (empty($userName)) {
        $errMSG = "User name is required.";
        echo '<h1 class="text-red" align="center">User name is required.</h1>';
    }

    if (empty($password)) {
        $errMSG = "Password is required.";
        echo '<h1 class="text-red" align="center">Password is required.</h1>';
    }

    if (empty($roleId)) {
        $errMSG = "Role is required.";
        echo '<h1 class="text-red" align="center">Role is required.</h1>';
    }
    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $encriptedPassword = md5($password);
        $sql = "INSERT INTO auth_user (user_code,full_name,user_name,password,email,cellNo,created_date,created_by) VALUES('$var','$fullName','$userName','$encriptedPassword','$email','$cellNo',now(),null)";
        $insert_user = mysqli_query($conn, $sql);
        $searchUserId = "select id from auth_user where user_code ='$var'";
        $user_pro = mysqli_query($conn, $searchUserId);
        $rows = mysqli_fetch_array($user_pro);

        $user_id = $rows['id'];
        $splForSearchUserId = "insert into user_role(auth_user,auth_role,create_date,created_by)values";
//        $countUserId = count($_POST['roleId']);        
        $countUserId = $_POST['roleId'];
//        for ($i = 0; $i < $countUserId; $i++) {
        foreach ($countUserId as $value) {
//            $role_id=implode(',',$_POST['roleId']);
            $splForSearchUserId .= "('$user_id','" . mysqli_real_escape_string($conn, $value) . "',now(),null),";
        }
        $splForUserRole = trim($splForSearchUserId, ",");
        $insert_userRole = mysqli_query($conn, $splForUserRole);
        if ($insert_user && $insert_userRole) {
            //echo $insert_user . "--" . $insert_userRole . "Count role id" . $countUserId;
            echo 'Data saved successfully!!!!';
        } else {
            echo 'Somthing went wrong!!!!';
            echo $insert_user . "--" . $insert_userRole . "Count role id" . $countUserId;
        }

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (!$insert_user) {
            echo mysqli_error($conn);
            // echo '<script>window.open("../index.php","_self")</script>';
            return;
        }
    }
}
mysqli_close($conn);
?>
