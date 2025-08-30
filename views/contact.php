<!-- header included -->
<?php include '../includes/header.php'; ?>

<!-- contact header section -->
<div class="container-fluid p-0">
    <div class="hero-section text-white d-flex align-items-center"
        style="height: 100vh; background-size: cover; background-position: center;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Get in touch</h1>
            <p class="lead">Browse thousands of books from your favorite authors</p>

        </div>
    </div>
</div>

<!-- contact form -->
<section class="h-100 h-custom">

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">

                <div class="card rounded-3">

                    <img src="../assets/images/pexels-pixabay-159711.jpg"
                        style="border-top-left-radius: .3rem; border-top-right-radius: .3rem" alt="contact form image">

                    <div class="card-body p-4 p-md-3">

                        <h3 class="mb-3 pb-2 pb=md-0 mb-md-2 px-md-2">Contact US</h3>

                        <!-- contact form -->
                        <form class="px-md-2" id="save_message" action="process_contact.php" method="POST">

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

                            <!-- first name input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="first_name" name="name" class="item form-control"
                                    placeholder="" />
                                <label class="form-label" for="first_name">First Name</label>
                                <span class="error-msg text-danger"></span>
                            </div>

                            <!-- last name input -->
                            <div class="form-floating mb-4">
                                <input type="text" id="last_name" name="last_name" class="item form-control"
                                    placeholder="" />
                                <label class="form-label" for="last_name">Last Name</label>
                                <span class="error-msg text-danger"></span>
                            </div>

                            <!-- email input -->
                            <div class="form-floating mb-4">
                                <input type="email" class="item form-control" name="email" id="email" placeholder="">
                                <label for="email">Email</label>
                                <span class="error-msg text-danger"></span>
                            </div>

                            <!-- phone number input -->
                            <div class="form-floating mb-4">
                                <input type="number" class="item form-control" name="phone" id="phone_number"
                                    placeholder="">
                                <label for="phone_number">Phone Number</label>
                                <span class="error-msg text-danger"></span>
                            </div>

                            <!-- message input -->
                            <div class="form-floating mb-4">
                                <textarea class="item form-control" name="message" placeholder="" id="message"
                                    style="height: 250px"></textarea>
                                <label for="message">Message</label>
                                <span class="error-msg text-danger"></span>
                            </div>

                            <!-- button to save -->
                            <button type="submit" id="save_message" class="btn btn-primary w-100 btn-block">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</section>

<!-- footer -->
<?php include '../includes/footer.php'; ?>