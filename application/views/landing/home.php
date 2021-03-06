<?php include("header.php");?>
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall"
             data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-bottom-center"
             style="height: 120%; background-image: url(assets/img/marskonnect_cover);"></div>

        <div class="container g-py-200">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="g-color-gray-light-v11 g-font-weight-300 color-white g-font-size-40 g-line-height-1_2 mb-4">Taking extra <b>leap</b>
                        <br>to <b>konnect</b> you.
                    </h3>
                    <span class="d-block g-color-aqua g-font-size-16 mb-5">up to 90days usage</span>
                        <a class="btn btn-primary u-link-v5 g-rounded-100 btn-lg g-color-white"
                           <?php if($this->session->userdata('logged_in')) : ?>
                                href="<?= base_url('dashboard/'); ?>" >Konnect Now
                            <?php else : ?>
                                href="<?= base_url('auth/'); ?>" >Konnect Now
                            <?php endif; ?>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="g-pt-50">
        <div class="container">
            <h3 class="h3 g-font-weight-700 text-center text-uppercase mb-5">Our Services are</h3>
            <div class="row no-gutters">
                <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
                    <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="fa fa-fighter-jet"></i>
                </span>
                        <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Automated</h3>
                        <p class="mb-0">marskonnect system is fully automated and fast with notification functionally and a feature suite for recharging bulk numbers at once irrespective of the network.</p>
                    </div>
                </div>

                <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
                    <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="fa fa-dollar"></i>
                </span>
                        <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Affordable</h3>
                        <p class="mb-0">Marskonnect focuses in offering subsidised Internet subscription and airtime on all telecommunications network with marskonnect you are sure of saving on your data/airtime purchase.</p>
                    </div>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
                    <!-- Icon Blocks -->
                    <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="fa fa-hacker-news"></i>
                </span>
                        <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">How to start reselling</h3>
                        <p class="mb-0">To become a reseller and buy at way cheaper price,earn from our platform and enjoy other benefits follow these simple steps below to see detailed information about how to buy our different reseller plans.
                            <ul>
                                <li>Create an <?= anchor('auth/create/', 'account'); ?> with us, if you don't already have.</li>
                                <li>Click on the flash message asking you to upgrade your account on dashboard </li>
                                <li>Pay N1000 to the account details. </li>
                                <li>You'll be approved in few minutes and you can start enjoying reseller benefits, eg Resell Data, Airtime, TV subscription at affordable rate </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="g-brd-gray-light-v4 my-0 g-mt-50">
    <section class="1g-bg-secondary g-py-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center g-mb-100 g-mb-0--lg">
                    <header class="u-heading-v2-3--bottom g-brd-primary g-mb-20">
                        <h2 class="h4 u-heading-v2__title g-color-gray-dark-v2 g-font-weight-600 text-uppercase">About
                            marskonnect.com</h2>
                    </header>

                    <p class="g-font-size-16 g-mb-30">A short description about Marskonnet goes here</p>


                </div>

                <div class="col-lg-6 g-bg-img-hero g-pos-rel" style="background-image: url(<?= base_url('assets/img/maps/map3.png'); ?>);">
                    <div class="g-absolute-centered text-center w-100 g-px-40">
                        <h2 class="h1 g-color-gray-light-v2 g-font-weight-600 g-letter-spacing-0_5">
                            marskonnect.com<br/>
                            <span class="u-text-animation u-text-animation--typing"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="g-bg-gray-light-v5">
        <h3 class="h3 g-font-weight-700 text-center text-uppercase mb-5 g-pt-50" style="background:transparent;">Pricing
            Plan</h3>
        <div class="container-fluid" style="padding: 50px;">
            <div class="row">
                <div class="col-md-3 g-mb-30">
                    <!-- Etisalat -->
                    <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                        <header class="g-pos-rel g-px-20 g-py-70" style="background: #006E53;">
                            <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                 preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                 viewBox="0 0 300 70">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff"/>
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff"/>
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff"/>
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff"/>
                            </svg>
                            <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                30<span class="g-font-size-default g-valign-top">days</span><span
                                    style="margin-left:-30px;" class="g-font-size-default">validity</span>
                            </strong>
                            <h3 class="h4 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">9Mobile (Gift Plan)</h3>
                        </header>
                        <!-- End Article Header -->
                        <!-- Article Content -->
                        <div class="g-px-20 g-py-40">
                            <ul class="list-unstyled g-mb-40">
                                <li class="g-mb-20">1 GB - &#8358; 950</li>
                                <li class="g-mb-20">1.5 GB - &#8358; 1,140</li>
                                <li class="g-mb-20">2.5 GB - &#8358; 1,900</li>
                                <li class="g-mb-20">4 GB - &#8358; 2,850</li>
                                <li class="g-mb-20">5.5 GB - &#8358; 3,800</li>
                                <li class="g-mb-20">11.5 GB - &#8358; 7,600</li>
                                <li class="g-mb-20">15 GB - &#8358; 9,500</li>
                                <li class="g-mb-20">27.5 GB - &#8358; 17,100</li>
                            </ul>
                            <a class="btn text-uppercase g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                               href="#" style="background:#006E53;color: #fff;">Check Balance *228#</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
                <div class="col-md-3 g-mb-30">
                    <!-- MTN -->
                    <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                        <!-- Article Header -->
                        <header class="g-bg-warning g-pos-rel g-px-20 g-py-70" style="background: #FFCA08;">
                            <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                 preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                 viewBox="0 0 300 70">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff"/>
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff"/>
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff"/>
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff"/>
                            </svg>
                            <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                90<span class="g-font-size-default g-valign-top">days</span><span
                                    style="margin-left:-30px;" class="g-font-size-default">validity</span>
                            </strong>
                            <h3 class="h4 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">MTN</h3>
                        </header>
                        <!-- End Article Header -->
                        <!-- Article Content -->
                        <div class="g-px-20 g-py-40">
                            <ul class="list-unstyled g-mb-40">
                                <li class="g-mb-20">250 MB - &#8358; 150</li>
                                <li class="g-mb-20">500 MB- &#8358; 300</li>
                                <li class="g-mb-20">1 GB - &#8358; 550</li>
                                <li class="g-mb-20">2 GB - &#8358; 1000</li>
                                <li class="g-mb-20">5 GB - &#8358; 2500</li>
                            </ul>
                            <a class="btn text-uppercase g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                               href="#" style="background: #FFCA08;color: #fff;">Check Balance *461*2*3*2#</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
                <div class="col-md-3 g-mb-30">
                    <!-- Glo -->
                    <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                        <!-- Article Header -->
                        <header class="g-pos-rel g-px-20 g-py-70" style="background: #45B649;">
                            <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                 preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                 viewBox="0 0 300 70">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff"/>
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff"/>
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff"/>
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff"/>
                            </svg>
                            <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                30<span class="g-font-size-default g-valign-top">days</span><span
                                    style="margin-left:-30px;" class="g-font-size-default">validity</span>
                            </strong>
                            <h3 class="h4 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">Glo</h3>
                        </header>
                        <!-- End Article Header -->
                        <!-- Article Content -->
                        <div class="g-px-20 g-py-40">
                            <ul class="list-unstyled g-mb-40">
                                <li class="g-mb-20">800MB/920MB - &#8358; 450</li>
                                <li class="g-mb-20">1.6 GB/1.84 GB - &#8358; 850</li>
                                <li class="g-mb-20">3.65 GB/4.5 GB - &#8358; 1,700</li>
                                <li class="g-mb-20">5.75 GB/7.2 GB - &#8358; 2,150</li>
                                <li class="g-mb-20">7 GB/8.2 GB - &#8358; 2,550</li>
                                <li class="g-mb-20">10 GB/12.5 GB - &#8358; 3,400</li>
                                <li class="g-mb-20">12.5 GB/15.6 GB - &#8358; 4,250</li>
                                <li class="g-mb-20">20 GB/25 GB - &#8358; 6,800</li>
                                <li class="g-mb-20">26 GB/32.5 GB - &#8358; 8,500</li>
                                <li class="g-mb-20">42 GB/52.5 GB - &#8358; 12,750</li>
                                <li class="g-mb-20">63 GB/78.7 GB - &#8358; 17,000</li>
                            </ul>
                            <a class="btn text-uppercase g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                               href="#" style="background: #45B649;color: #fff;">Check Balance *127*0#</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
                <div class="col-md-3 g-mb-30">
                    <!-- Airtel -->
                    <article
                            class="u-shadow-v21 u-shadow-v21--hover g-bg-white text-center g-overflow-hidden g-rounded-4 g-pos-rel g-z-index-2 g-cursor-pointer g-transition-0_3">
                        <!-- Article Header -->
                        <header class="g-pos-rel g-px-20 g-py-70" style="background: #E20010;">
                            <svg class="g-pos-abs g-bottom-0 g-left-0 g-right-0" version="1.1"
                                 preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="70px"
                                 viewBox="0 0 300 70">
                                <path d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" opacity="0.6" fill="#ffffff"/>
                                <path d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" opacity="0.6" fill="#ffffff"/>
                                <path d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                H42.401L43.415,98.342z" opacity="0.7" fill="#ffffff"/>
                                <path d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#ffffff"/>
                            </svg>
                            <strong class="d-block g-color-white g-font-size-50 g-line-height-0_7 g-mb-20">
                                30<span class="g-font-size-default g-valign-top">days</span><span
                                    style="margin-left:-30px;" class="g-font-size-default">validity</span>
                            </strong>
                            <h3 class="h4 text-uppercase g-color-white-opacity-0_7 g-letter-spacing-3 g-mb-20">
                                Airtel</h3>
                        </header>
                        <!-- End Article Header -->
                        <!-- Article Content -->
                        <div class="g-px-20 g-py-40">
                            <ul class="list-unstyled g-mb-40">
                                <li class="g-mb-20">1.5 GB - &#8358; 950</li>
                                <li class="g-mb-20">3.5 GB - &#8358; 1,900</li>
                                <li class="g-mb-20">5.5 GB - &#8358; 2,400</li>
                            </ul>
                            <a class="btn text-uppercase g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30 g-mb-10"
                               href="#" style="background: #E20010;color: #fff;">CHECK DATA BALANCE *140#</a>
                        </div>
                        <!-- End Article Content -->
                    </article>
                    <!-- End Article -->
                </div>
            </div>
            <!-- End Pricing Plans -->
        </div>
    </section>


<?php include("footer.php");?>