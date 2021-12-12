<?php
if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
?>
<div class="report-content">
    <div class="report-header">
        <h1 style="display: inline; float: left; margin-left: 10px; font-family: Arial, Helvetica, sans-serif">
            <i class="fa fa-table"></i>
            Reports
        </h1>
    </div>
</div>
<?php } else {
    header("location: ?route=login");
}
?>