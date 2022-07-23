<x-layout>
    <main id="main">
        <!-- ======= Our Portfolio Section ======= -->
        <x-sect>
            {{ __('Portfolio') }}
        </x-sect><!-- End Our Portfolio Section -->
        <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                    @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="{{ asset('Upload/images/portfolio/app/' . $item->app) }}" width="420px" height="200px" alt="">
                            <div class="portfolio-info">
                                <h3>App</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="{{ asset('Upload/images/portfolio/card/' . $item->card) }}" width="420px" height="200px" alt="">
                            <div class="portfolio-info">
                                <h3>Card</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="{{ asset('Upload/images/portfolio/web/' . $item->web) }}" width="420px" height="200px" alt="">
                            <div class="portfolio-info">
                                <h3>Web</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->
    </main><!-- End #main -->
</x-layout>