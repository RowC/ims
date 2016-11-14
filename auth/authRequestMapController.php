<?php
include '../config/datasource.php';
if (isset($_POST['url'])) {
    $uri = $_POST('url');
    $configAttribute = $_POST('configAttribute');
     $sql = "INSERT INTO auth_requestmap (uri,configAttribute,created_date,created_by) VALUES('$uri','".implode(',',$configAttribute)."',now(),null)";
        $insert_pro = mysqli_query($conn, $sql);
        echo 'Data saved successfully!!!!';
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
}
?>
