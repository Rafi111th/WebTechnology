<?php
if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
?>
<div class="order-content">
    <div class="order-header">
        <h1 style="display: inline; float: left; margin-left: 10px; font-family: Arial, Helvetica, sans-serif">
            <i class="fa fa-shopping-bag"></i>
            Order Management
        </h1>
    </div>
</div>
<?php } else {
    header("location: ?route=login");
}
?>