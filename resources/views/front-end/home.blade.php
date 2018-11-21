@extends('front-end.layouts.app')

@section('content')
    <!-- cover -->
    <section class="page-title parallax2 parallax-fix" style="background: url(&quot;images/section-bg-21.jpg&quot;) 50% 0px; visibility: visible; animation-name: fadeIn;">
        <div class="opacity-full-dark bg-deep-blue3"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="alt-font white-text font-weight-600 xs-title-extra-large">Welcome to 9Thanuki</h2>
                    <span class="alt-font title-small xs-text-large white-text text-uppercase margin-one no-margin-bottom no-margin-lr display-block">This is my blog</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at atque delectus deserunt doloremque dolores ducimus earum eius eum fugit illo labore libero, nulla optio provident quae quisquam quod rem.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end cover -->

    <!-- content -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <span class="text-uppercase letter-spacing-2 alt-font medium-gray-text text-small font-weight-600">9Thanuki</span>
                    <span class="text-uppercase letter-spacing-1 alt-font font-weight-700 title-extra-large-2 black-text display-block margin-one no-margin-lr no-margin-bottom">{{ $title }}</span>
                </div>
            </div>
            <div class="row blog-masonry-list no-margin-lr margin-eight">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 blog-masonry-box">
                        <div class="type-post">
                            <div class="entry-cover">
                                <div class="post-meta">
                                    <span class="post-date"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->date_post }}</a></span>
                                </div>
                                <a href="{{ route('blogs.show', $blog->id) }}"><img src="{{ asset('images') . '/' . $blog->cover }}" alt="Post"></a>
                            </div>
                            <div class="entry-content">
                                <div class="entry-header">
                                    <span class="post-category"><a href="#" title="Travel">{{ $blog->category->name }}</a></span>
                                    <h3 class="entry-title"><a href="#" title="Charming Evening Field">{{ $blog->title }}</a></h3>
                                </div>
                                <p>{{ $blog->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end content -->
@endsection

@push('scripts')
    <script>
        (function($) {

            "use strict"

            /* + Blog Masonry */
            function blog_masonry() {
                if($(".blog-masonry-list").length) {
                    var $container = $(".blog-masonry-list");
                    $container.isotope({
                        layoutMode: 'masonry',
                        percentPosition: true,
                        itemSelector: ".blog-masonry-box"
                    });
                }
            }

            /* + Window On Resize */
            $( window ).on("resize",function() {
                blog_masonry();
            });

            /* + Window On Load */
            $(window).on("load",function() {
                blog_masonry();
            });
        })(jQuery);
    </script>
@endpush