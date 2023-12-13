<?php

namespace App\Livewire\Pages\Dashboard;

use App\Models\Intake;
use App\Models\Post;
use App\Models\StemCandidate;
use App\Models\StemCohort;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardLivewire extends Component
{


    public $posts, $subscribers =[], $intake=[], $users, $candidates=[], $topviews=[], $confirmed=[], $completed=[],$ccomp=[],$ccon=[],$conreg=[],$months=[];

    public $year;

    public function mount(){
        $this->year = date('Y');
        $this->months = [
            'January', 'February', 'March', 'April',
            'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December',
        ]; 
    }

    public function render()
    {
        // dd('hello');
        $this->users = User::all();
        $this->intake = Intake::get();
        $this->posts = Post::with('category')->get();
        $this->topviews = Post::with('category')->limit(10)->orderBy('view', 'desc')->get();
        
        return view('livewire.pages.dashboard.dashboard-livewire');
    }
}
