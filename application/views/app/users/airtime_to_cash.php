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
            <div class="col-xs-12 ">
                <?php $this->load->view('msg_view');?>
                <?php if( $row && !empty($row) ) : ?>
                    <div class="col-12 alert alert-info">
                        <p><?= $row->details; ?></p>
                    </div>
                    <p>
                        <b>Amount Initiated</b> : <?= ngn($row->incoming); ?>
                    </p>
                    <p>
                        <b>Amount To Receive</b> : <?= ngn($row->outgoing); ?>
                    </p>
                    <p>
                        <b>Network</b> : <?= strtoupper($row->network); ?>
                    </p>
                    <p>
                        <b>Status</b> : <span class="alert alert-warning"><?= $row->status; ?></span>
                    </p>
                    <p>
                        <b>Date Initiated</b> : <?= neatDate($row->datetime) . ' ' . neatTime($row->datetime); ?>
                    </p>

                    <a class="btn btn btn-md u-btn-primary g-width-160--md g-font-size-2" href="<?= base_url('dashboard/airtime_to_cash/?proceed=true')?>" >Proceed</a>
                <?php else :?>
                    <div class="col-md-6">
                        <form id="pin_transfer" action="<?= base_url('dashboard/airtime_process');?>" method="post">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label" for="Network">Select network <span class="text-danger">*</span></label>
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
                                        <label class="label" for="amount">Enter the amount you're sending <span class="text-danger">*</span></label>
                                        <input type="text" name="amount" id="pin_amount" class="form-control number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label" for="sender">Enter the number you're sending it from <span class="text-danger">*</span></label>
                                        <input type="text" name="sender" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="to_receive text-danger"></span>
                                <br />
                            </div>
                            <input type="hidden" name="product_id" id="product_id" value="8" />
                            <input type="hidden" name="amount_earned" id="amount_earned" value="" />
                            <input type="hidden" name="post_type" value="airtime_transfer" />
                            <button class="btn btn btn-md u-btn-primary g-width-160--md g-font-size-2"  type="submit">Submit</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $this->load->view("landing/user_footer"); ?>