@extends('backend.layouts.app')

@section('title')
    | User Details
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    @can('user-list')
                        <a href="{{route('users.index')}}" class="btn btn-outline-success px-5 radius-30"> <i class="fa fa-list"> User Lists </i>  </a>
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
                    <div class="lead">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                    <div class="lead">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                    <div class="lead">
                        <strong>Password:</strong>
                        ********
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection

