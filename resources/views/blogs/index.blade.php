<x-app-layout>
 {{--   <x-carousel :posts_likes="$posts_likes"></x-carousel>

    <div class="container mx-auto py-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($posts as $post)
                <article
                    class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif rounded-lg"
                    style="background-image: url(@if ($post->image) {{ Storage::url($post->image) }} @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 pb-10 flex flex-col justify-end">
                        <div class="">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag) }}" class="text-gray-500">
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                                        {{ $tag->name }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-black leading-8 font-bold mt-2">
                            <a href="{{ route('blog.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>--}}

    <!-- ##### Header Area Start ##### -->
    <section class="hero--area section-padding-0-80">
    </section>
    <!-- ##### Trending Posts Area Start ##### -->
    {{--<section class="trending-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h4>Trending Videos</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="sport-video-slides owl-carousel mb-50">

                    @foreach($posts->chunk(3) as $imagen)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="row">
                        @foreach ($imagen as $post)

                                <div class="col-4">
                                <div class="single-post-area mb-80 ">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="@if ($post->image) {{ Storage::url($post->image) }} @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg @endif" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">05.03</span>
                                    </div>
                                    <div class="post-content">
                                        @foreach ($post->tags as $tag)
                                            <a href="{{ route('blog.tag', $tag) }}" class="post-cata cata-sm cata-danger">
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
                                        <a  class="post-title" href="{{ route('blog.show', $post) }}">
                                            {{ $post->title }}
                                        </a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                            <a href="#">@livewire('blogs.like', ['post' => $post])</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>--}}

    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">
                        <!-- Section Heading -->
                        <div class="section-heading style-2">
                            <h4>Lo mas visto</h4>
                            <div class="line"></div>
                        </div>

                        <!-- Featured Post Slides -->
                        <x-carousel :posts_likes="$posts_likes"></x-carousel>

                        @foreach ($posts as $post)

                            <div class="single-post-area mb-30 @if ($loop->first) @endif">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="@if ($post->image) {{ Storage::url($post->image) }} @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg @endif" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Post Content -->
                                        <div class="post-content mt-0">
                                            @foreach ($post->tags as $tag)
                                                <a href="{{ route('blog.tag', $tag) }}" class="post-cata cata-sm cata-success">
                                                    {{ $tag->name }}
                                                </a>
                                            @endforeach

                                                <a  class="post-title mb-2" href="{{ route('blog.show', $post) }}">
                                                    {{ $post->title }}
                                                </a>
                                            <div class="post-meta d-flex align-items-center mb-2">
                                                <a href="#" class="post-author">{{ $post->user->name }}</a>
                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                <a href="#" class="post-date">{{ $post->created_at->format('d M Y') }}</a>
                                            </div>
                                            <p class="mb-2">{!! $post->body !!}</p>
                                            <div class="post-meta d-flex">
                                            {{--    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>--}}
                                                <a href="#">@livewire('blogs.like', ['post' => $post])</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="mt-4">
                            {{ $posts->links() }}
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget followers-widget mb-50">
                            <a href="https://www.facebook.com/19filmsbolivia" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                            <a href="https://www.instagram.com/19filmscrew/" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i><span class="counter">220</span><span>Seguidores</span></a>
                            <a href="https://www.youtube.com/channel/UCl4DvocRICG9bP6OqFgQ_SQ" class="google"><i class="fa fa-youtube-play" aria-hidden="true"></i><span class="counter">140</span><span>Suscribir</span></a>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>INSTAGRAM</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <!-- SnapWidget -->
                                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                                <iframe src="https://snapwidget.com/embed/1007386" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; border-radius:5px; width:100%; height:600px"></iframe>
                            </div>


                        </div>

                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>YOUTUBE</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <!-- SnapWidget -->
                                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                                <link rel="stylesheet" href="https://snapwidget.com/stylesheets/snapwidget-lightbox.css" />
                                <script src="https://snapwidget.com/js/snapwidget-lightbox.js"></script>
                                <iframe src="https://snapwidget.com/embed/1007387" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
                            </div>


                        </div>

                        {{--<!-- ***** Sidebar Widget ***** -->
                        <div class="single-widget youtube-channel-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Hot Channels</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Music Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/26.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Trending Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/27.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Travel Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/28.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">Sport Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>

                            <!-- Single YouTube Channel -->
                            <div class="single-youtube-channel d-flex align-items-center">
                                <div class="youtube-channel-thumbnail">
                                    <img src="img/bg-img/29.jpg" alt="">
                                </div>
                                <div class="youtube-channel-content">
                                    <a href="single-post.html" class="channel-title">TV Show Channel</a>
                                    <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                                </div>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget newsletter-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Newsletter</h4>
                                <div class="line"></div>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" class="form-control mb-15" id="emailnl" placeholder="Enter your email">
                                    <button type="submit" class="btn vizew-btn w-100">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Most Viewed Playlist</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/36.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">Sweet Yummy Chocolate in the</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/37.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="img/bg-img/38.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    </div>
                                </div>
                            </div>
                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </section>



</x-app-layout>
