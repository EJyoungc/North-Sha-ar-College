<?php

namespace App\Livewire\Public\News;

use Livewire\Component;
use Livewire\Attributes\Layout;


class NewsShowLivewire extends Component
{

    #[Layout('layouts.root')] 
    public function render()
    {
        return view('livewire.public.news.news-show-livewire');
    }
}
