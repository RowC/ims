<?php
include '../headerMenu.php';
include '../config/datasource.php';
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
        <title></title>
    </head>
    <body>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dynamic Table Two
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="authRoleList.php"><i class="fa fa-dashboard"></i>Role List</a></li>
                    <!--<li class="active">Dashboard</li>-->
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <form action="">
                        <div class="box-header">
                            Add New Role
                        </div>
                        <div class="box-body">
                            <div class="col-md-6">
                                <input type="text" name="role" value="" class="form-control"/>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" value="Save" >Save</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>
