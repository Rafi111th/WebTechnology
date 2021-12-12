<?php
    if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
        if (!isset($_SESSION['message'])) {
            $_SESSION['message'] = 'You already have an active session !';
        }
        header("location:?route=dashboard");
    }
?>
<div class="login-content">
    
    <div class="card">
        <div class="login-logo" style="margin-bottom: 0px;">
            <img src="<?php echo $asset_url; ?>/images/khaboi-logo.png" height="150" width="150" />
        </div>
        <div class="card-body login-card-body" style="padding-top: 0px;">
            <h3 class="login-box-msg">Sign in to start your session</h3>

            <form action="controllers/login.php" method="post">
                <div class="input-group">
                    <input type="email" name="email" class="custom-input" placeholder="Email">
                </div>

                <div class="input-group margin-top-1">
                    <input type="password" name="password" class="custom-input" placeholder="Password">
                </div>

                <div class="margin-top-1">
                    <div class="icheck-primary">
                        <input type="checkbox" name="remember_me" id="remember">
                        <label for="remember">
                            Remember Me
                        </label>
                    </div>
                    <button name="login" type="submit" class="margin-top-1 custom-button text-white background-blue">Sign In</button>
                </div>
            </form>
            <p class="margin-top-1">
                <a href="forgot-password.html">Forgot password ? </a>
            </p>
            <p class="margin-top-1">
                <a href="?route=register" class="text-center">Register as new</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

	
<script type="text/javascript"> 
    $(document).ready(function() {

    })
</script>