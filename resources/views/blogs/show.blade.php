<x-app-layout>
    <section class="hero--area section-padding-80-0">
    </section>
    <section class="post-details-area mb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="post-details-thumb mb-50">
                        <img src="@if ($post->image) {{ Storage::url($post->image) }} @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg @endif" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8 col-xl-7">
                    <div class="post-details-content">
                        <!-- Blog Content -->
                        <div class="blog-content">

                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('blog.tag', $tag) }}" class="post-cata cata-sm cata-danger">{{ $tag->name }}
                                    </a>
                                @endforeach
                                <a href="single-post.html" class="post-title mb-2">{{ $post->title }}</a>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-author">{{ $post->user->name }}</a>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <a href="#" class="post-date">{{ $post->created_at->format('d M Y') }}</a>
                                    </div>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                        <a href="#">@livewire('blogs.like', ['post' => $post])</a>
                                    </div>
                                </div>
                            </div>

                            <p>{!! $post->content !!}</p>
                            <!-- Post Tags -->
                            <div class="post-tags mt-30">
                                <ul>
                                    @foreach ($post->tags as $tag)
                                        <li><a href="{{ route('blog.tag', $tag) }}">{{ $tag->name }}
                                        </a></li>
                                    @endforeach
                                </ul>
                            </div>

                     {{--       <!-- Post Author -->
                            <div class="vizew-post-author d-flex align-items-center py-5">
                                <div class="post-author-thumb">
                                    <img src="img/bg-img/30.jpg" alt="">
                                </div>
                                <div class="post-author-desc pl-4">
                                    <a href="#" class="author-name">Calantha Flower</a>
                                    <p>Hello! My name is Nicolas Sarkozy. I’m a web designer and front-end web developer with over fifteen years of professional.</p>
                                    <div class="post-author-social-info">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
--}}
                            <!-- Related Post Area -->



                            @livewire('blogs.comment', ['post' => $post])

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="sidebar-area">

                        <!-- ***** Single Widget ***** -->
                        <div class="single-widget share-post-widget mb-50">
                            <p>Redes sociales</p>
                            <a href="https://www.facebook.com/19filmsbolivia" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="https://www.instagram.com/19filmscrew/" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                            <a href="https://www.youtube.com/channel/UCl4DvocRICG9bP6OqFgQ_SQ" class="google"><i class="fa fa-google" aria-hidden="true"></i> Youtube</a>
                        </div>

                        <div class="single-widget latest-video-widget mb-50">
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4> Mas en: <a href="{{ route('blog.category', $post->category) }}">{{ $post->category->name }}</a></h4>
                                <div class="line"></div>
                            </div>
                            @forelse ($similars as $similar)
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="@if ($similar->image) {{ Storage::url($similar->image) }} @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg @endif" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('blog.show', $similar) }}" class="post-title">{{ $similar->title }}</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                            <a href="#">@livewire('blogs.like', ['post' => $post])</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-gray-700">
                                    No hay post relacionados
                                </p>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layout>
