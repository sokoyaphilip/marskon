<?php $this->load->view('landing/user_header'); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/classic.css');?>">
<link rel="stylesheet" href="<?= base_url('assets/css/classic.date.css');?>">
<style>
    .col{
        flex-basis:unset !important;
    }
</style>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">
        <?php $this->load->view('upgrade_plan')?>
        <div class="row">
            <div class="col-md-3 col-xs-6 g-mb-30">
                <div class="card g-brd-darkblue-v5 text-center g-pa-15 g-pa-25-30--md">
                    <header class="media g-mb-40">
                        <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            <a href="<?= base_url('dashboard/airtime/'); ?>">Buy Airtime</a></h3>
                    </header>

                    <section class="row">
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-yellow g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    MTN
                                </strong>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-green g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    GLO
                                </strong>
                            </div>
                        </div>
                    </section>
                    <section class="row g-mt-10">
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-red g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    Airtel
                                </strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-teal-v2 g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    9-Mobile
                                </strong>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 g-mb-30">
                <div class="card g-brd-lightred-v3 text-center g-pa-15 g-pa-25-30--md">
                    <header class="media g-mb-40">
                        <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            <a href="<?= base_url('dashboard/data/'); ?>">Buy Data</a></h3>
                    </header>

                    <section class="row">
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-yellow g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    MTN
                                </strong>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-green g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    GLO
                                </strong>
                            </div>
                        </div>
                    </section>
                    <section class="row g-mt-10">
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-red g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    Airtel
                                </strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="g-brd-top g-brd-2 g-brd-teal-v2 g-pt-18">
                                <strong class="d-block g-line-height-1 g-font-weight-500 g-font-size-18 g-color-black g-mb-8--sm">
                                    9-Mobile
                                </strong>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="col-md-3 col-xs-6 g-mb-30">
                <div class="card g-brd-gray-light-v1">
                    <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                        <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            <a href="<?= base_url('dashboard/subscription/')?>"> TV Subscription</a></h3>
                    </header>

                    <div class="g-pa-15 g-pa-0-30-25--md">
                        <section class="media g-mb-20">
                            <div class="media-body align-self-end g-line-height-1_3 g-font-weight-300 g-font-size-18 g-color-black">
                                DStv
                            </div>

                            <div class="media-body d-flex justify-content-end  g-line-height-1_3 g-font-weight-300 g-font-size-18 g-color-black">
                                Kwese
                            </div>
                        </section>
                        <section class="media g-mb-20">
                            <div class="media-body align-self-end g-line-height-1_3 g-font-weight-300 g-font-size-18 g-color-black">
                                GoTV
                            </div>

                            <div class="media-body d-flex justify-content-end  g-line-height-1_3 g-font-weight-300 g-font-size-18 g-color-black">
                                Startimes
                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-xs-6 g-mb-30">
                <!-- Panel -->
                <div class="card g-brd-lightblue-v4 rounded" style="width:100%;">
                    <div class="card-block g-pa-20">
                        <header class="media g-mb-40">
                            <h4 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                                <a href="<?= base_url('dashboard/electricity/')?>">Electric Bills</a></h4>
                        </header>

                        <div class="d-flex align-items-center g-mb-25">
                            <span class="g-font-weight-300 g-font-size-18 g-color-black">Pay All Electric Distribution Service Charge Here, including IKEDC, EEDC, IBEDC, e.t.c.</span>
                        </div>
                    </div>
                </div>
                <!-- End Panel -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <h3 class="lead text-danger">Transaction History</h3>
                <form method="POST" action="<?= base_url('dashboard/')?>">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="label" for="Starting From">Start Date</label>
                                <input type="text" class="form-control datepicker" name="start" value="<?=(isset($_POST['start'])) ? $_POST['start'] : '';?>" placeholder="Select a starting date">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="label" for="Starting From">Start Date</label>
                                <input type="text" class="form-control datepicker" name="end" value="<?= (isset($_POST['end'])) ? $_POST['end'] : '' ;?>" placeholder="Select an ending date">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="label" for="Starting From">Transaction Type</label>
                                <select class="form-control" name="transaction_type">
                                    <option value=""> -- All --</option>
                                    <?php foreach($products as $product) :?>
                                        <option <?php if (isset($_POST['transaction_type']) && $_POST['transaction_type'] == $product->id ) echo 'selected';?>
                                                value="<?= $product->id; ?>"><?= ucwords($product->title); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success btn-cta btn-cta-primary btn-sm col-sm-4">Filter</button>
                    <button type="reset" class="btn btn-primary btn-cta btn-cta-secondary btn-sm col-sm-3">Clear</button>&nbsp;&nbsp;
                </form>


            </div>
        </div>


        <div class="g-pa-20 col-md-12">
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">All Transaction History</h1>

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
                                   type="text" placeholder="Search Transactions">
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
                            <th style="display: none;">
                                <div class="media">
                                    <div class="d-flex align-self-center">ID</div>

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
                                    <div class="d-flex align-self-center">Type</div>

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
                        <?php foreach( $transactions as $transaction ): ?>
                            <tr>
                                <td style="display: none;"><?= $transaction->id; ?></td>
                                <td><?= $transaction->trans_id; ?></td>
                                <td><?= neatDate( $transaction->date_initiated) . ' ' . neatTime( $transaction->date_initiated); ?></td>
                                <td><?= paymentMethod($transaction->payment_method); ?></td>
                                <td><?= payment_id_replacer($transaction->description); ?></td>
                                <td><?= ngn($transaction->amount)?></td>
                                <td><?= statusLabel( $transaction->status);?></td>
                            </tr>
                        <?php endforeach; ?>
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
<?php $this->load->view("landing/user_footer"); ?>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/picker.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/datepicker.js')?>"></script>

<script>
    $(document).ready( function () {
        $('.table').DataTable();

        $('.datepicker').pickadate()
    } );
</script>
