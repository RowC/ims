<?php
if (!isset($_SESSION)) {
    session_start();
}
include ('config/datasource.php');
include '../setting/function.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMS</title>
        <link rel="shortcut icon" href="../webapp/dist/imgs/avatar3.png" width="10" height="30">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="../webapp/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Morris charts -->
        <link rel="stylesheet" href="../webapp/plugins/morris/morris.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../webapp/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../webapp/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="webapp/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="webapp/plugins/select2/select2.css">

        <style type="text/css">
            .table-striped1>tbody>tr:nth-of-type(odd){border: 1px solid #000}
            .btnCustom{
                border-radius: 1px;
                padding: 0.5px 6px !important;
                webkit-box-shadow: none;
                box-shadow: none;
                border: 1px solid transparent;
            }
            .btnfile{
                border-radius: 1px;
                padding: 0.5px 6px !important;
                webkit-box-shadow: none;
                box-shadow: none;
                border: 1px solid transparent;
            }
            .boxCustom{
                position: relative;
                border-radius: 3px;
                background: #ffffff;
                /*border-top: 3px solid #d2d6de;*/
                margin-bottom: 20px;
                width: 100%;
                box-shadow: 0 1px 1px rgba(0,0,0,0.1);
            }
            body{
                font-family: Tahoma
            }
            body span{
                font-family: Tahoma;
                font-size: 12px;
                font-weight: normal
            }
            .content-header > h3 {
    margin: 0;
    font-size: 20px;
}
            /*            .skin-black .wrapper,
            .skin-black .main-sidebar,
            .skin-black .left-side {
              background-color: #55acee !important;
            }*/

            /*.skin-blue .main-header .logo {
                background-color: #55acee !important;
            }*/

            .skin-blue .main-header .navbar {
                background-color: #55acee !important;
            }
            .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
                background-color:  #466482 !important;
            }
            .form-control-customs{
                height: 25px !important;
            }
            .borderColor{
                border: 1px solid #ccc;
            }
            .selectBox{
                width: 100%;
                height: 25px;
                border: 1px solid #ccc;
            }
            /*.cbox{border:1px solid red;background:yellow;}*/
            /*  input[type="radio"],
            input[type="checkbox"] {
                border: 1px solid #ccc !important;
                background: -webkit-linear-gradient(#FCFCFC, #DADADA);
                -webkit-appearance: none;
                -webkit-transition: box-shadow 200ms;

            }*/
            input[type="radio"],
            input[type="checkbox"] {
                height: 10px
            }
            .btn{
                padding: .5px 6px !important;
            }
            input[type="text"]
            {
                font-size:12px;
                 background-color:#f9f6f6
                /*background-color: #ccc readonly*/
                /*background-color:rgb(255,255,235)*/                    
                    /*background-color: rgb(255,255,235)*/
            }
            select
            {
                font-size:10px;
                padding: 0px
                /*background-color: #ccc*/
            }
            textarea
            {
                /*width: 300px;*/
                height: 100px;
                /*background-color: yellow;*/
                /*font-size: 1em;*/
                /*font-weight: bold;*/
                /*font-family: Verdana, Arial, Helvetica, sans-serif;*/
                font-size:12px;
                /*background-color: #ccc*/
            }
            label{
                font-size:12px;
                font-weight: normal;

            }
            input[type="radio"],input[type=checkbox]
            {
                /* Double-sized Checkboxes */
                -ms-transform: scale(1); /* IE */
                -moz-transform: scale(1); /* FF */
                -webkit-transform: scale(1); /* Safari and Chrome */
                -o-transform: scale(1); /* Opera */
                padding: 10px;
            }
            th{
                font-size:10px;
            }
            .input-control{
                width: 70%;
            }
            .textArea-control{
                width: 90%;
            }
            .table > tbody > tr > td, 
            .table > tbody > tr > th,
            .table > tfoot > tr > td, 
            .table > tfoot > tr > th {
                padding: 0px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd
            }
            
            .table > thead > tr > td, 
            .table > thead > tr > th{
               padding: 5px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ccc
            }
