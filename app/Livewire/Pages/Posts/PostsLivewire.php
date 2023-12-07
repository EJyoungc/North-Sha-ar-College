<?php

namespace App\Livewire\Pages\Posts;

use App\Mail\MonthlyNewsletter;
use App\Mail\NewsletterMail;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class PostsLivewire extends Component
{

    use LivewireAlert;

    public function mail($id)
    {
        $currentMonth = Carbon::now();

        $posts = Post::whereYear('created_at', $currentMonth->year)
            ->whereMonth('created_at', $currentMonth->month)
            ->get();

        // dd($posts);
        $post = Post::find($id);
        $subscribers = Subscriber::where('status', 'active')->get();
        // dd($subscribers);
        foreach ($subscribers as $item) {
            // Mail::to($item->email)->send(new NewsletterMail($post));
            Mail::to($item->email)->send(new MonthlyNewsletter($posts));
        }
    }

    public function remove($id)
    {
        $p = Post::find($id);
        $p->delete();

        $this->alert('success', 'Deleted!');
    }

    public function restore($id)
    {
        $p = Post::onlyTrashed()->where('id',$id)->restore();

        $this->alert('success', 'Restored!');
    }

    public function render()
    {

        $user = User::find(Auth::user()->id);
        if($user->role == 'admin'){
        $posts = Post::with('category')->with('user')->get();
    
        $d_posts = Post::onlyTrashed()->get();
        }else{
        
            $posts = Post::with('category')->with('user')->where('author_id',Auth::user()->id)->get();
    
            $d_posts = Post::onlyTrashed()->where('author_id',Auth::user()->id)->get();

        }

        return view('livewire.pages.posts.posts-livewire')->with('posts', $posts)->with('deleted_posts',$d_posts);
    }
}
