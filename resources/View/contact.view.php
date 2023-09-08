<?php require '../public/head.view.php'; ?>

<main>
    <section class="donate-section">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
            <h3 class="mb-4">Sign Up For Our Courses</h3>

            <div class="row">
                <!-- <div class="col-lg-5 col-12 mx-auto" id="First-Contact-Form">
                <form
                    class="custom-form subscribe-form"
                    action=""
                    method="post"
                    role="form"
                >
                    <h5 class="mb-4">Sign Up Now</h5>
                    <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="Email Address"
                    required
                    />
                </form>
                </div> -->

                <div class="col-lg-12 col-12">
                <h5 class="mt-1">Personal Info</h5>
                </div>
                <div class="col-lg-5 col-12 mx-auto" id="Contact-Form">
                <form
                    class="custom-form contact-form"
                    action=""
                    method="POST"
                    role="form"
                >
                    <h2>Contact form</h2>

                    <p class="mb-4">
                    Or, you can just send an email:
                    <br /><a href="#">info@gsisecurity.co.za</a>
                    </p>
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <input
                        type="text"
                        name="first-name"
                        id="first-name"
                        class="form-control"
                        placeholder="Name"
                        required
                        />
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <input
                        type="text"
                        name="last-name"
                        id="last-name"
                        class="form-control"
                        placeholder="Last Name"
                        required
                        />
                    </div>
                    </div>

                    <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="Email Address"
                    required
                    />

                    <textarea
                    name="message"
                    rows="5"
                    class="form-control"
                    id="message"
                    placeholder="What can we help you with?"
                    ></textarea>

                    <button type="submit" class="form-control">
                    Subscribe
                    </button>
                </form>
                </div>

                <!-- <div class="col-lg-12 col-12">
                <h5 class="mt-4 pt-1">Choose Payment</h5>
                </div>

                <div class="col-lg-12 col-12 mt-2">
                <div class="form-check">
                    <input
                    class="form-check-input"
                    type="radio"
                    name="DonationPayment"
                    id="flexRadioDefault9"
                    />
                    <label class="form-check-label" for="flexRadioDefault9">
                    <i class="bi-credit-card custom-icon ms-1"></i>
                    Debit or Credit card
                    </label>
                </div>

                <div class="form-check">
                    <input
                    class="form-check-input"
                    type="radio"
                    name="DonationPayment"
                    id="flexRadioDefault10"
                    />
                    <label class="form-check-label" for="flexRadioDefault10">
                    <i class="bi-paypal custom-icon ms-1"></i>
                    Paypal
                    </label>
                </div>

                <button type="submit" class="form-control mt-4">
                    Submit Donation
                </button>
                </div> -->
            </div>
        </div>
        </div>
    </div>
    </section>
</main>

    <?php require '../public/footer.view.php'; ?>