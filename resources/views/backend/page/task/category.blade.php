@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <div class="d-lg-flex justify-content-between flex-wrap fle9x-md-nowrap align-items-center py-4">
        <div class="col-auto d-flex justify-content-between ps-0 mb-4 mb-lg-0">
            <div class="me-lg-3">
                <button type="button" class="btn btn-dark btn-sm text-white" data-bs-toggle="modal" data-bs-target="#Category">
                    <span class="fas fa-plus me-2"></span><span>New Category</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Modal Content -->
    <div class="modal fade" id="Category" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Create New Category</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('dashboard.category.store') }}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-4">
                            <label for="name">Category</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="my-4">
                            <label for="description">Category Details</label>
                            <textarea name="description" class="form-control" placeholder="Enter your message..." id="description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal Content -->
    @if(session()->has('create_category'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('create_category')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('category_update'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            {{session()->get('category_update')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session()->has('category_delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session()->get('category_delete')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="task-wrapper border bg-white shadow-sm">
        @foreach($taskCategory as $category)
            <div class="card hover-state border-bottom rounded-0 py-3">
                <div class="card-body d-sm-flex align-items-center flex-wrap flex-lg-nowrap py-0">
                    <div class="col-1 text-left text-sm-center mb-2 mb-sm-0">
                        <div class="form-check check-lg inbox-check me-sm-2">
                            <input class="form-check-input" type="checkbox" value="" id="mailCheck1">
                            <label class="form-check-label" for="mailCheck1"></label>
                        </div>
                    </div>
                    <div class="col-11 col-lg-8 px-0 mb-4 mb-md-0">
                        <div class="mb-2">
                            <h3 class="h5">{{ $category->name }}</h3>
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                        <div class="btn-group ms-md-3">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h icon-dark"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <a class="dropdown-item rounded-top" data-bs-toggle="modal" data-bs-target="#editCategory{{ $category->id }}"><span class="fas fa-edit"></span>Edit</a>
                                <form action="{{ route('dashboard.category.destroy',$category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="dropdown-item text-danger rounded-bottom"><span class="fas fa-trash-alt"></span>Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal Content -->
            <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="h6 modal-title">Edit Category</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('dashboard.category.update',$category->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="modal-body">
                                <div class="mb-4">
                                    <label for="Category">Category</label>
                                    <input name="name" type="text" class="form-control" id="Category" aria-describedby="emailHelp" value="{{ $category->name }}">
                                </div>
                                <div class="my-4">
                                    <label for="textarea">Category Details</label>
                                    <textarea name="description" class="form-control" placeholder="Enter your message..." id="textarea" rows="4">{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End edit of Modal Content -->
        @endforeach
    </div>



@endsection
