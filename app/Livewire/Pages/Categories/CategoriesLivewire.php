<?php

namespace App\Livewire\Pages\Categories;

use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CategoriesLivewire extends Component
{


use LivewireAlert;


    public function toggle_featured($id)
    {
        
        $c =  Category::find($id);
        $cc = Category::where('feature', true)->get();
        if ($cc->count() >= 1) {
            foreach ($cc as $item) {
                $ce = Category::find($item->id);
                $ce->feature = false;
                $ce->save();
            }

            if ($c->feature == true) {
                $c->feature = false;
                $c->save();
                $this->alert('success', 'successfully featured');
            } else {
                $c->feature = true;
                $c->save();
                $this->alert('success', 'successfully featured');
            }
        }else{

            if ($c->feature == true) {
                $c->feature = false;
                $c->save();
                $this->alert('success', 'succeffully featured');
            } else {
                $c->feature = true;
                $c->save();
                $this->alert('success', 'succeffully featured');
            }
        }
    }
    public function render()
    {

        $cats = Category::with('posts')->get();
        return view('livewire.pages.categories.categories-livewire')->with('categories', $cats);
    }
}
