<div>
    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content hide_scrollbar" style="max-height: 100vh; overflow-y: scroll;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="d-flex justify-content-center align-content-center" style="max-width: 100%; max-height: 83vh;">
                                <img src="{{asset('storage/profile-photos/water.jpg')}}" alt="img" style="max-width: 100%; max-height: 100%;">
                            </div>
                        </div>
                        <div class="col-md-5  pe-5">
                            <ul>
                                <li>Uploaded on: May 15, 2021</li>
                                <li>Uploaded by: admin</li>
                                <li>File name: slideshow-1-e1621247177197.jpg</li>
                                <li>File type: image/jpeg</li>
                                <li>File size: 351 KB</li>
                                <li>Dimensions: 1920 by 1050 pixels</li>
                            </ul>
                            <div class="border-bottom mb-3"></div>

                            <div class="input-group mb-3">
                                <button class="input-group-text" id="basic-addon1"><span class="fas fa-copy"></span></button>
                                <input type="text" class="form-control" id="exampleInputIconLeft" value="slideshow-1-e1621247177197.jpg">
                            </div>
                            <!-- image update form -->
                            <livewire:backend.form.update-image-from-store/>
                            <!-- image update form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
