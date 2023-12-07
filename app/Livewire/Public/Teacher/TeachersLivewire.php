<?php

namespace App\Livewire\Public\Teacher;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;


class TeachersLivewire extends Component
{
    #[Layout('layouts.root')] 
    public function render()
    {
        $u = User::where('public',true)->get();
        return view('livewire.public.teacher.teachers-livewire')->with('users',$u);
    }
}
