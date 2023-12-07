<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section class="flexslider">

        <ul class="slides">
            @forelse ($hero as $item)
                <li style="background-image: url({{ asset('assets/uploads/' . $item->image) }})" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">{{ $item->name }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @empty

                <li style="background-image: url(img/slider_1.jpg)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our
                                        Mission</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url(img/slider_2.jpg)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li style="background-image: url(img/slider_3.jpg)" class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="probootstrap-slider-text text-center">
                                    <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students
                                        Fulfill the Potential</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforelse

        </ul>
    </section>
</div>
