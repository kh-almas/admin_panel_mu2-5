@extends('backend.examples.app')

@section('title','typography')

@section('example-content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Typography</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Typography</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
            <div>
                <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/foundation/typography/typography.php" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Typography Docs</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-light shadow-sm components-section">
                <div class="card-body">
                    <div class="row mb-4 mb-lg-5">
                        <div class="col-12 col-md-6">
                            <h2 class="h5 mb-3">Headings</h2>
                            <h1>h1. Themesberg heading</h1>
                            <h2>h2. Themesberg heading</h2>
                            <h3>h3. Themesberg heading</h3>
                            <h4>h4. Themesberg heading</h4>
                            <h5>h5. Themesberg heading</h5>
                            <h6>h6. Themesberg heading</h6>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="h5 mb-3">Display Headings</h2>
                            <h1 class="display-1">Display 1</h1>
                            <h1 class="display-2">Display 2</h1>
                            <h1 class="display-3">Display 3</h1>
                            <h1 class="display-4">Display 4</h1>
                        </div>
                    </div>
                    <!-- Title  -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-5">
                                <h2 class="h5 mb-3">Paragraphs</h2>
                            </div>
                        </div>
                    </div>
                    <!-- End of Title -->
                    <div class="row mb-4 mb-lg-5">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <span class="h6 fw-bold">Simple paragraph</span>
                            </div>
                            <p>Start your development with a Pixel Design System for Bootstrap 4. Themesberg makes beautiful products to help people with creative ideas succeed.Our company empowers millions of people.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5 mb-3 mt-sm-0">
                                <span class="h6 fw-bold">Lead paragraph</span>
                            </div>
                            <p class="lead">Start your development with a Pixel Design System for Bootstrap 4.Themesberg makes beautiful products to help people with creative ideas succeed.Our company empowers millions of people.</p>
                        </div>
                    </div>
                    <div class="row mt-4 mb-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Dark text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-dark mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Primary text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-primary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Secondary text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-secondary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Tertiary text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-tertiary mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Info text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-info mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Danger text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-danger mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2">
                            <small class="text-uppercase text-muted">Success text</small>
                        </div>
                        <div class="col-sm-10">
                            <p class="text-success mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                        </div>
                    </div>
                    <!-- Title  -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mt-6 mb-5">
                                <span class="h6">Blockquote</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of Title -->
                    <div class="row">
                        <div class="col-md-8">
                            <blockquote class="blockquote text-center">
                                Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people.
                                <footer class="blockquote-footer mt-3 text-primary">Zoltan Szőgyényi</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Title  -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mt-6 mb-5">
                                <span class="h6">Lists</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of Title -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <span class="h6">Unordered</span>
                            </div>
                            <ul>
                                <li>Minutes of the last meeting</li>
                                <li>Do we need yet more meetings?</li>
                                <li>Any other business
                                    <ul>
                                        <li>Programming</li>
                                        <li>Web Design</li>
                                        <li>Database</li>
                                    </ul>
                                </li>
                                <li>Something funny</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5 mb-3 mt-sm-0">
                                <span class="h6 fw-bold">Ordered</span>
                            </div>
                            <ol>
                                <li>Minutes of the last meeting</li>
                                <li>Do we need yet more meetings?</li>
                                <li>Any other business
                                    <ol>
                                        <li>Programming</li>
                                        <li>Web Design</li>
                                        <li>Database</li>
                                    </ol>
                                </li>
                                <li>Something funny</li>
                            </ol>
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
