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

                <div class="py-3">
                    <div style="margin-top: 20px" class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                            <tr>
                                <th style="display: none"></th>
                                <th>Transaction ID</th>
                                <th>Date & Time</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach( $transactions as $transaction ): ?>
                                <tr>
                                    <td style="display:none;"><?= $transaction->id; ?></td>
                                    <td><?= $transaction->trans_id; ?></td>
                                    <td><?= neatDate( $transaction->date_initiated) . ' ' . neatTime( $transaction->date_initiated); ?></td>
                                    <td><?= product_name($transaction->product_id); ?></td>
                                    <td><?= payment_id_replacer($transaction->description); ?></td>
                                    <td><?= ngn($transaction->amount)?></td>
                                    <td><?= statusLabel( $transaction->status);?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
