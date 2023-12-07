<?php

namespace App\Livewire\Public\News;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class NewsLivewire extends Component
{
    use WithPagination;
    #[Layout('layouts.root')] 
    public function render()
    {
        $posts = Post::latest()->paginate(6);
        return view('livewire.public.news.news-livewire')->with('posts',$posts);
    }
}
