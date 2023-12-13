<?php

namespace App\Livewire\Public\Courses;

use App\Models\EducationalPrograms;
use Livewire\Component;
use Livewire\Attributes\Layout;


class CoursesShowLivewire extends Component
{
    #[Layout('layouts.root')]
    
    public $ep;
    public function mount($slug){
        $this->ep  = EducationalPrograms::where('slug',$slug)->get();
    
    }



    public function render()
    {
        return view('livewire.public.courses.courses-show-livewire');
    }
}
