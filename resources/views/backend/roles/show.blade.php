
@extends('backend.layouts.app')

@section('title')
    Role Details
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    @can('role-list')
                        <a href="{{route('roles.index')}}" class="btn btn-outline-success px-5 radius-30"> <i class="fa fa-list"> Role Lists </i>  </a>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row  py-5">
                <div class="col-12 col-sm-6 col-md-8 mx-auto shadow p-5">
                    <div class="card-body">
                        <div class="lead">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                        <div class="lead">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $permission)
                                    <label class="badge badge-success text-dark">{{ $permission->name }}</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection

