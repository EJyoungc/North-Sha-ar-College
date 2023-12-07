<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hero</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Hero</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-end ">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="search...">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" wire:click="open_modal">add <x-spinner
                                    target="open_modal" /> </button>
                            <x-modal :status="$modal" title="Add Hero">
                                <form wire:submit="store">
                                    <div class="form-group">
                                        <label for="">Text</label>
                                        <input type="text" class="form-control" wire:model='text'>
                                        <x-error for="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">File</label>
                                        <input type="file" class="form-control" wire:model='image'>
                                        <x-error for="image" />
                                    </div>
                                    <button class="btn btn-dark">save <x-spinner target="store" /></button>
                                </form>
                            </x-modal>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Text</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($hero as $index=> $item)
                                            <tr>
                                                <td>{{ $index }}</td>
                                                <td scope="row"><img
                                                        src="{{ asset('assets/uploads/' . $item->image) }}" width="60"
                                                        height="60" alt=""></td>
                                                <td>{{ $item->name }}</td>

                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        <a href="{{ route('intake.candidates.show', $item->id) }}"
                                                            class="dropdown-item ">View Candidates</a>
                                                        <a class="dropdown-item"
                                                            wire:click='open_modal({{ $item->id }})'
                                                            href="#">Edit</a>

                                                        <a class="dropdown-item"
                                                            wire:click='delete({{ $item->id }})'
                                                            href="#">Delete</a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td colspan="4" class=" text-muted text-center">
                                                    EMPTY
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
