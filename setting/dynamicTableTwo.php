<?php
include '../headerMenu.php';
include '../config/datasource.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dynamic Table Two
        </h1>
        <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="productCatMstList.php"><i class="fa fa-dashboard"></i>Product List</a></li>
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
                            <div class="col-md-4">
                                <input type="text" name="productCatTitle" id="productCatTitle" value="" class="form-control">
                            </div>
                        </div>                              
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                Product Category Keyword
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="productCatKeyword" id="productCatKeyword" value="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body"> 
                    <table id="myTable" class="table table-bordered table-striped QualificationRequirements">
                        <thead class="bg-olive ">
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
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                echo "PCM ID PK" . $id . "<br/>";
                                ?> 
                                <!--******while start*******-->
                                <?php
                                $sqlDtl = "select * from product_cat_dtl where product_cat_mst='" . $id . "'";
                                echo "PCM ID" . $id . "<br/>";
                                echo $sqlDtl;
                                $resultDtl = mysqli_query($conn, $sqlDtl);
//                                $rowDtl = mysqli_fetch_array($resultDtl);
//                                $rowDtl = mysqli_fetch_array($resultDtl)
//                                        for($i=0;$i<$rowDtl;$i++){
                                $i = 0;
                                for($i=0;$i<($rowDtl = mysqli_fetch_array($resultDtl));$i++){  // start while   
//                                while ($rowDtl = mysqli_fetch_array($resultDtl)) { // start while   
                                    $stockType = $rowDtl['stock_type'];
                                    echo $stockType ;
                                    ?>


                                    <tr id='addr0' class="aa">
                                        <td>
                                            <select id="ietm_0" name="item[0]" class="selectBox">
                                                <option value="">Select One</option>
                                                <option value="1">Item 1</option>
                                                <option value="2">Item 2</option>
                                                <option value="3">Item 3</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name='pName<?php echo $i?>' id="pName_<?php echo $i?>"  class="form-control" value="<?php echo $rowDtl['product_name']; ?>"/>
                                        </td>
                                        <td>
                                            <textarea name='pDescription<?php echo $i?>' cols="50" rows="1" id="pDescription_<?php echo $i?>" class="borderColor"><?php echo $rowDtl['product_description']; ?></textarea>
                                        </td>
                                        <td>
                                            <input type="checkbox" name='activeList<?php echo $i?>' id="isActive_<?php echo $i?>" class="checkedVal borderColor" value='1'  <?php echo ($rowDtl['is_active']==1 ? 'checked' : '');?>/>
                                        </td>
                                        <td>
                                            <input type="radio" name='radioBtn<?php echo $i?>' id="redioBtnIn_<?php echo $i?>" class="radioBtnClass"  value="in" <?php echo ($stockType=="in")? 'checked' : '' ?>/><label>&nbsp;IN</label><br/>
                                            <input type="radio" name='radioBtn<?php echo $i?>' id="redioBtnOut_<?php echo $i?>" class="radioBtnClass"  value="out" <?php echo ($stockType=="out" ? 'checked' : '');?>/><label>&nbsp;OUT</label>
                                        </td>
                                        <td>
                                            <div class="form-group">                   
                                                <div class="col-lg-10 col-xs-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <span class="btn btn-info btn-file">
                                                            <!--<span class="myBtn">-->
                                                                <label>Browse...</label>                                                        
                                                                <input type="file" id="picNames_<?php echo $i?>" name="productLogo<?php echo $i?>"
                                                                       class="fileName" onchange="changeFileName(this.id)">
                                                            </span>
                                                        </span>
                                                        <input type="text" class="form-control tf" readonly="readonly" id="picName_<?php echo $i?>"
                                                               name="productLogo<?php echo $i?>"
                                                               placeholder ="Browse your file" class="form-control input-sm" value="<?php echo $rowDtl['product_logo_nm']; ?>">

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>                                      
                                            <span id = 'deleteRow_<?php echo $i?>' class = 'dlt btn'><i class = 'fa fa-times' style = 'color:red;font-size:20px'></i></span> 

                                        </td>
                                    </tr> 
                                    <?php                                   
                                }; //end while
                                ?> 
                                <!--*****while end*****-->
                            <?php } else {
                                ?> <tr id='addr0' class="aa">
                                    <td>
                                        <select id="ietm_0" name="item[0]" class="selectBox">
                                            <option value="">Select One</option>
                                            <option value="1">Item 1</option>
                                            <option value="2">Item 2</option>
                                            <option value="3">Item 3</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name='pName[]' id="pName_0"  class="form-control" value=""/>
                                    </td>
                                    <td>
                                        <textarea name='pDescription[]' cols="50" rows="1" id="pDescription_0" class="borderColor"></textarea>
                                    </td>
                                    <td>
                                        <input type="checkbox" name='activeList[0]' id="isActive_0" class="checkedVal borderColor" value="1"/>
                                    </td>
                                    <td>
                                        <input type="radio" name='radioBtn[0]' id="redioBtnIn_0" class="radioBtnClass"  value="in" onchange="setRadioBtnValue(this.id)"/><label>&nbsp;IN</label><br/>
                                        <input type="radio" name='radioBtn[0]' id="redioBtnOut_0" class="radioBtnClass"  value="out" onchange="setRadioBtnValue(this.id)"/><label>&nbsp;OUT</label>
                                    </td>
                                    <td>
                                        <div class="form-group">                   
                                            <div class="col-lg-10 col-xs-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-info btn-file">
                                                        <!--<span class="myBtn">-->
                                                            <label>Browse...</label>                                                        
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
                                        <!--<span id = 'deleteRow_0' class = 'dlt btn' Style = "display: none"><i class = 'fa fa-times' style = 'color:red;font-size:20px'></i></span>--> 

                                    </td>
                                </tr> 
                            <?php } ?>

                        </tbody>
                    </table>
                    <br>
                    <a id="add_row" class="btn btn-warning pull-right addRow">Add Row</a>
                </div>
                <div class="box-footer">
                    <!--<a id="add_row" class="btn btn-success pull-left">Add Row</a>-->
                    <input type="button" name="save_product" value="Save Product" class="btn btn-success" onclick="sendFormData()">
                    <!--<a id='deleteRow_' class="pull-right btn btn-danger">Delete Row</a>-->
                </div><!-- /.box-footer -->
            </div>
        </form>
    </section>
