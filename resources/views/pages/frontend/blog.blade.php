<x-layout>
    <main id="main">
        <!-- ======= Blog Section ======= -->
        <x-sect>
            {{ __('Blog') }}
        </x-sect>
        </section><!-- End Blog Section -->
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        @foreach ($data as $item)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ asset('Upload/images/blog/'.$item->image) }}" width="850px" height="400px" alt="">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    {{ $item->title }}
                                </a>
                            </h2>
                            <div height="100px" class="overflow-hidden">{{$item->description}}</div>
                            <div class="entry-content">
                                <div class="read-more">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                        @endforeach
                    </div>
                    <!-- End blog entries list -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($data2 as $item)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('Upload/images/blog/'.$item->image) }}" alt="">
                                    <h4><a href="blog-single.html">{{ $item->title }}</a></h4>
                                </div>
                                @endforeach
                            </div><!-- End sidebar recent posts-->
                        </div><!-- End sidebar -->
                    </div><!-- End blog sidebar -->
                </div>
            </div>
        </section><!-- End Blog Section -->
    </main><!-- End https://moodle.org/plugins/mod_icontentmain -->
</x-layout>