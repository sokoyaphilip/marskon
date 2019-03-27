<?php

if( $user->membership_type == 'user' ) : ?>
<div class="alert alert-dismissible fade show g-bg-gray-dark-v2 g-color-white rounded-0" role="alert">
    <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
        <span class="g-color-white" aria-hidden="true">×</span>
    </button>
    <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">
            <i class="icon-question g-font-size-25"></i>
        </span>
        <span class="media-body align-self-center">
            <strong>Heads up!</strong> Get a whooping commission starting from 4% when you upgrade your account to reseller account with N1000.
            <button type="button" class="btn btn-outline-success upgrade">Upgrade Now</button>
        </span>
    </div>
</div>
<?php elseif( $user->membership_type === "pending") :
    $user_id = $this->session->userdata('logged_id');
    $row =  $this->site->run_sql("SELECT trans_id FROM transactions WHERE user_id = {$user_id} AND product_id = 10 LIMIT 1")->row();
    ?>
    <div class="alert alert-dismissible fade show g-bg-gray-dark-v2 g-color-white rounded-0" role="alert">
        <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span class="g-color-white" aria-hidden="true">×</span>
        </button>
        <div class="media">
        <span class="d-flex g-mr-10 g-mt-5">
            <i class="icon-question g-font-size-25"></i>
        </span>
            <span class="media-body align-self-center">
            <strong>Heads up!</strong> You need to confirm that you've made payment of N1000 for the account upgrade.
            <a class="btn btn-outline-success" href="<?= base_url('dashboard/payment_made/?tid=' .$row->trans_id .'&product_id=10' ); ?>">Confirm Payment</a>
        </span>
        </div>
    </div>
<?php endif; ?>
