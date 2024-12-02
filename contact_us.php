<?php include "layout/header.php" ?>

<!-- Hero Start -->
<div class="container-fluid bg-info py-5 bg-hero" style="margin-bottom: 90px;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-8 ">
                <h3 class="display-1 text-dark">Contact Us</h3>

            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Contact Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 mb-5" style="border-right:2px solid rgba(105, 189, 78, 0.2);">
                <h4 class="text-info">Please Feel Free To Contact Us</h4>
                <hr class="w-24 text-secondary mb-4" style="opacity: 1;">
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor
                </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-info me-3"></i>Maharashtra</p>
                <p class="mb-2"><i class="fa fa-envelope text-info me-3"></i>kamblesujit220@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-info me-3"></i>+91 8421XXXXXX</p>
            </div>
            <div class="col-lg-8">
                <div class="bg-light p-5  mb-5">
                    <!-- Contact Form -->
                    <form action="contact_form.php" method="POST">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" id="name" name="name" required minlength="3" maxlength="50"
                                    pattern="[A-Za-z\s]+"
                                    title="Name should only contain letters (A-Z, a-z) and spaces, between 3 and 50 characters."
                                    class="form-control bg-white border-0" placeholder="Full Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" required
                                    title="Please enter a valid email address." class="form-control bg-white border-0"
                                    placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="tel" id="contact" name="contact" class="form-control bg-white border-0"
                                    placeholder="Contact Number" required pattern="\d{10}" maxlength="10"
                                    title="Please enter a valid 10-digit contact number." style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea id="message" name="message" class="form-control bg-white border-0" rows="5"
                                    placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success w-100 py-3" type="submit" value="send">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php include "layout/footer.php" ?>