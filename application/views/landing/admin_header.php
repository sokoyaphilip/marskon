<?php
$this->db->where('product_id', 6);
$this->db->where('status', 'pending');
$wallet_count = $this->db->get('transactions')->num_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Site Administrator | Marskonnect.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?=base_url("assets/favicon.png")?>">
    <link rel="stylesheet"
          href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/bootstrap/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/icon-awesome/css/font-awesome.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/hs-admin-icons/hs-admin-icons.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/animate.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/flatpickr/dist/css/flatpickr.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/bootstrap-select/css/bootstrap-select.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/chartist-js/chartist.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/fancybox/jquery.fancybox.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/vendor/hamburgers/hamburgers.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/unify-admin.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/custom.css")?>">
</head>
<body>
<header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
        <nav class="navbar no-gutters g-pa-0">
            <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                <a href="<?=base_url()?>"
                   class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">
                    <img src="<?= base_url('assets/img/logo/logo-1.png'); ?>" class=""/>
                </a>
                <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#"
                   data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini"
                   data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true"
                   data-hssm-target="#sideNav">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                    <div class="g-pos-rel g-px-10--lg">
                        <a id="profileMenuInvoker" class="d-block" href="#" aria-controls="profileMenu"
                           aria-haspopup="true" aria-expanded="false" data-dropdown-event="click"
                           data-dropdown-target="#profileMenu" data-dropdown-type="css-animation"
                           data-dropdown-duration="300"
                           data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm"
                     src="<?=base_url("assets/img-temp/130x130/img1.jpg")?>" alt="Image description">
                </span>
                            <span class="g-pos-rel g-top-2">
        <span class="g-hidden-sm-down">Administrator</span>
                <i class="fa fa-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
                        </a>

                        <!-- Top User Menu -->
                        <ul id="profileMenu"
                            class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded"
                            aria-labelledby="profileMenuInvoker">
                            <li class="g-mb-10">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="<?=base_url("admin/users")?>">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="fa fa-users"></i>
        </span>
                                    <span class="media-body align-self-center">Manage Users</span>
                                </a>
                            </li>
<!--                            <li class="g-mb-10">-->
<!--                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="user.php">-->
<!--                    <span class="d-flex align-self-center g-mr-12">-->
<!--          <i class="fa fa-credit-card"></i>-->
<!--        </span>-->
<!--                                    <span class="media-body align-self-center">Account History</span>-->
<!--                                </a>-->
<!--                            </li>-->
                            <li class="mb-0">
                                <a class="media g-color-primary--hover g-py-5 g-px-20" href="<?= base_url('logout/');?>">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="fa fa-sign-out"></i>
        </span>
                                    <span class="media-body align-self-center">Sign Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-hidden">
        <!-- Sidebar Nav -->
        <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
            <div class="js-custom-scroll u-sidebar-navigation-v1-inner">
                <ul id="sideNavMenu"
                    class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item  <?php if($page == 'home') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url()?>">
                              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-dashboard"></i>
                            </span>
                            <span class="media-body align-self-center">Access Homepage</span>
                            <span class="d-flex align-self-center u-side-nav--control-icon">
                            </span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item  <?php if($page == 'home') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/")?>">
                              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-dashboard"></i>
                            </span>
                                <span class="media-body align-self-center">Dashboard</span>
                                <span class="d-flex align-self-center u-side-nav--control-icon">
                            </span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'users') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/users")?>">
                            <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="fa fa-users"></i>
                            </span>
                            <span class="media-body align-self-center">Manage Users</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'approval') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/approval")?>">
                          <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-credit-card-alt"></i>
                          </span>
                            <span class="media-body align-self-center">Wallet Funding  <?= ($wallet_count > 0 ) ? '( <small class="text-right text-danger font-weight-bold">'.$wallet_count.'</small> )' : '';?></span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'member_upgrade') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/upgrade_membership_request/")?>">
                          <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-credit-card-alt"></i>
                          </span>
                            <span class="media-body align-self-center">Upgrade Member</span>
                        </a>
                    </li>

                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'sme_request') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/sme_request/")?>">
                          <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-credit-card-alt"></i>
                          </span>
                            <span class="media-body align-self-center">SME Request</span>
                        </a>
                    </li>

                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'services') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/services")?>">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
              <i class="fa fa-bell-o"></i>
              </span>
                            <span class="media-body align-self-center">Services</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'plans') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?= base_url('admin/plans');?>">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
              <i class="fa fa-wifi"></i>
              </span>
                            <span class="media-body align-self-center">Plans</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'plans') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?= base_url('admin/api_variation/');?>">
                              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-key"></i>
                              </span>
                            <span class="media-body align-self-center">API Variation</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'e_coins') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?= base_url('admin/e_coins');?>">
                          <span class="d-flex align-self-center g-font-size-18 g-mr-18">
                          <i class="fa fa-bitcoin" style="font-size:24px;"></i>
                        </span>
                            <span class="media-body align-self-center">E-Coin Request</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'statistics') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/statistics/")?>">
                          <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-credit-card-alt"></i>
                          </span>
                            <span class="media-body align-self-center">Statistics</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item <?php if($page == 'notification') echo 'has-active';?>">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?=base_url("admin/notification/")?>">
                          <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                              <i class="fa fa-credit-card-alt"></i>
                          </span>
                            <span class="media-body align-self-center">Notifications</span>
                        </a>
                    </li>
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12"
                           href="<?= base_url('logout/');?>">
                            <span class="d-flex align-self-center g-font-size-18 g-mr-18">
                              <i class="fa fa-sign-out" style="font-size:24px;"></i>
                            </span>
                            <span class="media-body align-self-center">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">