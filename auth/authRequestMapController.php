<?php
include '../config/datasource.php';
if (isset($_POST['url'])) {
    $url = $_POST['url'];
    $userRole = count($_POST['configAttribute']);
    $sql = "INSERT INTO auth_requestmap (url,config_attribute,created_date,created_by) VALUES";
    if ($userRole>0) {
        for ($i = 0; $i < $userRole; $i++) {
            $sql.="('$url',$userRole,now(),null),";
        }
        $sql1 = trim($sql, ",");
        $result = mysqli_query($conn, $sql1);
        if (!$result) {
           // echo $sql1."-------".$userRole;
            echo mysqli_error($conn)."sdfsff";
        } else {
            echo 'Data saved successfully!!!!';
            //echo '<script>window.open("productCatMst.php","_self")</script>'; //open targated page 
        }
    } else {
        echo 'Pleace checked at least one checkbox';
    }
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}
?>
