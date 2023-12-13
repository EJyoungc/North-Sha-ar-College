<?php

namespace App\Livewire\Pages\Intake;

use App\Models\CandidateProgram;
use App\Models\IntakeCandidates;
use Livewire\Component;

class IntakeCandidatesLivewire extends Component
{


    public $intake_id;
    public $modal = false;
    public $candidate;
    public $subjects;


    public function cancel(){
        $this->reset(['modal']);
    }

    public function info($id)
    {
        $this->candidate =  IntakeCandidates::find($id);
        $this->programs = CandidateProgram::where('intake_candidate_id',$this->candidate->id)->get();
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
            $ic->status = "approved";
            $ic->save();
            $this->alert('success', 'updated');
        } else {
            $ic->status = "disapproved";
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
        $ic = IntakeCandidates::where('intake_id', $this->intake_id)->get();
        return view('livewire.pages.intake.intake-candidates-livewire')->with('intake_candidates', $ic);
    }
}
