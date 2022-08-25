@extends('backend.app')

@section('title','profile settings')

@section('admin-content')
    <div class="mt-lg-4 mt-md-3 mt-1" style="overflow-x: hidden">
        <div class="">
            <div class="mb-3">
                <h4>Send message to all user</h4>
            </div>
            <div class="card card-body shadow-sm mb-4">
                <form action="{{ route('dashboard.sendMessageToAllUser') }}" method="post">
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
    </div>
@endsection

@push('js')
    <!-- date and date range picker -->
    <script src="{{asset('backend/assets/vendor/datepicker/js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightpick@1.3.4/lightpick.min.js"></script>
    <script src="{{asset('backend/assets/vendor/datepicker/js/datepicker.js')}}"></script>
@endpush

