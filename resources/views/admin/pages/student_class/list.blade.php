@extends('admin.layout.master')
@section('title')
    Lớp học
@endsection

@section('menu-name')
    Lớp học
@endsection
@section('function-name')
    Danh sách lớp học
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách lớp học
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên lớp</th>
                        <th>Khoa</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên lớp</th>
                        <th>Khoa</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($classesList as $class)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $class->name }}</td>
                            <td>{{ $class->faculty->name }}</td>
                            <td>
                                <a href="{{ route('classes.edit', ['classes' => $class->slug])}}" class="edit-row"><i class="fa fa-pencil"></i></a>
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
