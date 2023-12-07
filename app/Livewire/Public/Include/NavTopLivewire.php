<?php

namespace App\Livewire\Public\Include;

use App\Models\Category;
use App\Models\Footer;
use App\Models\User;
use Livewire\Component;

class NavTopLivewire extends Component
{
    public function render()
    {
        $top = Footer::find(1);
        $c = Category::where('feature',true)->first();
        $u =  User::where('public',true)->get();
        return view('livewire.public.include.nav-top-livewire')->with('top',$top)->with('cat',$c)->with('users',$u);
    }
}
