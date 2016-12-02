<?php
include '../headerMenu.php';
//include '../config/datasource.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Role
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="authUser.php"><i class="fa fa-plus"></i>Add New</a></li>
            <li><a href="userList.php"><i class="fa fa-reorder"></i>User List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <form action="" class="form-horizontal" id="myForm">              
                <div class="box-header">
                    Add New User
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="fullName" class="col-sm-2 control-label">Full Name</label>                            
                        <div class="col-md-6">
                            <input type="text" id="fullName" name="fullName" value="" class="form-control-customs"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="userName" class="col-sm-2 control-label">User Name</label>
                        <div class="col-md-6">
                            <input type="text"  id="userName" name="userName" value="" class="form-control-customs"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="text"  id="password" name="password" value="" class="form-control-customs"/>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-md-6">
                            <input type="email"  id="email" name="email" value="" class="form-control-customs"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cellNo" class="col-sm-2 control-label">Cell No.</label>
                        <div class="col-md-6">
                            <input type="text"  id="cellNo" name="cellNo" value="" class="form-control-customs"/>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="role" class="col-sm-2 control-label">Role</label>
                        <div class="col-md-6">
                            <select class="form-control-customs select2" id="roleId" name="roleId[]" multiple="multiple">
                                <option value="">Select One</option>
                                <?php
                                $sql = "select * from auth_role";
                                $search_pro = mysqli_query($conn, $sql);
                                 while ($rows = mysqli_fetch_array($search_pro)) {
                                $role_id = $rows['id'];
                                $role_title = $rows['authority'];
                                echo "<option value='$role_id' >$role_title</option>";
                                echo $role_title;
                            }
                                ?>
                                
                            </select>
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
