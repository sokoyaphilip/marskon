<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="h3 text-center g-mb-20 text-danger">Confirm Payment</h3>
            <hr />
            <div class="col-sm-12 sort-panel">
                <?php $this->load->view('msg_view');?>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Paid From</h3>
                        <?= $row->bank_name; ?>
                    </div>

                    <div class="col-sm-12">
                        <h3>Amount Paid</h3>
                        <?= ngn($row->amount_paid); ?>
                    </div>

                    <div class="col-sm-12">
                        <h3>Deposit Type </h3>
                        <?= $row->deposit_type; ?>
                    </div>

                    <div class="col-sm-12">
                        <h3>Date Paid : </h3>
                        <?= date('Y/m/d', strtotime($row->date_paid)); ?>
                    </div>

                    <div class="col-sm-12">
                        <h3>Remark</h3>
                        <?= $row->remark; ?>
                    </div>

                    <div class="col-sm-6">
                        <h3>Amount Initiated To Pay </h3>
                        <?= ngn($row->amount); ?>
                    </div>
                </div>
                <br />
                <h4>Action</h4>
                <form class="form-inline" method="post" action="<?= base_url('admin/approval')?>">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="action" class="sr-only">Action</label>
                        <select class="form-control-sm" name="action" required>
                            <option value=""> -- Select action --</option>
                            <option value="approved"> Approve </option>
                            <option value="declined"> Decline </option>
                        </select>
                        <input type="hidden" name="txn_id" value="<?= $row->id; ?>" />
                        <input type="hidden" name="user_id" value="<?= $row->user_id; ?>" />
                        <input type="hidden" name="amount" value="<?= $row->amount; ?>" />
                    </div>
                    <button type="submit" class="btn btn-sm btn-outline-success mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>