/*            td{
                border: 1px solid #ccc
            }*/
            .form-control-customs:focus {
    border-color: #3c8dbc;
    box-shadow: none;
}
.form-control-customs:focus {
    /*border-color: #66afe9;*/
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
}
.form-control-customs {
    height: 25px !important;
}
.form-control-customs {
    border-radius: 0;
    /*box-shadow: none;*/
    /*border-color: #d2d6de;*/
}
.form-control-customs {
    display: block;
    width: 100%;
    height: 34px;
    padding: 0px 4px;
    /*font-size: 14px;*/
    line-height: 1.42857143;
    color: #555;
    /*background-color: #fff;*/
    background-image: none;
    border: 0px solid #ccc;
    /*border-radius: 4px;*/
    /*-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
    /*box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
    /*-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;*/
    /*-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;*/
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

        </style>
    </head>

    <!--<body class="hold-transition skin-blue sidebar-mini">-->
    <body class="hold-transition skin-blue-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>LTE</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../webapp/dist/imgs/avatar3.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../webapp/dist/imgs/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../webapp/dist/imgs/avatar3.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../webapp/dist/imgs/user3-128x128.jpg" class="img-circle" alt="User ** Image">
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="../webapp/dist/imgs/user3-128x128.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../webapp/dist/imgs/avatar3.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../webapp/dist/imgs/avatar3.png" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="../auth/logoutController.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../webapp/dist/imgs/avatar3.png" class="img-circle" alt="">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a><br>
                        </div>

                    </div>


                    <!-- search form -->
                    <!--                    <form action="#" method="get" class="sidebar-form">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                                <span class="input-group-btn">
                                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <!--<li class="header">MAIN NAVIGATION</li>-->
                        <?php
                        if ($_SESSION["userRole"] == "ROLE_ADMIN") {
                            echo ' <li class="treeview">
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Sytem</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">';

                            $query = "SELECT DISTINCT au.user_name as `userName`,(SELECT arl.id from `auth_role`as arl WHERE arl.id= ur.auth_role)as `userRole`,"
                                    . "ar.url as `URL` FROM `auth_user`as au, `user_role` as ur, `auth_requestmap` as ar "
                                    . "WHERE au.id=ur.auth_user AND ur.auth_role = ar.config_attribute AND au.user_name = '" . $_SESSION['username'] . "'AND au.password = '" . $_SESSION["userPass"] . "'";

                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result);
                            $username = $row['userName'];
                            $userRole = $row['userRole'];
                            //$userPass = $row['password'];
                            $userUrl = $row['URL'];
//                                if ($_SESSION["username"] == $username && $_SESSION["userRole"] == $userRole && $userUrl) {
                            if ($_SESSION["username"] == $username && $_SESSION["userRole"] == "ROLE_ADMIN" && $userUrl) {
                                // echo $_SESSION["userRole"]."=>".$userRole;
                                echo '
                                     <li><a href="@"><i class="fa fa-circle-o"></i>Add Role</a></li>
                                <li class=""><a href="../auth/authUser.php">
                                <i class="fa fa-user"></i>  
                                <span>Add User</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>                                
                                    </a>
                                <ul class="treeview-menu">
                                 <li class=""><a href="../auth/authUser.php"><i class="fa fa-user-plus"></i>Enter Form</a></li>
                                 <li class=""><a href="../auth/userList.php"><i class="fa fa-list"></i>List</a></li>
                                </ul>
                                </li>
                                <li class=""><a href="../auth/authRequestMap.php"><i class="fa fa-circle-o"></i>Add Requestmap</a></li>
                                    ';
                            }
//                                else {                                   
//////                                    echo $_SESSION["userRole"]."=>".$userRole;
//                                    echo $username;
//                                }

                            echo '  </ul>
                        </li>';
                        }
                        ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cog"></i> <span>Setting</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="@"><i class="fa fa-industry"></i>Storage Loc
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="../setting/storageLoc.php"><i class="fa fa-plus"></i>Entry Form</a> </li>
                                        <li class=""><a href="storageLocList.php"><i class="fa fa-list"></i>List</a> </li>
                                        <li class=""><a href="../setting/invLoc.php"><i class="fa fa-list"></i>Inv Loc</a> </li>
                                    </ul>
                                </li>
                                <li class=""><a href="@"><i class="fa fa-balance-scale"></i>Measurement Units
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="uom.php"><i class="fa fa-plus"></i>Entry Form</a> </li>
                                        <li class=""><a href="../setting/itemMeasureUnit.php"><i class="fa fa-plus"></i>Unit Of Measurement</a> </li>
                                        <li class=""><a href="uomList.php"><i class="fa fa-list"></i>List</a> </li>
                                    </ul>
                                </li>
                                <li class=""><a href="@"><i class="fa fa-circle-o"></i>Item Category
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="../setting/itemCategory.php"><i class="fa fa-plus"></i>Category Entry Form</a></li>
                                        <li><a href="productCatMst.php"><i class="fa fa-plus"></i>Entry Form</a></li>
                                        <li class=""><a href="productCatMstList.php"><i class="fa fa-list"></i>List</a></li>
                                    </ul>
                                </li>
                                <li class="treeview"><a href="@"><i class="fa fa-circle-o"></i>Item
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="productCatMst.php"><i class="fa fa-plus"></i>Entry Form</a></li>
                                        <li><a href="../setting/itemDetails.php"><i class="fa fa-plus"></i>Item Entry Form</a></li>
                                        <li class=""><a href="productCatMstList.php"><i class="fa fa-list"></i>List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-recycle"></i> <span>Adjustment</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="productCatMstList.php"><i class="fa fa-circle-o"></i>Opening Stock Entry</a></li>
                                <li><a href="productCatMst.php"><i class="fa fa-circle-o"></i>Inventory Adjustment</a></li>
                                <li class=""><a href="productCatMstList.php"><i class="fa fa-circle-o"></i>Stock Transfer</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-text-o"></i> <span>Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="productCatMstList.php"><i class="fa fa-bar-chart"></i>Item wise stock status</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right">4</span>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="dynamicTable.php"><i class="fa fa-circle-o"></i>D Table One</a></li>
                                <li><a href="dynamicTableTwo.php"><i class="fa fa-circle-o"></i>D Table Two</a></li>
                                <li><a href="mail.php"><i class="fa fa-circle-o"></i> Mail</a></li>
                                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                            </ul>
                        </li>
                        <!--                        <li>
                                                    <a href="pages/widgets.html">
                                                        <i class="fa fa-th"></i> <span>Widgets</span>
                                                        <span class="pull-right-container">
                                                            <small class="label pull-right bg-green">new</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-pie-chart"></i>
                                                        <span>Charts</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                                                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                                                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                                                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-laptop"></i>
                                                        <span>UI Elements</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                                                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                                                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                                                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                                                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                                                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                                                    </ul>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-edit"></i> <span>Forms</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                                                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                                                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                                                    </ul>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-table"></i> <span>Tables</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                                                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="pages/calendar.html">
                                                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                                                        <span class="pull-right-container">
                                                            <small class="label pull-right bg-red">3</small>
                                                            <small class="label pull-right bg-blue">17</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="pages/mailbox/mailbox.html">
                                                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                                        <span class="pull-right-container">
                                                            <small class="label pull-right bg-yellow">12</small>
                                                            <small class="label pull-right bg-green">16</small>
                                                            <small class="label pull-right bg-red">5</small>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-folder"></i> <span>Examples</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                                                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                                                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                                                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                                                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                                                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                                                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                                                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                                                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                                                    </ul>
                                                </li>
                                                <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-share"></i> <span>Multilevel</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                                                                <span class="pull-right-container">
                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                </span>
                                                            </a>
                                                            <ul class="treeview-menu">
                                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                                                        <span class="pull-right-container">
                                                                            <i class="fa fa-angle-left pull-right"></i>
                                                                        </span>
                                                                    </a>
                                                                    <ul class="treeview-menu">
                                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                                                <li class="header">LABELS</li>
                                                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                                                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                                                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->

            <script type="text/javascript">
//            $(document).ready(function(){
//                $(".treeview").on("click",function (){
//                     $(this).toggleClass('active')
//                });
//            });
            </script>