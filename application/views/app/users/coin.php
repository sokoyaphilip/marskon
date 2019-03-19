<?php
$this->load->view('landing/user_header');
?>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">
        <div class="row">
            <div class="col-sm-6">
                <div class="row g-mt-10">
                    <form>
                        <div class="col-sm-12 g-mt-10">
                            <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">To Sell E-Coins
                                Complete The Form
                                Below</h4>

                            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                                <div class="dropdown bootstrap-select js-select u-select--v3-select u-sibling w-100 dropup">
                                    <div class="form-group g-brd-gray-light-v7 g-rounded-25 mb-0">
                                        <select class="form-control w-100" id="network" required
                                                name="network">
                                            <option value="" selected>-- Which wallet are you sending it from? --</option>
                                            <option value="blockchain">Blockchain</option>
                                            <option value="paxful">Paxful</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 g-mt-10">
                            <div class="form-group mb-0">
                                <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Upload proof(Screenshot that you sent e-coins)</h4>
                                <input class="js-file-attachment" name="proof" type="file">
                            </div>
                        </div>
                        <div class="col-sm-12 g-mt-10">
                            <div class="form-group">
                                <div class="g-pos-rel">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                            <i class="fa fa-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                                    <input id="inputGroup-3_1"
                                           class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10"
                                           type="text" placeholder="Amount in USD ($)">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 g-mt-5 py-3">
                            <button type="button" class="btn btn-md u-btn-primary g-width-160--md g-font-size-2">Submit</button>
                            <button type="reset" class="btn btn-md u-btn-black g-width-160--md g-font-size-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row g-mt-10">
                    <div class="col-sm-12 g-mt-10">
                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Below is the details of the account to transfer the e-coins to:</h4>
                        <div class="form-group">
                            <h3>Credit To: <span class="g-color-bluegray">ed1de241efwFSRe$wDer$ER</span></h3>
                        </div>
                    </div>
                    <div class="col-sm-12 g-mt-10">
                        <div class="form-group">
                            <h3>Amount USD: <span class="g-color-red">$120</span></h3>
                        </div>
                    </div>
                    <div class="col-sm-12 g-mt-10">
                        <div class="form-group">
                            <h3>Amount Equivalent: <span class="g-color-red">&#8358;42,000</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="g-pa-20 col-sm-12">
            <h1 class="g-font-weight-300 g-font-size-28 g-color-black g-mb-30">Transaction History</h1>

            <div class="media-md align-items-center g-mb-30">
                <div class="d-flex g-mb-15 g-mb-0--md">
                    <h3 class="g-font-weight-400 g-font-size-16 g-color-black mb-0">Filter All Transaction</h3>
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
                                   type="text" placeholder="Search for name, position">
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
                                    <div class="d-flex align-self-center">Transaction ID</div>

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
                                    <div class="d-flex align-self-center">Date & Time</div>

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
                                    <div class="d-flex align-self-center">Type</div>

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
                                    <div class="d-flex align-self-center">Description</div>

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
                                    <div class="d-flex align-self-center">Amount</div>

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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>5</td>
                            <td>Jesus Park</td>
                            <td>
                                <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                </div>
                            </td>
                            <td>Product Manager</td>
                            <td>myah_mcdet@dna.com</td>
                            <td>
                                <div class="progress g-height-6 g-rounded-3">
                                    <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                         style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="g-pos-rel g-top-3 d-inline-block">
                                    <a id="dropDown5Invoker"
                                       class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                       href="javascript:;" aria-controls="dropDown5" aria-haspopup="true"
                                       aria-expanded="false" data-dropdown-event="click"
                                       data-dropdown-target="#dropDown5">
                                        <i class="hs-admin-more-alt"></i>
                                    </a>

                                    <div id="dropDown5"
                                         class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                         aria-labelledby="dropDown5Invoker">
                                        <ul class="list-unstyled g-nowrap mb-0">
                                            <li>
                                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14"
                                                   href="javascript:;">
                                                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14"
                                                   href="javascript:;">
                                                    <i class="hs-admin-archive g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                    Archive
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14"
                                                   href="javascript:;">
                                                    <i class="hs-admin-check g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                    Mark as Done
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14"
                                                   href="javascript:;">
                                                    <i class="hs-admin-plus g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                    New Task
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14"
                                                   href="javascript:;">
                                                    <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
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
<?php $this->load->view("landing/user_footer"); ?>