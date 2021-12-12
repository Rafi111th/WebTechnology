<?php
if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
?>
<div class="area-manager-content">
    <div class="area-manager-header">
        <h1 style="display: inline; float: left; margin-left: 10px; font-family: Arial, Helvetica, sans-serif">
            <i class="fa fa-cogs"></i>
            Area Managers
        </h1>
    </div>
</div>
<?php } else {
    header("location: ?route=login");
}
?>