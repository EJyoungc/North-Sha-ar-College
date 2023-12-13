<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Courses</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">Featured Course</div>
                  <h3>{{ $ep->name }}</h3>
                  <p>{{ $ep->about }}</p>
                  <p><a href="{{ route('root.enroll') }}" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{ asset('assets/uploads/'.$ep->image) }})">
                  {{-- <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
