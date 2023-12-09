<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="text-capitalize" >{{ $p->name }}</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>Categories</h3>
                    <ul class="probootstrap-side-menu">


                      @foreach ($categories as $item)
                      <li><a href="{{ route('root.news.category',$item->slug) }}">{{ $item->name }}</a></li>
                      @endforeach
                      {{-- <li class="active"><a>Chemical Engineering</a></li> --}}
                      
                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <img src="{{ asset('assets/uploads/'.$p->image) }}" alt="">
                  <h1 class="text-capitalize" >{{ $p->name }}</h1>

                  <p>{!! $p->post !!}</p>
                  
                  <p>
                    {{-- <a href="#" class="btn btn-primary">Enroll with this course now</a> <span class="enrolled-count">2,928 students enrolled</span> --}}


                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="{{ route('root.enroll') }}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
 
</div>
