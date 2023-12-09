<?php

namespace App\Livewire\Pages\Footer;

use App\Models\Footer;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class FooterLivewire extends Component
{
    use LivewireAlert;
    public $about;
    public $x_link;
    public $facebook_link;
    public $linkedin_link;
    public $youtube_link;
    public $contact_address;
    public $contact_email;
    public $contact_mobile;
    public $video_link;



    public function mount()
    {
        $f = Footer::find(1);
        $this->about = $f->about;
        $this->x_link = $f->x_link;
        $this->facebook_link = $f->facebook_link;
        $this->linkedin_link = $f->linkedin_link;
        $this->youtube_link = $f->youtube_link;
        $this->contact_address = $f->contact_address;
        $this->contact_mobile = $f->contact_mobile;
    }
    public function updatedAbout()
    {
        $this->validate([
            'about' => 'sometimes|string|min:10',

        ]);
    }
    public function updatedXLink()
    {
        $this->validate([

            'x_link' => 'sometimes|active_url',

        ]);
    }
    public function updatedFacebookLink()
    {
        $this->validate([

            'facebook_link' => 'sometimes|active_url',

        ]);
    }
    public function updatedLinkedinLink()
    {
        $this->validate([

            'linkedin_link' => 'sometimes|active_url',

        ]);
    }

    public function updatedVideoLink(){

        $this->validate(['video_link'=>'active_url']);
    }

    public function updatedYoutubeLink()
    {
        $this->validate([

            'youtube_link' => 'sometimes|active_url',

        ]);
    }
    public function updatedContactAddress()
    {
        $this->validate([

            'contact_address' => 'sometimes|string',

        ]);
    }
    public function updatedContactEmail()
    {
        $this->validate([

            'contact_email' => 'sometimes|email',

        ]);
    }
    public function updatedContactMobile()
    {
        $this->validate([

            'contact_mobile' => 'sometimes|numeric',
        ]);
    }


    public function update()
    {



        $f = Footer::find(1);
        $f->about = $this->about;
        $f->x_link = $this->x_link;
        $f->facebook_link = $this->facebook_link;
        $f->video_link = $this->video_link;
        $f->linkedin_link = $this->linkedin_link;
        $f->youtube_link = $this->youtube_link;
        $f->contact_address = $this->contact_address;
        $f->contact_mobile = $this->contact_mobile;
        $f->contact_email = $this->contact_email;
        $f->save();

        $f = Footer::find(1);
        $this->about = $f->about;
        $this->x_link = $f->x_link;
        $this->facebook_link = $f->facebook_link;
        $this->video_link = $f->video_link;
        $this->linkedin_link = $f->linkedin_link;
        $this->youtube_link = $f->youtube_link;
        $this->contact_address = $f->contact_address;
        $this->contact_mobile = $f->contact_mobile;
        $this->contact_email = $f->contact_email;

        $this->alert('success', 'updated');
    }

    public function render()
    {


        return view('livewire.pages.footer.footer-livewire');
    }
}
