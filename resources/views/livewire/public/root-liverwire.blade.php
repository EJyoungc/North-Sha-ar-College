<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
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

    

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h2>Welcome to School of Excellence</h2>
                </div>
            </div>
        </div>
    </section>

    @livewire('public.components.root-about-livewire')
   

    @livewire('public.components.root-stats-livewire')

    @livewire('public.components.root-hightlight-livewire')



    @livewire('public.components.root-programs-livewire')

    @livewire('public.components.root-staff-livewire')
    {{-- @livewire('public.components.root-testimonial-livewire') --}}



    @livewire('public.components.root-why-livewire')


    

    <section class="probootstrap-cta">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
                    <a href="{{ route('root.enroll') }}" role="button"
                        class="btn btn-primary btn-lg btn-ghost probootstrap-animate"
                        data-animate-effect="fadeInLeft">Enroll</a>
                </div>
            </div>
        </div>
    </section>
</div>
