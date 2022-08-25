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

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('empty_category_errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session()->get('empty_category_errors')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('dashboard.tasks.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="my-4">
                <label for="category">Category</label>
                <select name="category" class="form-select mb-0" id="category" aria-label="category select example">
                    <option>Select a category</option>
                    @foreach($taskCategory as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-4">
                <label for="textarea">Task Details</label>
                <textarea name="description" class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
            </div>
            <div class="form-check form-switch">
                <input name="important" class="form-check-input" type="checkbox" id="important" value="1">
                <label class="form-check-label" for="important">Importent</label>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-dark btn-md me-2">Create</button>
            </div>
        </form>
    </div>

@endsection
