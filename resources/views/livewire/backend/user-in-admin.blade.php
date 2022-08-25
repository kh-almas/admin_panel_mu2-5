<div class="card card-body shadow-sm mb-4">
    <h2 class="h5 mb-4">All user information</h2>

    <div class="d-none d-lg-block d-lg-flex justify-content-lg-around">
        <!-- Form -->
        <div class="mb-4">
            <input wire:model="searchByName" type="text" class="form-control" placeholder="search by name">
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-4">
            <input wire:model="searchByEmail" type="text" class="form-control" placeholder="search by email">
        </div>
        <!-- End of Form -->
        <!-- Form -->
        <div class="mb-4">
            <input wire:model="searchByCountry" type="text" class="form-control" placeholder="search by country">
        </div>
        <!-- End of Form -->
    </div>

    <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
        <tr>
            <th class="border-0 d-none d-lg-table-cell">ID</th>
            <th class="border-0">Name</th>
            <th class="border-0 d-none d-md-table-cell">Email</th>
            <th class="border-0 d-none d-lg-table-cell">Role</th>
            <th class="border-0">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <!-- Item -->
            <tr>
                <td class="d-none d-lg-table-cell">
                    #{{Illuminate\Support\Str::of($user->uniqueId)->limit(15)}}
                </td>
                <td>
                    <a href="#" class="d-flex align-items-center">
                        @if($user->profile_photo_path)
                        <img class="me-2 image image-small rounded-circle" alt="av" src="{{ asset('storage/'.$user->profile_photo_path) }}">
                        @endif
                        <div>{{Illuminate\Support\Str::of($user->name)->limit(15)}}</div>
                    </a>
                </td>
                <td class="d-none d-md-table-cell">
                    {{Illuminate\Support\Str::of($user->email)->limit(35)}}
                </td>
                <td class="d-none d-lg-table-cell">
                    {{ $user->role }}
                </td>
                <td>

                    <div class="btn-group">
                        <button class="btn-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fas fa-angle-down dropdown-arrow"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('dashboard.showUpdateUserFormByAdmin',$user->id) }}">View</a>
                            <a class="dropdown-item" href="{{route('dashboard.viewSendMessageToSingleUser',$user->id)}}">Send message</a>
                            <a type="button" class="dropdown-item mb-3" data-bs-toggle="modal" data-bs-target="#modal-role">Update Role</a>
                        </div>
                    </div>
                </td>
            </tr>
            <!-- End of Item -->
            <!-- Modal Content -->
            <div class="modal fade" id="modal-role" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="h6 modal-title">Edit user role</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h3>Give role base permeation</h3>
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Super Admin
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Admin
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Moderator
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                User
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3">
                                <h3>Or Give specific permeation</h3>
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Create post
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Update post
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Edit post
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Delete post
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Approve user
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Update user
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Make new user
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Reset user password
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Delete user
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                                            <label class="form-check-label" for="defaultCheck10">
                                                Download User Information
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal Content -->
        @endforeach
        </tbody>
    </table>
    <div class="row p-4">
        <div class="col-7 mt-1">Total User: {{ $total_user }}</div>
        <div class="col-5">
            <div class="btn-group float-end">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
