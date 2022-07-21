<x-layout>
    <main id="main">
        <!-- ======= Our Team Section ======= -->
        <x-sect>
            {{ __('Team') }}
        </x-sect><!-- End Our Team Section -->
        <!-- ======= Team Section ======= -->
        <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('Upload/images/team/' . $item->image) }}" width="400px"
                                        height="200px" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->title }}</h4>
                                    <span>{{ $item->role }}</span>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
</x-layout>
