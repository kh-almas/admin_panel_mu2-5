@extends('backend.app')

@section('title', 'home')

@section('admin-content')
{{--    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">--}}
{{--        <div class="btn-toolbar dropdown">--}}
{{--            <button class="btn btn-dark btn-sm me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                <span class="fas fa-plus me-2"></span>New Task--}}
{{--            </button>--}}
{{--            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">--}}
{{--                <a class="dropdown-item fw-normal rounded-top" href="#"><span class="fas fa-tasks"></span>New Task</a>--}}
{{--                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-cloud-upload-alt"></span>Upload Files</a>--}}
{{--                <a class="dropdown-item fw-normal" href="#"><span class="fas fa-user-shield"></span>Preview Security</a>--}}
{{--                <div role="separator" class="dropdown-divider my-0"></div>--}}
{{--                <a class="dropdown-item fw-normal rounded-bottom" href="#"><span class="fas fa-rocket text-danger"></span>Upgrade to Pro</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="btn-group">--}}
{{--            <button type="button" class="btn btn-sm btn-outline-primary">Share</button>--}}
{{--            <button type="button" class="btn btn-sm btn-outline-primary">Export</button>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="row justify-content-md-center py-4">
        <div class="col-12">
            <div class="card bg-secondary-alt shadow-sm">
                <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <div class="h5 fw-normal mb-2">Total User</div>
                        <h2 class="h3">{{ auth()->user()->count() }}</h2>
{{--                        <div class="small mt-2">--}}
{{--                            <span class="fw-bold me-2">Yesterday</span>--}}
{{--                            <span class="fas fa-angle-up text-success"></span>--}}
{{--                            <span class="text-success fw-bold">10.57%</span>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div class="d-flex ms-auto">--}}
{{--                        <a href="#" class="btn btn-secondary text-dark btn-sm me-2">Month</a>--}}
{{--                        <a href="#" class="btn btn-dark btn-sm me-3">Week</a>--}}
{{--                    </div>--}}
                </div>
                <div class="card-body p-2">
                    <div class="ct-user-chart ct-double-octave ct-series-g"></div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="mb-4">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 mb-4">--}}
{{--                    <div class="card border-light shadow-sm">--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col">--}}
{{--                                    <h2 class="h5">Page visits</h2>--}}
{{--                                </div>--}}
{{--                                <div class="col text-right">--}}
{{--                                    <a href="#" class="btn btn-sm btn-secondary">See all</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table align-items-center table-flush">--}}
{{--                                <thead class="thead-light">--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">Page name</th>--}}
{{--                                    <th scope="col">Page Views</th>--}}
{{--                                    <th scope="col">Page Value</th>--}}
{{--                                    <th scope="col">Bounce rate</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        /demo/admin/index.html--}}
{{--                                    </th>--}}
{{--                                    <td>--}}
{{--                                        3,225--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        $20--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="fas fa-arrow-up text-danger me-3"></span> 42,55%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        /demo/admin/forms.html--}}
{{--                                    </th>--}}
{{--                                    <td>--}}
{{--                                        2,987--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        0--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="fas fa-arrow-down text-success me-3"></span> 43,52%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        /demo/admin/util.html--}}
{{--                                    </th>--}}
{{--                                    <td>--}}
{{--                                        2,844--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        294--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="fas fa-arrow-down text-success me-3"></span> 32,35%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        /demo/admin/validation.html--}}
{{--                                    </th>--}}
{{--                                    <td>--}}
{{--                                        2,050--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        $147--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="fas fa-arrow-up text-danger me-3"></span> 50,87%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">--}}
{{--                                        /demo/admin/modals.html--}}
{{--                                    </th>--}}
{{--                                    <td>--}}
{{--                                        1,483--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        $19--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <span class="fas fa-arrow-down text-success me-3"></span> 32,24%--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-xl-4 mb-4">--}}
{{--            <div class="col-12 mb-4">--}}
{{--                <div class="card border-light shadow-sm">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row d-block d-xl-flex align-items-center">--}}
{{--                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">--}}
{{--                                <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-7 px-xl-0">--}}
{{--                                <h2 class="h5 mb-3">Traffic Share</h2>--}}
{{--                                <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-secondary me-1"><span class="fas fa-desktop"></span></span> Desktop <a href="#" class="h6">60%</a></h6>--}}
{{--                                <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-primary me-1"><span class="fas fa-mobile-alt"></span></span> Mobile Web <a href="#" class="h6">30%</a></h6>--}}
{{--                                <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-tertiary me-1"><span class="fas fa-tablet-alt"></span></span> Tablet Web <a href="#" class="h6">10%</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 px-0 mb-4">--}}
{{--                <div class="card border-light shadow-sm">--}}
{{--                    <div class="card-header border-bottom border-light d-flex justify-content-between">--}}
{{--                        <h2 class="h5 mb-0">Team members</h2>--}}
{{--                        <a href="#" class="btn btn-sm btn-secondary">See all</a>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <ul class="list-group list-group-flush list my--3">--}}
{{--                            <li class="list-group-item px-0">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <!-- Avatar -->--}}
{{--                                        <a href="#" class="user-avatar">--}}
{{--                                            <img class="rounded-circle" alt="Image placeholder" src="assets/img/team/profile-picture-1.jpg">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto ms--2">--}}
{{--                                        <h4 class="h6 mb-0">--}}
{{--                                            <a href="#!">Chris Wood</a>--}}
{{--                                        </h4>--}}
{{--                                        <span class="text-success">●</span>--}}
{{--                                        <small>Online</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="col text-right">--}}
{{--                                        <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item px-0">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <!-- Avatar -->--}}
{{--                                        <a href="#" class="user-avatar">--}}
{{--                                            <img class="rounded-circle" alt="Image placeholder" src="assets/img/team/profile-picture-2.jpg">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto ms--2">--}}
{{--                                        <h4 class="h6 mb-0">--}}
{{--                                            <a href="#!">Jose Leos</a>--}}
{{--                                        </h4>--}}
{{--                                        <span class="text-warning">●</span>--}}
{{--                                        <small>In a meeting</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="col text-right">--}}
{{--                                        <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item px-0">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <!-- Avatar -->--}}
{{--                                        <a href="#" class="user-avatar">--}}
{{--                                            <img class="rounded-circle" alt="Image placeholder" src="assets/img/team/profile-picture-3.jpg">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto ms--2">--}}
{{--                                        <h4 class="h6 mb-0">--}}
{{--                                            <a href="#!">Bonnie Green</a>--}}
{{--                                        </h4>--}}
{{--                                        <span class="text-danger">●</span>--}}
{{--                                        <small>Offline</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="col text-right">--}}
{{--                                        <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-calendar-check me-1"></i> Invite</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item px-0">--}}
{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <!-- Avatar -->--}}
{{--                                        <a href="#" class="user-avatar">--}}
{{--                                            <img class="rounded-circle" alt="Image placeholder" src="assets/img/team/profile-picture-4.jpg">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto ms--2">--}}
{{--                                        <h4 class="h6 mb-0">--}}
{{--                                            <a href="#">Neil Sims</a>--}}
{{--                                        </h4>--}}
{{--                                        <span class="text-success">●</span>--}}
{{--                                        <small>Online</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="col text-right">--}}
{{--                                        <a href="#" class="btn btn-sm btn-tertiary"><i class="fas fa-comment me-1"></i> Message</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 px-0 mb-4">--}}
{{--                <div class="card border-light shadow-sm">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex align-items-center justify-content-between border-bottom border-light pb-3">--}}
{{--                            <div>--}}
{{--                                <h6 class="mb-0"><span class="icon icon-xs me-3"><span class="fas fa-globe-europe"></span></span>Global Rank</h6>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="#" class="text-primary fw-bold">#755<span class="fas fa-chart-line ms-2"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center justify-content-between border-bottom border-light py-3">--}}
{{--                            <div>--}}
{{--                                <h6 class="mb-0"><span class="icon icon-xs me-3"><span class="fas fa-flag-usa"></span></span>Country Rank</h6>--}}
{{--                                <div class="small card-stats">United States<span class="icon icon-xs text-success ms-2"><span class="fas fa-angle-up"></span></span></div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="#" class="text-primary fw-bold">#32<span class="fas fa-chart-line ms-2"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center justify-content-between pt-3">--}}
{{--                            <div>--}}
{{--                                <h6 class="mb-0"><span class="icon icon-xs me-3"><span class="fas fa-folder-open"></span></span>Category Rank</h6>--}}
{{--                                <a href="#" class="small card-stats">Travel > Accomodation</a>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="#" class="text-primary fw-bold">#16<span class="fas fa-chart-line ms-2"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@push('js')
    <script>
        "use strict";
        const d = document;
        d.addEventListener("DOMContentLoaded", function(event) {
            if(d.querySelector('.ct-user-chart')) {
                //Chart 5
                new Chartist.Line('.ct-user-chart', {
                    labels: [
                        <?php echo $labels ?>
                    ],
                    series: [
                        [<?php echo $series ?>]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    fullWidth: true,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ],
                    axisX: {
                        // On the x-axis start means top and end means bottom
                        position: 'end',
                        showGrid: true
                    },
                    axisY: {
                        // On the y-axis start means left and end means right
                        showGrid: false,
                        showLabel: false,
                        labelInterpolationFnc: function(value) {
                            return '$' + (value / 1) + 'k';
                        }
                    }
                });
            }

        });
    </script>
@endpush
