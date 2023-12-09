<?php

namespace App\Livewire\Public\News;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class NewsCategoryLivewire extends Component
{
    use WithPagination;
    #[Layout('layouts.root')]
    
    public $slug;
    public $c;
    public function mount($slug)
    {

        $this->slug = $slug;
        $this->c = Category::where('slug', $this->slug)->first();
    }

    public function render()
    {

        $p = Post::where('category_id',$this->c->id)->paginate(6);
        return view('livewire.public.news.news-category-livewire')->with('posts',$p);
    }
}
