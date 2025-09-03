<!-- header -->
<?php include './includes/header.php'; ?>

<!-- register header section -->
<div class="container-fluid p-0">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start"
        style="background-color: rgba(0, 0, 0, 0.4); background-image: url('assets/images/pexels-cottonbro-6214934.jpg'); height: 100vh; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mt-4 mb-4 mb-lg-4 text-white">
                    <h1 class="my-3 display-4 fw-bold">Create Account</h1>
                    <h3><span>Your Reading Journey Starts Here</span></h3>
                    <p class="lead">
                        Join our bookstore community and unlock a world of knowledge at your fingertips. By creating an
                        account, you can easily browse and purchase books, save your favorites, manage your orders, and
                        get personalized recommendations.
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 mt-lg-5">
                    <div class="card">

                        <div class="card-body py-5 px-md-5">

                            <!-- register form -->
                            <form id="register_form" action="" method="post">

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

                                <!-- first and last name row -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <!-- first name input -->
                                        <div class="form-floating mb-2">
                                            <input type="text" id="first_name" name="name" class="item form-control"
                                                placeholder="" />
                                            <label class="form-label" for="first_name">First Name</label>
                                            <span class="error-msg text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <!-- last name input -->
                                        <div class="form-floating mb-2">
                                            <input type="text" id="last_name" name="last_name" class="item form-control"
                                                placeholder="" />
                                            <label class="form-label" for="first_name">Last Name</label>
                                            <span class="error-msg text-danger"></span>
                                        </div>
                                    </div>

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
                                <button type="submit" class="btn btn-primary btn-block mb-4 w-100"> Register </button>

                                <!-- login and reset account -->
                                <div class="justify-content-end">
                                    <p class="small mb-1 pb-lg-2"><a class="text-black-50"
                                            href="./views/reset.php">Forgot
                                            password?</a></p>
                                    <p>Already have an account? <a href="/login.php" class="link-info">Login</a></p>
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