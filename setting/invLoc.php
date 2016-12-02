<?php
include '../headerMenu.php';
?>
<div class="content-wrapper">   
    <section class="content-header">
        <h3>
            Inventory Location
        </h3>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="storageLocList.php"><i class="fa fa-reorder"></i>List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
         <div class="boxCustom">
             <div class="box-body">
        <div class="col-md-6">
                <form class="form-horizontal">                      
                            <div class="form-group">
                                <label class="col-md-3">Location Code:</label>
                            <div class="col-md-9">
                                <input type="text" name="invLoc" class="form-control-customs">
                            </div>   
                            </div> 
                              <div class="form-group">
                            <label class="col-md-3">Location Name:</label>
                            <div class="col-md-9">
                                <input type="text" name="invName" class="form-control-customs">
                            </div>
                              </div>
                              <div class="form-group">
                            <label class="col-md-3">Address:</label>
                            <div class="col-md-9">
                                <textarea cols="20" rows="5" type="text" name="address" class="form-control-customs input-sm"></textarea>
                            </div>
                              </div>
                              <div class="form-group">
                            <label class="col-md-3">Phone:</label>
                            <div class="col-md-9">
                                <input type="text" name="phone" class="form-control-customs">
                            </div>
                              </div>
                              <div class="form-group">
                            <label class="col-md-3">Email:</label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control-customs">
                            </div>
                              </div>  <button type="button" name="" value="" class="btnCustom btn-success">Save <i class="fa fa-save"></i></button>
                        <button type="reset" name="" value="" class="btnCustom btn-warning">Reset <i class="fa fa-refresh"></i></button>
                    <!--</div>-->
                </form>
            </div>       
             <div class="col-md-6" >
                 
                 <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="importPermitNo" id="importPermitNo"
                                           placeholder="Please enter location code" class="form-control-customs">
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-flat" id="ipSrcBtn" type="button"><i class="fa fa-search"></i>Search
                                        </button>
                                    </span>
                                </div> <!--input-group -->
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered table-striped table-hover th-center">
                        <thead class="bg-orange">
                            <tr>
                                <th>Location Code</th>
                                <th> Address</th>
                                <th>Phone</th>
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
                            </tr>
                        </tbody>
                    </table>
                <!--</div>-->
            </div>
        </div>
</div>

    </section>
</div>
<?php
include '../footerMenu.php';
?>