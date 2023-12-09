<div>
    {{-- In work, do what you enjoy. --}}
    <section  class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading ">
                    <h1> News {{ $c->name }}</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="probootstrap-section">
        <div class="container">

            <div class="row"   >
                @foreach($posts as $item)
                <div class="col-md-4 col-sm-12 col-xs-12 col-xxs-12 ">
                    <a href="{{ route('root.news.show',$item->slug) }}" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ asset('assets/uploads/'.$item->image) }}"
                                alt="{{ $item->name }}" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                            <h3 class="text-capitalize" >{{ $item->name }}</h3>
                            <p>{{ Str::of(strip_tags($item->post))->limit(100) }}</p>
                            <br><br><br>
                            <span class="probootstrap-date"><i class="icon-calendar"></i>{{ $item->getdate() }}</span>
                            {{-- <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span> --}}
                        </div>
                    </a>
                </div>

                
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-12">
                    {{ $posts->links() }}      
                </div> 
            </div>

            

        </div>
    </section>
</div>
