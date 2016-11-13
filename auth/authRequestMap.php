<?php
include '../headerMenu.php';
include '../config/datasource.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="requestMapList.php"><i class="fa fa-reorder"></i>Requestmap List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <form action="" class="form-horizontal" id="myForm">              
                <div class="box-header">
                    Add New Requestmap
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="configAttribute" class="col-sm-2 control-label">Config Attribute</label>                            
                        <div class="col-md-6">
                            <input type="text" id="configAttribute" name="configAttribute" value="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-sm-2 control-label">url</label>
                        <div class="col-md-6">
                            <input type="text"  id="url" name="url" value="" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="button" class="bnt btn-flickr" onclick="sendFormData()"><i class="fa fa-save"></i> Save</button>
                    <button type="reset" value="reset" class="bnt btn-info pull-right"><i class="fa fa-hand-paper-o"></i> Reset</button>
                </div>
            </form>
        </div>
    </section>
    <!--<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#roleId').select2();
        });
        function sendFormData() {
            var data = new FormData($('#myForm')[0]); //this will select all the form data in the data variable.                                       
            $.ajax({
                url: "authUserController.php",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data)
                {
                    alert(data)
                    $('#myForm')[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("Something went wrong!!!!!!!!")
                }
            });
        }
    </script>
</div>
<?php
include '../footerMenu.php';
?>
