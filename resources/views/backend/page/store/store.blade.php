@extends('backend.app')

@section('admin-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            @if(Route::current()->getName() == 'dashboard.images.index')
                <h2 class="h4">All images</h2>
                <p class="mb-0">Your web analytics dashboard template.</p>
            @endif
            @if(Route::current()->getName() == 'dashboard.images.create')
                <h2 class="h4">Upload new images</h2>
                <p class="mb-0">Your web analytics dashboard template.</p>
            @endif
        </div>
        @if(Route::current()->getName() == 'dashboard.images.index')
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="">
                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addimage">Add Image</button>
                </div>
            </div>
            @include('backend.page.store.image.create')
        @endif
        @if(Route::current()->getName() == 'dashboard.videos.index')
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="">
                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addvideo">Add Video</button>
                </div>
            </div>
            @include('backend.page.store.video.create')
        @endif
    </div>
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('uploaded'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('uploaded')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('update')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session()->get('delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card card-body shadow-sm table-wrapper table-responsive">
        @yield('store_view')
    </div>
@endsection
