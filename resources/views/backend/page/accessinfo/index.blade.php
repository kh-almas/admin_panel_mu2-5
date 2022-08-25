@extends('backend.app')

@section('title', 'access info')

@section('admin-content')
    <div class="card card-body shadow-sm my-4">
        <h2 class="h5 mb-4">All user access information</h2>


        <table class="table table-centered table-nowrap mb-0 rounded">
            <thead class="thead-light">
                <tr>
                    <th class="border-0 d-none d-lg-table-cell">Device Name</th>
                    <th class="border-0">Username</th>
                    <th class="border-0 d-none d-md-table-cell">Language</th>
                    <th class="border-0 d-none d-lg-table-cell">browser</th>
                    <th class="border-0">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($infos as $info)
                <!-- Item -->
                <tr>
                    <td class="d-none d-lg-table-cell">
                        {{ $info->device_name ?? 'NULL' }}
                    </td>
                    <td>
                        {{ $info->user->name ?? 'NULL'}}
                    </td>
                    <td class="d-none d-md-table-cell">
                        {{ $info->language ?? 'NULL' }}
                    </td>
                    <td class="d-none d-lg-table-cell">
                        {{ $info->browser ?? 'NULL' }} v-{{ $info->browser_version ?? 'NULL' }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <button class="btn-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fas fa-angle-down dropdown-arrow"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <button type="button" class="dropdown-item btn" data-bs-toggle="modal" data-bs-target="#accessinfo{{ $info->id}}">View</button>
                                <form action="{{ route('dashboard.accessInfo.delete',$info->id) }}" method="post" class="my-0">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item btn ">delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- End of Item -->
                <!-- Modal Content -->
                <div class="modal fade" id="accessinfo{{ $info->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">All Information</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <div class="align-items-center">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>Device Name :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->device_name ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>IP :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->ip ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>Language :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->language ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>Device :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->device ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>Platform :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->platform ?? 'NULL' }} v-{{ $info->platform_version ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <p>browser :</p>
                                            </div>
                                            <div class="col-auto">
                                                <p>{{ $info->browser ?? 'NULL' }} v-{{ $info->browser_version ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-3">
                                                <p>User Agent :</p>
                                            </div>
                                            <div class="col-9">
                                                <p>{{ $info->user_agent ?? 'NULL' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Content -->
            @endforeach
            </tbody>
        </table>
        <div class="row p-4">
            <div class="col-7 mt-1">Showing 1 - 20 of 289</div>
            <div class="col-5">
                <div class="btn-group float-end">
                    {{ $infos->links() }}
                </div>
            </div>
        </div>
    </div>


@endsection






