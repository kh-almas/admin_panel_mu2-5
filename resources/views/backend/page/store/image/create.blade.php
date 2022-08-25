<!-- Modal -->
<div class="modal fade" id="addimage" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Store Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="{{ route('dashboard.images.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input name="newImage" class="form-control" type="file" id="formFile">
                        </div>
                        <!--<div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name">
                            <label for="floatingInput">FIle Name</label>
                        </div>-->
                        <div class="mb-3">
                            <textarea name="aboutImage" class="form-control" placeholder="image description..." id="textarea" rows="3" wire:model="aboutImage"></textarea>
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
