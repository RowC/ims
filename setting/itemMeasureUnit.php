<?php
include '../headerMenu.php';
?>
<div class="content-wrapper">   
    <section class="content-header">
        <h1>
            Unit Of Measurement
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="storageLocList.php"><i class="fa fa-reorder"></i>List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <section class="content">
                <div class="box info">
            <div class="box-header">
                <form>
                    <div class="form-group">
                        <div class="col-sm-3"></div>

                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" name="importPermitNo" id="importPermitNo"
                                       placeholder="Please enter location code" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-flat" id="ipSrcBtn" type="button"><i class="fa fa-search"></i>Search
                                    </button>
                                </span>
                            </div><!-- /input-group -->

                        </div>

                        <div class="col-sm-3"></div>
                    </div>
                                    <!--<label>Location:</label><input type="text" name="" value="">-->
                </form>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover nowrap th-center">
                    <thead class="bg-orange">
                        <tr>
                            <th>Keyword</th>
                            <th> Title</th>
                            <th>Sort Order</th>
                            <th>Is Active?</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>
        <div class="box" style="margin-left: 20%;width: 60%">
            <form>
                <div class="box-header">Inv Loc Entry Form</div>
                <div class="box-body">
                    <table style="background-color: #bbb; width: 100%" class="table-bordered  table-condensed display nowrap th-center">
                        <tr>
                            <th style="width: 28%">Keyword:</th>
                            <td><input type="text" name="invLoc" class="input-control"></td>
                        </tr>                    
                        <tr>
                            <th>Title:</th>
                            <td><input type="text" name="invName" class="input-control"></td>
                        </tr>                  
                        <tr>
                            <th>Sort Order:</th>
                            <td><textarea type="text" name="address" class="textArea-control"></textarea></td>
                        </tr>                   
                        <tr>
                            <th>Is Active:</th>
                            <td><input type="checkbox" name="phone" class="input-control" style="margin-left: -33.2%"></td>
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