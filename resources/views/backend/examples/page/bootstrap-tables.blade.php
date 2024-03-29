@extends('backend.examples.app')

@section('title','bootstrap table')

@section('example-content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Bootstrap tables</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
            <div>
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/tables/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Bootstrap Tables Docs</a>
            </div>
        </div>
    </div>

    <div class="card border-light shadow-sm mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0">#</th>
                        <th class="border-0">Traffic Source</th>
                        <th class="border-0">Source Type</th>
                        <th class="border-0">Category</th>
                        <th class="border-0">Global Rank</th>
                        <th class="border-0">Traffic Share</th>
                        <th class="border-0">Change</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    <tr>
                        <td class="border-0"><a href="#" class="text-primary fw-bold">1</a> </td>
                        <td class="border-0 fw-bold"><span class="icon icon-xs icon-gray w-30"><span class="fas fa-globe-europe"></span></span>Direct</td>
                        <td class="border-0">
                            Direct
                        </td>
                        <td class="border-0">
                            -
                        </td>
                        <td class="border-0">
                            --
                        </td>
                        <td class="border-0">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-2 px-0">
                                    <div class="small fw-bold">51%</div>
                                </div>
                                <div class="col-12 col-xl-10 px-0 px-xl-1">
                                    <div class="progress progress-lg mb-0">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100" style="width: 51%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">2.45%</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">2</a> </td>
                        <td class="fw-bold"><span class="icon icon-xs icon-info w-30"><span class="fab fa-google"></span></span>Google Search</td>
                        <td>
                            Search / Organic
                        </td>
                        <td>
                            -
                        </td>
                        <td>
                            --
                        </td>
                        <td>
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-2 px-0">
                                    <div class="small fw-bold">18%</div>
                                </div>
                                <div class="col-12 col-xl-10 px-0 px-xl-1">
                                    <div class="progress progress-lg mb-0">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">17.67%</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">3</a> </td>
                        <td class="fw-bold"><span class="icon icon-xs icon-danger w-30"><span class="fab fa-youtube"></span></span> youtube.com</td>
                        <td>
                            Social
                        </td>
                        <td>
                            <a class="small fw-bold" href="#">Arts and Entertainment</a>
                        </td>
                        <td>
                            #2
                        </td>
                        <td>
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-2 px-0">
                                    <div class="small fw-bold">18%</div>
                                </div>
                                <div class="col-12 col-xl-10 px-0 px-xl-1">
                                    <div class="progress progress-lg mb-0">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            -
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">4</a> </td>
                        <td class="fw-bold"><span class="icon icon-xs icon-purple w-30"><span class="fab fa-yahoo"></span></span> yahoo.com</td>
                        <td>
                            Referral
                        </td>
                        <td>
                            <a class="small fw-bold" href="#">News and Media</a>
                        </td>
                        <td>
                            #11
                        </td>
                        <td>
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-2 px-0">
                                    <div class="small fw-bold">8%</div>
                                </div>
                                <div class="col-12 col-xl-10 px-0 px-xl-1">
                                    <div class="progress progress-lg mb-0">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">9.30%</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td><a href="#" class="text-primary fw-bold">5</a> </td>
                        <td class="fw-bold"><span class="icon icon-xs icon-info w-30"><span class="fab fa-twitter"></span></span> twitter.com</td>
                        <td>
                            Social
                        </td>
                        <td>
                            <a class="small fw-bold" href="#">Social Networks</a>
                        </td>
                        <td>
                            #4
                        </td>
                        <td>
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-xl-2 px-0">
                                    <div class="small fw-bold">4%</div>
                                </div>
                                <div class="col-12 col-xl-10 px-0 px-xl-1">
                                    <div class="progress progress-lg mb-0">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            -
                        </td>
                    </tr>
                    <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card border-light shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0">Country</th>
                        <th class="border-0">All</th>
                        <th class="border-0">All Change</th>
                        <th class="border-0">Travel & Local</th>
                        <th class="border-0">Travel & Local Change</th>
                        <th class="border-0">Widgets</th>
                        <th class="border-0">Widgets Change</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/united-states-of-america.svg">
                                <div><span class="h6">United States</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">106</td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">5</span>
                        </td>
                        <td class="border-0 fw-bold">
                            3
                        </td>
                        <td class="border-0">
                            =
                        </td>
                        <td class="border-0 fw-bold">
                            32
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">3</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/canada.svg">
                                <div><span class="h6">Canada</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">76</td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">17</span>
                        </td>
                        <td class="border-0 fw-bold">
                            4
                        </td>
                        <td class="border-0">
                            =
                        </td>
                        <td class="border-0 fw-bold">
                            30
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">3</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/united-kingdom.svg">
                                <div><span class="h6">United Kingdom</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">147</td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">10</span>
                        </td>
                        <td class="border-0 fw-bold">
                            5
                        </td>
                        <td class="border-0">
                            =
                        </td>
                        <td class="border-0 fw-bold">
                            34
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">7</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/france.svg">
                                <div><span class="h6">France</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">112</td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">3</span>
                        </td>
                        <td class="border-0 fw-bold">
                            5
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">1</span>
                        </td>
                        <td class="border-0 fw-bold">
                            34
                        </td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">2</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/japan.svg">
                                <div><span class="h6">Japan</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">115</td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">12</span>
                        </td>
                        <td class="border-0 fw-bold">
                            6
                        </td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">1</span>
                        </td>
                        <td class="border-0 fw-bold">
                            37
                        </td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">5</span>
                        </td>
                    </tr>
                    <!-- End of Item -->

                    <!-- Item -->
                    <tr>
                        <td class="border-0">
                            <a href="#" class="d-flex align-items-center">
                                <img class="me-2 image image-small rounded-circle" alt="Image placeholder" src="../assets/img/flags/germany.svg">
                                <div><span class="h6">Germany</span></div>
                            </a>
                        </td>
                        <td class="border-0 fw-bold">220</td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">56</span>
                        </td>
                        <td class="border-0 fw-bold">
                            7
                        </td>
                        <td class="border-0 text-danger">
                            <span class="fas fa-angle-down"></span>
                            <span class="fw-bold">3</span>
                        </td>
                        <td class="border-0 fw-bold">
                            30
                        </td>
                        <td class="border-0 text-success">
                            <span class="fas fa-angle-up"></span>
                            <span class="fw-bold">2</span>
                        </td>
                    </tr>
                    <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="theme-settings card pt-2 collapse" id="theme-settings">
        <div class="card-body pt-4">
            <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
                    href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
                <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                   data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                   data-size="large" data-show-count="true"
                   aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
            </div>
            <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
               class="btn btn-primary mb-3 w-100">Download <i class="fas fa-download ms-2"></i></a>
            <p class="fs-7 text-gray-700 text-center">Available in the following technologies:</p>
            <div class="d-flex justify-content-center">
                <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                   target="_blank">
                    <img src="../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                </a>
                <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                    <img src="../assets/img/technologies/react-logo.svg" class="image image-xs">
                </a>
            </div>
        </div>
    </div>

    <div class="card theme-settings theme-settings-expand" id="theme-settings-expand">
        <div class="card-body p-3 py-2">
        <span class="fw-bold h6">
            <i class="fas fa-cogs me-1 fs-7"></i> Settings
        </span>
        </div>
    </div>
@endsection
