<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    
    @livewire('public.components.root-hero-livewire')

    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h2>Welcome to School of Excellence</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block ">
                        <div class="probootstrap-text w-full probootstrap-animate">
                            <h3>About School</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore
                                ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas
                                error non rerum temporibus optio accusantium!</p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('public.components.root-stats-livewire')

    @livewire('public.components.root-hightlight-livewire')



    @livewire('public.components.root-programs-livewire')

    @livewire('public.components.root-staff-livewire')
    @livewire('public.components.root-testimonial-livewire')


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
