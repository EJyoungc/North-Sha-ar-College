<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="probootstrap-header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                   @if (!empty($top->contact_address))
                   <span><i class="icon-location2"></i>{{ $top->contact_address }}</span>
                   @endif 
                   @if (!empty($top->contact_mobile))
                   <span><i class="icon-phone2"></i>{{ $top->contact_mobile }}</span>   
                   @endif
                    @if (!empty($top->contact_email))
                    <span><i class="icon-mail"></i>{{ $top->contact_email }}</span>    
                    @endif
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                    <ul>
                        @if (!empty($top->x_link))
                        <li><a href="{{ $top->x_link }}"><i class="icon-twitter"></i></a></li>    
                        @endif
                        @if (!empty($top->facebook_link))
                        <li><a href="{{ $top->facebook_link }}"><i class="icon-facebook2"></i></a></li>    
                        @endif
                        @if (!empty($top->youtube_link))
                        <li><a href="{{ $top->youtube_link }}"><i class="icon-youtube"></i></a></li>    
                        @endif
                        
                        {{-- <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i
                                    class="icon-search"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
            <div class="navbar-header">
                <div class="btn-more js-btn-more visible-xs">
                    <a href="#"><i class="icon-dots-three-vertical "></i></a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" title="ProBootstrap:lorem">lorem</a> 
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ route('root') }}">Home</a></li>
                    <li><a href="{{ route('root.courses') }}">Courses</a></li>
                    <li><a href="{{ route('root.news') }}">News</a></li>
                    @if($users->count() > 0)<li><a href="{{ route('root.staff') }}">Staff</a></li>@endif
                    @if(!empty($cat))<li><a href="{{ route('root.news.category',$cat->slug) }}">Events</a></li> @endif
                    {{-- <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="{{ route('root.courses') }}">Courses</a></li>
                            <li><a href="course-single.html">Course Single</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown-submenu dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub
                                        Menu</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Second Level Menu</a></li>
                                    <li><a href="#">Second Level Menu</a></li>
                                    <li><a href="#">Second Level Menu</a></li>
                                    <li><a href="#">Second Level Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="news.html">News</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
