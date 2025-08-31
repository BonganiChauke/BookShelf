<!-- header -->
<?php include './includes/header.php'; ?>

<!-- register header section -->
<div class="container-fluid p-0">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start"
        style="height: 100vh; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">Create Account
                        <br />
                        <span class="text-primary">Do more</span>
                    </h1>

                    <p style="color: hsl(217, 10%, 50.8%)">
                        Join our bookstore community and unlock a world of knowledge at your fingertips. By creating an
                        account, you can easily browse and purchase books, save your favorites, manage your orders, and
                        get personalized recommendations. Your account also allows you to securely track your purchases
                        and stay updated with the latest arrivals and special offers.
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
                                            <div class="form-floating">
                                                <input type="password" class="item form-control border-end-0"
                                                    id="password" name="password" placeholder="">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="input-group-text border-start-0 bg-transparent">
                                                <button type="button"
                                                    class="btn border-0 btn-toggle-password-visibility"></button>
                                            </div>
                                        </div>
                                        <span class="error-msg text-danger"></span>
                                    </div>

                                    <!-- confirm password -->
                                    <div class="col-md-6 mb-4">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="password" class="item form-control"
                                                    id="confirm_password" name="confirm_password" placeholder="">
                                                <label for="confirm_password">Confirm Password</label>
                                            </div>
                                            <div class="input-group-text border-start-0 bg-transparent">
                                                <button type="button"
                                                    class="btn border-0 btn-toggle-password-visibility"></button>
                                            </div>
                                        </div>
                                        <span class="error-msg text-danger"></span>
                                    </div>

                                </div>

                                <!-- submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4 w-100"> Register </button>


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