<!-- header -->
<?php include './includes/header.php'; ?>

<!-- login form section -->
<div class="container-fluid p-0">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start"
        style="background-image: url('assets/images/pexels-minan1398-694740.jpg'); height: 100vh; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-1 mb-lg-0">
                    
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 mt-lg-5">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">

                            <h3 class="my-1 fw-bold ls-tight">Login</h3>

                            <p style="color: hsl(217, 10%, 50.8%)">
                                We’re glad to see you again. Log in to continue exploring your favorite books, track
                                your
                                orders, and enjoy a personalized shopping experience tailored just for you.
                            </p>

                            <!-- login form -->
                            <form id="login_form" action="" method="post">

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

                                <!-- password -->
                                <div class="col-md-6 mb-4 w-100">
                                    <div class="input-group">
                                        <div class="form-floating">
                                            <input type="password" class="item form-control border-end-0" id="password"
                                                name="password" placeholder="">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="input-group-text border-start-0 bg-transparent">
                                            <button type="button" class="btn border-0 btn-toggle-password-visibility">
                                                <i class="bi bi-eye-slash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback d-block error-message text-danger"></div>
                                </div>

                                <!-- submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4 w-100"> Register </button>

                                <!-- reset password -->
                                <div class="justify-content-end">
                                    <p class="small mb-1 pb-lg-2"><a class="text-black-50"
                                            href="./views/reset.php">Forgot
                                            password?</a></p>
                                    <p>Don't have an account? <a href="/register.php" class="link-info">Register
                                            here</a></p>
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
<?php include './includes/footer.php'; ?>