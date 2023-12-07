<?php

namespace App\Livewire\Public\Components;

use App\Models\Testimonial;
use Livewire\Component;

class RootTestimonialLivewire extends Component
{
    public function render()
    {
        $t = Testimonial::latest()->get();
        // dd($t);
        return view('livewire.public.components.root-testimonial-livewire')->with('testimonials',$t);
    }
}
