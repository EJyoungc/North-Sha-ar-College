<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section
        class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
        style="background-image: url(img/slider_2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2 class="mb0">Highlights</h2>
                    <p class="lead">Eventful Updates and Timely Posts Await You</p>
                </div>
            </div>
        </div>
        <div class="probootstrap-tab-style-1">
            <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
                @if(!empty($category))<li><a data-toggle="tab" href="#upcoming-events">{{ $category->name == "" ? "" : $category->name  }} </a></li>@endif
            </ul>
        </div>
    </section>
    <section class="probootstrap-section probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="tab-content">

                        <div id="featured-news" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl1">

                                        @foreach ($posts as $item)
                                           <div class="item">
                                            
                                            <a href="{{ route('root.news.show',$item->slug) }}" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('assets/uploads/'.$item->image) }}"
                                                        alt="{{ $item->name }}"
                                                        class="img-responsive"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>{{ $item->name }}</h3>
                                                    <p>{{ Str::of(strip_tags($item->post))->limit(50) }}</p>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>{{ $item->getDate() }}</span>

                                                </div>
                                            </a>
                                        </div> 
                                        @endforeach
                                        
                                        <!-- END item -->
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- END row -->
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="{{ route('root.news') }}" class="btn btn-primary">View all news</a></p>
                                </div>
                            </div>
                        </div>
                        <div id="upcoming-events" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl2">
                                        @foreach ($posts as $item)
                                           <div class="item">
                                            
                                            <a href="{{ route('root.news.show',$item->slug) }}" class="probootstrap-featured-news-box">
                                                <figure class="probootstrap-media"><img src="{{ asset('assets/uploads/'.$item->image) }}"
                                                        alt="{{ $item->name }}"
                                                        class="img-responsive"></figure>
                                                <div class="probootstrap-text">
                                                    <h3>{{ $item->name }}</h3>
                                                    <p>{{ Str::of(strip_tags($item->post))->limit(50) }}</p>
                                                    <span class="probootstrap-date"><i class="icon-calendar"></i>{{ $item->getDate() }}</span>

                                                </div>
                                            </a>
                                        </div> 
                                        @endforeach
                                        <!-- END item -->
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="{{ route('root.news.category',$category->slug) }}" class="btn btn-primary">View all @if(!empty($category)) {{ $category->name == "" ? "" : $category->name  }} @endif </a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
