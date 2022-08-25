@extends('backend.app')

@section('title','all images')

@section('admin-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">All images</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addimage">Add image</button>
            </div>










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
            <div class="col-lg-1 col-md-2 col-sm-3 col-4">
                <a type="button" data-bs-toggle="modal" data-bs-target="#modal-default"><img width="200" height="50" src="{{asset('storage/profile-photos/rKQMkrgDNRymnjt1drEtvfRYrmYRj2Ud0u9JRDZ0.jpg')}}" alt="img"></a>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-3 col-4">
                <a type="button" data-bs-toggle="modal" data-bs-target="#modal-default"><img width="200" height="50" src="assets/img/202984001.jpg" alt="img"></a>
            </div>

            <!-- image view form -->
            <livewire:backend.view.show-image-from-store/>
            <!-- image view form -->
        </div>
    </div>
@endsection
