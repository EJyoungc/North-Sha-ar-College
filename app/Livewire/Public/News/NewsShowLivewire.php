<?php

namespace App\Livewire\Public\News;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;


class NewsShowLivewire extends Component
{

    #[Layout('layouts.root')]

    public $p;

    public function mount($slug){


        $this->p = Post::where('slug',$slug)->first();

        $p = Post::find($this->p->id);
        $count = $p->view;
        $count++;
        $p->view = $count ;
        $p->save();

    }


    



    public function render()
    {

        $c = Category::get();

        return view('livewire.public.news.news-show-livewire')->with('categories',$c);
    }
}
