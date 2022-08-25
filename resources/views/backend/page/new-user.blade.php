@extends('backend.app')

@section('title','New user')

@section('admin-content')
    <div class="row mt-md-3 mt-2">
        <div class="col-12 col-xl-8">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <form>
                    <div class="mb-3">
                        <div>
                            <label for="first_name">Name</label>
                            <input class="form-control" id="first_name" type="text" placeholder="Enter your name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="name@company.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Password</label>
                                <input class="form-control" id="first_name" type="password" placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Conform password</label>
                                <input class="form-control" id="last_name" type="password" placeholder="Confirm your password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="gender">Role</label>
                            <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option selected>Select a role</option>
                                <option value="1">Admin</option>
                                <option value="2">Moderator</option>
                                <option value="2">user</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-dark">Create new user</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">Select profile photo</h2>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <!-- Avatar -->
                                <div class="user-avatar xl-avatar">
                                    <img class="rounded" src="assets/img/team/profile-picture-3.jpg" alt="change avatar">
                                </div>
                            </div>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                    <div class="d-flex">
                                        <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                        <div class="d-md-block text-left">
                                            <div class="fw-normal text-dark mb-1">Choose Image</div>
                                            <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-12">
                    <div class="card card-body shadow-sm mb-4">
                        <h2 class="h5 mb-4">Select cover photo</h2>
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <!-- Avatar -->
                                <div class="user-avatar xl-avatar">
                                    <img class="rounded" src="assets/img/profile-cover.jpg" alt="change cover photo">
                                </div>
                            </div>
                            <div class="file-field">
                                <div class="d-flex justify-content-xl-center ms-xl-3">
                                    <div class="d-flex">
                                        <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input type="file">
                                        <div class="d-md-block text-left">
                                            <div class="fw-normal text-dark mb-1">Choose Image</div>
                                            <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
