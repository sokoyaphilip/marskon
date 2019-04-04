<?php
$this->load->view('landing/user_header');
?>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">

        <?php $this->load->view('upgrade_plan')?>

        <div class="col-lg-12">
            <!-- Teal Alert -->
            <div class="alert alert-dismissible fade show g-bg-teal g-color-white rounded-0" role="alert">
                <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

                <div class="media">
                          <span class="d-flex g-mr-10 g-mt-5">
                            <i class="icon-check g-font-size-25"></i>
                          </span>
                    <span class="media-body align-self-center">
                            <strong>Welcome!</strong> We'll like to transact with you, please reach out to us via WhatsApp on >>> .<a target="_blank" href="https://wa.me/2348130410092">https://wa.me/2348130410092</a>
                          </span>
                </div>
            </div>
            <!-- End Teal Alert -->
        </div>
    </div>
<?php $this->load->view("landing/user_footer"); ?>