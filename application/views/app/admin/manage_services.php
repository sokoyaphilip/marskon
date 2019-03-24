<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="h3 text-center g-mb-20">Create Service</h3>
            <form method="POST" action="<?= base_url('admin/services/')?>">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Service Type">Service Category</label>
                            <select class="form-control" name="product_id" required>
                                <option value="" selected>-- Select Service Category--</option>
                                <?php foreach($products as $product) :?>
                                    <option value="<?= $product->id ?>"><?= ucwords($product->title); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Starting From">Service Title</label>
                            <input type="text" class="form-control" required name="title" placeholder="Eg : Glo airtime">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Discount">Service Discount</label>
                            <select class="form-control" name="discount" required>
                                <option value="0" selected> 0% Discount </option>
                                <?php for( $x = 1; $x <= 10;  $x++ ) : ?>
                                    <option value="<?= $x;?>"><?= $x; ?>% Discount</option>
                                <?php endfor; ?>
                            </select>
                            <span class="text-danger">Leave as 0 if you're not giving discount</span>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Discount">Discount should work for?</label>
                            <select class="form-control" name="discount_type" required>
                                <option value="users" selected>All Buyer</option>
                                <option value="reseller"> Reseller </option>
                            </select>
                            <span class="text-danger">Leave as general, if no exception</span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Network Name">Network Name</label>
                            <select class="form-control" name="network_name">
                                <option value="">-- Please select the appropriate --</option>
                                <option value="glo">Glo</option>
                                <option value="9mobile">9mobile</option>
                                <option value="mtn">MTN</option>
                                <option value="airtel">Airtel</option>
                                <option value="gotv">GoTV</option>
                                <option value="dstv">DSTV</option>
                                <option value="electricity">Electricity</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="label" for="Starting From">Availability</label>
                            <select class="form-control" name="availability">
                                <option value="1" selected>Make Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="message">Service Message</label> <span class="text-danger">Give a detailed information about this service, if available</span>
                            <textarea class="form-control text-area" rows="3" name="message"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="message">SEO (Search ENgine Optimization)</label> <span class="text-danger">The keywords you'll like the user to search for in getting this item</span>
                            <textarea class="form-control text-area" rows="3" name="seo" placeholder="Search Engine Optimization"></textarea>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-4 offset-4">
                        <button class="btn btn-outline-success btn-md btn-block col-sm-12" type="submit" >Create</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="g-pa-20 col-md-12">
        <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">All Services</h1>

        <div class="media-md align-items-center g-mb-30">
            <div class="d-flex g-mb-15 g-mb-0--md">
                <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Filter Services</h3>
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
                               type="text" placeholder="Search Services">
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
                                <div class="d-flex align-self-center">Service ID</div>

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
                                <div class="d-flex align-self-center">Title</div>
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
                                <div class="d-flex align-self-center">Category</div>

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
                                <div class="d-flex align-self-center">Discount</div>
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
                                <div class="d-flex align-self-center">Availability</div>

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
                        <?php foreach( $services as $service) : ?>
                            <tr id="<?= $service->id; ?>">
                                <td class="text-center"><?= $service->id; ?></td>
                                <td class="text-center"><?= ucwords($service->title); ?></td>
                                <td class="text-center"><?= ucwords($service->product_name); ?></td>
                                <td class="text-center"><?= $service->discount .'% / For ' . ucfirst($service->discount_type); ?></td>
                                <td class="text-center"><?= ( $service->availability == 1 ) ? 'Yes' : 'No'; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/plans/?id=' . $service->id .'#plan-table' ); ?>" class="btn btn-outline-success btn-sm">View</a> |
                                    <button class="btn btn-danger btn-sm delete-service" data-id="<?= $service->id ; ?>">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach;?>
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
