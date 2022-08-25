<div>
    <form wire:submit.prevent="store_image">
        <div class="mb-3">
            <input class="form-control" type="file" id="formFile" wire:model="newImage">
        </div>
        <!--<div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="FIle Name">
            <label for="floatingInput">FIle Name</label>
        </div>-->
        <div class="mb-3">
            <textarea class="form-control" placeholder="About image..." id="textarea" rows="3" wire:model="aboutImage"></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success">Store</button>
        </div>
    </form>
</div>
