<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <section class="probootstrap-section probootstrap-section-colored ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Why Choose Our School</h2>
                    <p class="lead">A Commitment to Excellence: What Sets Our School Apart</p>
                </div>
            </div>

        </div>
    </section>


    <section class="probootstrap-section  ">
        <div class="container">
            
            <div class="row">

                @forelse ($whies as $item )
                <div class="col-md-6">
                    <div class="service left-icon probootstrap-animate">
                        <div class="icon"><i class="icon-checkmark"></i></div>
                        <div class="text">
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->desc }}</p>
                        </div>
                    </div>
                     
                </div>
                @empty
                    
                @endforelse
                
               
            </div>
            <!-- END row -->
        </div>
    </section>
</div>
