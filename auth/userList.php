<?php
include '../headerMenu.php';
include '../config/datasource.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User List
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="authUser.php"><i class="fa fa-plus"></i>Add New</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-warning">
            <div class="box-header">

            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover " id="dataTable">
                    <thead class="bg-green">
                        <tr>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Cell No</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
                $sql = "select * from auth_user";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>" . "<td>" . $row["full_name"] . "</td> " . "<td>" .$row["user_name"]. " </td> "."<td>" .$row["email"]. " </td> " ."<td>" .$row["cellNo"]. " </td> ". "<td>" . $row["created_date"] . "</td>" . "<td>" . $row["modified_date"] . "</td>" . " <td><a href='show.php?&id= " . $row["id"] . "' class='btn btn-info btn-xs' target='_blank'> View <i class='fa fa-file-text-o'></i></a>&nbsp; <a href='editRole.php?roleId=".$row["id"]."' class='btn btn-warning btn-xs' target='_blank' >Edit<i class='fa fa-fw fa-edit'></i></a> &nbsp;<a href='authRoleController.php?action=delete&id= " . $row["id"] . "' class='btn btn-danger btn-xs'>Delete<i class='fa fa-fw fa-eraser'></i></a></td> " . " </tr> ";
                  }
                } else {
                    echo "<tr><td colspan='6' align='center'>No Record Found!!!!</td>";
                }
                ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">

            </div>

        </div>
    </section>
</div>

<?php
include '../footerMenu.php';
?>
