@extends('admin.layout.master')
@section('title')
    Khoa toán
@endsection

@section('menu-name')
    Khoa toán
@endsection
@section('function-name')
    Thông tin khoa toán
@endsection

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách thông tin khoa toán
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tên khoa</th>
                        <th>Mã khoa</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Tên khoa</th>
                        <th>Mã khoa</th>
                        <th>Ngày tạo</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @foreach($faculty as $flty)
                        <tr>
                            <td>{{ $flty->name }}</td>
                            <td>{{ $flty->faculty_code }}</td>
                            <td>{{ $flty->created_at }}</td>
                            <td>{{ $flty->updated_at }}</td>
                            <td>
                                <a href="{{ route('faculties.edit', ['faculty' => $flty->slug])}}" class="edit-row"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection
