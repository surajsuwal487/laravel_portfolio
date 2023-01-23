@extends('admin-layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding: 15px">
                <div class="card-header col-md-12 d-flex">
                    <h4>Project <small class="text-muted">List</small></h4>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ml-auto " data-toggle="modal" data-target="#createModalLong">
                        Add Project
                    </button>
                </div>
                <div class="card-body">

                    {{-- Delete Modal --}}
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="" id="projectDeleteForm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Are you sure you want to delete?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <input type="hidden" id="deleteProject" name="id">

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Yes</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Create Modal -->
                    <div class="modal fade" id="createModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="createModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="createModalLongTitle">Add Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="projectForm">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Project Name">
                                            <span class="text-danger error-text name_error"></span>

                                        </div>

                                        <div class="form-group">
                                            <label>Image:</label>
                                            <input type="file" name="image" class="form-control"
                                                placeholder="Project Image">
                                            <span class="text-danger error-text image_error"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Description:</label>
                                            <input type="text" name="description" placeholder="Enter description"
                                                id="projectDescription" class="form-control" cols="30" rows="50">
                                            <span class="text-danger error-text description_error"></span>

                                        </div>

                                        <div class="form-group">
                                            <label>Link:</label>
                                            <input type="text" name="link" class="form-control"
                                                placeholder="Project Link">
                                            <span class="text-danger error-text link_error"></span>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="editModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLongTitle">Eidt Project</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="projectForm">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="edit_name" class="form-control"
                                                placeholder="Project Name">
                                            <span class="text-danger error-text name_error"></span>

                                        </div>

                                        <div class="form-group">
                                            <label>Image:</label>
                                            <img style="display: none" height="50px" width="50px"  id="for_image">
                                            <input type="file" id="edit_image" name="image" class="form-control mr-1"
                                                placeholder="Project Image">
                                            <span class="text-danger error-text image_error"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Description:</label>
                                            <input type="text" name="description" placeholder="Enter description"
                                                id="edit_description" class="form-control" cols="30"
                                                rows="50">
                                            <span class="text-danger error-text description_error"></span>

                                        </div>

                                        <div class="form-group">
                                            <label>Link:</label>
                                            <input type="text" name="link" id="edit_link" class="form-control"
                                                placeholder="Project Link">
                                            <span class="text-danger error-text link_error"></span>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <table class="table stripe" id="projectTable" style="width:98%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if ($projects)
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td><img src='{{ url('image/projects/' . $project->image) }}' height="40px"
                                                width="40px"></td>
                                        <td>{{ Illuminate\Support\Str::limit($project->description, 20, '....') }}</td>
                                        <td>{{ $project->link }}</td>
                                        <td>

                                            {{-- <form action="{{ route('inquiry.show') }}" method="get">
                                            <input type="hidden" name="id" value="{{ $inquiry->id }}">
                                            <button type="submit" class="btn btn-xs btn-success" data-toggle="modal"
                                                data-target=".bd-create-modal-lg">View</button>
                                        </form> --}}
                                            <button type="button" class="btn btn-primary btn-sm edit"
                                                data-toggle="modal" data-target="#editModalLong" id=""
                                                data-id={{ $project->id }}>Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm delete"
                                                data-toggle="modal" data-target="#deleteModal"
                                                data-id="{{ $project->id }}">Delete</button>


                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>

                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        // ClassicEditor
        //     .create(document.querySelector('#projectDescription'))
        //     .catch(error => {
        //         console.log(error);
        //     });



        //For add
        $("#projectForm").submit(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var fd = new FormData(this);
            fd.append("bla", 'bla-bla-blaa');
            e.preventDefault();
            $.ajax({
                url: '/store-project',
                type: 'POST',
                enctype: 'multipart/form-data',
                data: fd,
                contentType: false,
                processData: false,
                cache: false,

                beforeSend: function() {
                    $(document).find('span.error-text').text('');
                },
                success: function(data) {

                    if (data.status == 0) {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        })
                    } else {
                        $('#projectForm')[0].reset(); // To reset form fields
                        $('#createModalLong').modal('hide');
                        toastr.success(data.result);
                    }
                },

                error: function(error) {
                    // toastr.error(error.error);
                    // console.log(error.responseJSON.errors.description);
                },
            })
        });

        //For Edit

        $(':button.edit').click(function(e) {
            var id = $(this).attr("data-id");
            $.ajax({
                    url: '/edit-project/' + id,
                    type: 'GET',
                    success: function(data) {
                        $('#edit_name').val(data.name);
                        $('#for_image').attr("src", "http://127.0.0.1:8000/image/projects/" + data.image);
                        $('#for_image').css('display','block');
                        $('#edit_description').val(data.description);
                        $('#edit_link').val(data.link);
                    }

                })


        });

        //For Delete
        $(':button.delete').click(function(e) {
            var id = $(this).attr("data-id");
            $('#deleteProject').val(id);


        });
        $("#projectDeleteForm").submit(function(e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var fd = new FormData(this);
            e.preventDefault();
            $.ajax({
                url: '/delete-project',
                type: 'POST',
                enctype: 'multipart/form-data',
                data: fd,
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#deleteModal').modal('hide');
                    if (data.status == 0) {
                        toastr.error(data.result);
                    }
                }
            })
        });



        $(document).ready(function() {
            $('#projectTable').DataTable();
        });
    </script>
@endsection
