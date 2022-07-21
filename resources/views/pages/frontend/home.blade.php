    <x-layout>
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Moderna</span></h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                            Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                            modi architecto.</p>
                        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                    </div>
                </div>
                @foreach ($data as $item)
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $item->description }}</p>
                        <a href="{{ $item->link }}" class="btn-get-started animate__animated animate__fadeInUp">Read
                            More</a>
                    </div>
                </div>
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
                    @foreach ($data2 as $item)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" width="400px" data-aos="fade-up">
                        <div class="icon-box icon-box-pink" width="400px">
                            <div class="icon">{{print_r($item->logo) }}</div>
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
                        <img src="{{asset('Upload/images/homepage/image/'.$image)}}" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=cK4DZ1p3bU0" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                        <div class="icon-box">
                            <div class="icon">
                                {{print_r($svg_logo)}}
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
                @foreach ($data3 as $item)
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('Upload/images/homepage/' . $item->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>{{ $item->title }}</h3>
                        <p class="fst-italic">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </section><!-- End Features Section -->
    </x-layout>