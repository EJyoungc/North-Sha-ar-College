<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProgram extends Model
{
    use HasFactory;


    protected $fillable = [
        'intake_candidate_id',
        'educational_program_id'

    ];
    public function education(){
        return $this->belongsTo(EducationalPrograms::class,'educational_program_id');
    }
}
