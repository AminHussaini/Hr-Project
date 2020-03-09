<?php include('inc/header.php'); ?>
<div class="forgot-screen">
    <div class="forgot-box">
        <div class="forgot-box-img">
            <div class="icon-box">
                <i class="fas fa-user"></i>
            </div>
        </div>

        <h5 class="title"><span>Forgot Password</span></h5>
        <form class="forgot-box-form needs-validation" novalidate>
            <div class="input-block">
                <label for="validationCustomEmail">Email Address</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="validationCustomEmail" placeholder="Enter Email Address" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                        Please choose a Email.
                    </div>
                </div>
            </div>
            <div class="input-block">
                <button class="btn reset" type="submit">Reset Password</button>
            </div>
            <label>Remember your password? <a href="login.php" class="text-blue">Login </a></label>
        </form>
    </div>
</div>
<?php include('inc/footer.php'); ?>