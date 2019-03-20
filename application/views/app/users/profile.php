<?php
$this->load->view('landing/user_header');
?>
    <style>
        nav > .nav.nav-tabs {

            border: none;
            color: #fff;
            background: #222e44;
            border-radius: 0;

        }

        nav > div a.nav-item.nav-link {
            border: none;
            padding: 18px 25px;
            color: #fff;
            background: #222e44;
            border-radius: 0;
        }

        nav > div a.nav-item.nav-link.active {
            border: none;
            padding: 18px 25px;
            color: #fff;
            background: #e71162;
            border-radius: 0;
        }

        nav > div a.nav-item.nav-link.active:after {
            content: "";
            position: relative;
            bottom: -60px;
            left: -30%;
            border: 15px solid transparent;
            border-top-color: #e71162;
        }

        .tab-content {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #e71162;
            border-bottom: 5px solid #e71162;
            padding: 30px 25px;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus {
            border: none;
            background: #e71162;
            color: #fff;
            border-radius: 0;
            transition: background 0.20s linear;
        }
    </style>
    <div style="min-height: calc(92vh - 67px);">
        <div class="g-pa-20">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill text-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-fund"
                           role="tab" aria-controls="nav-home" aria-selected="true">Fund Wallet</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-transfer"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Fund Transfer</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-fund" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="alert-secondary g-px-50 g-py-20">
                                <h4 class="h4">Please Note:</h4>
                                <ul>
                                    <li>
                                        A transaction ID will be generated for you, which should be used as reference.
                                    </li>
                                    <li>
                                        If you will be paying via Bank Transfer / Deposit, account details will be shown.
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row g-mt-10">
                                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">To Fund Your Wallet
                                            Complete The Form
                                            Below</h4>
                                        <div class="col-sm-12 g-mt-10">
                                            <div class="form-group">
                                                <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="fa fa-check g-absolute-centered g-font-size-default g-color-secondary"></i>
	                	</span>
                                                    <input id="inputGroup-3_1"
                                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10"
                                                           type="text" placeholder="Enter Amount to Fund">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 g-mt-10">
                                            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                                                <div class="dropdown bootstrap-select js-select u-select--v3-select u-sibling w-100 dropup">
                                                    <select
                                                            class="js-select u-select--v3-select u-sibling w-100"
                                                            required="required"
                                                            title="Select Payment Method" style="display: none;"
                                                            tabindex="-98">
                                                        <option class="bs-title-option" value=""></option>
                                                        <option value="selectListItem1"
                                                                data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-rocket g-font-size-18 g-mr-15&quot;></i><span>Select List Item 1</span></span>">
                                                            Select List Item 1
                                                        </option>
                                                        <option value="selectListItem2"
                                                                data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>Select List Item 2</span></span>">
                                                            Select List Item 2
                                                        </option>
                                                        <option value="selectListItem3"
                                                                data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-shift-right g-font-size-18 g-mr-15&quot;></i><span>Select List Item 3</span></span>">
                                                            Select List Item 3
                                                        </option>
                                                        <option value="selectListItem4"
                                                                data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-import g-font-size-18 g-mr-15&quot;></i><span>Additional List Item 4</span></span>">
                                                            Additional List Item 4
                                                        </option>
                                                    </select>
                                                    <div class="d-flex align-items-center justify-content-center g-absolute-centered--y g-right-0 h-100 g-width-40 g-bg-primary g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-rounded-right-25">
                                                        <i class="fa fa-credit-card-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 g-mt-10 text-right">
                                            <a class="js-fancybox btn btn-xl u-btn-primary g-rounded-20 g-width-160--md g-font-size-default g-ml-10"
                                               href="#">Fund Wallet
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-transfer" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row g-mt-10">
                                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">To Transfer Funds From Your Wallet
                                            Complete The Form
                                            Below</h4>
                                        <div class="col-sm-12 g-mt-10">
                                            <div class="form-group">
                                                <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="fa fa-check g-absolute-centered g-font-size-default g-color-secondary"></i>
	                	</span>
                                                    <input id="inputGroup-3_1"
                                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10"
                                                           type="text" placeholder="Enter Amount to Fund">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 g-mt-10">
                                            <div class="form-group">
                                                <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="fa fa-check g-absolute-centered g-font-size-default g-color-secondary"></i>
	                	</span>
                                                    <input id="inputGroup-3_1"
                                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10"
                                                           type="text" placeholder="Enter Receiver Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 g-mt-10 text-right">
                                            <a class="js-fancybox btn btn-xl u-btn-primary g-rounded-20 g-width-160--md g-font-size-default g-ml-10"
                                               href="#">Transfer Fund
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
<?php $this->load->view("landing/user_footer"); ?>