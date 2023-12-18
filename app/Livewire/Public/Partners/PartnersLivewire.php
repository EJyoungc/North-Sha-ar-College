<?php

namespace App\Livewire\Public\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\Attributes\Layout;


class PartnersLivewire extends Component
{
    #[Layout('layouts.root')] 

    public function render()
    {
        $p = Partner::all();
        return view('livewire.public.partners.partners-livewire')->with('partners',$p);
    }
}