</div>
<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){
    $("#deleteRow_0").attr('Style', 'display: none;');
});
                        function sendFormData() {
                            var pct = $('#productCatTitle').val()
                            alert(pct)
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
                                    alert(data)
                                    $('#myForm')[0].reset();
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
                                        $(cloneElement).find('input[type="text"]').val('');
                                        $(cloneElement).find('textArea').val('');
                                        $(cloneElement).find('select').val('');
                                        $(cloneElement).find('input[type="checkbox"]').removeAttr('checked');
//                                        $(cloneElement).find('input[type="radio"]').uncheckableRadio();
//                                        $(cloneElement).find('input[type="radio"]').prop('checked',false);
//                                        $('input[type=radio]').uncheckableRadio();
                                    });

                            rowIndex++;
                        });


                        $(document).on("click", ".dlt", function () {
                            var id = this.id;
                            var idSegments = id.split("_");
                            var rowId = idSegments[1];
                             var rowIndex = $(".QualificationRequirements tr").length - 1;
//                            var cloneElement = ".QualificationRequirements tr:last";
                            var cloneElementId = $('#deleteRow_'+rowId);
                            var cloneElement = $(".QualificationRequirements tbody tr td:last");
                            alert(rowId+" rowId")
                            alert("cloneElement  "+cloneElement)
                            alert("rowIndex  "+rowIndex)
                            if (rowId >0) {
                                 //$(_this).closest(cloneElement).remove();
//                                $(cloneElement).remove();
//$("#myTable").deleteRow(rowId);
 $(this).parents('tr').remove();
//document.getElementById("myTable").deleteRow(rowId);
//$("#deleteRow_0").attr('Style', 'display: none;');

                            }
                            $("#deleteRow_0").attr('Style', 'display: none;');
                        });
</script>

<?php
include '../footerMenu.php';
?>