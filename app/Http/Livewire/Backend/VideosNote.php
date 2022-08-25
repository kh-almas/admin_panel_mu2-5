<?php

namespace App\Http\Livewire\Backend;

use App\Models\Videolibrary;
use App\Models\Videonote;
use Livewire\Component;

class VideosNote extends Component
{
    public $video;
    public $v_n_text;
    public $notes;

//    public $abc = [
//
//    ];


    public function s_note(){
        if ( !empty($this->v_n_text) ) {
            $abc = auth()->user()->notes()->create([
                'videosID' => $this->video->id,
                'text' => $this->v_n_text,
            ]);
            $this->notes->prepend($abc);
            $this->v_n_text='';
        }
    }

    public function delete_note(Videonote $noteID)
    {
        $noteID->delete();
        $this->mount();
        $this->render();
        //$this->notes->remove($noteID);
//        $this->video->reload();
    }

    public function mount()
    {
        $this->notes = Videonote::where('videosID',$this->video->id)->latest()->get();

    }

    public function render()
    {
        return view('livewire.backend.videos-note');
    }
}
