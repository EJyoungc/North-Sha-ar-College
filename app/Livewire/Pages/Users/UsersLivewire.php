<?php

namespace App\Livewire\Pages\Users;

use App\Models\User;
use Illuminate\Broadcasting\Broadcasters\UsePusherChannelConventions;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class UsersLivewire extends Component
{
    use WithPagination;
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    // public $users = [];
    public $role_modal = false;
    public $create_modal = false;
    public $user;
    public $role;
    public $uid;
    public $name;
    public $email;
    public $password  = "AA123!";

    public $search;

    protected $queryString = ['search'];

    public function change_role($id)
    {
        $this->user = User::find($id);
        $this->role_modal = true;
    }

    public function create($id=null){

        if(!empty($id)){
        $this->uid = User::find($id);
        $this->name = $this->uid->name;
        $this->email = $this->uid->email;
       
        $this->create_modal = true;

        }else{

        $this->create_modal = true;

        }
    }


    public function pass_reset($id = null){

        if(!empty($id)){

            $u = User::find($id);
            $u->password = "AA123!";
            $u->save();

            $this->alert('success','resetted');
            $this->cancel();

        }

    }

    public function store(){

        if(!empty($this->uid->id)){
            $this->validate([
                'name'=>'required|string',
                'email'=>'required|email',
                
            ]);
    
            
            $this->uid->name =$this->name;
            $this->uid->email =$this->email;
            $this->uid->save();
            
            $this->alert('success','success');
            $this->cancel();

        }else{

            $this->validate([
                'name'=>'required|string',
                'email'=>'required|email',
                'password'=>'required',
            ]);
    
            $users = new User();
            $users->name =$this->name;
            $users->email =$this->email;
            $users->password =$this->password;
            $users->save();
            
            $this->alert('success','success');
            $this->cancel();



        }


        



    }
    public function cancel()
    {
        $this->reset(['role_modal', 'role','password','name','email']);
    }
    public function store_role()
    {
        $this->validate([
            'role' => 'required'
        ]);
        $this->user->role = $this->role;
        $this->user->save();
        $this->cancel();
        $this->alert('success', 'Updated');
    }
    

    public function visibility($id)
    {
        
        $u = User::find($id);
        if ($u->public == "1") {
            $u->public = false;
            $u->save();
            $this->alert('success', $u->name.' is Private');
        }else{
            $u->public = true;
            $u->save();
            $this->alert('success',$u->name. ' is Public');
        }
    }


    public function change_status($id)
    {
        $user = User::find($id);
        if ($user->status == 1) {
            $user->status = false;
            $user->save();
            $this->alert('success', 'Successfully deactivated.');
        } else {
            $user->status = true;
            $user->save();
            $this->alert('success', 'Successfuly activated');
        }
    }
    public function render()
    {

        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(3);
        return view('livewire.pages.users.users-livewire')->with('users', $users);
    }
}
