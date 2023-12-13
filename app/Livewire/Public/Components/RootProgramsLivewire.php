<?php

namespace App\Livewire\Public\Components;

use App\Models\EducationalPrograms;
use Livewire\Component;

class RootProgramsLivewire extends Component
{
    public function render()
    {
        $p = EducationalPrograms::latest()->limit(4)->get();
        return view('livewire.public.components.root-programs-livewire')->with('programs',compact($p));
    }
}
