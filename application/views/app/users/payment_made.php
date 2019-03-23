<?php
$this->load->view('landing/user_header');
?>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">
        <?php if( $user->membership_type == 'user' ) : ?>
            <?php $this->load->view('upgrade_plan')?>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="row g-mt-10">
                    <?php $this->load->view('msg_view'); ?>
                    <div class="alert alert-dismissible fade show g-bg-gray-dark-v2 g-color-white rounded-0" role="alert">
                        <div class="media">
                            <span class="d-flex g-mr-10 g-mt-5">
                                <i class="icon-question g-font-size-25"></i>
                            </span>
                            <span class="media-body align-self-center">
                                <strong>Just you know!</strong> You account will be blocked if you confirm payment without truly paying.
                            </span>
                        </div>
                    </div>
                    <h4 class="h6 g-font-weight-600 g-color-black g-mb-20 px-3">To validate your payment, please fill the form.</h4>
                    <?= form_open('dashboard/payment_made_process/')?>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <select name="bank_name" class="form-control">
                                    <option value="">--Select--</option>
                                    <?php
                                    $banks = explode(',', lang('banks'));
                                    foreach ( $banks as $bank ) : ?>
                                        <option value="<?= trim($bank); ?>"><?= trim($bank); ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="tid" value="<?= $row->trans_id; ?>">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="wallet address">Amount Paid</label>
                                <input type="text" name="amount_paid" id="amount_paid" value="<?= $row->amount; ?>" class="form-control" placeholder="<?= $row->amount;?>">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="deposit_type">Deposit Type</label>
                                <select name="deposit_type" required class="form-control">
                                    <option value="Cash Deposit" selected>Cash Deposit</option>
                                    <option value="Mobile Banking">Mobile Banking</option>
                                    <option value="Internet Banking Transfer">Internet Banking Transfer</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="depositor">Remark</label>
                                <textarea name="remark" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="date paid">Date You Paid</label>
                            <input type="date" name="date_paid" required class="form-control"  placeholder="Date you paid">
                        </div>
                    </div>


                    <div class="col-md-12 g-mt-5 py-3">
                        <button type="submit" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Submit</button>
                        <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view("landing/user_footer"); ?>