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
                <div>
                    <a class="btn btn-success d-block d-sm-inline-block" id="btn-show-blog-modal" href="#modal-add-edit-blog" data-toggle="modal" onclick="addBlog()">
                        <i class="fa fa-plus"></i> Add Blogs
                    </a>
                </div>
                <div>
                    <div class="mt-5">
                        <table class="table table-striped" id="categories-list">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Category</th>
                                    <th>Date Post</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-add-edit-blog" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-blog-name">Add Blog</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="p-2" id="add-edit-blog-form" enctype="multipart/form-data">
                        <div class="modal-body" id="details-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="hidden" value="" id="blogId">
                                <input id="blogTitle" type="text" class="form-control">
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
                                <input id="blogContent" type="text" class="form-control">
                            </div>
                        </div>

                        <div align="center" class="ajax-loading" style="display: none;">
                            <i class="fa fa-2x fa-spinner fa-spin my-5"></i>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                Cancel
                            </button>

                            <button type="submit" id="btn-add-blog" name="button" class="btn btn-primary">
                                Add
                            </button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var grid;

        function deleteBlog(id, url) {
            swal({
                title: 'Are you sure?',
                text: 'Onec deleted, you will not be ableto recover this imaginary file!',
                icon: 'warning',
                button: true,
                dangerMode: true
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'DELETE',
                            url: url,
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(res) {
                                grid.ajax.reload()

                                swal({
                                    title: 'Delete Done!',
                                    text: 'You clicked the button!',
                                    icon: 'success',
                                    button: "Great!"
                                });
                            },
                            error: function(res) {
                                swal({
                                    title: 'Oops...',
                                    text: res.message,
                                    icon: 'error',
                                    timer: '1500'
                                });
                            }
                        });
                    } else {
                        swal('Your imaginary file is safe!');
                    }
                });
        }

        $(document).ready(function () {

            grid = $('#categories-list').DataTable({
                stateSave: true,
                "bSortCellsTop": true,
                autoWidth: false,
                scrollX: true,
                ajax: {
                    url: '{{ route('ajax.datatables.blogs.list') }}',
                },
                processing: true,
                serverSide: true,
                columns: [
                    { data: 'title' },
                    { data: 'content' },
                    { data: 'category' },
                    { data: 'date_post' },
                    { data: 'action', bSortable: false }
                ]
            });
        });
    </script>
@endpush
