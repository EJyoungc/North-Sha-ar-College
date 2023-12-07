<?php

namespace App\Livewire\Public;

use App\Models\Hero;
use Livewire\Component;
use Livewire\Attributes\Layout;

class RootLiverwire extends Component
{
    #[Layout('layouts.root')] 

    



    public function render()
    {
        $hero = Hero::get();
        return view('livewire.public.root-liverwire')->with('hero',$hero);
    }
}
