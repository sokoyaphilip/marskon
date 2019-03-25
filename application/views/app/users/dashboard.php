<?php $this->load->view('landing/user_header'); ?>
<style>
    .col{
        flex-basis:unset !important;
    }
</style>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">
        <?php if( $user->membership_type == 'user' ) : ?>
            <?php $this->load->view('upgrade_plan')?>
        <?php endif; ?>
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
    </div>
<?php $this->load->view("landing/user_footer"); ?>