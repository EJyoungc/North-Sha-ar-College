<?php

namespace App\Livewire\Pages\About;

use App\Models\About;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AboutLivewire extends Component
{
    use LivewireAlert;
    public $about;
    

    public function store(){

        
            $this->validate([
                'about'=>'required|string'
            ]);
            $a = About::find(1);
            $a->about = $this->about;
            $a->save();
            $this->alert('success','successfull');
        
    }







    public function render()
    {      
        $a = About::find(1);
        $this->about = $a->about;
        return view('livewire.pages.about.about-livewire');
    }
}
