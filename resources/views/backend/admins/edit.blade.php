@extends('backend.layouts.app')

@section('title')
Admin Edit
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    {{-- <a href="{{route('admins.index')}}" class="btn btn-outline-success px-5 radius-30"> <i class="fa fa-list"> Admin Lists </i>  </a> --}}
                    <span class="badge bg-success"><a  href="{{route('admins.index')}}"> Admin Lists </a></span>

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
                <div class="col-12 col-sm-6 col-md-12 mx-auto">
                    <div class=" p-3">
                        <form action="{{route('admins.update', $admin->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $admin->name }}" id="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="email"> Email: </label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $admin->email }}" id="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="phone"> Phone: </label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone') }}" id="phone">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="password"> Password: </label>
                                        <input type="text" name="password" class="form-control"
                                            value="{{ old('password') }}" id="password">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="password_confirmation"> Confirm Password: </label>
                                        <input type="text" name="password_confirmation" class="form-control"
                                            value="{{ old('password_confirmation') }}" id="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="password_confirmation"> Role: </label>
                                        <select class="multiple-select select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true" name="roles[]">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <button type="submit" class="btn btn-success px-5"><i
                                                class="fa ">Submit</i></button>
                                    </div>
                                </div>
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
