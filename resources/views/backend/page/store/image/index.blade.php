@extends('backend.page.store.store')

@section('title','all images')

@section('store_view')
    @can('image_gallery')
        <div class="row">
            @foreach($stored_image as $img)
                <div class="col-md-2 col-sm-3 col-4">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#store_image_{{ $img->id }}"><img width="200" height="100" src="{{asset('storage/store/'.auth()->user()->uniqueId.'/library/image/'.$img->link)}}" alt="img"></a>
                </div>
                <div class="modal fade" id="store_image_{{ $img->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen" role="document">
                        <div class="modal-content hide_scrollbar" style="max-height: 100vh; overflow-y: scroll;">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            @include('backend.page.store.image.update')
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row p-4">
            <div class="col-7 mt-1">Showing 1 - 24 of 500</div>
            <div class="col-5">
                <div class="btn-group float-end">
                    {{ $stored_image->links() }}
                </div>
            </div>
        </div>
    @endcan

@endsection
