<?php
include '../headerMenu.php';
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
<!--                <div class="box-body">
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
                </div>-->

<div class="">
    <div class="form-group ">
        <label for="url" class="col-sm-2 control-label">URL Path
            <span class="required-indicator">*</span>
        </label>

        <div class="col-sm-6">
            <input type="text" name="url" id="url"
                     value="" class="form-control"/>
        </div>
    </div>

<!--    <div class="form-group ">
        <label for="httpMethod" class="col-sm-2 control-label">Access Permit Type</label>

        <div class="col-sm-6">
            <input type="hidden" name="test" value="" id="configAttributeHidenValue" class="form-control"/>
            <select name="configAttribute" class="form-control">
                    <option value="1">permitAll</option>
                    <option value="2">denyAll</option>
                    <option value="3">IS_AUTHENTICATED_FULLY</option>
            </select>

        </div>
    </div>-->

    <div class="form-group">
        <label  class="col-sm-2 control-label">Role
            <span class="required-indicator">*</span>
        </label>

        <div class="col-sm-6">

            <div class="box scroll-div" id="scrollDiv">
                <div class="box-body no-padding">
                    <table class="table table-striped">                       
                           <?php
                            getRoleList();
                           ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div>
    </div>

</div>    <div class="box-footer">
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
                url: "authRequestMapController.php",
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
        
            $(document).ready(function () {
        var test1 = $('#configAttribute').val()
        if(test1 != null || test1 != '' ){
            $(".testDisabled").attr('disabled', 'disabled')
        }if(test1 == null || test1 == ''){
            $(".testDisabled").removeAttr('disabled', 'disabled')
        }
            $(document).on('change', '#configAttribute', function () {
                var selectedValue = $('#configAttribute').val()
                if (!selectedValue) {
                    $(".testDisabled").removeAttr('disabled', 'disabled')
                } else {
                    $(".testDisabled").attr('disabled', 'disabled')
                }
            });
        testcheck()
    });
    function testcheck() {
        var count = $("[type='checkbox']:checked").length;
        if(count == 4){
            $("#configAttribute").removeAttr('disabled', 'disabled')
        }
        else{
            $("#configAttribute").attr('disabled', 'disabled')
        }
    }

    $(function () {
        $('.formValReqMap').each(function () {
            $(this).bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    url: {
                        validators: {
                            notEmpty: {
                                message: 'The url path is required and cannot be empty'
                            }/*,
                             regexp: {
                             regexp: /^\/[a-zA-Z/]+$/,
                             message: 'The url path start with / and lowarcase only '
                             }*/

                        }
                    },
                    authority: {
                        validators: {
                            notEmpty: {
                                message: 'Authority is required and cannot be empty'
                            }
                        }
                    }
                }
            });
        });
    });
    </script>
</div>
<link rel="stylesheet"
      href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
<script type="text/javascript" src="${resource(dir: 'js', file: 'bootstrapValidator.min.js')}"></script>
   
<?php
include '../footerMenu.php';
?>
