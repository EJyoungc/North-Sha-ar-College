<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <section
        class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
        style="background-image: url(img/slider_2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2 class="mb0">Meet Our Staff</h2>
                    <p class="lead">People Power: Meet the Heart and Soul of Our Organization</p>
                </div>
            </div>
        </div>
    </section>   
    <section class="probootstrap-section">
        <div class="container">
        
            <div class="row">
                @forelse ($users as $item)
                <div class="col-md-3 col-sm-6">
                    <div wire:click='link' class="probootstrap-teacher text-center probootstrap-animate">
                        <figure class="media">
                            <img src="{{ $item->profile_picture == '' ? asset('face-0.jpg') : asset('assets/uploads/'.$item->profile_picture)}}" alt="{{ $item->name }}"
                                class="img-responsive">
                        </figure>
                        <div class="text">
                            <h3 class="text-capitalize" >{{ $item->name }}</h3>
                            <p class="text-capitalize">{{ $item->occupation }}</p>
                            {{-- <ul class="probootstrap-footer-social">
                                <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
                
            </div>

        </div>
    </section>
</div>
