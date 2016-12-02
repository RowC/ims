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
        <form action="" class="">
            
        <div class="box box-warning">
            <div class="box-body">
                <p>Fields marked with (<span class="required-indicator">*</span>) are mandatory</p>
                <hr/>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group ">
                        <label class="required">
                            Storage Name
                        </label>
                        <input type="text" name="name" maxlength="100" required="required" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group required">
                        <label for="zoneCode" class="required">
                            Storage Code
                        </label>
                        <input type="text" name="zoneCode" required="required" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group required">
                        <label for="zoneNumber" class="required">
                            Storage Number
                        </label>
                        <input type="number" name="zoneNumber" required="required" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="address" class="control-label">
                            Address
                        </label>
                        <input type="text" name="address" maxlength="100" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="phoneNo" class="control-label">
                            Phone No
                        </label>
                        <input type="text" name="phoneNo" maxlength="30" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="medicalPhoneNo" class="control-label">
                            Medical Phone No
                        </label>
                        <input type="text" name="medicalPhoneNo" maxlength="14" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="fireServicePhoneNo" class="control-label">
                            Fire Service Phone No
                        </label>
                        <input type="text" name="fireServicePhoneNo" maxlength="14" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="faxNo" class="control-label">
                            Fax No
                        </label>
                        <input type="text" name="faxNo" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="emailAddress" class="control-label">
                            Email Address
                        </label>
                            <input type="email" name="emailAddress" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="website" class="control-label">
                            Website
                        </label>
                        <input type="text" name="website" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="shortName" class="control-label">
                            Sort Name
                        </label>
                        <input type="text" name="shortName" maxlength="20" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="sortOrder" class="control-label">
                            Sort Order
                        </label>
                        <input type="text" name="sortOrder" min="0" value="" class="form-control-customs"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label for="isActive" class="control-label">
                            Active?
                        </label>
                        <input type="checkbox" name="isActive" value=""/>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="remarks" class="control-label">
                            Remarks
                        </label>
                        <textarea name="remarks" cols="40" rows="10" maxlength="500" value="" class="form-control-customs"></textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                    <!--<a id="add_row" class="btn btn-success pull-left">Add Row</a>-->
                    <input type="button" name="save_product" value="Save" class="btn btn-success" onclick="sendFormData()">
                    <!--<a id='deleteRow_' class="pull-right btn btn-danger">Delete Row</a>-->
                </div><!-- /.box-footer -->
        </div>
        </form>
    </section>

    <script src="bootstrapValidator.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#cpZoneFrmCreate,#cpZoneFrmEidt").each(function () {
                $(this).bootstrapValidator({
                    message: 'This value is not valid',
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        name: {
                            validators: {
                                notEmpty: {
                                    message: 'The Zone Name is required and cannot be empty'
                                }
                            }
                        },
                        sortOrder: {
                            validators: {
                                integer: {
                                    message: 'The Sort Order is not an integer number'
                                }
                            }
                        }

                    }
                });
            });

            // $("[data-mask]").inputmask();
        });
    </script>
</div>
<?php
include '../footerMenu.php';
?>