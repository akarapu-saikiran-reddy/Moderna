<x-layout>
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <x-sect>
            {{ __('Contactus') }}
        </x-sect>
        <!-- End Contact Section -->
        <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Contact Address</h3>
                                    <p>{{ $contacta_description }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Contact Email</h3>
                                    <p> {{$contacte_description}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">

                                    <i class="bx bx-phone-call"></i>
                                    <h3>Contact Number</h3>
                                    <p>{{ $contactp_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('contactus.store') }}" method="post" class=" form-group">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            @error('subject')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" name="message" required></textarea>
                            </div>
                            @error('message')
                            <div class="alert alert-danger mt-1 mb-1">
                                {{ $message }}
                            </div>
                            @enderror
                            <br>
                            @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <div class="text-center ">
                                <div class="text-center ">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
        <!-- ======= Map Section ======= -->
        <section class="map mt-2">
            <div class="container-fluid p-0">
                <iframe src="{{ print_r($gmap_link) }}" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section><!-- End Map Section -->
    </main><!-- End #main -->
</x-layout>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15229.888503522898!2d78.41833545!3d17.38911585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1657776644837!5m2!1sen!2sin"