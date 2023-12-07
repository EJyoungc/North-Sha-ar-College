<?php

namespace App\Livewire\Pages\Tags;

use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;
class TagsLivewire extends Component
{

    public $tag;
    public $modal = false;
    public $name;

    public function open($id){

        $this->tag = Tag::find($id);
        $this->modal = true;
        $this->name = $this->tag->name;

        
    }


    public function update(){
        $this->validate([
            'name'=>'required|string'
        ]);

        $this->tag->name = $this->name;
        $this->tag->slug = Str::slug($this->name);
        $this->tag->save();
        $this->cancel();

    }

    public function cancel(){
        $this->reset([
            'name','modal'
        ]);
    }




    public function render()
    {
        $tags = Tag::all();
        return view('livewire.pages.tags.tags-livewire')->with('tags',$tags);
    }
}
