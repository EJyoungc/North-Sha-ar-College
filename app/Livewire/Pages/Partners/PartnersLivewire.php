<?php

namespace App\Livewire\Pages\Partners;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Image;

class PartnersLivewire extends Component
{
    use WithPagination;
    use WithFileUploads;
    use LivewireAlert;

    public $modal = false;
    public $partner;

    public $name, $logo, $url, $description;

    public function create()
    {
        $this->modal = true;
    }

    public function edit($data)
    {

        $this->partner = Partner::find($data);
        $this->name =  $this->partner->name;
        // $this->logo =  $this->partner->n;
        $this->url =  $this->partner->url;
        $this->description =  $this->partner->description;
        $this->modal  = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'url' => 'sometimes|url',
            'logo' => 'sometimes|image',
            'description' => 'sometimes'
        ]);

        $file = $this->logo->store('partners', 'custom');
        $img = Image::make(public_path('assets/uploads/' . $file))->fit(400, 400);
        $img->save();

        if ($file != null) {
            $p = new Partner();
            $p->name = $this->name;
            $p->url = $this->url;
            $p->logo = $img;
            $p->save();
            $this->cancel();
            $this->alert('success', 'successfull!');
        } else {
            $p = new Partner();
            $p->name = $this->name;
            $p->url = $this->url;
            $p->save();
            $this->cancel();
            $this->alert('success', 'successfull!');
        }
    }

    public function delete($id)
    {

        $p = Partner::find($id);
        Storage::disk('custom')->delete($p->logo);
        $p->delete();
    }
    public function cancel()
    {
        $this->reset(['name', 'url', 'image', 'description', 'modal']);
    }

    public function render()
    {

        $partners = Partner::paginate();
        return view('livewire.pages.partners.partners-livewire')->with('partners', $partners);
    }
}
