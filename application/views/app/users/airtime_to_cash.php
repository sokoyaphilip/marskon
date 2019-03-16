<?php $this->load->view('resources/meta'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url('assets/css/classic.css');?>">
<link rel="stylesheet" href="<?= base_url('assets/css/classic.date.css');?>">
</head>

<body class="home-page">

    <div class="wrapper">
        <!-- ******HEADER****** -->
        <?php $this->load->view('resources/menu');?>
        <!--//header-->

        <section>
            <div class="container dashboard-cover">
<!--                <h2 class="title">Welcome to your dashboard</h2>-->
                <div class="row">
                    <?php $this->load->view('resources/users/left_menu'); ?>

                    <div class="col-md-8 sub-section">
                        <h3 class="heading">Wallet</h3>
                        <div class="content right-content">
                            <div class="well"></div>
                            <?php $this->load->view('msg_view'); ?>
                            <div class="col-sm-12 sort-panel">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pin-tab" data-toggle="tab" href="#pin_tab" role="tab" aria-controls="pin" aria-selected="true">Recharge Pin Transfer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="transfer-tab" disabled="" data-toggle="tab" href="#transfer_tab" role="tab" aria-controls="transfer" aria-selected="false">Airtime Transfer</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="pin_tab" role="tabpanel" aria-labelledby="pin-tab">
<!--                                        <div class="alert alert-secondary" role="alert">-->
<!--                                            <b>Please note:</b>-->
<!--                                            <ul>-->
<!--                                                <li>A transaction ID will be generated for you, which should be used as a reference.</li>-->
<!--                                                <li>If you'll be paying via <b>Bank Transfer / Deposit</b>, an account details will be shown to you where you will make debosit to..</li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
                                        <form id="pin_transfer" action="<?= base_url('dashboard/airtime_process');?>" method="post">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="Network">Please select network <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="airtime_pin_network" id="airtime_pin_network" required>
                                                            <option value=""> -- select --</option>
                                                            <?php foreach ($networks as $network ): ?>
                                                                <option data-discount="<?= $network->discount; ?>"
                                                                        value="<?= $network->network_name; ?>"><?= ucwords($network->title); ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="Network">Enter Pin <span class="text-danger">* </span> </label>
                                                        <input type="text" class="form-control number" name="pin" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="amount">Please select the amount you're sending <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="amount" id="pin_amount" required>
                                                            <option value=""> -- select --</option>
                                                            <?php for( $x = 100; $x <= 1000; $x += 100 ) : ?>
                                                                <option value="<?= $x; ?>"> <?= ngn( $x ); ?></option>
                                                            <?php endfor; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="how_to_receive">How will you like to be funded <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="how_to_receive" id="how_to_receive" required>
                                                            <option value="wallet">Fund my wallet</option>
                                                            <option value="data" disabled>Swap with mobile data (From N1,000 above)</option>
                                                            <option value="account" disabled>Transfer the money into my account (From N1,000 above)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="display: none;">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="receiver">Please enter the number <span class="text-danger">*</span></label>
                                                        <input type="text" name="receiver" class="form-control">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <span class="to_receive text-danger"></span>
                                                <br />
                                            </div>

                                            <input type="hidden" name="product_id" id="product_id" value="8" />
                                            <input type="hidden" name="amount_earned" id="amount_earned" value="" />
                                            <input type="hidden" name="post_type" value="pin_transfer" />
                                            <button class="btn btn-cta btn-cta-primary btn-sm col-sm-4" type="submit">Submit</button>
                                            <button type="reset" class="btn btn-cta btn-cta-secondary btn-sm col-sm-3">Clear</button>&nbsp;&nbsp;
                                        </form>

                                    </div>

                                    <div class="tab-pane" id="transfer_tab" role="tabpanel" aria-labelledby="transfer-tab">
                                        <div class="alert alert-danger" role="alert">
                                            <b>Coming Soon!!!</b>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </div><!--//wrapper-->

    <!-- ******FOOTER****** -->
    <?php $this->load->view('resources/footer'); ?>

    <?php $this->load->view('resources/login-modal'); ?>

    <!-- Javascript -->
    <?php $this->load->view('resources/script'); ?>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/picker.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/datepicker.js')?>"></script>

    <script>
        $(document).ready( function () {
            $('.table').DataTable();

            $('.datepicker').pickadate()
        } );
    </script>

</body>
</html>

