<?php

namespace App\Livewire\Public\Partners;

use Livewire\Component;
use Livewire\Attributes\Layout;


class PartnersLivewire extends Component
{
    #[Layout('layouts.root')] 

    public function render()
    {
        return view('livewire.public.partners.partners-livewire');
    }
}
