<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Intakes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Intakes</li>
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
                        <button class="btn btn-primary" wire:click="open_modal" >add <x-spinner target="open_modal" /> </button>
                        <x-modal :status="$modal" title="Add Intake" >
                            <form wire:submit="store">
                                <div class="form-group">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" wire:model='start_date' >
                                    <x-error for="start_date" />
                                </div>
                                <div class="form-group">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" wire:model='end_date' >
                                    <x-error for="end_date" />
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
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Candidates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($intakes as $index=> $item)
                                            <tr>
                                                <td>{{ $index }}</td>
                                                <td scope="row">{{ $item->start_date }}</td>
                                                <td>{{ $item->end_date }}</td>
                                                <td> <div class="badge {{ $item->status == 'closed' ? 'bg-danger' : 'bg-success' }}">{{ $item->status}}</div></td>
                                                <td><span class="badge bg-primary">{{ $item->candidates->count() }}</span></td>
                                                <td>
                                                    <button type="button"
                                                    class="btn btn-info btn-sm dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    
                                                    <a href="{{ route('intake.candidates.show',$item->id) }}" class="dropdown-item ">View Candidates</a>
                                                    <a class="dropdown-item" wire:click='open_modal({{ $item->id }})' 
                                                        href="#">Edit</a>

                                                    
                                                        <a class="dropdown-item"
                                                        wire:click="toggle_status({{ $item->id }})"
                                                        href="#">{{ $item->status == 'closed' ? 'Open intake' : 'Close Intake' }}</a>
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
