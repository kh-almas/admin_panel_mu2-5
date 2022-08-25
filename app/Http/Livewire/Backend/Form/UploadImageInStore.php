<?php

namespace App\Http\Livewire\Backend\Form;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageInStore extends Component
{
    use withFileUploads;

    public $newImage, $aboutImage;


    public function store_image(){

        $uniqid = Str::random(30);
        dd($uniqid);


            auth()->user()->libraries()->create([
                'key' => 'kjdfnvkjzdfvndf',
                'link' => 'aaaaaaaaaaa',
                'description' =>'cccccccc'
            ]);





    }


    public function render()
    {
        return view('livewire.backend.form.upload-image-in-store');
    }
}
