<?php

namespace App\Livewire\Public\Components;

use App\Models\EducationalPrograms;
use Livewire\Component;

class RootProgramsLivewire extends Component
{
    public function render()
    {
        $p = EducationalPrograms::latest()->limit(4)->get();
        $pc = $p->chunk(2);
        return view('livewire.public.components.root-programs-livewire')->with('grouped_programs',compact($pc));
    }
}
