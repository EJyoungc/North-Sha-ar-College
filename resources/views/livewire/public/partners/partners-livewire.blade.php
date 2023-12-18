<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
                    <h1 class="mb0">Partners</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
        <div class="container">

            <div class="row">
                @foreach ($partners as $item)
                    <div class="col-lg-4 text-center  " title="{{ $item->name }}">
                        <img class="img-responsive img-fluid w-100" src="{{ asset('assets/uploads/' . $item->logo) }}"
                            alt="{{ $item->name }}">
                        {{-- <h4 class="text-center">{{ $item->name }}</h4>
                        <a class="btn btn-success" href="{{ $item->url }}">Visit</a> --}}
                    </div>
                @endforeach
            </div>




        </div>
    </section>
</div>
