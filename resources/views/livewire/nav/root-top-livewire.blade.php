<div>
    {{-- Do your work, then step back. --}}

    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="{{ route('root') }}">Micromek</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              {{-- <li><a href="{{ request()->is('root') ? '#services' :  route('root').'#services'}}">Services</a></li> --}}
                {{-- <li><a href="{{ request()->is('root') ? '#about' :  route('root').'#about'}}">About us</a></li>
                <li><a href="{{ route('root.edu') }}">STEM Education</a></li>                
                <li><a href="{{ route('root.blog') }}">Blog</a></li>
                <li><a href="{{ request()->is('root') ? '#contact' :  route('root').'#contact'}}">Contact us</a></li> --}}
              
         
            </ul>
          </div>
        </div>
      </nav>
</div>
