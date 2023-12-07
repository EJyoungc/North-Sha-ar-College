<?php

namespace App\Livewire\Pages\Testimonials;

use App\Models\Testimonial;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialsLivewire extends Component
{

    use WithPagination;
    use LivewireAlert;
    public $modal = false;
    public $name;
    public $testimonial;
    public $id;


    public function open($id = null)
    {
        if (!empty($id)) {
            $this->id = $id;
            $a = Testimonial::find($id);
            $this->name = $a->name;
            $this->testimonial = $a->testimonial;
            $this->modal = true;
        } else {
            $this->modal = true;
        }
    }

    public function store()
    {

        if (!empty($this->id)) {
            $this->validate([
                'name' => 'required|string',
                'testimonial' => 'required|string'
            ]);
            $Testimonial = Testimonial::find($this->id);
            $Testimonial->name = $this->name;
            $Testimonial->testimonial = $this->testimonial;
            $Testimonial->save();
            $this->cancel();
            $this->alert('success', 'successful');
        } else {
            $this->validate([
                'name' => 'required|string',
                'testimonial' => 'required|string'
            ]);
            $Testimonial = new  Testimonial();
            $Testimonial->name = $this->name;
            $Testimonial->testimonial = $this->testimonial;
            $Testimonial->save();
            $this->cancel();
            $this->alert('success', 'successful');
        }
    }

    public function delete($id){

        $w = Testimonial::find($id);
        $w->delete();
        $this->alert('success','successful');

    }

    public function cancel()
    {

        $this->reset(['name', 'testimonial', 'modal','id']);
    }
    public function render()
    {

        $t = Testimonial::latest()->paginate(10);
        return view('livewire.pages.testimonials.testimonials-livewire')->with('testimonials',$t);
    }
}
