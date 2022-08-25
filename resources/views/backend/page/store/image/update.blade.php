<div class="modal-body">
    <div class="row">
        <div class="col-md-7">
            <div class="d-flex justify-content-center align-content-center" style="max-width: 100%; max-height: 83vh;">
                <img src="{{asset('storage/store/'.auth()->user()->uniqueId.'/library/image/'.$img->link)}}" alt="img" style="max-width: 100%; max-height: 100%;">
            </div>
        </div>
        <div class="col-md-5  pe-5">
            <ul>
                <li>Uploaded on: May 15, 2021</li>
                <li>Uploaded by: {{ $img->person->name }}</li>
                <li>File size: {{ $img->size/1024 }} KB</li>
            </ul>
            <div class="border-bottom mb-3"></div>

            <div class="input-group mb-3">
                <button class="input-group-text" id="basic-addon1"><span class="fas fa-copy"></span></button>
                <input type="text" class="form-control" id="exampleInputIconLeft" value="{{asset('storage/store/'.auth()->user()->uniqueId.'/library/image/'.$img->link)}}" disabled>
            </div>

            <!-- image update form -->
            <div>
                <form action="{{ route('dashboard.images.update',$img->link) }}" id="updateStoreImageForm{{$img->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" value="{{ $img->link }}" disabled>
                        <label for="floatingInput">FIle Name</label>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control" placeholder="About image..." id="textarea" rows="3">{{ $img->description }}</textarea>
                    </div>
                </form>
                <div class="d-flex justify-content-between">
                    <form action="{{ route('dashboard.images.destroy',$img->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Wanna delete image')">Delete</button>
                    </form>
                    <button class="btn btn-dark" onclick="updateStoreImagebutton('updateStoreImageForm{{$img->id}}')">Submit</button>
                </div>
            </div>
            <!-- image update form -->
        </div>
    </div>
</div>
