<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial"
        style="background-image: url(img/slider_4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Alumni Testimonial</h2>
                    {{-- <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum
                        porro nesciunt</p> --}}
                </div>
            </div>
            <!-- END row -->
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">

                        @foreach ($testimonials as $item)
                            <div class="item">

                                <div class="probootstrap-testimony-wrap text-center">
                                    <figure>
                                        {{-- <img src="img/person_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com"> --}}
                                    </figure>
                                    <blockquote class="quote">&ldquo;{{ $item->testimonial }}&rdquo; <cite
                                            class="author"> &mdash; <span>{{ $item->name }}</span></cite>
                                    </blockquote>
                                </div>

                            </div>
                        @endforeach
                        
                       
                    </div>
                </div>
            </div>
            <!-- END row -->
        </div>
    </section>
</div>
