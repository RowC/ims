<?php
include '../headerMenu.php';
?>
<div class="content-wrapper">   
    <section class="content-header">
        <h1>
            Inventory Location
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="storageLocList.php"><i class="fa fa-reorder"></i>List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box info">
            <div class="box-header">Inv Loc List</div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover table-condensed display nowrap th-center">
                    <thead class="bg-orange">
                        <tr>
                             <th>Location Code</th>
                             <th>Location Name</th>
                             <th> Address</th>
                             <th>Phone</th>
                             <th>Secondary Name</th>
                             <th>Edit</th>
                             <th>Delete</th>
                        </tr>
                   
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <hr>
        <div class="box" style="margin-left: 10%">
            <form>
                 <div class="box-header">Inv Loc Entry Form</div>
            <div class="box-body">
                <table style="background-color: #bbb; width: 50%" class="table-bordered  table-condensed display nowrap th-center">
                    <tr>
                        <th style="width: 28%">Location Code:</th>
                        <td><input type="text" name="invLoc" class="input-control"></td>
                    </tr>                    
                    <tr>
                        <th>Location Name:</th>
                        <td><input type="text" name="invName" class="input-control"></td>
                    </tr>                  
                    <tr>
                        <th>Address:</th>
                        <td><textarea type="text" name="address" class="textArea-control"></textarea></td>
                    </tr>                   
                    <tr>
                        <th>Phone:</th>
                        <td><input type="text" name="phone" class="input-control"></td>
                    </tr>  
                    <tr>
                        <th>Secondary Name:</th>
                        <td><input type="text" name="secondaryName" class="input-control"></td>
                    </tr>  
                    <tr>
                        <th>Edit:</th>
                        <td><input type="text" name="secondaryName" class="input-control"></td>
                    </tr>  
                    <tr>
                        <th>Email:</th>
                        <td><input type="text" name="secondaryName" class="input-control"></td>
                    </tr>  
                </table>
            </div>
            <div class="box-footer">
                 <input type="button" name="save_product" value="Add New" class="btn btn-success" onclick="sendFormData()">
                 <button type="reset" name="" value="" class="btn btn-warning">Reset <i class="fa fa-refresh"></i></button>
            </div>
            </form>
        </div>
    </section>
</div>
<?php
include '../footerMenu.php';
?>