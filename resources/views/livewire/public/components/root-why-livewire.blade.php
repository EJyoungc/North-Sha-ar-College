<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Why Choose lorem School</h2>
                    {{-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui
                        tempore natus quos quibusdam soluta at.</p> --}}
                </div>
            </div>
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
