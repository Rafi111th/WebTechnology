<nav class="sidebar-navigation">

	<ul>
        <a href="?route=dashboard" style="float: left; margin-right: 20px;  margin-left: 20px;">
            <img src="<?php echo $asset_url; ?>/images/khaboi-logo.png" height="40" width="40" />
        </a>
		<li class="<?php if(isset($_GET['route']) && $_GET['route'] == 'dashboard') { echo 'active'; } ?>">
            <a href="?route=dashboard">
                <i class="fa fa-desktop"></i>
                <span >Dashboard</span>
            </a>
		</li>

		<li class="<?php if(isset($_GET['route']) && $_GET['route'] == 'admin/index') { echo 'active'; } ?>">
            <a href="?route=admin/index">
                <i class="fa fa-users"></i>
                <span >Admin</span>
            </a>
		</li>

		<li class="<?php if(isset($_GET['route']) && $_GET['route'] == 'order') { echo 'active'; } ?>">
            <a href="?route=order">
                <i class="fa fa-shopping-bag"></i>
                <span >Orders</span>
            </a>
		</li>

		<li class="<?php if(isset($_GET['route']) && $_GET['route'] == 'report') { echo 'active'; } ?>">
            <a href="?route=report">
                <i class="fa fa-table"></i>
                <span >Reports</span>
            </a>
		</li>

		<li class="<?php if(isset($_GET['route']) && $_GET['route'] == 'area-manager') { echo 'active'; } ?>">
            <a href="?route=area-manager">
                <i class="fa fa-cogs"></i>
                <span >Area Manager</span>
            </a>
		</li>

		<li>
            <a href="?route=logout">
                <i class="fa fa-sign-out-alt"></i>
                <span >Logout</span>
            </a>
		</li>
	</ul>
</nav>