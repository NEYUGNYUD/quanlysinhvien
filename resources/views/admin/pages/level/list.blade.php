@extends('admin.layout.master')
@section('title')
    Quyền admin
@endsection

@section('menu-name')
    Level
@endsection
@section('function-name')
    Danh sách quyền admin
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách quyền admin
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên quyền</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên quyền</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($levelsList as $level)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $level->name }}</td>
                            <td>{{ $level->description }}</td>
                            <td>{{ $level->created_at }}</td>
                            <td>{{ $level->updated_at }}</td>
                            <td>
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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