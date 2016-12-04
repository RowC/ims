<?php
include '../headerMenu.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Dynamic Table One
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productCatMst.php"><i class="fa fa-dashboard"></i>Product List</a></li>
            <!--<li class="active">Dashboard</li>-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <p>Click the button to add a new row at the first position of the table and then add cells and content.</p>

                <table id="myTable" class="table table-bordered  table-striped">
                    <thead class="bg-maroon-gradient">
                        <tr>
                            <th>Item</th>
                            <th>Product Name</th>
                            <th>Production Description</th>
                            <th>Is Active</th>
                            <th>Product Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--<tr class="dRow" style="border: 1px solid #ccc">-->
                        <tr class="dRow">
                            <td style="border: 1px solid #ccc">                                
                                <select id="ietm_0" name="item[0]" class="form-control-customs">
                                    <option value="">Select One</option>
                                    <option value="1">Item 1</option>
                                    <option value="2">Item 2</option>
                                    <option value="3">Item 3</option>
                                </select>
                            </td>
                            <td style="border: 1px solid #ccc">
                                <input type="text" name='pName[]' id="pName_0"  class="form-control-customs"/>
                            </td>
                            <td style="border: 1px solid #ccc">
                                <textarea name='pDescription[]' col="1" rows="1" id="pDescription_0" class="form-control-customs"></textarea>
                            </td>
                            <td style="border: 1px solid #ccc">
                                <input type="checkbox" name='activeList[0]' id="isActive_0" class="checkedVal" value='1'/>
                            </td>
                            <td style="border: 1px solid #ccc">
                                <div class="form-group">                   
                                    <div class="col-lg-10 col-xs-10">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn  btn-file form-control-customs">
                                                <!--<span class="btnCustom">-->
                                                    <i class="fa fa-paperclip"></i>
                                                    <input type="file" id="picNames_0" name="productLogo[0]"
                                                           class="fileName" onchange="getFileName(this.id)">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control-customs tf" readonly="readonly" id="picName_0"
                                                   name="productLogo[0]"
                                                   placeholder ="Browse your file" class="form-control-customs input-sm">

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="border: 1px solid #ccc">
                                <span onload="dlt(this.id);" id = 'deleteRow_0' class = 'dlt btn' onclick="removeDetail('dRow', this)" disabled=""><i class = 'fa fa-times' style = 'color:red;font-size:20px'></i></span>
                            </td>
                        </tr> 
                    </tbody>
                </table>
                <br>
                <button onclick="addMore('dRow')">Try it</button>
            </div>
        </div>
    </section>
</div>
<script>

    function dlt(id) {
        alert("hh")
        var idSegments = id.split("_");
        var rowId = idSegments[1];
        if (rowId > 1) {
            $("#deleteRow_" + rowId).removeAttr("style", "display:none");
        }
    }

    function addMore(selectorClass) {
        var findPattern = /^(.*)(\d)+$/i;
        var selectorIndex = $("." + selectorClass).length;
        var cloneElement = "." + selectorClass + ":last";
        //var removeBtn = '<div class="box-footer"><div class="pull-right"><a class="btn btn-block btn-danger btn-xs" onclick="removeDetail(\'' + selectorClass + '\', this);"><i class="fa fa-minus"></i>Remove</a></div></div>';

        $(cloneElement).clone().insertBefore(cloneElement).show()
                .find("*")
                .each(function () {
                    var id = this.id || "";
                    var match = id.match(findPattern) || [];
                    if (match.length == 3) {
                        var str = match[1].split("0");
                        this.id = str[0] + (selectorIndex)
                        this.name = this.name.replace(/\d+/, selectorIndex);//str[0] + (selectorIndex);
                    }                   
        if (selectorIndex > 0) {
            var idSegments = id.split("_");
            var rowId = idSegments[1];
            $("#deleteRow_" + rowId).removeAttr("disabled","disabled");
        }
                });
        $('.datePick').datepicker('update');
        $(cloneElement).find('input').val('');
        $(cloneElement).find('textArea').val('');
        $(cloneElement).find('select').val('');        

        selectorIndex++;

        return true;
    }

    function removeDetail(removeElementClass, _this) {
        var findPattern = /^(.*)(\d)+$/i;
        var removeElement = "." + removeElementClass;
        $(_this).closest(removeElement).remove();
        $(removeElement).each(function (i, obj) {
            $(obj).find("*")
                    .each(function (j, elem) {
                        var id = this.id || "";
                        var match = id.match(findPattern) || [];
                        if (match.length == 3) {
                            var str = match[1].split("0");
                            this.id = str[0] + (i)
                            this.name = this.name.replace(/\d+/, i);
                        }
                    });
        });
        return true;
    }
</script>

<?php
include '../footerMenu.php';
?>