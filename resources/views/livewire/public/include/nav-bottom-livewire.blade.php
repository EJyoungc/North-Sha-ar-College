<div>
    <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The School</h3>
                <p>{{ $footer->about == " " ? "welcome" : $footer->about }}</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                 @if (!empty($footer->x_link))
                 <li><a href="{{ $footer->x_link }}"><i class="icon-twitter"></i></a></li> 
                 @endif 
                 @if (!empty($footer->facebook_link))
                 <li><a href="{{ $footer->facebook_link }}"><i class="icon-facebook"></i></a></li>
                 @endif
                 
                 @if (!empty($footer->linkedin_link))
                 <li><a href="{{ $footer->linkedin_link }}"><i class="icon-linkedin"></i></a></li>
                 @endif
                 @if (!empty($footer->youtube_link))
                 <li><a href="{{$top->youtube_link }}"><i class="icon-youtube"></i></a></li> 
                 @endif
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li class="active"><a href="{{ route('root') }}">Home</a></li>
                  <li><a href="{{ route('root.courses') }}">Courses</a></li>
                  <li><a href="{{ route('root.news') }}">News</a></li>
                  @if($users->count() > 0)<li><a href="{{ route('root.staff') }}">Staff</a></li>@endif
                  @if(!empty($cat))<li><a href="{{ route('root.news.category',$cat->slug) }}">Events</a></li> @endif
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  @if (!empty($footer->contact_address))
                  <li><i class="icon-location2"></i> <span>{{ $footer->contact_address }}</span></li>
                  @endif
                  @if (!empty($footer->contact_email))
                      <li><i class="icon-mail"></i><span>{{ $footer->contact_email }}</span></li>
                  @endif
                  
                  @if (!empty($footer->contact_mobile))
                    <li><i class="icon-phone2"></i><span>{{ $footer->contact_mobile }}</span></li>
                  @endif
                  
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2023 <a href="#">North Sha’ar College of Education</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="#">Techlink360</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
</div>
