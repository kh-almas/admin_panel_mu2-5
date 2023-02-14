@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    @can('task')
    <div class="d-lg-flex justify-content-between flex-wrap fle9x-md-nowrap align-items-center py-4">
        <div class="d-none d-lg-block col-lg-6 ps-0 mb-2 mb-lg-0">
            <div class="me-lg-3 d-flex align-items-center d-flex justify-content-center justify-content-lg-start">
                <a href="{{ route('dashboard.tasks.create') }}" class="btn btn-dark btn-sm me-2" type="button">
                    <span class="fas fa-plus me-2"></span>New Task
                </a>
            </div>
        </div>
{{--        <div class="col-12 col-lg-6 px-0">--}}
{{--            <div class="d-flex justify-content-center justify-content-lg-end">--}}
{{--                <div class="btn-group" style="border-radius: 1rem; overflow: hidden;">--}}
{{--                    <a href="{{ route('dashboard.tasks.create') }}" class="btn btn-dark text-white d-lg-none">--}}
{{--                        <span class="fas fa-plus"></span>--}}
{{--                    </a>--}}
{{--                    <button class="btn btn-dark text-white">--}}
{{--                        <span class="fas fa-archive"></span>--}}
{{--                    </button>--}}
{{--                    <button class="btn btn-dark text-white">--}}
{{--                        <span class="fas fa-exclamation-circle"></span>--}}
{{--                    </button>--}}
{{--                    <button class="btn btn-dark text-white">--}}
{{--                        <span class="fas fa-trash-alt"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="task-wrapper border bg-white shadow-sm rounded">
        @if(session()->has('isImportent_task'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('isImportent_task')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('delete_task'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('delete_task')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('create_task'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('create_task')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('update_task'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('update_task')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @foreach($task as $todo)
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
                            <a href="{{ route('dashboard.tasks.show',$todo->id) }}">
                                <h3 class="h5">{{Illuminate\Support\Str::of($todo->title)->words(10)}}</h3>

                            </a>
                            <div class="d-block d-sm-flex">
                                <div>
                                    <h4 class="h6 fw-normal text-gray mb-3 mb-sm-0">
                                        <span class="fas fa-clock me-2"></span>{{ $todo->created_at->isoFormat('lll') }}</h4>
                                </div>
                            </div>
                            <div class="d-block d-sm-flex">
                                <small class="badge super-badge badge-lg bg-success">{{ $todo->taskcategory->name }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-sm-2 col-lg-2 col-xl-2 d-none d-lg-block d-xl-inline-flex align-items-center ms-lg-auto text-right justify-content-end px-md-0">
                        <div class="rating-star star-lg d-none d-lg-inline-block">
                            @if($todo->important == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <i class="bi bi-star-fill"></i>
                            @endif
                            @if($todo->important == 0)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                </svg>
                                <i class="bi bi-star"></i>
                            @endif
                        </div>
                        <div class="btn-group ms-md-3">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h icon-dark"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <a class="dropdown-item rounded-top" href="{{ route('dashboard.tasks.edit',$todo->id) }}"><span class="fas fa-edit"></span>Edit</a>
                                <form action="{{ route('dashboard.importantTask',$todo->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="isimportent" value="{{ $todo->important }}">
                                    <button class="dropdown-item text-warning" type="submit"><span class="fas fa-star"></span>{{ $todo->important == 1 ? 'Importanted': 'Important'}}</button>
                                </form>
                                <form action="{{ route('dashboard.tasks.destroy',$todo->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item text-danger rounded-bottom" type="submit"><span class="fas fa-trash-alt"></span>Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row p-4">
            <div class="col-7 mt-1">Showing 1 - 10 of 60</div>
            <div class="col-5">
                <div class="btn-group float-end">
                    {{ $task->links() }}
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
