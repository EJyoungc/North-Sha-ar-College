<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Posts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Posts</li>
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
                                <a href="{{ route('posts.create') }}" class="btn btn-primary">
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

                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Categories</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($posts as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td class=" text-capitalize ">
                                                    <img width="60" height="60"
                                                        src="{{ asset('assets/uploads/' . $item->image) }}"
                                                        alt="">
                                                      <div class="d-flex inline-flex">
                                                        {{ Str::of($item->name)->limit(50) }}
                                                      </div>
                                                </td>
                                                
                                                <td>
                                                    {{ $item->author_id == Auth::user()->id ? "You" : $item->user->name }}
                                                </td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        {{-- <a href="" class="dropdown-menu">Edit</a> --}}
                                                        <a class="dropdown-item"
                                                            href="{{ route('posts.edit', $item->slug) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            wire:click="remove({{ $item->id }})"
                                                            href="#">Delete</a>
                                                        <a class="dropdown-item" wire:click="mail({{ $item->id }})"
                                                            href="#">mail</a>
                                                    </div>



                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="5" class="text-muted h4 text-center">
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
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body px-0">
                            <h4 class="ps-2">Deleted Posts</h4>
                            <div class=" table-responsive">
                                <table class="table table-hover table-inverse ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Categories</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($deleted_posts as $index =>  $item)
                                            <tr>
                                                <td scope="row">{{ $index }}</td>
                                                <td class=" text-capitalize "> <img width="60" height="60"
                                                        src="{{ asset('assets/uploads/' . $item->image) }}"
                                                        alt="">
                                                        <div class="d-flex inline-flex">
                                                            {{ Str::of($item->name)->limit(50) }}</td>
                                                        </div>
                                                   
                                                    <td>
                                                        {{ $item->author_id == Auth::user()->id ? "You" : $item->user->name }}
                                                    </td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info"
                                                        wire:click.prevent='restore({{ $item->id }})'>Restore
                                                        <x-spinner target="restore({{ $item->id }})" /></a>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="5" class="text-muted h4 text-center">
                                                    EMPTY</td>

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
