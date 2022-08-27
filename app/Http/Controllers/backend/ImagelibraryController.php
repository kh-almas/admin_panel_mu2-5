<?php

namespace App\Http\Controllers\backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibrariesImageRequest;
use App\Models\Imagelibrary;
use App\Models\Settings;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ImagelibraryController extends Controller
{
    public function index()
    {
        $stored_image = auth()->user()->imagelibraries;
        return view('backend.page.store.image.index',compact('stored_image'));
    }

//    public function create()
//    {
//        //
//    }

    public function store(StoreLibrariesImageRequest $request)
    {


        $permit = Settings::where('id',1)->first();

        if(Gate::allows('can_use_library',$permit)){
            abort('403');
        }

        if($request->hasFile('newImage')){
            $size = filesize($request->newImage);
            Helper::calculate_space($size,'plus');
            $prefix = 'IMG'.'-'.Carbon::now()->toDateString().'-'.time().'-'.$size;
            $suffix = $request->newImage->getClientOriginalExtension();
            $name = Helper::file_name(new User,'uniqueId',5,4, $prefix, $suffix);
            $path = 'public/store/'.auth()->user()->uniqueId.'/library/image';

            $path = $request->file('newImage')->storeAs(
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

//    public function show($id)
//    {
//        //
//    }
//
//    public function edit($id)
//    {
//        //
//    }

    public function update(Request $request, $id)
    {
        $name = Imagelibrary::where('link', $id)->where('person_id', auth()->user()->id);
        $name->update([
            'description' => $request->description,
        ]);
        return redirect()->back()->with('update', 'Image description updated');
    }

    public function destroy($id)
    {
        //return $id;
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
