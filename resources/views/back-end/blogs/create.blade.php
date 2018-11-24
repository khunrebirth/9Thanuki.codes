@extends('back-end.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3">
                <div class="list-group list-group-borderless">
                    <a href="{{ route('admin.home') }}" class="list-group-item list-group-item-action">
                        <i class="fa fa-home"></i> Home
                    </a>
                    <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action">
                        <i class="fa fa-flag"></i> Categories
                    </a>
                    <a href="{{ route('admin.blogs.index') }}" class="list-group-item list-group-item-action active">
                        <i class="fa fa-book"></i> Blogs
                    </a>
                    <a href="#" class="list-group-item list-group-item-action ">
                        <i class="fa fa-star"></i> Statistics
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">
                <h3 class="mb-4 page-header">
                    Add New Blog
                </h3>
                <form enctype="multipart/form-data" action="{{ route('admin.blogs.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="hidden" value="">
                        <input  type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input id="blogImage" name="blog_image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        {{--image in--}}
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="blogContent" type="text" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="button" class="btn btn-primary" value="Add">
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {

        });
    </script>
@endpush
