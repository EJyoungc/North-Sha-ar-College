<?php

namespace App\Livewire\Pages\Partners;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;
class PartnersLivewire extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    public $modal = false;
    public $image;
    public $name;
    public $id;
    

    public function create($id = null){
        if(!empty($id)){
            $this->id = Partner::find($id);
            $this->name = $this->id->name;
            $this->image = $this->id->image;
            $this->modal = true;
        }else{
            $this->modal = true;
        }

    }


    public function store()
    {
        if(!empty($this->id->id)){
            if(!empty($this->image)){
                $this->validate([
                    'name'=>'required',
                    'image'=>'required|image',
                ]);

                Storage::disk('custom')->delete($this->id->logo);
                $file =$this->image->store('partners','custom');
                $img = Image::make(public_path('assets/uploads/' . $file))->fit(400, 400);
                $img->save();
                $this->id->name = $this->name;
                $this->id->logo = $this->img;
                $this->id->save();
                $this->cancel();
                $this->alert('success','update');

            }else{

                $this->id->name = $this->name;
                $this->id->save();
                $this->cancel();
                $this->alert('success','update!');


            }
        }else{

            $this->validate([
                'name'=>'required',
                'image'=>'required|image',
            ]);

            $p = new Partner();
            // Storage::disk('custom')->delete($this->id->image);
            $file =$this->image->store('partners','custom');
            $img = Image::make(public_path('assets/uploads/' . $file))->fit(400, 400);
            $img->save();
            $p->name = $this->name;
            $p->logo = $img;
            $p->save();
            $this->cancel();
            $this->alert('success','successfull');

        


        }
    }


    public function cancel(){
        $this->reset(['name','modal','image',]);
    }

    public function delete($id)
    {
       $p = Partner::find($id);
       Storage::disk('custom')->delete($p->logo);
       $p->delete();
       $this->alert('success','successfull');
    }






    public function render()
    {
        $this->id = Partner::get();
        return view('livewire.pages.partners.partners-livewire')->with('partners', $this->id);
    }
}
