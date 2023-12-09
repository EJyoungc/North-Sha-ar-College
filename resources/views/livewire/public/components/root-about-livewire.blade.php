<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block  ">
                        <div class="probootstrap-text w-full probootstrap-animate">
                            <h3>About School</h3>
                            <p>{{  Str::of(strip_tags($about->about))->limit(300) }}</p>
                            <p><a href="{{ route('root.about') }}" class="btn btn-primary">Learn More</a></p>
                        </div>
                        {{-- <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                          </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
