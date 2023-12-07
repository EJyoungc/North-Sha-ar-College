<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">About</li>
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
                            <form wire:submit='store'>
                                <div class="form-group">
                                    <label for="">About</label>
                                    <textarea wire:model='about' class="form-control"></textarea>
                                    <x-error for="about" />
                                </div>
                                <button class="btn btn-dark btn-sm ">save <x-spinner target="store" /></button>
                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>
</div>
