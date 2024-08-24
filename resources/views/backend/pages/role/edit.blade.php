@extends('backend.layouts.app')
@section('title', 'Edit Role')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Role List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Role List</li>
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
                            <a href="{{ route('user-role.index') }}" class="card-title btn shadow-lg btn-sm float-left"><i
                                        class="fas fa-list"></i></a>
                            <div class="card-tools float-right">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('user-role.update', $role->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Role Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{$role->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="permission" class="col-sm-2 col-form-label">Permission</label>
                                    <div class="col-sm-10">
                                        @php $count = 0; @endphp
                                        <div class="row">
                                            @foreach($permissions as $permission)
                                                @if($count % 6 == 0 && $count != 0)
                                        </div>
                                        <div class="row">
                                            @endif
                                            <div class="col-md-2">
                                                <div class="form-group clearfix">
                                                    <div class="icheck-danger d-inline">
                                                        <input type="checkbox" id="permissions{{$permission->id}}"
                                                               name="permissions[]" value="{{$permission->name}}"
                                                               @foreach($role->permissions as $rolePermission)
                                                                   @if($rolePermission->name == $permission->name)
                                                                       checked
                                                                @endif
                                                                @endforeach
                                                        >
                                                        <label for="permissions{{$permission->id}}">{{$permission->name}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $count++; @endphp
                                            
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-1">
                                        <button type="submit" class="btn btn-primary">Update Role</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

