<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>Our Courses</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                @foreach ( $courses as $item )
                    <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                            <div class="image-bg">
                                <img src="{{ asset('assets/uploads/'.$item->image) }}" alt="{{ $item->name }}">
                            </div>
                        </div>
                        <div class="text">
                            {{-- <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span> --}}
                            <h3>{{ $item->name }}</h3>
                            <p>{{ $item->about }}</p>
                            <p>
                                <a href="{{ route('root.enroll') }}" class="btn btn-primary">Enroll now</a> 
                               
                            </p>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
