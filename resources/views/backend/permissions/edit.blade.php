@extends('backend.layouts.app')

@section('title')
    | Permissions Edit
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    <a href="{{route('permissions.index')}}" class="btn btn-outline-success px-5 radius-30"> <i
                            class="fa fa-list"> Permissions Lists </i> </a>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
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
            <div class="row  py-5">

                <div class="col-12 col-sm-6 col-md-8 mx-auto">
                    <div class=" p-3">
                        <form action="{{route('permissions.update', $permission->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group p-2">
                                <label for="name"> Name: </label>
                                <input type="text" name="name" class="form-control" value="{{$permission->name}}"
                                       id="name">
                            </div>
                            <div class="form-group p-2">
                                <button type="submit" class="btn btn-success px-5"><i class="fa ">Submit</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection
