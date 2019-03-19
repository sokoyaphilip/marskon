<?php $this->load->view('landing/admin_header'); ?>
<div class="g-pa-20" style="min-height: calc(92vh - 67px);">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 class="h3 text-center g-mb-20">Create Plan</h3>
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="h6 g-font-weight-600 g-color-black">Select A Service</label>
                            <select id="network_data_plan"
                                    class="js-select u-select--v3-select u-sibling g-rounded-25 w-100 g-px-10" style="height:40px;" required="required"
                                    title="Select Data Plan" tabindex="-98">
                                <option value="">--Select a category--</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="h6 g-font-weight-600 g-color-black">Plan Amount(&#8358;)</label>
                            <div class="g-pos-rel">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                <i class="fa fa-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                                </span>
                                <textarea id="plans"
                                          class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-resize-none g-overflow-hidden"
                                          rows="3"
                                          placeholder="E.g: 1GiB - 1000, Separate Numbers wth (,) for multiple plans."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <tr>
                        <td>1</td>
                        <td>Airtel Data(Reseller)</td>
                        <td>
                            <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightred-v3 g-mr-8"></span>
                          1.5GiB
                          </span>
                            </div>
                        </td>
                        <td>
                            <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightred-v3 g-mr-8"></span>
                          &#8358; 850
                          </span>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-info">View All</button>
                            </div>
                        </td>
                    </tr>
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