<?php

namespace App\Livewire\Public\Components;

use App\Models\IntakeCandidates;
use App\Models\User;
use Livewire\Component;

class RootStatsLivewire extends Component
{
    public function render()
    {
        $estats = IntakeCandidates::get()->count(); 
        $ustats = User::get()->count(); 
        return view('livewire.public.components.root-stats-livewire')->with('estats',$estats)->with('ustats',$ustats);
    }
}
