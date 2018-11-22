@extends('back-end.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3">
                <div class="list-group list-group-borderless">
                    <a href="{{ route('admin.home') }}" class="list-group-item list-group-item-action active">
                        <i class="fa fa-home"></i> Home
                    </a>
                    <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action ">
                        <i class="fa fa-flag"></i> Categories
                    </a>
                    <a href="{{ route('admin.blogs.index') }}" class="list-group-item list-group-item-action ">
                        <i class="fa fa-book"></i> Blogs
                    </a>
                    <a href="#" class="list-group-item list-group-item-action ">
                        <i class="fa fa-star"></i> Statistics
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">

                <h3 class="mb-4 page-header">
                    Comments Wall
                    <small class="text-muted text-small">last 7 posts</small>
                </h3>

                <!-- start: Comments List -->
                <div id="comment-list">
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            Nice! </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-22 06:35:37</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            it works!
                        </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-20 15:22:46</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            fuck off
                        </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-19 06:34:34</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            fdg </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-17 11:08:39</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            Good </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-16 09:13:57</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            ef </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-16 05:12:35</em>
                        </footer>
                    </blockquote>
                    <blockquote class="blockquote mb-4 border-left pl-3 pt-2 pb-2">
                        <p class="mb-2">
                            aaSAsaSAsaSas </p>
                        <footer class="blockquote-footer">
                            <strong>admin</strong>
                            <em>at 2018-11-15 18:38:14</em>
                        </footer>
                    </blockquote>
                </div>
                <!-- end: Comments List -->

                <!-- start: Leave Comment Section -->
                <form id="new-comment-form" class="mt-5" novalidate="novalidate">
                    <div class="form-group">
                        <h5>Leave comment</h5>
                        <textarea class="form-control" name="comment" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="btn-comment" type="submit">
                            <i class="fa fa-comment"></i>
                            Comment
                        </button>
                    </div>
                </form>
                <!-- end: Leave Comment Section -->

            </div>
            {{----}}
            {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
            {{--<div class="card-header">Dashboard</div>--}}

            {{--<div class="card-body">--}}
            {{--@if (session('status'))--}}
            {{--<div class="alert alert-success">--}}
            {{--{{ session('status') }}--}}
            {{--</div>--}}
            {{--@endif--}}

            {{--You are logged in!--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
@endsection
