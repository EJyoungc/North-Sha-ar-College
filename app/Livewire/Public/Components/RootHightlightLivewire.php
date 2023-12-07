<?php

namespace App\Livewire\Public\Components;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class RootHightlightLivewire extends Component
{
    public function render()
    {
        $blog = Post::latest()->limit(6)->get();
        // dd($blog);
        $cat = Category::where('feature',true)->first();
        return view('livewire.public.components.root-hightlight-livewire')->with('posts',$blog)->with('category',$cat);
    }
}
