<?php

namespace App\Livewire\Public;

use App\Models\Hero;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\Attributes\Layout;

class RootLiverwire extends Component
{
    #[Layout('layouts.root')] 

    



    public function render()
    {
        $t = Testimonial::latest()->get();
        $hero = Hero::get();
        return view('livewire.public.root-liverwire')->with('hero',$hero)->with('testimonials',$t);
    }
}
