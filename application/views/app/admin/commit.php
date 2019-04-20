<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <?php $this->load->view('msg_view');?>
            <div class="col-sm-12 sort-panel">
                <h6 class="title text-danger">What will you like to do with this transaction?</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>User Detail :
                            <b>
                                <a href="<?= base_url('admin/user/?uid=' . $row->user_id.'&name=' . $row->user_name); ?>"><?= $row->user_name; ?>
                                </a>
                            </b>
                        </h4>
                    </div>
                    <div class="col-sm-12">
                        <h4>Product Name : <b><?= $row->product_name?></b></h4>
                    </div>
                    <div class="col-sm-12">
                        <h4>Transaction Amount : <b><?= ngn($row->amount); ?></b></h4>
                    </div>
                    <form method="POST" action="<?= base_url('admin/commit_process')?>">
                        <div class="form-group">
                            <label for="action">Action</label>
                            <select class="form-control" name="action" required>
                                <option value="" selected>-- Select Action --</option>
                                <option value="approved">Approve (Select this option if its Bank Transfer)</option>
                                <option value="success">Success</option>
                                <option value="decline">Decline (This will set the status to decline)</option>
                                <option value="fail">Fail (Money won't be refunded)</option>
                                <option value="refund">Refund (This will take the amount back to user wallet)</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?= $row->id; ?>">
                        <input type="hidden" name="trans_id" value="<?= $row->trans_id; ?>">
                        <input type="hidden" name="amount" value="<?= $row->amount; ?>">
                        <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
                        <button type="submit" class="btn btn-success btn-sm col-sm-4">Submit</button>
                        <a href="<?= base_url('admin/')?>" class="btn btn-danger btn-sm col-sm-3">Go back </a>&nbsp;&nbsp;
                    </form>
                </div>



            </div>
        </div>
    </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>