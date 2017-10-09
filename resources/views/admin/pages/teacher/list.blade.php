@extends('admin.layout.master')
@section('title')
    Giáo viên
@endsection

@section('menu-name')
    Giáo viên
@endsection
@section('function-name')
    Danh sách giáo viên
@endsection

@section('content')
    <div class="card mb-3 list-table">
        <div class="card-header">
            <i class="fa fa-table"></i> Bảng danh sách giáo viên
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Họ</th>
                        <th>Địa chỉ</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>SĐT</th>
                        <th>Số CMT</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Khoa</th>
                        <th>Thao tác</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Họ</th>
                        <th>Địa chỉ</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>SĐT</th>
                        <th>Số CMT</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Khoa</th>
                        <th>Thao tác</th>
                    </tr>
                    </tfoot>

                    <tbody>
                    @php $i = 1; @endphp
                    @foreach($teachersList as $teacher)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $teacher->code }}</td>
                            <td>{{ $teacher->first_name }}</td>
                            <td>{{ $teacher->last_name }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->dob }}</td>
                            <td>{{ $teacher->gender }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->passport }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->role->name}}</td>
                            <td>{{ $teacher->faculty->name }}</td>
                            <td>
                                <a href="{{ route('teachers.edit', ['teacher' => $teacher->code]) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
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
