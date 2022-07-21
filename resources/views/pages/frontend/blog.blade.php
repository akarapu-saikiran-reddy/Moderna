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

                            <div class="entry-content">
                                <p>
                                    {{ $item->description }}

                                </p>
                                <div class="read-more">
                                    <a href="{{ asset($item->link) }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                        @endforeach
                    </div>



                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">General <span>(25)</span></a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Lifestyle <span>(12)</span></a>
                                    </li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Travel <span>(5)</span></a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Design <span>(22)</span></a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Creative <span>(8)</span></a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Educaion <span>(14)</span></a>
                                    </li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($data2 as $item)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('Upload/images/blogposts/'.$item->image) }}" alt="">
                                    <h4><a href="blog-single.html">{{ $item->title }}</a></h4>
                                    <time datetime="2020-01-01">{{ $item->description }}</time>
                                </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">App</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">IT</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Business</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Mac</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Design</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Office</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Creative</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Studio</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Smart</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Tips</a></li>
                                    <li><a href="https://moodle.org/plugins/mod_icontent">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End https://moodle.org/plugins/mod_icontentmain -->

</x-layout>