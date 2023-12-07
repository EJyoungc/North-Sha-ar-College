<?php

namespace App\Livewire\Public\Include;

use App\Models\Category;
use App\Models\Footer;
use App\Models\User;
use Livewire\Component;

class NavBottomLivewire extends Component
{
    public function render()
    {
        $footer =Footer::find(1);
        $top = Footer::find(1);
        $c = Category::where('feature',true)->first();
        $u =  User::where('public',true)->get();
        return view('livewire.public.include.nav-bottom-livewire')->with('footer',$footer)->with('top',$top)->with('cat',$c)->with('users',$u);
    }
}
