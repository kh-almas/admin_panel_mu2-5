@extends('backend.app')

@section('title', 'all task')

@section('admin-content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div>
            <a href="{{ route('dashboard.viewForMakeUserByAdmin') }}" type="button" class="btn btn-sm btn-dark me-2">New User</a>
        </div>
        <div class="d-none d-lg-block">
            <a href="{{ route('dashboard.backup') }}" type="button" class="btn btn-sm btn-dark"><span class="fas fa-clipboard me-2"></span>Backup User Information</a>
            <button class="btn  btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-envelope-open-text me-2"></span>Send message to
                <span class="icon icon-small ms-1"><span class="fas fa-chevron-down"></span></span>
            </button>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-0">
                <a class="dropdown-item fw-normal rounded-top" href="{{ route('dashboard.viewSendMessageToAllUser') }}">All User</a>
                <a class="dropdown-item fw-normal rounded-bottom" href="{{ route('dashboard.viewSendMessageToGroupUser') }}">A group</a>
            </div>
        </div>
    </div>

    <livewire:backend.user-in-admin />
@endsection






