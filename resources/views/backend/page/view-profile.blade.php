@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <div class="row mt-lg-4 mt-md-3 mt-1">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Birthday</label>
                            <div class="input-group">
                                <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected>Gender</option>
                                <option value="1">Female</option>
                                <option value="2">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required>
                            </div>
                        </div>
                    </div>

                    <h2 class="h5 my-4">Location</h2>
                    <div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" id="address" type="text" placeholder="Enter your home address" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" id="city" type="text" placeholder="City" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">Country</label>
                                <input class="form-control" id="zip" type="tel" placeholder="Country" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input class="form-control" id="zip" type="tel" placeholder="ZIP" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Save All</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow-sm text-center p-0">
                        <div class="profile-cover rounded-top" data-background="../assets/img/profile-cover.jpg"></div>
                        <div class="card-body pb-5">
                            <img src="assets/img/team/profile-picture-1.jpg" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">Neil Sims</h4>
                            <h5 class="fw-normal">Senior Software Engineer</h5>
                            <p class="text-gray mb-4">New York, USA</p>
                            <a class="btn btn-sm btn-dark me-2" href="#"><span class="fas fa-user-plus me-1"></span> Connect</a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
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
                    <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                </a>
                <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                    <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
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
