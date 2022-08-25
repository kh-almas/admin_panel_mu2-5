<div>
    <form wire:submit.prevent="save_profile_photo">
        @csrf
        <div class="col-12">
            <div class="card card-body shadow-sm mb-1 mb-md-4">
                @error('profile_photo')
                    <span class="error">{{$message}}</span>
                @enderror
                <h2 class="h5 mb-4">Select profile photo</h2>
                <div class="d-flex align-items-center">
                    @if($profile_photo)
                        <div class="me-3 mb-2">
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar">
                                <img class="rounded" src="{{$profile_photo->temporaryUrl()}}" alt="change avatar">
                            </div>
                        </div>
                    @endif
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input wire:model="profile_photo" type="file">
                                <div class="d-md-block text-left">
                                    <div class="fw-normal text-dark mb-1">Choose Image</div>
                                    <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($profile_photo)
                    <div class="mt-3">
                        <button type="submit" class="w-100 btn btn-dark">save</button>
                    </div>
                @endif
            </div>
        </div>
    </form>
    <form wire:submit.prevent="save_cover_photo">
        <div class="col-12 col-xl-12">
            <div class="card card-body shadow-sm mb-1 mb-md-4">
                @error('cover_photo')
                    <span class="error">{{massege}}</span>
                @enderror
                <h2 class="h5 mb-4">Select cover photo</h2>
                <div class="d-flex align-items-center">
                    @if($cover_photo)
                        <div class="me-3 mb-2">
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar">
                                <img class="rounded" src="{{$cover_photo->temporaryUrl()}}" alt="change cover photo">
                            </div>
                        </div>
                    @endif
                    <div class="file-field">
                        <div class="d-flex justify-content-xl-center ms-xl-3">
                            <div class="d-flex">
                                <span class="icon icon-md"><span class="fas fa-paperclip me-3"></span></span> <input wire:model="cover_photo" type="file">
                                <div class="d-md-block text-left">
                                    <div class="fw-normal text-dark mb-1">Choose Image</div>
                                    <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($cover_photo)
                    <div class="mt-3">
                        <button type="submit" class="w-100 btn btn-dark">save</button>
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>
