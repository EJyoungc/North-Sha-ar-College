<?php

namespace App\Livewire\Public\Featured;

use Livewire\Component;


class FeaturedLivewire extends Component
{

    #[Layout('layouts.root')] 
    public function render()
    {
        return view('livewire.public.featured.featured-livewire');
    }
}
