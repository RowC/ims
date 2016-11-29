<?php
//include ('../config/datasource.php');

function getRoleList() {
    global $conn;
    $get_pro = "select * from auth_role";
    $run_get_pro = mysqli_query($conn, $get_pro);
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $role_id = $row_pro['id'];
        $role_name = $row_pro['authority'];

        echo "<tr>
                <td width='10'> 
                    <input type='checkbox' name='configAttribute[]' value='$role_id'>
                </td>
               <td>$role_name</td>
            </tr>                            
";
    }
}

?>
