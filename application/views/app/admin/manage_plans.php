<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="h3 text-center g-mb-20">Create Plan</h3>

            <?php $this->load->view('msg_view');?>
            <form method="POST" action="<?= base_url('admin/plans/')?>">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="label" for="Service Type">Service A Service</label>
                            <select class="form-control" name="service" id="service" required>
                                <option value="">-- Select a service --</option>
                                <?php foreach( $services as $service ) : ?>
                                    <option value="<?= $service->id; ?>"><?= ucwords($service->title. '('. ucwords($service->product_name).') - Discount for ' . $service->discount_type);?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="label" for="Starting From">Plan - Amount</label>
                            <input type="text" class="form-control" required name="plans" required placeholder="Eg : 1GB - 3000, 2GB - 2500 e.t.c.">
                        </div>
                        <span class="text-danger"><b>The format should be plan - amount separated with comma(,) if many</b></span>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-block btn-lg g-rounded-20">Create Plan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="g-pa-20 col-md-12">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">All Plans</h1>

        <div class="media-md align-items-center g-mb-30">
            <div class="d-flex g-mb-15 g-mb-0--md">
                <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Filter Plans</h3>
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
                               type="text" placeholder="Search Plans">
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
                                <div class="d-flex align-self-center">S/N</div>

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
                                <div class="d-flex align-self-center">Service Name</div>

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
                                <div class="d-flex align-self-center">Plan Starts From</div>

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
                                <div class="d-flex align-self-center">Pricing From</div>

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
                                <div class="d-flex align-self-center">Action</div>

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
                        <?php $x = 1; foreach( $plans as $plan) : ?>
                        <tr id="<?= $plan->id; ?>">
                            <td><?= $x; ?></td>
                            <td class="text-center">
                                <?= ucwords($plan->service_name) ?><?= ($plan->discount_type =='all') ? '' : '('.$plan->discount_type.')' ?>
                            </td>
                            <td class="text-center"><?= $plan->name; ?></td>
                            <td class="text-center"><?= ngn($plan->amount) ?></td>
                            <td>
                                <?php if(!$id_set) : ?>
                                    <button type="button"
                                            data-id="<?= $plan->sid; ?>" data-name="<?= $plan->service_name . ' - ', $plan->discount_type; ?>" class="btn btn-outline-success btn-sm open-plan-modal" data-toggle="modal" data-target="#planModal">
                                        See All
                                    </button>
                                <?php else : ?>
                                    <button type="button"
                                            data-id="<?= $plan->id; ?>" data-name="<?= $plan->name; ?>" data-amount="<?= $plan->amount;?>" class="btn btn-outline-success btn-sm open-plan-update" data-toggle="modal" data-target="#editModal">
                                        Edit Plan
                                    </button>
                                    <button class="btn btn-danger btn-sm delete-plan" data-id="<?= $plan->id ; ?>">Delete</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php $x++; endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="media align-items-center g-mb-45">
            <div id="datatableInfo1" class="media-body"></div>

            <nav id="datatablePagination1" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="planModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title plan-name"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <table class="table table-striped" id="table">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th class="text-center">Plan Name</th>
                            <th class="text-center">Plan Amount</th>
                        </tr>
                        </thead>
                        <tbody id="plan-body">

                        </tbody>
                    </table>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit This Plan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="edit-plan">
                        <div class="form-group">
                            <label for="plan name">Plan name</label>
                            <input class="form-control" type="text" name="name" id="plan_name" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="plan name">Plan Amount</label>
                            <input class="form-control number" type="text" name="amount" id="plan_value" value="" required>
                        </div>
                        <input type="hidden" name="plan_id" id="edit_plan_id" value="" />
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success update-plan">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('landing/admin_footer'); ?>