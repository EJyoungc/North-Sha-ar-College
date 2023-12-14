<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end ">
                                <div class="col-lg-3 d-flex">
                                    <div class="form-group">
                                        <input type="text" wire:model="search" class="form-control" placeholder="search">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">add <x-spinner target="create" /> </button>
                                        <x-modal :status="$create_modal" title="add user" >

                                            <form wire:submit>
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" wire:model='name' class="form-control">
                                                    <x-error for="name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" wire:model='email' class="form-control">
                                                    <x-error for="email" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Password</label>
                                                    <input type="text" wire:model='password' class="form-control">
                                                    <x-error for="password" />
                                                </div>

                                                <button type="submit" class="btn btn-primary" >save</button>



                                                    <button type="submit" class="btn btn-dark" >save <x-spinner target="save" /> </button>
                                            </form>


                                        </x-modal>
                                    </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive-lg">
                                <table class="table table-hover table-inverse  ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Public</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $index => $item)
                                            <tr>
                                                <td scope="row" class="text-capitalize">{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->role }}</td>
                                                <td>
                                                    <span
                                                        class="badge text-capitalize h5 {{ $item->status ? "bg-success" : "bg-danger" }}">{{ $item->status ? "active" : "inactive" }}</span>
                                                </td>
                                                <td>
                                                    {{-- <div
                                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" wire:click.prevent='visibility({{ $item->id }})'   class="custom-control-input"  {{ $item->public ? "checked": ""  }}
                                                            id="customSwitch{{ $item->id }}">
                                                        <label class="custom-control-label" for="customSwitch{{ $item->id }}">{{ $item->public ? 'Public' : ' Private ' }}</label>
                                                        
                                                    </div> --}}
                                                    <span class="badge text-capitalize h5 {{ $item->public ? "bg-success" : "bg-danger" }}">{{ $item->public ? "public" : "private" }}</span>
                                                   
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-outline-primary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Options
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"
                                                                wire:click.prevent='change_role({{ $item->id }})'>Change
                                                                Role</a>
                                                            <a class="dropdown-item"
                                                                wire:click.prevent='change_status({{ $item->id }})'
                                                                href="#">{{ $item->status ? "Deactivate" :"Activate" }}
                                                                
                                                            </a>
                                                            <a class="dropdown-item" wire:click.prevent='visibility({{ $item->id }})' href="#">{{ $item->public ? "Private" : "Public" }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="5" class="text-muted text-center">Empty</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
                            {{ $users->links() }}
                            {{-- modal --}}
                            <div class="modal  @if ($role_modal) show @endif"
                                @if ($role_modal) style="display: block" @endif tabindex="-1"
                                role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                            <button wire:click.prevent='cancel' type="button" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form wire:submit.prevent='store_role'>
                                                <div class="form-group">
                                                    <label for="">Role</label>
                                                    <select wire:model.defer='role' class="form-control">
                                                        <option value="" selected>Select</option>
                                                        <option value="admin">Administrator</option>
                                                        <option value="staff">Staff Member</option>
                                                        <option value="normal">Normal</option>
                                                    </select>
                                                    @error('role')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- modal --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
