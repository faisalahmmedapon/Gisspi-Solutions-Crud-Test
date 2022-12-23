
@extends('backend.layouts.app')

@section('title')
    | Role Details
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    @can('permission-list')
                        <a href="{{route('permissions.index')}}" class="btn btn-outline-success px-5 radius-30"> <i class="fa fa-list"> Permissions Lists </i>  </a>
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
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Permission
                            @can('permission-create')
                                <span class="float-right">
                        <a class="btn btn-outline-success px-5 radius-30" href="{{ route('permissions.index') }}">Back</a>

                    </span>
                            @endcan
                        </div>
                        <div class="card-body text-dark">
                            <div class="lead">
                                <strong>Name:</strong>
                                {{ $permission->name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection

