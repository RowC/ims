<?php

//if (!isset($_SESSION)) {
//    session_start();
//}
include '../config/datasource.php';
//echo '<script><alert("' . $_POST['productCatTitle'] . '")</script>';


if (isset($_REQUEST) && empty($_POST['productCatMstId'])) {
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
            return;
        }

        $number = count($_POST['pName']);
        if ($number > 0) {

            $file_dir = '/dist/imgs/product_img/'; // upload directory  
            $sqlDtl = "INSERT INTO product_cat_dtl(item_id,product_name,product_description,is_active,stock_type,product_cat_mst,product_logo_nm,logo_size,product_logo_path,create_date)values";
            for ($i = 0; $i < $number; $i++) {
                // upload image
                $product_image = $_FILES['productLogo']['name'][$i];
                $tmp_dir = $_FILES['productLogo']['tmp_name'][$i];
                $imgSize = $_FILES['productLogo']['size'][$i];
                $isActive = isset($_POST["activeList"][$i]) ? $_POST["activeList"][$i] : 0;
                //$radiobtn = $_POST['radioBtn'][$i];  
                $radiobtn = isset($_POST["radioBtn"][$i]) ? $_POST["radioBtn"][$i] : NULL;
                if (trim($_POST['pName'][$i]) != '') {
                    if ($product_image) {
                        $upload_dir[$i] = '/dist/imgs/product_img/';
                    } else {
                        $upload_dir[$i] = '';
                    }
                    $sqlDtl .= "('" . $_POST['item'][$i] . "','" . $_POST['pName'][$i] . "','" . $_POST['pDescription'][$i] . "','$isActive','$radiobtn','$var','$product_image','$imgSize','$upload_dir[$i]',now()),";
                }
                move_uploaded_file($tmp_dir, '../webapp' . $file_dir . $product_image);
            }
            $sqlDtl = trim($sqlDtl, ",");
            $result = mysqli_query($conn, $sqlDtl);
            if (!$result) {
                echo mysqli_error($conn);
            } else {
//                    echo "Record #" . ($i + 1) . "Saved <br/>";
                echo 'Your message send successfully!!!!!';
                echo '<script>window.open("productCatMst.php","_self")</script>'; //open targated page 
            }
        } else {
            echo 'Please Enter Product Name';
        }
    }
} elseif (isset($_REQUEST) && !empty($_POST['productCatMstId'])) {
    $mstId = $_POST['productCatMstId'];
    $categoryTitle = $_POST['productCatTitle'];
    $productKeyword = $_POST['productCatKeyword'];
    $sqlMst = "UPDATE product_cat_mst SET 
        category_title='$categoryTitle', category_keyword='$productKeyword',update_date = now() WHERE id='$mstId'"; // or die()
    $row = mysqli_query($conn, $sqlMst);
//    if (mysqli_query($conn, $sqlMst)) {  
    $number = count($_POST['pName']);
    if ($number > 0) {

        $file_dir = '/dist/imgs/product_img/'; // upload directory  
//             $sqlDtl = "UPDATE product_cat_dtl SET";
        for ($i = 0; $i < $number; $i++) {
            //$sql = "select pcd.*,psm.id from product_cat_dtl pcd,product_cat_mst pcm where product_cat_mst ='" . $row['product_Cat_mst_id'] . "'";
            $sql = "select pcd.* from product_cat_dtl pcd where id ='" . $_POST["dtlId$i"] . "'";
            $result = mysqli_query($conn, $sql);
            $rowDtl = mysqli_fetch_array($result);
            $var = $rowDtl['product_cat_mst'];
            $product_image = $_FILES["productLogo$i"]['name'];
            $tmp_dir = $_FILES["productLogo$i"]['tmp_name'];
            $imgSize = $_FILES["productLogo$i"]['size'];
            $isActive = isset($_POST["activeList$i"]) ? $_POST["activeList$i"] : 0;
            //$radiobtn = $_POST['radioBtn'][$i];  
            $radiobtn = isset($_POST["radioBtn$i"]) ? $_POST["radioBtn$i"] : NULL;

            if ($product_image) {
                $upload_dir = '/dist/imgs/product_img/';
//            $imgExt = strtolower(pathinfo($product_image, PATHINFO_EXTENSION)); // get image extension
//            // valid image extensions
//            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
//            // rename uploading image
//            $userpic = rand(1000, 1000000) . "." . $imgExt;
//
//            // allow valid image file formats
//            if (in_array($imgExt, $valid_extensions)) {
//                // Check file size '1MB'
//                if ($imgSize < 1000000) {
//                    //unlink($upload_dir . $row['product_logo_nm']);
//                    move_uploaded_file($tmp_dir, "$upload_dir$product_image");
//                    $product_img_path = $upload_dir . $product_image;
//                } else {
//                    $errMSG = "Sorry, your file is too large.";
//                    echo '<h1 class="text-red" align="center">Sorry, your file is too large.</h1>';
//                }
//            } else {
//                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//                echo '<h1 class="text-red" align="center">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>';
//            }
            } elseif ($rowDtl['product_logo_nm']) {
                // if no image selected the old image remain as it is.
                $product_image = $rowDtl['product_logo_nm']; // old image from database
                $imgSize = $rowDtl['logo_size']; // old image from database
                $upload_dir = $rowDtl['product_logo_path']; // old image from database
                // return false;
            } else {
                $upload_dir = '';
            }
//           if ($product_image) {
//                        $upload_dir[$i] = '/dist/imgs/product_img/';
//                    } else {
//                        $upload_dir[$i] = '';
//                    }     
//            if ($_POST["dtlId$i"]) {
                $sqlDtl = "UPDATE product_cat_dtl SET item_id= '" . $_POST["item$i"] . "',product_name='" . $_POST["pName$i"] . "', product_description='" . $_POST["pDescription$i"] . "',is_active='" . $isActive . "',stock_type='" . $radiobtn . "',product_logo_nm='" . $product_image . "',logo_size='" . $imgSize . "',product_logo_path='" . $upload_dir . "', update_date = now() WHERE id=" . $_POST["dtlId$i"] . "";
//            }
//            else {
//                $sqlDtl = "INSERT INTO product_cat_dtl(item_id,product_name,product_description,is_active,stock_type,product_cat_mst,product_logo_nm,logo_size,product_logo_path,create_date)values('" . $_POST['item'][$i] . "','" . $_POST['pName'][$i] . "','" . $_POST['pDescription'][$i] . "','$isActive','$radiobtn','$var','$product_image','$imgSize','$upload_dir[$i]',now())";
//            } 
            $dtlResult = mysqli_query($conn, $sqlDtl);
        }

        //    echo "Dtl Id = ".$_POST["dtlId$i"];                
//                 echo "row ID = ".$rowDtl['id'];

        move_uploaded_file($tmp_dir, '../webapp' . $file_dir . $product_image);
        $sqlDtl = trim($sqlDtl, ",");
//    echo $sqlDtl;  
        //$result = mysqli_query($conn, $sqlDtl);
        if ($dtlResult) {
            $msg = "Successfully Updated!!";
            echo '<script>window.open("productList.php","_self").</script>';
            echo $msg;
        } else {
            echo mysqli_error($conn);
//              echo '<script>window.open("productList.php","_self").</script>';
        }
//              }
    } else {
        echo mysqli_error($conn);
    }
}
?>

