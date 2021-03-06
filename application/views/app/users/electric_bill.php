<?php
$this->load->view('landing/user_header');
?>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">

        <?php $this->load->view('upgrade_plan')?>

        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12 g-mt-10 mb-4">
                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">To Pay Electric Bill Complete The Form
                            Below</h4>
                        <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                            <div class="dropdown bootstrap-select js-select u-select--v3-select u-sibling w-100 dropup">
                                <div class="form-group g-brd-gray-light-v7 g-rounded-25 mb-0">
                                    <select class="form-control" id="plan" name="plan">
                                        <option value="" selected>-- Select --</option>
                                        <?php foreach ( $plans as $plan ): ?>
                                            <option
                                                    data-network-name="<?= $plan->network_name; ?>"
                                                    data-variation-name="<?= $plan->variation_name;?>"
                                                    data-service-id="<?= $plan->service_id; ?>"
                                                    data-service-discount="<?= $plan->discount; ?>"
                                                    value="<?= $plan->id?>">
                                                <?= ucwords($plan->name); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="iuc-number">Meter Type</label>
                            <div class="form-group g-brd-gray-light-v7 g-rounded-25 mb-0">
                                <select class="form-control" id="meter_type" name="meter_type">
                                    <option value="" selected>-- Select Meter Type --</option>
                                    <option value="prepaid">Prepaid</option>
                                    <option value="postpaid">Postpaid</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="iuc-number">Meter Number</label>
                            <input type="text" name="meter_number" id="meter_number" class="form-control number" required autocomplete="off" placeholder="Meter Number">
                            <span class="text-danger" id="meter-info"></span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="registered-number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control number" required placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="registered_name">Amount</label>
                            <input type="text" name="amount" id="amount" class="form-control number" required placeholder="How much will you like to pay?">
                        </div>
                    </div>
                    <span class="text text-success discount-notif"></span>
                    <input type="hidden" name="product_id" id="product_id" value="<?= $product_id; ?>">
                    <input type="hidden" id="user_meter_name" value="" />
                    <div class="col-md-12 g-mt-5 py-3">
                        <button type="button" data-pid="6" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2 electricity-bill">Pay Now</button>
                    </div>

                    <div id="processing"
                         style="display:none;position: center;top: 0;left: 0;width: auto;height: auto%;background: #f4f4f4;z-index: 99;">
                        <div class="text"
                             style="position: absolute;top: 35%;left: 0;height: 100%;width: 100%;font-size: 18px;text-align: center;">
                            <img src="<?= base_url('assets/img/load.gif'); ?>"
                                 alt="Processing...">
                            Checking your meter number! <br><b
                                    style="color: rgba(2.399780888618386%,61.74193548387097%,46.81068368248487%,0.843);">Please wait...</b>
                        </div>
                    </div>


                </div>
            </div>

            <div class="g-pa-20 col-md-8">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Transaction History For Airtime</h1>

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
                                       type="text" placeholder="Search for Airtime Type, Status">
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
                                    <td><?= $transaction->trans_id; ?></td>
                                    <td><?= neatDate($transaction->date_initiated) . ' ' . neatTime($transaction->date_initiated); ?></td>
                                    <td><?= payment_id_replacer($transaction->description); ?></td>
                                    <td><?= ngn($transaction->amount); ?></td>
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