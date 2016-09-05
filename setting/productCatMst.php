<?php
include '../headerMenu.php';
include '../config/datasource.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add New Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productCatMst.php"><i class="fa fa-dashboard"></i>Product List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->       
        <form id="myForm" class="form-horizontal">
            <div id="create-test1" class="box box-primary" role="main">
                <div class="box-header">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Product Category Title
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="productCatTitle" id="productCatTitle" value="" class="form-control">
                            </div>
                        </div>                              
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Product Category Keyword
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="productCatKeyword" id="productCatKeyword" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead class="bg-purple-gradient">
                                    <tr >
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th class="text-center">
                                            Item
                                        </th> 
                                        <th class="text-center">
                                            Product Name
                                        </th>
                                        <th class="text-center">
                                            Product Description
                                        </th>

                                        <th class="text-center">
                                            Is Active?
                                        </th>
                                        <th class="text-center">
                                            Product Image
                                        </th>
                                        <th class="text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr id='addr0'>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            <select id="ietm_0" name="item[0]" class="form-control">
                                                <option value="">Select One</option>
                                                <option value="1">Item 1</option>
                                                <option value="2">Item 2</option>
                                                <option value="3">Item 3</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name='pName[]' id="pName_0"  class="form-control"/>
                                        </td>
                                        <td>
                                            <textarea name='pDescription[]' col="1" rows="1" id="pDescription_0" class="form-control"></textarea>
                                        </td>
                                        <td>
                                            <input type="checkbox" name='activeList[0]' id="isActive_0" class="checkedVal" value='1'/>
                                        </td>
                                        <td>
                                            <div class="form-group">                   
                                                <div class="col-lg-10 col-xs-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-info btn-file">
                                                                Browse...
                                                                <input type="file" id="picNames_0" name="productLogo[0]"
                                                                       class="fileName" onchange="getFileName(this.id)">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control tf" readonly="readonly" id="picName_0"
                                                               name="productLogo[0]"
                                                               placeholder ="Browse your file" class="form-control input-sm">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
<!--<td> <a id='delete_row' class="pull-right btn btn-danger">Delete Row</a></td>-->
                                    </tr>
                                    <tr id='addr1'></tr>                                   
                                </tbody>
                            </table>
                            <a id="add_row" class="btn btn-warning pull-right">Add Row</a>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <!--<a id="add_row" class="btn btn-success pull-left">Add Row</a>-->
                    <input type="button" name="save_product" value="Save Product" class="btn btn-success" onclick="sendFormData()">
                    <!--<a id='deleteRow_' class="pull-right btn btn-danger">Delete Row</a>-->
                </div><!-- /.box-footer -->
            </div><!-- /.box box-primary -->

        </form>
    </section>
</div>
<!-- jQuery 2.2.0 -->
<!--<script type="text/javascript" src="${resource(dir: "resources/plugins/jQuery", file: "jquery.min.js")}"></script>-->

<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
                        function sendFormData() {
                            var pct = $('#productCatTitle').val()
                            alert(pct)
//                            var data = $('#myForm').serialize(); //this will select all the form data in the data variable.                                       
                            var data = new FormData($('#myForm')[0]); //this will select all the form data in the data variable.                                       
                            $.ajax({
                                url: "productFile.php",
                                type: "POST",
//                                data: $('#productMst').serialize(),
                                data: data,
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function (data)
                                {
                                    alert(data)
                                    $('#myForm')[0].reset();
                                    $('.checkedVal').val(2);
                                }

                            });
                        }
                        $(document).ready(function () {
                            $(".fileName").change(function () {
                                var id = this.id;
                                var value = this.value;

                                var idSegments = id.split("_");
                                var rowId = idSegments[1];
                                if (value) {
                                    $("#picName_" + rowId).val(value);
                                }
                            });
                            var i = 1;
                            $("#add_row").click(function () {
                                $('#addr' + i).html("<td>" + (i + 1) + "</td>\n\
<td><select id='ietm_" + i + "' name='item[" + i + "]' class='form-control'>\n\
<option value=''>Select One</option>\n\
<option value='1'>Item 1</option>\n\
<option value='2'>Item 2</option>\n\
<option value='3'>Item 3</option>\n\
</select></td>\n\
<td><input name='pName[]' id='pName_" + i + "' type='text'  class='form-control input-md'/></td>\n\
<td><textarea col='1' rows='1' name='pDescription[]' id='pDescription_" + i + "' class='form-control input-md'></textarea></td>\n\
<td><input type='checkbox' name='activeList[" + i + "]' id='isActive_" + i + "' class='checkedVal' value='1'/></td>\n\
<td><div class='form-group'><div class ='col-lg-10 col-xs-10'><div class ='input-group'><span class ='input-group-btn'><span class = 'btn btn-info btn-file'>Browse...<input type ='file' id='picNames_" + i + "' name='productLogo[" + i + "]' class ='fileName'></span></span><input type='text' class='form-control tf' readonly = 'readonly' id='picName_" + i + "' name='productLogo[" + i + "]' placeholder='Browse your file' class='form-control input-sm'></div></div></div></td>\n\
<td><span id = 'deleteRow_" + i + "' class = 'dlt btn' ><i class = 'fa fa-times' style = 'color:red;font-size:20px' ></i></span></td>");
                                $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
                                i++;
//                            getFileName(id)

                                $(".fileName").change(function () {
                                    var id = this.id;
                                    var value = this.value;

                                    var idSegments = id.split("_");
                                    var rowId = idSegments[1];
                                    if (value) {
                                        $("#picName_" + rowId).val(value);
                                    }
                                });
                            });
//                        $("#deleteRow").click(function () {
//                            if (i > 1) {
//                                $("#addr" + (i - 1)).html('');
//                                i--;
//                            }
//                        });
                            $(document).on("click", ".dlt", function () {
                                var id = this.id;
                                var value = this.value;
                                var idSegments = id.split("_");
                                var rowId = idSegments[1];
                                if (rowId > 0) {
                                    $("#addr" + (i - 1)).html('');
                                    i--;
                                }
                            });

                        });

</script>
<!-- jQuery 2.2.3 -->
<!--<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>-->
<?php
include '../footerMenu.php';
?>
