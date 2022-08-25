@extends('backend.examples.app')

@section('title','notification')

@section('example-content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="#">Components</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notifications</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Notifications</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0">Sweet alerts</h2>
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/plugins/sweet-alerts/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Documentation</a>
                </div>
                <div class="card-body">
                    <button class="btn btn-dark" id="basicAlert">Basic alert</button>
                    <button class="btn btn-info" id="infoAlert">Info alert</button>
                    <button class="btn btn-success" id="successAlert">Success alert</button>
                    <button class="btn btn-danger" id="dangerAlert">Danger alert</button>
                    <button class="btn btn-warning" id="warningAlert">Warning alert</button>
                    <button class="btn btn-gray" id="questionAlert">Question</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="h4 mb-0">Notyf</h2>
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/plugins/notifications/notifications.php" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Documentation</a>
                </div>
                <div class="card-body">
                    <button class="btn btn-info" id="notifyTopLeft">Top left info</button>
                    <button class="btn btn-danger" id="notifyTopRight">Top right danger</button>
                    <button class="btn btn-warning" id="notifyBottomLeft">Bottom left warning</button>
                    <button class="btn btn-dark" id="notifyBottomRight">Primary bottom right</button>
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
@push('js')
    <script>

        // SweetAlert 2
        document.getElementById('basicAlert').addEventListener('click', function () {
            Swal.fire(
                'Basic alert',
                'You clicked the button!'
            )
        });

        document.getElementById('infoAlert').addEventListener('click', function () {
            Swal.fire(
                'Info alert',
                'You clicked the button!',
                'info'
            )
        });

        document.getElementById('successAlert').addEventListener('click', function () {
            Swal.fire({
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        });

        document.getElementById('warningAlert').addEventListener('click', function () {
            Swal.fire(
                'Warning alert',
                'You clicked the button!',
                'warning'
            )
        });

        document.getElementById('dangerAlert').addEventListener('click', function () {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        });

        document.getElementById('questionAlert').addEventListener('click', function () {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            );
        });

        document.getElementById('notifyTopLeft').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'left',
                    y: 'top',
                },
                types: [
                    {
                        type: 'info',
                        background: '#0948B3',
                        icon: {
                            className: 'fas fa-info-circle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'info',
                message: 'Send us <b>an email</b> to get support'
            });
        });

        document.getElementById('notifyTopRight').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'top',
                },
                types: [
                    {
                        type: 'error',
                        background: '#FA5252',
                        icon: {
                            className: 'fas fa-times',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'error',
                message: 'This action is not allowed.'
            });
        });

        document.getElementById('notifyBottomLeft').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'left',
                    y: 'bottom',
                },
                types: [
                    {
                        type: 'warning',
                        background: '#F5B759',
                        icon: {
                            className: 'fas fa-exclamation-triangle',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'warning',
                message: 'This might be dangerous.'
            });
        });

        document.getElementById('notifyBottomRight').addEventListener('click', function (){
            const notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'bottom',
                },
                types: [
                    {
                        type: 'info',
                        background: '#262B40',
                        icon: {
                            className: 'fas fa-comment-dots',
                            tagName: 'span',
                            color: '#fff'
                        },
                        dismissible: false
                    }
                ]
            });
            notyf.open({
                type: 'info',
                message: 'John Garreth: Are you ready for the presentation?'
            });
        });

    </script>
@endpush
