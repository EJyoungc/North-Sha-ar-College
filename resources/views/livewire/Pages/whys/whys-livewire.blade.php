<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>WHYs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">WHYs</li>
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
                                <a href="#" wire:click='open()' class="btn btn-primary">
                                    add <x-spinner target="open" />
                                </a>
                                <x-modal :status="$modal" title="Add why" slot="" >
                                    <form wire:submit='store'>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" wire:model='title' class="form-control">
                                            <x-error for="title" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea type="text" wire:model='description' class="form-control"></textarea>
                                            <x-error for="description" />
                                        </div>
                                        <button class="btn btn-dark btn-sm">save <x-spinner target="store" /></button>
                                    </form>
                                </x-modal>
                            </div>
                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class=" table-responsive">
                                <table class="table table-hover table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($whies as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->desc }}</td>
                                                
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        <a href="#" wire:click='open({{ $item->id }})' class="dropdown-item">Edit</a>
                                                        <a class="dropdown-item"
                                                            wire:click="delete({{ $item->id }})"
                                                            href="#">Delete</a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="4" class="text-muted text-center h4">
                                                    EMPTY</td>

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


    </section>
</div>

