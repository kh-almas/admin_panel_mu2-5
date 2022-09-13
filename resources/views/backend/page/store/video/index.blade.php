@extends('backend.page.store.store')

@section('title','all images')

@section('store_view')
    @can('video_gallery')
    <div class="row">
        @foreach($video as $vid)
            <div class="col-md-6">
                <div class="mb-3">
                    <div class="border rounded">
                        <div class="row g-0">
                            <div class="col-md-4 col-lg-3">
                                    <img style="width: 150px; height: 100px;" src="{{ asset('storage/store/'.auth()->user()->uniqueId.'/library/video/thumbnail/'.$vid->thumbnail) }}" alt="img">
                            </div>
                            <div class="col-md-8 col-lg-9 d-flex align-items-center">

                                <div class="w-100">
                                    <div>
                                        <small>{{$vid->created_at->diffForHumans()}}</small>
                                    </div>
                                    <a href="{{ route('dashboard.videos.show',$vid->id) }}">
                                        <h6 class="">{{Illuminate\Support\Str::limit($vid->name,55)}}</h6>
                                    </a>
                                    <div class="d-flex justify-content-between">
                                        <a href=""><small>{{auth()->user()->name}}</small></a>
                                        <div>
                                            <small class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#editvideo{{$vid->id}}">Edit</small>
                                            <form class="d-inline" action="{{route('dashboard.videos.destroy',$vid->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button  class="text-danger btn p-0" type="submit" onclick="return confirm('Are you want delete video')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('backend.page.store.video.update')
        @endforeach
    </div>
    @endcan
@endsection
