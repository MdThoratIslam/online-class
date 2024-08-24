@extends('backend.layouts.app')
@section('title', 'Role List')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Add Row</h4>
                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i>Add Row
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold"> New</span>
                                <span class="fw-light"> Role </span>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="small">Create a new role using this form, make sure you fill them all.</p>
                            <form id="addRowForm" action="" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Role Name</label>
                                            <input id="addName" name="name" type="text" class="form-control"
                                                   placeholder="Role Name" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                    <tr>
                        @foreach(range(1, 4) as $index)
                            <th>Name</th>
                            <th style="width: 10%">Action</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions->chunk(4) as $chunk)
                        <tr>
                            @foreach($chunk as $permission)
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <div class="form-button-action">
                                        <a href=""
                                           class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" title=""
                                           data-original-title="Edit Task">
                                            <i class="fa fa-edit text-primary"></i>
                                        </a>
                                        <form action="" method="POST"
                                              class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-link btn-danger" data-bs-toggle="tooltip"
                                                    title="" data-original-title="Remove">
                                                <i class="fa fa-times text-danger"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endforeach
                            @if($chunk->count() < 4)
                                @for($i = 0; $i < 4 - $chunk->count(); $i++)
                                    <td></td>
                                    <td></td>
                                @endfor
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
@endsection

@section('add_scripts')
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        $(document).ready(function () {
            // Initialize DataTable
            var table = $('#roleTable').DataTable({
                "pageLength": 10,
                "responsive": true,
                "columnDefs": [
                    {"orderable": false, "targets": 2}, // Disable ordering for the Permissions column
                    {"orderable": false, "targets": 3}  // Disable ordering for the Actions column
                ]
            });

            // Handle form submission for adding a new role
            $("#addRowForm").submit(function (e) {
                e.preventDefault(); // Prevent the default form submission
                var form = $(this);

                $.ajax({
                    type: "POST",
                    url: form.attr("action"),
                    data: form.serialize(), // Serialize form data
                    success: function (response) {
                        // Assuming your backend returns the newly created role data
                        table.row.add([
                            response.id,
                            response.name,
                            response.permissions.join('<br>'), // Assuming permissions is an array
                            '<td>' +
                            '<div class="form-button-action">' +
                            '<a href="/roles/edit/' + response.id + '" class="btn btn-primary btn-sm">' +
                            '<i class="fas fa-edit"></i></a> || ' +
                            '<a href="/roles/show/' + response.id + '" class="btn btn-info btn-sm">' +
                            '<i class="fas fa-eye text-white"></i></a> || ' +
                            '<form action="/roles/destroy/' + response.id + '" method="POST" class="d-inline delete-form">' +
                            '@csrf @method("DELETE")' +
                            '<button type="button" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button>' +
                            '</form>' +
                            '</td>'
                        ]).draw(false);

                        $("#addRowModal").modal("hide"); // Hide the modal

                        // SweetAlert success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Role Added',
                            text: 'The new role has been added successfully!',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    },
                    error: function (xhr) {
                        // Handle error response
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while adding the role.',
                        });
                    }
                });
            });

            // Delete confirmation using SweetAlert
            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit the form if confirmed
                    }
                });
            });
        });
    </script>
@endsection
