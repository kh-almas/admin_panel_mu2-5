@extends('backend.app')

@section('title','profile settings')

@section('admin-content')
    <div class="flex-xl-row mt-lg-4 mt-md-3 mt-1 d-flex flex-column-reverse" style="overflow-x: hidden">
        <div class="col-12 col-xl-8 pe-lg-2">
            <div class="card card-body shadow-sm mb-4">
                <h2 class="h5 mb-4">General information</h2>
                @foreach($errors->updateProfileInformation->all() as $error)
                    <span class="error">{{$error}}</span>
                @endforeach
                <form action="{{route('user-profile-information.update')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                        @if($errors->updateProfileInformation->has('name'))
                            <span class="error">{{$errors->updateProfileInformation->first('name')}}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" class="form-control" id="email" type="email" placeholder="name@company.com" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                                @if($errors->updateProfileInformation->has('email'))
                                    <span class="error">{{$errors->updateProfileInformation->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input name="phone" class="form-control" id="phone" type="number" placeholder="*** ********" value="{{ old('phone') ? old('phone') : auth()->user()->phone }}">
                                @if($errors->updateProfileInformation->has('phone'))
                                    <span class="error">{{$errors->updateProfileInformation->first('phone')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">

                        <div class="col-md-6 mb-3">
                            <label for="birthday">Birthday</label>
                            <div class="input-group">
                                <div class="input-group">
                                    <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                    <input name="birthday" placeholder="{{auth()->user()->birthday ? auth()->user()->birthday : 'YYYY-MM-DD'}}" class="form-control" type="date" value="{{ auth()->user()->birthday ? auth()->user()->birthday : '' }}">
                                    @if($errors->updateProfileInformation->has('birthday'))
                                        <span class="error">{{$errors->updateProfileInformation->first('birthday')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-select mb-0" id="gender" aria-label="Gender select example">
                                <option {{ auth()->user()->gender === '' ? 'selected' : ''}}>Gender</option>
                                <option value="Female" {{ auth()->user()->gender === 'Female' ? 'selected' : ''}}>Female</option>
                                <option value="Male" {{ auth()->user()->gender === 'Male' ? 'selected' : ''}}>Male</option>
                            </select>
                            @if($errors->updateProfileInformation->has('gender'))
                                <span class="error">{{$errors->updateProfileInformation->first('gender')}}</span>
                            @endif
                        </div>
                    </div>

                    <h2 class="h5 my-4">Location</h2>
                    <div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" class="form-control" id="address" type="text" placeholder="Enter your home address" value="{{ old('address') ? old('address') : auth()->user()->address }}">
                                @if($errors->updateProfileInformation->has('address'))
                                    <span class="error">{{$errors->updateProfileInformation->first('address')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input name="city" class="form-control" id="city" type="text" placeholder="City" value="{{ old('city') ? old('city') : auth()->user()->city }}">
                                @if($errors->updateProfileInformation->has('city'))
                                    <span class="error">{{$errors->updateProfileInformation->first('city')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input name="country" class="form-control" id="country" type="tel" placeholder="Country" value="{{ old('country') ? old('country') : auth()->user()->country }}">
                                @if($errors->updateProfileInformation->has('country'))
                                    <span class="error">{{$errors->updateProfileInformation->first('country')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input name="zip" class="form-control" id="zip" type="number" placeholder="ZIP" value="{{ old('zip') ? old('zip') : auth()->user()->zip }}">
                                @if($errors->updateProfileInformation->has('zip'))
                                    <span class="error">{{$errors->updateProfileInformation->first('zip')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>

            <div class="card card-body shadow-sm mb-4">
                <h5 class="mb-4">Update Password</h5>
                <form action="{{route('user-password.update')}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="current_password">Current Password</label>
                        <input class="form-control" name="current_password" id="current_password" type="password" required>
                        @if($errors->updatePassword->has('current_password'))
                            <span class="error">{{$errors->updatePassword->first('current_password')}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">New Password</label>
                        <input class="form-control" name="password" id="password" type="password" required>
                        @if($errors->updatePassword->has('password'))
                            <span class="error">{{$errors->updatePassword->first('password')}}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirm Password</label>
                        <input class="form-control" name="password_confirmation" id="password_confirmation" type="password" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-dark" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!--left side-->
        <div class="col-12 col-xl-4 ps-lg-2">
            <div class="row">
                <div class="col-12 mb-1 mb-md-4 pt-0">
                    <div class="card shadow-sm text-center p-0">
                        @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="profile-cover rounded-top" data-background="{{ asset('storage/'.auth()->user()->cover_photo_path) }}">
                                <img src="{{ asset('storage/'.auth()->user()->cover_photo_path) }}" alt="cover_photo">
                            </div>
                        @endif
                        <div class="card-body pb-5">
                            @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img src="{{ asset('storage/'.auth()->user()->profile_photo_path) }}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="profile_photo">
                            @endif
                            <h4 class="h3">Neil Sims</h4>
                            <h5 class="fw-normal">Senior Software Engineer</h5>
                            <p class="text-gray mb-4">New York, USA</p>
                            <a class="btn btn-sm btn-dark me-2" href="#"><span class="fas fa-user-plus me-1"></span> Connect</a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                        </div>
                    </div>
                </div>

                <!--Profile Photo-->
                @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <livewire:backend.user-profile-photo/>
                @endif

                <div class="col-12 col-xl-12">
                    <div class="card card-body shadow-sm mb-1 mb-md-4">
                        <h2 class="h5 mb-4">Browser Sessions</h2>
                        <p>If necessary, you may log out of all of your other browser sessions across all of your devices. If you feel your account has been compromised, you should also update your password.</p>

                        <livewire:backend.logout-other-browser-sessions-form />

                        <form action="{{route('dashboard.logoutsession')}}" method="post">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" id="password" type="password">
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Log Out Other Browser Sessions</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- date and date range picker -->
    <script src="{{asset('backend/assets/vendor/datepicker/js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="{{asset('backend/assets/vendor/datepicker/js/datepicker.js')}}"></script>
@endpush

