@extends('backend.app')

@section('title','profile settings')

@section('admin-content')
    <div class="flex-xl-row mt-lg-4 mt-md-3 mt-1 d-flex flex-column-reverse" style="overflow-x: hidden">
        <div class="col-12 col-xl-8 pe-lg-2">
            <div class="card card-body shadow-sm mb-4">
                <form action="{{ route('dashboard.sendMessageToSingleUser',$user->id) }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Subject</label>
                        <input name="subject" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Header</label>
                        <input name="header" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Header">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Button URL</label>
                        <input name="b_url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Header">
                    </div>
                    <div class="form-groupb mb-4">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
                    </div>
                    <div>
                        <button class="w-100 btn-dark btn-sm" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>

        <!--left side-->
        <div class="col-12 col-xl-4 ps-lg-2">
            <div class="row">
                <div class="col-12 mb-1 mb-md-4 pt-0">
                    <div class="card shadow-sm p-0">
                        <div class="text-center">
                            @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="profile-cover rounded-top" data-background="{{ asset('storage/'.$user->cover_photo_path) }}"></div>
                            @endif
                            <div class="card-body pb-5">
                                @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img src="{{ asset('storage/'.$user->profile_photo_path) }}" class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="profile_photo">
                                @endif
                                <h4>{{ $user->name }}</h4>
                                <a href="{{ route('dashboard.showUpdateUserFormByAdmin',$user->id) }}">See Profile</a>
                            </div>
                        </div>
                        <div class="px-3 py-2">
                            <p>Email : {{ $user->email }}</p>
                            <p>Phone : {{ $user->phone }}</p>
                            <p>Birthday : {{ $user->birthday }}</p>
                            <p>Gender : {{ $user->gender }}</p>
                            <h4 class="my-4">Location</h4>
                            <p>Address : {{ $user->address }}</p>
                            <p>City : {{ $user->city }}</p>
                            <p>Country : {{ $user->country }}</p>
                            <p>ZIP : {{ $user->zip }}</p>
                        </div>
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

