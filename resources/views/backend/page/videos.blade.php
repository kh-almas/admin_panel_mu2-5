@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">All Videos</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addvideos">Add videos</button>
            </div>
            <!-- Modal Content -->
            <div class="modal fade" id="addvideos" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="h6 modal-title">Add New Videos</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name">
                                    <label for="floatingInput">FIle Name</label>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="About image..." id="textarea" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Store</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal Content -->
        </div>
    </div>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                    <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-right">
                <div class="btn-group">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm icon-gray pt-1">
                                    <span class="fas fa-cog"></span>
                                </span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex fw-bold" href="#">10 <span class="icon icon-small ms-auto"><span class="fas fa-check"></span></span></a>
                        <a class="dropdown-item fw-bold" href="#">20</a>
                        <a class="dropdown-item fw-bold" href="#">30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-sm table-wrapper table-responsive">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="border rounded">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3">
                                <img class="w-100 h-100" src="assets/img/202984001.jpg" alt="thumbnail">
                            </div>
                            <div class="col-md-8 col-lg-9 d-flex align-items-center">
                                <div class="">
                                    <a href="play-video.php">
                                        <h6 class="">How To Make Video Gallery In HTML And CSS Website Step By Step Tutorial</h6>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <a href=""><small>Bonnie Green</small></a>
                                        <div>
                                            <small class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#editvideo">Edit</small>
                                            <small class="cursor-pointer" id="deletevideo">Delete</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="border rounded">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3">
                                <img class="w-100 h-100" src="assets/img/202984001.jpg" alt="thumbnail">
                            </div>
                            <div class="col-md-8 col-lg-9 d-flex align-items-center">
                                <div class="">
                                    <a href="play-video.php">
                                        <h6 class="">How To Make Video Gallery In HTML And CSS Website Step By Step Tutorial</h6>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <a href=""><small>Bonnie Green</small></a>
                                        <div>
                                            <small class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#editvideo">Edit</small>
                                            <small class="cursor-pointer" id="deletevideo">Delete</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <div class="border rounded">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3">
                                <img class="w-100 h-100" src="assets/img/202984001.jpg" alt="thumbnail">
                            </div>
                            <div class="col-md-8 col-lg-9 d-flex align-items-center">
                                <div class="">
                                    <a href="play-video.php">
                                        <h6 class="">How To Make Video Gallery In HTML And CSS Website Step By Step Tutorial</h6>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <a href=""><small>Bonnie Green</small></a>
                                        <div>
                                            <small class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#editvideo">Edit</small>
                                            <small class="cursor-pointer" id="deletevideo">Delete</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="border rounded">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3">
                                <img class="w-100 h-100" src="assets/img/202984001.jpg" alt="thumbnail">
                            </div>
                            <div class="col-md-8 col-lg-9 d-flex align-items-center">
                                <div class="">
                                    <a href="play-video.php">
                                        <h6 class="">How To Make Video Gallery In HTML And CSS Website Step By Step Tutorial</h6>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <a href=""><small>Bonnie Green</small></a>
                                        <div>
                                            <small class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#editvideo">Edit</small>
                                            <small class="cursor-pointer" id="deletevideo">Delete</small>
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
    <!-- vedio edit Modal Content -->
    <div class="modal fade" id="editvideo" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Edit Video Information</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name" value="How To Make Video Gallery In HTML And CSS Website Step By Step Tutorial">
                            <label for="floatingInput">FIle Name</label>
                        </div>
                        <div class="my-4">
                            <textarea class="form-control" placeholder="Video description" id="textarea" rows="4"></textarea>
                        </div>
                        <div class="d-flex justify-content-end"><button class="btn btn-dark" type="button">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--vedio edit End of Modal Content -->
@endsection
