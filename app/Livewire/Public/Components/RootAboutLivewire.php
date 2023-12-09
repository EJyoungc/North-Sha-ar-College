<?php

namespace App\Livewire\Public\Components;

use App\Models\About;
use App\Models\Footer;
use Livewire\Component;



class RootAboutLivewire extends Component
{
    public $about;
    public function mount(){
      $this->about =  Footer::find(1);
      
    }
    public function render()
    {
        return view('livewire.public.components.root-about-livewire');
    }
}
