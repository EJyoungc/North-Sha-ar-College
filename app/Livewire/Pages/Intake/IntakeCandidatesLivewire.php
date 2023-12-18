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
    public $id;


    public function cancel()
    {
        $this->reset(['modal']);
    }

    public function info($id)
    {
        $this->candidate =  IntakeCandidates::find($id);
        $this->programs = CandidateProgram::where('intake_candidate_id', $this->candidate->id)->get();
        // dd($this->programs);
        $this->modal = true;
    }

    public function mount($id)
    {
        $this->intake_id = $id;
    }

    public function approve($id)
    {
        // dd($id);
        
        // $ic = IntakeCandidates::where('intake_id', $this->id)->first();
        $i = IntakeCandidates::find($id);
        $i->status = "approved";
        $i->save();
        $this->alert('success', 'updated');
    }


    public function disapprove($id)
    {
        // dd($id);
        
        // $ic = IntakeCandidates::where('intake_id', $this->id)->first();
        $i = IntakeCandidates::find($id);

        $i->status = "disapproved";
        $i->save();
        $this->alert('success', 'updated');
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
        $ic = IntakeCandidates::where('intake_id', $this->intake_id)->where(function ($query) {
            $query->where('first_name', 'like', '%' . $this->search . '%')
                ->orWhere('middle_name', 'like', '%' . $this->search . '%')
                ->orWhere('surname', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%');
        })
            ->paginate(10);

        return view('livewire.pages.intake.intake-candidates-livewire')->with('intake_candidates', $ic);
    }
}
