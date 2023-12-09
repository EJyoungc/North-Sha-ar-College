<?php

namespace App\Livewire\Public\About;

use App\Models\About;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AboutLivewire extends Component
{

    #[Layout('layouts.root')] 

    public $about;
    public function mount(){
      $this->about =  About::find(1);
    //   dd($this)
    }
    public function render()
    {
        return view('livewire.public.about.about-livewire');
    }
}
