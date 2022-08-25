<?php

namespace App\Http\Controllers\backend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibrariesVideoRequest;
use App\Models\User;
use App\Models\Videolibrary;
use App\Models\Videonote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideolibraryController extends Controller
{
    public function index()
    {
        $video = auth()->user()->videolibrarys;
        return view('backend.page.store.video.index',compact('video'));
    }

    public function create()
    {
        //
    }

    public function store(StoreLibrariesVideoRequest $request)
    {
        if($request->hasFile('file') && $request->hasFile('thumbnail')){

            $previous_file_name = pathinfo($request->file->getClientOriginalName(),PATHINFO_FILENAME);
            $size = filesize($request->file);
            Helper::calculate_space($size,'plus');
            $prefix = 'VID'.'-'.Carbon::now()->toDateString().'-'.time().'-'.$size;
            $file_suffix = $request->file->getClientOriginalExtension();
            $thumbnail_suffix = $request->thumbnail->getClientOriginalExtension();
            $name = Helper::file_name(new User,'uniqueId',5,4, $prefix, time());
            $orginal_file_name = $name.'.'.$file_suffix;
            $thumbnail = $name.'.'.$thumbnail_suffix;

            //return $file_name;
            $file_path = 'public/store/'.auth()->user()->uniqueId.'/library/video/file';
            $thumbnail_path = 'public/store/'.auth()->user()->uniqueId.'/library/video/thumbnail';

            $request->file('file')->storeAs(
                $file_path, $orginal_file_name
            );
            $request->file('thumbnail')->storeAs(
                $thumbnail_path, $thumbnail
            );


            auth()->user()->videolibrarys()->create([
                'name' => $previous_file_name,
                'link' => $orginal_file_name,
                'thumbnail' => $thumbnail,
                'size' => $size,//bytes
                'description' => $request->about,
            ]);

            return redirect()->back()->with('uploaded', 'Video Upload successfully');

        }else{
            return redirect()->back();
        }
    }

    public function show(Videolibrary $video)
    {
        return view('backend.page.store.video.show',compact('video'));
    }

    public function edit(Videolibrary $video)
    {
        //
    }

    public function update(Request $request, Videolibrary $video)
    {
        $video->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('update', 'Video information updated');
    }

    public function destroy(Videolibrary $video)
    {
        foreach ($video->notes as $note)
        {
            $note->delete();
        }

        if(Storage::disk('public')->exists('store/'.auth()->user()->uniqueId.'/library/video/file/'.$video->link))
        {
            Storage::disk('public')->delete('store/'.auth()->user()->uniqueId.'/library/video/file/'.$video->link);
        }

        if(Storage::disk('public')->exists('store/'.auth()->user()->uniqueId.'/library/video/thumbnail/'.$video->thumbnail))
        {
            Storage::disk('public')->delete('store/'.auth()->user()->uniqueId.'/library/video/thumbnail/'.$video->thumbnail);
        }

        $video->delete();
        return redirect()->back()->with('delete', 'Video  deleted');
    }
}
