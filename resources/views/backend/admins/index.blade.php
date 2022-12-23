@extends('backend.layouts.app')

@section('title')
    Admins
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Admins </h6>
        <span class="badge bg-success"><a href="{{ route('admins.create') }}"> New Admin </a></span>
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
                            <th>Email</th>
                            <th>Role Names</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $key => $admin)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>

                                    @foreach ($admin->getRoleNames() as $adminName)
                                          <span class="badge bg-success"> {{ $adminName ?? '' }} </span>
                                    @endforeach

                                </td>
                                <td class="d-flex">
                                    @can('admin-list')
                                        <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-sm"><i
                                                class="lni lni-highlight-alt"></i></a>
                                    @endcan
                                    @can('admin-edit')
                                        <a href="{{ route('admins.show', $admin->id) }}" class="btn btn-sm"><i
                                                class="lni lni-eye"></i></a>
                                    @endcan
                                    @can('admin-delete')
                                        <form method="POST" action="{{ route('admins.destroy', $admin->id) }}"
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
                            <th>Email</th>
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
