<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.examples.page.parsal.cssLink')
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <main>

        <!-- Section -->
        <section class="vh-lg-100 bg-soft d-flex align-items-center my-4">
            <div class="container">
                <p class="text-center"><a href="../../../../../../index.php" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to homepage</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border border-light rounded p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <div class="user-avatar large-avatar mx-auto mb-3 border-dark p-2"><img class="rounded-circle" alt="Image placeholder" src="../assets/img/team/profile-picture-3.jpg"></div>
                                <h1 class="h3">Bonnie Green</h1>
                                <p class="text-gray">Better to be safe than sorry.</p>
                            </div>
                            <form class="mt-5">
                                <div class="mb-4">
                                    <label for="exampleInputPasswordCard4">Your Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                        <input type="password" placeholder="Password" class="form-control" id="exampleInputPasswordCard4">
                                    </div>
                                </div>
                                <div class="d-grid mt-3">
                                    <button type="submit" class="btn btn-dark">Unlock</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('backend.examples.page.parsal.jsLink')
</body>

</html>
