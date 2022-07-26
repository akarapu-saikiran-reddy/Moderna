    <x-layout>
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                @foreach ($slider as $item)
                @if($loop->iteration == 1)
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $item->description }}</p>
                        <a href="{{ $item->link }}" class="btn-get-started animate__animated animate__fadeInUp">Read
                            More</a>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $item->description }}</p>
                        <a href="{{ $item->link }}" class="btn-get-started animate__animated animate__fadeInUp">Read
                            More</a>
                    </div>
                </div>
                @endif
                @endforeach
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section><!-- End Hero -->
        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">
                <div class="row">
                    @foreach ($feature as $item)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" min-width=" full" data-aos="fade-up">
                        <div class="icon-box icon-box-pink w-100">
                            <div class="icon">{!!$item->image!!}</div>
                            <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                            <p class="description">{{ $item->description }}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Services Section -->
        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="{{asset('Upload/images/homepage/image/'.$image)}}" class="img-fluid w-100" alt="">
                        <a href="{!! $video_link !!}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                        <div class="icon-box">
                            <div class="icon">
                                {!!$svg_logo!!}
                            </div>
                            <h4 class="title"><a href="">{{$title}}</a></h4>
                            <p class="description">{{$description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->
        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">
                <div class="section-title">
                    <h2>{{$card_title}}</h2>
                    <p>{{$card_description}}</p>
                </div>
                @foreach ($feature as $item)
                @if($loop->iteration % 2 == 0)
                <div class="row" data-aos="fade-up">
                    <div class="rounded-full overflow-hidden col-5">
                        <img src="{{ asset('Upload/images/feature/'.$item->image) }}" width="full" height="300px" alt="">
                    </div>
                    <div class="col-7 pt-4">
                        <h3>{{ $item->title }}</h3>
                        <p class="fst-italic">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
                @else
                <div class="row" data-aos="fade-up">
                    <div class="col-7 pt-4">
                        <h3>{{ $item->title }}</h3>
                        <p class="fst-italic">
                            {{ $item->description }}
                        </p>
                    </div>
                    <div class="col-5 rounded-full overflow-hidden">
                        <img src="{{ asset('Upload/images/feature/'.$item->image) }}" width="full" height="300px" alt="">
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </section>
        <!-- End Features Section -->
    </x-layout>