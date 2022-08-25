@extends('backend.app')

@section('title','play video')

@section('admin-content')
    <div class="row mt-1">
        <div class="col-12 col-xl-8">
            <button  onclick="hidesidebartext()" id="sidebar-toggle" class=" mb-2 sidebar-toggle me-3 btn btn-icon-only btn-lg btn-circle d-none d-md-inline-block">
                <span class="fas fa-bars"></span>
            </button>

            <div class="d-xl-none d-flex justify-content-end mb-2">
                <button class="btn btn-outline-gray-800" type="button" onclick="showvideonote()">Note</button>
            </div>
            <video id="player1" style="width: 100%" height="421" controls preload="none" poster="http://mediaelementjs.com/images/big_buck_bunny.jpg">
                <source src="assets/video/52 GAJ KA DAMAN  PRANJAL DAHIYA  AMAN JAJI  RENUKA PANWAR  MUKESH JAJI  SAHIL SANDHU.mp4" title="52 GAJ KA DAMAN" type="video/mp4">
            </video>
        </div>
        <div class="col-xl-4 d-none d-xl-block bg-dark fixed-top hide_scrollbar videonotestyle" id="showallnote">
            <div>
                <i class="far fa-times-circle cursor-pointer d-xl-none d-flex fa-2x mt-1" onclick="hidevideonote()" style="color: #262AF5;"></i>
            </div>
            <!-- Form -->
            <form action="" class="mb-3">
                <div class="my-4">
                    <textarea class="form-control"  placeholder="Type your note..." id="textarea" rows="4" style="background-color: #262B34; border-color: #262AE1;"></textarea>
                </div>
                <div>
                    <button class="btn w-100" type="button" style="background-color: #262A77; color: #00d1b2;">Save</button>
                </div>
            </form>
            <!-- End of Form -->
            <div style="border-bottom: 1px solid #262AE1"></div>
        </div>
    </div>
@endsection
