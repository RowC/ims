<?php
include '../config/datasource.php';
if (isset($_POST['role'])) {
//if (isset($_REQUEST)) {
    $role = $_POST['role'];
    $description = $_POST['description'];

    if (empty($role)) {
        $errMSG = "Title is required.";
        echo '<h1 class="text-red" align="center">Title is required.</h1>';
    }
    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $sql = "INSERT INTO auth_role (authority,description,created_date,created_by) VALUES('$role','$description',now(),null)";
        $insert_pro = mysqli_query($conn, $sql);
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

if (isset($_REQUEST)) {
    $roleId = $_POST['roleId'];
    $sql = "select * from auth_role where id = $roleId";
    $insert_pro = mysqli_query($conn, $sql);
}
