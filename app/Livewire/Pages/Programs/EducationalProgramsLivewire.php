<?php

namespace App\Livewire\Pages\Programs;

use App\Models\EducationalPrograms;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EducationalProgramsLivewire extends Component
{

    use WithFileUploads;
    use LivewireAlert;
    public $modal = false;
    public $name;
    public $about;
    public $image;
    public $id;


    public function store()
    {


        $this->validate([
            'name' => 'required',
            'image' => 'image',
            'about' => 'required|string',

        ]);


        if (!empty($this->id)) {



            $ep = EducationalPrograms::find($this->id);
            if (!empty($ep->image)) {
                Storage::disk('custom')->delete($ep->image);
                $file = $this->image->store('programs', 'custom');
                $ep->name = $this->name;
                $ep->about = $this->about;
                $ep->slug = Str::slug($this->name, '-');     
                $ep->image = $file;
                $ep->save();

                $this->cancel();
                $this->alert('success', 'updated');
            } else {

                $ep->name = $this->name;
                $ep->about = $this->about;
                $this->slug =Str::slug($this->name, '-');
                $ep->save();

                $this->cancel();
                $this->alert('success', 'updated');
            }
        } else {

            $file = $this->image->store('programs', 'custom');
            EducationalPrograms::create([
                'name' => $this->name,
                'about'=>$this->about,
                'slug'=>Str::slug($this->name, '-'),
                'image'=>$file,
            ]);

            $this->cancel();

            $this->alert('success', 'saved');
        }
    }



    public function open_modal($id = null)
    {

        if (!empty($id)) {

            $this->modal = true;
            $this->id = $id;
            $ep = EducationalPrograms::find($this->id);
            $this->name = $ep->name;
            $this->about = $ep->about;
            
        } else {
            $this->modal = true;
        }

        
    }


    public function delete($id){
        
        $ep = EducationalPrograms::find($id);
        Storage::disk('custom')->delete($ep->image);
        $ep->delete();

        $this->alert('success', 'Deleted');
    }


    public function cancel()
    {
        $this->reset(['modal', 'name','about','image']);
    }

    public function render()
    {
        $programs = EducationalPrograms::all();
        return view('livewire.pages.programs.educational-programs-livewire')->with("programs", $programs);
    }
}
