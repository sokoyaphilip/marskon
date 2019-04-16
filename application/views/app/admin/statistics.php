<?php $this->load->view('landing/admin_header'); ?>
<style>
    .dashboard_links:hover{
        text-decoration: none !important;
    }
    .dashboard_links:hover div.card{
        border: 1px solid #e20f43 !important;
    }
</style>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-md-3 col-xs-6 g-mb-30">
            <!-- Panel -->
            <div class="card g-brd-lightblue-v4 rounded" style="width:100%;">
                <div class="card-block g-pa-20">
                    <header class="media g-mb-40">
                        <h4 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            Total User' Balance</h4>
                    </header>

                    <div class="d-flex align-items-center g-mb-25">
                        <span class="g-font-weight-300 g-font-size-18 g-color-black"></span>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class="col-md-3 col-xs-6 g-mb-30">
            <!-- Panel -->
            <div class="card g-brd-lightblue-v4 rounded" style="width:100%;">
                <div class="card-block g-pa-20">
                    <header class="media g-mb-40">
                        <h4 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            Successful Transaction</h4>
                    </header>

                    <div class="d-flex align-items-center g-mb-25">
                        <span class="g-font-weight-300 g-font-size-18 g-color-black"></span>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class="col-md-3 col-xs-6 g-mb-30">
            <!-- Panel -->
            <div class="card g-brd-lightblue-v4 rounded" style="width:100%;">
                <div class="card-block g-pa-20">
                    <header class="media g-mb-40">
                        <h4 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            Failed Transaction (Decline, Fail)</h4>
                    </header>

                    <div class="d-flex align-items-center g-mb-25">
                        <span class="g-font-weight-300 g-font-size-18 g-color-black"></span>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
        <div class="col-md-3 col-xs-6 g-mb-30">
            <!-- Panel -->
            <div class="card g-brd-lightblue-v4 rounded" style="width:100%;">
                <div class="card-block g-pa-20">
                    <header class="media g-mb-40">
                        <h4 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">
                            Clubkonnect Balance</h4>
                    </header>

                    <div class="d-flex align-items-center g-mb-25">
                        <span class="g-font-weight-300 g-font-size-18 g-color-black"></span>
                    </div>
                </div>
            </div>
            <!-- End Panel -->
        </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>
