<?php include("header.php"); ?>
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-40"
             style="background-image: url(<?= base_url('assets/img/maps/map3.png'); ?>);">
        <div class="container u-bg-overlay__inner">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h1 class="g-color-white text-uppercase mb-2">Create an account</h1>
                    <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-1"></div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center no-gutters">
                <div class="col-lg-5 g-bg-white g-rounded-right-5--lg-up">
                    <div class="g-pa-50">
                        <form class="g-py-2">
                            <p class="mb-2 text-center">Create an account with us to enjoy an amazing deal.</p>
                            <div class="mb-4">
                                <label for="full-name">Full name</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-finance-128 u-line-icon-pro"></i></span>
                                    </div>
                                    <input autocapitalize="off" autocomplete="off" class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="text" name="name" id="signup-name" placeholder="Full name">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="phone-number">Phone number</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-finance-067 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="text" name="phone" id="signup-phone" placeholder="Phone number">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email">Email</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-communication-062 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="email" name="email" id="signup-email" placeholder="Your email">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="referral">Your referral</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-communication-062 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="text" name="referral" id="signup-referral" readonly placeholder="Your referral" value="<?= $referral; ?>">
                                </div>
                            </div>
                            <input type="hidden" name="ref_code" id="ref_code" value="<?= $referral_code; ?>" />

                            <div class="mb-4">
                                <label for="password">Password</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-media-094 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="password" name="password" id="signup-password" placeholder="Password">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="confirm-password">Confirm Password</label>
                                <div class="input-group rounded">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-gray-light-v4 g-color-gray-dark-v5"><i
                                                    class="icon-media-094 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-pl-0 g-pr-15 g-py-13"
                                           type="password" id="confirm-password" name="confirm_password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13 sign-up"
                                    type="button">Sign Up
                            </button>

                            <div class="mb-3 g-py-4">
                                <a href="<?= base_url('auth/'); ?>">Login to your account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php"); ?>