<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','slug'];

    public function posts(){
        return $this->hasMany(Post::class,'category_id');
    }



    public function tags(){
        return $this->belongsTo(Tag::class);
    }
    
}
