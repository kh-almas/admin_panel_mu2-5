<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.page.parsal.cssLink')
</head>

<body>

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<main>

    <!-- Section -->
    <section class="d-flex align-items-center my-5 mt-lg-3 mb-lg-3">
        <div class="container">
            <div class="row justify-content-center form-bg-image" data-background-lg="">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-2 p-lg-3 w-100 fmxw-500">
                        <div class="d-flex justify-content-end">
                            <a href="javascript: history.go(-1)"><i class="far fa-arrow-alt-circle-left fa-2x"></i></a>
                        </div>
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Sign in to our platform</h1>
                        </div>
                        <form method="post" action="{{route('login')}}" class="mt-4">
                            @csrf
                            @foreach ($errors->all() as $error)
                                <strong>Email or password doesn't match</strong>
                            @endforeach
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                    <input type="email" class="form-control" placeholder="admin@gmail.com/permission@gmail.com" id="email" name="email" value="{{old('email')}}" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" name="password" placeholder="password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check">
                                    <input name="remember" class="form-check-input" type="checkbox" id="remember_me">
                                    <label class="form-check-label mb-0" for="remember">
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <div><a href="{{ route('password.request') }}" class="small text-right">Lost password?</a></div>
                                @endif
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Sign in</button>
                            </div>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="fw-normal">or login with</span>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook me-2" type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-twitter me-2" type="button" aria-label="twitter button" title="twitter button">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook" type="button" aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github"></span>
                            </a>
                        </div>
{{--                        <div class="d-flex justify-content-center align-items-center mt-4">--}}
{{--                                <span class="fw-normal">--}}
{{--                                    Not registered?--}}
{{--                                    <a href="{{route('register')}}" class="fw-bold">Create account</a>--}}
{{--                                </span>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('backend.examples.page.parsal.jsLink')
</body>

</html>
