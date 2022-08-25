<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.examples.page.parsal.cssLink')
</head>

<body>

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


<main>

    <!-- Section -->
    <section class="vh-lg-100 mt-4 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <p class="text-center"><a href="{{ route('login') }}" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to log in</a></p>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3">We will review your account soon</h1>
                        <p class="mb-4">Don't fret! Just type in your email and we will send you a code to reset your password!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('backend.examples.page.parsal.jsLink')
</body>

</html>

