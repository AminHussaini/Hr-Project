<?php include('inc/header.php'); ?>
<div class="alert alert-danger alert-dismissible fade hide pos-fixed login-error-box" role="alert">
    <strong>Error !</strong>
    <p class="login-error"></p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="login-screen">
    <div class="login-box">
        <div class="login-box-img">
            <div class="icon-box">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <h5 class="title"><span>Login</span></h5>
        <form class="login-box-form needs-validation" novalidate>
            <div class="input-block">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter User Name" aria-describedby="inputGroupPrepend" required>
                    <div class="valid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="input-block">
                <label for="validationCustom01">Password <a href="forgot.php" class="forgot-password">Forgot Password? <i class="icon-user"></i></a></label>
                <div class="input-block mb-0">
                    <input type="password" class="form-control password" id="validationCustom01" placeholder="Enter Password" required>
                </div>
                <div class="invalid-feedback">
                    Looks good!
                </div>
                <div class="password-toggle-btn">
                    <label><input type="checkbox" /> Show Password</label>
                </div>
            </div>
            <div class="input-block">
                <button class="btn login">Login</button>
            </div>
        </form>
    </div>
</div>
<?php include('inc/footer.php'); ?>