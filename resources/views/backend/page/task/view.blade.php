@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <div class="d-lg-flex justify-content-between flex-wrap fle9x-md-nowrap align-items-center py-4">
        <div class="col-auto d-flex justify-content-between ps-0 mb-4 mb-lg-0">
            <div class="me-lg-3">
                <a href="{{ route('dashboard.category.index') }}" class="btn btn-dark btn-sm me-2" type="button">
                    Category
                </a>
            </div>
        </div>
    </div>

    <div class="mx-auto card py-4 px-3 shadow shadow-lg-hover" style="max-width: 700px;">
        <div class="mb-4">
            <h2>{{ $task->title }}</h2>
            <div class="d-flex justify-content-between">
                <div class="d-block d-sm-flex">
                    <small class="badge super-badge badge-lg bg-success">{{ $task->taskcategory->name }}</small>
                </div>
                @if($task->important == 1)
                    <div class="d-block d-sm-flex">
                        <small class="badge super-badge badge-lg bg-danger">Important</small>
                    </div>
                @endif
            </div>
        </div>

        <div class="my-4">
            <h5>Description :{{ $task->user_id }}</h5>
            <p>{{ $task->description }}</p>
        </div>
    </div>

@endsection
