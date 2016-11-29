<?php
if (!isset($_SESSION)) {
    session_start();
}
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
            <li><a href="authRole.php"><i class="fa fa-plus"></i>Add New</a></li>
            <li><a href="roleList.php"><i class="fa fa-reorder"></i>Role List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <form action="" class="form-horizontal" id="myForm">
                <?php
                if ($_SESSION['roleId']) {
                    $roleId = $_SESSION['roleId'];
                    echo '<input type="text" id="roleId" name="id" value="$roleId" class="form-control"/>';
                }
                ?>
                <div class="box-header">
                    Edit Role
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="role" class="col-sm-2 control-label">Title</label>                            
                        <div class="col-md-6">
                            <input type="text" id="title" name="role" value="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-md-6">
                            <textarea  id="description" name="description" value="" class="form-control"></textarea>
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
        function loadData() {
            var roleId = $("#roleId").val();
            $.ajax({
                url: "authRoleController.php",
                type: "POST",
                data: roleId,
                contentType: false,
                cache: false,
                processData: false,
                success: function (data)
                {
                    alert(data)

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("Something went wrong!!!!!!!!")
                }
            });
        }

        function sendFormData() {
            var data = new FormData($('#myForm')[0]); //this will select all the form data in the data variable.                                       
            $.ajax({
                url: "authRoleController.php",
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
