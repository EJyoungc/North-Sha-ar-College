<?php

namespace App\Livewire\Pages\Whys;

use App\Models\Why;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class WhysLivewire extends Component
{

    use LivewireAlert;

    public $modal = false;
    public $title;
    public $description;
    public $id;


    public function open($id = null)
    {
        if (!empty($id)) {
            $this->id = $id;
            $a = Why::find($id);
            $this->title = $a->name;
            $this->description = $a->desc;
            $this->modal = true;
        } else {
            $this->modal = true;
        }
    }

    public function store()
    {

        if (!empty($this->id)) {
            $this->validate([
                'title' => 'required|string',
                'description' => 'required|string'
            ]);
            $why = Why::find($this->id);
            $why->name = $this->title;
            $why->desc = $this->description;
            $why->save();
            $this->cancel();
            $this->alert('success', 'successful');
        } else {
            $this->validate([
                'title' => 'required|string',
                'description' => 'required|string'
            ]);
            $why = new  Why();
            $why->name = $this->title;
            $why->desc = $this->description;
            $why->save();
            $this->cancel();
            $this->alert('success', 'successful');
        }
    }

    public function delete($id){

        $w = Why::find($id);
        $w->delete();
        $this->alert('success','successful');

    }

    public function cancel()
    {

        $this->reset(['title', 'description', 'modal','id']);
    }

    public function render()
    {
        $why = Why::latest()->get();
        return view('livewire.pages.whys.whys-livewire')->with('whies', $why);
    }
}
