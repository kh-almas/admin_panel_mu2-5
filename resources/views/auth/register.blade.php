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
            <div class="row justify-content-center form-bg-image"  data-background-lg="">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-2 p-lg-3 w-100 fmxw-500">
                        <div class="d-flex justify-content-end">
                            <a href="javascript: history.go(-1)"><i class="far fa-arrow-alt-circle-left fa-2x"></i></a>
                        </div>
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Create an account</h1>
                        </div>

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                        <form method="post" action="{{route('register')}}">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="email">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-signature"></i></span>
                                    <input type="text"  name="name" class="form-control{{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Alex" id="name" value="{{old('name')}}" required autofocus autocomplete="name">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Your Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                    <input type="email" name="email" class="form-control{{$errors->has('email') ? 'is-valid' : ''}}" placeholder="alex@company.com" id="email" value="{{old('email')}}" autofocus required autocomplete="email">
                                    @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" name="password" placeholder="Password" class="form-control"  id="password" autofocus required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password_confirmation">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon5"><span class="fas fa-unlock-alt"></span></span>
                                    <input type="password" id="password_confirmation" placeholder="Confirm Password" class="form-control" name="password_confirmation" autofocus required autocomplete="new-password">
                                </div>
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="{{route('terms.show')}}">terms of Service</a> and <a href="{{route('policy.show')}}">Privacy Policy</a>
                                    </label>
                                </div>
                            @endif
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Sign up</button>
                            </div>
                        </form>
                        <div class="mt-3 mb-4 text-center">
                            <span class="fw-normal">or</span>
                        </div>
                        <div class="d-flex justify-content-center my-4">

                            <a href="{{ route('google.login') }}" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-twitter me-2" type="button" aria-label="twitter button" title="twitter button">
                                <span aria-hidden="true" class="fab fa-google"></span>
                            </a>
                            <a href="{{ route('facebook.login') }}" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook me-2" type="button" aria-label="facebook button" title="facebook button">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </a>
                            <a href="{{ route('github.login') }}" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook" type="button" aria-label="github button" title="github button">
                                <span aria-hidden="true" class="fab fa-github"></span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Already have an account?
                                    <a href="{{route('login')}}" class="fw-bold">Login here</a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('backend.examples.page.parsal.jsLink')
</body>

</html>
