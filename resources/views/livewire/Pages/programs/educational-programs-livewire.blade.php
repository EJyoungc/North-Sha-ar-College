<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Programs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Programs</li>
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
                                <input type="text" placeholder="search .." class="form-control">
                            </div>
                            <div class="form-group">
                                <a href="#" wire:click.prevent="open_modal()" class="btn btn-primary">
                                    add

                                </a>
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
                                            <th>image</th>
                                            <th>Name</th>
                                            <th>about</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($programs as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td><img src="{{ asset('assets/uploads/'.$item->image)  }}" height="60" width="60" alt=""></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->about }}</td>
                                                
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        {{-- <a href="" class="dropdown-menu">Edit</a> --}}
                                                        <a class="dropdown-item"
                                                            wire:click="open_modal({{ $item->id }})"
                                                            href="#">Edit</a>
                                                        <a class="dropdown-item"
                                                                wire:click="delete({{ $item->id }})"
                                                                href="#">Delete</a>
                                                    </div>



                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="3" class="text-muted h4 text-center">
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
        <x-modal :status="$modal" title="Add Educational Program">
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" wire:model='name' placeholder="name">
                    <x-error for="name" />

                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <div>
                        <input type="file" wire:model='image' hidden id="file">
                        <button class="btn btn-dark btn-sm" type="button"
                            onclick="document.getElementById('file').click();">upload <x-spinner
                                target="image" /></button>
                        <x-error for="image" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="">About</label>
                    <textarea type="text" class="form-control" wire:model='about' placeholder="about"></textarea>
                    <x-error for="about" />

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">
                        save <x-spinner target="store" />
                    </button>
                </div>

            </form>

        </x-modal>




    </section>

</div>
