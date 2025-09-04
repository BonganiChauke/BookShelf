<!-- header -->
<?php include '../includes/header.php'; ?>

<!-- reset password form section -->
<div class="container-fluid p-0">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start"
        style="background-image: url('../assets/images/pexels-polina-zimmerman-3747523.jpg'); background-color: rgba(0, 0, 0, 0.4); height: 100vh; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-1 mb-lg-0">

                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 mt-lg-5">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">

                            <h3 class="my-1 fw-bold ls-tight">Reset</h3>

                            <p style="color: hsl(217, 10%, 50.8%)">
                                Don’t worry, it happens! Enter your email address and we’ll help you set up a new
                                password so you can get back to enjoying your bookstore experience.
                            </p>

                            <!-- reset form -->
                            <form id="reset_form" action="" method="post">

                                <!-- error message alert -->
                                <div class="alert alert-danger alert-dismissible fade show d-none" id="alert-danger"
                                    role="alert">
                                    <span id="error-message"></span>
                                </div>

                                <!-- success message alert -->
                                <div class="alert alert-success alert-dismissible fade show d-none" id="alert-success"
                                    role="alert">
                                    <span id="success-message"></span>
                                </div>

                                <!-- email input -->
                                <div class="form-floating mb-4">
                                    <input type="email" class="item form-control" name="email" id="email"
                                        placeholder="">
                                    <label for="email">Email</label>
                                    <span class="error-msg text-danger"></span>
                                </div>

                                <!-- password and password confirmation row -->
                                <div class="row">

                                    <!-- password -->
                                    <div class="col-md-6 mb-4">
                                        <div class="input-group">
                                            <div class="form-floating flex-grow-1">
                                                <input type="password" class="item form-control border-end-0"
                                                    id="password" name="password" placeholder="">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-group-text border-start-0 bg-transparent">
                                                <button type="button"
                                                    class="btn border-0 btn-toggle-password-visibility">
                                                    <i class="bi bi-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback d-block error-message text-danger"></div>
                                    </div>

                                    <!-- confirm password -->
                                    <div class="col-md-6 mb-4">
                                        <div class="input-group">
                                            <div class="form-floating flex-grow-1">
                                                <input type="password" class="item form-control border-end-0"
                                                    id="confirm_password" name="confirm_password" placeholder="">
                                                <label for="confirm_password">Confirm Password</label>
                                            </div>
                                            <div class="input-group-text border-start-0 bg-transparent">
                                                <button type="button"
                                                    class="btn border-0 btn-toggle-password-visibility">
                                                    <i class="bi bi-eye-slash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback d-block error-message text-danger"></div>
                                    </div>

                                </div>

                                <!-- submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4 w-100"> Reset </button>

                                <!-- reset password -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">
                                        Already have an account?
                                        <a href="/login.php" class="link-info fw-semibold">Login</a>
                                    </p>
                                    <p class="mb-0">
                                        Don't have an account?
                                        <a href="/register.php" class="link-info fw-semibold">Register</a>
                                    </p>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>


<!-- footer -->
<?php include '../includes/footer.php'; ?>