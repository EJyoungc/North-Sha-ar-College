<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    use HasFactory;

    protected $fillable = ['start_date','end_date'];


    public function candidates(){
        return $this->hasMany(IntakeCandidates::class);
    }
}
