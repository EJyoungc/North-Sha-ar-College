<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalPrograms extends Model
{

    
    protected $fillable =['name','about','image','slug'];

    use HasFactory;
}
