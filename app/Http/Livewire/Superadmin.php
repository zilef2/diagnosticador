<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Superadmin extends Component
{
    public $users_admin=[];
    public $users=[];
    public $id_u;

    public function mount($users,$users_admin)
    {
        $this->users=$users;
        $this->users_admin=$users_admin;
    }

    public function cambiar()
    {
        $user = User::findOrFail($this->id_u);
        $user->is_admin = 1;
        $user->save();
        $this->users=User::query()->where('is_admin',0)->get();
        $this->users_admin=User::query()->where('is_admin',1)->get();
        session()->flash('message', 'El usuario es administrador');
    }
    public function Scambiar()
    {
        $user = User::findOrFail($this->id_u);
        $user->is_admin = 2;
        $user->save();
        $this->users=User::query()->where('is_admin',0)->get();
        $this->users_admin=User::query()->where('is_admin',1)->get();
        session()->flash('message', 'El usuario es Super administrador');
    }
    public function render()
    {
        return view('livewire.superadmin');
    }
}
