<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LogoutOtherBrowserSessionsForm extends Component
{
    public $session;

    public function mount(){
        $this->session = DB::table('sessions')->where('user_id' , auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.backend.logout-other-browser-sessions-form');
    }
}
