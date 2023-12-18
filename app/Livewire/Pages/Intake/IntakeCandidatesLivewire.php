<?php

namespace App\Livewire\Pages\Intake;

use App\Models\CandidateProgram;
use App\Models\IntakeCandidates;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class IntakeCandidatesLivewire extends Component
{


    use LivewireAlert;
    use WithPagination;

    public $intake_id;
    public $modal = false;
    public $candidate;
    public $subjects;
    public $programs = [];
    #[Url] 
    public $search = '';


    public function cancel(){
        $this->reset(['modal']);
    }

    public function info($id)
    {
        $this->candidate =  IntakeCandidates::find($id);
        $this->programs = CandidateProgram::where('intake_candidate_id',$this->candidate->id)->get();
        // dd($this->programs);
        $this->modal = true;
    }

    public function mount($id)
    {
        $this->intake_id = $id;
    }

    public function approve_toggle($id = null)
    {
        $ic = IntakeCandidates::where('intake_id', $id)->first();
        
        if ($ic->status == "approved") {
            $ic->status = "disapproved";
            $ic->save();
            $this->alert('success', 'updated');
        } else {
            $ic->status = "approved";
            $ic->save();
            $this->alert('success', 'updated');
        }
    }


    public function approve_toggle_all()
    {

        $ic = IntakeCandidates::where('intake_id', $this->id)->get();

        foreach ($ic as $item) {
            $eic = IntakeCandidates::find($item->id);
            $eic->status = 'approve';
            $eic->save();
        }
    }

    public function disapprove_toggle_all()
    {

        $ic = IntakeCandidates::where('intake_id', $this->id)->get();

        foreach ($ic as $item) {
            $eic = IntakeCandidates::find($item->id);
            $eic->status = 'disapprove';
            $eic->save();
        }
    }



    public function render()
    {
        // dd($this);
        $ic = IntakeCandidates::where('intake_id', $this->intake_id)->where(function ($query){
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('status', 'like', '%' . $this->search . '%')
                 
                  
    
        })
        ->paginate(10);
        $cc =  IntakeCandidates::where('stem_cohort_id', $this->cohort->id)
        ->where('status', 'complete')
        ->where('confirm', true)
        ->where(function ($query){
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('status', 'like', '%' . $this->search . '%')
                  
                  
        })
        ->get()
        ->count();

        $ccc =  IntakeCandidates::where('stem_cohort_id', $this->cohort->id)
        ->where('confirm', true)
        ->where(function ($query){
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('status', 'like', '%' . $this->search . '%')
                  
                  
    
        })
        ->get()
        ->count();
        
        $cu =  IntakeCandidates::where('stem_cohort_id', $this->cohort->id)
        ->where('confirm', false)
        ->where(function ($query){
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('status', 'like', '%' . $this->search . '%')
                  
                  
    
        })
        ->get()
        ->count();
        return view('livewire.pages.intake.intake-candidates-livewire')->with('intake_candidates', $ic)->with('cc', $cc)->with('ccc', $ccc)->with('cu', $cu);
    }
}
