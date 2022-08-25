@extends('backend.app')

@section('title','profile settings')

@section('admin-content')
    <div class="mt-lg-4 mt-md-3 mt-1" style="overflow-x: hidden">
        <div class="">
            <div class="mb-3">
                <h4>Send message to group user</h4>
            </div>
            <div class="card card-body shadow-sm mb-4">
                <form action="{{ route('dashboard.sendMessageToGroupUser') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Select a role</label>
                        <select name="group" class="form-select" aria-label="Default select example">
                            <option selected>Select role</option>
                            <option value="1">Admin</option>
                            <option value="2">Moderator</option>
                            <option value="3">User</option>
                        </select>
                    </div>
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

