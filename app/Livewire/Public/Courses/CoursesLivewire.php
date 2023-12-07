<?php

namespace App\Livewire\Public\Courses;

use App\Models\EducationalPrograms;
use Livewire\Component;
use Livewire\Attributes\Layout;



class CoursesLivewire extends Component
{
    #[Layout('layouts.root')] 

    




    public function render()
    {   
        $c = EducationalPrograms::get();
        return view('livewire.public.courses.courses-livewire')->with('courses',$c);
    }
}
