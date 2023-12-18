<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Partners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Partners</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Default box -->
                    <div class="d-flex justify-content-end  ">
                        <div class="d-flex ">
                            <div class="form-group">
                                <input type="text" placeholder="search .." class="form-control" >
                            </div>
                            <div class="form-group">
                                <a href="#" wire:click.prevent="create" class="btn btn-primary">
                                    add
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                       
                        <div class="card-body">
                            <div class=" table-responsive" >
                                <table class="table table-hover table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Categories</th>
                                            <th></th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($partners as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td> <img width="60" height="60" src="{{ asset('assets/uploads/'.$item->logo) }}" alt="">  </td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <button type="button"
                                                            class="btn btn-info btn-sm dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            
                                                            {{-- <a href="" class="dropdown-menu">Edit</a> --}}
                                                            <a class="dropdown-item" 
                                                                href="#" wire:click='create({{ $item->id }})'>Edit</a>
                                                            <a class="dropdown-item"
                                                                wire:click="delete({{ $item->id }})"
                                                                href="#">Delete</a>
                                                                
                                                        </div>



                                                </td>
                                            </tr> 
                                            @empty
                                            <tr>
                                                <td scope="row" colspan="5"  class="text-muted h4 text-center" >EMPTY</td>
                                                
                                            </tr>    
                                            @endforelse
                                            
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <x-modal :status="$modal"  title=" Add Partner" >
            <form wire:submit.prevent='store' >
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control"  wire:model='name' placeholder="partner name" >
                    <x-error for="name" />
                    
                </div>
                
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" class="form-control"  wire:model='image' placeholder="" >
                    <x-error for="image" />
                    
                </div>
                

            <div class="form-group">
                <button type="submit"  class="btn btn-dark">
                    save  <x-spinner target="store" />
                </button>
            </div>

             </form>
            
        </x-modal>

    </section>
</div>

