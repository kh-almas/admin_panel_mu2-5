<?php

namespace App\Http\Livewire\Backend\Form;

use Livewire\Component;

class Settings extends Component
{
    //public $auto_appprove, $dont_auto_approve;
    public $settings;
    public $positive_use;
    public $maintenance_link;

//    public function alw_appv()
//    {
//        $this->auto_appprove = 'checked';
//        $this->dont_auto_approve = '';
//    }
//
//    public function dis_alw_appv()
//    {
//        $this->dont_auto_approve = 'checked';
//        $this->auto_appprove = '';
//    }

    public function mount()
    {
        $this->settings = \App\Models\Settings::where('id',1)->firstOrFail();
        $this->positive_use = $this->settings->permit_library;
    }



    public function render()
    {
        return view('livewire.backend.form.settings');
    }
}
