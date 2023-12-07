<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use HasSEO;
    protected $fillable = [
        'name',
        'post',
        'category_id',
        'author_id',
        'slug',
        'image'
    ];



    public function getDate(){
       $date = Carbon::parse($this->created_at);
        return $date->format('d') ." ".$date->format('M')." ".$date->format('Y');
    }
    

    public function user(){
        return $this->belongsTo(User::class,'author_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }


    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
