<!-- Modal -->
<div class="modal fade" id="addvideo" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="{{ route('dashboard.videos.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile">File :</label>
                            <input name="file" class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail">Thumbnail :</label>
                            <input name="thumbnail" class="form-control" type="file" id="thumbnail">
                        </div>
                        <!--<div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name">
                            <label for="floatingInput">FIle Name</label>
                        </div>-->
                        <div class="mb-3">
                            <label for="formFile">Description :</label>
                            <textarea name="about" class="form-control" placeholder="Video description..." id="textarea" rows="3" wire:model="aboutImage"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
