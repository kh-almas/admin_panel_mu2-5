<?php

namespace App\Http\Livewire\Backend;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserProfilePhoto extends Component
{
    use WithFileUploads;

    public $profile_photo, $cover_photo;

    public function updatePhoto(){
        $this->validate([
            'profile_photo' => 'image|max:1024',
            'cover_photo' => 'image|max:1024',
        ]);
    }

    public function save_profile_photo(){
        if($this->profile_photo)
        {
            auth()->user()->updateProfilePhoto($this->profile_photo);

        }
        return $this->redirect(route('dashboard.profile.settings'));
    }

    public function save_cover_photo(){
        if($this->cover_photo)
        {
            //make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $currentDate.'-'.time().'-'.uniqid().'.'.$this->cover_photo->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('cover-photos'))
            {
                Storage::disk('public')->makeDirectory('cover-photos');
            }

            if(Storage::disk('public')->exists(auth()->user()->cover_photo_path))
            {
                Storage::disk('public')->delete(auth()->user()->cover_photo_path);
            }

            //->resize(720,480)
            $cover_photo = Image::make($this->cover_photo)->stream();
            Storage::disk('public')->put('cover-photos/'.$imageName,$cover_photo);

            auth()->user()->forceFill([
                'cover_photo_path'=> 'cover-photos/'.$imageName,
            ])->save();

        }
            return $this->redirect(route('dashboard.profile.settings'));
    }

    public function render()
    {
        return view('livewire.backend.user-profile-photo');
    }
}
