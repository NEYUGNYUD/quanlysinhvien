@extends('admin.layout.master')
@section('title')
    Chức vụ giáo viên
@endsection

@section('menu-name')
    Chức vụ giáo viên
@endsection

@section('function-name')
    Danh sách chức vụ giáo viên
@endsection

@section('content')
    <div class="card mb-3">

        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách chức vụ giáo viên
            <a href="{{ route('roles.create') }}" style="float: right;"><button type="button" class="btn-primary" name="button">Thêm mới</button></a>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($rolesList as $role)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ route('roles.edit', ['role' => $role->slug])}}" class="edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @php ++$i; @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection
