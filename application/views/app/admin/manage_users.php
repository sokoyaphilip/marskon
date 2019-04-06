<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="g-pa-20 col-md-12">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">All Users</h1>
        <?php $this->load->view('msg_view'); ?>
        <div class="media-md align-items-center g-mb-30">
            <div class="d-flex g-mb-15 g-mb-0--md">
                <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Manage all users in the system</h3>
            </div>

            <div class="media d-md-flex align-items-center ml-auto">
                <div class="d-flex align-items-center">
                    <span class="g-hidden-sm-down g-color-gray-dark-v6 g-mr-12">Show:</span>

                    <div class="u-select--v1 g-pr-20">
                        <select id="datatableEntries1" class="js-select u-select--v1-select w-100">
                            <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">5 Entries</span>'
                                    value="5">5 Entries
                            </option>
                            <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">10 Entries</span>'
                                    value="10">10 Entries
                            </option>
                            <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">15 Entries</span>'
                                    value="15">15 Entries
                            </option>
                            <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">20 Entries</span>'
                                    value="20">20 Entries
                            </option>
                            <option data-content='<span class="d-flex align-items-center g-line-height-1_2 g-color-black">25 Entries</span>'
                                    value="25">25 Entries
                            </option>
                        </select>
                        <i class="fa fa-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6"></i>
                    </div>
                </div>

                <div class="d-flex g-ml-15 g-ml-55--md">
                    <div class="input-group g-pos-rel g-width-320--md">
                        <input id="datatableSearch1"
                               class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10"
                               type="text" placeholder="Search Users">
                        <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-primary g-color-secondary--hover rounded-0"
                                type="submit">
                            <i class="fa fa-search g-absolute-centered"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="g-mb-40">
            <div class="table-responsive">
                <table class="js-datatable table u-table--v3 u-editable-table--v1 g-color-black"
                       data-dt-info="#datatableInfo1" data-dt-search="#datatableSearch1"
                       data-dt-entries="#datatableEntries1" data-dt-is-show-paging="true"
                       data-dt-pagination="datatablePagination1"
                       data-dt-page-length="5" data-dt-is-responsive="false"
                       data-dt-pagination-classes="list-inline text-right mb-0"
                       data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down"
                       data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-secondary--active g-color-white--active g-brd-gray-light-v7 g-brd-secondary--hover g-brd-secondary--active g-rounded-4 g-py-8 g-px-15"
                       data-dt-pagination-next-classes="list-inline-item"
                       data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12"
                       data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="fa fa-angle-right"></i></span><span class="sr-only">Next</span>'
                       data-dt-pagination-prev-classes="list-inline-item"
                       data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-secondary--hover g-rounded-4 g-py-8 g-px-12"
                       data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="fa fa-angle-left"></i></span><span class="sr-only">Prev</span>'>
                    <thead>
                    <tr>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">Full Name</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">Email</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">Phone Number</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">Wallet Balance</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center">Last Logged In</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center g-nowrap">Status</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="media">
                                <div class="d-flex align-self-center g-nowrap">Action</div>

                                <div class="d-flex align-self-center ml-auto">
                            <span class="d-inline-block g-width-10 g-line-height-1 g-font-size-10">
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="g-color-gray-light-v6 g-color-secondary--hover g-text-underline--none--hover"
                               href="javascript:;">
                              <i class="fa fa-angle-down"></i>
                            </a>
                          </span>
                                </div>
                            </div>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php foreach( $users as $user ): ?>
                            <tr>
                                <td>
                                    <?= ucwords($user->name); ?>
                                </td>
                                <td><?= $user->email;?></td>
                                <td><?= $user->phone; ?></td>
                                <td>&#8358;
                                    <form action="<?= base_url('admin/update_wallet/'); ?>" method="post" id="<?= $user->id;?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control number" name="wallet" value="<?= $user->wallet;?>" >
                                        </div>
                                        <input type="hidden" name="user" value="<?= $user->name; ?>">
                                        <input type="hidden" name="user_id" value="<?= $user->id; ?>">
                                        <button type="submit" data-wid="<?= $user->id; ?>" class="btn btn-sm btn-danger update-wallet">Update Wallet</button>
                                    </form>
                                </td>
                                <td><?= neatDate($user->last_login) . ' ' . neatTime($user->last_login); ?></td>
                                <td><?= statusLabel($user->status) ; ?></td>
                                <td class="text-center">
                                    <select name="action" class="form-control select_action">
                                        <option>--Select An Action--</option>
                                        <option value="<?= base_url('admin/user_action/active/' . $user->id); ?>">Make Active</option>
                                        <option value="<?= base_url('admin/user_action/block/' . $user->id); ?>">Block User</option>
                                        <option value="<?= base_url('admin/user_action/delete/' . $user->id); ?>">Delete User</option>
                                    </select>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="media align-items-center g-mb-45">
            <div id="datatableInfo1" class="media-body"></div>

            <nav id="datatablePagination1" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
        </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>
