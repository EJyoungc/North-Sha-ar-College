<?php

namespace App\Livewire\Public\Enroll;

use App\Models\CandidateProgram;
use App\Models\EducationalPrograms;
use App\Models\Intake;
use App\Models\IntakeCandidates;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EnrollLivewire extends Component
{

    use WithFileUploads;
    #[Layout('layouts.root')] 
    public $first_name;
    public $middle_name;
    public $title;
    public $surname;
    public $nationality;
    public $mobile_number;
    public $email;
    public $age;
    public $gender;
    public $physical_address;
    public $next_of_kin_address;
    public $next_of_kin_mobile;
    public $next_of_kin_email;
    public $educational_type;
    public $transcript_copy_file;
    public $program_list = [];
    public $subject_1;
    public $grade_1;
    public $subject_2;
    public $grade_2;
    public $subject_3;
    public $grade_3;
    public $subject_4;
    public $grade_4;
    public $subject_5;
    public $grade_5;
    public $subject_6;
    public $grade_6;
    
    
    use LivewireAlert;
    


    public function store(){
        $this->validate([
            'first_name'=> 'required|string',
            'middle_name'=>'required|string',
            'surname'=> 'required|string',
            'title'=> 'required|string',
            'age'=>'required|numeric',
            'nationality'=>'required|string',
            'mobile_number'=> 'required|numeric',
            'email'=> 'required|email',
            'gender'=>'required|string',
            'physical_address'=> 'required|string',
            'next_of_kin_address'=> 'required|string',
            'next_of_kin_mobile'=> 'required|numeric',
            'next_of_kin_email'=> 'required|email',
            'educational_type'=> 'required|string',
            'transcript_copy_file'=> 'required|image',
            'subject_1'=> 'required|string',
            'grade_1'=> 'required|numeric',
            'subject_2'=>'required|string',
            'grade_2'=> 'required|numeric',
            'subject_3'=> 'required|string',
            'grade_3'=> 'required|numeric',
            'subject_4'=> 'required|string',
            'grade_4'=>'required|numeric',
            'subject_5'=>'required|string',
            'grade_5'=> 'required||numeric',
            'subject_6'=> 'required|string',
            'grade_6'=> 'required|numeric',
            'program_list'=>'required|array|min:1'   
        ]);

        // dd($this);
        // $length = count($this->program_list);
        // dd($this,$length, $this->getErrorBag());
        // if($length < 1){
        //     $this->addError('program_list','Please selected any of the programs');
        // }
        
        $file = $this->transcript_copy_file->store('transcript','custom');


        $intake = Intake::where('status','open')->first();
            
        $ic = IntakeCandidates::create([
            'intake_id'=>$intake->id,
            'first_name'=> $this->first_name,
            'middle_name'=> $this->middle_name,
            'surname'=> $this->surname,
            'title'=> $this->title,
            'nationality'=> $this->nationality,
            'mobile_number'=> $this->mobile_number,
            'email'=> $this->email,
            'gender'=> $this->gender,
            'age'=>$this->age,
            'physical_address'=> $this->physical_address,
            'next_of_kin_address'=> $this->next_of_kin_address,
            'next_of_kin_mobile'=> $this->next_of_kin_mobile,
            'next_of_kin_email'=> $this->next_of_kin_email,
            'educational_type'=> $this->educational_type,
            'transcript_copy_file'=> $file,
            'subject_1'=> $this->subject_1,
            'grade_1'=> $this->grade_1,
            'subject_2'=> $this->subject_2,
            'grade_2'=> $this->grade_2,
            'subject_3'=> $this->subject_3,
            'grade_3'=> $this->grade_3,
            'subject_4'=> $this->subject_4,
            'grade_4'=> $this->grade_4,
            'subject_5'=> $this->subject_5,
            'grade_5'=> $this->grade_5,
            'subject_6'=> $this->subject_6,
            'grade_6'=> $this->grade_6,
        ]);
        

        foreach($this->program_list as $item){
            CandidateProgram::create([
                'intake_candidate_id'=>$ic->id,
                'educational_program_id'=>$item
            ]);
        }

        $this->cancel();

        $this->alert('success','successful');
    }

    public function cancel(){
        $this->reset([
            'first_name',
            'middle_name',
            'surname',
            'title',
            'age',
            'nationality',
            'mobile_number',
            'email',
            'gender',
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
            'program_list' 
        ]);
    }

    public function render()
    {   
        $programs = EducationalPrograms::all();
        $intake = Intake::where('status','open')->get();
        return view('livewire.public.enroll.enroll-livewire')->with('programs',$programs)->with('intake',$intake);
    }
}
