<?php
    if (isset($_COOKIE['logged']) || isset($_SESSION['logged'])) {
        if (!isset($_SESSION['message'])) {
            $_SESSION['message'] = 'You already have an active session !';
        }
        header("location:?route=dashboard");
    }
?>

<div class="register-content">
    
    <div class="card">
        <div class="register-logo" style="margin-bottom: 0px;">
            <img src="<?php echo $asset_url; ?>/images/khaboi-logo.png" height="150" width="150" />
        </div>
        <div class="card-body login-card-body" style="padding-top: 0px;">
            <h3 class="login-box-msg">Sign up as admin !</h3>

            <form action="controllers/register.php" method="post">

                <div class="input-group">
                    <input type="text" name="name" class="custom-input" placeholder="Full Name">
                </div>

                <div class="input-group margin-top-1">
                    <input type="email" name="email" class="custom-input" placeholder="Email">
                </div>

                <div class="input-group margin-top-1">
                    <input type="password" name="password" class="custom-input" placeholder="Password">
                </div>

                <div class="input-group margin-top-1">
                    <input type="password" name="confirm_password" class="custom-input" placeholder="Confirm Password">
                </div>

                <div class="margin-top-1">
                    <button name="register" type="submit" class="margin-top-1 custom-button text-white background-green">Sign Up</button>
                </div>
            </form>
            
            <p>
                <a href="?route=login" class="text-center">Already have an account ?</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

<script type="text/javascript"> 
    $(document).ready(function() {
    })
</script>