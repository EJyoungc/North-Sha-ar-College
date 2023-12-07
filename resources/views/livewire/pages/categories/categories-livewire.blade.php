<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Categories</li>
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
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">
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
                                            <th>Name</th>
                                            <th>Posts</th>
                                            <td>Featured</td>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->posts->count() }}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $item->feature == 0 ? 'secondary' : 'success' }}">{{ $item->feature == 0 ? 'Not Featured' : 'Featured' }}</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        {{-- <a href="" class="dropdown-menu">Edit</a> --}}
                                                        <a class="dropdown-item"
                                                            wire:click="toggle_featured({{ $item->id }})"
                                                            href="#">{{ $item->feature == 0 ? 'Make Featured' : 'Unmake Featured' }}</a>

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
