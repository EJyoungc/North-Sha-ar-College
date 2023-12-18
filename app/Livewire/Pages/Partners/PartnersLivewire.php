<?php

namespace App\Livewire\Pages\Partners;

use App\Models\Partner;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class PartnersLivewire extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    public $mobile = false;
    public $image;
    public $name;
    public $id;




    public function store()
    {
    }

    public function delete()
    {
    }






    public function render()
    {
        $p = Partner::get();
        return view('livewire.pages.partners.partners-livewire')->with('partners', $p);
    }
}
