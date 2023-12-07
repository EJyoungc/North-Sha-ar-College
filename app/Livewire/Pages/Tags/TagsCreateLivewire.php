<?php

namespace App\Livewire\Pages\Tags;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class TagsCreateLivewire extends Component
{

    public $name;
    

    

    public function store(){
        // dd('error');
        $this->validate([
            'name'=>'required|string'
        ]);

        // dd($this);
        Tag::create([
            'name'=>$this->name,
            'slug'=>Str::slug($this->name),
        ]);

        $this->redirect(route('tags'));
    }

    public function render()
    {
        
        return view('livewire.pages.tags.tags-create-livewire');
    }
}
