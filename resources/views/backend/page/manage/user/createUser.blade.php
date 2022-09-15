@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <main>
        <!-- Section -->
        <section class="d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Create an account</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('dashboard.makeUserByAdmin') }}" method="post">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="name">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                        <input name="name" type="text" class="form-control" placeholder="KH Almas" id="name" value="{{old('')}}">
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                        <input name="email" type="email" class="form-control" placeholder="example@company.com" id="email" value="{{old('')}}">
                                    </div>
                                </div>
                                <div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                            <input name="password" type="password" placeholder="Password" class="form-control" id="password">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="confirm_password">Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                            <input name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control" id="confirm_password">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Select a role</label>
                                        <select name="role" class="form-select" aria-label="Default select example">
                                            <option selected>Select role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Moderator</option>
                                            <option value="3">User</option>
                                        </select>
                                    </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Create new user</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
