<?php include("header.php"); ?>
    <section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-40"
             style="background-image: url(<?= base_url('assets/img/maps/map3.png'); ?>);">
        <div class="container u-bg-overlay__inner">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="g-color-white text-uppercase mb-4">Retrieve Your Password</h1>
                    <?php $this->load->view('msg_view'); ?>
                    <div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center no-gutters">
                <div class="col-lg-5 g-bg-teal g-rounded-left-5--lg-up">
                    <div class="g-pa-50">
                        <form class="g-py-15">
                            <div class="mb-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text g-width-45 g-brd-right-none g-brd-white g-color-white"><i
                                                    class="icon-finance-067 u-line-icon-pro"></i></span>
                                    </div>
                                    <input class="form-control g-color-black g-brd-left-none g-brd-white g-bg-transparent g-color-white g-placeholder-white g-pl-0 g-pr-15 g-py-13"
                                           type="text" id="login-username" placeholder="Your Email">
                                </div>
                            </div>

                            <div class="g-mb-40">
                                <button class="btn btn-md btn-block u-btn-primary rounded text-uppercase g-py-13 log-in"
                                        type="submit">Retrieve My Password
                                </button>
                            </div>
                        </form>
                        <div class="text-center g-pos-rel pb-2 g-mb-60">
                            <div class="d-inline-block w-100 g-height-1 g-bg-white"></div>
                            <span class="u-icon-v2 u-icon-size--lg g-brd-white g-color-white g-bg-teal g-font-size-default rounded-circle text-uppercase g-absolute-centered g-pa-24">OR</span>
                        </div>

                        <a href="<?= base_url('auth/'); ?>" class="btn btn-block u-btn-facebook rounded text-uppercase g-py-13 g-mb-15 ">
                            <span class="g-hidden-xs-down"></span> Login My Account
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include("footer.php"); ?>