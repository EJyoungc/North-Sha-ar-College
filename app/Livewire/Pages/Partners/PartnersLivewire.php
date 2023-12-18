<?php

namespace App\Livewire\Pages\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PartnersLivewire extends Component
{
    use WithPagination;
    use WithFileUploads;
    
    public $modal =false;
    public $partner;

    public $name, $logo, $url, $description;

    public function create(){
        $this->modal = true;

    }

    public function edit($data){
        
        $this->partner = Partner::find($data);
        $this->name =  $this->partner->name;
        // $this->logo =  $this->partner->n;
        $this->url =  $this->partner->url;
        $this->description =  $this->partner->description;
        $this->modal  = true;
    }

    public function store(){
        $this->validate([
            'name'=>'required|string',
            'url'=>'sometimes|url',
            'logo'=>'sometimes|image',
            'description'=>'sometimes'
        ]);

        $file = $this->logo->store('partners');
        
        if($file != null){
        $p = new Partner();
        $p->name = $this->name;
        $p->url =$this->url;
        $p->logo = $file;
        $p->save();
        $this->cancel();
        $this->alert('success','successfull!');

        }else{
            $p = new Partner();
        $p->name = $this->name;
        $p->url =$this->url;
        $p->save();
        $this->cancel();
        $this->alert('success','successfull!');
        }

        
    }

    public function cancel(){
        $this->reset(['name','url','logo','description','modal']);
    }
    
    public function render()
    {

        $partners = Partner::paginate();
        return view('livewire.pages.partners.partners-livewire')->with('partners',$partners);
    }
}
