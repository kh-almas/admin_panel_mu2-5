@extends('backend.examples.app')

@section('title','all button')

@section('example-content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Buttons</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
            <div>
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/buttons/buttons.php" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Buttons Docs</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="mb-3">
                        <h2 class="h5">Sizes</h2>
                    </div>
                    <!--Buttons-->
                    <button class="btn btn-sm btn-dark" type="button">Small</button>
                    <button class="btn btn-dark" type="button">Regular</button>
                    <button class="btn btn-lg btn-dark" type="button">Large Button</button>

                    <h2 class="h5 fw-bold mt-4 mb-3">With Icons</h2>
                    <button class="btn btn-dark" type="button"><span class="far fa-paper-plane me-2"></span>Left Icon</button>
                    <button class="btn btn-dark" type="button">Right Icon<span class="fas fa-angle-right ms-2"></span> </button>

                    <h2 class="h5 fw-bold mt-4 mb-3">Dropdown buttons</h2>
                    <div class="dropdown">
                        <div class="btn-group me-2 mb-2">
                            <button type="button" class="btn btn-dark">Primary</button>
                            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fas fa-angle-down dropdown-arrow"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <div class="btn-group mb-2 me-2">
                            <button type="button" class="btn btn-tertiary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fas fa-angle-down dropdown-arrow"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-5">
                        <h2 class="h5">Link Buttons</h2>
                    </div>
                    <!--Buttons-->
                    <a href="#" class="text-default fw-bold me-3">Primary</a>
                    <a href="#" class="text-primary me-3">
                        <span class="me-1"><span class="fas fa-link"></span></span>
                        Icon Left
                    </a>
                    <a href="#" class="text-primary">
                        Icon Right
                        <span class="ms-1"><span class="fas fa-link"></span></span>
                    </a>
                    <!--End of Buttons-->
                    <!-- Button colors -->
                    <div class="mb-3 mt-5">
                        <h2 class="h5">Choose your color</h2>
                    </div>
                    <div class="mb-3 mt-5">
                        <small class="text-uppercase fw-bold">Main</small>
                    </div>
                    <!--Buttons-->
                    <button class="btn btn-dark" type="button">Primary</button>
                    <button class="btn btn-secondary" type="button">Secondary</button>
                    <button class="btn btn-tertiary" type="button">Tertiary</button>
                    <button class="btn btn-info" type="button">Info</button>
                    <button class="btn btn-success" type="button">Success</button>
                    <button class="btn btn-warning" type="button">Warning</button>
                    <button class="btn btn-danger" type="button">Danger</button>
                    <button class="btn btn-dark" type="button">Dark</button>
                    <button class="btn btn-gray" type="button">Gray</button>
                    <button class="btn btn-light" type="button">Light</button>
                    <button class="btn btn-white" type="button">White</button>
                    <!--End Of Buttons-->
                    <div class="mb-3 mt-5">
                        <small class="text-uppercase fw-bold">Outline</small>
                    </div>
                    <!--Buttons-->
                    <button class="btn btn-outline-primary" type="button">Primary</button>
                    <button class="btn btn-outline-secondary" type="button">Secondary</button>
                    <button class="btn btn-outline-tertiary" type="button">Tertiary</button>
                    <button class="btn btn-outline-info" type="button">Info</button>
                    <button class="btn btn-outline-success" type="button">Success</button>
                    <button class="btn btn-outline-danger" type="button">Danger</button>
                    <button class="btn btn-outline-dark" type="button">Dark</button>
                    <button class="btn btn-outline-gray" type="button">Gray</button>
                    <!--End Of Buttons-->
                    <div class="mb-3 mt-5">
                        <small class="text-uppercase fw-bold">Round Outline</small>
                    </div>
                    <!--Buttons-->
                    <button class="btn btn-pill btn-outline-primary" type="button">Primary</button>
                    <button class="btn btn-pill btn-outline-secondary" type="button">Secondary</button>
                    <button class="btn btn-pill btn-outline-tertiary" type="button">Tertiary</button>
                    <button class="btn btn-pill btn-outline-info" type="button">Info</button>
                    <button class="btn btn-pill btn-outline-success" type="button">Success</button>
                    <button class="btn btn-pill btn-outline-danger" type="button">Danger</button>
                    <button class="btn btn-pill btn-outline-dark" type="button">Dark</button>
                    <button class="btn btn-pill btn-outline-gray" type="button">Gray</button>
                    <!--End Of Buttons-->
                    <!-- Button links -->
                    <div class="mb-3 mt-5">
                        <small class="text-uppercase fw-bold">Links</small>
                    </div>
                    <!--Buttons-->
                    <a href="#" class="text-default me-3">Default</a>
                    <a href="#" class="text-primary me-3">Primary</a>
                    <a href="#" class="text-secondary me-3">Secondary</a>
                    <a href="#" class="text-tertiary me-3">Tertiary</a>
                    <a href="#" class="text-info me-3">Info</a>
                    <a href="#" class="text-success me-3">Success</a>
                    <a href="#" class="text-danger me-3">Danger</a>
                    <a href="#" class="text-dark me-3">Dark</a>
                    <a href="#" class="text-gray">Gray</a>
                    <!--End Of Buttons-->

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Button Social -->
                            <div class="mb-4 mt-5">
                                <h2 class="h5 fw-bold">Social Buttons</h2>
                            </div>
                            <button class="btn btn-facebook" type="button">
                                <span class="me-1"><span class="fab fa-facebook-f"></span></span>
                                Login with Facebook
                            </button>
                            <br>
                            <button class="btn btn-pinterest" type="button">
                                <span class="me-1"><span class="fab fa-pinterest-p"></span></span>
                                Share on Pinterest
                            </button>
                            <br>
                            <button class="btn btn-youtube" type="button">
                                <span class="me-1"><span class="fab fa-youtube"></span></span>
                                Watch on YouTube
                            </button>
                            <br>
                            <button class="btn btn-github" type="button">
                                <span class="me-1"><span class="fab fa-github-alt"></span></span>
                                Login with GitHub
                            </button>
                            <br>
                            <button class="btn btn-twitch" type="button">
                                <span class="me-1"><span class="fab fa-twitch"></span></span>
                                Subscribe Now
                            </button>
                            <br>
                            <button class="btn btn-paypal" type="button">
                                <span class="me-1"><span class="fab fa-paypal"></span></span>
                                Donate with PayPal
                            </button>
                            <br>
                            <button class="btn btn-behance" type="button">
                                <span class="me-1"><span class="fab fa-behance"></span></span>
                                Follow us
                            </button>
                        </div>
                        <div class="col-12 col-lg-6">
                            <!-- Square -->
                            <div class="mb-4 mt-5">
                                <h2 class="h5">Only Icon</h2>
                            </div>
                            <button class="btn btn-icon-only btn-facebook" type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pinterest" type="button" aria-label="pinterest button" title="pinterest button">
                                <span aria-hidden="true" class="fab fa-pinterest-p"></span>
                            </button>
                            <button class="btn btn-icon-only btn-youtube" type="button" aria-label="youtube button" title="youtube button">
                                <span aria-hidden="true" class="fab fa-youtube"></span>
                            </button>
                            <button class="btn btn-icon-only btn-github" type="button" aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github-alt"></span>
                            </button>
                            <button class="btn btn-icon-only btn-twitch" type="button" aria-label="twitch button" title="twitch button">
                                <span aria-hidden="true" class="fab fa-twitch"></span>
                            </button>
                            <button class="btn btn-icon-only btn-paypal" type="button" aria-label="paypal button" title="paypal button">
                                <span aria-hidden="true" class="fab fa-paypal"></span>
                            </button>
                            <button class="btn btn-icon-only btn-behance" type="button" aria-label="behance button" title="behance button">
                                <span aria-hidden="true" class="fab fa-behance"></span>
                            </button>
                        </div>
                    </div>
                </div>
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
