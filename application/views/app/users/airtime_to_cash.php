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
                <nav>
                    <div class="nav nav-tabs nav-fill text-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-fund"
                           role="tab" aria-controls="nav-home" aria-selected="true">Recharge Pin Transfer</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-transfer"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Airtime Transfer</a>
                    </div>
                </nav>
                <?php $this->load->view('msg_view'); ?>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-fund" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row g-mt-10">
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
                                            <button class="btn btn-md u-btn-primary col-sm-4" type="submit">Submit</button>
                                            <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                                        </form>
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
                                        <div class="alert alert-danger" role="alert">
                                            <b>Please read the instructions below.</b>
                                        </div>
                                        <div id="see-info" class="alert alert-info">
                                            <p>
                                            <ul>
                                                <li><b>Your account may be blocked if we get multiple request at short period of time from you.</b></li>
                                                <li>Fill in the form below correctly for Airtime to cash</li>
                                                <li>The minimum amount is N500 and maximum is N5,000</li>
                                                <li>If you want to send pin, please load it on any MTN sim and transfer to us.</li>
                                                <li>You must send the airtime within 20 minutes or the transaction will be automatically cancelled.</li>
                                                <li>To transfer MTN airtime *600*09069118406*amount*pin#</li>
                                                <li>To change MTN transfer pin *600*default pin* new pin* new pin*#</li>
                                                <li>To transfer 9mobile: *223*pin*amount*number#</li>
                                                <li>To change 9mobile transfer pin *247*default pin* new pin* new pin*# eg: *247*0000*new pin#</li>
                                                <li>For MTN: Your wallet will be credited with 85% of the amount you send eg: N1000, N850 will be credited.</li>
                                                <li>For 9mobile: Your wallet will be credited with 80% of the amount you send eg: N1000, N800 will be credited.</li>
                                                <li>You must not send any amount different from the amount filled.</li>
                                                <li>We accespt airtime Transfer only. Any VTU sent to us will not be credited to your wallet.</li>
                                            </ul>
                                            </p>
                                        </div>
                                        <form id="airtime_transfer" action="<?= base_url('dashboard/airtime_process');?>" method="post">
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
                                                        <label class="label" for="amount">Enter amount you're sending <span class="text-danger">* </span> </label>
                                                        <input type="text" class="form-control number" name="amount" required />
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

                                            <div class="row" style="display: none;">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="receiver">Please enter the number you are sending it from <span class="text-danger">*</span></label>
                                                        <input type="text" name="sender" class="form-control number">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <span class="to_receive text-danger"></span>
                                                <br />
                                            </div>
                                            <input type="hidden" name="product_id" id="product_id" value="9" />
                                            <input type="hidden" name="amount_earned" id="amount_earned" value="" />
                                            <input type="hidden" name="post_type" value="airtime_transfer" />
                                            <div class="col-md-12 g-mt-5 py-3">
                                                <button type="submit" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Submit</button>
                                                <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                                            </div>
                                        </form>

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