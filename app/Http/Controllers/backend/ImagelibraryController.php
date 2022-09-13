<?php

namespace App\Http\Controllers\backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibrariesImageRequest;
use App\Models\Imagelibrary;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagelibraryController extends Controller
{
    public function index()
    {
        $this->authorize('image_gallery');
        $stored_image = auth()->user()->imagelibraries;
        return view('backend.page.store.image.index',compact('stored_image'));
    }

    public function store(StoreLibrariesImageRequest $request)
    {
        $this->authorize('image_gallery');
        if($request->hasFile('newImage')){
            $size = filesize($request->newImage);
            Helper::calculate_space($size,'plus');
            $prefix = 'IMG'.'-'.Carbon::now()->toDateString().'-'.time().'-'.$size;
            $suffix = $request->newImage->getClientOriginalExtension();
            $name = Helper::file_name(new User,'uniqueId',5,4, $prefix, $suffix);
            $path = 'public/store/'.auth()->user()->uniqueId.'/library/image';

            $request->file('newImage')->storeAs(
                $path, $name
            );

            auth()->user()->imagelibraries()->create([
                'link' => $name,
                'size' => $size,//bytes
                'description' => $request->aboutImage,
            ]);
            return redirect()->back()->with('uploaded', 'Image Upload successfully');
        }else{
            return redirect()->back();
        }


    }

    public function update(Request $request, $id)
    {
        $this->authorize('image_gallery');
        $name = Imagelibrary::where('link', $id)->where('person_id', auth()->user()->id);
        $name->update([
            'description' => $request->description,
        ]);
        return redirect()->back()->with('update', 'Image description updated');
    }

    public function destroy($id)
    {
        $this->authorize('image_gallery');
        $image = Imagelibrary::findOrFail($id);
        Helper::calculate_space($image->size,'subtraction');
        if(Storage::disk('public')->exists('store/'.auth()->user()->uniqueId.'/library/image/'.$image->link))
        {
            Storage::disk('public')->delete('store/'.auth()->user()->uniqueId.'/library/image/'.$image->link);
        }
        $image->delete();
        return redirect()->back()->with('delete', 'image  deleted');

    }
}
