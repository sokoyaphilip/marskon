<?php include("user_header.php"); ?>
    <div class="g-pa-20" style="min-height: calc(92vh - 67px);">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Select Network To Buy Airtime</h4>
                        <div class="btn-group justified-content">
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" checked=""
                                       type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-mtn--checked rounded-0">MTN</span>
                            </label>
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-red--checked g-brd-left-none--md rounded-0">Airtel</span>
                            </label>
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-glo--checked g-brd-left-none--md rounded-0">GLO</span>
                            </label>
                            <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radGroupBtn1_1" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-color-white--checked g-bg-etisalat--checked g-brd-left-none--md rounded-0">9-Mobile</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 g-mt-10">
                        <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                            <div class="dropdown bootstrap-select js-select u-select--v3-select u-sibling w-100 dropup">
                                <select
                                        class="js-select u-select--v3-select u-sibling w-100" required="required"
                                        title="Select Price Plan" style="display: none;" tabindex="-98">
                                    <option class="bs-title-option" value=""></option>
                                    <option value="selectListItem1"
                                            data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-rocket g-font-size-18 g-mr-15&quot;></i><span>Select List Item 1</span></span>">
                                        Select List Item 1
                                    </option>
                                    <option value="selectListItem2"
                                            data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>Select List Item 2</span></span>">
                                        Select List Item 2
                                    </option>
                                    <option value="selectListItem3"
                                            data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-shift-right g-font-size-18 g-mr-15&quot;></i><span>Select List Item 3</span></span>">
                                        Select List Item 3
                                    </option>
                                    <option value="selectListItem4"
                                            data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;fa fa-import g-font-size-18 g-mr-15&quot;></i><span>Additional List Item 4</span></span>">
                                        Additional List Item 4
                                    </option>
                                </select>
                                <div class="d-flex align-items-center justify-content-center g-absolute-centered--y g-right-0 h-100 g-width-40 g-bg-primary g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-rounded-right-25">
                                    <i class="fa fa-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 g-mt-10">
                <textarea id="inputGroup-3_3"
                          class="form-control form-control-md u-textarea-expandable g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-resize-none g-overflow-hidden"
                          rows="3"
                          placeholder="Enter Phone Number Here, Separate Numbers wth (,) for multiple recharge."></textarea>
                    </div>
                    <div class="col-md-12 g-mt-10 text-right">
                        <a class="js-fancybox btn btn-xl u-btn-primary g-rounded-20 g-width-160--md g-font-size-default g-ml-10" href="#">Recharge Airtime
                        </a>
                    </div>
                </div>
            </div>
            <div class="g-pa-20 col-md-8">
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
                                <td>1</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Product Manager</td>
                                <td>John.doe@gmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown1Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown1" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown1">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown1"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown1Invoker">
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
                            <tr>
                                <td>2</td>
                                <td>Wesley Potter</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Sales Manager</td>
                                <td>delaney.schroeder@hilda.biz</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                             style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown2Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown2" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown2">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown2"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown2Invoker">
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
                            <tr>
                                <td>3</td>
                                <td>Mitchell Bowen</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Developer</td>
                                <td>alanna_wolff@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown3Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown3" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown3">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown3"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown3Invoker">
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
                            <tr>
                                <td>4</td>
                                <td>Alejandro Mendoza</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>christine_parisian@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-primary g-rounded-3" role="progressbar"
                                             style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown4Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown4" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown4">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown4"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown4Invoker">
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
                            <tr>
                                <td>6</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Product Manager</td>
                                <td>John.doe@gmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown6Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown6" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown6">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown6"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown6Invoker">
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
                            <tr>
                                <td>7</td>
                                <td>Wesley Potter</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Sales Manager</td>
                                <td>delaney.schroeder@hilda.biz</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                             style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown7Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown7" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown7">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown7"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown7Invoker">
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
                            <tr>
                                <td>8</td>
                                <td>Mitchell Bowen</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Developer</td>
                                <td>alanna_wolff@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown8Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown8" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown8">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown8"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown8Invoker">
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
                            <tr>
                                <td>9</td>
                                <td>Alejandro Mendoza</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>christine_parisian@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-primary g-rounded-3" role="progressbar"
                                             style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown9Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown9" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown9">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown9"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown9Invoker">
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
                            <tr>
                                <td>10</td>
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
                                        <a id="dropDown10Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown10" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown10">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown10"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown10Invoker">
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
                            <tr>
                                <td>11</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Product Manager</td>
                                <td>John.doe@gmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown11Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown11" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown11">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown11"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown11Invoker">
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
                            <tr>
                                <td>12</td>
                                <td>Wesley Potter</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Sales Manager</td>
                                <td>delaney.schroeder@hilda.biz</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                             style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown12Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown12" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown12">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown12"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown12Invoker">
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
                            <tr>
                                <td>13</td>
                                <td>Mitchell Bowen</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Developer</td>
                                <td>alanna_wolff@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown13Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown13" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown13">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown13"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown13Invoker">
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
                            <tr>
                                <td>14</td>
                                <td>Alejandro Mendoza</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>christine_parisian@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-primary g-rounded-3" role="progressbar"
                                             style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown14Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown14" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown14">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown14"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown14Invoker">
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
                            <tr>
                                <td>15</td>
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
                                        <a id="dropDown15Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown15" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown15">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown15"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown15Invoker">
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
                            <tr>
                                <td>16</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Product Manager</td>
                                <td>John.doe@gmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown16Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown16" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown16">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown16"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown16Invoker">
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
                            <tr>
                                <td>17</td>
                                <td>Wesley Potter</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Sales Manager</td>
                                <td>delaney.schroeder@hilda.biz</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                             style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown17Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown17" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown17">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown17"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown17Invoker">
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
                            <tr>
                                <td>18</td>
                                <td>Mitchell Bowen</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Developer</td>
                                <td>alanna_wolff@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown18Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown18" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown18">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown18"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown18Invoker">
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
                            <tr>
                                <td>19</td>
                                <td>Alejandro Mendoza</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>christine_parisian@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-primary g-rounded-3" role="progressbar"
                                             style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown19Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown19" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown19">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown19"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown19Invoker">
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
                            <tr>
                                <td>20</td>
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
                                        <a id="dropDown20Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown20" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown20">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown20"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown20Invoker">
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
                            <tr>
                                <td>21</td>
                                <td>John Doe</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Product Manager</td>
                                <td>John.doe@gmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown21Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown21" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown21">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown21"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown21Invoker">
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
                            <tr>
                                <td>22</td>
                                <td>Wesley Potter</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Sales Manager</td>
                                <td>delaney.schroeder@hilda.biz</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightblue-v3 g-rounded-3" role="progressbar"
                                             style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown22Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown22" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown22">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown22"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown22Invoker">
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
                            <tr>
                                <td>23</td>
                                <td>Mitchell Bowen</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Developer</td>
                                <td>alanna_wolff@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-lightbrown g-rounded-3" role="progressbar"
                                             style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown23Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown23" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown23">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown23"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown23Invoker">
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
                            <tr>
                                <td>24</td>
                                <td>Alejandro Mendoza</td>
                                <td>
                                    <div class="d-inline-block">
                          <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-gray-light-v8 g-bg-gray-light-v8 g-font-size-default g-color-gray-dark-v6 g-rounded-50 g-py-4 g-px-15">
                          <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                          Employees
                          </span>
                                    </div>
                                </td>
                                <td>Designer</td>
                                <td>christine_parisian@hotmail.com</td>
                                <td>
                                    <div class="progress g-height-6 g-rounded-3">
                                        <div class="progress-bar g-bg-primary g-rounded-3" role="progressbar"
                                             style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="g-pos-rel g-top-3 d-inline-block">
                                        <a id="dropDown24Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown24" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown24">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown24"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown24Invoker">
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
                            <tr>
                                <td>25</td>
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
                                        <a id="dropDown25Invoker"
                                           class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-secondary--hover"
                                           href="javascript:;" aria-controls="dropDown25" aria-haspopup="true"
                                           aria-expanded="false" data-dropdown-event="click"
                                           data-dropdown-target="#dropDown25">
                                            <i class="hs-admin-more-alt"></i>
                                        </a>

                                        <div id="dropDown25"
                                             class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white u-dropdown--css-animation u-dropdown--hidden u-dropdown--reverse-y"
                                             aria-labelledby="dropDown25Invoker">
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
    </div>
<?php include("user_footer.php"); ?>