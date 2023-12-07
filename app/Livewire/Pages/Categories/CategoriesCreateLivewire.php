<?php

namespace App\Livewire\Pages\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class CategoriesCreateLivewire extends Component
{

    public $name;

    public function store(){
        
        $this->validate([
            'name'=>'required|string'
        ]);
        Category::create([
            'name'=>$this->name,
            'slug'=>Str::slug($this->name),
        ]);

        $this->redirect(route('categories'));
    }


    public function render()
    {
        return view('livewire.pages.categories.categories-create-livewire');
    }
}
