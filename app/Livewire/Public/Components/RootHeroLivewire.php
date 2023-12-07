<?php

namespace App\Livewire\Public\Components;

use App\Models\Hero;
use Livewire\Component;

class RootHeroLivewire extends Component
{
    public function render()
    {
        $hero = Hero::get();
        return view('livewire.public.components.root-hero-livewire')->with('hero',$hero);
    }
}
