<x-layout>
    <main id="main">
        <x-sect>
            {{ __('Aboutus') }}
        </x-sect>
        <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('Upload/images/homepage/about-image/'.$about_image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>
                            About Title
                        </h3>
                        <p class="fst-italic">
                            {{ $about_description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="facts section-bg" data-aos="fade-up">
            <div class="container">
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Skill Title</h2>
                    <p>{{ $skill_description }}</p>
                </div>
                <div class="skills-content">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">HTML <i class="val">100%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">CSS <i class="val">90%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>Testimonial</h2>
                    <p>{{ $testimonial_description }}</p>
                </div>
                <div class="testimonials-carousel swiper">
                    <div class="swiper-wrapper">
                        @foreach ($data as $item)

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('Upload/images/about/' . $item->image) }}" class="testimonial-img" alt="">
                                <h3>{{ $item->title }}</h3>
                                <h4>{{ $item->role }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $item->description }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </section>
    </main>
</x-layout>