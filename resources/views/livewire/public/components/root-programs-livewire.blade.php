<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Our Featured Courses</h2>
                    <p class="lead">Discover, Learn, Succeed: Explore Our Educational Spectrum</p>
                </div>
            </div>
            <!-- END row -->

         
            <div class="row">
                @foreach ($programs as $item)
                    <div class="col-md-6">
                        <div class="probootstrap-service-2 probootstrap-animate">
                            <div class="image">
                                <div class="image-bg">
                                    <img src="{{ asset('assets/uploads/' . $item->image) }}"
                                        alt="Free Bootstrap Template by ProBootstrap.com">
                                </div>
                            </div>
                            <div class="text">
                                {{-- <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span> --}}
                                <h3>{{ $item->name }}</h3>
                                <p>{{ str::of($item->about)->limit(50) }}</p>
                                <p><a href="{{ route('root.enroll') }}" class="btn btn-primary">Enroll now</a> </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
</div>
