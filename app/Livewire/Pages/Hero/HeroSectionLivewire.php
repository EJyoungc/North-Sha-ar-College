<?php

namespace App\Livewire\Pages\Hero;

use App\Models\Hero;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class HeroSectionLivewire extends Component
{
    use LivewireAlert;
    use WithFileUploads;
   
    public $modal = false;
    public $image;
    public $text;
    public $id;
    public function open_modal($id = null)
    {
        $this->id = $id;
        if (!empty($id)) {
            $h = Hero::find($id);
            $this->modal = true;
            $this->text = $h->name;
            
        } else {
            $this->modal = true;
        }
    }

    // public fucntion


    public function store()
    {

        $this->validate([
            'image'=>'required|image',
            'text'=>'required'
        ]);

        $file = $this->image->store('hero','custom');

        if(!empty($this->id)){



            $h = Hero::find($this->id);

            Storage::disk('custom')->delete($h->image);
            $file = $this->image->store('hero','custom');
            $h->name = $this->text;
            $h->image = $file;
            $h->save();
            $this->alert('success','Updated');
        }else{
        $h = new Hero();
        $h->name = $this->text;
        $h->image = $file;
        $h->save();
        $this->alert('success','successfull');
        }
        
    }

    public function delete($id){
          $h = Hero::find($id);
          Storage::disk('custom')->delete($h->image);
          $h->delete();

          $this->alert('success','successful');
    }




    public function cancel()
    {
        $this->reset(['modal', 'text', 'image']);
    }



    public function render()
    {

        $hero = Hero::all();
        return view('livewire.pages.hero.hero-section-livewire')->with('hero',$hero);
    }
}
