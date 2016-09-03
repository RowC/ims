<?php

include '../config/datasource.php';
//echo '<script><alert("' . $_POST['productCatTitle'] . '")</script>';


if (isset($_REQUEST)) {
    $productCat = $_POST['productCatTitle'];
    $productCatKeyword = $_POST['productCatKeyword'];

//    function NewGuid() { 
//    $s = strtoupper(md5(uniqid(rand(),true))); 
//    $guidText = 
//        substr($s,0,5);
//    return $guidText;
//}
//// End Generate Guid 
//
//$Guid = NewGuid();
// $var = $productCatKeyword.'-'.$Guid;
//    echo $var;
//    $stamp = date("ymdhis");
    $stamp = date("y.m.d.hs");
//$ip = $_SERVER['REMOTE_ADDR'];
    $orderid = "$productCatKeyword-$stamp";
    $var = str_replace(".", "", "$orderid");
//    $var = uniqid("$productCatKeyword");
    if (empty($productCat)) {
        $errMSG = "Please Enter Product Category Title.";
        echo '<h1 class="text-red" align="center">Please Enter Product Category Titlee.</h1>';
    } else if (empty($productCatKeyword)) {
        $errMSG = "Please Enter Keyword.";
        echo '<h1 class="text-red" align="center">Please Enter Keyword.</h1>';
    }
    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $sql = "INSERT INTO product_cat_mst (product_cat_mst_id,category_title, category_keyword,create_date) VALUES('$var','$productCat','$productCatKeyword',now())";
        $insert_pro = mysqli_query($conn, $sql);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if (!$insert_pro) {
            echo mysqli_error($conn);
            echo '<script>window.open("../index.php","_self")</script>';
        }
   

    $number = count($_POST['pName']);
    if ($number > 0) {
       $sqlDtl = "INSERT INTO product_cat_dtl(product_name,product_description,is_active,product_cat_mst,create_date)values";
        for ($i = 0; $i < $number; $i++) {
             $isActive = isset($_POST["isActive"][$i]) ? $_POST["isActive"][$i]: 0;
            if (trim($_POST['pName'][$i]) != '') {
                $sqlDtl .= "('" . $_POST['pName'][$i] . "','" . $_POST['pDescription'][$i] . "','" . $isActive. "','$var',now()),";
              
            }
        }
        $sqlDtl = trim($sqlDtl,",");
        $result =  mysqli_query($conn, $sqlDtl);
                if(!$result) {
                   echo mysqli_error($conn);
                } else {
//                    echo $sqlDtl;
//                    echo "Record #" . ($i + 1) . "Saved <br/>";
                    echo 'Your message send successfully!!!!!';
        echo '<script>window.open("productCatMst.php","_self")</script>'; //open targated page 
                }
    } else {
        echo 'Please Enter Product Name';
    }
 }           
}

//    }
//} else {
//    echo 'oh!sorry dear!!';
//}
?>

