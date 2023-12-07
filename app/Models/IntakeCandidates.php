<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeCandidates extends Model
{
    use HasFactory;




    protected $fillable = [
        'intake_id',
        'first_name',
        'middle_name',
        'surname',
        'title',
        'gender',
        'age',
        'nationality',
        'mobile_number',
        'email',
        'physical_address',
        'next_of_kin_address',
        'next_of_kin_mobile',
        'next_of_kin_email',
        'educational_type',
        'transcript_copy_file',
        'subject_1',
        'grade_1',
        'subject_2',
        'grade_2',
        'subject_3',
        'grade_3',
        'subject_4',
        'grade_4',
        'subject_5',
        'grade_5',
        'subject_6',
        'grade_6',
    ];
    public function programs(){
        return $this->hasMany(CandidateProgram::class,'intake_candidate_id');
    }
}
