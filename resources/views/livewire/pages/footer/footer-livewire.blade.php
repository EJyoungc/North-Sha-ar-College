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

                    <div class="card">
                        <div class="card-body ">

                            <div class="form-group">
                                <label for="">About</label>
                                <textarea class="form-control" wire:model.blur='about'></textarea>
                                <x-error for="about" />
                            </div>
                            <div class="form-group">
                                <label for="">X</label>
                                <input type="text" class="form-control" wire:model.blur='x_link'>
                                <x-error for="x_link" />
                            </div>
                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" wire:model.blur='facebook_link'>
                                <x-error for="facebook_link" />
                            </div>
                            <div class="form-group">
                                <label for="">Linkedin</label>
                                <input type="text" class="form-control" wire:model.blur='linkedin_link'>
                                <x-error for="linkedin_link" />
                            </div>
                            {{-- <div class="form-group">
                                <label for="">Video link</label>
                                <input type="text" class="form-control" wire:model.blur='video_link'>
                                <x-error for="video_link" />
                            </div> --}}
                            <div class="form-group">
                                <label for="">Contact address </label>
                                <input type="text" class="form-control" wire:model.blur='contact_address'>
                                <x-error for="contact_address" />
                            </div>
                            <div class="form-group">
                                <label for="">Contact Mobile</label>
                                <input type="text" class="form-control" wire:model.blur='contact_mobile'>
                                <x-error for="contact_mobile" />
                            </div>
                            <div class="form-group">
                                <label for="">Contact Email</label>
                                <input type="text" class="form-control" wire:model.blur='contact_email'>
                                <x-error for="contact_email" />
                            </div>
                            <button class="btn btn-dark" wire:click.prevent='update'>save <x-spinner target="update" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
