@extends('backend.app')

@section('title', 'settings')

@section('admin-content')
    <div class="mt-5">
        <div class="card mx-auto p-4" style="max-width: 800px">
            @if(session('create_message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                Role <strong>{{Session::get('create_message')}}</strong> create successfully
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session('role_permission'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <span class="fas fa-bullhorn me-1"></span>
                    <strong>{{Session::get('role_permission')}}</strong>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('update_message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                Role <strong>{{Session::get('update_message')}}</strong> update successfully
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session('delete_message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span class="fas fa-bullhorn me-1"></span>
                {{Session::get('delete_message')}}
                <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{route('dashboard.roles.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="form-control" id="role">
                    <small class="form-text text-muted">Should be a single word</small>
                </div>
                <div class="text-right">
                    <button class="btn btn-dark" type="submit">submit</button>
                </div>
            </form>
            <div class="row mt-3">
                @foreach($roles as $role)
                    <div class="col-md-8">
                        <p>{{$role->role}}</p>
                    </div>
                    <div class="col-md-4 d-flex justify-content-end">
                        <div class="btn-group mb-2 me-2">
                            <button type="button" class="btn btn-tertiary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fas fa-angle-down dropdown-arrow"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <!-- role edit button-->
                                <a class="dropdown-item cursor-pointer" data-bs-toggle="modal" data-bs-target="#role_{{$role->id}}">Edit</a>
                                <!-- role delete button-->
                                <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('delete_role_{{$role->id}}').submit();">delete</a>
                                <!-- role delete form-->
                                <form id="delete_role_{{$role->id}}" action="{{route('dashboard.roles.destroy',$role->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                                <!-- roles permission modal button-->

                                <a type="button" class="dropdown-item mb-3" data-bs-toggle="modal" data-bs-target="#role_permission{{$role->id}}">Update Role</a>
                            </div>
                        </div>
                    </div>

                    <!-- role name edit Modal -->
                    <div class="modal fade" id="role_{{$role->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="{{route('dashboard.roles.update',$role->id)}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <input type="text" name="role" class="form-control" id="role" value="{{$role->role}}">
                                            <small class="form-text text-muted">Should be a single word</small>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-dark" type="submit">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of role name edit Modal -->

                    <!-- permission modal -->
                    <div class="modal fade" id="role_permission{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Give roles permission</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('dashboard.roles.permission.update',$role->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <div class="pt-3">
                                            <div class="row align-items-center">
                                                @foreach($permissions as $permission)
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="defaultCheck10" @foreach($role->permissions as $per){{ $per->id == $permission->id ? 'checked' : '' }}@endforeach>
{{--                                                            @foreach($role->permission as $per){{ $per->id == $permission->id ? 'checked' : '' }}@endforeach--}}
                                                            <label class="form-check-label" for="defaultCheck10">
                                                                {{__($permission->name)}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary">Accept</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End of permission modal -->
                @endforeach
            </div>
            <div class="d-flex justify-content-end mt-3">
                {{ $roles->links() }}
            </div>
        </div>
    </div>
@endsection
