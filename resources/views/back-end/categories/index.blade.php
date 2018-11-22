@extends('back-end.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-3">
                <div class="list-group list-group-borderless">
                    <a href="{{ route('admin.home') }}" class="list-group-item list-group-item-action">
                        <i class="fa fa-home"></i> Home
                    </a>
                    <a href="{{ route('admin.categories.index') }}"
                       class="list-group-item list-group-item-action active">
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
                <div>
                    <a class="btn btn-success d-block d-sm-inline-block" id="btn-show-category-modal" href="#modal-add-edit-category" data-toggle="modal" onclick="addCategory()">
                        <i class="fa fa-plus"></i> Add Category
                    </a>
                </div>
                <div>
                    <div class="mt-5">
                        <table class="table table-striped" id="categories-list">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-add-edit-category" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-category-name">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="p-2" id="add-edit-category-form">
                        <div class="modal-body" id="details-body">
                            <div class="form-group">
                                <label>Name </label>
                                <input type="hidden" value="" id="categoryId">
                                <input id="categoryName" type="text" class="form-control">
                            </div>
                        </div>

                        <div align="center" class="ajax-loading" style="display: none;">
                            <i class="fa fa-2x fa-spinner fa-spin my-5"></i>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                                Cancel
                            </button>

                            <button type="submit" id="btn-add-category" name="button" class="btn btn-primary">
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

        function clearForm() {
            $('#modal-add-edit-category form')[0].reset();
        }

        function addCategory() {
            clearForm();
            $('#categoryId').val('');
            $('#categoryName').val('');
            $('#modal-category-name').text('Add Category');
            $('#btn-add-category').text('Add');
        }

        function editCategory(id, url) {

            clearForm();

            $.ajax({
                url: '{{ route('ajax.get.category.by.id') }}',
                data: { id: id },
                success: function(res) {
                    $('#modal-add-edit-category').modal('show');
                    $('.modal-title').text('Edit Category');
                    $('#btn-add-category').text('Update');
                    $('#categoryId').val(res.data.id);
                    $('#categoryName').val(res.data.name);
                    $('#categoryId').data('link-to-update', url);
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
        }

        function deleteCategory(id, url) {
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
                    url: '{{ route('ajax.datatables.categories.list') }}',
                },
                processing: true,
                serverSide: true,
                columns: [
                    { data: 'name' },
                    { data: 'action', bSortable: false }
                ],
                columnDefs: [
                    { width: "80%", targets: 0 },
                    { width: "20%", targets: 1 }
                ]
            });

            $('#add-edit-category-form').on('submit', function(e) {
                e.preventDefault();

                var categoryId = $('#categoryId').val()
                var url = '';
                var method = '';

                // Case:: Update
                if (categoryId != '') {
                    url = $('#categoryId').data('link-to-update');
                    method = 'PATCH';
                }

                // Case:: Insert New
                else {
                    url = '{{ route('admin.categories.store') }}';
                    method = 'POST';
                }

                $.ajax({
                    type: method,
                    url: url,
                    data: {
                        _token: "{{ csrf_token() }}",
                        category_name: $('#categoryName').val()
                    },
                    success: function(res) {
                        $('#modal-add-edit-category').modal('hide');
                        swal({
                            title: 'Success',
                            text: res.message,
                            icon: 'success',
                            button: "Great!"
                        });

                        grid.ajax.reload()
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
            });

        });
    </script>
@endpush
