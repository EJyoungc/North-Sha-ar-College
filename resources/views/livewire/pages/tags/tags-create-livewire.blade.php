<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Tag</h1>
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

                    <div class="card">

                        <div class="card-body">
                         <form wire:submit='store' method="POST" >
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control"  wire:model='name' placeholder="Tag" >
                                <x-error for="name" />
                                
                            </div>

                        <div class="form-group">
                            <button type="submit"  class="btn btn-dark">
                                save  <x-spinner target="store" />
                            </button>
                        </div>

                         </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>
</div>
