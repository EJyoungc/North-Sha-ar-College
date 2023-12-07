<?php

namespace App\Livewire\Pages\Intake;

use App\Models\Intake;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class IntakeLivewire extends Component
{

    use LivewireAlert;
    public $modal = false;
    public $start_date;
    public $end_date;
    public $i;
    

    
    

    public function open_modal($id = null)
    {
        if (!empty($id)) {
            $this->i = Intake::find($id);
            $this->start_date = $this->i->start_date;
            $this->end_date = $this->i->end_date;
            $this->modal = true;
        } else {

            $this->modal = true;
        }
    }


    public function store()
    {

        $this->validate([
            'start_date'=>'required|date',
            'end_date'=>'required|date'
        ]);
        if (!empty($this->i)) {
            
            $this->i->start_date = $this->start_date;
            $this->i->end_date = $this->end_date;
            $this->i->save();
            $this->cancel();
            $this->alert('success','updated!');
        }else{

            Intake::create([
                'start_date'=>$this->start_date,
                'end_date'=>$this->end_date,
            ]);
            // dd($this);
            $this->cancel();
            $this->alert('success','added!');

        }
    }

    public function toggle_status($id){
        $i = Intake::find($id);
        $i_s = Intake::where('status','open')->get();
        

        if($i_s->count() >= 0){
            
            foreach($i_s as $item){

                $ii = Intake::find($item->id);
                $ii->status = 'closed';
                $ii->save();

            }

            if($i->status == 'closed'){
            
                $i->status = "open";
                $i->save();
                $this->alert('success','status updated');
            }else{
                $i->status = "closed";
                $i->save();
                $this->alert('success','status updated');
            }
            
        }
    
        
        
    }


    public function cancel(){
        $this->reset(['modal','i','start_date','end_date']);
    }



    public function render()
    {
        $i = Intake::paginate(10);
        
        return view('livewire.pages.intake.intake-livewire')->with('intakes',$i);
    }
}
