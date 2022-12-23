@extends('backend.layouts.app')

@section('title')
    Events
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Events </h6>
        <span class="badge bg-success"><a href="{{ route('events.create') }}"> New Events </a></span>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Timings</th>
                            <th>Fees</th>
                            <th>Note</th>
                            <th>Role Names</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $key => $event)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->address }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->timings }}</td>
                                <td>{{ $event->fees }}</td>
                                <td>{{ $event->note }}</td>

                                <td class="d-flex">
                                    @can('event-edit')
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm"><i
                                                class="lni lni-highlight-alt"></i></a>
                                    @endcan
                                    @can('event-delete')
                                        <form method="POST" action="{{ route('events.destroy', $event->id) }}"
                                            onsubmit="return confirm('Are you sure ?')">
                                            @csrf
                                            @method('DELETE')
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm" type="submit"><i class="lni lni-cross-circle"></i>
                                            </button>

                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Timings</th>
                            <th>Fees</th>
                            <th>Note</th>
                            <th>Role Names</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection


@push('js')
@endpush
