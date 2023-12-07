<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Image;
class PostsCreateLivewire extends Component
{
 
    use WithFileUploads;


    public $name,$category,$post,$image;
    public $tag;
    public $categories;
    public $tags = [];


   



    public function store(){
        
        $this->validate([
            'name'=>'required|string',
            'post'=>'required',
           
            'category'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg|max:8000'
        ]);

        $file =  $this->image->store('blog/image','custom');

        
        
        // Image::make(public_path().'/assets/uploads/'.$file)->resize(800,460,function ($constraint) {
		//     // $constraint->aspectRatio();
        //     $constraint->upsize();
        // })->save(public_path().'/assets/uploads/'.$file);

        
        $p =Post::create([
            'name'=>$this->name,
            'post'=>$this->post,
            'category_id'=>$this->category,
            'author_id'=> Auth::user()->id,
            'slug'=>Str::slug($this->name),
            'image'=>$file,
        ]);

        $p->tags()->attach($this->tag);

        $this->redirect(route('posts'));
    }


    public function updatedTag(){
        // dump($this->tag);
    }



    public function render()
    {
        $this->tags = Tag::all();
        $this->categories = Category::all();
        return view('livewire.pages.posts.posts-create-livewire');
    }
}
