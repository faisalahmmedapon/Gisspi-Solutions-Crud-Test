@extends('backend.layouts.app')

@section('title')
    Event Edit
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 col-md-12 col-lg-12 d-flex justify-content-end">
                    <span class="badge bg-success"><a href="{{ route('events.index') }}"> Event Lists </a></span>

                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="row  py-5">
                <div class="col-12 col-sm-6 col-md-12 mx-auto">
                    <div class=" p-3">
                        <form action="{{ route('events.update',$event->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $event->name }}" id="name">
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('name') ? $errors->first('name') : '' }}</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="address">Address: </label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ $event->address }}" id="address">
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('address') ? $errors->first('address') : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="date">Date: </label>
                                        <input type="date" name="date" class="form-control"
                                            value="{{ $event->date }}" id="date">
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('date') ? $errors->first('date') : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="timings">Timings: </label>
                                        <input type="time" name="timings" class="form-control"
                                            value="{{ $event->timings }}" id="timings">
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('timings') ? $errors->first('timings') : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="fees">Fees: </label>
                                        <input type="number" name="fees" class="form-control"
                                            value="{{ $event->fees }}" id="fees">
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('fees') ? $errors->first('fees') : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="description">Description: </label>
                                        <textarea name="description"  class="form-control" id="description"> {{ $event->description }} </textarea>
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('description') ? $errors->first('description') : '' }}</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group p-2">
                                        <label for="note">Note: </label>
                                        <textarea name="note" class="form-control" id="note"> {{ $event->note }} </textarea>
                                        <div style='color:red; padding: 0 5px;'>
                                            {{ $errors->has('note') ? $errors->first('note') : '' }}</div>
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

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
