@extends('backend.layouts.app')
@section('title', 'Role Show')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Role Show</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb item"><a href="{{route('user-role.index')}}">Role List</a></li>
                        <li class="breadcrumb item active">Role Show</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header p-2">
                            <h3 class="card-title text-bold">Role Show</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered table-responsive-lg">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @foreach ($role->permissions as $index => $permission)
                                            <span class="badge badge-info badge-btn">{{ $permission->name }}</span>
                                            @if (($index + 1) % 8 == 0)
                                                <br>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('user-role.edit', $role->id) }}"
                                           class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('user-role.destroy', $role->id) }}"
                                           class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer p-0">
                            <!-- Pagination -->
                            <div class="d-flex m-2 p-0 justify-content-center">
                                <!-- /.pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
