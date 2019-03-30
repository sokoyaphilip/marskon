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
            <?php $this->load->view('upgrade_plan')?>
            <h3 class="h3">Wallet Balance: <span class="g-color-red"><?= ngn($user->wallet); ?></span></h3>
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill text-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-fund"
                           role="tab" aria-controls="nav-home" aria-selected="true">Fund Wallet</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-transfer"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Fund Transfer</a>
                    </div>
                </nav>
                <?php $this->load->view('msg_view'); ?>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-fund" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="alert-secondary g-px-50 g-py-20">
                                <h4 class="h4">Please Note:</h4>
                                <ul>
                                    <li>
                                        After clicking on 'submit' a transaction ID will be generated for you, which should be used as reference.
                                    </li>
                                    <li>
                                        If you will be paying via Bank Transfer / Deposit.
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

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="text" name="amount" id="pay_amount" class="form-control number" required autocomplete="off" placeholder="Enter an amount">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label" for="Payment method">Payment Method</label>
                                                <select class="form-control" name="payment_method" id="payment_method" required>
                                                    <option value=""> -- How will you like to pay? --</option>
                                                    <option value="1">Bank Transfer / Deposit</option>
                                                    <option value="3">ATM - Pay Online Via Paystack ( 1.5% fee )</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group"  style="display: none;" id="bank_col">
                                                <label class="label" for="Bank">Bank</label>
                                                <select class="form-control" name="bank" id="bank" required>
                                                    <option value=""> -- Select the bank you're paying to --</option>
                                                    <?php
                                                        $banks = explode(',', lang('company_banks'));
                                                        foreach( $banks as $bank ):
                                                    ?>
                                                            <option value="<?= trim( $bank ); ?>"> <?= trim($bank); ?> </option>
                                                        <?php endforeach;?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="product_id" id="product_id" value="6" />
                                        <input type="hidden" name="post_type" value="wallet_funding" />
                                        <div class="col-md-12 g-mt-5 py-3">
                                            <button type="button" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2 pay-now">Submit</button>
                                            <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
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
                                    <div class="alert alert-info"><h4>Coming Soon</h4></div>
<!--                                    <div class="row g-mt-10">-->
<!--                                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">To Transfer Funds From Your Wallet-->
<!--                                            Complete The Form-->
<!--                                            Below</h4>-->
<!--                                        <div class="col-sm-12 g-mt-10">-->
<!--                                            <div class="form-group">-->
<!--                                                <label class="label" for="Amount">Amount</label>-->
<!--                                                <input type="text" class="form-control number" name="amount" id="transfer_amount" required placeholder="Enter Amount you want to send">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-12 g-mt-10">-->
<!--                                            <div class="form-group">-->
<!--                                                <div class="g-pos-rel">-->
<!--                                                    <label class="label" for="Payment method">Receiver Username</label>-->
<!--                                                    <input type="text" name="receiver" id="receiver" class="form-control" required placeholder="Receiver phone number">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-12 g-mt-5 py-3">-->
<!--                                            <button type="button" disabled class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Coming Soon...</button>-->
<!--                                            <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="g-pa-20 col-sm-10">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Transaction History</h1>

                <div class="media-md align-items-center g-mb-30">
                    <div class="d-flex g-mb-15 g-mb-0--md">
                        <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Filter All Transaction</h3>
                    </div>

                    <div class="media d-md-flex align-items-center ml-auto">
                        <div class="d-flex align-items-center">
                            <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Show:</span>

                            <div class="u-select--v1 g-pr-20">
                                <select id="datatableEntries1" class="js-select u-select--v1-select w-100">
                                    <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">5 Entries</span>'
                                            value="5">5 Entries
                                    </option>
                                    <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">10 Entries</span>'
                                            value="10">10 Entries
                                    </option>
                                    <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">15 Entries</span>'
                                            value="15">15 Entries
                                    </option>
                                    <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">20 Entries</span>'
                                            value="20">20 Entries
                                    </option>
                                    <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">25 Entries</span>'
                                            value="25">25 Entries
                                    </option>
                                </select>
                                <i class="fa fa-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6"></i>
                            </div>
                        </div>

                        <div class="d-flex g-ml-15 g-ml-55--md">
                            <div class="input-group g-pos-rel g-width-320--md">
                                <input id="datatableSearch1"
                                       class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10"
                                       type="text" placeholder="Search for name, position">
                                <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-primary g-color-secondary--hover rounded-0"
                                        type="submit">
                                    <i class="fa fa-search g-absolute-centered"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="g-mb-40">
                    <div class="table-responsive">
                        <table class="js-datatable table u-table--v3 u-editable-table--v1 g-color-black"
                               data-dt-info="#datatableInfo1" data-dt-search="#datatableSearch1"
                               data-dt-entries="#datatableEntries1" data-dt-is-show-paging="true"
                               data-dt-pagination="datatablePagination1"
                               data-dt-page-length="5" data-dt-is-responsive="false"
                               data-dt-pagination-classes="list-inline text-right mb-0"
                               data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down"
                               data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-secondary--active g-color-white--active g-brd-gray-light-v7 g-brd-secondary--hover g-brd-secondary--active g-rounded-4 g-py-8 g-px-15"
                               data-dt-pagination-next-classes="list-inline-item"
                               data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12"
                               data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="fa fa-angle-right"></i></span><span class="sr-only">Next</span>'
                               data-dt-pagination-prev-classes="list-inline-item"
                               data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12"
                               data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="fa fa-angle-left"></i></span><span class="sr-only">Prev</span>'>
                            <thead>
                            <tr>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Transaction ID</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Date & Time</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Amount</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Transaction Type</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Payment Method</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center">Description</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="media">
                                        <div class="d-flex align-self-center g-nowrap">Status</div>
                                        <div class="d-flex align-self-center ml-auto">
                                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-up"></i>
                                            </a>
                                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                                               href="javascript:;">
                                              <i class="fa fa-angle-down"></i>
                                            </a>
                                          </span>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php foreach( $transactions as $transaction ) :?>
                                    <tr>
                                        <td>
                                            <?= $transaction->trans_id; ?>
                                            <?php if( $transaction->payment_method == 1 && $transaction->status == 'pending') : ?>
                                                <span><a href="<?= base_url('dashboard/payment_made/?tid=' . $transaction->trans_id)?>">Confirm Payment</a></span>
                                            <?php endif;?>
                                        </td>
                                        <td><?= neatDate($transaction->date_initiated) . ' ' . neatTime($transaction->date_initiated); ?></td>
                                        <td><?= ngn($transaction->amount); ?></td>
                                        <td><?= ($transaction->product_id == 6 ) ? 'Wallet Funding' : 'Fund Transfer'; ?></td>
                                        <td><?= ($transaction->payment_method == 1) ? 'Bank Transfer/Deposit': 'Payment Via Card' ; ?></td>
                                        <td><?= payment_id_replacer($transaction->description); ?></td>
                                        <td><?= statusLabel( $transaction->status);?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="media align-items-center g-mb-45">
                    <div id="datatableInfo1" class="media-body"></div>

                    <nav id="datatablePagination1" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view("landing/user_footer"); ?>