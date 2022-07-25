<x-layout>
    <main id="main">
        <!-- ======= Our Services Section ======= -->
        <x-sect>
            {{ __('Services') }}
        </x-sect><!-- End Our Services Section -->
        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">
                <div class="row" height="auto">
                    @foreach ($data as $item)
                    <div class="col-md-6 col-lg-3  d-flex align-items-stretch" min-width=" full" data-aos="fade-up">
                        <div class="icon-box icon-box-pink w-100">
                            <div class="icon">{!! $item->logo !!}</div>
                            <h4 class="title"><a href="">{{ $item->title }}</a></h4>
                            <p class="description">{{ $item->description }}</p>
                        </div>
                    </div>
                    @endforeach
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
        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">
                <h1>Goals</h1>
                <div class="row">
                    @foreach ($data2 as $item)
                    <div class="col-md-6 d-flex  align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('Upload/images/services/'.$item->image) }}" width="600px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="https://lipsum.com/">{{ $item->title }}</a></h5>
                                <p class="card-text">{{ $item->discreption }}</p>
                                <div class="read-more"><a href="https://lipsum.com/"><i class="bi bi-arrow-right"></i> Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section><!-- End Service Details Section -->
        <!-- ======= Pricing Section ======= -->
        <section class="pricing section-bg" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>{{ $pricing_title }}</h2>
                    <p>{{ $pricing_description }}</p>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 box">
                        <h3>Free</h3>
                        <h4>$0<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span>
                            </li>
                            <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                            </li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>
                    <div class="col-lg-4 box featured">
                        <h3>Business</h3>
                        <h4>$29<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>
                    <div class="col-lg-4 box">
                        <h3>Developer</h3>
                        <h4>$49<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="get-started-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </section><!-- End Pricing Section -->
    </main><!-- End #main -->
</x-layout>