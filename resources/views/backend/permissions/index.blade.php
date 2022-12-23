

@extends('backend.layouts.app')

@section('title')
    Permissions
@endsection



@push('css')

@endpush

@section('content')


    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Permissions </h6>
        <span class="badge bg-success"><a href="{{ route('permissions.create') }}"> New Permissions </a></span>

    </div>
    <hr/>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($permissions as $key => $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>  <span class="badge bg-success"> {{ $permission->name }} </span> </td>

                            <td class="d-flex">
                                @can('permission-list')
                                    <a href="{{ route('permissions.edit',$permission->id) }}" class="btn btn-sm"><i
                                            class="lni lni-highlight-alt"></i></a>
                                @endcan
                                @can('permission-edit')
                                    <a href="{{ route('permissions.show',$permission->id) }}" class="btn btn-sm"><i
                                            class="lni lni-eye"></i></a>
                                @endcan
                                @can('permission-delete')
                                    <form method="POST"
                                          action="{{route('permissions.destroy',$permission->id)}}"
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
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection


@push('js')

@endpush

