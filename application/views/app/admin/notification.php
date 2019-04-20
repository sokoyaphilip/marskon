<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="h3 text-center g-mb-20">Create Notification Message</h3>

            <?php $this->load->view('msg_view');?>
            <form method="POST" action="<?= base_url('admin/notification/')?>">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="label" for="notification">Drop your message</label>
                            <textarea name="message" row="3" class="form-control" <?= set_value('message',''); ?> placeholder="Please enter your notification."></textarea>
                            <?= form_error('message')?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block btn-lg g-rounded-20">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div style="margin-top: 20px" class="table-responsive" id="">
                <table class="table table-striped" id="table">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Date Posted</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $x = 1;
                        foreach( $notifications as $notification ) : ?>
                        <tr>
                            <td class="text-center"><?= $notification->id; ?></td>
                            <td class="text-center"><?= neatDate($notification->date_posted); ?></td>
                            <td class="text-center"><?= $notification->message ?></td>
                            <td>
                                <button class="btn btn-danger btn-sm delete-notification" data-id="<?= $notification->id ; ?>">Delete</button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>