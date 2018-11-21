@extends('front-end.layouts.app')

@section('content')
    <!-- page title -->
    <section class="page-title parallax2 parallax-fix" style="min-height: 600px !important;">
        <img class="parallax-background-img" src="{{ asset('images/' . $blog->cover) }}" alt="" />
        <div class="opacity-full bg-deep-blue3"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="alt-font white-text font-weight-600 xs-title-extra-large">{{ $blog->title }}</h2>
                    <span class="alt-font title-small xs-text-large white-text text-uppercase margin-one no-margin-bottom no-margin-lr display-block">{{ $blog->date_post }}</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- cotent -->
    <section class="wow fadeIn border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 blog-listing">
                    <article>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 xs-margin-seven xs-no-margin-lr xs-no-margin-top">
                                <img src="http://placehold.it/800x473" alt=""/>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="http://placehold.it/800x473" alt=""/>
                            </div>
                        </div>
                        <!-- end post image -->
                        <div class="margin-ten no-margin-lr">
                            <!-- text -->
                            <span class="text-large dark-gray-text margin-five no-margin-lr no-margin-top display-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                            <p class="margin-ten no-margin-lr no-margin-top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            <div class="col-md-12 no-padding">
                                <div class="blog-image">
                                    <blockquote class="bg-gray alt-font">
                                        <p class="text-large margin-ten no-margin-lr no-margin-top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text.</p>
                                        <footer class="text-uppercase black-text">Jason Santa Maria</footer>
                                    </blockquote>
                                </div>
                            </div>
                            <span class="text-large dark-gray-text margin-five no-margin-lr no-margin-top display-block">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p><br>
                            <!-- end text -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->
@endsection
