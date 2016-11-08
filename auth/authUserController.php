<?php
include '../config/datasource.php';
//if (isset($_POST['role'])) {
if (isset($_REQUEST)) {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $roleId = $_POST['roleId'];
    $email = $_POST['email'];
    $celNo = $_POST['celNo'];
$stamp = date("y.m.d.hs");
//$ip = $_SERVER['REMOTE_ADDR'];
    //$orderid = "$productCatKeyword-$stamp";
    $var = str_replace(".", "", "$stamp");
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
        $sql = "INSERT INTO auth_user (full_name,user_name,password,email,celNo,create_date,create_by) VALUES('$fullName','$userName','$password','$email','$celNo',now(),null)";
        $insert_pro = mysqli_query($conn, $sql);  
        //$splForSearchUserId = ""
        echo 'Data saved successfully!!!!';
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (!$insert_pro) {
            echo mysqli_error($conn);
            echo '<script>window.open("../index.php","_self")</script>';
            return;
        }
    }
}

