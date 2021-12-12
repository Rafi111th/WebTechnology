<?php
    if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
?>
<div class="dashboard-content" style="display: flex; flex-direction: row;">
    <div class="watch">
        <?php include('_partials/watch.php'); ?>
    </div>

    <div class="dashboard-items">
        <div class="dashboard-items-block">
            <div class="small-box background-green">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Users</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box ">
                <div class="inner">
                    <h3>5</h3>
                    <p>New Restaurants</p>
                </div>
                <div class="icon">
                    <i class="fa fa-utensils"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box background-light-green">
                <div class="inner">
                    <h3>105</h3>
                    <p>Total Restaurants</p>
                </div>
                <div class="icon">
                    <i class="fa fa-utensils"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box background-orange">
                <div class="inner">
                    <h3>25</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box background-light-green">
                <div class="inner">
                    <h3>162</h3>
                    <p>Total Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box background-orange">
                <div class="inner">
                    <h3>95</h3>
                    <p>Todays Total Invoice</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-invoice-dollar"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="dashboard-items-block">
            <div class="small-box background-green">
                <div class="inner">
                    <h3>$ 95</h3>
                    <p>Todays Total Collection</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar-sign"></i>
                </div>
                <a href="#" class="small-box-footer"> View More <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php } else {
        header("location: ?route=login");
    }
?>