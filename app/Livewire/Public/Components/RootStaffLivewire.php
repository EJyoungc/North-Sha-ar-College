<?php

namespace App\Livewire\Public\Components;

use App\Models\User;
use Livewire\Component;

class RootStaffLivewire extends Component
{
    public function render()
    {
        $u = User::where('public',true)->get();
        
        return view('livewire.public.components.root-staff-livewire')->with('users',$u);
    }


    public function link(){
        redirect(route('root.staff'));
    }
}
