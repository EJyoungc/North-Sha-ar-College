<?php

namespace App\Livewire\Public\News;

use Livewire\Component;
use Livewire\Attributes\Layout;


class NewsCategoryLivewire extends Component
{

    #[Layout('layouts.root')] 
    public function render()
    {
        return view('livewire.public.news.news-category-livewire');
    }
}
