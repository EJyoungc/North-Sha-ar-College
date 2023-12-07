<?php

namespace App\Livewire\Public\Components;

use App\Models\Why;
use Livewire\Component;

class RootWhyLivewire extends Component
{
    public function render()
    {

        $why = Why::latest()->get();
        return view('livewire.public.components.root-why-livewire')->with('whies',$why);
    }
}
