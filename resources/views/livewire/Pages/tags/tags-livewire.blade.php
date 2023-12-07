<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tags</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tags</li>
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
                                <a href="{{ route('tags.create') }}" class="btn btn-primary">
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
                                            <th>Name</th>
                                            <th></th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tags as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
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
                                                                wire:click="open({{ $item->id }})"
                                                                href="#">Edit</a>
                                                            {{-- <a class="dropdown-item"
                                                                wire:click="deactivate({{ $item->id }})"
                                                                href="#">Deactivate</a> --}}
                                                        </div>



                                                </td>
                                            </tr> 
                                            @empty
                                            <tr>
                                                <td scope="row" colspan="3"  class="text-muted h4 text-center" >EMPTY</td>
                                                
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
        {{-- <x-modal :status="$modal"  title="Edit Tag" >
            <form wire:submit.prevent='update' >
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control"  wire:model='name' placeholder="Category" >
                    <x-error for="name" />
                    
                </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-dark">
                    save  <x-spinner target="store" />
                </button>
            </div>

             </form>
            
        </x-modal> --}}

    </section>
</div>
