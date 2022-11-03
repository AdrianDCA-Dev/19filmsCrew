@extends('welcome')

@section('css')

@stop
@section('content')
    <section class="p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    BLOG
                </h3>
            </div>

            <div class="row isotope-grid">

                @foreach ($posts_likes as $post)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="@if ($post->image){{ Storage::url($post->image) }}
                                @else https://cdn.pixabay.com/photo/2022/04/21/19/47/lion-7148207_960_720.jpg
                                @endif" alt="IMG-PRODUCT">

                                <a href="{{ route('blog.show', $post) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Leer Más
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ route('blog.show', $post) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $post->title }}
                                    </a>

                                    <span class="stext-105 cl3">
									 @foreach ($post->tags as $tag)
                                            <a href="{{ route('blog.tag', $tag) }}">
                                                {{ $tag->name }}
                                            </a>
                                        @endforeach
								    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>

@stop

@section('script')

@stop
