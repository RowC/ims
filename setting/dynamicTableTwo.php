<?php
include '../headerMenu.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dynamic Table Two
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productCatMst.php"><i class="fa fa-dashboard"></i>Product List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <form id="myForm" class="form-horizontal">
            <div class="box box-warning">
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
                    <p>Click the button to add a new row at the first position of the table and then add cells and content.</p>

                    <table id="myTable" class="table table-bordered table-striped QualificationRequirements">
                        <thead class="bg-maroon-gradient ">
                            <tr>
                                <th>Item</th>
                                <th>Product Name</th>
                                <th>Production Description</th>
                                <th>Is Active</th>
                                <th>Stock Type</th>
                                <th>Product Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0' class="aa">
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
                                    <input type="radio" name='redioBtn[0]' id="redioBtn_0" class=""  value='in'>&nbsp;IN<br/>
                                    <input type="radio" name='redioBtn[0]' id="redioBtn_0" class=""  value='out'>&nbsp;OUT
                                </td>
                                <td>
                                    <div class="form-group">                   
                                        <div class="col-lg-10 col-xs-10">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-info btn-file">
                                                        Browse...
                                                        <input type="file" id="picNames_0" name="productLogo[0]"
                                                               class="fileName" onchange="changeFileName(this.id)">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control tf" readonly="readonly" id="picName_0"
                                                       name="productLogo[0]"
                                                       placeholder ="Browse your file" class="form-control input-sm">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <!--<span id = 'deleteRow_0' class = 'dlt btn' Style="display: none"><i class = 'fa fa-times' style = 'color:red;font-size:20px'></i></span>-->
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                    <br>
                    <a id="add_row" class="btn btn-warning pull-right addRow">Add Row</a>
                </div>
                <div class="box-footer">
                    <!--<a id="add_row" class="btn btn-success pull-left">Add Row</a>-->
                    <input type="button" name="save_product" value="Save Product" class="btn btn-success" onchange="sendFormData()">
                    <!--<a id='deleteRow_' class="pull-right btn btn-danger">Delete Row</a>-->
                </div><!-- /.box-footer -->
            </div>
        </form>
    </section>
</div>
<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">

                        function sendFormData() {
                            var pct = $('#productCatTitle').val()
                            var data = new FormData($('#myForm')[0]); //this will select all the form data in the data variable.                                       
                            $.ajax({
                                url: "productFile.php",
                                type: "POST",
                                data: data,
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function (data)
                                {
                                    $('#myForm')[0].reset();
                                    $('.checkedVal').val(0);
                                }

                            });
                        }

                        function changeFileName(id) {
                            var idSegments = id.split("_");
                            var rowId = idSegments[1];
                            var value = $("#picNames_" + rowId).val()
                            if (value) {
                                $("#picName_" + rowId).val(value);
                            }
                        }

                        $(document).on("click", ".addRow", function () {

                            var findPattern = /^(.*)(\d)+$/i;
                            var rowIndex = $(".QualificationRequirements tr").length - 1;
                            var cloneElement = ".QualificationRequirements tr:last";
                            $(cloneElement).clone().insertAfter(cloneElement).show()
                                    .find("*")
                                    .each(function () {
                                        var id = this.id || "";
                                        var match = id.match(findPattern) || [];
                                        if (match.length === 3) {
                                            var str = match[1].split("0");
                                            this.id = str[0] + (rowIndex)
                                            this.name = this.name.replace(/\d+/, rowIndex);//str[0] + (selectorIndex);
                                        }
                                        if (rowIndex > 0) {
                                            $("tbody tr td:last").html('\n\
<span id = "deleteRow_' + rowIndex + '" class = "dlt btn" Style="display: block">\n\
<i class = "fa fa-times" style = "color:red;font-size:20px"></i></span>');
                                        }
                                        $(cloneElement).find('input').val('');
                                        $(cloneElement).find('textArea').val('');
                                        $(cloneElement).find('select').val('');
                                        $(cloneElement).find('input[type="checkbox"]').removeAttr('checked');
                                        $(cloneElement).find('input[type="radio"]').removeAttr('checked');
//                                       $(cloneElement).find("input:radio").removeAttr("checked");
//                                        $(cloneElement).find('input:radio').prop('checked',false);
//                                        $(cloneElement).find('input').prop('checked',false);
                                    });

                            rowIndex++;
                        });


                        $(document).on("click", ".dlt", function () {
                            var id = this.id;
                            var idSegments = id.split("_");
                            var rowId = idSegments[1];
                            var cloneElement = ".QualificationRequirements tr:last";
                            if (rowId > 0) {
                                $(cloneElement).remove();
                            }
                            $("#deleteRow_0").attr('Style', 'display: none;');
                        });
</script>

<?php
include '../footerMenu.php';
?>