@extends('admin-layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding: 15px">
                <div class="card-header">
                    <h4>Inquiry <small class="text-muted">List</small></h4>
                </div>
                <div class="card-body">

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Show Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Name:</strong> <span id="user-name"></span></p>
                                    <p><strong>Email:</strong> <span id="user-email"></span></p>
                                    <p><strong>Subject:</strong> <span id="user-subject"></span></p>
                                    <p><strong>Message:</strong> <span id="user-message"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table stripe" id="inquiryTable" style="width:98%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inquires as $inquiry)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $inquiry->name }}</td>
                                    <td>{{ $inquiry->email }}</td>
                                    <td>{{ $inquiry->subject }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($inquiry->message, 20, '....') }}</td>
                                    <td>{{ $inquiry->created_at->diffForHumans() }}</td>
                                    <td>

                                        {{-- <form action="{{ route('inquiry.show') }}" method="get">
                                            <input type="hidden" name="id" value="{{ $inquiry->id }}">
                                            <button type="submit" class="btn btn-xs btn-success" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">View</button>
                                        </form> --}}
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                            data-target="#exampleModal" id="inquiryView"
                                            data-id={{ $inquiry->id }}>View</button>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col">Time</th>
                                <th scope="col">Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(':button').click(function() {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: '/show-inquiry/' + id,
                    type: 'GET',
                    success: function(response) {
                        $('#user-name').text(response.name);
                        $('#user-email').text(response.email);
                        $('#user-subject').text(response.subject);
                        $('#user-message').text(response.message);
                    }

                })
            })


            $('#inquiryTable').DataTable();
        });
    </script>
@endsection
