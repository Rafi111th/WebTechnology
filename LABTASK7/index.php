<?php
include('model/db_connect.php');
?>

<?php include($base_url . '/views/_partials/header.php'); ?>

<?php
if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
	include($base_url . '/views/_partials/topNav.php');
}
?>
<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="padding-top: 50px;">
		<?php
		if (isset($_SESSION['message']) || isset($_SESSION['error'])) {
		?>
			<div class="alert-div">
				<?php
				if (isset($_SESSION['message'])) {
					echo "<span>" . $_SESSION['message'] . "</span>";
					unset($_SESSION['message']);
				} else if (isset($_SESSION['error'])) {
					echo "<span style='color: #b90000;'>" . $_SESSION['error'] . "</span>";
					unset($_SESSION['error']);
				}
				?>
				<button type="button" class="custom-button alert-cros-button">
					&#10005;
				</button>
			</div>
		<?php } ?>

		<?php
		// echo $_COOKIE['login_info'];
		// setcookie("login_info", "", time() - 3600, '/');
		?>
		<!-- dynamic content will be loaded -->
		<?php include($base_url . '/routing/route.php'); ?>
	</div>
	<!-- /.content-wrapper -->

	<!-- footer -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2021 <a href="#">Khaboi</a>.</strong> All rights reserved.
	</footer>
	<!-- footer end -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
	$(".alert-cros-button").on('click', function() {
		$(this).parent().slideUp(300);
	});
</script>

</body>

</html>