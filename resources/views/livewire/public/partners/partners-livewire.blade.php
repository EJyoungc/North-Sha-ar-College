<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
              <h1 class="mb0">School Gallery</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        
        <div class="row">
            @foreach ($partners as $item)
                <div class="col-lg-4">
                    <img src="{{ asset('assets/uploads/'.$item->logo) }}" alt="{{ $item->name }}">
                </div>
            @endforeach
        </div>



       
      </div>
    </section>
</div>
