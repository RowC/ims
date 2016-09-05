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
        <div class="box box-warning">
            <div class="box-body">
                <p>Click the button to add a new row at the first position of the table and then add cells and content.</p>

                <table id="myTable" class="table table-bordered table-striped QualificationRequirements">
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
                            <td>
                                <span id = 'deleteRow_0' class = 'dlt btn'  disabled=""><i class = 'fa fa-times' style = 'color:red;font-size:20px'></i></span>
                            </td>
                        </tr> 
                    </tbody>
                </table>
                <br>
                <a id="add_row" class="btn btn-warning pull-right" onclick="appendRow()">Add Row</a>
            </div>
        </div>
    </section>
</div>
<script src="../webapp/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
    
    function appendRow() {
         var findPattern = /^(.*)(\d)+$/i;
          var selectorIndex = $(".QualificationRequirements tr").length-1;
           var cloneElement = ".QualificationRequirements tr:last";
           //var lastRow = 
          alert(selectorIndex);
//    $(".QualificationRequirements").append($(".QualificationRequirements tr:last").clone());
 $(cloneElement).clone().insertAfter(cloneElement).show()
     .find("*")
                .each(function (){
                    var id = this.id || "";
                    var match = id.match(findPattern) || [];
                    if (match.length == 3) {
                        var str = match[1].split("0");
                        this.id = str[0] + (selectorIndex)
                        this.name = this.name.replace(/\d+/, selectorIndex);//str[0] + (selectorIndex);
                    }
                    
});

                    selectorIndex++;
    }  
//    var clone = $("#table-1 tr:last").clone().find('input').val('').end().insertAfter("#table-1 tr:last");

//    var i = 1;
//    $("#add_row").click(function () {
//        alert("ll")
//        $("tr:last").clone("<tr><td>"+(i + 1)+"</td></tr>");
//             $('#tab_logic').clone('<tr id="addr' + (i + 1) + '"><td>"'+(i + 1)+'"</td></tr>');
//        i++;       
//    });
////                      
//    $(document).on("click", ".dlt", function () {
//        var id = this.id;
//        var value = this.value;
//        var idSegments = id.split("_");
//        var rowId = idSegments[1];
//        if (rowId > 0) {
//            $("#addr" + (i - 1)).html('');
//            i--;
//        }
//    });

</script>

<?php
include '../footerMenu.php';
?>