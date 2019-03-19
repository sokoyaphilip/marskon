<!DOCTYPE html>
<html lang="en">

<head>
    <title>MARS-KONNECT.com | Designed for unlimited pleasure</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/bootstrap.min.css');?>">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/icon-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/dzsparallaxer/dzsparallaxer.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/dzsparallaxer/dzsscroller/scroller.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/dzsparallaxer/advancedscroller/plugin.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fancybox/jquery.fancybox.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/slick-carousel/slick/slick.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/typedjs/typed.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/hs-megamenu/src/hs.megamenu.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/hamburgers/hamburgers.min.css'); ?>">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="<?= base_url('assets/css/unify-core.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/unify-components.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/unify-globals.css')?>">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
</head>

<body>
<main>
    <header id="js-header" class="u-header u-header--static--lg u-header--show-hide--lg" data-header-fix-moment="500" data-header-fix-effect="slide">
        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-bg-white g-py-10" data-header-fix-moment-classes="g-bg-white-opacity-0_7 u-shadow-v18 g-py-0">
            <nav class="js-mega-menu navbar navbar-expand-lg">
                <div class="container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0"
                            type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                            data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                    </button>
                    <a href="<?= base_url(); ?>" class="navbar-brand d-flex">
                        <img src="<?= base_url('assets/img/logo/logo-1.png'); ?>" class="img-responsive"/>
                    </a>
                    <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg"
                         id="navBar">
                        <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                            <li class="nav-item active g-mx-10--lg g-mx-15--xl">
                                <a class="nav-link g-py-7 g-px-0" href="<?= base_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item hs-has-sub-menu  g-mx-10--lg g-mx-15--xl" data-animation-in="fadeIn"
                                data-animation-out="fadeOut">
                                <a id="nav-link--features" class="nav-link g-py-7 g-px-0" href="#" aria-haspopup="true"
                                   aria-expanded="false" aria-controls="nav-submenu--pricing">Quick Response</a>

                                <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-18 g-mt-8--lg--scrolling"
                                    id="nav-submenu--pricing" aria-labelledby="nav-link--features">
                                    <li class="dropdown-item hs-has-sub-menu ">
                                        <a id="nav-link--features--sliders" class="nav-link" href="#"
                                           aria-haspopup="true" aria-expanded="false"
                                           aria-controls="nav-submenu--features--sliders">Buy Data</a>

                                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                            id="nav-submenu--features--sliders"
                                            aria-labelledby="nav-link--features--sliders">
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">MTN</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Airtel</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Etisalat</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Glo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item hs-has-sub-menu ">
                                        <a id="nav-link--features--sliders" class="nav-link" href="#"
                                           aria-haspopup="true" aria-expanded="false"
                                           aria-controls="nav-submenu--features--sliders">Buy Airtime</a>

                                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                            id="nav-submenu--features--sliders"
                                            aria-labelledby="nav-link--features--sliders">
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">MTN</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Airtel</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Etisalat</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Glo</a>
                                            </li>
                                        </ul>

                                    <li class="dropdown-item hs-has-sub-menu ">
                                        <a id="nav-link--features--sliders" class="nav-link" href="#"
                                           aria-haspopup="true" aria-expanded="false"
                                           aria-controls="nav-submenu--features--sliders">Pay TV Subscription</a>

                                        <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                            id="nav-submenu--features--sliders"
                                            aria-labelledby="nav-link--features--sliders">
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">GOtv</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">DStv</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">StarTimes</a>
                                            </li>
                                            <li class="dropdown-item ">
                                                <a class="nav-link" href="">Kwese</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item ">
                                        <a class="nav-link" href="">Pay Electric Bill</a>
                                    </li>
                                    <li class="dropdown-item ">
                                        <a class="nav-link" href="">Paxful Coin</a>
                                    </li>
                                    <li class="dropdown-item ">
                                        <a class="nav-link" href="">Gift Card</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                                <a href="#" class="nav-link g-py-7 g-px-0">FAQ</a>
                            </li>
                            <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                                <a href="<?= base_url('page/contact/');?>" class="nav-link g-py-7 g-px-0">Contact</a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <?php if( !$this->session->userdata('logged_in') ) : ?>

                                <div class="d-inline-block g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                                    <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="<?= base_url('auth/'); ?>">LOG
                                        IN</a>
                                </div>
                                <div class="d-inline-block" style="width:10px;"></div>
                                <div class="d-inline-block g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                                    <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="<?= base_url('auth/create/');?>">SIGN
                                        UP</a>
                                </div>

                            <?php else : ?>
                                <div class="d-inline-block g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                                    <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="<?= base_url('logout/'); ?>">Logout</a>
                                </div>
                                <div class="d-inline-block" style="width:10px;"></div>
                                <?php if( $this->session->userdata('is_admin') == 1 ): ?>
                                    <div class="d-inline-block g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                                        <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="<?= base_url('admin/');?>">
                                            admin dashboard
                                        </a>
                                    </div>
                                <?php else: ?>
                                    <div class="d-inline-block g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                                        <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15" href="<?= base_url('dashboard/');?>">
                                            My Account
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>