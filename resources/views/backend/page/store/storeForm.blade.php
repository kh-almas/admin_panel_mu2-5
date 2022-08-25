<form action="{{ route('dashboard.library.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input name="file" class="form-control" type="file" id="formFile">
    </div>
    <!--<div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name">
        <label for="floatingInput">FIle Name</label>
    </div>-->
    <div class="mb-3">
        <textarea name="about" class="form-control" placeholder="image description..." id="textarea" rows="3" wire:model="aboutImage"></textarea>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-success">Store</button>
    </div>
</form>
