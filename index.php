<?php
include './config/datasource.php';
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
        <title>MIS</title>
        <link rel="shortcut icon" href="webapp/dist/imgs/avatar3.png" width="10" height="30">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="webapp/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Morris charts -->
        <link rel="stylesheet" href="webapp/plugins/morris/morris.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="webapp/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="webapp/dist/css/skins/_all-skins.min.css">
    </head>
    <body background="webapp/dist/imgs/bg-img.jpg">
        <!--<body class="bg-purple-gradient">-->
        <!--<a href="setting/adminDashboard.php">Admin Panel</a>-->
        <div class="wrapper" style="margin-top: 15%;margin-left: 15%">
            <div class="container">
                <div class="col-md-8">
                    <!--<section class="content-wrapper">-->
                    <div class="content-wrapper">
                        <form action="auth/loginController.php" method="post">
                            <div class="panel" style="background-color: transparent;">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class=" col-md-12" >
                                            <input type="text" name="userName" placeholder="User Name" class="form-control" style="background-color: transparent;"/><br>
                                            <input type="password" name="password" placeholder="Password" class="form-control" style="background-color: transparent;"/>
                                        </div>
                                    </div>                    
                                </div>  
                                <div class="panel-footer" style="background-color: transparent;">
                                    <div class="row">
                                        <!--<input type="submit" name="sub" value="Login" class="btn btn-lg btn-warning btn-block">-->
                                        <input type="submit" name="sub" value="Login" class="btn btn-lg btn-google btn-block">
                                        <!--<button type="submit" name="save" class="">Login</button>-->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--</section>-->
                </div>
            </div>
        </div>
    </body>
</html>
