@extends('backend.page.store.store')

@section('title','all images')

@section('store_view')
    @can('video_gallery')
    <div class="row mt-1">
        <div class="col-12 col-xl-8">
            <div class="d-xl-none d-flex justify-content-end mb-2">
                <button class="btn btn-outline-gray-800" type="button" onclick="showvideonote()">Note</button>
            </div>
            <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 421px; background-color: #0a0a0a;">
                <video style="max-width: 100%; max-height: 100%" id="player1" controls preload="none" poster="{{ asset('storage/store/'.auth()->user()->uniqueId.'/library/video/thumbnail/'.$video->thumbnail) }}">
                    <source style="max-width: 100%; max-height: 100%" src="{{ asset('storage/store/'.auth()->user()->uniqueId.'/library/video/file/'.$video->link) }}" title="{{$video->namme}}" type="video/mp4">
                </video>
            </div>
            <h5 class="mt-3">{{ $video->name }}</h5>
            <p class="mt-3">{{ $video->description }}</p>
        </div>
        <livewire:backend.videos-note :video="$video"/>
    </div>
    @endcan
@endsection
