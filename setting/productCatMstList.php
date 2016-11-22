<?php
include '../headerMenu.php';
//include '../config/datasource.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Product Category Mst List
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productCatMst.php"><i class="fa fa-dashboard"></i>Add New</a></li>
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
                            <th>Product Category Code</th>
                            <th>Product Category Title</th>
                            <th>Category Keyword</th>
                            <th>Entry Date</th>
                            <th>Update Date</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
                $sql = "select * from product_cat_mst";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                       echo "<tr>" . "<td>" . $row["product_cat_mst_id"] . "</td> " . "<td>" .$row["category_title"]. " </td> " ."<td>" .$row["category_keyword"]. " </td> " . "<td>" . $row["create_date"] . "</td>" . "<td>" . $row["update_date"] . "</td>" . " <td><a href='productSingleView.php?&id= " . $row["product_cat_mst_id"] . "' class='btn btn-info btn-xs' target='_blank'> View <i class='fa fa-file-text-o'></i></a>&nbsp; <a href='dynamicTableTwo.php?id=".$row["product_cat_mst_id"]."' class='btn btn-warning btn-xs' target='_blank' >Edit<i class='fa fa-fw fa-edit'></i></a> &nbsp;<a href='productList.php?action=delete&id= " . $row["product_cat_mst_id"] . "' class='btn btn-danger btn-xs'>Delete<i class='fa fa-fw fa-eraser'></i></a></td> " . " </tr> ";
                  }
                } else {
                    echo "<tr><td colspan='5' align='center'>No Record Found!!!!</td>";
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
