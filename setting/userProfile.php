<?php
if (!isset($_SESSION)) {
    session_start();
}
include '../headerMenu.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


    </section>
    <section class="content">
        <div class="panel">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <?php
                echo 'Hello...' . $_SESSION["username"];
                ?>
            </div>
        </div>
    </section>
</div>
<?php
include '../footerMenu.php';
?>
