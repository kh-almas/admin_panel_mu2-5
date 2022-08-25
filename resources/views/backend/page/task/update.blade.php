@extends('backend.app')

@section('title', 'all task')

@section('admin-content')

    <div class="mx-auto mt-3 mt-lg-5 card py-4 px-3 shadow shadow-lg-hover" style="max-width: 700px;">
        <form action="{{ route('dashboard.tasks.update',$task->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-4">
                <label for="title">Title</label>
                <input name="title" type="text" class="@error('title') is-invalid @enderror form-control" id="title" aria-describedby="emailHelp" value="{{ old('title') ?? $task->title }}">
                @error('title')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <label for="category">Category</label>
                <select name="category" class="form-select mb-0" id="category" aria-label="category select example">
                    <option>Select a category</option>
                    @foreach($taskCategory as $category)
                        <option value="{{ $category->id }}" {{ $task->taskcategory->name == $category->name ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-4">
                <label for="textarea">Task Details</label>
                <textarea name="description" class="@error('description') is-invalid @enderror form-control" placeholder="Enter your message..." id="textarea" rows="4"> {{ old('description') ?? $task->description }}</textarea>
                @error('description')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-check form-switch">
                <input name="important" class="form-check-input" type="checkbox" id="important" value="1" {{ $task->important == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="important">Importent</label>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-dark">Update</button>
            </div>
        </form>
    </div>

@endsection
