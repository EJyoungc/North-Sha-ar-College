<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Image;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class PostsEditLivewire extends Component
{
    
    use WithFileUploads;
    use LivewireAlert;
    public $blog_post;
    public $name, $category, $post, $image;
    public $selecttags;
    public $tags;
    public $tag;
    public $trixi;
    public $categories;
    public $slug;


    public function mount($slug)
    {

        $this->slug = $slug;
        $this->categories = Category::all();
        $post = Post::where('slug', $slug)->first();
        $this->blog_post = Post::find($post->id);
        $this->name = $this->blog_post->name;
        $this->post = $this->blog_post->post;
        // $this->post = "<div>hello</div>";
        $this->category = $this->blog_post->category_id;

        $d = array();
        foreach ($this->blog_post->tags as $item) {

            array_push($d, $item->id);
        }

        $this->tag = $d;
        $this->tags = Tag::all();
    }


    public function javascript()
    {
       
    }


    public function updatedPost($data)
    {
        // dd($data);
    }




    public function update()
    {

        $this->validate([
            'name' => 'required|string',
            'post' => 'required',
            'category' => 'required',
        ]);
        
        if ($this->image == null) {
            
        } else {
            $status = Storage::disk('custom')->exists($this->blog_post->image);
            
            Storage::disk('custom')->delete($this->blog_post->image);
            $file =  $this->image->store('blog/image','custom');
            // Image::make(public_path() . '/assets/uploads/' . $file)->resize(800, 460, function ($constraint) {
            //     // $constraint->aspectRatio();
            //     $constraint->upsize();
            // })->save(public_path() . '/assets/uploads/' . $file);
            $this->blog_post->image = $file;
        }



        $this->blog_post->name = $this->name;
        $this->blog_post->post = $this->post;
        $this->blog_post->category_id = $this->category;
        $this->blog_post->slug = Str::slug($this->name);
        $this->blog_post->save();
        $this->blog_post->tags()->sync($this->tag);
        
        $this->alert('success','Updated');
        

        // $this->redirect(route('posts'));
    }
    public function render()
    {
        $post = Post::where('slug', $this->slug)->first();
        $this->blog_post = Post::find($post->id);
        $this->name = $this->blog_post->name;
        $this->post = $this->blog_post->post;
        // $this->post = "<div>hello</div>";
        $this->category = $this->blog_post->category_id;

        $d = array();
        foreach ($this->blog_post->tags as $item) {

            array_push($d, $item->id);
        }

        $this->tag = $d;
        $this->tags = Tag::all();

        return view('livewire.pages.posts.posts-edit-livewire');
    }
}



