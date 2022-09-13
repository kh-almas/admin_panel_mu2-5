<?php

namespace App\Http\Livewire\Backend;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserInAdmin extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchByName = '';
    public $searchByEmail = '';
    public $searchByRole = '';
    public $searchByCountry = '';

    public $total_user;

    public function mount()
    {
        $this->total_user = User::get()->count();
    }

    public function render()
    {
        //sleep(1);

        ///search coming from appServiceProvider
        return view('livewire.backend.user-in-admin', [
            'users' => User::paginate(15),
//            'users' => User::search('name',$this->searchByName)
//                    ->search('email',$this->searchByEmail)
//                    ->search('role',$this->searchByRole)
//                    ->search('country',$this->searchByCountry)
//                    ->latest()
//                    ->paginate(15),
            'roles' => Role::all(),
        ]);

    }
}
