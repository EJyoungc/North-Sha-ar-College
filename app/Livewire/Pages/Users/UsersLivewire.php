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

    public $name;
    public $email;
    public $password;

    public $search;

    protected $queryString = ['search'];

    public function change_role($id)
    {
        $this->user = User::find($id);
        $this->role_modal = true;
    }

    public function create(){
        $this->create_modal = true;
    }

    public function store(){
        $this->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $users = new User();
        $users->name =$this->name;
        $users->email =$this->email;
        $users->password =$this->password;
        $users->store();



    }
    public function cancel()
    {
        $this->reset(['role_modal', 'role']);
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
