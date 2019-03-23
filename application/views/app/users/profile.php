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
            <?php if( $user->membership_type == 'user' ) : ?>
                <?php $this->load->view('upgrade_plan')?>
            <?php endif; ?>
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill text-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#profile-settings"
                           role="tab" aria-controls="nav-home" aria-selected="true">Profile Settings</a>
                        <a class="nav-item nav-link" id="nav-change-password-tab" data-toggle="tab" href="#change-password"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Change Password</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="profile-settings" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <div class="container">
                            <?php $this->load->view('msg_view'); ?>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row g-mt-10">
                                        <?= form_open('dashboard/profile_setting'); ?>
                                        <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label" for="Network">Full Name</label>
                                                <input type="text" name="name" class="form-control" autofocus autocomplete="" value="<?= $user->name; ?>">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" name="phone" id="phone" class="form-control" readonly value="<?= $user->phone;?>" required autocomplete="off" placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" readonly value="<?= $user->email; ?>" required placeholder="Email Address">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="account_name">Account name</label>
                                                <input type="text" name="account_name" id="account_name" value="<?= $user->account_name; ?>" class="form-control" autocomplete="off" required placeholder="Account Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="account_type">Account Type</label>
                                                <select class="form-control" name="account_type">
                                                    <option value="current" <?php if($user->account_type == 'current') echo 'selected'; ?>>Current Account</option>
                                                    <option value="savings" <?php if($user->account_type == 'savings') echo 'selected'; ?>>Savings Account</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="bank_name">Bank Name</label>
                                                <select name="bank_name" class="form-control">
                                                    <?php
                                                    $banks = explode(',', lang('banks'));
                                                    foreach ( $banks as $bank ) : ?>
                                                        <option value="<?= trim($bank); ?>" <?php if( $user->bank_name == trim($bank) ) echo 'selected'; ?> ><?= trim($bank); ?></option>
                                                    <?php endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="password">Confirm Password</label>
                                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required placeholder="Please enter your password for confirmation">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="post_type" value="account">
                                    <div class="col-md-12 g-mt-5 py-3">
                                        <button type="submit" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Submit</button>
                                        <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                                    </div>
                                    <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="nav-change-password-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="row g-mt-10">
                                        <?= form_open('dashboard/profile_setting'); ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="current_password">Current Password</label>
                                                        <input type="password" class="form-control" name="current_password" id="current_password" required placeholder="Enter your current password">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="new_password">New Password</label>
                                                        <input type="password" name="new_password" id="new_password" class="form-control" required placeholder="New Password">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="label" for="confirm_password">Confirm Password</label>
                                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <input type="hidden" name="post_type" value="password_change">
                                                <div class="col-md-12 g-mt-5 py-3">
                                                    <button type="submit" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Submit</button>
                                                    <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                                                </div>
                                            </div>
                                        <?php form_close(); ?>
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