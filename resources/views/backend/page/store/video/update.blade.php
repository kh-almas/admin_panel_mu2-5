<!-- vedio edit Modal Content -->
<div class="modal fade" id="editvideo{{$vid->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Edit Video Information</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.videos.update',$vid->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="FIle Name" value="{{ $vid->name }}">
                        <label for="floatingInput">FIle Name</label>
                    </div>
                    <div class="my-4">
                        <textarea name="description" class="form-control" placeholder="Video description" id="textarea" rows="4">{{ $vid->description }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end"><button class="btn btn-dark" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--vedio edit End of Modal Content -->
